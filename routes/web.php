<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/', [ProdukController::class, 'publikIndex'])->name('home');
Route::get('/produk/{id}', [ProdukController::class, 'publikShow'])->name('produk.detail');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('produk', ProdukController::class);
});