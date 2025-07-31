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
            
            <!-- Product Images -->
            <div class="space-y-4">
                <!-- Main Image -->
                <div class="relative">
                    <img id="mainImage" src="{{ $product['images'][0] }}" alt="{{ $product['name'] }}" 
                         class="w-full h-96 lg:h-[500px] object-cover rounded-2xl shadow-xl">
                    
                    <!-- Image Badges -->
                    <div class="absolute top-6 left-6 flex flex-col gap-2">
                        <span class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-3 py-1 rounded-full text-sm font-bold shadow-lg">
                            ⭐ Premium Quality
                        </span>
                        @if($product['original_price'])
                            <span class="bg-red-500 text-white px-3 py-1 rounded-full text-sm font-bold shadow-lg">
                                {{ round((($product['original_price'] - $product['price']) / $product['original_price']) * 100) }}% OFF
                            </span>
                        @endif
                    </div>

                    <!-- Wishlist Button -->
                    <button class="absolute top-6 right-6 p-3 bg-white/90 backdrop-blur-sm rounded-full text-gray-600 hover:text-red-500 hover:bg-white transition-all duration-300 wishlist-btn shadow-lg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </button>
                </div>

                <!-- Thumbnail Images -->
                <div class="flex gap-3 overflow-x-auto pb-2">
                    @foreach($product['images'] as $index => $image)
                        <img src="{{ $image }}" alt="Product view {{ $index + 1 }}" 
                             class="w-20 h-20 object-cover rounded-lg cursor-pointer border-2 transition-all duration-300 thumbnail-img {{ $index === 0 ? 'border-red-500' : 'border-gray-200 hover:border-red-300' }}"
                             onclick="changeMainImage('{{ $image }}', this)">
                    @endforeach
                </div>
            </div>

            <!-- Product Information -->
            <div class="space-y-6">
                <!-- Product Header -->
                <div>
                    <div class="flex items-center gap-3 mb-2">
                        <span class="bg-pink-100 text-pink-800 text-sm font-semibold px-3 py-1 rounded-full capitalize">
                            {{ $product['category'] }}
                        </span>
                        <span class="text-gray-500 text-sm">SKU: {{ $product['sku'] }}</span>
                    </div>
                    
                    <h1 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                        {{ $product['name'] }}
                    </h1>
                    
                    <p class="text-lg text-gray-600 leading-relaxed">
                        {{ $product['short_desc'] }}
                    </p>
                </div>

                <!-- Rating & Reviews -->
                <div class="flex items-center gap-4">
                    <div class="flex items-center">
                        @for($i = 1; $i <= 5; $i++)
                            <svg class="w-5 h-5 {{ $i <= floor($product['rating']) ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        @endfor
                        <span class="ml-2 text-lg font-semibold text-gray-800">{{ $product['rating'] }}</span>
                    </div>
                    <span class="text-gray-600">({{ $product['review_count'] }} reviews)</span>
                    <a href="#reviews" class="text-red-600 hover:text-red-800 font-medium">See all reviews</a>
                </div>

                <!-- Price -->
                <div class="py-4">
                    <div class="flex items-center gap-4 mb-2">
                        <span class="text-4xl font-bold text-red-600">Rs. {{ number_format($product['price']) }}</span>
                        @if($product['original_price'])
                            <span class="text-2xl text-gray-500 line-through">Rs. {{ number_format($product['original_price']) }}</span>
                            <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-bold">
                                Save Rs. {{ number_format($product['original_price'] - $product['price']) }}
                            </span>
                        @endif
                    </div>
                    <p class="text-gray-600">Price per {{ $product['weight'] }} pack</p>
                </div>

                <!-- Stock Status -->
                <div class="flex items-center gap-3">
                    @if($product['stock'] > 50)
                        <div class="flex items-center text-green-600">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="font-semibold">Almost Sold Out!</span>
                        </div>
                        <span class="text-gray-600">(Only {{ $product['stock'] }} left)</span>
                    @endif
                </div>

                <!-- Quantity & Add to Cart -->
                <div class="space-y-4">
                    <div class="flex items-center gap-4">
                        <label class="text-lg font-semibold text-gray-800">Quantity:</label>
                        <div class="flex items-center border-2 border-gray-300 rounded-full">
                            <button class="px-4 py-2 text-gray-600 hover:text-gray-800 font-bold quantity-btn" data-action="decrease">-</button>
                            <span class="px-6 py-2 text-lg font-semibold quantity-display">1</span>
                            <button class="px-4 py-2 text-gray-600 hover:text-gray-800 font-bold quantity-btn" data-action="increase">+</button>
                        </div>
                        <span class="text-gray-600">Available: {{ $product['stock'] }}</span>
                    </div>

                    <div class="flex gap-4">
                        <button class="flex-1 bg-gradient-to-r from-red-500 to-pink-500 hover:from-red-600 hover:to-pink-600 text-white px-8 py-4 rounded-full text-lg font-semibold transition-all duration-300 transform hover:scale-105 add-to-cart-btn shadow-lg">
                            <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-1.1 5.4M7 13v8a2 2 0 002 2h4.5M9 19.5h.01M20 19.5h.01"></path>
                            </svg>
                            Add to Cart
                        </button>
                        
                        <button class="bg-white border-2 border-red-500 text-red-500 hover:bg-red-500 hover:text-white px-8 py-4 rounded-full text-lg font-semibold transition-all duration-300 buy-now-btn">
                            Buy Now
                        </button>
                    </div>
                </div>

                <!-- Product Features -->
                <div class="bg-gray-50 rounded-2xl p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Why Choose This Product?</h3>
                    <ul class="space-y-3">
                        @foreach($product['features'] as $feature)
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                {{ $feature }}
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Quick Info -->
                <div class="grid grid-cols-2 gap-4 text-sm">
                    <div class="bg-white border border-gray-200 rounded-lg p-4">
                        <div class="text-gray-600 mb-1">Weight</div>
                        <div class="font-semibold">{{ $product['weight'] }}</div>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-lg p-4">
                        <div class="text-gray-600 mb-1">Origin</div>
                        <div class="font-semibold">{{ $product['origin'] }}</div>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-lg p-4">
                        <div class="text-gray-600 mb-1">Shelf Life</div>
                        <div class="font-semibold">{{ $product['shelf_life'] }}</div>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-lg p-4">
                        <div class="text-gray-600 mb-1">Category</div>
                        <div class="font-semibold capitalize">{{ $product['category'] }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Details Tabs -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-6">
        <!-- Tab Navigation -->
        <div class="flex border-b border-gray-200 mb-8">
            <button class="tab-btn active px-6 py-3 font-semibold border-b-2 border-red-500 text-red-600" data-tab="description">
                Description
            </button>
            <button class="tab-btn px-6 py-3 font-semibold border-b-2 border-transparent text-gray-600 hover:text-red-600" data-tab="nutritional">
                Nutritional Info
            </button>
            <button class="tab-btn px-6 py-3 font-semibold border-b-2 border-transparent text-gray-600 hover:text-red-600" data-tab="reviews">
                Reviews ({{ $product['review_count'] }})
            </button>
            <button class="tab-btn px-6 py-3 font-semibold border-b-2 border-transparent text-gray-600 hover:text-red-600" data-tab="shipping">
                Shipping & Returns
            </button>
        </div>

        <!-- Tab Content -->
        <div class="bg-white rounded-2xl p-8 shadow-lg">
            <!-- Description Tab -->
            <div id="description" class="tab-content">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Product Description</h3>
                <div class="prose prose-lg max-w-none">
                    <p class="text-gray-700 leading-relaxed mb-6">{{ $product['full_desc'] }}</p>
                    
                    <h4 class="text-xl font-semibold text-gray-800 mb-4">Perfect For:</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <div class="flex items-center p-4 bg-red-50 rounded-lg">
                            <span class="text-2xl mr-3">🥤</span>
                            <div>
                                <div class="font-semibold">Smoothies & Juices</div>
                                <div class="text-sm text-gray-600">Blend into refreshing drinks</div>
                            </div>
                        </div>
                        <div class="flex items-center p-4 bg-red-50 rounded-lg">
                            <span class="text-2xl mr-3">🧁</span>
                            <div>
                                <div class="font-semibold">Baking & Desserts</div>
                                <div class="text-sm text-gray-600">Perfect for cakes and pastries</div>
                            </div>
                        </div>
                        <div class="flex items-center p-4 bg-red-50 rounded-lg">
                            <span class="text-2xl mr-3">🥣</span>
                            <div>
                                <div class="font-semibold">Breakfast Bowls</div>
                                <div class="text-sm text-gray-600">Top your yogurt or cereal</div>
                            </div>
                        </div>
                        <div class="flex items-center p-4 bg-red-50 rounded-lg">
                            <span class="text-2xl mr-3">🍓</span>
                            <div>
                                <div class="font-semibold">Fresh Snacking</div>
                                <div class="text-sm text-gray-600">Enjoy as a healthy snack</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Nutritional Info Tab -->
            <div id="nutritional" class="tab-content hidden">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Nutritional Information</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Per serving:</h4>
                        <div class="space-y-3">
                            @foreach($product['nutritional_info'] as $nutrient => $value)
                                <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                                    <span class="font-medium">{{ $nutrient }}</span>
                                    <span class="text-red-600 font-semibold">{{ $value }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="bg-green-50 rounded-xl p-6">
                        <h4 class="text-lg font-semibold text-green-800 mb-4">Health Benefits</h4>
                        <ul class="space-y-2 text-green-700">
                            <li class="flex items-center"><span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>Rich in antioxidants</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>Supports immune system</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>Good source of fiber</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>Low in calories</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>Heart-healthy nutrients</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Reviews Tab -->
            <div id="reviews" class="tab-content hidden">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-2xl font-bold text-gray-800">Customer Reviews</h3>
                    <button class="bg-red-500 hover:bg-red-600 text-white px-6 py-2 rounded-full font-semibold transition-colors">
                        Write a Review
                    </button>
                </div>

                <!-- Reviews Summary -->
                <div class="bg-gray-50 rounded-xl p-6 mb-8">
                    <div class="flex items-center gap-8">
                        <div class="text-center">
                            <div class="text-4xl font-bold text-gray-800">{{ $product['rating'] }}</div>
                            <div class="flex items-center justify-center mt-2">
                                @for($i = 1; $i <= 5; $i++)
                                    <svg class="w-5 h-5 {{ $i <= floor($product['rating']) ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                @endfor
                            </div>
                            <div class="text-gray-600 mt-1">{{ $product['review_count'] }} reviews</div>
                        </div>
                        <div class="flex-1">
                            <div class="space-y-2">
                                @for($i = 5; $i >= 1; $i--)
                                    <div class="flex items-center gap-2">
                                        <span class="w-3 text-sm">{{ $i }}</span>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <div class="flex-1 bg-gray-200 rounded-full h-2">
                                            <div class="bg-yellow-400 h-2 rounded-full" style="width: {{ rand(20, 90) }}%"></div>
                                        </div>
                                        <span class="text-sm text-gray-600">{{ rand(5, 45) }}%</span>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Individual Reviews -->
                <div class="space-y-6">
                    @foreach($reviews as $review)
                        <div class="border-b border-gray-200 pb-6 last:border-b-0">
                            <div class="flex items-start justify-between mb-4">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center text-red-600 font-bold">
                                        {{ substr($review['name'], 0, 1) }}
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-2">
                                            <h4 class="font-semibold text-gray-800">{{ $review['name'] }}</h4>
                                            @if($review['verified'])
                                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">✓ Verified</span>
                                            @endif
                                        </div>
                                        <div class="flex items-center gap-2 mt-1">
                                            <div class="flex">
                                                @for($i = 1; $i <= 5; $i++)
                                                    <svg class="w-4 h-4 {{ $i <= $review['rating'] ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                    </svg>
                                                @endfor
                                            </div>
                                            <span class="text-sm text-gray-500">{{ $review['date'] }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-gray-700 leading-relaxed">{{ $review['comment'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Shipping Tab -->
            <div id="shipping" class="tab-content hidden">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Shipping & Returns</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-4">🚚 Shipping Information</h4>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2 mt-1">✓</span>
                                <span><strong>Free delivery</strong> for orders over Rs. 1,500</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2 mt-1">✓</span>
                                <span><strong>Same-day delivery</strong> in Colombo for orders placed before 2 PM</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2 mt-1">✓</span>
                                <span><strong>Island-wide delivery</strong> within 1-3 business days</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2 mt-1">✓</span>
                                <span><strong>Cold chain delivery</strong> for fresh products</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-4">🔄 Return Policy</h4>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <span class="text-blue-500 mr-2 mt-1">✓</span>
                                <span><strong>7-day return</strong> guarantee for unopened items</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-500 mr-2 mt-1">✓</span>
                                <span><strong>Full refund</strong> for damaged or defective products</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-500 mr-2 mt-1">✓</span>
                                <span><strong>Easy return process</strong> - just contact our support</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-500 mr-2 mt-1">✓</span>
                                <span><strong>Quality guarantee</strong> - we stand behind our products</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Products -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">You Might Also Like</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($related_products as $related)
                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="relative">
                        <a href="{{ route('product.show', $related['slug']) }}">
                            <img src="{{ $related['img'] }}" alt="{{ $related['name'] }}" class="w-full h-48 object-cover">
                        </a>
                    </div>
                    <div class="p-6">
                        <a href="{{ route('product.show', $related['slug']) }}" class="block hover:text-red-600 transition-colors">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $related['name'] }}</h3>
                        </a>
                        <div class="flex items-center justify-between">
                            <span class="text-xl font-bold text-red-600">Rs. {{ number_format($related['price']) }}</span>
                            <div class="flex items-center text-sm text-gray-500">
                                <span class="text-yellow-400 mr-1">★</span>
                                {{ $related['rating'] }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Tab functionality
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');

    tabBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const targetTab = this.dataset.tab;
            
            // Update active tab button
            tabBtns.forEach(b => {
                b.classList.remove('active', 'border-red-500', 'text-red-600');
                b.classList.add('border-transparent', 'text-gray-600');
            });
            this.classList.add('active', 'border-red-500', 'text-red-600');
            this.classList.remove('border-transparent', 'text-gray-600');
            
            // Show target tab content
            tabContents.forEach(content => {
                content.classList.add('hidden');
            });
            document.getElementById(targetTab).classList.remove('hidden');
        });
    });

    // Quantity buttons
    const quantityBtns = document.querySelectorAll('.quantity-btn');
    const quantityDisplay = document.querySelector('.quantity-display');
    
    quantityBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const action = this.dataset.action;
            let current = parseInt(quantityDisplay.textContent);
            
            if (action === 'increase') {
                current = Math.min(current + 1, {{ $product['stock'] }});
            } else if (action === 'decrease') {
                current = Math.max(current - 1, 1);
            }
            
            quantityDisplay.textContent = current;
        });
    });

    // Wishlist functionality
    const wishlistBtn = document.querySelector('.wishlist-btn');
    if (wishlistBtn) {
        wishlistBtn.addEventListener('click', function() {
            const icon = this.querySelector('svg');
            
            if (icon.getAttribute('fill') === 'none') {
                icon.setAttribute('fill', 'currentColor');
                this.style.color = '#ef4444';
                showNotification('Added to wishlist! ❤️');
            } else {
                icon.setAttribute('fill', 'none');
                this.style.color = '';
                showNotification('Removed from wishlist');
            }
        });
    }

    // Add to cart functionality
    const addToCartBtn = document.querySelector('.add-to-cart-btn');
    if (addToCartBtn) {
        addToCartBtn.addEventListener('click', function() {
            const quantity = quantityDisplay.textContent;
            const productName = '{{ $product['name'] }}';
            
            // Add animation
            this.innerHTML = '✓ Added to Cart!';
            this.classList.add('bg-green-500', 'hover:bg-green-600');
            this.classList.remove('bg-gradient-to-r', 'from-red-500', 'to-pink-500');
            
            setTimeout(() => {
                this.innerHTML = `<svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-1.1 5.4M7 13v8a2 2 0 002 2h4.5M9 19.5h.01M20 19.5h.01"></path>
                </svg>Add to Cart`;
                this.classList.remove('bg-green-500', 'hover:bg-green-600');
                this.classList.add('bg-gradient-to-r', 'from-red-500', 'to-pink-500');
            }, 2000);
            
            showNotification(`Added ${quantity}x ${productName} to cart! 🛒`);
        });
    }

    // Buy now functionality
    const buyNowBtn = document.querySelector('.buy-now-btn');
    if (buyNowBtn) {
        buyNowBtn.addEventListener('click', function() {
            showNotification('Redirecting to checkout...');
            // Here you would redirect to checkout page
        });
    }

    function showNotification(message) {
        const notification = document.createElement('div');
        notification.className = 'fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50 transform translate-x-full transition-transform duration-300';
        notification.textContent = message;
        
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.classList.remove('translate-x-full');
        }, 100);
        
        setTimeout(() => {
            notification.classList.add('translate-x-full');
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 300);
        }, 3000);
    }
});

// Image gallery functionality
function changeMainImage(imageSrc, thumbnailElement) {
    const mainImage = document.getElementById('mainImage');
    const thumbnails = document.querySelectorAll('.thumbnail-img');
    
    // Update main image
    mainImage.src = imageSrc;
    
    // Update thumbnail borders
    thumbnails.forEach(thumb => {
        thumb.classList.remove('border-red-500');
        thumb.classList.add('border-gray-200');
    });
    thumbnailElement.classList.add('border-red-500');
    thumbnaElement.classList.remove('border-gray-200');
}
</script>

@endsectionibold">In Stock</span>
                        </div>
                        <span class="text-gray-600">({{ $product['stock'] }} available)</span>
                    @elseif($product['stock'] > 10)
                        <div class="flex items-center text-orange-600">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="font-semibold">Limited Stock</span>
                        </div>
                        <span class="text-gray-600">(Only {{ $product['stock'] }} left)</span>
                    @else
                        <div class="flex items-center text-red-600">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="font-sem