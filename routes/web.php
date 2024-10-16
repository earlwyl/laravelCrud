<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PraktikumController;
use App\Http\Controllers\TransaksiController;
use App\Models\Product;

Route::get('/', [HomeController::class, "home"]);

// Route::get("/biodata", function () {
//     return view("biodata",);
// });

// Route::get("/latihan", function () {
//     return view("latihan");
// });

// Route::get("/produk", function () {
//     return view("produk");
// });
// Route::get("/produk", [ProdukController::class, "product"]);
Route::get("/produk", [ProductController::class, "product"]);

Route::get('/view-product', [ProductController::class, 'index'])->name('product.index');

Route::get('/add-product', [ProductController::class, 'create'])->name('product.create');

Route::post('/view-product', [ProductController::class, 'store'])->name('product.store');

Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');

Route::post('/product/edit/{id}', [ProductController::class, 'update'])->name('product.update');

Route::post('/product/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');

Route::get("/transaksi", [TransaksiController::class, "transaksi"]);


Route::get("/laporan", [LaporanController::class, "laporan"]);
