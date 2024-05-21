<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\WebGallery;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class WebGalleryController extends Controller
{



    public function updateImage(Request $request, $id)
    {

        $request->validate([
            'category' => 'required',
            'title' => 'required',
            // 'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        if ($request->hasFile('images')) {
            $extension = $request->file('images')->getClientOriginalExtension();
            $fileName = 'images_' . time() . '.' . $extension;
            $request->file('images')->move(public_path('galleryImage'), $fileName);
        } else {
            $fileName = $request->old_image;
        }

        $image = WebGallery::find($id);

        $image->update([
            'details' => $request->details,
            'url' => $request->url,
            'price' => $request->price,
            'title' => $request->title,
            'category' => $request->category,
            'tags' => $request->tags,
            'images' => $fileName,
        ]);

        return redirect('gallery-images-List')->with('success', 'Image Deleted successfully !');
    }

    public function edit($id)
    {
        $categorys = DB::table('categories')->get();
        $image_data = DB::table('web_galleries')->where('id', $id)->first();
        return view('admin.pages.galleryImages.edit-image', get_defined_vars());
    }

    public function galleryImagesUpload()
    {

        $categorys = DB::table('categories')->get();
        return view('admin.pages.galleryImages.gallery-upload', get_defined_vars());
    }

    public function viewall()
    {
        $galleriImages = DB::table('web_galleries')
            ->select('web_galleries.*', 'categories.title as cat_title')
            ->join('categories', 'categories.id', '=', 'web_galleries.category')
            ->orderBy('web_galleries.id', 'desc')
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
            // 'price' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg|max:800',
            'url' => 'required',
        ]);
        $catName = $req->input('catName');
        $url = $req->input('url');
        $title = $req->input('title');
        $price = $req->input('price');
        $tags = $req->input('tags');
        $details = $req->input('details');
        $image = $req->input('image');
        foreach ($catName as  $key => $itemData) {
            $details = $req->image->move(public_path('/uploads/gallery/'), $image[$key]);

            $galleryItem = new WebGallery();
            $galleryItem->category = $catName[$key];
            $galleryItem->url =   $url[$key];
            $galleryItem->title =   $title[$key];
            $galleryItem->price =   $price[$key];
            $galleryItem->tags =  $tags[$key];
            $galleryItem->details = $details[$key];
            $galleryItem->images = $details;
            $galleryItem->save();
        }




        return back()->with('success', 'File has successfully uploaded!');
    }

    // public function insertImage(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'title' => 'required',
    //         'category_id' => 'required|integer',
    //         'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
    //     ]);

    //     $imageFile = $request->file('images');
    //     $extension = $imageFile->getClientOriginalExtension();
    //     $fileName = 'images_' . time() . '.' . $extension;

    //     $image = Image::make($imageFile->getPathname());

    //     // Load watermark image
    //     $watermark = Image::make(public_path('site_logo/1703400484.logo_black.png'));

    //     // Set opacity of watermark
    //     $watermark->opacity(80);

    //     // Get image and watermark dimensions
    //     $imageWidth = $image->width();
    //     $imageHeight = $image->height();
    //     $watermarkWidth = $watermark->width();
    //     $watermarkHeight = $watermark->height();

    //     // Calculate the number of times watermark fits across and down the image
    //     $numAcross = ceil($imageWidth / $watermarkWidth);
    //     $numDown = ceil($imageHeight / $watermarkHeight);

    //     // Apply watermark multiple times across and down the image
    //     for ($x = 0; $x < $numAcross; $x++) {
    //         for ($y = 0; $y < $numDown; $y++) {
    //             $image->insert($watermark, 'top-left', $x * $watermarkWidth, $y * $watermarkHeight);
    //         }
    //     }

    //     // Save the image with watermark
    //     $image->save(public_path('galleryImage/' . $fileName));

    //     $imageModel = WebGallery::create([
    //         'details' => $request->details,
    //         'url' => $request->url,
    //         'price' => $request->price,
    //         'title' => $request->title,
    //         'category' => $request->category_id,
    //         'tags' => $request->tags,
    //         'images' => $fileName,
    //     ]);

    //     return true;
    // }
    public function insertImage(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'category_id' => 'required|integer',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        $imageFile = $request->file('images');
        $extension = $imageFile->getClientOriginalExtension();
        $fileName = 'images_' . time() . '.' . $extension;

        $image = Image::make($imageFile->getPathname());

        // Load and resize watermark image
        $watermark = Image::make(public_path('site_logo/1713174284.water_mark.png'))->resize(50, 25);

        // Set opacity of watermark
        $watermark->opacity(10);

        // Get image and watermark dimensions
        $imageWidth = $image->width();
        $imageHeight = $image->height();
        $watermarkWidth = $watermark->width();
        $watermarkHeight = $watermark->height();

        // Define the spacing between watermarks
        $spacingX = $watermarkWidth + 20; // 10 pixels horizontal spacing
        $spacingY = $watermarkHeight + 20; // 10 pixels vertical spacing

        // Calculate the number of times watermark fits across and down the image
        $numAcross = ceil($imageWidth / $spacingX);
        $numDown = ceil($imageHeight / $spacingY);

        // Apply watermark multiple times across and down the image
        for ($x = 0; $x < $numAcross; $x++) {
            for ($y = 0; $y < $numDown; $y++) {
                $image->insert($watermark, 'top-left', $x * $spacingX, $y * $spacingY);
            }
        }

        // Save the image with watermark
        $image->save(public_path('galleryImage/' . $fileName));

        $imageModel = WebGallery::create([
            'details' => $request->details,
            'url' => $request->url,
            'price' => $request->price,
            'title' => $request->title,
            'category' => $request->category_id,
            'tags' => $request->tags,
            'images' => $fileName,
        ]);

        return true;
    }


    // public function insertImage(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'title' => 'required',
    //         'category_id' => 'required|integer',
    //         'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
    //     ]);

    //     $imageFile = $request->file('images');
    //     $extension = $imageFile->getClientOriginalExtension();
    //     $fileName = 'images_' . time() . '.' . $extension;

    //     $image = Image::make($imageFile->getPathname());

    //     // Add watermark
    //     $watermark = Image::make(public_path('site_logo/1703400484.logo_black.png'));
    //     $image->insert($watermark, 'bottom-right', 10, 10);

    //     // Save the image with watermark
    //     $image->save(public_path('galleryImage/' . $fileName));

    //     $imageModel = WebGallery::create([
    //         'details' => $request->details,
    //         'url' => $request->url,
    //         'price' => $request->price,
    //         'title' => $request->title,
    //         'category' => $request->category_id,
    //         'tags' => $request->tags,
    //         'images' => $fileName,
    //     ]);

    //     return true;
    // }
    // public function insertImage(Request $request)
    // {

    //     $validatedData = $request->validate([
    //         // 'url' => 'required|url',
    //         'title' => 'required',
    //         // 'price' => 'required',
    //         'category_id' => 'required|integer',
    //         'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
    //     ]);

    //     $extension = $request->file('images')->getClientOriginalExtension();
    //     $fileName = 'images_' . time() . '.' . $extension;

    //     $request->file('images')->move(public_path('galleryImage'), $fileName);

    //     $image = WebGallery::create([
    //         'details' => $request->details,
    //         'url' => $request->url,
    //         'price' => $request->price,
    //         'title' => $request->title,
    //         'category' => $request->category_id,
    //         'tags' => $request->tags,
    //         'images' => $fileName,
    //     ]);

    //     return true;
    // }

    public function deleteImage(Request $request, $id)
    {
        DB::table('web_galleries')->where('id', $id)->delete();
        return back()->with('success', 'Image Deleted successfully !');
    }
}
