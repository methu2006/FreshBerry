@extends('layouts.app')

@section('title', 'Strawberry Recipes - Delicious Ideas | FreshBerry')
@section('description', 'Discover amazing strawberry recipes from smoothies to desserts. Get inspired with our collection of easy-to-follow strawberry recipes.')

@section('content')

@php
    // Sample recipes data - this would come from your database
    $recipes = [
        ['id' => 1, 'user_id' => 2, 'title' => 'Strawberry Smoothie', 'ingredients' => '1 cup strawberries, 1 banana, 1/2 cup yogurt, 1/2 cup milk, honey', 'instructions' => 'Blend all ingredients until smooth. Serve chilled.', 'image_url' => 'https://thecleaneatingcouple.com/wp-content/uploads/2021/04/strawberry-banana-smoothie-1.jpg', 'category' => 'beverages', 'prep_time' => '5 min', 'difficulty' => 'Easy', 'rating' => 4.8, 'author' => 'Chef Maria'],
        ['id' => 2, 'user_id' => 3, 'title' => 'Strawberry Jam', 'ingredients' => '2 cups strawberries, 1.5 cups sugar, 1 tbsp lemon juice', 'instructions' => 'Cook strawberries and sugar on low heat for 20 minutes. Add lemon juice and cool before storing.', 'image_url' => 'https://wholemadehomestead.com/wp-content/uploads/2023/06/sugar-free-strawberry-jam.jpg', 'category' => 'preserves', 'prep_time' => '30 min', 'difficulty' => 'Medium', 'rating' => 4.9, 'author' => 'Chef John'],
        ['id' => 3, 'user_id' => 4, 'title' => 'Strawberry Shortcake', 'ingredients' => 'Strawberries, whipped cream, sponge cake slices', 'instructions' => 'Layer cake, cream, and strawberries. Chill and serve.', 'image_url' => 'https://www.fullerssugarhouse.com/wp-content/uploads/2022/06/strawberry-shortcake.jpg', 'category' => 'desserts', 'prep_time' => '20 min', 'difficulty' => 'Easy', 'rating' => 4.7, 'author' => 'Chef Sarah'],
        ['id' => 4, 'user_id' => 3, 'title' => 'Strawberry Pancakes', 'ingredients' => '1 cup flour, 1 egg, milk, strawberries, sugar, butter', 'instructions' => 'Make pancake batter. Fold in chopped strawberries. Cook on skillet and serve with syrup.', 'image_url' => 'https://insanelygoodrecipes.com/wp-content/uploads/2024/11/strawberry-pancakes-close-up.jpg', 'category' => 'breakfast', 'prep_time' => '15 min', 'difficulty' => 'Easy', 'rating' => 4.6, 'author' => 'Chef John'],
        ['id' => 5, 'user_id' => 2, 'title' => 'Strawberry Parfait', 'ingredients' => 'Strawberries, Greek yogurt, granola, honey', 'instructions' => 'Layer yogurt, granola, and strawberries in a glass. Top with honey.', 'image_url' => 'http://prettysimplesweet.com/wp-content/uploads/2017/06/LemonStrawberryParfait-4.jpg', 'category' => 'breakfast', 'prep_time' => '10 min', 'difficulty' => 'Easy', 'rating' => 4.5, 'author' => 'Chef Maria'],
        ['id' => 6, 'user_id' => 2, 'title' => 'Strawberry Salad', 'ingredients' => 'Fresh strawberries, spinach, feta cheese, walnuts, balsamic dressing', 'instructions' => 'Toss all ingredients and drizzle with balsamic.', 'image_url' => 'https://barefeetinthekitchen.com/wp-content/uploads/2011/06/Strawberry-Spinach-Salad-1-1-of-1.jpg', 'category' => 'salads', 'prep_time' => '10 min', 'difficulty' => 'Easy', 'rating' => 4.4, 'author' => 'Chef Maria'],
        ['id' => 7, 'user_id' => 2, 'title' => 'Chocolate Strawberry Bites', 'ingredients' => 'Strawberries, melted dark chocolate, nuts (optional)', 'instructions' => 'Dip strawberries in chocolate and chill for 15 minutes.', 'image_url' => 'https://diyjoy.com/wp-content/uploads/2025/02/Chocolate-Strawberry-Bites-Recipe.jpg', 'category' => 'desserts', 'prep_time' => '20 min', 'difficulty' => 'Easy', 'rating' => 4.8, 'author' => 'Chef Maria'],
        ['id' => 8, 'user_id' => 3, 'title' => 'Strawberry Lassi', 'ingredients' => 'Strawberries, yogurt, sugar, water, cardamom', 'instructions' => 'Blend all ingredients. Serve cold.', 'image_url' => 'https://someindiangirl.com/wp-content/uploads/2023/04/Strawberry-Lassi-06223.jpg', 'category' => 'beverages', 'prep_time' => '5 min', 'difficulty' => 'Easy', 'rating' => 4.3, 'author' => 'Chef John'],
        ['id' => 9, 'user_id' => 5, 'title' => 'Strawberry Sorbet', 'ingredients' => '2 cups strawberries, 1/2 cup sugar, 1 tbsp lemon juice', 'instructions' => 'Blend and freeze the mixture for 3–4 hours.', 'image_url' => 'http://comfybelly.com/wp-content/uploads/2009/05/Strawberry-Sorbet.jpg', 'category' => 'desserts', 'prep_time' => '4 hours', 'difficulty' => 'Medium', 'rating' => 4.6, 'author' => 'Chef Emma'],
        ['id' => 10, 'user_id' => 2, 'title' => 'Strawberry Milkshake', 'ingredients' => '1 cup milk, 1/2 cup strawberries, 2 scoops vanilla ice cream, sugar', 'instructions' => 'Blend all and serve chilled.', 'image_url' => 'http://i1.wp.com/domesticallyblissful.com/wp-content/uploads/2014/03/Strawberry-Milkshake1.jpg', 'category' => 'beverages', 'prep_time' => '5 min', 'difficulty' => 'Easy', 'rating' => 4.7, 'author' => 'Chef Maria'],
        ['id' => 11, 'user_id' => 4, 'title' => 'Strawberry Muffins', 'ingredients' => 'Flour, sugar, baking powder, eggs, milk, strawberries', 'instructions' => 'Mix ingredients, fill muffin tray, and bake at 180°C for 20 min.', 'image_url' => 'https://www.rainbownourishments.com/wp-content/uploads/2023/08/vegan-double-strawberry-muffins-1-819x1024.jpg', 'category' => 'baked goods', 'prep_time' => '35 min', 'difficulty' => 'Medium', 'rating' => 4.5, 'author' => 'Chef Sarah'],
        ['id' => 12, 'user_id' => 5, 'title' => 'Strawberry Tart', 'ingredients' => 'Tart shell, custard, fresh strawberries, glaze', 'instructions' => 'Fill shell with custard, top with strawberries, glaze and chill.', 'image_url' => 'https://i.pinimg.com/736x/75/dd/ca/75ddcae48001281eaf72c34dbb234b06.jpg', 'category' => 'desserts', 'prep_time' => '45 min', 'difficulty' => 'Hard', 'rating' => 4.9, 'author' => 'Chef Emma'],
        ['id' => 13, 'user_id' => 3, 'title' => 'Strawberry Crepes', 'ingredients' => 'Crepe batter, fresh strawberries, whipped cream', 'instructions' => 'Cook crepes, fill with cream and strawberries, fold and serve.', 'image_url' => 'http://1.bp.blogspot.com/_UIXOn06Pz70/SF66a2u5ujI/AAAAAAAADnE/gatyvkGva9Y/s800/Strawberry+Cheesecake+Crepe+500.jpg', 'category' => 'breakfast', 'prep_time' => '25 min', 'difficulty' => 'Medium', 'rating' => 4.8, 'author' => 'Chef John'],
        ['id' => 14, 'user_id' => 5, 'title' => 'Strawberry Cupcakes', 'ingredients' => 'Flour, sugar, eggs, baking powder, strawberries, frosting', 'instructions' => 'Bake cupcakes and top with strawberry-flavored frosting.', 'image_url' => 'http://www.cookingclassy.com/wp-content/uploads/2013/02/strawberry-shortcake-cupcakes4.jpg', 'category' => 'baked goods', 'prep_time' => '40 min', 'difficulty' => 'Medium', 'rating' => 4.7, 'author' => 'Chef Emma'],
        ['id' => 15, 'user_id' => 1, 'title' => 'Strawberry Yogurt Popsicles', 'ingredients' => 'Strawberries, yogurt, honey, vanilla', 'instructions' => 'Blend and pour into molds. Freeze for 6 hours.', 'image_url' => 'Strawberry Yogurt Popsicles', 'category' => 'frozen treats', 'prep_time' => '6 hours', 'difficulty' => 'Easy', 'rating' => 4.4, 'author' => 'Chef Alex'],
        ['id' => 16, 'user_id' => 2, 'title' => 'Strawberry Salsa', 'ingredients' => 'Strawberries, onion, jalapeño, lime, cilantro, salt', 'instructions' => 'Mix all ingredients finely chopped. Serve with chips or grilled chicken.', 'image_url' => 'https://4.bp.blogspot.com/-V1KuA3Y2EEs/VYfhBVfNeoI/AAAAAAAAv0Y/03ZBFijlGu8/s800/Strawberry%2BSalsa%2B800%2B6719.jpg', 'category' => 'appetizers', 'prep_time' => '15 min', 'difficulty' => 'Easy', 'rating' => 4.2, 'author' => 'Chef Maria'],
        ['id' => 17, 'user_id' => 5, 'title' => 'Strawberry Oatmeal', 'ingredients' => 'Rolled oats, milk, strawberries, honey, cinnamon', 'instructions' => 'Cook oats with milk. Top with strawberries and honey.', 'image_url' => 'https://www.liveeatlearn.com/wp-content/uploads/2021/08/strawberries-and-cream-oatmeal-9-1025x1536.jpg', 'category' => 'breakfast', 'prep_time' => '10 min', 'difficulty' => 'Easy', 'rating' => 4.3, 'author' => 'Chef Emma'],
        ['id' => 18, 'user_id' => 3, 'title' => 'Strawberry Banana Bread', 'ingredients' => 'Bananas, strawberries, flour, sugar, baking soda, eggs', 'instructions' => 'Mix ingredients, bake at 175°C for 45–50 minutes.', 'image_url' => 'https://www.rockrecipes.com/wp-content/uploads/2014/02/strawberry-Banana-Bread-photo-of-a-single-slice-on-white-plate-with-coffee-bananas-and-strawberries-in-background.jpg', 'category' => 'baked goods', 'prep_time' => '60 min', 'difficulty' => 'Medium', 'rating' => 4.6, 'author' => 'Chef John'],
        ['id' => 19, 'user_id' => 1, 'title' => 'Strawberry Glazed Donuts', 'ingredients' => 'Donuts, strawberries, powdered sugar, milk', 'instructions' => 'Blend glaze and dip cooled donuts. Let set.', 'image_url' => 'https://i.pinimg.com/originals/32/69/eb/3269eb285eb8bf499350c9216bcd1e7d.jpg', 'category' => 'baked goods', 'prep_time' => '20 min', 'difficulty' => 'Easy', 'rating' => 4.4, 'author' => 'Chef Alex'],
        ['id' => 20, 'user_id' => 4, 'title' => 'Strawberry Cream Cheese Toast', 'ingredients' => 'Bread, cream cheese, sliced strawberries, honey', 'instructions' => 'Spread cheese, add strawberries, drizzle with honey.', 'image_url' => 'http://www.cindysrecipesandwritings.com/wp-content/uploads/2016/06/Strawberry-Cream-Cheese-French-Toast-1-1024x851.jpg', 'category' => 'breakfast', 'prep_time' => '5 min', 'difficulty' => 'Easy', 'rating' => 4.1, 'author' => 'Chef Sarah'],
        ['id' => 21, 'user_id' => 1, 'title' => 'Strawberry Cheesecake', 'ingredients' => 'Graham crackers, cream cheese, sugar, eggs, strawberries', 'instructions' => 'Make crust, prepare filling, bake, top with strawberry glaze', 'image_url' => 'https://www.recipetineats.com/wp-content/uploads/2018/12/Strawberry-Cheesecake_8.jpg', 'category' => 'desserts', 'prep_time' => '3 hours', 'difficulty' => 'Hard', 'rating' => 4.9, 'author' => 'Chef Alex'],
        ['id' => 22, 'user_id' => 2, 'title' => 'Strawberry Lemonade', 'ingredients' => 'Strawberries, lemons, sugar, water, ice', 'instructions' => 'Blend strawberries, mix with lemon juice and sugar syrup', 'image_url' => 'https://therecipecritic.com/wp-content/uploads/2013/05/strawberry_lemonade_4.jpg', 'category' => 'beverages', 'prep_time' => '10 min', 'difficulty' => 'Easy', 'rating' => 4.6, 'author' => 'Chef Maria'],
        ['id' => 23, 'user_id' => 3, 'title' => 'Strawberry Bruschetta', 'ingredients' => 'Baguette, ricotta, strawberries, balsamic glaze, basil', 'instructions' => 'Toast bread, spread ricotta, top with strawberries and glaze', 'image_url' => 'https://jackfruitful.com/wp-content/uploads/2024/11/Strawberry-Bruschetta38-1.jpg', 'category' => 'appetizers', 'prep_time' => '15 min', 'difficulty' => 'Easy', 'rating' => 4.5, 'author' => 'Chef John'],
        ['id' => 24, 'user_id' => 4, 'title' => 'Strawberry Ice Cream', 'ingredients' => 'Heavy cream, milk, sugar, egg yolks, strawberry puree', 'instructions' => 'Make custard base, churn with strawberry puree', 'image_url' => 'https://www.seasonsandsuppers.ca/wp-content/uploads/2013/06/strawicecream1200B.jpg', 'category' => 'frozen treats', 'prep_time' => '4 hours', 'difficulty' => 'Hard', 'rating' => 4.8, 'author' => 'Chef Sarah'],
        ['id' => 25, 'user_id' => 5, 'title' => 'Strawberry Mojito', 'ingredients' => 'Strawberries, mint, lime, rum, soda water, sugar', 'instructions' => 'Muddle ingredients, add ice and rum, top with soda', 'image_url' => 'https://www.pastrywishes.com/wp-content/uploads/2023/07/strawberry-mojito-mocktail-square.jpg', 'category' => 'beverages', 'prep_time' => '5 min', 'difficulty' => 'Easy', 'rating' => 4.7, 'author' => 'Chef Emma'],
        ['id' => 26, 'user_id' => 1, 'title' => 'Strawberry French Toast', 'ingredients' => 'Bread, eggs, milk, cinnamon, strawberries, syrup', 'instructions' => 'Dip bread in egg mixture, cook, top with strawberries', 'image_url' => 'https://speedyrecipe.com/wp-content/uploads/2016/02/strawberry-french-toast-1.jpg', 'category' => 'breakfast', 'prep_time' => '15 min', 'difficulty' => 'Easy', 'rating' => 4.5, 'author' => 'Chef Alex'],
        ['id' => 27, 'user_id' => 2, 'title' => 'Strawberry Pizza', 'ingredients' => 'Pizza dough, mascarpone, strawberries, chocolate drizzle', 'instructions' => 'Bake crust, spread cheese, arrange strawberries, drizzle', 'image_url' => 'https://i.pinimg.com/originals/b9/7f/fb/b97ffb2b2d0d0ff3258fa0e45a67e558.jpg', 'category' => 'desserts', 'prep_time' => '30 min', 'difficulty' => 'Medium', 'rating' => 4.3, 'author' => 'Chef Maria'],
        ['id' => 28, 'user_id' => 3, 'title' => 'Strawberry Granita', 'ingredients' => 'Strawberries, sugar, water, lemon juice', 'instructions' => 'Blend and freeze, scrape with fork periodically', 'image_url' => 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/b2383e9963d05659bb69ef5668553172/Derivates/27b5cb1d6cd5ee9ab3ab5f90d45830da160e4732.jpg', 'category' => 'frozen treats', 'prep_time' => '3 hours', 'difficulty' => 'Medium', 'rating' => 4.4, 'author' => 'Chef John'],
        ['id' => 29, 'user_id' => 4, 'title' => 'Strawberry Chia Pudding', 'ingredients' => 'Chia seeds, almond milk, strawberries, honey', 'instructions' => 'Mix and refrigerate overnight, top with strawberries', 'image_url' => 'https://www.cookinwithmima.com/wp-content/uploads/2022/03/strawberry-Chia-Seed-Pudding.jpg', 'category' => 'breakfast', 'prep_time' => '8 hours', 'difficulty' => 'Easy', 'rating' => 4.2, 'author' => 'Chef Sarah'],
        ['id' => 30, 'user_id' => 5, 'title' => 'Strawberry Gazpacho', 'ingredients' => 'Strawberries, cucumber, bell pepper, olive oil, vinegar', 'instructions' => 'Blend all ingredients, chill before serving', 'image_url' => 'https://www.all-thats-jas.com/wp-content/uploads/2018/05/Spanish-Strawberry-Gazpacho1.png', 'category' => 'soups', 'prep_time' => '15 min', 'difficulty' => 'Easy', 'rating' => 4.1, 'author' => 'Chef Emma']
    ];

    // Get unique categories
    $categories = array_unique(array_column($recipes, 'category'));
    sort($categories);

    // Featured recipes (highest rated)
    $featured_recipes = collect($recipes)->sortByDesc('rating')->take(6)->toArray();
@endphp

<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-red-500 via-pink-500 to-red-600 text-white py-20">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fadeInUp">
                🍓 Strawberry Recipes
            </h1>
            <p class="text-xl md:text-2xl text-pink-100 mb-8 max-w-3xl mx-auto animate-fadeInUp delay-200">
                Discover delicious recipes featuring fresh strawberries. From breakfast to dessert, find your perfect strawberry creation!
            </p>
            <div class="flex flex-wrap justify-center gap-4 animate-fadeInUp delay-400">
                <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-semibold">🥞 Breakfast Ideas</span>
                <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-semibold">🧁 Sweet Treats</span>
                <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-semibold">🥤 Refreshing Drinks</span>
            </div>
        </div>
    </div>
</section>

<!-- Search & Filter Section -->
<section class="py-8 bg-white border-b border-gray-200 sticky top-20 z-40">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row gap-6 items-center">
            <!-- Search Bar -->
            <div class="flex-1 max-w-md">
                <div class="relative">
                    <input 
                        type="text" 
                        id="recipeSearch"
                        placeholder="Search recipes..." 
                        class="w-full px-4 py-3 pl-12 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-red-400 focus:border-transparent transition-all duration-300"
                    >
                    <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>

            <!-- Category Filters -->
            <div class="flex flex-wrap gap-3">
                <button class="filter-btn active" data-category="all">All Recipes</button>
                @foreach($categories as $category)
                    <button class="filter-btn" data-category="{{ $category }}">{{ ucfirst(str_replace('-', ' ', $category)) }}</button>
                @endforeach
            </div>

            <!-- Sort & Difficulty Filter -->
            <div class="flex items-center gap-4">
                <select id="difficultyFilter" class="px-4 py-2 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-red-400">
                    <option value="all">All Levels</option>
                    <option value="Easy">Easy</option>
                    <option value="Medium">Medium</option>
                    <option value="Hard">Hard</option>
                </select>
                
                <select id="sortRecipes" class="px-4 py-2 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-red-400">
                    <option value="rating">Highest Rated</option>
                    <option value="prep_time">Prep Time</option>
                    <option value="title">Name</option>
                </select>
            </div>
        </div>
    </div>
</section>

<!-- Featured Recipes Section -->
<section class="py-16 bg-gradient-to-b from-gray-50 to-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">⭐ Featured Recipes</h2>
            <p class="text-gray-600">Our highest-rated strawberry recipes that everyone loves</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            @foreach(array_slice($featured_recipes, 0, 6) as $recipe)
                <div class="recipe-card group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 hover:-translate-y-2" 
                     data-category="{{ $recipe['category'] }}" 
                     data-title="{{ strtolower($recipe['title']) }}" 
                     data-difficulty="{{ $recipe['difficulty'] }}"
                     data-rating="{{ $recipe['rating'] }}"
                     data-prep-time="{{ $recipe['prep_time'] }}">
                    
                    <div class="relative overflow-hidden">
                        <img src="{{ $recipe['image_url'] }}" alt="{{ $recipe['title'] }}" 
                             class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110">
                        
                        <!-- Badges -->
                        <div class="absolute top-4 left-4 flex flex-col gap-2">
                            <span class="bg-red-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                                {{ $recipe['difficulty'] }}
                            </span>
                            @if($recipe['rating'] >= 4.8)
                                <span class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                                    ⭐ Featured
                                </span>
                            @endif
                        </div>

                        <!-- Prep Time -->
                        <div class="absolute top-4 right-4 bg-black/70 text-white px-3 py-1 rounded-full text-xs font-semibold">
                            ⏱ {{ $recipe['prep_time'] }}
                        </div>

                        <!-- Favorite Button -->
                        <button class="absolute bottom-4 right-4 p-2 bg-white/90 backdrop-blur-sm rounded-full text-gray-600 hover:text-red-500 hover:bg-white transition-all duration-300 favorite-btn">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="p-6">
                        <!-- Category & Rating -->
                        <div class="flex justify-between items-start mb-3">
                            <span class="bg-pink-100 text-pink-800 text-xs font-semibold px-2.5 py-1 rounded-full capitalize">
                                {{ str_replace('-', ' ', $recipe['category']) }}
                            </span>
                            <div class="flex items-center text-xs text-gray-500">
                                <span class="text-yellow-400 mr-1">★</span>
                                {{ $recipe['rating'] }}
                            </div>
                        </div>

                        <!-- Recipe Title -->
                        <h3 class="text-xl font-bold text-gray-800 mb-2 line-clamp-1 group-hover:text-red-600 transition-colors duration-300">
                            {{ $recipe['title'] }}
                        </h3>

                        <!-- Author -->
                        <p class="text-sm text-gray-500 mb-3">by {{ $recipe['author'] }}</p>

                        <!-- Ingredients Preview -->
                        <p class="text-sm text-gray-600 mb-4 line-clamp-2 leading-relaxed">
                            {{ Str::limit($recipe['ingredients'], 80) }}
                        </p>

                        <!-- Action Buttons -->
                        <div class="flex gap-2">
                            <button class="flex-1 bg-gradient-to-r from-red-500 to-pink-500 hover:from-red-600 hover:to-pink-600 text-white px-4 py-2 rounded-full text-sm font-semibold transition-all duration-300 transform hover:scale-105 view-recipe-btn"
                                    data-recipe-id="{{ $recipe['id'] }}">
                                View Recipe
                            </button>
                            <button class="bg-white border-2 border-red-500 text-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-full text-sm font-semibold transition-all duration-300 save-recipe-btn">
                                Save
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- All Recipes Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold text-gray-800">All Recipes</h2>
            <p class="text-gray-600">Showing <span id="recipeCount">{{ count($recipes) }}</span> recipes</p>
        </div>

        <!-- Recipes Grid -->
        <div id="recipesGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @foreach($recipes as $recipe)
                <div class="recipe-card group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 hover:-translate-y-2" 
                     data-category="{{ $recipe['category'] }}" 
                     data-title="{{ strtolower($recipe['title']) }}" 
                     data-difficulty="{{ $recipe['difficulty'] }}"
                     data-rating="{{ $recipe['rating'] }}"
                     data-prep-time="{{ $recipe['prep_time'] }}">
                    
                    <div class="relative overflow-hidden">
                        <img src="{{ $recipe['image_url'] }}" alt="{{ $recipe['title'] }}" 
                             class="w-full h-48 object-cover transition-transform duration-700 group-hover:scale-110">
                        
                        <!-- Badges -->
                        <div class="absolute top-3 left-3 flex flex-col gap-1">
                            <span class="bg-red-500 text-white px-2 py-1 rounded-full text-xs font-bold shadow-lg">
                                {{ $recipe['difficulty'] }}
                            </span>
                            @if($recipe['rating'] >= 4.8)
                                <span class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-2 py-1 rounded-full text-xs font-bold shadow-lg">
                                    ⭐ Top
                                </span>
                            @endif
                        </div>

                        <!-- Prep Time -->
                        <div class="absolute top-3 right-3 bg-black/70 text-white px-2 py-1 rounded-full text-xs font-semibold">
                            {{ $recipe['prep_time'] }}
                        </div>

                        <!-- Favorite Button -->
                        <button class="absolute bottom-3 right-3 p-2 bg-white/90 backdrop-blur-sm rounded-full text-gray-600 hover:text-red-500 hover:bg-white transition-all duration-300 favorite-btn">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="p-4">
                        <!-- Category & Rating -->
                        <div class="flex justify-between items-start mb-2">
                            <span class="bg-pink-100 text-pink-800 text-xs font-semibold px-2 py-1 rounded-full capitalize">
                                {{ str_replace('-', ' ', $recipe['category']) }}
                            </span>
                            <div class="flex items-center text-xs text-gray-500">
                                <span class="text-yellow-400 mr-1">★</span>
                                {{ $recipe['rating'] }}
                            </div>
                        </div>

                        <!-- Recipe Title -->
                        <h3 class="text-lg font-bold text-gray-800 mb-1 line-clamp-1 group-hover:text-red-600 transition-colors duration-300">
                            {{ $recipe['title'] }}
                        </h3>

                        <!-- Author -->
                        <p class="text-xs text-gray-500 mb-2">by {{ $recipe['author'] }}</p>

                        <!-- Ingredients Preview -->
                        <p class="text-xs text-gray-600 mb-3 line-clamp-2 leading-relaxed">
                            {{ Str::limit($recipe['ingredients'], 60) }}
                        </p>

                        <!-- Action Buttons -->
                        <div class="flex gap-2">
                            <button class="flex-1 bg-gradient-to-r from-red-500 to-pink-500 hover:from-red-600 hover:to-pink-600 text-white px-3 py-2 rounded-full text-xs font-semibold transition-all duration-300 transform hover:scale-105 view-recipe-btn"
                                    data-recipe-id="{{ $recipe['id'] }}">
                                View Recipe
                            </button>
                            <button class="bg-white border border-red-500 text-red-500 hover:bg-red-500 hover:text-white px-3 py-2 rounded-full text-xs font-semibold transition-all duration-300 save-recipe-btn">
                                Save
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-12">
            <button id="loadMoreBtn" class="bg-white text-red-600 hover:bg-red-600 hover:text-white border-2 border-red-600 px-8 py-3 rounded-full font-semibold transition-all duration-300 transform hover:scale-105" style="display: none;">
                Load More Recipes
            </button>
        </div>
    </div>
</section>

<!-- Recipe Modal -->
<div id="recipeModal" class="fixed inset-0 bg-black/50 z-50 hidden items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-hidden">
        <div class="relative">
            <!-- Modal Header -->
            <div class="flex justify-between items-center p-6 border-b border-gray-200">
                <h2 id="modalTitle" class="text-2xl font-bold text-gray-800"></h2>
                <button id="closeModal" class="p-2 hover:bg-gray-100 rounded-full transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Modal Content -->
            <div class="overflow-y-auto max-h-[calc(90vh-80px)]">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 p-6">
                    <!-- Recipe Image -->
                    <div class="relative">
                        <img id="modalImage" src="" alt="" class="w-full h-64 lg:h-80 object-cover rounded-xl">
                        <div class="absolute top-4 left-4 flex gap-2">
                            <span id="modalDifficulty" class="bg-red-500 text-white px-3 py-1 rounded-full text-sm font-bold"></span>
                            <span id="modalPrepTime" class="bg-black/70 text-white px-3 py-1 rounded-full text-sm font-semibold"></span>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span id="modalRating" class="bg-white/90 text-gray-800 px-3 py-1 rounded-full text-sm font-semibold">★ 0</span>
                        </div>
                    </div>

                    <!-- Recipe Details -->
                    <div class="space-y-6">
                        <!-- Recipe Info -->
                        <div>
                            <div class="flex items-center gap-4 mb-4">
                                <span id="modalCategory" class="bg-pink-100 text-pink-800 text-sm font-semibold px-3 py-1 rounded-full capitalize"></span>
                                <span id="modalAuthor" class="text-gray-600">by Chef Name</span>
                            </div>
                        </div>

                        <!-- Ingredients -->
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">🥄 Ingredients</h3>
                            <div id="modalIngredients" class="bg-gray-50 rounded-xl p-4">
                                <!-- Ingredients will be populated by JavaScript -->
                            </div>
                        </div>

                        <!-- Instructions -->
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">👩‍🍳 Instructions</h3>
                            <div id="modalInstructions" class="bg-gray-50 rounded-xl p-4">
                                <!-- Instructions will be populated by JavaScript -->
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex gap-4">
                            <button class="flex-1 bg-gradient-to-r from-red-500 to-pink-500 hover:from-red-600 hover:to-pink-600 text-white px-6 py-3 rounded-full font-semibold transition-all duration-300">
                                Save Recipe
                            </button>
                            <button class="flex-1 bg-white border-2 border-red-500 text-red-500 hover:bg-red-500 hover:text-white px-6 py-3 rounded-full font-semibold transition-all duration-300">
                                Share Recipe
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Newsletter Section -->
<section class="py-16 bg-gradient-to-r from-red-500 to-pink-500 text-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-4">Get Weekly Recipe Ideas! 🍓</h2>
        <p class="mb-8 text-pink-100">Subscribe to receive new strawberry recipes and cooking tips directly in your inbox</p>
        <div class="max-w-md mx-auto flex gap-4">
            <input type="email" placeholder="Your email address" class="flex-1 px-4 py-3 rounded-full focus:outline-none text-gray-800">
            <button class="bg-black hover:bg-gray-900 px-6 py-3 rounded-full font-semibold transition-all duration-300">
                Subscribe
            </button>
        </div>
    </div>
</section>

<!-- Custom Styles -->
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

    .line-clamp-1 {
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .filter-btn {
        @apply px-4 py-2 bg-white text-gray-600 border border-gray-300 rounded-full font-medium hover:bg-red-50 hover:text-red-600 hover:border-red-300 transition-all duration-300;
    }

    .filter-btn.active {
        @apply bg-red-500 text-white border-red-500 hover:bg-red-600;
    }

    .recipe-card.hidden {
        display: none;
    }
</style>

<!-- JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const recipesGrid = document.getElementById('recipesGrid');
    const recipeCards = document.querySelectorAll('.recipe-card');
    const filterBtns = document.querySelectorAll('.filter-btn');
    const searchInput = document.getElementById('recipeSearch');
    const sortSelect = document.getElementById('sortRecipes');
    const difficultyFilter = document.getElementById('difficultyFilter');
    const recipeCount = document.getElementById('recipeCount');
    const loadMoreBtn = document.getElementById('loadMoreBtn');
    const recipeModal = document.getElementById('recipeModal');

    // Recipe data for modal
    const recipes = @json($recipes);

    let currentFilter = 'all';
    let currentSort = 'rating';
    let currentDifficulty = 'all';
    let visibleRecipes = 12;

    // Filter functionality
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            currentFilter = this.dataset.category;
            filterAndSortRecipes();
        });
    });

    // Search functionality
    searchInput.addEventListener('input', function() {
        filterAndSortRecipes();
    });

    // Sort functionality
    sortSelect.addEventListener('change', function() {
        currentSort = this.value;
        filterAndSortRecipes();
    });

    // Difficulty filter
    difficultyFilter.addEventListener('change', function() {
        currentDifficulty = this.value;
        filterAndSortRecipes();
    });

    // Favorite functionality
    document.addEventListener('click', function(e) {
        if (e.target.closest('.favorite-btn')) {
            const btn = e.target.closest('.favorite-btn');
            const icon = btn.querySelector('svg');
            
            if (icon.getAttribute('fill') === 'none') {
                icon.setAttribute('fill', 'currentColor');
                icon.style.color = '#ef4444';
                showNotification('Added to favorites! ❤️');
            } else {
                icon.setAttribute('fill', 'none');
                icon.style.color = '';
                showNotification('Removed from favorites');
            }
        }
    });

    // Save recipe functionality
    document.addEventListener('click', function(e) {
        if (e.target.closest('.save-recipe-btn')) {
            const btn = e.target.closest('.save-recipe-btn');
            btn.textContent = '✓ Saved!';
            btn.classList.add('bg-green-500', 'text-white', 'border-green-500');
            
            setTimeout(() => {
                btn.textContent = 'Save';
                btn.classList.remove('bg-green-500', 'text-white', 'border-green-500');
            }, 2000);
            
            showNotification('Recipe saved to your collection!');
        }
    });

    // View recipe modal functionality
    document.addEventListener('click', function(e) {
        if (e.target.closest('.view-recipe-btn')) {
            const recipeId = parseInt(e.target.closest('.view-recipe-btn').dataset.recipeId);
            const recipe = recipes.find(r => r.id === recipeId);
            
            if (recipe) {
                openRecipeModal(recipe);
            }
        }
    });

    // Modal close functionality
    document.getElementById('closeModal').addEventListener('click', closeRecipeModal);
    recipeModal.addEventListener('click', function(e) {
        if (e.target === recipeModal) {
            closeRecipeModal();
        }
    });

    // Load more functionality
    loadMoreBtn.addEventListener('click', function() {
        visibleRecipes += 8;
        filterAndSortRecipes();
    });

    function filterAndSortRecipes() {
        const searchTerm = searchInput.value.toLowerCase();
        let filteredRecipes = Array.from(recipeCards);

        // Filter by category
        if (currentFilter !== 'all') {
            filteredRecipes = filteredRecipes.filter(card => 
                card.dataset.category === currentFilter
            );
        }

        // Filter by difficulty
        if (currentDifficulty !== 'all') {
            filteredRecipes = filteredRecipes.filter(card => 
                card.dataset.difficulty === currentDifficulty
            );
        }

        // Filter by search term
        if (searchTerm) {
            filteredRecipes = filteredRecipes.filter(card => 
                card.dataset.title.includes(searchTerm)
            );
        }

        // Sort recipes
        filteredRecipes.sort((a, b) => {
            switch (currentSort) {
                case 'prep_time':
                    return parseFloat(a.dataset.prepTime) - parseFloat(b.dataset.prepTime);
                case 'title':
                    return a.dataset.title.localeCompare(b.dataset.title);
                case 'rating':
                default:
                    return parseFloat(b.dataset.rating) - parseFloat(a.dataset.rating);
            }
        });

        // Hide all recipes first
        recipeCards.forEach(card => {
            card.classList.add('hidden');
        });

        // Show filtered and sorted recipes
        filteredRecipes.slice(0, visibleRecipes).forEach(card => {
            card.classList.remove('hidden');
        });

        // Update recipe count
        recipeCount.textContent = filteredRecipes.length;

        // Show/hide load more button
        if (filteredRecipes.length <= visibleRecipes) {
            loadMoreBtn.style.display = 'none';
        } else {
            loadMoreBtn.style.display = 'inline-block';
        }

        // Add stagger animation
        const visibleCards = filteredRecipes.slice(0, visibleRecipes);
        visibleCards.forEach((card, index) => {
            card.style.animationDelay = `${index * 0.1}s`;
            card.classList.add('animate-fadeInUp');
        });
    }

    function openRecipeModal(recipe) {
        document.getElementById('modalTitle').textContent = recipe.title;
        document.getElementById('modalImage').src = recipe.image_url;
        document.getElementById('modalImage').alt = recipe.title;
        document.getElementById('modalDifficulty').textContent = recipe.difficulty;
        document.getElementById('modalPrepTime').textContent = recipe.prep_time;
        document.getElementById('modalRating').textContent = `★ ${recipe.rating}`;
        document.getElementById('modalCategory').textContent = recipe.category.replace('-', ' ');
        document.getElementById('modalAuthor').textContent = `by ${recipe.author}`;

        // Process ingredients
        const ingredients = recipe.ingredients.split(',').map(ing => ing.trim());
        const ingredientsList = ingredients.map(ing => `<div class="flex items-center mb-2"><span class="text-red-500 mr-2">•</span>${ing}</div>`).join('');
        document.getElementById('modalIngredients').innerHTML = ingredientsList;

        // Process instructions
        document.getElementById('modalInstructions').innerHTML = `<p class="text-gray-700 leading-relaxed">${recipe.instructions}</p>`;

        recipeModal.classList.remove('hidden');
        recipeModal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function closeRecipeModal() {
        recipeModal.classList.add('hidden');
        recipeModal.classList.remove('flex');
        document.body.style.overflow = 'auto';
    }

    function showNotification(message) {
        const notification = document.createElement('div');
        notification.className = 'fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50 transform translate-x-full transition-transform duration-300';
        notification.textContent = message;
        
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.classList.remove('translate-x-full');
        }, 100);
        
        setTimeout(() => {
            notification.classList.add('translate-x-full');
            setTimeout(() => {
                if (document.body.contains(notification)) {
                    document.body.removeChild(notification);
                }
            }, 300);
        }, 3000);
    }

    // Initialize
    filterAndSortRecipes();

    // Keyboard shortcuts
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeRecipeModal();
        }
    });
});
</script>

@endsection