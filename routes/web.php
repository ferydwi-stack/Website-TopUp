<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TopUpController;

// Home page route
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Games routes
Route::get('/games', [TopUpController::class, 'index'])->name('games.index');
Route::get('/games/{game:slug}', [TopUpController::class, 'showGame'])->name('games.show');

// Top up routes
Route::get('/topup/create/{diamond}', [TopUpController::class, 'create'])->name('topup.create');
Route::post('/topup/store', [TopUpController::class, 'store'])->name('topup.store');
Route::get('/topup/{id}', [TopUpController::class, 'show'])->name('topup.show');

// Payment methods route
Route::get('/payment', function () {
    return view('payment.index');
})->name('payment.index');

// Support route
Route::get('/support', function () {
    return view('support.index');
})->name('support.index');

// Promo route
Route::get('/promo', function () {
    return view('promo.index');
})->name('promo.index');

// History route
Route::get('/history', function () {
    return view('history.index');
})->name('history.index');

// Guide route
Route::get('/guide', function () {
    return view('guide.index');
})->name('guide.index');

// FAQ route
Route::get('/faq', function () {
    return view('faq.index');
})->name('faq.index');

// Auth routes
Route::get('/login', function () {
    return view('auth.login');
})->name('auth.login');

Route::get('/register', function () {
    return view('auth.register');
})->name('auth.register');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('auth.forgot-password');
