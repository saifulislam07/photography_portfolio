<?php

namespace App\Http\Controllers;

use App\Models\Commercial;
use Illuminate\Http\Request;

class CommercialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commerc = Commercial::all();
        return view('admin.pages.commercial.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.commercial.create', get_defined_vars());
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

        $image = time() . '.' . 'commercial' . '.' . $request->image->extension();
        $request->image->move(public_path('commercial'), $image);
        $publication = new Commercial();
        $publication->title = $request->title;
        $publication->details = $request->details;
        $publication->image = $image;
        $publication->save();

        session()->flash('success', 'Commercial added Successfully.');
        return redirect()->route('commerc.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Commercial $commercial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commercial $commercial, $id)
    {
        $editinfo = Commercial::find($id);
        return view('admin.pages.commercial.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $commercial = Commercial::find($id);

        if ($commercial) {
            if ($request->has('image')) {
                $image = time() . '.' . 'commercial' . '.' . $request->image->extension();
                $request->image->move(public_path('commercial'), $image);
                $commercial->image = $image;
                $file_delete = 'commercial/' . $request->oldimage;
                unlink($file_delete);
            } else {
                $commercial->image = $request->oldimage;
            }
            $commercial->title = $request->title;
            $commercial->details = $request->details;
            $commercial->save();
            session()->flash('success', 'Commercial Deleted Successfully.');
            return redirect()->route('commerc.index');
        } else {
            session()->flash('error', 'Commercial Deleted erro.');
            return redirect()->route('commerc.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Commercial::where('id', $id)->delete();
        session()->flash('success', 'Commercial Deleted Successfully.');
        return redirect()->route('commerc.index');
    }
}
