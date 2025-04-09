<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DevController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
Route::get('/faq', [FAQController::class, 'index'])->name('faq');
Route::get('/dev', [DevController::class, 'index'])->name('dev');

Route::get('/login', function () {
    return view('pages.login-page');
})->name('login');

Route::get('/register', function () {
    return view('pages.register-page');
})->name('register');

Route::controller(AuthController::class)->group(function () {
    Route::post('/login', 'login')->name('login');
    Route::post('/register', 'register')->name('register');
    Route::get('/logout', 'logout')->name('logout');
});

Route::controller(ShopController::class)->group(function () {
    Route::get('/shop', 'index')->name('shop');
    Route::get('/item/{id}', 'show')->name('item');
    Route::get('/item/{id}/add-to-cart', 'add')->name('add-to-cart');
    Route::get('/cart', 'cart')->name('cart');
    Route::get('/checkout/{id}', 'checkout')->name('checkout');
});


require __DIR__.'/api.php';
