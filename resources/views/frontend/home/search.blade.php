@extends('layout2.index',['title'=>'Search'])
@section('main')


<!--main member-->
<div data-aos="fade-up" class="p_a latest-main-box grid place-items-center">
<h1 class="text-4xl font-semibold text-center text_clr1 drop-shadow my-6">Our <span class="text_clr2"> Top Doctors / Hospital</span> </h1>
 
    <div data-aos="fade-up" class="w-auto justify-between text-center mt-8">
 <!--new-->
 @if(count($doctors)>0)
 <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xlg:grid-cols-4 lg:grid-cols-3">
        
 @foreach ($doctors as $doctor)
 <div data-aos="fade-up" class="inline-block w-80  h-auto m-4 p-2 shadow shadow-blue-600">
        <div data-aos="fade-up" class="w-auto overflow-hidden h-72 grid place-items-center">
            <img src="{{ url( 'images/upload/.',$doctor->doctorImage) }}" alt="Blynzo" class="hover1 w-cover ">
        </div>
        <div data-aos="fade-up" class="w-auto h-18 text-start overflow-hidden ">
            <strong class="text-gray-400 uppercase" > {{$doctor->name }}</strong> 
            <h3 class="text-3xl font-semibold flex place-items-center place-content-start gap-4"> {{ $doctor->doctorName }}
                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></h3>
            <p class="text-sm text-start">{{$doctor->expertiseName}}</p>
           <!--review-->
           
     <hr class="mt-2">
     <div class="flex justify-between mt-4">
        <a href="{{ url('doctor-profile', ['id' => $doctor->doctorId, 'name' => $doctor->doctorName]) }}"> <button class="py-2 px-4 rounded border border-white bg_clr2 text-white font-semibold">View Profile</button></a>
        <a href=" "><button class="py-2 px-4 rounded border border-white bg_clr1 text-white font-semibold">Book Now</button></a>
     </div>
        </div>
    </div>
    @endforeach
    </div>
        @else
        <div class="flex justify-center mt-44 font-fira-sans font-normal text-base text-gray">
            {{__('No Data Available')}}
        </div>
        @endif


    </div>
   
 </div>
 
@endsection