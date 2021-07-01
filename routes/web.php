<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/suratMasuk', function () {
    return view('suratMasuk');
});

Route::get('/editSuratMasuk', function () {
    return view('editSuratMasuk');
});

Route::get('/daftarSurat', function () {
    return view('daftarSurat');
});

Route::get('/cetak', function () {
    return view('cetak');
});
