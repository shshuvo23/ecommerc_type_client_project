<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    public static $image, $description, $imageName, $imageDirectory, $product, $imagePath, $imageExtension, $imageUrl;

    public static function getImageUrl($request)
    {
        $imageUrls = [];
        foreach ($request->file('image') as $image) {
            self::$imageExtension = $image->getClientOriginalExtension();
            self::$imageName = time() . '_' . uniqid() . '.' . self::$imageExtension;;
            self::$imageDirectory = 'product-image/';
            $image->move(self::$imageDirectory, self::$imageName);
            $imageUrl = self::$imageDirectory . self::$imageName;
            $imageUrls[] = $imageUrl;
        }
        return $imageUrls;
    }

    public static function createProduct($request)
    {
        self::$product = new Product();
        self::$product->category_id = $request->category_id;
        self::$product->brand_id = $request->brand_id;
        self::$product->name = $request->name;
        self::$product->price = $request->price;
        self::$product->description_title = json_encode($request->description_title);
        self::$product->description_detail = json_encode($request->description_detail);
        self::$product->image = implode(",", self::getImageUrl($request));
        self::$product->slug = Str::slug($request->name);
        self::$product->save();
    }

    public static function updateProduct($request, $id)
    {
        self::$product = Product::find($id);

        if ($request->file('image')) {
            if (file_exists(self::$product->image)) {
                unlink(self::$product->image);
            }
            self::$imageUrl = implode(",", self::getImageUrl($request));
        } else {
            self::$imageUrl = self::$product->image;
        }

        self::$product->category_id        = $request->category_id;
        self::$product->brand_id           = $request->brand_id;
        self::$product->name               = $request->name;
        self::$product->price              = $request->price;
        self::$product->description_title  = json_encode($request->description_title);
        self::$product->description_detail = json_encode($request->description_detail);
        self::$product->image              = self::$imageUrl;
        self::$product->update();
    }

    public static function deleteProduct($id)
    {
        self::$product = Product::find($id);
        if (file_exists(self::$product->image)) {
            unlink(self::$product->image);
        }
        self::$product->delete();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
