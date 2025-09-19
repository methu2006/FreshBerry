@extends('layouts.app')

@section('title', 'Create Account - FreshBerry')
@section('description', 'Create your FreshBerry account to shop, save favorites, and manage orders.')

@section('content')
  <section class="bg-white">
    <div class="mx-auto max-w-7xl px-4 py-12">
      <div class="max-w-md mx-auto bg-white border border-gray-200 rounded-2xl shadow-sm p-8">
        <div class="flex items-center mb-6">
          <span class="text-3xl mr-2">🍓</span>
          <h1 class="text-2xl font-extrabold text-gray-900">Create your account</h1>
        </div>

        <form action="#" method="POST" class="space-y-5">
          @csrf

          <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full name</label>
            <input id="name" name="name" type="text" required
                   class="w-full rounded-xl border-gray-300 focus:ring-2 focus:ring-red-400 focus:border-red-400" placeholder="Jane Doe" />
          </div>

          <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
            <input id="email" name="email" type="email" required
                   class="w-full rounded-xl border-gray-300 focus:ring-2 focus:ring-red-400 focus:border-red-400" placeholder="you@example.com" />
          </div>

          <div>
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input id="password" name="password" type="password" required minlength="6"
                   class="w-full rounded-xl border-gray-300 focus:ring-2 focus:ring-red-400 focus:border-red-400" placeholder="••••••••" />
          </div>

          <div>
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm password</label>
            <input id="password_confirmation" name="password_confirmation" type="password" required minlength="6"
                   class="w-full rounded-xl border-gray-300 focus:ring-2 focus:ring-red-400 focus:border-red-400" placeholder="••••••••" />
          </div>

          <button type="submit"
                  class="w-full inline-flex justify-center items-center gap-2 px-4 py-2.5 rounded-xl text-white font-semibold bg-gradient-to-r from-red-500 to-pink-500 hover:from-red-600 hover:to-pink-600 transition">
            Create account
          </button>

          <p class="text-sm text-gray-600 text-center">Already have an account?
            <a href="{{ url('/login') }}" class="text-red-600 hover:text-red-700 font-medium">Log in</a>
          </p>
        </form>
      </div>
    </div>
  </section>
@endsection
