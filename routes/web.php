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
    return view('pertemuan4/index');
   
});

Route::get('about', function () {
    //$nama = 'Muhammad Aulia Irza';
    //$prodi = 'Teknologi Informasi';
    //return view('about')->with('nama', $nama);
    return view('pertemuan4/about');
   
});

Route::get('profile', function () {
    $nama = 'Muhammad Aulia Irza';
    return view('pertemuan4/profile')->with('nama', $nama);
   
});

Route::get('mahasiswa', function () {
    return view('pertemuan4/mahasiswa');
   
});

route::get('array',function(){
    $nilai_awal = 1;
    while ($nilai_awal <= 10){
        echo 'Hallo Laravel '.$nilai_awal. 'x<br>';
        $nilai_awal++;
    }

    
   
    //return 'Halaman Array';
});
