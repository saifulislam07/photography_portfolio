<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebGallery extends Model
{
    use HasFactory;
    protected $table = "web_galleries";
    protected $fillable = ['category', 'images', 'category_id', 'url', 'tags', 'details', 'title', 'price'];

    // protected $guarded = [];

    public function category_details()
    {
        return $this->belongsTo(Category::class, 'category', 'id');
    }
}
