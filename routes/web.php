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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "Tentang Kami"
    ]);
});
Route::get('/portfolio', function () {
    return view('portfolio', [
        "title" => "Portfolio"
    ]);
});
Route::get('/layanan', function () {
    return view('layanan', [
        "title" => "Layanan"
    ]);
});
Route::get('/klien', function () {
    return view('klien', [
        "title" => "Klien Kami"
    ]);
});
Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Kontak"
    ]);
});
