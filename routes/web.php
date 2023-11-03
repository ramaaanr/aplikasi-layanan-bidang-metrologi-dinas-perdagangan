<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengajuanLayananTeraController;
use App\Http\Controllers\PengelolaanLayananTeraController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'doLogin')->name('doLogin');
});

Route::middleware(['only-admin'])->group(function () {
    Route::get('/pengelolaan-layanan/dashboard', [PengelolaanLayananTeraController::class, 'index'])->name('admin-dashboard');
    Route::get('/pengelolaan-layanan/data-tera/{tera}', [PengelolaanLayananTeraController::class, 'showDataTera'])->name('admin-data-tera');
    Route::get('/pengelolaan-layanan/update-tera/{tera}', [PengelolaanLayananTeraController::class, 'showUpdateTera'])->name('admin-update-tera');
    Route::get('/pengelolaan-layanan/preview-tera/{tera}', [PengelolaanLayananTeraController::class, 'previewTera'])->name('admin-preview-tera');
    Route::get('/pengelolaan-layanan/cetak-tera/{tera}', [PengelolaanLayananTeraController::class, 'cetakTera'])->name('admin-cetak-tera');
    Route::get('/pengelolaan-layanan/data-status/', [PengelolaanLayananTeraController::class, 'getDataStatus'])->name('admin-data-status');
});

Route::middleware(['only-guest'])->group(function () {
    Route::get('/pengajuan-layanan/data-tera/{tera}', [PengajuanLayananTeraController::class, 'showDataTera'])->name('guest-data-tera');
    Route::get('/pengajuan-layanan/ajukan-tera/{tera}', [PengajuanLayananTeraController::class, 'showAjukanTera'])->name('guest-ajukan-tera');
});

Route::middleware(['pengajuan-or-pelayanan'])->group(function () {
    Route::get('/layanan/data-tera/{tera}');
});

Route::get('/error-page', function (Request $request) {
    return "$request->statusCode, $request->message";
})->name('error-page');
