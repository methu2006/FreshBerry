@extends('layouts.app')

@section('title', 'Login to FreshBerry')
@section('description', 'Access your FreshBerry account to manage orders, wishlist, and more.')

@section('content')
<section class="py-16 bg-pink-50 min-h-screen flex items-center justify-center">
    <div class="bg-white rounded-xl shadow-lg p-10 w-full max-w-md">
        <h2 class="text-3xl font-bold text-center text-red-500 mb-6">Welcome Back 🍓</h2>

        <form action="{{ route('login.post') }}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label class="block mb-1 font-medium text-gray-700">Email</label>
                <input type="email" name="email" required
                       class="w-full px-4 py-3 border border-gray-300 rounded-full focus:ring-2 focus:ring-red-400 outline-none">
            </div>

            <div>
                <label class="block mb-1 font-medium text-gray-700">Password</label>
                <input type="password" name="password" required
                       class="w-full px-4 py-3 border border-gray-300 rounded-full focus:ring-2 focus:ring-red-400 outline-none">
            </div>

            <div class="flex justify-between items-center text-sm">
                <label class="flex items-center gap-2">
                    <input type="checkbox" name="remember" class="rounded border-gray-300">
                    Remember me
                </label>
                <a href="#" class="text-red-500 hover:underline">Forgot password?</a>
            </div>

            <button type="submit"
                    class="w-full bg-gradient-to-r from-red-500 to-pink-500 text-white font-bold py-3 rounded-full hover:from-red-600 hover:to-pink-600 transition-all duration-300">
                Login
            </button>
        </form>

        <p class="mt-6 text-center text-sm text-gray-600">
            Don’t have an account?
            <a href="{{ url('/register') }}" class="text-red-500 hover:underline">Sign up here</a>
        </p>
    </div>
</section>
@endsection
