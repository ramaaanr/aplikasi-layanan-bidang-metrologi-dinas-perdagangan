<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function login()
    {
        return view('guest.login');
    }

    public function doLogOut(Request $request)
    {
        $request->session()->forget('admin');
        return redirect('/');
    }
}