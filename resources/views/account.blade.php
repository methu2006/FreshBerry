@extends('layouts.app')

@section('title', 'My Account - FreshBerry')

@section('content')
<section class="py-12">
  <div class="mx-auto max-w-7xl px-6">
    @if(session('status'))
      <div class="mb-6 rounded-lg bg-green-50 border border-green-200 text-green-800 px-4 py-3">{{ session('status') }}</div>
    @endif
    @if(session('error'))
      <div class="mb-6 rounded-lg bg-red-50 border border-red-200 text-red-800 px-4 py-3">{{ session('error') }}</div>
    @endif

    <div class="flex items-center mb-6">
      <span class="text-3xl mr-3">🍓</span>
      <h1 class="text-2xl font-extrabold">My Account</h1>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="md:col-span-2 bg-white rounded-2xl border border-gray-200 p-6">
        <h2 class="text-lg font-bold mb-4">Welcome, {{ $user['name'] ?? 'Guest' }}</h2>
        <p class="text-gray-700 mb-2">Email: <span class="font-medium">{{ $user['email'] ?? 'N/A' }}</span></p>
        <p class="text-gray-700">Role: <span class="font-medium">{{ $user['role'] ?? 'N/A' }}</span></p>
      </div>

      <div class="bg-white rounded-2xl border border-gray-200 p-6">
        <h3 class="font-semibold mb-4">Actions</h3>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button class="w-full inline-flex justify-center items-center px-4 py-2 rounded-xl text-white font-semibold bg-gradient-to-r from-red-500 to-pink-500 hover:from-red-600 hover:to-pink-600">Logout</button>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
