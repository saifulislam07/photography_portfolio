<?php

namespace App\Http\Controllers;

use App\Models\contactme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContactmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }



    public function storestorycontact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
            'email' => 'required|email',
            'message' => 'required|max:1000',
        ]);


        $message = new contactme();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        // $message->message = $requestsmmessage;
        $message->story_id = $request->story_id;
        $message->save();

        return Redirect::back()->withErrors(['success' => 'Your message has been successfully submitted, Photographer will contact you as soon as possible, Thank you.']);
    }


    public function storestorymessage(Request $request)
    {


        $this->validate($request, [
            'name' => 'required|max:100',
            'email' => 'required|email',
            'message' => 'required|max:1000',
        ]);

        // $conditionList = array(
        //     '<?php', 'post', 'unescape', 'javascript', 'document.write', '$_SERVER', 'DOCUMENT_ROOT', '$_FILES', '$_POST', 'is_writable', 'HTTP_HOST', 'submit',
        //     'php_uname', 'src', 'url',
        //     'tmp_name'
        // );
        // $fileDta = explode(' ', $request->message);


        // foreach ($fileDta as $key => $value) :
        //     if (in_array($value, $conditionList)) {
        //         die('d');
        //         $request['message'] = 'Not allawod text';
        //     }
        // endforeach;

        // dd($request['message']);
        $message = new contactme();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        // $message->message = $requestsmmessage;
        $message->story_id = $request->story_id;
        $message->save();

        return Redirect::back()->withErrors(['success' => 'Your message has been successfully submitted, Photographer will contact you as soon as possible, Thank you.']);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contactme  $contactme
     * @return \Illuminate\Http\Response
     */
    public function show(contactme $contactme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contactme  $contactme
     * @return \Illuminate\Http\Response
     */
    public function edit(contactme $contactme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contactme  $contactme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contactme $contactme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contactme  $contactme
     * @return \Illuminate\Http\Response
     */
    public function destroy(contactme $contactme)
    {
        //
    }

    public function contactsemail(Request $request)
    {
        $contactmes = contactme::get();
        return view('admin.pages.contactsmail.contact', get_defined_vars());
    }
}
