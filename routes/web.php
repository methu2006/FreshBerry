<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

// Register page
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Lightweight demo auth routes
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Simple protected route (requires session 'user')
Route::get('/account', [AuthController::class, 'account'])->name('account');

// Footer quick links (enhanced)
Route::get('/shop/fresh', function () {
    $img = asset('images/fresh.jpg');
    $products = [
        ['name' => 'Hill Country Fresh 250g', 'price' => 450, 'img' => $img],
        ['name' => 'Premium Fresh 500g',     'price' => 850, 'img' => $img],
        ['name' => 'Organic Fresh 1kg',      'price' => 1550,'img' => $img],
    ];
    return view('shop-fresh', compact('products'));
});

Route::get('/shop/preserves', function () {
    $jamImg   = asset('images/jam.jpg');
    $syrupImg = asset('images/syrup.jpg');
    $products = [
        ['name' => 'Strawberry Jam 200g',    'price' => 590, 'img' => $jamImg],
        ['name' => 'Low Sugar Preserve 300g','price' => 760, 'img' => asset('images/low-sugar.jpg')],
        ['name' => 'Strawberry Syrup 250ml', 'price' => 680, 'img' => $syrupImg],
    ];
    return view('shop-preserves', compact('products'));
});

// Reviews: list + submit (session-backed demo)
Route::get('/reviews', function () {
    $reviews = session('reviews', []);
    return view('reviews', compact('reviews'));
});
Route::post('/reviews', function (\Illuminate\Http\Request $request) {
    $data = $request->validate([
        'name' => 'required|string|min:2',
        'rating' => 'required|integer|min:1|max:5',
        'comment' => 'required|string|min:5',
    ]);
    $reviews = session('reviews', []);
    $data['created_at'] = now()->toDateTimeString();
    $reviews[] = $data;
    session(['reviews' => $reviews]);
    return redirect('/reviews')->with('status', 'Thanks for your review!');
});
Route::view('/chat', 'chat');
Route::view('/shipping', 'shipping');
Route::view('/returns', 'returns');
Route::view('/privacy', 'privacy');
