<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class LayananController extends Controller
{
    public function ajukanTera(Request $request)
    {
        ddd($request->input());
    }

    public function render(string $jenisLayanan, string $tera)
    {
        if ($jenisLayanan == 'data-tera') return view('guest.data-tera', [
            'layanan' => $jenisLayanan,
            'tera' => $tera,
            'success' => true,
            'kodePengajuan' => 'XXXXXX',
        ]);
        if ($jenisLayanan == 'ajukan-tera') return view('guest.ajukan-tera', ['layanan' => $jenisLayanan, 'tera' => $tera]);
    }
}
