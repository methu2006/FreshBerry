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

Route::get('/product/{slug}', function ($slug) {
    return view('product-detail');
})->name('product.detail');

Route::get('/blog', function () {
    return view('blog');
});
