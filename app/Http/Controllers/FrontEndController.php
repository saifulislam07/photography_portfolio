<?php

namespace App\Http\Controllers;

use App\Models\FrontEnd;
use App\Models\story;
use App\Models\Aboutme;
use App\Models\Achievement;
use App\Models\Category;
use App\Models\Client;
use App\Models\Commercial;
use App\Models\medialink;
use App\Models\Publication;
use App\Models\Socialmedia;
use App\Models\TearSheet;
use App\Models\Video;
use App\Models\WebGallery;
use Illuminate\Http\Request;
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

    public function imageSorting($id, $category_name)
    {
        $websetting = websetup();
        $aboutme = Aboutme::first();
        $socialMedia = Socialmedia::first();
        $title = 'Buy Photo';

        if($id !=0 ){
            $forsale = WebGallery::orderBy('id', 'desc')->where('category', $id)->where('status', '1')->paginate(12);
        }else{

            $forsale = WebGallery::orderBy('id', 'desc')->where('status', '1')->paginate(12);
        }

        $categorys = Category::orderBy('title', 'asc')->get();
        return view('frontend.pages.buyphoto', get_defined_vars());
    }

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
        $websetting = websetup();
        $aboutme = Aboutme::first();
        $socialMedia = Socialmedia::first();
        $title = 'Buy Photo';
        $forsale = WebGallery::orderBy('id', 'desc')->where('status', '1')->paginate(12);

        $categorys = Category::orderBy('title', 'asc')->get();
        return view('frontend.pages.buyphoto', get_defined_vars());
    }

    public function buyPhotoDetails($id)
    {
        $websetting = websetup();
        $aboutme = Aboutme::first();
        $socialMedia = Socialmedia::first();
        $title = 'Buy Photo Details';

        $forsale = WebGallery::find($id);

        $categorys = Category::orderBy('title', 'asc')->get();
        return view('frontend.pages.buyphotodetails', get_defined_vars());
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

        $mypublication = Publication::paginate(9);

        return view('frontend.pages.mypublications', get_defined_vars());
    }

    public function tearSheet()
    {
        $title = 'Tear Sheet';
        $websetting = websetup();
        $socialMedia = Socialmedia::first();
        $tearSheet = TearSheet::paginate(12);
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
        $title = 'Video Gallery';
        $socialMedia = Socialmedia::first();
        $websetting = websetup();
        $myvideos = Video::orderBy('id', 'desc')->paginate(12);
        $title = 'Video Gallery';
        return view('frontend.pages.myvideogallery', get_defined_vars());
    }

    public function photostory()
    {
        $lastStory = story::where('status', 1)->orderBy('id', 'DESC')->paginate(3);
        $title = 'Photo Story';
        $socialMedia = Socialmedia::first();
        $websetting = websetup();
        $aboutme = Aboutme::first();
        // $allstory = story::where('status', 1)->get();

        $allcategorycount = story::select("stories.id", "stories.title", "categories.title as catname", DB::raw('count(stories.category_id) as total'))
            ->join("categories", "categories.id", "=", "stories.category_id")
            ->groupBy("stories.id", "stories.title", "categories.title")
            ->paginate(4);

        return view('frontend.pages.photostory', get_defined_vars());
    }


    public function photostoryDetails($id)
    {
        $lastStory = story::find($id);
        $title = 'Photo Story Details';
        $socialMedia = Socialmedia::first();
        $websetting = websetup();
        $aboutme = Aboutme::first();

        return view('frontend.pages.photostorydetails', get_defined_vars());
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
        $recentimages = WebGallery::orderBy('id', 'desc')->where('status', '1')->take(12)->get();

        $title = 'HOME';
        // dd($recentimages);
        return view('frontend.pages.home', get_defined_vars());
    }


    public function contacts()
    {
        $title = 'CONTACT ME';
        $websetting = websetup();
        $aboutme = Aboutme::first();
        $socialMedia = Socialmedia::first();

        return view('frontend.pages.contact-me', get_defined_vars());
        return view('frontend.pages.contacts', get_defined_vars());
    }


    public function contact()
    {
        $aboutme = Aboutme::first();
        $socialMedia = Socialmedia::first();
        return view('frontend.pages.contact', get_defined_vars());
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
