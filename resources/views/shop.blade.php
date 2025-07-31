@extends('layouts.app')

@section('title', 'Shop - Fresh Strawberry Products | FreshBerry')
@section('description', 'Browse our complete collection of premium strawberry products. Fresh strawberries, jams, gift boxes, plants and more.')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-red-500 via-pink-500 to-red-600 text-white py-20">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fadeInUp">
                🍓 Shop All Products
            </h1>
            <p class="text-xl md:text-2xl text-pink-100 mb-8 max-w-3xl mx-auto animate-fadeInUp delay-200">
                Discover our complete range of premium strawberry products, from fresh berries to artisanal treats
            </p>
            <div class="flex flex-wrap justify-center gap-4 animate-fadeInUp delay-400">
                <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-semibold">🌱 100% Organic</span>
                <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-semibold">🚚 Fast Delivery</span>
                <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-semibold">🎁 Gift Ready</span>
            </div>
        </div>
    </div>
</section>

<!-- Filter & Search Section -->
<section class="py-8 bg-white border-b border-gray-200 sticky top-20 z-40">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row gap-6 items-center">
            <!-- Search Bar -->
            <div class="flex-1 max-w-md">
                <div class="relative">
                    <input 
                        type="text" 
                        id="productSearch"
                        placeholder="Search products..." 
                        class="w-full px-4 py-3 pl-12 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-red-400 focus:border-transparent transition-all duration-300"
                    >
                    <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>

            <!-- Category Filters -->
            <div class="flex flex-wrap gap-3">
                <button class="filter-btn active" data-category="all">All Products</button>
                <button class="filter-btn" data-category="fresh">Fresh</button>
                <button class="filter-btn" data-category="preserves">Preserves</button>
                <button class="filter-btn" data-category="desserts">Desserts</button>
                <button class="filter-btn" data-category="gifts">Gifts</button>
                <button class="filter-btn" data-category="plants">Plants</button>
                <button class="filter-btn" data-category="beverages">Beverages</button>
            </div>

            <!-- Sort Options -->
            <div class="flex items-center gap-4">
                <label class="text-sm font-medium text-gray-700">Sort by:</label>
                <select id="sortProducts" class="px-4 py-2 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-red-400">
                    <option value="name">Name</option>
                    <option value="price-low">Price: Low to High</option>
                    <option value="price-high">Price: High to Low</option>
                    <option value="popular">Most Popular</option>
                </select>
            </div>
        </div>
    </div>
</section>

