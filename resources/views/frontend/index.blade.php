@extends('layout2.index',['title'=>'Home'])
@section('main')
@include('layout2.crousel')
@include('layout2.search-bar')
@include('layout2.doctors')
@include('layout2.join-doctors')
@include('layout2.descover-appointment')
@include('layout2.recent-joiner')

<!-- truseted client -->
<div class="container mx-auto my-4">
    <!-- Responsive Box Container -->
    <div class="grid gap-4 grid-cols-1 text-center sm:grid-cols-2 lg:grid-cols-2x">
      <!-- Box 1 -->
      <div class="bg-white shadow-lg rounded-lg p-6 text-center">
        <img src="{{url('images/trusted/appointment.png')}}" alt="" class="place-self-center w-24">
        <p class="text-gray-600 text-5xl text-red-600">5321 <span>+</span></p>
      <h3 class="text-xl font-semibold mb-4"> Appointment</h3>
     </div>
      <!-- Box 2 -->
      <div class="bg-white shadow-lg rounded-lg p-6 text-center">
      <img src="{{url('images/trusted/trust.png')}}" alt="" class="place-self-center w-24">
      <p class="text-gray-600 text-5xl text-red-600">3862 <span>+</span></p>
      <h3 class="text-xl font-semibold mb-4"> Truseted Patient</h3>
      </div>
      
    </div>
  </div>


@include('layout2.feedback')

@include('layout2.our-partners')

@endsection