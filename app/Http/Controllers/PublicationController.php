<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publication = Publication::all();
        return view('admin.pages.publication.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.publication.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:800|',
        ]);

        $image = time() . '.' . 'publication' . '.' . $request->image->extension();
        $request->image->move(public_path('publication'), $image);
        $publication = new Publication();
        $publication->title = $request->title;
        $publication->url = $request->url;
        $publication->details = $request->details;
        $publication->image = $image;
        $publication->save();

        session()->flash('success', 'Publication added Successfully.');
        return redirect()->route('publicationindex');
    }

    /**
     * Display the specified resource.
     */
    public function show(Publication $publication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $editinfo = Publication::find($id);
        return view('admin.pages.publication.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $publication = Publication::find($id);

        if ($publication) {
            if ($request->has('image')) {
                $image = time() . '.' . 'publication' . '.' . $request->image->extension();
                $request->image->move(public_path('publication'), $image);
                $publication->image = $image;
                $file_delete = 'publication/' . $request->oldimage;
                unlink($file_delete);
            } else {
                $publication->image = $request->oldimage;
            }
            $publication->title = $request->title;
            $publication->url = $request->url;
            $publication->details = $request->details;
            $publication->save();
            session()->flash('success', 'Publication Deleted Successfully.');
            return redirect()->route('publicationindex');
        } else {
            session()->flash('error', 'Publication Deleted erro.');
            return redirect()->route('publicationindex');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Publication::where('id', $id)->delete();
        session()->flash('success', 'Publication Deleted Successfully.');
        return redirect()->route('publicationindex');
    }
}
