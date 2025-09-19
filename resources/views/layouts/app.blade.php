<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'FreshBerry - Premium Strawberry Products')</title>
  <meta name="description" content="@yield('description', 'Premium organic strawberry products from Sri Lanka. Fresh strawberries, jams, gift boxes and more.')">

  <link rel="icon" href="/favicon.svg" type="image/svg+xml">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <style>body{font-family:'Inter',sans-serif}</style>
  <script>
    // Early redirect: if this page load is a RELOAD and not Home, go to Home
    (function(){
      try {
        var isHome = location.pathname === '/' || location.pathname === '';
        var nav = performance.getEntriesByType && performance.getEntriesByType('navigation')[0];
        var reloaded = nav ? nav.type === 'reload' : (performance.navigation && performance.navigation.type === 1);
        if (reloaded && !isHome) {
          location.replace('/');
        }
      } catch(e) {}
    })();
  </script>
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- Navbar -->
  <header class="bg-white/95 backdrop-blur-sm shadow-lg sticky top-0 z-50 border-b border-pink-100">
    <div class="mx-auto max-w-7xl px-4">
      <div class="flex h-16 items-center justify-between">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex items-center group" aria-label="FreshBerry Home">
          <span class="text-2xl mr-2 group-hover:scale-110 transition-transform duration-300">🍓</span>
          <span class="text-2xl font-bold text-gray-900 group-hover:text-red-600 transition-colors">FreshBerry</span>
        </a>

        <!-- Desktop nav -->
        <nav class="hidden md:flex items-center gap-8">
          <a href="{{ url('/') }}"      class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
          <a href="{{ url('/shop') }}"  class="nav-link {{ request()->is('shop*') ? 'active' : '' }}">Shop</a>
          <a href="{{ url('/gift') }}"  class="nav-link {{ request()->is('gift*') ? 'active' : '' }}">Custom Gifts</a>
          <a href="{{ url('/recipes') }}" class="nav-link {{ request()->is('recipes*') ? 'active' : '' }}">Recipes</a>
          <a href="{{ url('/blog') }}"  class="nav-link {{ request()->is('blog*') ? 'active' : '' }}">Blog</a>
          <a href="{{ url('/contact') }}" class="nav-link {{ request()->is('contact*') ? 'active' : '' }}">Contact</a>
          <a href="{{ url('/login') }}" class="nav-link {{ request()->is('login') ? 'active' : '' }}">Login</a>
          <a href="{{ url('/register') }}" class="nav-link {{ request()->is('register') ? 'active' : '' }}">Register</a>
        </nav>

        <!-- Actions -->
        <div class="flex items-center gap-3">
          <!-- Search (desktop) -->
          <div class="hidden lg:flex items-center relative">
            <input type="text" placeholder="Search products…"
                   class="w-64 px-4 py-2 pl-10 border border-gray-200 rounded-full focus:outline-none focus:ring-2 focus:ring-red-400 focus:border-transparent transition-all duration-300"/>
            <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
          </div>

          <!-- Cart -->
          <a href="/cart" class="relative p-2 text-gray-600 hover:text-red-500 transition-colors duration-300" aria-label="Cart">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-1.1 5.4M7 13v8a2 2 0 002 2h4.5M9 19.5h.01M20 19.5h.01"/>
            </svg>
            <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">0</span>
          </a>

          <!-- Wishlist -->
          <a href="/wishlist" class="p-2 text-gray-600 hover:text-red-500 transition-colors duration-300" aria-label="Wishlist">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
            </svg>
          </a>

          <a href="/login" class="hidden sm:inline-flex items-center px-4 py-2 bg-gradient-to-r from-red-500 to-pink-500 hover:from-red-600 hover:to-pink-600 text-white font-semibold rounded-full transition-all duration-300 transform hover:scale-105">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
            </svg>
            Login
          </a>

          <!-- Mobile menu button -->
          <button id="mobile-menu-btn" class="md:hidden h-10 w-10 rounded-lg border border-gray-200 text-gray-600 hover:text-red-500" aria-label="Open menu" aria-expanded="false">☰</button>
        </div>
      </div>

      <!-- Mobile menu -->
      <div id="mobile-nav" class="md:hidden hidden pb-4 border-t border-gray-100">
        <div class="pt-4 space-y-4">
          <div class="flex items-center relative">
            <input type="text" placeholder="Search products…"
                   class="w-full px-4 py-2 pl-10 border border-gray-200 rounded-full focus:outline-none focus:ring-2 focus:ring-red-400"/>
            <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
          </div>

          <nav class="grid grid-cols-2 gap-3">
            <a href="{{ url('/') }}"        class="mobile-nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
            <a href="{{ url('/shop') }}"    class="mobile-nav-link {{ request()->is('shop*') ? 'active' : '' }}">Shop</a>
            <a href="{{ url('/gift') }}"    class="mobile-nav-link {{ request()->is('gift*') ? 'active' : '' }}">Custom Gifts</a>
            <a href="{{ url('/recipes') }}" class="mobile-nav-link {{ request()->is('recipes*') ? 'active' : '' }}">Recipes</a>
            <a href="{{ url('/blog') }}"    class="mobile-nav-link {{ request()->is('blog*') ? 'active' : '' }}">Blog</a>
            <a href="{{ url('/contact') }}" class="mobile-nav-link {{ request()->is('contact*') ? 'active' : '' }}">Contact</a>
            <a href="{{ url('/login') }}"   class="mobile-nav-link border-t border-gray-200 pt-2 mt-2 col-span-2">Login / Register</a>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <!-- Content -->
  <main class="min-h-screen">@yield('content')</main>

     <!-- Footer -->
  <footer class="relative bg-gray-900 text-white" style="background-color:#111827;color:#ffffff;">
  <div class="relative mx-auto max-w-7xl px-6 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
      <!-- Brand -->
      <div>
        <div class="flex items-center mb-6">
          <span class="text-3xl mr-2">🍓</span>
          <h3 class="text-2xl font-extrabold">FreshBerry</h3>
        </div>
        <p class="text-gray-300 mb-6 leading-relaxed">
          Premium organic strawberry products, handcrafted with love in Sri Lanka.
        </p>
        <!-- Contact Info -->
        <div class="space-y-3 mb-6">
          <div class="flex items-center text-white">
            <svg class="w-5 h-5 mr-3 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
            </svg>
            <span>+94 77 123 4567</span>
          </div>
          <div class="flex items-center text-white">
            <svg class="w-5 h-5 mr-3 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            <span>hello@freshberry.lk</span>
          </div>
          <div class="flex items-center text-white">
            <svg class="w-5 h-5 mr-3 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            <span>Nuwara Eliya, Sri Lanka</span>
          </div>
        </div>

        <!-- Social Links (inline SVG, no external CSS) -->
        <div class="flex gap-4" aria-label="Social links">
          <a href="#" class="group bg-white/10 p-2.5 rounded-full hover:bg-white/20 transition" aria-label="Facebook">
            <svg class="w-5 h-5 text-white/80 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
              <path d="M24 12.073c0-6.627-5.373-12-12-12S0 5.446 0 12.073C0 18.062 4.388 23.027 10.125 23.927v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
            </svg>
          </a>
          <a href="#" class="group bg-white/10 p-2.5 rounded-full hover:bg-white/20 transition" aria-label="Instagram">
            <svg class="w-5 h-5 text-white/80 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.62 5.367 11.987 11.988 11.987 6.62 0 11.987-5.367 11.987-11.987C24.014 5.367 18.637.001 12.017.001zM8.449 16.988c-1.297 0-2.448-.49-3.323-1.297-.928-.896-1.418-2.047-1.418-3.344s.49-2.448 1.297-3.323C5.902 8.198 7.053 7.708 8.35 7.708s2.448.49 3.323 1.297c.897.896 1.387 2.047 1.387 3.344s-.49 2.448-1.297 3.323c-.896.896-2.047 1.386-3.344 1.386z"/>
            </svg>
          </a>
          <a href="#" class="group bg-white/10 p-2.5 rounded-full hover:bg-white/20 transition" aria-label="Twitter">
            <svg class="w-5 h-5 text-white/80 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
              <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.6a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209C19.053 22 24 14.504 24 8.515c0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
            </svg>
          </a>
          <a href="#" class="group bg-white/10 p-2.5 rounded-full hover:bg-white/20 transition" aria-label="YouTube">
            <svg class="w-5 h-5 text-white/80 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
              <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
            </svg>
          </a>
        </div>
      </div>

      <!-- Shop Links -->
      <div>
        <div class="flex items-center mb-6">
          <span class="w-7 h-7 rounded-full bg-gradient-to-r from-red-500 to-pink-500 text-white flex items-center justify-center mr-2">🛍️</span>
          <h4 class="text-lg font-bold">Shop</h4>
        </div>
        <ul class="space-y-2 text-white">
          <li><a href="/shop" class="hover:text-yellow-200 transition">All Products</a></li>
          <li><a href="/shop/fresh" class="hover:text-yellow-200 transition">Fresh Strawberries</a></li>
          <li><a href="/shop/preserves" class="hover:text-yellow-200 transition">Jams & Preserves</a></li>
          <li><a href="/gift" class="hover:text-yellow-200 transition">Gift Boxes</a></li>
        </ul>
      </div>

      <!-- Community -->
      <div>
        <div class="flex items-center mb-6">
          <span class="w-7 h-7 rounded-full bg-gradient-to-r from-pink-500 to-red-500 text-white flex items-center justify-center mr-2">🌐</span>
          <h4 class="text-lg font-bold">Community</h4>
        </div>
        <ul class="space-y-3">
          <li><a href="/recipes" class="hover:text-yellow-200 transition">Recipes</a></li>
          <li><a href="/blog" class="hover:text-yellow-200 transition">Farming Tips</a></li>
          <li><a href="/reviews" class="hover:text-yellow-200 transition">Customer Reviews</a></li>
          <li><a href="/chat" class="hover:text-yellow-200 transition">Chat with Farmers</a></li>
        </ul>
      </div>

      <!-- Support -->
      <div>
        <div class="flex items-center mb-6">
          <span class="w-7 h-7 rounded-full bg-gradient-to-r from-rose-500 to-red-500 text-white flex items-center justify-center mr-2">💬</span>
          <h4 class="text-lg font-bold">Support</h4>
        </div>
        <ul class="space-y-3">
          <li><a href="/contact" class="hover:text-yellow-200 transition">Contact Us</a></li>
          <li><a href="/faq" class="hover:text-yellow-200 transition">FAQ</a></li>
          <li><a href="/shipping" class="hover:text-yellow-200 transition">Shipping Info</a></li>
          <li><a href="/returns" class="hover:text-yellow-200 transition">Returns</a></li>
          <li><a href="/privacy" class="hover:text-yellow-200 transition">Privacy Policy</a></li>
        </ul>
      </div>
    </div>

    <div class="border-t border-white/20 mt-12 pt-8 text-center">
      <p class="text-sm text-white">
        &copy; {{ now()->year }} FreshBerry. Made with ❤️ in Sri Lanka 🌴
      </p>
    </div>
  </div>
</footer>


  <!-- JS: mobile menu + small niceties -->
  <script>
      const btn = document.getElementById('mobile-menu-btn');
      const nav = document.getElementById('mobile-nav');

      const toggle = () => {
        const open = nav.classList.toggle('hidden') === false;
        btn.setAttribute('aria-expanded', String(open));
      };

      btn.addEventListener('click', (e) => { e.stopPropagation(); toggle(); });
      document.addEventListener('click', (e) => {
        if (!nav.classList.contains('hidden') && !nav.contains(e.target) && e.target !== btn) {
          nav.classList.add('hidden'); btn.setAttribute('aria-expanded','false');
        }
      });
      document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !nav.classList.contains('hidden')) {
          nav.classList.add('hidden'); btn.setAttribute('aria-expanded','false');
        }
      });
    });
  </script>
</body>
</html>
