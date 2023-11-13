<?php

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

Route::get('/', function () {
    return view('index');
   
});

Route::get('about', function () {
    //$nama = 'Muhammad Aulia Irza';
    //$prodi = 'Teknologi Informasi';
    //return view('about')->with('nama', $nama);
    return view('about');
   
});

Route::get('profile', function () {
    $nama = 'Muhammad Aulia Irza';
    return view('profile')->with('nama', $nama);
   
});

Route::get('mahasiswa', function () {
    return view('mahasiswa');
   
});
