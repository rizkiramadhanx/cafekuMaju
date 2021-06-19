<?php

use App\Http\Controllers\KasirController;
use App\Http\Controllers\StokController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TransaksiController;

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



Auth::routes();


//

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {


    Route::get('/home', [TransaksiController::class, 'index'])->name('transaksi');

    // stok
    Route::get('/stok', [StokController::class, 'index'])->name('stok.index');
    Route::get('/stok/tambah', [StokController::class, 'create'])->name('stok.tambah');
    Route::post('/stok', [StokController::class, 'store'])->name('stok.store');
    Route::get('/stok/{id}', [StokController::class, 'destroy'])->name('stok.destroy');
    Route::get('/stok/edit/{id}', [StokController::class, 'show'])->name('stok.show');
    Route::post('/stok/edit/{id}', [StokController::class, 'edit'])->name('stok.edit');

    // kasir
    Route::get('/kasir', [KasirController::class, 'index'])->name('kasir.index');
    Route::get('/kasir/{kode_menu}', [KasirController::class, 'keranjang'])->name('kasir.keranjang');
    Route::get('/checkout', [KasirController::class, 'viewKeranjang'])->name('keranjang.view');
    Route::get('/checkout/confirm', [KasirController::class, 'final'])->name('kasir.terakhir');
    Route::get('/checkout/edit/{kode_menu}', [KasirController::class, 'editCheckout'])->name('keranjang.edit');
    Route::post('/checkout/edit/{kode_menu}', [KasirController::class, 'prosesEditCheckout'])->name('keranjang.proses');
    Route::get('/checkout/{kode_menu}', [KasirController::class, 'destroy'])->name('keranjang.destroy');
});
