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
    return view('pertemuan4/home');
   
});

Route::get('about', function () {
    $nama = 'Muhammad Aulia Irza';
    $prodi = 'Teknologi Informasi';
    //return view('about')->with('nama', $nama);
    return view('pertemuan4/about', compact('nama', 'prodi'));
   
});

Route::get('profile', function () {
    return view('pertemuan4/profile');
   
});

Route::get('mahasiswa', function () {
    return view('pertemuan4/mahasiswa');
   
});
