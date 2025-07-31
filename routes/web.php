<?php

use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', function () {
    return view('home');
});

// 🛒 Shop page
Route::get('/shop', function () {
    return view('shop');
});

Route::get('/recipes', function () {
    return view('recipes');
});

Route::get('/blog', function () {
    return view('blog');
});

// In routes/web.php
Route::view('/blog', 'blog'); // This loads blog.blade.php directly


Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/product/{slug}', function ($slug) {
    return view('product-detail');
})->name('product.detail');


Route::get('/gift', function () {
    return view('custom-gifts');
})->name('gift');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/wishlist', function () {
    return view('wishlist');
})->name('wishlist');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
