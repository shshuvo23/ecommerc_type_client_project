<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('employee.product.addProduct', [
            'categories' => Category::all(),
            'brands' => Brand::all(),
        ]);
    }

    public function productAdd(Request $request)
    {
        Product::createProduct($request);
        return redirect('/product-add');
    }

    public function productList()
    {
        return view('employee.product.productList',[
            'products' => Product::orderBy('id', 'desc')->get(),
        ]);
    }

    public function productEdit($id)
    {
        return view('employee.product.editProduct',[
            'product' => Product::find($id),
            'categories' => Category::all(),
            'brands' => Brand::all(),
        ]);
    }

    public function productUpdate(Request $request, $id)
    {
        Product::updateProduct($request, $id);
        return redirect('/product-list');
    }

    public function productDelete($id)
    {
        Product::deleteProduct($id);
        return redirect('/product-list');
    }
}
