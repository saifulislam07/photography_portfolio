<?php

namespace App\Http\Controllers;

use App\Models\Aboutme;
use Illuminate\Http\Request;
use Validator;

class AboutmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort(404);
        $aboutme = Aboutme::all();
        return view('admin.pages.aboutme.aboutme', get_defined_vars());
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aboutme = Aboutme::first();
        return view('admin.pages.aboutme.addaboutme', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        // dd($request->all());
        $this->validate($request, [
            'your_name' => 'required',
            'details' => 'required',
            'title' => 'required',
        ]);

        if ($request->has('homeimage')) {
            $homeimage = time() . '.' . 'homeimage' . '.' . $request->homeimage->extension();
            $request->homeimage->move(public_path('aboutmes'), $homeimage);
        } else {
            $homeimage = $request->old_homeimage;
        }

        if ($request->has('aboutppageimage')) {
            $aboutppageimage = time() . '.' . 'aboutppageimage' . '.' . $request->aboutppageimage->extension();
            $request->aboutppageimage->move(public_path('aboutmes'), $aboutppageimage);
        } else {
            $aboutppageimage = $request->old_aboutppageimage;
        }

        if ($request->has('storyimage')) {
            $storyimage = time() . '.' . 'storyimage' . '.' . $request->storyimage->extension();
            $request->storyimage->move(public_path('aboutmes'), $storyimage);
        } else {
            $storyimage = $request->old_storyimage;
        }

        if ($request->has('coverimage')) {
            $coverimage = time() . '.' . 'coverimage' . '.' . $request->coverimage->extension();
            $request->coverimage->move(public_path('aboutmes'), $coverimage);
        } else {
            $coverimage = $request->old_coverimage;
        }


        $aboutme = Aboutme::find($id);

        $aboutme->your_name = $request->your_name;
        $aboutme->title = $request->title;
        $aboutme->details = $request->details;
        $aboutme->status = 1;
        $aboutme->homeimage = $homeimage;
        $aboutme->aboutppageimage = $aboutppageimage;
        $aboutme->storyimage = $storyimage;
        $aboutme->coverimage = $coverimage;
        $aboutme->save();
        session()->flash('success', 'About details Updated Successfully.');

        return redirect(route('addaboutme'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aboutme  $aboutme
     * @return \Illuminate\Http\Response
     */
    public function show(Aboutme $aboutme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aboutme  $aboutme
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $oldabout = Aboutme::findOrFail($id);
        return view('admin.pages.aboutme.editabout', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aboutme  $aboutme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aboutme $aboutme)
    {
        // dd($request->all());
        $this->validate($request, [
            'your_name' => 'required',
            'contact' => 'required',
            'details' => 'required',
            'title' => 'required',
        ]);

        if ($request->hasfile('homeimage')) {
            $homeimage = time() . '.' . 'home' . '.' . $request->homeimage->extension();
            $request->homeimage->move(public_path('aboutmes'), $homeimage);
        } else {
            $homeimage =  $request->ohomeimage;
        }

        if ($request->hasfile('aboutppageimage')) {
            $aboutppageimage = time() . '.' . 'about' . '.' . $request->aboutppageimage->extension();
            $request->aboutppageimage->move(public_path('aboutmes'), $aboutppageimage);
        } else {
            $aboutppageimage =  $request->oaboutppageimage;
        }

        if ($request->hasfile('storyimage')) {
            $storyimage = time() . '.' . 'story' . '.' . $request->storyimage->extension();
            $request->storyimage->move(public_path('aboutmes'), $storyimage);
        } else {
            $storyimage =  $request->ostoryimage;
        }

        if ($request->hasfile('coverimage')) {
            $coverimage = time() . '.' . 'cover' . '.' . $request->coverimage->extension();
            $request->coverimage->move(public_path('aboutmes'), $coverimage);
        } else {
            $coverimage =  $request->ocoverimage;
        }

        if ($request->hasfile('mylogo')) {
            $mylogo = time() . '.' . 'abc' . '.' . '.' . $request->mylogo->extension();
            $request->mylogo->move(public_path('aboutmes'), $mylogo);
        } else {
            $mylogo =  $request->omylogo;
        }



        $aboutme = Aboutme::find($request->oid);
        $aboutme->contact = $request->contact;
        $aboutme->your_name = $request->your_name;
        $aboutme->email = $request->email;
        $aboutme->title = $request->title;
        $aboutme->details = $request->details;
        $aboutme->status = 1;
        $aboutme->homeimage = $homeimage;
        $aboutme->aboutppageimage = $aboutppageimage;
        $aboutme->storyimage = $storyimage;
        $aboutme->coverimage = $coverimage;
        $aboutme->mylogo = $mylogo;
        $aboutme->save();
        session()->flash('success', 'About details Updated Successfully.');

        return redirect('/aboutme');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aboutme  $aboutme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aboutme $aboutme)
    {
        //
    }
}
