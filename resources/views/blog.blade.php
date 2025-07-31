@extends('layouts.app')

@section('title', 'Strawberry Farming Blog | FreshBerry')
@section('description', 'Learn from Sri Lankan strawberry farmers')

@section('content')

<!-- Hero Section -->
<section class="bg-gradient-to-r from-red-500 to-pink-600 text-white py-24 text-center">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">
            <span class="inline-block transform rotate-12">🍓</span> Farmer's Journal
        </h1>
        <p class="max-w-2xl mx-auto text-xl text-pink-100">
            Direct from our farms to your screen
        </p>
    </div>
</section>

<!-- Blog Posts -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        @php
            // Farmer data
            $farmers = [
                6 => (object)[
                    'name' => 'Tharuki Hannadige',
                    'image' => 'https://hermes.digitalinnovation.one/users/student/bf653e85-c0df-42d3-aec0-95e658bd4e2a.jpg'
                ],
                7 => (object)[
                    'name' => 'Suhan Ranasinghe', 
                    'image' => 'https://randomuser.me/api/portraits/men/32.jpg'
                ],
                8 => (object)[
                    'name' => 'Bhanuka Sri',
                    'image' => 'https://i.pinimg.com/736x/6b/b6/d0/6bb6d094147301f3ccce198b6d6179bc.jpg'
                ],
                9 => (object)[
                    'name' => 'Randunu Abhimani',
                    'image' => 'https://img.freepik.com/premium-photo/beautiful-sri-lankan-woman-forest_961886-65.jpg?w=2000'
                ],
                10 => (object)[
                    'name' => 'Don Isuru',
                    'image' => 'https://randomuser.me/api/portraits/men/28.jpg'
                ],
            ];

            // All 10 blog posts
            $posts = [
                (object)[
                    'blog_id' => 1,
                    'farmer_id' => 9,
                    'title' => '5 Tips for Growing Juicy Strawberries at Home',
                    'content' => 'Learn how to grow plump and sweet strawberries in your home garden with simple techniques using compost, sunlight, and watering schedules.',
                    'created_at' => now()->subDays(3),
                    'image' => 'https://stonepostgardens.com/wp-content/uploads/2024/07/straberryhangingbaskets-header.jpg'
                ],
                (object)[
                    'blog_id' => 2,
                    'farmer_id' => 7,
                    'title' => 'How We Harvest Strawberries in the Hill Country',
                    'content' => 'Ever wondered how strawberries are hand-picked? Here\'s a behind-the-scenes look at our daily morning harvests in the cool climates of Nuwara Eliya.',
                    'created_at' => now()->subDays(5),
                    'image' => 'https://c8.alamy.com/comp/2FJX49H/harvesting-strawberries-harvest-helper-strawberry-cultivation-in-a-greenhouse-young-strawberry-plants-grow-up-in-different-degrees-of-ripeness-are-2FJX49H.jpg'
                ],
                (object)[
                    'blog_id' => 3,
                    'farmer_id' => 10,
                    'title' => 'Preventing Pests in Organic Strawberry Farming',
                    'content' => 'Explore natural pest control methods we use on our farm - from neem sprays to companion planting - to keep strawberries healthy without chemicals.',
                    'created_at' => now()->subDays(7),
                    'image' => 'https://juicystrawberry.com/wp-content/uploads/2024/02/organic-disease-management-in-strawberries.jpg'
                ],
                (object)[
                    'blog_id' => 4,
                    'farmer_id' => 6,
                    'title' => 'Why Soil Health Matters for Strawberry Quality',
                    'content' => 'Healthy soil = healthy berries. We rotate crops, use compost, and monitor pH levels to ensure sweet and vibrant strawberries.',
                    'created_at' => now()->subDays(9),
                    'image' => 'https://juicystrawberry.com/wp-content/uploads/2024/02/Soil-Health-for-Sustainable-Organic-Strawberries.jpg'
                ],
                (object)[
                    'blog_id' => 5,
                    'farmer_id' => 9,
                    'title' => 'Rainy Season Challenges for Strawberry Farmers',
                    'content' => 'Rain can ruin crops if not managed well. Learn how we use drainage systems and cover techniques to protect the strawberries.',
                    'created_at' => now()->subDays(11),
                    'image' => 'https://planasa.com/wp-content/uploads/2023/07/Granfrutta_Zani-7.jpg'
                ],
                (object)[
                    'blog_id' => 6,
                    'farmer_id' => 8,
                    'title' => 'From Farm to Box: How We Pack Our Berries',
                    'content' => 'After harvesting, our strawberries are sorted, checked for bruises, and packed with eco-friendly cushioning for freshness.',
                    'created_at' => now()->subDays(13),
                    'image' => 'https://img.freepik.com/premium-photo/harvesting-fresh-strawberries-june-sweet-red-strawberry-strawberry-farm-box-with-ripe-berry_90189-5638.jpg'
                ],
                (object)[
                    'blog_id' => 7,
                    'farmer_id' => 8,
                    'title' => 'Strawberries and Climate Change: Our Adaptation',
                    'content' => 'Weather patterns are shifting. Here is how we are adapting with shade nets, mulching, and better irrigation timing.',
                    'created_at' => now()->subDays(15),
                    'image' => 'https://toyotatimes.jp/en/upload_images/series_beyondmobility_010_3.jpg'
                ],
                (object)[
                    'blog_id' => 8,
                    'farmer_id' => 6,
                    'title' => 'Top 3 Strawberry Varieties We Grow in Sri Lanka',
                    'content' => 'We cultivate Red Gauntlet, Albion, and Festival - each with unique flavor profiles. Find out which one you are tasting!',
                    'created_at' => now()->subDays(17),
                    'image' => 'https://www.usagardeningguide.com/wp-content/uploads/2024/03/Strawberry-Varieties-1024x576.webp'
                ],
                (object)[
                    'blog_id' => 9,
                    'farmer_id' => 6,
                    'title' => 'Why Freshness Matters: Picking to Your Doorstep',
                    'content' => 'We deliver strawberries within 24 hours of harvest. Discover how this keeps them tastier and longer-lasting.',
                    'created_at' => now()->subDays(19),
                    'image' => 'https://cdn.getyourguide.com/img/tour/bbe0719adfc2ec8e.jpeg/98.jpg'
                ],
                (object)[
                    'blog_id' => 10,
                    'farmer_id' => 7,
                    'title' => 'Tips for Storing Strawberries at Home',
                    'content' => 'Never wash before storing! Keep them dry and in a breathable container inside the fridge for up to 5 days.',
                    'created_at' => now()->subDays(21),
                    'image' => 'https://www.thespruceeats.com/thmb/_MJt7OYo1_A-aHzNiN-wTG7q0Yo=/960x0/filters:no_upscale():max_bytes(150000):strip_icc()/how-to-store-strawberries-2217548_hero-c4512846eb454739afeaa47a4a895108.jpg',
                ]
            ];
            
        @endphp

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($posts as $post)
            <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                <div class="h-48 overflow-hidden">
                    <img src="{{ $post->image }}" 
                         class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
                         alt="{{ $post->title }}">
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <img src="{{ $farmers[$post->farmer_id]->image }}" 
                             class="w-10 h-10 rounded-full border-2 border-white shadow-md mr-3"
                             alt="{{ $farmers[$post->farmer_id]->name }}">
                        <span class="font-medium">{{ $farmers[$post->farmer_id]->name }}</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $post->title }}</h3>
                    <p class="text-gray-600 mb-4">{{ $post->content }}</p>
                   <div class="text-sm text-gray-500">
    {{ $post->created_at->format('M d, Y') }}
</div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection