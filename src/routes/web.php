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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/barang/form',[App\Http\Controllers\barangcontroller::class,'tampilform'])
->name("barang.form");
Route::get('/barang/hapus/{id}',[App\Http\Controllers\barangcontroller::class,'hapusbarang'])
->name("barang.hapus");
Route::post('/barang/simpan',[App\Http\Controllers\barangcontroller::class,'buatbarang'])
->name("barang.simpan");


Route::get('/karyawan', [App\Http\Controllers\karyawancontroller::class, 'index'])->name('karyawan');
Route::get('/karyawan/hapus/{id}',[App\Http\Controllers\karyawancontroller::class,'hapuskaryawan'])
->name("karyawan.hapus");
Route::post('/karyawan/simpan',[App\Http\Controllers\karyawancontroller::class,'buatkaryawan'])
->name("karyawan.simpan");

Route::get('/pelanggan', [App\Http\Controllers\pelanggancontroller::class, 'index'])->name('pelanggan');
Route::get('/pelanggan/hapus/{id}',[App\Http\Controllers\pelanggancontroller::class,'hapuspelanggan'])
->name("pelanggan.hapus");
Route::post('/pelanggan/simpan',[App\Http\Controllers\pelanggancontroller::class,'buatpelanggan'])
->name("pelanggan.simpan");


Route::get('/penjualan', [App\Http\Controllers\penjualancontroller::class, 'index'])->name('penjualan');
Route::get('/penjualan/hapus/{id}',[App\Http\Controllers\penjualancontroller::class,'hapuspenjualan'])
->name("penjualan.hapus");
Route::post('/penjualan/simpan',[App\Http\Controllers\penjualancontroller::class,'buatpenjualan'])
->name("penjualan.simpan");


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
