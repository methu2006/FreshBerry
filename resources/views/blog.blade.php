@extends('layouts.app')

@section('title', 'Strawberry Blog - Farmer Insights | FreshBerry')
@section('description', 'Read blog posts by our strawberry farmers. Learn tips, farming stories, and behind-the-scenes from field to table.')

@section('content')

<!-- Blog Intro -->
<section class="bg-gradient-to-r from-red-400 to-pink-500 text-white py-20 text-center">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl font-bold mb-4">🍓 Farmer's Blog</h1>
        <p class="max-w-xl mx-auto text-lg text-pink-100">Stories, tips, and behind-the-scenes from the fields of FreshBerry. Learn directly from the hands that grow your strawberries!</p>
    </div>
</section>

<!-- Blog Grid -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
            @php
                $blogs = [
                    ['title' => '5 Tips for Growing Juicy Strawberries at Home', 'content' => 'Learn how to grow plump and sweet strawberries in your home garden with simple techniques using compost, sunlight, and watering schedules.', 'author' => 'Farmer 9'],
                    ['title' => 'How We Harvest Strawberries in the Hill Country', 'content' => 'Ever wondered how strawberries are hand-picked? Here\'s a behind-the-scenes look at our daily morning harvests in the cool climates of Nuwara Eliya.', 'author' => 'Farmer 7'],
                    ['title' => 'Preventing Pests in Organic Strawberry Farming', 'content' => 'Explore natural pest control methods we use on our farm - from neem sprays to companion planting - to keep strawberries healthy without chemicals.', 'author' => 'Farmer 10'],
                    ['title' => 'Why Soil Health Matters for Strawberry Quality', 'content' => 'Healthy soil = healthy berries. We rotate crops, use compost, and monitor pH levels to ensure sweet and vibrant strawberries.', 'author' => 'Farmer 6'],
                    ['title' => 'Rainy Season Challenges for Strawberry Farmers', 'content' => 'Rain can ruin crops if not managed well. Learn how we use drainage systems and cover techniques to protect the strawberries.', 'author' => 'Farmer 9'],
                    ['title' => 'From Farm to Box: How We Pack Our Berries', 'content' => 'After harvesting, our strawberries are sorted, checked for bruises, and packed with eco-friendly cushioning for freshness.', 'author' => 'Farmer 8'],
                    ['title' => 'Strawberries and Climate Change: Our Adaptation', 'content' => 'Weather patterns are shifting. Here is how we are adapting with shade nets, mulching, and better irrigation timing.', 'author' => 'Farmer 8'],
                    ['title' => 'Top 3 Strawberry Varieties We Grow in Sri Lanka', 'content' => 'We cultivate Red Gauntlet, Albion, and Festival - each with unique flavor profiles. Find out which one you are tasting!', 'author' => 'Farmer 6'],
                    ['title' => 'Why Freshness Matters: Picking to Your Doorstep', 'content' => 'We deliver strawberries within 24 hours of harvest. Discover how this keeps them tastier and longer-lasting.', 'author' => 'Farmer 6'],
                    ['title' => 'Tips for Storing Strawberries at Home', 'content' => 'Never wash before storing! Keep them dry and in a breathable container inside the fridge for up to 5 days.', 'author' => 'Farmer 7']
                ];
            @endphp

            @foreach ($blogs as $blog)
                <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 p-6 border">
                    <h3 class="text-xl font-bold text-red-600 mb-2">{{ $blog['title'] }}</h3>
                    <p class="text-gray-700 mb-4 line-clamp-4">{{ $blog['content'] }}</p>
                    <div class="flex justify-between items-center text-sm text-gray-500">
                        <span>👨‍🌾 {{ $blog['author'] }}</span>
                        <a href="#" class="text-red-500 hover:underline">Read More →</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
