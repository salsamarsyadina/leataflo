<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('home');})->name('home');
Route::get('/tentang', function () {return view('tentang');})->name('tentang');
Route::resource('produk', ProdukController::class);
