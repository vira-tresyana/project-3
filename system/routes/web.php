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

Route::get('/login', function () {
    return view('login');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/admin/beranda', function () {
    return view('admin/beranda');
});

Route::get('/admin/kategori', function () {
    return view('admin/kategori');
});

Route::get('/admin/produk', function () {
    return view('admin/produk');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/registrasi', function () {
    return view('registrasi');
});


Route::get('/user/', function () {
    return view('user.beranda');
});

