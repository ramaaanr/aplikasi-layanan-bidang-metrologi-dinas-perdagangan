<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->session()->has('admin')) {
            return redirect()->route('admin-dashboard');
        }
        return view('guest.home');
    }
}
