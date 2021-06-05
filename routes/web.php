<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\BarangController;

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
    return view('0091home');
});
Route::get('/0091barang', function () {
    return view('0091barang');
});
Route::get('/0091pelanggan', function () {
    return view('0091pelanggan');
});
Route::get('/0091transaksi', function () {
    return view('0091transaksi');
});
Route::get('/0091user', function () {
    return view('0091user');
});
Route::get('/0091barang/barang_tambah', function () {
    return view('barang_tambah');
});
Route::get('/0091pelanggan/pelanggan_tambah', function () {
    return view('pelanggan_tambah');
});
Route::get('/0091transaksi/transaksi_tambah', function () {
    return view('transaksi_tambah');
});
Route::get('/0091user/user_tambah', function () {
    return view('user_tambah');
});
Route::resource('barang', 'app\Http\Controllers\BarangController::class');
