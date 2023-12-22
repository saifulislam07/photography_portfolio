<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleriImages = DB::table('videos')
            ->select('videos.*', 'categories.title as cname')
            ->join('categories', 'categories.id', '=', 'videos.category_id')
            ->get();

        return view('admin.pages.videogallery.index', get_defined_vars());
    }

    public function deletevideo(Request $request, $id)
    {
        DB::table('videos')->where('id', $id)->delete();
        return back()->with('success', 'Video Deleted successfully!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = DB::table('categories')->get();
        return view('admin.pages.videogallery.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        // dd($req->all());
        $req->validate([
            'category_id' => 'required',
            // 'video' => 'required|file|mimetypes:video/mp4',
            'link' => 'required',
        ]);


        $video = new Video();
        $video->title = $req->title;
        $video->category_id = $req->category_id;
        $video->description = $req->description;
        $video->link = $req->link;
        $video->save();

        return back()
            ->with('success', 'Video link has been successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video, $id)
    {
        $videodata = Video::findOrFail($id);
        $categorys = DB::table('categories')->get();
        return view('admin.pages.videogallery.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $req->validate([
            'category_id' => 'required',
            'link' => 'required',
        ]);


        $video = Video::find($id);
        $video->title = $req->title;
        $video->category_id = $req->category_id;
        $video->description = $req->description;
        $video->link = $req->link;
        $video->save();

        return back()
            ->with('success', 'Video link has been Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //
    }
}
