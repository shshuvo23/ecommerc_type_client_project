<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    private static $category;

    public static function createCategory($request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:categories,name',
        ]);

        self::$category = new Category();
        self::$category->name = $request->name;
        self::$category->save();
    }

    // public static function deleteCategory($id)
    // {
    //     self::$category = Category::find($id);
    //     self::$category->delete();
    // }
    public static function deleteCategory($id)
    {
        // Find the category by its ID
        self::$category = Category::find($id);

        // Check if the category exists
        if (self::$category) {
            // Check if the category has associated products
            if (self::$category->products->count() > 0) {
                // If there are products, you might want to prompt the user
                // to decide whether to delete associated products or not.
                return "not Deleted";
            } else {
                // If no products are associated, you can safely delete the category
                self::$category->delete();
            }
        } else {
            // Handle the case when the category doesn't exist
            return "cetegroy not fund";
        }
    }


    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
