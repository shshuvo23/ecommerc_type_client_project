<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        // return $usertype;
        if($usertype == 1)
        {
            return view('admin.dashBoard.index');
        }
        else
        {
            return view('employee.dashboard.index');
        }
    }
}
