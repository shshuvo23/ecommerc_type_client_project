<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.home.index', [
            'categories' => Category::all(),
            'brands' => Brand::all(),
            'sliders' => Slider::orderBy('id', 'desc')->get(),
            'products' => Product::orderBy('id', 'desc')->latest()->take(8)->get(),
            'blogs' => Blog::OrderBy('id', 'desc')->latest()->take(8)->get(),
        ]);
    }

    // public function productDetail($name)
    // {
    //     // Replace spaces with hyphens in the parameter
    //     $nameUrl = str_replace('-', ' ', $name);

    //     // Retrieve the product based on the modified name
    //     $product = Product::where('name', $nameUrl)->first();

    //     if (!$product) {
    //         // Handle the case where the product with the given name is not found.
    //         abort(404); // You can customize this error response as needed.
    //     }

    //     // Retrieve related products in the same category
    //     $relatedProducts = Product::where('category_id', $product->category_id)
    //         ->where('name', '!=', $name)
    //         ->take(6)
    //         ->get();

    //     return view('website.product.productDetail', [
    //         'product' => $product,
    //         'relatedProduct' => $relatedProducts,
    //         'categories' => Category::all(),
    //         'brands' => Brand::all(),
    //     ]);
    // }


    public function productDetail($slug)
    {

        // Retrieve the product using the slug
        $product = Product::where('slug', $slug)->firstOrFail();
        // Retrieve related products as before
        $relatedProduct = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->take(6)
            ->get();

        // Pass the product and related products to the view
        return view('website.product.productDetail', [
            'product' => $product,
            'relatedProduct' => $relatedProduct,
            'categories' => Category::all(),
            'brands' => Brand::all(),
        ]);

        // $product = Product::find($id);
        // $relatedProduct = Product::where('category_id', $product->category_id)
        //     ->where('id', '!=', $product->id)
        //     ->take(6)
        //     ->get();
        // return view('website.product.productDetail', [
        //     'product' => $product,
        //     'relatedProduct' => $relatedProduct,
        //     'categories' => Category::all(),
        //     'brands' => Brand::all(),
        // ]);
    }

    public function blogDetail($slug)
    {
        return view('website.blog.blogDetail', [
            'categories' => Category::all(),
            'brands' => Brand::all(),
            'blog' => Blog::where('slug', $slug)->firstOrFail(),
        ]);
    }

    public function allBlog()
    {
        return view('website.blog.allBlog', [
            'categories' => Category::all(),
            'brands' => Brand::all(),
            'blogs' => Blog::orderBy('id', 'desc')->get(),
        ]);
    }

    public function categoryWiseProduct($id)
    {
        $category = Category::find($id);
        $products = $category->products;

        return view('website.product.productShowByCategory', [
            'categories' => Category::all(),
            'brands' => Brand::all(),
            'products' => $products,
            'category' => $category,
        ]);
    }

    public function brandWiseProduct($id)
    {
        $brand = Brand::find($id);
        $products = $brand->products;

        return view('website.product.productShowByBrand', [
            'categories' => Category::all(),
            'brands' => Brand::all(),
            'products' => $products,
            'brand' => $brand,
        ]);
    }

    public function productSearch(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('name', 'like', "%$query%")
            ->get();
        return view('website.product.productSearch', [
            'query' => $query,
            'products' => $products,
            'categories' => Category::all(),
            'brands' => Brand::all(),
        ]);
    }

    public function filter(Request $request)
    {
        // Get selected category and brand IDs from the request
        $categoryIds = $request->input('category', []);
        $brandIds = $request->input('brand', []);
        // dd($categoryIds, $brandIds);

        // Start with the base query
        $query = Product::query();

        // Apply category filter
        if (!empty($categoryIds)) {
            $query->whereIn('category_id', $categoryIds);
        }

        // Apply brand filter
        if (!empty($brandIds)) {
            $query->whereIn('brand_id', $brandIds);
        }

        // Fetch the filtered products
        $filteredProducts = $query->get();
        return view('website.product.productShowByBrandAndCategory', [
            'filteredProducts' => $filteredProducts,
            'categories' => Category::all(),
            'brands' => Brand::all(),
        ]);
    }
}
