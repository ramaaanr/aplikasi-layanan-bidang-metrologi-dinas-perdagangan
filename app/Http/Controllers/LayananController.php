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

    public function ajukanDataSuccess($tera, $message)
    {
        ddd("S");
        // ddd(['tera' => $tera, 'message' => $message]);
        return view('guest.data-tera', [
            'tera' => $tera,
            'layanan' => 'data-tera',
            'success' => true,
            'message' => $message,
        ]);
    }

    public function showDataTera(string $tera)
    {
        return view('guest.data-tera', [
            'tera' => $tera,
            'layanan' => 'data-tera'
        ]);
    }

    public function showAjukanTera(string $tera)
    {

        return view('guest.ajukan-tera', ['tera' => $tera, 'layanan' => 'ajukan-tera']);
    }
}
