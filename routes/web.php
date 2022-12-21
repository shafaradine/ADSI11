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
    return view('welcome');
});

Route::get('/ambisyuk', function () {
    return view('dashboard');
});

Route::get('/ambisyuk/masuk', function () {
    return view('login');
});

Route::get('/ambisyuk/daftar', function () {
    return view('register');
});

Route::get('/ambisyuk/home/{id}', function () {
    return view('home');
});

Route::get('/ambisyuk/profile/{id}', function () {
    return view('profil');
});

Route::get('/ambisyuk/beasiswa', function () {
    return view('beasiswa/beasiswafull');
});

Route::get('/ambisyuk/beasiswa/{id}', function () {
    return view('beasiswa/detail');
});

Route::get('/ambisyuk/magang', function () {
    return view('magang/magangfull');
});

Route::get('/ambisyuk/magang/{id}', function () {
    return view('magang/beasiswafull');
});

Route::get('/ambisyuk/artikel', function () {
    return view('artikel/artikelfull');
});

Route::get('/ambisyuk/artikel/{id}', function () {
    return view('artikel/artikeldetail');
});
