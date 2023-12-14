<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Hash;
use Auth;
use DB;

class RegistrationController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('frontend.pages.signin', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit_profile(Request $request) {
        $userid = auth()->user()->id;
        if (!empty($request->image)) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg|max:500',
            ]);
            $image = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $image);
        }else{
            $image = $request->oldImage;
        }
        
        if (!empty($request->cv)) {
            $request->validate([
                'cv'   => 'mimes:doc,pdf,docx'
            ]);
            $cv = time() . '.' . $request->cv->extension();
            $request->cv->move(public_path('cv'), $cv);
            
//            $file = $request->file('cv');
//            $filename = time() . '.' . $request->file('cv')->extension();
//            $filePath = public_path() . '/cv/';
//            $file->move($filePath, $filename);
        }else{
            $filePath = $request->oldCv;
        }
        
        
        $data['name'] = $request->input('name');
        $data['email'] = $request->input('email');
        $data['phone'] = $request->input('phone');
        $data['dob'] = $request->input('dob');
        $data['area'] = $request->input('area');
        $data['blood'] = $request->input('blood');
        $data['image'] = $image;
        $data['cv'] = $cv;
        
        
        
        User::where('id', $userid)->update($data);

        session()->flash('success', 'User Status Updated Successfully.');

        return redirect('/profile');
    }

    public function edit_job(Request $request) {
        $userid = auth()->user()->id;
        $data['company'] = $request->input('company');
        $data['c_designation'] = $request->input('c_designation');
        User::where('id', $userid)->update($data);
        session()->flash('success', 'User Status Updated Successfully.');

        return redirect('/profile');
    }
    public function edit_education(Request $request) {
        $userid = auth()->user()->id;
        $data['education'] = $request->input('education');
        $data['e_uv'] = $request->input('e_uv');
        $data['e_year'] = $request->input('e_year');
        User::where('id', $userid)->update($data);
        session()->flash('success', 'User Status Updated Successfully.');

        return redirect('/profile');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required|max:255',
            'phone' => 'required|numeric|min:8|unique:users,phone',
            'email' => 'unique:users,email|required',
            'password' => 'min:6|required_with:password_confirmation|same:confirm_password',
        ]);



        $registration = new User();
        $registration->name = $request->name;
        $registration->phone = $request->phone;
        $registration->email = $request->email;
        $registration->designation = "Member";
        $registration->type = 2;

        $registration->password = Hash::make($request->password);
        $registration->save();

        $credentials = $request->only('email', 'password');


//        echo "<pre>";
//        print_r($credentials);
//        die;

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin');
        } else {
            die("not login");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration) {
        //
    }
    public function myCv(Registration $registration) {
       $userid = auth()->user()->id;
        $userDetails = User::where('id', $userid)->first();
       
        return view('admin.pages.myCv', get_defined_vars());
    }

    public function profile() {
        $userid = auth()->user()->id;
        $userDetails = User::where('id', $userid)->first();
        // dd($userDetails);
        return view('admin.pages.profile', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration) {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registration $registration) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration) {
        //
    }

}
