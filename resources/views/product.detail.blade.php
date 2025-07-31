@extends('layouts.app')

@section('title', 'Product Details - ' . $product['name'] . ' | FreshBerry')
@section('description', $product['short_desc'])

@section('content')

<!-- Breadcrumb Navigation -->
<nav class="bg-gray-50 py-4">
    <div class="container mx-auto px-6">
        <ol class="flex items-center space-x-2 text-sm">
            <li><a href="/" class="text-red-600 hover:text-red-800">Home</a></li>
            <li class="text-gray-500">›</li>
            <li><a href="{{ route('shop') }}" class="text-red-600 hover:text-red-800">Shop</a></li>
            <li class="text-gray-500">›</li>
            <li><a href="{{ route('shop') }}?category={{ $product['category'] }}" class="text-red-600 hover:text-red-800 capitalize">{{ $product['category'] }}</a></li>
            <li class="text-gray-500">›</li>
            <li class="text-gray-800 font-medium">{{ $product['name'] }}</li>
        </ol>
    </div>
</nav>

<!-- Product Detail Section -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Product Info Already Included Above -->
        </div>
    </div>
</section>

<!-- Reviews Placeholder -->
<section id="reviews" class="bg-gray-50 py-12">
    <div class="container mx-auto px-6">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Customer Reviews</h2>
        <div class="bg-white p-6 rounded-lg shadow">
            <p class="text-gray-600 italic">"Absolutely delicious strawberries! Super fresh and well packed. Will order again."</p>
            <p class="mt-4 font-semibold text-red-500">- Customer A</p>
        </div>
    </div>
</section>

<!-- Image Switch Script -->
<script>
    function changeMainImage(src, thumb) {
        const main = document.getElementById('mainImage');
        const allThumbs = document.querySelectorAll('.thumbnail-img');
        main.src = src;
        allThumbs.forEach(img => img.classList.remove('border-red-500'));
        thumb.classList.add('border-red-500');
    }
</script>

@endsection
