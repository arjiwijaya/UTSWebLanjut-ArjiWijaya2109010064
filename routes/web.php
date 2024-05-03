<?php

use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class, 'index']);
Route::get('/daftar-produk', [SiteController::class, 'daftarProduk'])->name('daftar-produk');
Route::get('/tambah-produk', [SiteController::class, 'tambahProduk'])->name('tambah-produk');
