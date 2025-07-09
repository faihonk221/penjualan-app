<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanController;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route khusus yang hanya bisa diakses kalau sudah login
Route::middleware(['auth'])->group(function () {
    Route::resource('/produk', ProdukController::class);

    Route::get('/transaksi', [TransaksiController::class, 'index']);
    Route::post('/transaksi', [TransaksiController::class, 'store']);

    Route::get('/laporan', [LaporanController::class, 'index']);
});

