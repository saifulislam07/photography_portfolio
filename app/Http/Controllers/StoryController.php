<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allstory = story::all();
        return view('admin.pages.story.story', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::get();
        return view('admin.pages.story.addstory', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'details' => 'required',
            'tages' => 'required',
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:900|',
        ]);

        $image = time() . '.' . $request->image->extension();
        $request->image->move(public_path('storycover'), $image);

        $story = new story();
        $story->title = $request->title;
        $story->details = $request->details;
        $story->category_id = $request->category;
        $story->tages = $request->tages;
        $story->image = $image;
        $story->status = 1;
        $story->save();

        session()->flash('success', 'New Story save Successfully.');
        return redirect('/story');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\story  $story
     * @return \Illuminate\Http\Response
     */
    public function show(story $story)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\story  $story
     * @return \Illuminate\Http\Response
     */
    public function edit(story $story)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\story  $story
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, story $story)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\story  $story
     * @return \Illuminate\Http\Response
     */
    public function destroy(story $story)
    {
        //
    }
}