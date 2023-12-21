<?php

namespace App\Http\Controllers;

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

        return view('admin.pages.videogallery.vallgallery', get_defined_vars());
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
        return view('admin.pages.videogallery.vgallery', get_defined_vars());
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
            'video' => 'required|file|mimetypes:video/mp4',
            //'image' => 'required|image|mimes:jpeg,png,jpg|max:500',
        ]);

        if ($req->hasfile('video')) {
            $fileName = $req->video->getClientOriginalName();
            $filePath = 'videos/' . $fileName;

            $isFileUploaded = Storage::disk('public')->put($filePath, file_get_contents($req->video));

            // File URL to access the video in frontend
            $url = Storage::disk('public')->url($fileName);
            // $url = Storage::disk('public')->url($filePath);

            if ($isFileUploaded) {
                $video = new Video();
                $video->title = $req->title;
                $video->category_id = $req->category_id;
                $video->description = $req->description;
                $video->video = $filePath;
                $video->save();

                return back()
                    ->with('success', 'Video has been successfully uploaded.');
            }
        } else {
            return back()->with('error', 'video Can not be empty!');
        }
        return back()->with('success', 'File has successfully uploaded!');
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
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //
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
