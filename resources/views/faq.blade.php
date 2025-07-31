@extends('layouts.app')

@section('title', 'Frequently Asked Questions | FreshBerry')
@section('description', 'Get answers to common questions about FreshBerry products, orders, delivery, and more.')

@section('content')

<!-- Hero Section -->
<section class="bg-gradient-to-r from-pink-400 to-red-500 text-white py-20 text-center">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Frequently Asked Questions</h1>
        <p class="text-pink-100 text-lg">Everything you need to know about ordering from FreshBerry</p>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6 max-w-4xl">
        <div class="space-y-6">
            @php
                $faqs = [
                    ['question' => 'How can I place an order?', 'answer' => 'You can place an order through our Shop page. Simply select the products you want, add them to your cart, and proceed to checkout.'],
                    ['question' => 'Do you offer island-wide delivery?', 'answer' => 'Yes! We deliver to all major areas in Sri Lanka within 2–3 business days.'],
                    ['question' => 'Are your strawberries organic?', 'answer' => 'Yes, our strawberries are grown without synthetic chemicals and pesticides, making them 100% organic.'],
                    ['question' => 'What payment methods are accepted?', 'answer' => 'We accept card payments, bank transfers, and cash on delivery in selected areas.'],
                    ['question' => 'How do I track my order?', 'answer' => 'After placing your order, you will receive a tracking link via email and SMS.'],
                    ['question' => 'Can I customize a gift box?', 'answer' => 'Absolutely! Visit our Custom Gifts section to create your own strawberry gift box.'],
                ];
            @endphp

            @foreach ($faqs as $index => $faq)
            <div class="border rounded-lg overflow-hidden shadow-sm">
                <button class="w-full text-left px-6 py-4 font-semibold text-gray-800 bg-gray-100 hover:bg-gray-200 focus:outline-none flex justify-between items-center" onclick="toggleFAQ('faq{{ $index }}')">
                    {{ $faq['question'] }}
                    <svg id="icon-faq{{ $index }}" class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div id="faq{{ $index }}" class="px-6 py-4 text-gray-600 hidden">
                    {{ $faq['answer'] }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<script>
function toggleFAQ(id) {
    const answer = document.getElementById(id);
    const icon = document.getElementById('icon-' + id);
    const isOpen = !answer.classList.contains('hidden');
    answer.classList.toggle('hidden');
    icon.classList.toggle('rotate-180');
}
</script>

@endsection
