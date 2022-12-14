<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PenjualanController;
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

Route::resource('/', BarangController::class);
Route::resource('/barang', BarangController::class);
Route::resource('/penjualan', PenjualanController::class);
Route::get('/penjualan/get-barang/{id}', [PenjualanController::class, 'getBarang']);
