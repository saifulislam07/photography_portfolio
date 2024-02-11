<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function paymentView($id)
    {
        // $invoice_details = Invoice::where('invoices.customer_id', Auth::user()->id)
        //     ->where('invoices.id', $id)
        //     ->join('orders', 'orders.invoice_id', '=', 'invoices.id')
        //     ->join('suborders', 'suborders.order_id', '=', 'orders.id')
        //     ->get();


        $invoice_details = Invoice::where('customer_id', auth()->id())
            ->with('orders.suborders')
            ->find($id);



        // dd($invoice_details->toArray());
        return view('admin.pages.buyer.paymentView', get_defined_vars());
    }


    public function paymentList()
    {
        $invoice = Invoice::where('customer_id', Auth::user()->id)->get();
        return view('admin.pages.buyer.paymentList', get_defined_vars());
    }

    public function index()
    {
        $userInfos = User::find(Auth::user()->id);
        return view('admin.pages.buyer.profile', get_defined_vars());
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
    public function update(Request $request,  $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);


        $user = User::find($id);
        $user->name = $validatedData['name'];
        $user->phone = $validatedData['phone'];

        $user->save();

        return redirect()->back()->with('success', 'User profile updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
