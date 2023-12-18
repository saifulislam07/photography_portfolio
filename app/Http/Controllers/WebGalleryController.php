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
        // return view('admin.pages.gallery', get_defined_vars());
    }

    public function viewall()
    {
        // $categorys = DB::table('gallery_category')->get();
        // $galleriImages = DB::table('web_galleries')->get();
        $galleriImages = DB::table('web_galleries')
            ->select('web_galleries.*', 'categories.title')
            ->join('categories', 'categories.id', '=', 'web_galleries.category')
            ->get();

        return view('admin.pages.galleryImages.viewgallery', get_defined_vars());
    }

    public function store(Request $req)
    {
        // dd($req->all());
        $req->validate([
            'catName' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg|max:800',
            'url' => 'required',
        ]);
        $catName = $req->input('catName');
        $url = $req->input('url');
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


        // foreach ($req->file('image') as $key => $image) {
        //     $name = $image->getClientOriginalName();
        //     $image->move(public_path() . '/uploads/gallery/', $name);
        //     $imgData[] = $name;
        //     $fileModal = new WebGallery();
        //     $fileModal->category = $req->category_id[$key];
        //     $fileModal->url = $req->url[$key];
        //     $fileModal->tags = $req->tags[$key];
        //     $fileModal->details = $req->details[$key];
        //     $fileModal->images = $imgData[$key];
        //     $fileModal->save();
        // }

        return back()->with('success', 'File has successfully uploaded!');
    }


    public function insertImage(Request $request)
    {

        $validatedData = $request->validate([
            'url' => 'required|url',
            'category_id' => 'required|integer',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        $extension = $request->file('images')->getClientOriginalExtension();
        $fileName = 'images_' . time() . '.' . $extension;

        $request->file('images')->move(public_path('galleryImage'), $fileName);

        $image = WebGallery::create([
            'details' => $request->details,
            'url' => $request->url,
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
