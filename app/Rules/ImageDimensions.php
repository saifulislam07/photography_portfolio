<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\UploadedFile;
use Intervention\Image\Facades\Image;

class ImageDimensions implements Rule
{
    protected $width;
    protected $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function passes($attribute, $value)
    {
        $image = Image::make($value);

        return $image->width() == $this->width && $image->height() == $this->height;
    }

    public function message()
    {
        return "The :attribute dimensions must be {$this->width}px width and {$this->height}px height.";
    }
}
