@extends('layout2.index')
@section('main')
@include('layout2.page-name',[$pagename='Company-Profile'])
<main class="p-4">
<article>
    <div class="box_flex2">
        <div class="box2 lbox2 grid place-items-center">
            <img src="{{asset('frontend/image/logo.png')}}" alt="Blynzo" class="">
        </div>
        <div class="box2 lbox2 grid place-items-center">
            <div class="">
                <h2 class="text-5xl font-semibold text-start text_clr2 my-4"> {{$web_name}}</h2>
<p class="text-xl font-semibold text-start my-4">At {{$web_name}}, we simplify the way patients book appointments with doctors, clinics, and hospitals. Our mission is to provide quick, reliable access to healthcare services with just a few clicks. We connect users to verified healthcare providers and offer easy scheduling, rescheduling, and telemedicine options. Designed for all users, our platform ensures a smooth and secure experience. Automated reminders help reduce missed appointments, enhancing patient care and efficiency. We prioritize data privacy and 24/7 accessibility to meet healthcare needs anytime. Our vision is to make healthcare accessible, efficient, and stress-free for everyone.</p>
<a href="{{url('all-doctors')}}"><button class="rounded bg_clr1 text-white font-semibold py-2 px-6 mt-6">Find Doctors,Hospitals and Clinic</button>        </a>
</div>
        </div>
    </div>
</article>
@include('layout2.descover-appointment')

</main>
@endSection