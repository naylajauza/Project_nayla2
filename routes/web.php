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

// variable
Route::get('/about', function () {
    $nama = "nayla";
    $jk = "perempuan";
    $pt = "S2";
    $pekerjaan = "ya";
    $alamat = "bandung";
    return view('data_diri',compact('nama','jk','pt','pekerjaan','alamat'));
});

Route::get('/haechan', function () {
    $nama = "Lee Donghyuck";
    $jk = "laki-laki";
    $kelahiran = "6 Juni 2000";
    $grup = "NCT";
    return view('biodata',compact('nama','jk','kelahiran','grup'));
});

// parameter
Route::get('/about2/{nama}/{jenis_kelamin}/{pendidikan_terakhir}/{pekerjaan}/{alamat}', function (Request $request, $nama,$jenis_kelamin,$pendidikan_terakhir,$pekerjaan,$alamat) {
    $nama2 = $nama;
    $jenis_kelamin2 = $jenis_kelamin;
    $pendidikan_terakhir2 = $pendidikan_terakhir;
    $pekerjaan2 = $pekerjaan;
    $alamat2 = $alamat;
    return view('biodata2',compact('nama2','jenis_kelamin2','pendidikan_terakhir2','pekerjaan2','alamat2'));
});
