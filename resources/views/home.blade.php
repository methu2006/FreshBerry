                                                                                                                                                @extends('layouts.app')

@section('content')

<!-- Hero Slider Section -->

<section class="relative w-full overflow-hidden">
    <div class="relative h-[600px] overflow-hidden">
        <div class="absolute inset-0 flex transition-all duration-1000 ease-in-out" id="slider">
            <div class="w-full h-full flex-shrink-0 relative">
                <img src="https://www.epicgardening.com/wp-content/uploads/2024/03/Fragaria-ananassa-Flavorfest-1536x864.jpeg" class="w-full h-full object-cover" alt="Strawberry field" />
                <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/30"></div>
            </div>
            <div class="w-full h-full flex-shrink-0 relative">
                <img src="https://images.unsplash.com/photo-1464965911861-746a04b4bca6?ixlib=rb-4.0.3" class="w-full h-full object-cover" alt="Strawberry desserts" />
                <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/30"></div>
            </div>
            <div class="w-full h-full flex-shrink-0 relative">
                <img src="https://www.rawblend.com.au/wp-content/uploads/2020/11/Healthy-Strawberry-Milkshake1920x1080.jpg" class="w-full h-full object-cover" alt="Fresh strawberries" />
                <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/30"></div>
            </div>
        </div>

```
    <!-- Hero Content -->
    <div class="absolute inset-0 flex items-center justify-center px-4">
        <div class="max-w-4xl text-center">
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 text-white animate-fadeInUp">
                Welcome to <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-300 to-red-400">FreshBerry</span>
            </h1>
            <p class="text-lg md:text-xl lg:text-2xl text-pink-100 mb-8 max-w-2xl mx-auto animate-fadeInUp delay-200">
                Premium strawberry products handpicked from the finest farms in Sri Lanka
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fadeInUp delay-400">
                <a href="/shop" class="group relative inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-red-500 to-pink-500 text-white font-bold text-lg rounded-full hover:from-red-600 hover:to-pink-600 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <span class="mr-2">🍓</span>
                    Shop Now
                </a>
                <a href="#featured" class="group inline-flex items-center justify-center px-8 py-4 bg-white/20 backdrop-blur-sm text-white font-semibold text-lg rounded-full hover:bg-white/30 transition-all duration-300 border border-white/30">
                    Learn More
                    <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    
    <!-- Navigation Buttons -->
    <button class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/20 backdrop-blur-sm text-white p-3 rounded-full hover:bg-white/30 transition-all duration-300" id="prevBtn">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
    </button>
    <button class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/20 backdrop-blur-sm text-white p-3 rounded-full hover:bg-white/30 transition-all duration-300" id="nextBtn">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
    </button>
    
    <!-- Slider Indicators -->
    <div class="absolute bottom-8 left-0 right-0 flex justify-center space-x-3">
        <button class="w-3 h-3 rounded-full bg-white bg-opacity-70 hover:bg-opacity-100 focus:outline-none slider-dot transition-all duration-300" data-index="0"></button>
        <button class="w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 focus:outline-none slider-dot transition-all duration-300" data-index="1"></button>
        <button class="w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 focus:outline-none slider-dot transition-all duration-300" data-index="2"></button>
    </div>
</div>
```

</section>

<!-- Features Section -->

<section class="py-16 bg-gradient-to-b from-white to-pink-50">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center group">
                <div class="bg-red-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-red-200 transition-colors duration-300">
                    <span class="text-3xl">🌱</span>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">100% Organic</h3>
                <p class="text-gray-600">Grown without harmful pesticides or chemicals, ensuring pure and healthy strawberries.</p>
            </div>
            <div class="text-center group">
                <div class="bg-pink-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-pink-200 transition-colors duration-300">
                    <span class="text-3xl">🚚</span>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Fast Delivery</h3>
                <p class="text-gray-600">Same-day delivery within Colombo and next-day delivery island-wide.</p>
            </div>
            <div class="text-center group">
                <div class="bg-red-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-red-200 transition-colors duration-300">
                    <span class="text-3xl">🎁</span>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Custom Gifts</h3>
                <p class="text-gray-600">Create personalized gift boxes perfect for any special occasion.</p>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products Section -->

<section id="featured" class="py-20 bg-gradient-to-b from-pink-50 to-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <span class="inline-block mb-4 text-pink-500 text-lg font-semibold tracking-wide">Our Best Sellers</span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
                Featured <span class="text-red-500">Products</span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-red-400 to-pink-400 rounded-full mx-auto"></div>
            <p class="max-w-2xl mx-auto text-gray-600 mt-6 text-lg">
                Handcrafted with care from the freshest strawberries grown in our partner farms
            </p>
        </div>

