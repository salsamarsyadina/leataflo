<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('produk.menu');})->name('menu');
Route::resource('produk', ProdukController::class);
