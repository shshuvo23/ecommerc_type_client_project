<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Description;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.addProduct', [
            'categories' => Category::all(),
            'brands' => Brand::all(),
        ]);
    }

    public function productAdd(Request $request)
    {
        Product::createProduct($request);
        return redirect('/product/list');
    }

    public function productList()
    {
        return view('admin.product.productList',[
            'products' => Product::orderBy('id', 'desc')->get(),
        ]);
    }

    public function productEdit($id)
    {
        return view('admin.product.editProduct',[
            'product' => Product::find($id),
            'categories' => Category::all(),
            'brands' => Brand::all(),
        ]);
    }

    public function productUpdate(Request $request, $id)
    {
        Product::updateProduct($request, $id);
        return redirect('/product/list');
    }

    public function productDelete($id)
    {
        Product::deleteProduct($id);
        return redirect('/product/list');
    }
}
