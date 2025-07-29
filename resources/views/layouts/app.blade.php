<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FreshBerry</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-pink-50 text-gray-800">
    <header class="bg-red-200 p-4">
        <div class="container mx-auto flex justify-between">
            <h1 class="text-xl font-bold text-red-600">🍓 FreshBerry</h1>
            <nav class="space-x-4">
                <a href="/" class="hover:text-red-500">Home</a>
                <a href="/shop" class="hover:text-red-500">Shop</a>
                <a href="/recipes" class="hover:text-red-500">Recipes</a>
                <a href="/blog" class="hover:text-red-500">Blog</a>
                <a href="/login" class="hover:text-red-500">Login</a>
            </nav>
        </div>
    </header>

    <main class="p-6 container mx-auto">
        @yield('content')
    </main>

    <footer class="text-center text-sm text-gray-500 py-4">© 2025 FreshBerry</footer>
</body>
</html>
