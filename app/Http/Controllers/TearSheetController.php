<?php

namespace App\Http\Controllers;

use App\Models\TearSheet;
use Illuminate\Http\Request;

class TearSheetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allclient = TearSheet::all();
        return view('admin.pages.tear.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.tear.add', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $this->validate($request, [
            'image' => 'required',
            'title' => 'required',
        ]);

        $image = time() . '.' . 'TearSheet' . '.' . $request->image->extension();
        $request->image->move(public_path('TearSheet'), $image);
        $category = new TearSheet();
        $category->url = $request->url;
        $category->title = $request->title;
        $category->image = $image;
        $category->save();

        session()->flash('success', 'Tear Sheet added Successfully.');
        return redirect()->route('tearsheets.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(TearSheet $tearSheet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TearSheet $tearSheet, $id)
    {
        $editdata =  TearSheet::find($id);
        return view('admin.pages.tear.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $tearSheet = TearSheet::find($id);

        if ($tearSheet) {
            if ($request->has('image')) {
                $image = time() . '.' . 'TearSheet' . '.' . $request->image->extension();
                $request->image->move(public_path('TearSheet'), $image);
                $tearSheet->image = $image;
                $file_delete = 'TearSheet/' . $request->oldimage;
                unlink($file_delete);
            } else {
                $tearSheet->image = $request->oldimage;
            }
            $tearSheet->url = $request->url;
            $tearSheet->title = $request->title;
            $tearSheet->save();
            session()->flash('success', 'Tear Sheet Deleted Successfully.');
            return redirect()->route('tearsheets.index');
        } else {
            session()->flash('error', 'Tear Sheet Deleted erro.');
            return redirect()->route('tearsheets.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TearSheet $tearSheet, $id)
    {
        TearSheet::where('id', $id)->delete();
        session()->flash('success', 'Tear Sheet Deleted Successfully.');
        return redirect()->route('tearsheets.index');
    }
}
