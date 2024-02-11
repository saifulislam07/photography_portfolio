<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Order;
use App\Models\Invoice;
use App\Models\Suborder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BkashPayment extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function bkashPayment(Request $request)
    {


        $totalPrice = 0;

        if ($request->amount == '') {
            return redirect()->back()->with('error', $response['message'] ?? 'amount can not be null.');
        }
        if ($request->trnx_number == '') {
            return redirect()->back()->with('error', $response['message'] ?? 'Trxid can not be null.');
        }

        if ($request->amount == 0) {
            return redirect()->back()->with('error', $response['message'] ?? 'Something went wrong.');
        }

        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->invoice_id = null;
        $order->status = 'initialised';
        $order->save();

        $item_details = session('cart');


        foreach ($item_details as $item) {
            $totalPrice += $item['quantity'] * $item['price'];
        }


        $invoice = new Invoice();
        $invoice->order_id = $order->id;
        $invoice->payment_type = 'Bkash';
        $invoice->price =  $totalPrice;
        $invoice->currency = 'BDT'; // should be dynamic
        $invoice->customer_email = Auth::user()->email;
        $invoice->customer_id = Auth::user()->id;
        $invoice->country_code = 'BDT'; // should be dynamic
        $invoice->payment_id = $request->trnx_number;
        $invoice->payment_status = 'PENDING';
        $invoice->save();

        $order = Order::find($order->id);
        $order->invoice_id =  $invoice->id;
        $order->save();

        foreach ($item_details as $item) {
            $suborder = new Suborder();
            $suborder->order_id = $order->id;
            $suborder->product_id = $item['id'];
            $suborder->quantity = $item['quantity'];
            $suborder->price = $item['price'];
            $suborder->save();
        }
        Session::forget('cart');



        return redirect()->route('dashboard')->with('success', $response['message'] ?? 'Transaction complete.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
