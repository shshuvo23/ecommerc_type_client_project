<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    public static $image,$imageName,$imageExtension,$imageDirectory,$slider,$imagePath,$imageUrl;

    public static function getImageUrl($request)
    {
       self::$image = $request->file('image');
       self::$imageExtension = self::$image->getClientOriginalExtension();
       self::$imageName = time().'.'.self::$imageExtension;
       self::$imageDirectory = 'slider-image/';

       self::$image->move(self::$imageDirectory,self::$imageName);
       return self::$imageDirectory.self::$imageName;

    }

    public static function addSlider($request)
    {
        self::$slider = new Slider();
        self::$slider->image = self::getImageUrl($request);
        self::$slider->save();

    }
    public static function deleteSlider($id)
    {
        self::$slider = Slider::find($id);
        if (file_exists(self::$slider->image))
        {
            unlink(self::$slider->image);
        }
        self::$slider->delete();

    }
}
