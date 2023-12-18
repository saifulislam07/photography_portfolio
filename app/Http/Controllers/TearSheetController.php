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
    public function deleteclient($id)
    {
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'image' => 'required',
        ]);

        $image = time() . '.' . 'TearSheet' . '.' . $request->image->extension();
        $request->image->move(public_path('TearSheet'), $image);
        $category = new TearSheet();
        $category->url = $request->url;
        $category->image = $image;
        $category->save();

        session()->flash('success', 'Tear Sheet logo Successfully.');
        return  redirect()->route('tearsheet.index');
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
    public function edit(TearSheet $tearSheet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TearSheet $tearSheet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TearSheet $tearSheet, $id)
    {
        TearSheet::where('id', $id)->delete();
        session()->flash('success', 'Tear Sheet Deleted Successfully.');
        return redirect('/tearsheet');
    }
}
