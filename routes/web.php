<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PesanKonsulController;
use App\Http\Controllers\PesanKursusController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BuyerController;


Route::get('/detail', [BuyerController::class, 'index']);
Route::get('/test', [TestController::class, 'index']);
Route::get('/product/{id}', [BuyerController::class, 'detail'])->name('detail');
// draft
Route::get('/', [BuyerController::class, 'welcome']);
Route::get('/kursus', [WelcomeController::class, 'kursus']);
Route::get('/pelayanan', [WelcomeController::class, 'pelayanan']);
Route::get('/konsultasi', [WelcomeController::class, 'konsultasi']);
Route::get('/pesan', [WelcomeController::class, 'pesan']);


Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

View::composer('layouts.master', function ($view) {
    $loggedInUser = Auth::user();
    $view->with('loggedInUser', $loggedInUser);
});

Route::middleware(['auth', 'role:seller'])->group(function () {
    Route::get('/admin', [HomeController::class, 'index']);
    Route::resource('/pengiriman', PengirimanController::class);
    Route::resource('/penjualan', PenjualanController::class);
    Route::resource('/pesan_kursus', PesanKursusController::class);
    Route::resource('/produk', ProdukController::class);
    Route::resource('/pesan_konsul', PesanKonsulController::class);
    Route::resource('/user', UserController::class);
    Route::post('/user/{id}', [UserController::class, 'changePassword'])->name('user.changePassword');
    Route::get('/cart', [CartController::class, 'index']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['auth', 'role:buyer'])->group(function () {
    Route::get('/cart', [CartController::class, 'index']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/404', function () {
    return view('admin.errors.404');
})->name('custom.404');
