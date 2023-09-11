<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class Categorycontroller extends Controller
{
    public function index()
    {
        return view('employee.category.addCategory');
    }

    public function createCategory(Request $request)
    {
        Category::createCategory($request);
        return redirect('/category/list');
    }

    public function categoryList()
    {
        return view('employee.category.CategoryList',[
            'categories' => Category::orderBy('id', 'desc')->get(),
        ]);
    }

    public function categoryDelete($id)
    {
        Category::deleteCategory($id);
        return redirect('/category/list');
    }
}
