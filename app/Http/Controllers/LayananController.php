<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{

    public function showDataTera()
    {
    }

    public function render(string $jenisLayanan, string $tera)
    {
        if ($jenisLayanan == 'data-tera') return view('guest.data-tera', ['layanan' => $jenisLayanan, 'tera' => $tera]);
        if ($jenisLayanan == 'ajukan-tera') return view('guest.ajukan-tera', ['layanan' => $jenisLayanan, 'tera' => $tera]);
    }
}
