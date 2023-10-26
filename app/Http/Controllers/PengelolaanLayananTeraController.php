<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengelolaanLayananTeraController extends Controller
{
    public function index()
    {
        return view('admin.home', ['tera' => 'halaman-utama', 'layanan' => 'data-tera']);
    }

    public function showDataTera(String $tera)
    {
        return view('admin.data-tera', ['tera' => $tera, 'layanan' => 'data-tera']);
    }
    public function showUpdateTera(String $tera)
    {
        return view('admin.update-tera', ['tera' => $tera, 'layanan' => 'update-tera']);
    }
}