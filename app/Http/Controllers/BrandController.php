<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return view('admin.brand.addBrand');
    }

    public function createBrand(Request $request)
    {
        Brand::createBrand($request);
        return redirect('/brand-list');
    }

    public function brandList()
    {
        return view('admin.brand.brandList',[
            'brands' =>  Brand::orderBy('id', 'desc')->get(),
        ]);
    }

    public function brandDelete($id)
    {
        Brand::deleteBrand($id);
        return redirect('/brand-list');
    }
}
