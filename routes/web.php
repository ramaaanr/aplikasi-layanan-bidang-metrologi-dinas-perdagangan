<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengajuanLayananTeraController;
use App\Http\Controllers\PengelolaanLayananTeraController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    Route::get('/logout', 'doLogOut')->middleware('only-admin')->name('doLogOut');
});

Route::middleware(['only-admin'])->controller(PengelolaanLayananTeraController::class)->group(function () {
    Route::get('/pengelolaan-layanan/dashboard', 'index')->name('admin-dashboard');
    Route::get('/pengelolaan-layanan/data-tera/{tera}', 'showDataTera')->name('admin-data-tera');
    Route::get('/pengelolaan-layanan/data-kendaraan', 'showDataKendaraan')->name('admin-data-kendaraan');
    Route::get('/pengelolaan-layanan/ajukan-kendaraan', 'showAjukanKendaraan')->name('admin-ajukan-kendaraan');
    Route::get('/pengelolaan-layanan/update-kendaraan', 'showUpdateKendaraan')->name('admin-update-kendaraan');
    Route::get('/pengelolaan-layanan/delete-kendaraan', 'deleteKendaraan')->name('admin-delete-kendaraan');
    Route::get('/pengelolaan-layanan/data-perusahaan', 'showDataPerusahaan')->name('admin-data-perusahaan');
    Route::get('/pengelolaan-layanan/ajukan-perusahaan', 'showAjukanPerusahaan')->name('admin-ajukan-perusahaan');
    Route::get('/pengelolaan-layanan/update-perusahaan', 'showUpdatePerusahaan')->name('admin-update-perusahaan');
    Route::get('/pengelolaan-layanan/delete-perusahaan', 'deletePerusahaan')->name('admin-delete-perusahaan');
    Route::get('/pengelolaan-layanan/update-tera/{tera}',  'showUpdateTera')->name('admin-update-tera');
    Route::get('/pengelolaan-layanan/preview-tera/{tera}', 'previewTera')->name('admin-preview-tera');
    Route::get('/pengelolaan-layanan/data-status/', 'getDataStatus')->name('admin-data-status');
});
Route::middleware(['pengajuan-or-pelayanan'])->group(function () {
    Route::get('/layanan/data-tera/{tera}');
});
Route::get('/pengajuan-layanan/ajukan-tera/{tera}', [PengajuanLayananTeraController::class, 'showAjukanTera'])->name('guest-ajukan-tera');
Route::middleware(['only-guest'])->group(function () {
    Route::get('/pengajuan-layanan/data-tera/{tera}', [PengajuanLayananTeraController::class, 'showDataTera'])->name('guest-data-tera');
});
