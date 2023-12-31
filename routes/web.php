<?php

use App\Http\Controllers\LayananController;
use App\Http\Controllers\LoginController;
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
    return view('user.home');
});

Route::get('/test', function () {
    return view('livewire.test-page');
});

Route::get('layanan/{layanan}', [LayananController::class, 'render']);
