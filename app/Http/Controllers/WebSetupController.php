<?php

namespace App\Http\Controllers;

use App\Models\webSetup;
use Illuminate\Http\Request;

class WebSetupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $info = webSetup::first();
        return view('admin.pages.websetup.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(webSetup $webSetup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(webSetup $webSetup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'site_name' => 'required',
            'background_image' => 'required|dimensions:width=1920,height=600',
        ]);


        if ($request->has('logo_black')) {
            $logo_black = time() . '.' . 'logo_black' . '.' . $request->logo_black->extension();
            $request->logo_black->move(public_path('site_logo'), $logo_black);
        } else {
            $logo_black = $request->old_logo_black;
        }

        if ($request->has('logo_white')) {
            $logo_white = time() . '.' . 'logo_white' . '.' . $request->logo_white->extension();
            $request->logo_white->move(public_path('site_logo'), $logo_white);
        } else {
            $logo_white = $request->old_logo_white;
        }

        if ($request->has('water_mark')) {
            $water_mark = time() . '.' . 'water_mark' . '.' . $request->water_mark->extension();
            $request->water_mark->move(public_path('site_logo'), $water_mark);
        } else {
            $water_mark = $request->old_water_mark;
        }


        if ($request->has('background_image')) {
            $background_image = time() . '.' . 'background_image' . '.' . $request->background_image->extension();
            $request->background_image->move(public_path('site_logo'), $background_image);
        } else {
            $background_image = $request->old_background_image;
        }






        $webSetup = webSetup::find($id);
        $webSetup->site_name = $request->site_name;
        $webSetup->email = $request->email;
        $webSetup->number = $request->number;
        $webSetup->whatsapp = $request->whatsapp;
        $webSetup->address = $request->address;
        $webSetup->copyright = $request->copyright;
        $webSetup->copyright_note = $request->copyright_note;

        $webSetup->logo_black = $logo_black;
        $webSetup->logo_white = $logo_white;
        $webSetup->water_mark = $water_mark;
        $webSetup->background_image = $background_image;


        $webSetup->save();

        session()->flash('success', 'Website Setup Updated.');
        return redirect()->route('web.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(webSetup $webSetup)
    {
        //
    }
}
