@extends('layout.index')
@section('main')



<!-- Hero Section -->
<section class="relative h-screen bg-center bg-cover" style="background-image: url('image/about/services.avif');">
  <div class="absolute inset-0 bg-black bg-opacity-50"></div>
  <div class="container mx-auto h-full flex items-center justify-center">
    <div class="text-center text-white space-y-6" style="z-index: 10 !important;">
      <h1 class="text-5xl md:text-6xl font-extrabold">Our Services</h1>
      <p class="text-lg md:text-xl max-w-2xl mx-auto">
        We connect patients with top healthcare providers and offer seamless appointment management.
      </p>
    </div>
  </div>
</section>

<main class="p-2">
<!-- Services Grid Section -->
<section class="py-16 bg-gray-100">
  <div class="container mx-auto text-center">
    <h2 class="text-4xl text_clr2 font-semibold mb-10 ">Our Key Services</h2>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
      <div class="p-6 bg-white rounded-lg shadow-md">
        <h3 class="text-3xl font-semibold mb-4">Doctor Appointments</h3>
        <p>Book consultations with top healthcare professionals at your convenience.</p>
      </div>
      <div class="p-6 bg-white rounded-lg shadow-md">
        <h3 class="text-3xl font-semibold mb-4">Hospital Services</h3>
        <p>Connect with the best hospitals for specialized treatments and care.</p>
      </div>
      <div class="p-6 bg-white rounded-lg shadow-md">
        <h3 class="text-3xl font-semibold mb-4">Emergency Assistance</h3>
        <p>Get immediate help for urgent medical needs 24/7.</p>
      </div>
      <div class="p-6 bg-white rounded-lg shadow-md">
        <h3 class="text-3xl font-semibold mb-4">pathology</h3>
        <p>Book consultations with top healthcare professionals at your convenience.</p>
      </div>
     
    </div>
  </div>
</section>

<!-- Service Benefits Section -->
<section class="py-16 bg-white">
  <div class="container mx-auto text-center">
    <h2 class="text-3xl font-semibold mb-6 text_clr2">Why Choose Us</h2>
    <p class="text-lg text-gray-600 mb-8">
      We ensure quality healthcare with trusted providers, 24/7 availability, and secure data management.
    </p>
  </div>
</section>


 @include('layout.contact')

<!-- Call to Action Section -->
<section class="py-16 bg-gray-100">
  <div class="container mx-auto text-center">
    <h2 class="text-3xl font-semibold mb-4 text_clr2">Need Immediate Assistance?</h2>
    <p class="text-lg mb-6">
      If you need urgent help, don’t hesitate to contact us right away.
    </p>
    <div class="flex justify-center space-x-4">
      <a href="tel:{{$web_phone1}}" class="bg_clr1 bg_clr1_h text-white px-6 py-3 rounded-lg">Call Now</a>
      <a href="mailto:{{$web_email}}" class="bg_clr2 bg_clr2_h text-white px-6 py-3 rounded-lg">Email Us</a>
    </div>
  </div>
</section>

</main>
@endSection