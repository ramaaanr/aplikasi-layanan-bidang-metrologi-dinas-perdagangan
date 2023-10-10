<?php

use App\Http\Controllers\LayananController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengajuanLayananController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(LoginController::class)
    ->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'doLogin')->name('doLogin');
    });

Route::get('/', function () {
    return view('guest.home');
});

Route::get('layanan/data-tera/{tera}', [LayananController::class, 'showDataTera']);
Route::get('layanan/ajukan-tera/{tera}', [LayananController::class, 'showAjukanTera']);
Route::post('/layanan', [LayananController::class, 'ajukanTera'])->name('ajukan-tera');