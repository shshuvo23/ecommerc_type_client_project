<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.addCategory');
    }

    public function createCategory(Request $request)
    {
        Category::createCategory($request);
        return redirect('/category-list');
    }

    public function categoryList()
    {
        return view('admin.category.CategoryList',[
            'categories' => Category::orderBy('id', 'desc')->get(),
        ]);
    }

    public function categoryDelete($id)
    {
        Category::deleteCategory($id);
        return redirect('/category-list');
    }
}
