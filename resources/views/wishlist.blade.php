@extends('layouts.app')

@section('title', 'My Wishlist | FreshBerry')
@section('description', 'View and manage your favorite strawberry products.')

@section('content')
<section class="py-20 bg-gradient-to-b from-pink-50 to-white">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl font-bold text-center mb-10 text-red-600">❤️ My Wishlist</h1>

        @php
            $wishlist = [
                ['name' => 'Chocolate-Dipped Strawberries', 'price' => 800, 'image' => 'https://storables.com/wp-content/uploads/2023/10/how-to-store-chocolate-covered-strawberries-overnight-1696826680.jpg'],
                ['name' => 'Strawberry Jam (250g)', 'price' => 350, 'image' => 'https://thecafesucrefarine.com/wp-content/uploads/Strawberry-Freezer-Jam-1.jpg'],
                ['name' => 'Fresh Hill Country Strawberries', 'price' => 450, 'image' => 'https://static.wixstatic.com/media/2c91de_1a61cc78d00f4cb084e56cd31330b785~mv2.jpg/v1/fill/w_980,h_772,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/2c91de_1a61cc78d00f4cb084e56cd31330b785~mv2.jpg']
            ];
        @endphp

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($wishlist as $item)
            <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $item['name'] }}</h3>
                    <p class="text-red-500 font-semibold text-lg mb-4">Rs. {{ number_format($item['price']) }}</p>
                    <div class="flex justify-between">
                        <button class="bg-red-500 text-white px-4 py-2 rounded-full hover:bg-red-600 transition">Add to Cart</button>
                        <button class="text-gray-400 hover:text-red-600 transition">Remove ✕</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
