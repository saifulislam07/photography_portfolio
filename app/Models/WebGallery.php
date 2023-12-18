<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebGallery extends Model
{
    use HasFactory;
    protected $fillable = ['category', 'images', 'category_id', 'url', 'tags', 'details'];
}
