<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return view('employee.brand.addBrand');
    }

    public function createBrand(Request $request)
    {
        Brand::createBrand($request);
        return redirect('/brand-list');
    }

    public function brandList()
    {
        return view('employee.brand.brandList',[
            'brands' =>  Brand::orderBy('id', 'desc')->get(),
        ]);
    }

    public function brandDelete($id)
    {
        Brand::deleteBrand($id);
        return redirect('/brand-list');
    }

}
