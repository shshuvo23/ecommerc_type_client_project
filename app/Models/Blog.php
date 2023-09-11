<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    public static $image, $imageName, $imageExtension, $imageDirectory, $blogs, $blog, $imagePath, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageExtension = self::$image->getClientOriginalExtension();
        self::$imageName = time() . '.' . self::$imageExtension;
        self::$imageDirectory = 'blog-image/';

        self::$image->move(self::$imageDirectory, self::$imageName);
        return self::$imageDirectory . self::$imageName;
    }
    public static function newBlog($request)
    {
        self::$blog = new Blog();
        self::$blog->title       = $request->title;
        self::$blog->long_description = $request->long_description;
        self::$blog->image       = self::getImageUrl($request);
        self::$blog->slug = Str::slug($request->title);
        self::$blog->save();
    }

    public static function updateBlog($request, $id)
    {
        self::$blog = Blog::find($id);
        if ($request->file('image')) {
            if (file_exists(self::$blog->image)) {
                unlink(self::$blog->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        } else {
            self::$imageUrl = self::$blog->image;
        }
        self::$blog->title       = $request->title;
        self::$blog->long_description = $request->long_description;
        self::$blog->image       = self::$imageUrl;
        self::$blog->save();
    }

    public static function deleteBlog($id)
    {
        self::$blog = Blog::find($id);
        if (file_exists(self::$blog->image)) {
            unlink(self::$blog->image);
        }
        self::$blog->delete();
    }
}
