@extends('layout2.index',['title'=>'About'])
@section('main')

<main class="p-2">
<!-- Hero Section -->


@include('layout2.about')
<!-- Placeholder for further content -->
<section id="content" class="py-16 bg-gray-100">
  <div class="container mx-auto">
    <h2 class="text-3xl font-semibold text-center mb-6">Our Healthcare Solutions</h2>
    <p class="text-lg text-gray-700 text-center">
      Explore how we make healthcare easier for everyone.
    </p>
  </div>
</section>

<!-- JavaScript -->
<script>
  // Scroll to the next section smoothly when the button is clicked
  function scrollToContent() {
    document.getElementById('content').scrollIntoView({ behavior: 'smooth' });
  }

  // Animations for fade-in effect on page load
  document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('.animate-fade-in');
    elements.forEach((el, index) => {
      setTimeout(() => {
        el.classList.add('opacity-100', 'translate-y-0');
      }, index * 100); // Staggered animations
    });
  });
</script>

<!-- Tailwind Styles for Animation -->
<style>
  
</style>



<div class="container mx-auto px-6 py-16 space-y-16">

  <!-- How It Works Section -->
  <section id="how-it-works" class="text-center">
    <h2 class=" text_clr2 text-3xl font-bold mb-8">How It Works</h2>
    <div class="grid md:grid-cols-4 gap-8">
      <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow">
        <img src="{{asset('frontend/image/about/search.png')}}" alt="Search" class="w-20 mx-auto mb-4" />
        <h3 class="text-xl font-semibold">Search</h3>
        <p class="text-gray-600 mt-2">Search for doctors, hospitals, or clinics.</p>
      </div>
      <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow">
        <img src="{{asset('frontend/image/about/voter.png')}}" alt="Compare" class="w-20 mx-auto mb-4" />
        <h3 class="text-xl font-semibold">Compare</h3>
        <p class="text-gray-600 mt-2">Compare ratings, availability, and locations.</p>
      </div>
      <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow">
        <img src="{{asset('frontend/image/about/booking.png')}}" alt="Book" class="w-20 mx-auto mb-4" />
        <h3 class="text-xl font-semibold">Book</h3>
        <p class="text-gray-600 mt-2">Book appointments with just a few clicks.</p>
      </div>
      <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow">
        <img src="{{asset('frontend/image/about/track.png')}}" alt="Track" class="w-20 mx-auto mb-4" />
        <h3 class="text-xl font-semibold">Track</h3>
        <p class="text-gray-600 mt-2">Track your appointments and feedback.</p>
      </div>
    </div>
  </section>

  <!-- Our Vision Section -->
  
  <!-- Why Choose Us Section -->
  <section id="why-choose-us" class="text-center">
    <h2 class=" text_clr2 text-3xl font-bold mb-8">Why Choose Us</h2>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow">
        <img src="{{asset('frontend/image/about/24-hours.png')}}" alt="24/7 Availability" class="w-12 mb-4 mx-auto" />
        <h3 class="font-semibold text-lg">24/7 Availability</h3>
        <p class="mt-2 text-gray-600">We are here whenever you need us, day or night.</p>
      </div>
      <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow">
        <img src="{{asset('frontend/image/about/cyber-security.png')}}" alt="Secure & Private" class="w-12 mb-4 mx-auto" />
        <h3 class="font-semibold text-lg">Secure & Private</h3>
        <p class="mt-2 text-gray-600">Your data is protected with state-of-the-art encryption.</p>
      </div>
      <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow">
        <img src="{{asset('frontend/image/about/trust.png')}}" alt="Trusted Network" class="w-12 mb-4 mx-auto" />
        <h3 class="font-semibold text-lg">Trusted Network</h3>
        <p class="mt-2 text-gray-600">Connect with certified healthcare professionals.</p>
      </div>
    </div>
  </section>

  <!-- Privacy Commitment Section -->
  <section id="privacy-commitment" class="text-center bg-gray-50 py-12 rounded-lg">
    <h2 class=" text_clr2 text-3xl font-bold mb-4">Your Privacy Matters</h2>
    <p class="text-lg text-gray-700 max-w-3xl mx-auto mb-6">
      We prioritize the security of your personal and medical information, using state-of-the-art encryption and compliance with healthcare privacy standards.
    </p>
    <img src="{{asset('frontend/image/about/privacy.png')}}" alt="Privacy Icon" class="w-16 mx-auto" />
  </section>

</div>
<script>
    // Smooth scrolling effect
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
  });
});

</script>

</main>
@endSection




