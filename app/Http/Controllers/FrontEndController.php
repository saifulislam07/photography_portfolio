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
use App\Models\Client;
use App\Models\Commercial;
use App\Models\medialink;
use App\Models\Publication;
use App\Models\Slider;
use App\Models\Socialmedia;
use App\Models\TearSheet;
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
        $websetting = websetup();
        $socialMedia = Socialmedia::first();
        $aboutme = Aboutme::first();
        $title = 'About Me';
        return view('frontend.pages.aboutsme', get_defined_vars());
    }

    public function buyphoto()
    {
        $aboutme = Aboutme::first();
        $socialMedia = Socialmedia::first();
        return view('frontend.pages.buyphoto', get_defined_vars());
    }


    public function myclients()
    {
        $title = 'My Clients';
        $websetting = websetup();
        $aboutme = Aboutme::first();
        $socialMedia = Socialmedia::first();
        $clients = Client::get();
        return view('frontend.pages.clients', get_defined_vars());
    }

    public function myachievement()
    {
        $title = 'My Achievement';
        $websetting = websetup();
        $aboutme = Aboutme::first();
        $socialMedia = Socialmedia::first();
        $internationalaward = Achievement::where('type', 'International')->get();
        $nationalaward = Achievement::where('type', 'National')->get();

        return view('frontend.pages.myachievement', get_defined_vars());
    }

    public function mypublications()
    {
        $title = 'My Publications';
        $websetting = websetup();
        $socialMedia = Socialmedia::first();

        $mypublication = Publication::get();

        return view('frontend.pages.mypublications', get_defined_vars());
    }

    public function tearSheet()
    {
        $title = 'Tear Sheet';
        $websetting = websetup();
        $socialMedia = Socialmedia::first();
        $tearSheet = TearSheet::get();
        return view('frontend.pages.tear-sheet', get_defined_vars());
    }

    public function myPortfolioLinks()
    {
        $title = 'Portfolio';
        $websetting = websetup();
        $socialMedia = Socialmedia::first();
        $medialink =  medialink::where('status', 1)->get();
        return view('frontend.pages.portfolio', get_defined_vars());
    }



    public function mycommercials()
    {
        $title = 'My Commercials';
        $websetting = websetup();
        $socialMedia = Socialmedia::first();

        $mycommercials = Commercial::get();

        return view('frontend.pages.mycommercials', get_defined_vars());
    }

    public function mycommercialsDetails($id)
    {
        $title = 'My Commercials Details';
        $websetting = websetup();
        $socialMedia = Socialmedia::first();

        $mycommercials = Commercial::find($id);

        return view('frontend.pages.mycommercials-details', get_defined_vars());
    }

    public function mygallery()
    {
        $title = 'Photo Gallery';
        $websetting = websetup();
        $aboutme = Aboutme::first();
        $socialMedia = Socialmedia::first();

        $allcategorycount = WebGallery::select("categories.title as catname", DB::raw('COUNT(web_galleries.category) as total'))
            ->join("categories", "categories.id", "=", "web_galleries.category")
            ->where('web_galleries.status', '1')
            ->groupBy("web_galleries.category")
            ->get();


        // dd($allcategorycount);
        $allrecentimages = WebGallery::orderBy('web_galleries.id', 'desc')
            ->join("categories", "categories.id", "=", "web_galleries.category")
            ->where('web_galleries.status', 1)
            ->get();
        //  dd($allrecentimages);
        return view('frontend.pages.mygallery', get_defined_vars());
    }

    public function myvideogallery()
    {
        $socialMedia = Socialmedia::first();
        $websetting = websetup();
        $myvideos = Video::orderBy('id', 'desc')->paginate(12);
        $title = 'Video Gallery';
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
        $websetting = websetup();
        $socialMedia = Socialmedia::first();

        // dd($slidersImages);
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
