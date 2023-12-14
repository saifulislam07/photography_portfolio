<?php

namespace App\Http\Controllers;

use App\Models\medialink;
use Illuminate\Http\Request;

class MedialinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allmedialinks = medialink::all();
        return view('admin.pages.media.medialinks', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.media.addmedia', get_defined_vars());
    }
    public function createmedia(request $request)
    {



        // return view('admin.pages.media.medialinks', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'url' => 'required',
        ]);


        $story = new medialink();
        $story->title = $request->title;
        $story->url = $request->url;
        $story->status = 1;
        $story->save();

        session()->flash('success', 'New Story save Successfully.');
        return redirect('/medialinks');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\medialink  $medialink
     * @return \Illuminate\Http\Response
     */
    public function show(medialink $medialink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\medialink  $medialink
     * @return \Illuminate\Http\Response
     */
    public function edit(medialink $medialink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\medialink  $medialink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, medialink $medialink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\medialink  $medialink
     * @return \Illuminate\Http\Response
     */
    public function destroy(medialink $medialink)
    {
        //
    }
}