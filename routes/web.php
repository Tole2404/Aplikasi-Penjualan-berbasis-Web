<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\FakturController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\KuitansiController;

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

Auth::routes();

//home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');

//pelanggan
Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index'])->name('pelanggan');
Route::post('/pelanggan-simpan', [App\Http\Controllers\PelangganController::class, 'simpan'])->name('pelanggan-simpan');
Route::get('/pelanggan-edit/{id_pelanggan}', [App\Http\Controllers\PelangganController::class, 'edit'])->name('pelanggan-edit');
Route::post('/pelanggan-simpanedit/{id_pelanggan}', [App\Http\Controllers\PelangganController::class, 'simpanedit'])->name('pelanggan-simpanedit');
Route::get('/pelanggan-delete/{id_pelanggan}', [pelangganController::class, 'hapus'])->name('pelanggan-delete');

//produk
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/produk-input', [ProdukController::class, 'input'])->name('produk-input');
Route::post('/produk-simpan', [ProdukController::class, 'simpan'])->name('produk-simpan');
Route::get('/produk-edit/{id_produk}', [ProdukController::class, 'edit'])->name('produk-edit');
Route::post('/produk-simpanedit/{id_produk}', [ProdukController::class, 'simpanedit'])->name('produk-simpanedit');
Route::get('/produk-delete/{id_produk}', [ProdukController::class, 'hapus'])->name('produk-delete');

//penjualan
Route::get('/entri-penjualan', [PenjualanController::class, 'entrypenjualan'])->name('entri-penjualan');
Route::post('/simpan-penjualan', [PenjualanController::class, 'simpanpesan'])->name('simpan-pesan');
Route::get('/entry-detil-pesan/{id_pesan}', [PenjualanController::class, 'entrydetilpesan'])->name('entry-detil-pesan');
Route::post('/simpan-detil', [PenjualanController::class, 'simpandetil'])->name('simpan-detil');
Route::delete('/delete-detil/{id_pesan}', [PenjualanController::class, 'deleteDetilpesan'])->name('delete-detil');

//faktur dan kuitansi
Route::resource('faktur', FakturController::class);
Route::resource('kuitansi', KuitansiController::class);

// laporan 
Route::get('/laporan-tanggal', [LaporanController::class, 'tanggal'])->name('laporan-tanggal');