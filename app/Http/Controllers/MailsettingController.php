<?php

namespace App\Http\Controllers;

use App\Models\Mailsetting;
use Illuminate\Http\Request;

class MailsettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mail = Mailsetting::find(1);

        return view('admin.pages.email.mail', get_defined_vars());
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
    public function show(Mailsetting $mailsetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mailsetting $mailsetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mailsetting $mailsetting)
    {


        $data = $request->validate([
            'mail_transport'  => 'required',
            'mail_host'       => 'required',
            'mail_port'       => 'required',
            'mail_username'   => 'required',
            'mail_password'   => 'required',
            'mail_encryption' => 'required',
            'mail_from'       => 'required',
        ]);

        $mailsetting->update($data);
        return redirect()->back()->withSuccess('SMTP  updated !!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mailsetting $mailsetting)
    {
        //
    }
}