<!-- Products Grid -->
<section class="py-16 bg-gradient-to-b from-gray-50 to-white">
    <div class="container mx-auto px-6">
        <!-- Products Count -->
        <div class="mb-8">
            <p class="text-gray-600">Showing <span id="productCount">20</span> products</p>
        </div>

        <!-- Products Grid -->
        <div id="productsGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @php

                $products = [
                    ['name' => 'Fresh Hill Country Strawberries', 'desc' => 'Freshly picked strawberries from Nuwara Eliya, bursting with natural sweetness', 'price' => 450, 'originalPrice' => 500, 'img' => 'https://static.wixstatic.com/media/2c91de_1a61cc78d00f4cb084e56cd31330b785~mv2.jpg/v1/fill/w_980,h_772,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/2c91de_1a61cc78d00f4cb084e56cd31330b785~mv2.jpg', 'category' => 'fresh', 'rating' => 4.8, 'popular' => true, 'stock' => 25],
                    ['name' => 'Chocolate-Dipped Strawberries', 'desc' => 'Premium strawberries hand-dipped in silky milk chocolate, perfect for gifting', 'price' => 800, 'originalPrice' => null, 'img' => 'https://storables.com/wp-content/uploads/2023/10/how-to-store-chocolate-covered-strawberries-overnight-1696826680.jpg', 'category' => 'desserts', 'rating' => 4.9, 'popular' => false, 'stock' => 89],
                    ['name' => 'Strawberry Jam (250g)', 'desc' => 'Homemade jam made with 100% real strawberries, no artificial flavors', 'price' => 350, 'originalPrice' => 400, 'img' => 'https://thecafesucrefarine.com/wp-content/uploads/Strawberry-Freezer-Jam-1.jpg', 'category' => 'preserves', 'rating' => 4.7, 'popular' => true, 'stock' => 37],
                    ['name' => 'Dried Strawberry Slices', 'desc' => 'Naturally dried strawberry slices, a healthy and delicious snack', 'price' => 600, 'originalPrice' => null, 'img' => 'https://m.media-amazon.com/images/I/61MwhYUZseL._AC_SL1100_.jpg', 'category' => 'fresh', 'rating' => 4.6, 'popular' => false, 'stock' => 33],
                    ['name' => 'Strawberry & Cream Gift Box', 'desc' => 'A delightful gift box of fresh strawberries and treats', 'price' => 1200, 'originalPrice' => null, 'img' => 'https://i.pinimg.com/originals/13/28/fc/1328fc0e316ae3bbb983abb1356aa33b.jpg', 'category' => 'gifts', 'rating' => 4.9, 'popular' => true, 'stock' => 71],
                    ['name' => 'Strawberry Plants (Potted)', 'desc' => 'Healthy strawberry plants in pots, ideal for home gardens', 'price' => 300, 'originalPrice' => null, 'img' => 'https://cdn0.thedailyeco.com/en/posts/7/7/2/watering_of_potted_strawberries_277_4_600.jpg', 'category' => 'plants', 'rating' => 4.5, 'popular' => false, 'stock' => 68],
                    ['name' => 'Frozen Strawberry Packs (500g)', 'desc' => 'Flash-frozen strawberries, ideal for smoothies and desserts', 'price' => 700, 'originalPrice' => null, 'img' => 'https://expatfoodsthailand.com/wp-content/uploads/Frozen-Strawberry.jpg', 'category' => 'fresh', 'rating' => 4.4, 'popular' => false, 'stock' => 71],
                    ['name' => 'Organic Strawberry Juice (350ml)', 'desc' => 'Cold-pressed organic juice with no added sugar or preservatives', 'price' => 450, 'originalPrice' => null, 'img' => 'https://tse2.mm.bing.net/th/id/OIP.QxyKWjWzmgwAAYM8fIPg6AHaEJ?pid=Api&P=0&h=220', 'category' => 'beverages', 'rating' => 4.6, 'popular' => false, 'stock' => 28],
                    ['name' => 'Strawberry Cake Slice', 'desc' => 'Moist sponge cake layered with real strawberry filling', 'price' => 250, 'originalPrice' => null, 'img' => 'https://www.girlversusdough.com/wp-content/uploads/2024/05/strawberry-cake-slice-plate.jpg', 'category' => 'desserts', 'rating' => 4.3, 'popular' => false, 'stock' => 70],
                    ['name' => 'Strawberry Cheesecake Cup', 'desc' => 'Mini cheesecake topped with strawberry glaze', 'price' => 500, 'originalPrice' => null, 'img' => 'https://d2j6dbq0eux0bg.cloudfront.net/images/76093503/3120844273.jpg', 'category' => 'desserts', 'rating' => 4.8, 'popular' => true, 'stock' => 90],
                    ['name' => 'Strawberry Ice Cream (Scoop)', 'desc' => 'Classic creamy strawberry ice cream made with fresh fruit puree', 'price' => 200, 'originalPrice' => null, 'img' => 'https://thumbs.dreamstime.com/b/strawberry-ice-cream-scoop-fresh-strawberries-rustic-background-177023281.jpg', 'category' => 'desserts', 'rating' => 4.5, 'popular' => false, 'stock' => 89],
                    ['name' => 'Mini Strawberry Tartlets', 'desc' => 'Crunchy tartlets filled with smooth strawberry custard', 'price' => 300, 'originalPrice' => null, 'img' => 'https://www.mygorgeousrecipes.com/wp-content/uploads/2020/08/Strawberry-Cream-and-Custard-Tartlets-3-219x300.jpg', 'category' => 'desserts', 'rating' => 4.4, 'popular' => false, 'stock' => 32],
                    ['name' => 'Strawberry Milkshake Mix', 'desc' => 'Instant milkshake mix packed with real strawberry flavor', 'price' => 380, 'originalPrice' => null, 'img' => 'https://theuvfood.com/wp-content/uploads/2021/11/Strawberry-Milkshake.png', 'category' => 'beverages', 'rating' => 4.2, 'popular' => false, 'stock' => 48],
                    ['name' => 'Strawberry Yogurt (150ml)', 'desc' => 'Delicious strawberry-flavored yogurt rich in probiotics', 'price' => 180, 'originalPrice' => null, 'img' => 'https://skinnyms.com/wp-content/uploads/2012/08/Skinny-Strawberry-Yogurt-1-750x500.jpg', 'category' => 'beverages', 'rating' => 4.3, 'popular' => false, 'stock' => 72],
                    ['name' => 'Luxury Strawberry Hamper', 'desc' => 'An elegant assortment of premium strawberry treats', 'price' => 2000, 'originalPrice' => 2300, 'img' => 'https://www.boxupgifting.com/cdn/shop/files/DSC01236.jpg?v=1705563999&width=1946', 'category' => 'gifts', 'rating' => 5.0, 'popular' => true, 'stock' => 24],
                    ['name' => 'Strawberry Granola Bar', 'desc' => 'Crunchy oat bar blended with real dried strawberries', 'price' => 120, 'originalPrice' => null, 'img' => 'https://insidebrucrewlife.com/wp-content/uploads/2013/03/Strawberry-Granola-Bars-38-1-735x735.jpg', 'category' => 'fresh', 'rating' => 4.1, 'popular' => false, 'stock' => 97],
                    ['name' => 'Strawberry Tea Pack (20 bags)', 'desc' => 'Fragrant herbal tea with natural strawberry flavor', 'price' => 400, 'originalPrice' => null, 'img' => 'https://govitaspringwood.com.au/wp-content/uploads/2023/04/Roogenic-Native-Strawberry-Tea-Bags-18TB-style-go-vita-springwood.jpg', 'category' => 'beverages', 'rating' => 4.4, 'popular' => false, 'stock' => 65],
                    ['name' => 'Strawberry Muffin', 'desc' => 'Soft baked muffin filled with chunks of ripe strawberries', 'price' => 220, 'originalPrice' => null, 'img' => 'https://i.pinimg.com/originals/ab/84/99/ab8499de134b81c60f4147eb951bef8a.jpg', 'category' => 'desserts', 'rating' => 4.2, 'popular' => false, 'stock' => 95],
                    ['name' => 'Strawberry Syrup (500ml)', 'desc' => 'Thick, rich syrup perfect for topping pancakes and desserts', 'price' => 350, 'originalPrice' => null, 'img' => 'https://i.pinimg.com/originals/00/fd/ce/00fdcefe23dd30e0d247f5f4b3d77cb7.jpg', 'category' => 'preserves', 'rating' => 4.3, 'popular' => false, 'stock' => 56],
                    ['name' => 'Strawberry Face Pack', 'desc' => 'Natural face pack infused with strawberry extract for glowing skin', 'price' => 280, 'originalPrice' => null, 'img' => 'https://cdn.shopify.com/s/files/1/0638/1377/9694/products/face-mask-1.jpg?v=1676367897', 'category' => 'gifts', 'rating' => 4.0, 'popular' => false, 'stock' => 50]
                ];
            @endphp

            @foreach ($products as $index => $product)
                <div class="product-card group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 hover:-translate-y-2" 
                     data-category="{{ $product['category'] }}" 
                     data-name="{{ strtolower($product['name']) }}" 
                     data-price="{{ $product['price'] }}"
                     data-popular="{{ $product['popular'] ? 'true' : 'false' }}">
                    
                   <!-- Product Image WITH LINK -->
    <div class="relative overflow-hidden">
        <a href="{{ route('product.detail', $product['slug'] ?? Str::slug($product['name'])) }}">
            <img src="{{ $product['img'] }}" alt="{{ $product['name'] }}" 
                 class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110 lazy-load">
        </a>
                        <!-- Badges -->
                        <div class="absolute top-4 left-4 flex flex-col gap-2">
                            @if($product['popular'])
                                <span class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                                    ⭐ Popular
                                </span>
                            @endif
                            @if($product['originalPrice'])
                                <span class="bg-red-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                                    {{ round((($product['originalPrice'] - $product['price']) / $product['originalPrice']) * 100) }}% OFF
                                </span>
                            @endif
                            @if($product['stock'] <= 30)
                                <span class="bg-orange-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                                    Low Stock
                                </span>
                            @endif
                        </div>

                        <!-- Wishlist Button -->
                        <button class="absolute top-4 right-4 p-2 bg-white/80 backdrop-blur-sm rounded-full text-gray-600 hover:text-red-500 hover:bg-white transition-all duration-300 wishlist-btn">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>

                        <!-- Quick View Overlay -->
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <button class="bg-white text-gray-800 px-6 py-2 rounded-full font-semibold hover:bg-gray-100 transition-all duration-300 transform scale-95 group-hover:scale-100">
                                Quick View
                            </button>
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="p-6">
                        <!-- Category Badge -->
                        <div class="flex justify-between items-start mb-3">
                            <span class="bg-pink-100 text-pink-800 text-xs font-semibold px-2.5 py-1 rounded-full capitalize">
                                {{ $product['category'] }}
                            </span>
                            <div class="flex items-center text-xs text-gray-500">
                                <span class="text-yellow-400 mr-1">★</span>
                                {{ $product['rating'] }}
                            </div>
                        </div>

                      <!-- Product Name WITH LINK -->
        <a href="{{ route('product.detail', $product['slug'] ?? Str::slug($product['name'])) }}" 
           class="block hover:text-red-600 transition-colors duration-300">
            <h3 class="text-lg font-bold text-gray-800 mb-2 line-clamp-1 group-hover:text-red-600 transition-colors duration-300">
                {{ $product['name'] }}
            </h3>
        </a>

                        <!-- Description -->
                        <p class="text-sm text-gray-600 mb-4 line-clamp-2 leading-relaxed">
                            {{ $product['desc'] }}
                        </p>

                        <!-- Stock Info -->
                        <div class="mb-4">
                            @if($product['stock'] > 50)
                                <span class="text-green-600 text-xs font-medium">✓ In Stock ({{ $product['stock'] }} available)</span>
                            @elseif($product['stock'] > 10)
                                <span class="text-orange-600 text-xs font-medium">⚠ Limited Stock ({{ $product['stock'] }} left)</span>
                            @else
                                <span class="text-red-600 text-xs font-medium">🔥 Only {{ $product['stock'] }} left!</span>
                            @endif
                        </div>

                        <!-- Price & Actions -->
                        <div class="flex items-center justify-between">
                            <div class="flex flex-col">
                                <div class="flex items-center gap-2">
                                    <span class="text-2xl font-bold text-red-600">Rs. {{ number_format($product['price']) }}</span>
                                    @if($product['originalPrice'])
                                        <span class="text-sm text-gray-500 line-through">Rs. {{ number_format($product['originalPrice']) }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="flex items-center gap-2">
                                <!-- Quantity Selector -->
                                <div class="flex items-center border border-gray-300 rounded-full">
                                    <button class="px-3 py-1 text-gray-500 hover:text-gray-700 quantity-btn" data-action="decrease">-</button>
                                    <span class="px-3 py-1 text-sm font-medium quantity-display">1</span>
                                    <button class="px-3 py-1 text-gray-500 hover:text-gray-700 quantity-btn" data-action="increase">+</button>
                                </div>

                                <!-- Add to Cart Button -->
                                <button class="bg-gradient-to-r from-red-500 to-pink-500 hover:from-red-600 hover:to-pink-600 text-white px-4 py-2 rounded-full text-sm font-semibold transition-all duration-300 transform hover:scale-105 add-to-cart-btn">
                                    <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-1.1 5.4M7 13v8a2 2 0 002 2h4.5M9 19.5h.01M20 19.5h.01"></path>
                                    </svg>
                                    Add
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-12">
            <button id="loadMoreBtn" class="bg-white text-red-600 hover:bg-red-600 hover:text-white border-2 border-red-600 px-8 py-3 rounded-full font-semibold transition-all duration-300 transform hover:scale-105">
                Load More Products
            </button>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="py-16 bg-gradient-to-r from-red-500 to-pink-500 text-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-4">Stay Updated! 🍓</h2>
        <p class="mb-8 text-pink-100">Get notified about new products, seasonal offers, and exclusive deals</p>
        <div class="max-w-md mx-auto flex gap-4">
            <input type="email" placeholder="Your email address" class="flex-1 px-4 py-3 rounded-full focus:outline-none text-gray-800">
            <button class="bg-black hover:bg-gray-900 px-6 py-3 rounded-full font-semibold transition-all duration-300">
                Subscribe
            </button>
        </div>
    </div>
</section>

<!-- Custom Styles -->
<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeInUp {
        animation: fadeInUp 0.8s ease-out forwards;
    }

    .delay-200 {
        animation-delay: 0.2s;
    }

    .delay-400 {
        animation-delay: 0.4s;
    }

    .line-clamp-1 {
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .filter-btn {
        @apply px-6 py-2 bg-white text-gray-600 border border-gray-300 rounded-full font-medium hover:bg-red-50 hover:text-red-600 hover:border-red-300 transition-all duration-300;
    }

    .filter-btn.active {
        @apply bg-red-500 text-white border-red-500 hover:bg-red-600;
    }

    .product-card.hidden {
        display: none;
    }

    .lazy-load {
        loading: lazy;
    }
</style>

<!-- JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const productsGrid = document.getElementById('productsGrid');
    const productCards = document.querySelectorAll('.product-card');
    const filterBtns = document.querySelectorAll('.filter-btn');
    const searchInput = document.getElementById('productSearch');
    const sortSelect = document.getElementById('sortProducts');
    const productCount = document.getElementById('productCount');
    const loadMoreBtn = document.getElementById('loadMoreBtn');

    let currentFilter = 'all';
    let currentSort = 'name';
    let visibleProducts = 12;

    // Filter functionality
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Update active filter button
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            currentFilter = this.dataset.category;
            filterAndSortProducts();
        });
    });

    // Search functionality
    searchInput.addEventListener('input', function() {
        filterAndSortProducts();
    });

    // Sort functionality
    sortSelect.addEventListener('change', function() {
        currentSort = this.value;
        filterAndSortProducts();
    });

    // Quantity buttons
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('quantity-btn')) {
            const action = e.target.dataset.action;
            const display = e.target.parentElement.querySelector('.quantity-display');
            let current = parseInt(display.textContent);
            
            if (action === 'increase') {
                current = Math.min(current + 1, 10);
            } else if (action === 'decrease') {
                current = Math.max(current - 1, 1);
            }
            
            display.textContent = current;
        }
    });

    // Wishlist functionality
    document.addEventListener('click', function(e) {
        if (e.target.closest('.wishlist-btn')) {
            const btn = e.target.closest('.wishlist-btn');
            const icon = btn.querySelector('svg');
            
            if (icon.getAttribute('fill') === 'none') {
                icon.setAttribute('fill', 'currentColor');
                icon.style.color = '#ef4444';
                showNotification('Added to wishlist! ❤️');
            } else {
                icon.setAttribute('fill', 'none');
                icon.style.color = '';
                showNotification('Removed from wishlist');
            }
        }
    });

    // Add to cart functionality
    document.addEventListener('click', function(e) {
        if (e.target.closest('.add-to-cart-btn')) {
            const card = e.target.closest('.product-card');
            const productName = card.querySelector('h3').textContent;
            const quantity = card.querySelector('.quantity-display').textContent;
            
            // Add animation
            const btn = e.target.closest('.add-to-cart-btn');
            btn.innerHTML = '✓ Added!';
            btn.classList.add('bg-green-500', 'hover:bg-green-600');
            btn.classList.remove('bg-gradient-to-r', 'from-red-500', 'to-pink-500');
            
            setTimeout(() => {
                btn.innerHTML = `<svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-1.1 5.4M7 13v8a2 2 0 002 2h4.5M9 19.5h.01M20 19.5h.01"></path>
                </svg>Add`;
                btn.classList.remove('bg-green-500', 'hover:bg-green-600');
                btn.classList.add('bg-gradient-to-r', 'from-red-500', 'to-pink-500');
            }, 2000);
            
            showNotification(`Added ${quantity}x ${productName} to cart! 🛒`);
        }
    });

    // Load more functionality
    loadMoreBtn.addEventListener('click', function() {
        visibleProducts += 8;
        filterAndSortProducts();
    });

    function filterAndSortProducts() {
        const searchTerm = searchInput.value.toLowerCase();
        let filteredProducts = Array.from(productCards);

        // Filter by category
        if (currentFilter !== 'all') {
            filteredProducts = filteredProducts.filter(card => 
                card.dataset.category === currentFilter
            );
        }

        // Filter by search term
        if (searchTerm) {
            filteredProducts = filteredProducts.filter(card => 
                card.dataset.name.includes(searchTerm)
            );
        }

        // Sort products
        filteredProducts.sort((a, b) => {
            switch (currentSort) {
                case 'price-low':
                    return parseInt(a.dataset.price) - parseInt(b.dataset.price);
                case 'price-high':
                    return parseInt(b.dataset.price) - parseInt(a.dataset.price);
                case 'popular':
                    return b.dataset.popular === 'true' ? 1 : -1;
                case 'name':
                default:
                    return a.dataset.name.localeCompare(b.dataset.name);
            }
        });

        // Hide all products first
        productCards.forEach(card => {
            card.classList.add('hidden');
        });

        // Show filtered and sorted products
        filteredProducts.slice(0, visibleProducts).forEach(card => {
            card.classList.remove('hidden');
        });

        // Update product count
        productCount.textContent = filteredProducts.length;

        // Show/hide load more button
        if (filteredProducts.length <= visibleProducts) {
            loadMoreBtn.style.display = 'none';
        } else {
            loadMoreBtn.style.display = 'inline-block';
        }

        // Add stagger animation to visible products
        const visibleCards = filteredProducts.slice(0, visibleProducts);
        visibleCards.forEach((card, index) => {
            card.style.animationDelay = `${index * 0.1}s`;
            card.classList.add('animate-fadeInUp');
        });
    }

    function showNotification(message) {
        // Create notification element
        const notification = document.createElement('div');
        notification.className = 'fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50 transform translate-x-full transition-transform duration-300';
        notification.textContent = message;
        
        document.body.appendChild(notification);
        
        // Show notification
        setTimeout(() => {
            notification.classList.remove('translate-x-full');
        }, 100);
        
        // Hide notification after 3 seconds
        setTimeout(() => {
            notification.classList.add('translate-x-full');
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 300);
        }, 3000);
    }

    // Initialize
    filterAndSortProducts();

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Lazy loading for images
    const images = document.querySelectorAll('.lazy-load');
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.src;
                img.classList.remove('lazy-load');
                observer.unobserve(img);
            }
        });
    });

    images.forEach(img => imageObserver.observe(img));
});
</script>

@endsection