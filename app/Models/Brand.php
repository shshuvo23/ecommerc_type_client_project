<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    private static $brand, $image, $extension, $directory, $imageName, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time() . '.' . self::$extension;
        self::$directory = 'brand-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory . self::$imageName;
    }

    public static function createBrand($request)
    {
        $validatedData = $request->validate([
            'name' => 'nullable|unique:brands,name',
        ]);

        self::$brand = new Brand();
        self::$brand->name = $request->name;
        self::$brand->image = self::getImageUrl($request);
        self::$brand->save();
    }

    public static function deleteBrand($id)
    {
        self::$brand = Brand::find($id);
        if (file_exists(self::$brand->image))
        {
            unlink(self::$brand->image);
        }
        self::$brand->delete();
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
