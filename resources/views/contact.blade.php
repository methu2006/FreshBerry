@extends('layouts.app')

@section('title', 'Contact Us - FreshBerry')
@section('description', 'Get in touch with FreshBerry - ask questions, find our location, or follow us on social media.')

@section('content')

<!-- Page Header -->
<section class="bg-gradient-to-r from-pink-500 to-red-500 text-white py-16">
  <div class="container mx-auto px-6 text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">Contact Us</h1>
    <p class="text-lg md:text-xl text-pink-100">We’d love to hear from you! Fill out the form or reach us directly.</p>
  </div>
</section>

<!-- Contact Form & Info -->
<section class="py-16 bg-white">
  <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12">

    <!-- Contact Form -->
    <div>
      <h2 class="text-2xl font-bold mb-6 text-gray-800">Send us a Message</h2>
      <form action="#" method="POST" class="space-y-4">
        <div>
          <label class="block mb-1 font-medium">Your Name</label>
          <input type="text" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400">
        </div>
        <div>
          <label class="block mb-1 font-medium">Email Address</label>
          <input type="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400">
        </div>
        <div>
          <label class="block mb-1 font-medium">Subject</label>
          <input type="text" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400">
        </div>
        <div>
          <label class="block mb-1 font-medium">Your Message</label>
          <textarea name="message" rows="5" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400"></textarea>
        </div>
        <button type="submit" class="bg-red-500 text-white px-6 py-3 rounded-full hover:bg-red-600 transition-all font-semibold">Send Message</button>
      </form>
    </div>

    <!-- Contact Info -->
    <div>
      <h2 class="text-2xl font-bold mb-6 text-gray-800">Contact Details</h2>
      <p class="mb-4 text-gray-600">Need help or want to visit our farm?</p>

      <div class="space-y-4 text-gray-700">
        <p><strong>📍 Address:</strong> 123 Strawberry Lane, Nuwara Eliya, Sri Lanka</p>
        <p><strong>📧 Email:</strong> hello@freshberry.lk</p>
        <p><strong>📞 Phone:</strong> +94 71 123 4567</p>
      </div>

      <div class="mt-6">
        <h3 class="font-bold mb-2 text-gray-800">Follow us</h3>
        <div class="flex space-x-4">
          <a href="#" class="text-red-500 hover:text-red-700 text-2xl">🌐</a>
          <a href="#" class="text-pink-500 hover:text-pink-700 text-2xl">📸</a>
          <a href="#" class="text-blue-500 hover:text-blue-700 text-2xl">📘</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Google Map Embed -->
<section class="w-full h-96">
  <iframe
    width="100%"
    height="100%"
    frameborder="0"
    style="border:0"
    allowfullscreen
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31713.666833431974!2d80.765359!3d6.949689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2478676b40c2f%3A0x47c8a7e5b92f7f83!2sNuwara%20Eliya!5e0!3m2!1sen!2slk!4v1615161689225"
    loading="lazy">
  </iframe>
</section>

@endsection
