<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\OrderController;

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::get('/detail', [BuyerController::class, 'index']);
Route::post('/test', [ProdukController::class,'test']);
Route::get('/product/{id}', [BuyerController::class, 'detail'])->name('detail');
Route::get('/', [BuyerController::class, 'welcome']);
Route::get('/move-products', [ProdukController::class,'test']);
Route::post('/move-products/{productId}', [ProdukController::class, 'moveProduct'])->name('move-products');

View::composer('layouts.master', function ($view) {
    $loggedInUser = Auth::user();
    $view->with('loggedInUser', $loggedInUser);
});

Route::middleware(['auth', 'role:seller'])->group(function () {
    Route::get('/seller', [HomeController::class, 'index']);
    Route::resource('/pengiriman', PengirimanController::class);
    Route::resource('/penjualan', PenjualanController::class);
    Route::resource('/produk', ProdukController::class);
    Route::resource('/user', UserController::class);
    Route::post('/user/{id}', [UserController::class, 'changePassword'])->name('user.changePassword');
    Route::get('/cart', [CartController::class, 'index']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/pesanan', [RiwayatController::class, 'pesanan']);
    Route::get('/pengiriman', [RiwayatController::class, 'pengiriman']);
    Route::get('/selesai', [RiwayatController::class, 'selesai']);
    Route::post('/pesanan/{productId}', [RiwayatController::class, 'moveProductPesanan'])->name('move-products-pesanan');
    Route::post('/pengiriman/{productId}', [RiwayatController::class, 'moveProductPengiriman'])->name('move-products-pengiriman');
    Route::post('/selesai/{productId}', [RiwayatController::class, 'moveProductSelesai'])->name('move-products-selesai');
    Route::get('/penjualan/{_id}', [PenjualanController::class, 'show'])->name('penjualan.detail');
    Route::get('/penjualan/searchProduk', [PenjualanController::class, 'searchProduk'])->name('penjualan.searchProduk');
    Route::get('/penjualan/searchCustomer', [PenjualanController::class, 'searchCustomer'])->name('penjualan.searchCustomer');
    Route::get('/profil', [BuyerController::class, 'showProfile']);
});

Route::middleware(['auth', 'role:buyer'])->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('buyer.cart');
    Route::get('/testdoang', [BuyerController::class, 'showForm'])->name('buyertest.form');
    Route::post('/testdoang', [BuyerController::class, 'store'])->name('buyertest.store');
    Route::post('/logout_buyer', [AuthController::class, 'logout'])->name('logout_buyer');
    Route::get('/profile' , [BuyerController::class, 'showProfile'])->name('profile');
    Route::post('/profile/update/{id}', [BuyerController::class, 'updateProfile'])->name('updateProfile');
    Route::post('/profile/update-photo/{id}', [BuyerController::class, 'updatePhotoProfile'])->name('updatePhotoProfile');
    Route::post('/buy_product/{id}', [BuyerController::class, 'buyNow'])->name('buy.now');
    Route::post('/delete_product/{id}', [CartController::class, 'destroy'])->name('destroy.cart');
    Route::post('/cart/{productId}', [OrderController::class, 'tolongdong'])->name('tolongdong');
});

Route::get('/404', function () {
    return view('admin.errors.404');
})->name('custom.404');
