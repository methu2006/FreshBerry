<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'FreshBerry - Premium Strawberry Products')</title>
    <meta name="description" content="@yield('description', 'Premium organic strawberry products from Sri Lanka. Fresh strawberries, jams, gift boxes and more.')">
    
    <!-- Favicon -->
    <link rel="icon" href="🍓" type="image/svg+xml">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    
    <!-- Navbar -->
    <header class="bg-white/95 backdrop-blur-sm shadow-lg sticky top-0 z-50 border-b border-pink-100">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/" class="flex items-center group">
                        <span class="text-2xl mr-2 group-hover:scale-110 transition-transform duration-300">🍓</span>
                        <h1 class="text-2xl font-bold bg-gradient-to-r from-red-600 to-pink-500 bg-clip-text text-transparent">
                            FreshBerry
                        </h1>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                    <a href="/shop" class="nav-link {{ request()->is('shop*') ? 'active' : '' }}">Shop</a>
                    <a href="/gift" class="nav-link {{ request()->is('gift*') ? 'active' : '' }}">Custom Gifts</a>
                    <a href="/recipes" class="nav-link {{ request()->is('recipes*') ? 'active' : '' }}">Recipes</a>
                    <a href="/blog" class="nav-link {{ request()->is('blog*') ? 'active' : '' }}">Blog</a>
                    <a href="/contact" class="nav-link {{ request()->is('contact*') ? 'active' : '' }}">Contact</a>
                </nav>

                <!-- Search & User Actions -->
                <div class="flex items-center space-x-4">
                    <!-- Search Bar (Desktop) -->
                    <div class="hidden lg:flex items-center relative">
                        <input 
                            type="text" 
                            placeholder="Search products..." 
                            class="w-64 px-4 py-2 pl-10 border border-gray-200 rounded-full focus:outline-none focus:ring-2 focus:ring-red-400 focus:border-transparent transition-all duration-300"
                        />
                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>

                    <!-- User Menu -->
                    <div class="flex items-center space-x-3">
                        <!-- Cart -->
                        <a href="/cart" class="relative p-2 text-gray-600 hover:text-red-500 transition-colors duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-1.1 5.4M7 13v8a2 2 0 002 2h4.5M9 19.5h.01M20 19.5h.01"></path>
                            </svg>
                            <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">0</span>
                        </a>

                        <!-- Wishlist -->
                        <a href="/wishlist" class="p-2 text-gray-600 hover:text-red-500 transition-colors duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </a>

                        <!-- User Account -->
                        <a href="/login" class="hidden sm:inline-flex items-center px-4 py-2 bg-gradient-to-r from-red-500 to-pink-500 hover:from-red-600 hover:to-pink-600 text-white font-semibold rounded-full transition-all duration-300 transform hover:scale-105">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            Login
                        </a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button class="md:hidden p-2 text-gray-600 hover:text-red-500 transition-colors duration-300" id="mobile-menu-btn">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation Menu -->
            <div class="md:hidden hidden mobile-nav mt-4 pb-4 border-t border-gray-200" id="mobile-nav">
                <div class="flex flex-col space-y-4 mt-4">
                    <!-- Mobile Search -->
                    <div class="flex items-center relative">
                        <input 
                            type="text" 
                            placeholder="Search products..." 
                            class="w-full px-4 py-2 pl-10 border border-gray-200 rounded-full focus:outline-none focus:ring-2 focus:ring-red-400"
                        />
                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    
                    <!-- Mobile Navigation Links -->
                    <nav class="flex flex-col space-y-2">
                        <a href="/" class="mobile-nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                        <a href="/shop" class="mobile-nav-link {{ request()->is('shop*') ? 'active' : '' }}">Shop</a>
                        <a href="/gift" class="mobile-nav-link {{ request()->is('gift*') ? 'active' : '' }}">Custom Gifts</a>
                        <a href="/recipes" class="mobile-nav-link {{ request()->is('recipes*') ? 'active' : '' }}">Recipes</a>
                        <a href="/blog" class="mobile-nav-link {{ request()->is('blog*') ? 'active' : '' }}">Blog</a>
                        <a href="/contact" class="mobile-nav-link {{ request()->is('contact*') ? 'active' : '' }}">Contact</a>
                        <a href="/login" class="mobile-nav-link border-t border-gray-200 pt-2 mt-2">Login / Register</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-gray-900 to-gray-800 text-white">
        <div class="container mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="lg:col-span-1">
                    <div class="flex items-center mb-6">
                        <span class="text-2xl mr-2">🍓</span>
                        <h3 class="text-2xl font-bold bg-gradient-to-r from-red-400 to-pink-400 bg-clip-text text-transparent">
                            FreshBerry
                        </h3>
                    </div>
                    <p class="text-gray-300 mb-6 leading-relaxed">
                        Premium organic strawberry products, handcrafted with love in Sri Lanka. From farm to table, we deliver the finest strawberry experience.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-pink-400 transition-colors duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-pink-400 transition-colors duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.097.118.112.222.083.343-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001 12.017 0z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-pink-400 transition-colors duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-bold mb-6 text-white">Shop</h4>
                    <ul class="space-y-3">
                        <li><a href="/shop" class="text-gray-300 hover:text-pink-400 transition-colors duration-300">All Products</a></li>
                        <li><a href="/shop/fresh" class="text-gray-300 hover:text-pink-400 transition-colors duration-300">Fresh Strawberries</a></li>
                        <li><a href="/shop/preserves" class="text-gray-300 hover:text-pink-400 transition-colors duration-300">Jams & Preserves</a></li>
                        <li><a href="/gift" class="text-gray-300 hover:text-pink-400 transition-colors duration-300">Gift Boxes</a></li>
                        <li><a href="/shop/plants" class="text-gray-300 hover:text-pink-400 transition-colors duration-300">Strawberry Plants</a></li>
                    </ul>
                </div>

                <!-- Community -->
                <div>
                    <h4 class="text-lg font-bold mb-6 text-white">Community</h4>
                    <ul class="space-y-3">
                        <li><a href="/recipes" class="text-gray-300 hover:text-pink-400 transition-colors duration-300">Recipes</a></li>
                        <li><a href="/blog" class="text-gray-300 hover:text-pink-400 transition-colors duration-300">Farming Tips</a></li>
                        <li><a href="/reviews" class="text-gray-300 hover:text-pink-400 transition-colors duration-300">Customer Reviews</a></li>
                        <li><a href="/chat" class="text-gray-300 hover:text-pink-400 transition-colors duration-300">Chat with Farmers</a></li>
                    </ul>
                </div>

                <!-- Support -->
                <div>
                    <h4 class="text-lg font-bold mb-6 text-white">Support</h4>
                    <ul class="space-y-3">
                        <li><a href="/contact" class="text-gray-300 hover:text-pink-400 transition-colors duration-300">Contact Us</a></li>
                        <li><a href="/faq" class="text-gray-300 hover:text-pink-400 transition-colors duration-300">FAQ</a></li>
                        <li><a href="/shipping" class="text-gray-300 hover:text-pink-400 transition-colors duration-300">Shipping Info</a></li>
                        <li><a href="/returns" class="text-gray-300 hover:text-pink-400 transition-colors duration-300">Returns</a></li>
                        <li><a href="/privacy" class="text-gray-300 hover:text-pink-400 transition-colors duration-300">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="border-t border-gray-700 mt-12 pt-8 text-center">
                <p class="text-gray-400">
                    &copy; 2025 FreshBerry. All rights reserved. Made with ❤️ in Sri Lanka
                </p>
            </div>
        </div>
    </footer>

    <!-- Custom Styles -->
    <style>
        .nav-link {
            @apply text-gray-600 hover:text-red-500 font-medium transition-all duration-300 relative;
        }
        
        .nav-link.active {
            @apply text-red-500;
        }
        
        .nav-link.active::after {
            content: '';
            @apply absolute bottom-0 left-0 w-full h-0.5 bg-red-500 rounded-full;
        }
        
        .mobile-nav-link {
            @apply block py-3 px-4 text-gray-600 hover:text-red-500 hover:bg-red-50 rounded-lg transition-all duration-300;
        }
        
        .mobile-nav-link.active {
            @apply text-red-500 bg-red-50;
        }
    </style>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu toggle
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileNav = document.getElementById('mobile-nav');
            
            mobileMenuBtn.addEventListener('click', function() {
                mobileNav.classList.toggle('hidden');
            });
            
            // Close mobile menu when clicking outside
            document.addEventListener('click', function(event) {
                if (!mobileMenuBtn.contains(event.target) && !mobileNav.contains(event.target)) {
                    mobileNav.classList.add('hidden');
                }
            });
            
            // Smooth scrolling for footer links
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
        });
    </script>
</body>
</html>