<?php

namespace App\Http\Controllers;

use App\Models\ClientMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allmessage = ClientMessage::where('client_id', Auth::user()->id)->get();
        return view('admin.pages.clientMessage.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.pages.clientMessage.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'message' => 'required',
        ]);

        $message = new ClientMessage();
        $message->message = $request->message;
        $message->client_id = Auth::user()->id;
        $message->client_name = Auth::user()->name;
        $message->save();

        session()->flash('success', 'Message stored Successfully, Admin will approve it');
        return redirect('clientMessage');
    }

    /**
     * Display the specified resource.
     */
    public function show(ClientMessage $clientMessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClientMessage $clientMessage)
    {

        return view('admin.pages.clientMessage.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'message' => 'required',
        ]);

        $message = ClientMessage::find($id);
        $message->message = $request->message;
        $message->client_id = Auth::user()->id;
        $message->client_name = Auth::user()->name;
        $message->status = 'Inactive';
        $message->save();

        session()->flash('success', 'Message updated Successfully, Admin will approve it');
        return redirect('clientMessage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClientMessage $clientMessage)
    {
        //
    }
}
