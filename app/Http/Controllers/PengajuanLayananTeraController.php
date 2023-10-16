<?php

namespace App\Http\Controllers;


class PengajuanLayananTeraController extends Controller
{

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
