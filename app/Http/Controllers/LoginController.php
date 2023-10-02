<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function doLogin()
    {
        return redirect('/tempe');
    }

    public function login()
    {
        return view('guest.home');
    }
}
