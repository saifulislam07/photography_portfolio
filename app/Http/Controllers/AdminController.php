<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Admin;
use App\Models\Category;
use App\Models\contactme;
use App\Models\Gallery;
use App\Models\User;
use App\Models\Payment;
use App\Models\story;
use App\Models\Video;
use App\Models\WebGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function index(Request $request)
    {
        if ($request->session()) {

            $story = story::count();
            $contactemail = contactme::count();
            $categorycount = Category::count();
            $galleryimage = WebGallery::count();
            $galleryvideo = Video::count();
            $international = Achievement::where('type', 'International')->count();
            $national = Achievement::where('type', 'National')->count();

            return view('admin/pages/dashboard', get_defined_vars());
        } else {
            $request->session()->flash('error', 'You Can not access this page before login');
            return view('admin.include.login');
        }
        return view('admin.include.login');
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


    public function contactsmail(Request $request)
    {
        $allcontactme = contactme::all();
        return view('admin.pages.allmessage', get_defined_vars());
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



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function userlist(Admin $admin)
    {
        $users = DB::table('users')->get();
        return view('admin.pages.userList', get_defined_vars());
    }



    public function view_member(Admin $admin, $id)
    {
        $userDetails = User::where('id', $id)->first();

        return view('admin.pages.viewMember', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }





    public function changepass()
    {
        return view('admin.pages.changepapss', get_defined_vars());
    }

    public function passstore(Request $request)
    {
        $request->validate([
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);


        session()->flash('success', 'Password change successfully.');
        return redirect('change-password');
    }
}
