@extends('layouts.app')

@section('title', 'Custom Strawberry Gifts | FreshBerry')
@section('description', 'Create personalized strawberry gift sets for your loved ones — curated with care and flavor.')

@section('content')

<!-- Hero Banner -->
<section class="bg-gradient-to-r from-red-500 to-pink-500 text-white py-20 text-center">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">🎁 Custom Strawberry Gifts</h1>
        <p class="text-lg md:text-xl text-pink-100 max-w-2xl mx-auto">Create personalized gifts for birthdays, weddings, or corporate events. Made fresh, packed with love.</p>
    </div>
</section>

<!-- Gift Options -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Popular Custom Gift Options</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $gifts = [
                    [
                        'title' => 'Mini Strawberry Treat Box',
                        'desc' => 'Includes 6 chocolate-dipped strawberries and a thank-you note.',
                        'price' => 950,
                        'img' => 'https://i.pinimg.com/736x/08/65/cc/0865cc24fba78d49474ee893aa2c6a61.jpg'
                    ],
                    [
                        'title' => 'Wedding Favors',
                        'desc' => 'Custom-wrapped strawberry candies and jam jars with name tags.',
                        'price' => 1250,
                        'img' => 'https://i.pinimg.com/736x/ba/90/77/ba9077fb371299077ca7df81adb6b7cf--jam-jar-wedding-wedding-favours.jpg'
                    ],
                    [
                        'title' => 'Corporate Gifting Packs',
                        'desc' => 'Boxes of freeze-dried strawberries with branded packaging.',
                        'price' => 1800,
                        'img' => 'https://i.pinimg.com/736x/d3/c2/a9/d3c2a9ba8343340e5aa840bc06975288.jpg'
                    ]
                ];
            @endphp

            @foreach ($gifts as $gift)
            <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                <img src="{{ $gift['img'] }}" alt="{{ $gift['title'] }}" class="h-48 w-full object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $gift['title'] }}</h3>
                    <p class="text-gray-600 mb-4">{{ $gift['desc'] }}</p>
                    <span class="text-red-500 font-semibold text-lg">Rs. {{ number_format($gift['price']) }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Custom Order CTA -->
<section class="bg-pink-50 py-16 text-center">
    <div class="container mx-auto px-6">
        <h2 class="text-2xl md:text-3xl font-bold mb-4 text-gray-800">Want a Fully Personalized Gift?</h2>
        <p class="text-gray-600 mb-6 max-w-xl mx-auto">We customize gifts based on dietary needs, themes, and packaging. Fill out the form below or contact us directly.</p>
        <a href="{{ route('contact') }}" class="inline-block bg-red-500 hover:bg-red-600 text-white font-semibold px-8 py-3 rounded-full transition-all duration-300">
            Contact for Custom Order
        </a>
    </div>
</section>

@endsection
