<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PemesananController;

use App\Http\Controllers\HomeController;

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginProcess'])->name('login.process');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerProcess'])->name('register.process');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/category/{slug}', [HomeController::class, 'category'])->name('category');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/categories', [HomeController::class, 'categories'])->name('categories');
Route::get('/category/{slug}', [HomeController::class, 'categoryDetail'])->name('category.detail');

Route::middleware(['auth'])->group(function () {
    Route::resource('layanan', LayananController::class);
    Route::resource('pemesanan', PemesananController::class);
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');
