<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\WebGallery;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class WebGalleryController extends Controller
{

    public function galleryImagesUpload()
    {

        $categorys = DB::table('categories')->get();
        return view('admin.pages.galleryImages.gallery-upload', get_defined_vars());
    }

    public function viewall()
    {
        $galleriImages = DB::table('web_galleries')
            ->select('web_galleries.*', 'categories.title')
            ->join('categories', 'categories.id', '=', 'web_galleries.category')
            ->get();

        return view('admin.pages.galleryImages.viewgallery', get_defined_vars());
    }

    public function changeStatus(Request $request)
    {
        $statusid = $request->status;
        $wbgal = WebGallery::find($request->image_id);
        $wbgal->status = $statusid;
        $wbgal->save();

        return response()->json(['type' => $statusid]);
    }


    public function store(Request $req)
    {
        // dd($req->all());
        $req->validate([
            'catName' => 'required',
            'title' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg|max:800',
            'url' => 'required',
        ]);
        $catName = $req->input('catName');
        $url = $req->input('url');
        $url = $req->input('title');
        $tags = $req->input('tags');
        $details = $req->input('details');
        $image = $req->input('image');
        foreach ($catName as  $key => $itemData) {
            $details = $req->image->move(public_path('/uploads/gallery/'), $image[$key]);

            $galleryItem = new WebGallery();
            $galleryItem->category = $catName[$key];
            $galleryItem->url =   $url[$key];
            $galleryItem->tags =  $tags[$key];
            $galleryItem->details = $details[$key];
            $galleryItem->images = $details;
            $galleryItem->save();
        }




        return back()->with('success', 'File has successfully uploaded!');
    }


    public function insertImage(Request $request)
    {

        $validatedData = $request->validate([
            'url' => 'required|url',
            'title' => 'required',
            'category_id' => 'required|integer',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        $extension = $request->file('images')->getClientOriginalExtension();
        $fileName = 'images_' . time() . '.' . $extension;

        $request->file('images')->move(public_path('galleryImage'), $fileName);

        $image = WebGallery::create([
            'details' => $request->details,
            'url' => $request->url,
            'title' => $request->title,
            'category' => $request->category_id,
            'tags' => $request->tags,
            'images' => $fileName,
        ]);

        return true;
    }

    public function deleteImage(Request $request, $id)
    {
        DB::table('web_galleries')->where('id', $id)->delete();
        return back()->with('success', 'Image Deleted successfully !');
    }
}
