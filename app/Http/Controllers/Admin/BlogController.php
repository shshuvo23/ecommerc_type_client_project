<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('admin.blog.addBlog');
    }

    public function createBlog(Request $request)
    {
        Blog::newBlog($request);
        return redirect('/blog-list');
    }

    public function blogList()
    {
        return view('admin.blog.blogList',[
            'blogs' => Blog::orderBy('id' , 'desc')->get(),
        ]);
    }

    public function blogEdit($id)
    {
        return view('admin.blog.editBlog',[
            'blog' => Blog::find($id),
        ]);
    }

    public function blogUpdate(Request $request, $id)
    {
        Blog::updateBlog($request, $id);
        return redirect('/blog-list');
    }

    public function blogDelete($id)
    {
        Blog::deleteBlog($id);
        return redirect('/blog-list');
    }


}
