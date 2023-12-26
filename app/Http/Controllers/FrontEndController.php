<?php

namespace App\Http\Controllers;

use App\Models\FrontEnd;
use App\Models\Rules;
use App\Models\Job;
use App\Models\User;
use App\Models\Apply;
use App\Models\story;
use App\Models\Aboutme;
use App\Models\Achievement;
use App\Models\Album;
use App\Models\medialink;
use App\Models\Slider;
use App\Models\Socialmedia;
use App\Models\Video;
use App\Models\WebGallery;
use App\Models\webSetup;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Hash;
use DB;
use Auth;

//namespace App\Http\Controllers\Auth;

class FrontEndController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function seekerlogin(Request $request)
    {

        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');
        $urlid = $request->post('urlid');
        if (Auth::attempt($credentials)) {
            return redirect('jobView/' . $urlid);
        } else {
            return redirect('jobView/' . $urlid);
        }
    }


    public function aboutsme()
    {
        $socialMedia = Socialmedia::first();
        $aboutme = Aboutme::first();
        return view('frontend.pages.aboutsme', get_defined_vars());
    }

    public function buyphoto()
    {
        $aboutme = Aboutme::first();
        $socialMedia = Socialmedia::first();
        return view('frontend.pages.buyphoto', get_defined_vars());
    }

    public function portfolio()
    {
        $socialMedia = Socialmedia::first();
        $aboutme = Aboutme::first();
        $allmedialink = medialink::where('status', 1)->get();
        return view('frontend.pages.portfolio', get_defined_vars());
    }


    public function myachievement()
    {
        $aboutme = Aboutme::first();
        $socialMedia = Socialmedia::first();
        $internationalaward = Achievement::where('type', 'International')->get();
        $nationalaward = Achievement::where('type', 'National')->get();

        return view('frontend.pages.myachievement', get_defined_vars());
    }

    public function mygallery()
    {
        $aboutme = Aboutme::first();
        $socialMedia = Socialmedia::first();
        $allcategorycount = WebGallery::select("web_galleries.*", "categories.title as catname", DB::raw('count("category") as total'))
            ->join("categories", "categories.id", "=", "web_galleries.category")
            ->groupBy("category")
            ->get();

        //  dd($allcategorycount);
        $allrecentimages = WebGallery::orderBy('web_galleries.id', 'desc')
            ->join("categories", "categories.id", "=", "web_galleries.category")
            ->where('web_galleries.status', 1)
            ->get();
        //  dd($allrecentimages);
        return view('frontend.pages.mygallery', get_defined_vars());
    }

    public function myvideogallery()
    {
        $aboutme = Aboutme::first();
        $socialMedia = Socialmedia::first();
        $allcategorycount = Video::select("videos.*", "categories.title as catname", DB::raw('count("category_id") as total'))
            ->join("categories", "categories.id", "=", "videos.category_id")
            ->groupBy("category_id")
            ->get();

        //  dd($allcategorycount);
        $allrecentimages = Video::orderBy('videos.id', 'desc')
            ->select('videos.*', 'categories.title as catname')
            ->join("categories", "categories.id", "=", "videos.category_id")
            ->where('videos.status', '1')
            ->get();
        //  dd($allrecentimages);
        return view('frontend.pages.myvideogallery', get_defined_vars());
    }

    public function photostory()
    {
        $LastStory = story::where('status', 1)->orderBy('id', 'DESC')->first();
        $aboutme = Aboutme::first();
        $socialMedia = Socialmedia::first();
        $allstory = story::where('status', 1)->get();

        $allcategorycount = story::select("stories.*", "categories.title as catname", DB::raw('count("category_id") as total'))
            ->join("categories", "categories.id", "=", "stories.category_id")
            ->groupBy("category_id")
            ->get();
        // dd($allcategorycount->all());
        return view('frontend.pages.photostory', get_defined_vars());
    }
    public function viewstory($id)
    {
        $LastStory = story::where('status', 1)->where('id', $id)->first();

        $aboutme = Aboutme::first();
        $socialMedia = Socialmedia::first();
        $allstory = story::where('status', 1)->get();

        $allcategorycount = story::select("stories.*", "categories.title as catname", DB::raw('count("category_id") as total'))
            ->join("categories", "categories.id", "=", "stories.category_id")
            ->groupBy("category_id")
            ->get();
        // dd($allcategorycount->all());
        return view('frontend.pages.photostory', get_defined_vars());
    }

    public function index()
    {

        $aboutme = Aboutme::first();
        $websetting = webSetup::first();
        // dd($websetting);
        $socialMedia = Socialmedia::first();
        $slidersImages = Slider::select('*')
            ->where('status', 1)->where('type', 1)
            ->get();
        //         dd($slidersImages);
        $recentimages = WebGallery::orderBy('id', 'desc')->take(20)->get();

        $title = 'HOME';
        // dd($recentimages);
        return view('frontend.pages.home', get_defined_vars());
    }

    public function principle()
    {
        return view('frontend.pages.principles', get_defined_vars());
    }
    public function contacts()
    {
        $aboutme = Aboutme::first();
        $socialMedia = Socialmedia::first();
        return view('frontend.pages.contacts', get_defined_vars());
    }

    public function constitution()
    {
        return view('frontend.pages.constitution', get_defined_vars());
    }

    public function contact()
    {
        $aboutme = Aboutme::first();
        $socialMedia = Socialmedia::first();
        return view('frontend.pages.contact', get_defined_vars());
    }

    public function gallery()
    {
        $aboutme = Aboutme::first();
        $socialMedia = Socialmedia::first();
        $galleryImages = DB::table('rules')->first();
        return view('frontend.pages.gallery', get_defined_vars());
    }

    public function OurRules()
    {
        $rulesdetails = DB::table('rules')->first();
        return view('frontend.pages.OurRules', get_defined_vars());
    }

    // public function alljob()
    // {
    //     $allJobs = DB::table('jobs')
    //         ->select('jobs.*', 'users.image', 'users.url', 'users.address')
    //         ->join('users', 'users.id', '=', 'jobs.user_id')
    //         ->where('jobs.status', 1)
    //         ->get();
    //     return view('frontend.pages.job', get_defined_vars());
    // }

    // public function jobView(Request $request, $id)
    // {
    //     $userid = auth()->user()->id;

    //     $JobDetails = DB::table('jobs')
    //         ->select('jobs.*', 'users.image', 'users.url', 'users.address', 'users.name as comName', 'users.id as comId')
    //         ->join('users', 'users.id', '=', 'jobs.user_id')
    //         ->where('jobs.id', $id)
    //         ->first();
    //     $applicationinfo = Apply::where([
    //         'user_id' => $userid,
    //         'id' => $id,
    //     ])->first();
    //     $urlid = $id;
    //     return view('frontend.pages.jobView', get_defined_vars());
    // }

    public function create()
    {
    }

    public function store(Request $request)
    {
        //
    }

    public function show(FrontEnd $frontEnd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FrontEnd  $frontEnd
     * @return \Illuminate\Http\Response
     */
    public function edit(FrontEnd $frontEnd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FrontEnd  $frontEnd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FrontEnd $frontEnd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FrontEnd  $frontEnd
     * @return \Illuminate\Http\Response
     */
    public function destroy(FrontEnd $frontEnd)
    {
        //
    }
}
