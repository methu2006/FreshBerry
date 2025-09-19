@extends('layouts.app')
@section('title','Fresh Strawberries')
@section('content')
<section class="py-12">
  <div class="mx-auto max-w-7xl px-6">
    <div class="flex items-center justify-between mb-6">
      <h1 class="text-2xl font-extrabold">Fresh Strawberries</h1>
      <a href="/shop" class="text-sm text-red-600 hover:text-red-700">View all products →</a>
    </div>

    @if(!empty($products))
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($products as $p)
          <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition">
            <div class="aspect-[4/3] bg-gray-100 overflow-hidden">
              <img src="{{ $p['img'] }}" alt="{{ $p['name'] }}" class="w-full h-full object-cover">
            </div>
            <div class="p-4">
              <h3 class="font-semibold text-gray-900">{{ $p['name'] }}</h3>
              <p class="text-red-600 font-bold mt-1">Rs. {{ number_format($p['price'], 2) }}</p>
              <button class="mt-3 w-full inline-flex justify-center items-center px-4 py-2 rounded-xl text-white font-semibold bg-gradient-to-r from-red-500 to-pink-500 hover:from-red-600 hover:to-pink-600">
                Add to Cart
              </button>
            </div>
          </div>
        @endforeach
      </div>
    @else
      <p class="text-gray-700">No fresh products available right now.</p>
    @endif
  </div>
</section>
@endsection
