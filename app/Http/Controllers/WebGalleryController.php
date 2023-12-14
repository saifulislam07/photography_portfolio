<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\WebGallery;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class WebGalleryController extends Controller
{

    public function gallery()
    {

        $categorys = DB::table('categories')->get();
        return view('admin.pages.gallery', get_defined_vars());
    }

    public function viewall()
    {
        // $categorys = DB::table('gallery_category')->get();
        // $galleriImages = DB::table('web_galleries')->get();
        $galleriImages = DB::table('web_galleries')
            ->select('web_galleries.*', 'categories.title')
            ->join('categories', 'categories.id', '=', 'web_galleries.category')
            ->get();

        return view('admin.pages.viewgallery', get_defined_vars());
    }

    public function store(Request $req)
    {

        $req->validate([
            'category_id' => 'required',
            //'image' => 'required|image|mimes:jpeg,png,jpg|max:500',
        ]);
        //        dd($req);

        if ($req->hasfile('image')) {
            foreach ($req->file('image') as $key => $image) {
                $name = $image->getClientOriginalName();
                $image->move(public_path() . '/uploads/gallery/', $name);
                $imgData[] = $name;
                $fileModal = new WebGallery();
                $fileModal->category = $req->category_id;
                $fileModal->images = $imgData[$key];
                $fileModal->save();
            }
        }
        return back()->with('success', 'File has successfully uploaded!');
    }

    public function deleteImage(Request $request, $id)
    {
        DB::table('web_galleries')->where('id', $id)->delete();
        return back()->with('success', 'Image Deleted successfully !');
    }
}
