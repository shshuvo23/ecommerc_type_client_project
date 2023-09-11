<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.addUser');
    }

    public function createUser(Request $request)
    {
        User::newCustomerRegister($request);
        // You can customize this part to redirect or return a response
        return redirect('/user-add')->with('success', 'User created successfully.');
    }

    public function userList()
    {
        return view('admin.user.userList',[
            'users' => User::orderBy('id', 'desc')->get(),
        ]);
    }

    public function makeAdmin($id)
    {
        User::changeUserTypeAdmin($id);
        return redirect('/user-list');
    }
}
