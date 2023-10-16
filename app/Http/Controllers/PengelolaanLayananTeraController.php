<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengelolaanLayananTeraController extends Controller
{
    public function index()
    {
        return view('admin.home', ['tera' => 'halaman-utama']);
    }
    public function showDataTera(String $tera)
    {
        return view('admin.data-tera', ['tera' => $tera]);
    }
}
