<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Order;
use App\Models\Suborder;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PayPalController extends Controller
{

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('frontend.pages.paypal');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function payment(Request $request)
    {

        if ($request->total == 0) {
            return redirect()->back()->with('error', $response['message'] ?? 'Something went wrong.');
        }

        $item_details = session('cart');


        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->invoice_id = null;
        $order->status = 'initialised';
        $order->save();

        Session::put('orderId', $order->getKey());

        $totalPrice = 0;

        foreach ($item_details as $item) {
            $price = (float) $item['price'];
            $quantity = (int) $item['quantity'];
            $subtotal = $price * $quantity;
            $totalPrice += $subtotal;
        }

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('paypal.payment.success'),
                "cancel_url" => route('paypal.payment/cancel'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" =>  $totalPrice
                    ]
                ]
            ]
        ]);



        if (isset($response['id']) && $response['id'] != null) {

            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }

            return redirect()
                ->route('cancel.payment')
                ->with('error', 'Something went wrong.');
        } else {
            return redirect()
                ->route('create.payment')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function paymentCancel()
    {

        return redirect()
            ->route('cart')
            ->with('error', $response['message'] ?? 'You have canceled the transaction.');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function paymentSuccess(Request $request)
    {
        $totalPrice = 0;
        $item_details = session('cart');

        $orderId = Session::get('orderId');

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);


        foreach ($item_details as $item) {
            $totalPrice += $item['quantity'] * $item['price'];
        }

        $order = Order::find($orderId);
        $order->status = 'processing';


        if (isset($response['status']) && $response['status'] == 'COMPLETED') {

            $invoice = new Invoice();
            $invoice->price =  $totalPrice;
            $invoice->currency = 'USD'; // should be dynamic
            $invoice->customer_email = Auth::user()->email;
            $invoice->customer_id = Auth::user()->id;
            $invoice->country_code = 'USD'; // should be dynamic
            $invoice->payment_id = $response['id'];
            $invoice->payment_status = 'COMPLETED';
            $invoice->save();

            $order->invoice_id = $invoice->getKey();
            $order->status = 'pending';
            $order->save();

            // dd($item_details);

            foreach ($item_details as $item) {
                $suborder = new Suborder();
                $suborder->order_id = $orderId;
                $suborder->product_id = $item['id'];
                $suborder->quantity = $item['quantity'];
                $suborder->price = $item['price'];
                $suborder->save();
            }

            Session::forget('cart');

            return redirect()
                ->route('dashboard')
                ->with('success', 'Transaction complete.');
        } else {
            return redirect()
                ->route('cart')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }
}
