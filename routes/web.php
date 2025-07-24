<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DetailBarController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\MutasiController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/form', [AdminController::class, 'form'])->name('admin.form');
});

// untuk mengakses halaman admin
Route::get('/form', [FormController::class, 'index']);
Route::get('/table', [TableController::class, 'indexx'])->name('admin.table');

// ini yang jalan
Route::get('/form/create', [ProductController::class, 'create'])->name('form.create');
Route::post('/table', [ProductController::class, 'store'])->name('products.store');
Route::get('/table', [ProductController::class, 'index'])->name('admin.table');
Route::get('/detailbarang/{id}', [DetailBarController::class, 'show'])->name('detailbarang');
Route::get('/cart', [UserController::class, 'cart'])->name('user.cart');
Route::get('/contact', [ContactController::class, 'index'])->name('user.contact');

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
});

Route::get('/shop/detail/{id}', [ShopController::class, 'detail'])->name('user.detail');
Route::get('/detailbarang/{id}', [DetailBarController::class, 'show']);
Route::get('/detailbarang', [DetailBarController::class, 'detail']);
Route::get('/shop', [ShopController::class, 'indexx'])->name('user.shop');
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/checkout', [CheckoutController::class, 'index']); //INI CHECKOUT

// edit delete
Route::get('/table', [ProductController::class, 'index'])->name('admin.index');
Route::get('/admin/{id}/edit', [ProductController::class, 'edit'])->name('admin.edit');
Route::put('/admin/{id}', [ProductController::class, 'update'])->name('admin.update');
Route::delete('/admin/{id}', [ProductController::class, 'destroy'])->name('admin.destroy');


Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/remove-from-cart/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');

//cart edit
Route::post('/cart/{id}/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/cart/{id}/update', [CartController::class, 'updateCart'])->name('cart.update');


use App\Http\Controllers\AdminCartController;

Route::middleware(['auth'])->group(function () {
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'showCart'])->name('user.cart');
    Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/checkout', [CheckoutController::class, 'showCheckout'])->name('checkout');
    Route::post('/checkout/place-order', [CheckoutController::class, 'placeOrder'])->name('checkout.place');
    Route::post('/checkout/proses', [CheckoutController::class, 'prosesCheckout'])->name('checkout.proses');
    
});

Route::get('/pembayaran/{transactionId}', [PembayaranController::class, 'uploadForm'])->name('pembayaran.form');
Route::post('/pembayaran', [PembayaranController::class, 'store'])->name('pembayaran.store');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/datatransaksi', [TransaksiController::class, 'index'])->name('datatransaksi.index');
    Route::get('/datatransaksi/{id}', [TransaksiController::class, 'show'])->name('datatransaksi.show');
    Route::put('/datatransaksi/{id}/validasi', [TransaksiController::class, 'validasiTransaksi'])->name('transaksi.validasi');
});

Route::patch('/transaksi/{id}/validasi', [TransaksiController::class, 'validasiTransaksi']) ->name('transaksi.validasi');
Route::get('/mutasi', [MutasiController::class, 'index'])->name('admin.mutasi');
Route::post('/mutasi', [MutasiController::class, 'store'])->name('mutasi.store');
Route::get('/stok',  [StokController::class, 'index'])->name('stok.index');
Route::post('/stok', [StokController::class, 'store'])->name('stok.store');
// routes/web.php
Route::patch('/transaksi/{id}/tolak', [TransaksiController::class, 'tolakTransaksi'])->name('transaksi.tolak');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

//  Route::middleware(['auth'])->prefix('admin')->group(function () {
//      Route::resource('pembelian', \App\Http\Controllers\PembelianController::class);
//  });
use App\Http\Controllers\PembelianController;
Route::get('/pembelian', [PembelianController::class, 'index'])->name('index');
Route::get('/pembelian/create', [PembelianController::class, 'create'])->name('pembelian.create');
Route::post('/pembelian/vendor', [PembelianController::class, 'storeVendor'])->name('pembelian.vendor.store');
Route::post('pembelian/store', [PembelianController::class, 'store'])->name('pembelian.store');
Route::put('/pembelian/{id}/approve', [PembelianController::class, 'approve'])->name('pembelian.approve');