```
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
        <!-- Product 1 -->
        <div class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
            <div class="relative overflow-hidden">
                <img src="https://thecafesucrefarine.com/wp-content/uploads/Strawberry-Freezer-Jam-1.jpg" alt="Strawberry Jam" 
                     class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-bold shadow-lg">
                    Best Seller
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-3">
                    <div>
                        <h4 class="text-xl font-bold text-gray-800 mb-1">Premium Strawberry Jam</h4>
                        <span class="text-sm text-gray-500">250g jar</span>
                    </div>
                    <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-1 rounded-full">Organic</span>
                </div>
                <p class="text-gray-600 mb-4 line-clamp-2">Handmade jam from ripe strawberries, no artificial preservatives. Perfect for breakfast or desserts.</p>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <span class="text-2xl font-bold text-red-600">Rs. 350</span>
                        <span class="text-sm text-gray-500 line-through ml-2">Rs. 400</span>
                    </div>
                    <button class="bg-gradient-to-r from-pink-500 to-red-500 hover:from-pink-600 hover:to-red-600 text-white px-6 py-2 rounded-full text-sm font-semibold transition-all duration-300 transform hover:scale-105">
                        Add to Cart
                    </button>
                </div>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
            <div class="relative overflow-hidden">
                <img src="https://static.wixstatic.com/media/2c91de_1a61cc78d00f4cb084e56cd31330b785~mv2.jpg/v1/fill/w_980,h_772,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/2c91de_1a61cc78d00f4cb084e56cd31330b785~mv2.jpg" alt="Fresh Strawberries" 
                     class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute top-4 right-4 bg-pink-500 text-white px-3 py-1 rounded-full text-sm font-bold shadow-lg">
                    Fresh
                </div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-3">
                    <div>
                        <h4 class="text-xl font-bold text-gray-800 mb-1">Fresh Hill Country Strawberries</h4>
                        <span class="text-sm text-gray-500">500g pack</span>
                    </div>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-1 rounded-full">Seasonal</span>
                </div>
                <p class="text-gray-600 mb-4 line-clamp-2">Locally grown, juicy and organic. Picked at peak ripeness from Nuwara Eliya farms.</p>
                <div class="flex items-center justify-between">
                    <span class="text-2xl font-bold text-red-600">Rs. 450</span>
                    <button class="bg-gradient-to-r from-pink-500 to-red-500 hover:from-pink-600 hover:to-red-600 text-white px-6 py-2 rounded-full text-sm font-semibold transition-all duration-300 transform hover:scale-105">
                        Add to Cart
                    </button>
                </div>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
            <div class="relative overflow-hidden">
                <img src="https://i.pinimg.com/originals/13/28/fc/1328fc0e316ae3bbb983abb1356aa33b.jpg" alt="Gift Box" 
                     class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute top-4 right-4 bg-gradient-to-r from-purple-500 to-pink-500 text-white px-3 py-1 rounded-full text-sm font-bold shadow-lg">
                    Gift Box
                </div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-3">
                    <div>
                        <h4 class="text-xl font-bold text-gray-800 mb-1">Strawberry & Cream Gift Box</h4>
                        <span class="text-sm text-gray-500">5 items included</span>
                    </div>
                    <span class="bg-purple-100 text-purple-800 text-xs font-semibold px-2.5 py-1 rounded-full">Limited</span>
                </div>
                <p class="text-gray-600 mb-4 line-clamp-2">Perfect gift set for strawberry lovers. Includes jam, fresh berries, and gourmet treats.</p>
                <div class="flex items-center justify-between">
                    <span class="text-2xl font-bold text-red-600">Rs. 1200</span>
                    <button class="bg-gradient-to-r from-pink-500 to-red-500 hover:from-pink-600 hover:to-red-600 text-white px-6 py-2 rounded-full text-sm font-semibold transition-all duration-300 transform hover:scale-105">
                        Add to Cart
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="text-center mt-12">
        <a href="/shop" class="inline-flex items-center bg-white text-red-600 hover:text-white hover:bg-red-600 font-semibold text-lg px-8 py-3 rounded-full border-2 border-red-600 transition-all duration-300 transform hover:scale-105">
            View All Products
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </a>
    </div>
</div>
```

</section>

<!-- Testimonials Section -->

<section class="py-20 bg-gradient-to-b from-white to-pink-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <span class="inline-block mb-4 text-pink-500 text-lg font-semibold tracking-wide">What Our Customers Say</span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
                Happy <span class="text-red-500">Customers</span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-pink-400 to-red-400 rounded-full mx-auto"></div>
        </div>

