<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function render(string $layanan)
    {
        
        return view('guest.layanan', ['layanan' => $layanan]);
    }
}