```
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Testimonial 1 -->
        <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 group">
            <div class="flex items-center mb-6">
                <img class="w-12 h-12 rounded-full border-2 border-pink-200" src="https://randomuser.me/api/portraits/women/44.jpg" alt="Ayesha M.">
                <div class="ml-4">
                    <h5 class="font-bold text-gray-800">Ayesha M.</h5>
                    <div class="flex text-yellow-400 text-sm">
                        ★ ★ ★ ★ ★
                    </div>
                </div>
            </div>
            <p class="text-gray-600 italic mb-6 leading-relaxed">"The strawberry jam is absolutely divine! I've never tasted anything so fresh and flavorful. It's become a staple in our household."</p>
            <div class="flex items-center text-sm text-gray-500">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                </svg>
                2 days ago
            </div>
        </div>
        
        <!-- Testimonial 2 -->
        <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 group">
            <div class="flex items-center mb-6">
                <img class="w-12 h-12 rounded-full border-2 border-pink-200" src="https://randomuser.me/api/portraits/men/32.jpg" alt="Nimal J.">
                <div class="ml-4">
                    <h5 class="font-bold text-gray-800">Nimal J.</h5>
                    <div class="flex text-yellow-400 text-sm">
                        ★ ★ ★ ★ ★
                    </div>
                </div>
            </div>
            <p class="text-gray-600 italic mb-6 leading-relaxed">"I ordered the fresh strawberries for a family gathering and everyone was amazed by their sweetness and size. Will definitely order again!"</p>
            <div class="flex items-center text-sm text-gray-500">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                </svg>
                1 week ago
            </div>
        </div>
        
        <!-- Testimonial 3 -->
        <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 group">
            <div class="flex items-center mb-6">
                <img class="w-12 h-12 rounded-full border-2 border-pink-200" src="https://randomuser.me/api/portraits/women/68.jpg" alt="Ravindi K.">
                <div class="ml-4">
                    <h5 class="font-bold text-gray-800">Ravindi K.</h5>
                    <div class="flex text-yellow-400 text-sm">
                        ★ ★ ★ ★ ★
                    </div>
                </div>
            </div>
            <p class="text-gray-600 italic mb-6 leading-relaxed">"The gift box was the perfect present for my strawberry-obsessed sister. The packaging was beautiful and everything inside was delicious!"</p>
            <div class="flex items-center text-sm text-gray-500">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                </svg>
                3 days ago
            </div>
        </div>
    </div>
</div>
```

</section>

<!-- Newsletter Section -->

<section class="py-16 bg-gradient-to-r from-red-500 via-pink-500 to-red-600 text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-black/10"></div>
    <div class="container mx-auto px-6 text-center relative z-10">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Join Our Berry Club 🍓</h2>
        <p class="max-w-2xl mx-auto mb-8 text-pink-100 text-lg">
            Subscribe to get exclusive offers, recipes, and news about seasonal strawberry products
        </p>

```
    <div class="max-w-md mx-auto">
        <form class="flex flex-col sm:flex-row gap-4">
            <input 
                type="email" 
                placeholder="Enter your email address" 
                class="flex-grow px-6 py-4 rounded-full focus:outline-none text-gray-800 placeholder-gray-500 shadow-lg"
                required
            >
            <button 
                type="submit"
                class="bg-black hover:bg-gray-900 px-8 py-4 rounded-full font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105"
            >
                Subscribe
            </button>
        </form>
    </div>
    
    <p class="mt-6 text-sm text-pink-200">
        We respect your privacy. Unsubscribe at any time. No spam, just delicious updates! 
    </p>
</div>
```

</section>

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

    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Slider functionality
    const slider = document.getElementById('slider');
    const dots = document.querySelectorAll('.slider-dot');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    let currentIndex = 0;
    const totalSlides = 3;
    
    function updateSlider() {
        slider.style.transform = `translateX(-${currentIndex * 100}%)`;
        
        // Update dots
        dots.forEach((dot, index) => {
            if(index === currentIndex) {
                dot.classList.remove('bg-opacity-50');
                dot.classList.add('bg-opacity-100');
            } else {
                dot.classList.remove('bg-opacity-100');
                dot.classList.add('bg-opacity-50');
            }
        });
    }
    
    // Dot click events
    dots.forEach(dot => {
        dot.addEventListener('click', function() {
            currentIndex = parseInt(this.getAttribute('data-index'));
            updateSlider();
        });
    });
    
    // Navigation button events
    prevBtn.addEventListener('click', function() {
        currentIndex = currentIndex > 0 ? currentIndex - 1 : totalSlides - 1;
        updateSlider();
    });
    
    nextBtn.addEventListener('click', function() {
        currentIndex = (currentIndex + 1) % totalSlides;
        updateSlider();
    });
    
    // Auto slide
    setInterval(() => {
        currentIndex = (currentIndex + 1) % totalSlides;
        updateSlider();
    }, 6000);
    
    // Initialize
    updateSlider();
    
    // Smooth scrolling for anchor links
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

@endsection
