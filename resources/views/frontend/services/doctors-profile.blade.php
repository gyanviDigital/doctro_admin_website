@extends('layout2.index',['title'=>'Doctor-Profile'])
@section('main')
@include('layout2.page-name',[$pagename='Doctors-Profile'])


<main class="p-4">
<article>
    <div data-aos="fade-up" class="p_a latest-main-box grid place-items-center">
    <h1 class="text-5xl font-bold text_clr2 text-start">Top Doctors</h1>
    <p class="text-lg text_clr1 text-center my-4">At the heart of our platform are highly skilled and compassionate doctors dedicated to delivering exceptional healthcare. Each physician brings expertise across various specialties, ensuring patients receive personalized care tailored to their unique needs. Committed to staying updated with the latest medical advancements, our doctors blend clinical excellence with empathy to foster a trusted patient-doctor relationship. Whether for preventive care, diagnosis, or treatment, they are here to guide you every step of the way, ensuring your well-being is always the top priority.</p>
    <div data-aos="fade-up" class="w-auto justify-between text-center mt-8">
 <!--new-->
 <div data-aos="fade-up" class="inline-block w-80  h-auto m-4 p-2 hover3 shadow-lg shadow-blue-600">
        <div data-aos="fade-up" class="w-auto overflow-hidden h-72 grid place-items-center">
            <img src="{{asset('frontend/image/doctors/img3.png')}}" alt="Blynzo" class="hover1  w-auto h-72 ">
        </div>
        <div data-aos="fade-up" class="w-auto h-18 text-start overflow-hidden ">
            <strong class="text-gray-400 uppercase" >Specialization</strong> 
            <h3 class="text-3xl font-semibold flex place-items-center place-content-start gap-4">Doctors Name
                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></h3>
<h3 class="font-semibold text-xl">Address</h3>
            <p class="text-sm text-start">Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
           <!--review-->
            <div class="flex place-items-center place-content-start gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-half" viewBox="0 0 16 16">
  <path d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z"/>
</svg> 
     </div>
     <hr class="mt-2">
     
     @include('layout2.view-btn',[$id=1])  
     
        </div>
    </div>
    <!--new box-->
    <div data-aos="fade-up" class="inline-block w-80  h-auto m-4 p-2 hover3 shadow-lg shadow-blue-600">
        <div data-aos="fade-up" class="w-auto overflow-hidden h-72 grid place-items-center">
            <img src="{{asset('frontend/image/doctors/img3.png')}}" alt="Blynzo" class="hover1  w-auto h-72 ">
        </div>
        <div data-aos="fade-up" class="w-auto h-18 text-start overflow-hidden ">
            <strong class="text-gray-400 uppercase" >Specialization</strong> 
            <h3 class="text-3xl font-semibold flex place-items-center place-content-start gap-4">Doctors Name
                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></h3>
<h3 class="font-semibold text-xl">Address</h3>
            <p class="text-sm text-start">Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
           <!--review-->
            <div class="flex place-items-center place-content-start gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-half" viewBox="0 0 16 16">
  <path d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z"/>
</svg> 
     </div>
     <hr class="mt-2">
     
            @include('layout2.view-btn',[$id=1])  
        
        </div>
    </div>
    <!--new box-->
    <div data-aos="fade-up" class="inline-block w-80  h-auto m-4 p-2 hover3 shadow-lg shadow-blue-600">
        <div data-aos="fade-up" class="w-auto overflow-hidden h-72 grid place-items-center">
            <img src="{{asset('frontend/image/doctors/img3.png')}}" alt="Blynzo" class="hover1  w-auto h-72 ">
        </div>
        <div data-aos="fade-up" class="w-auto h-18 text-start overflow-hidden ">
            <strong class="text-gray-400 uppercase" >Specialization</strong> 
            <h3 class="text-3xl font-semibold flex place-items-center place-content-start gap-4">Doctors Name
                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></h3>
<h3 class="font-semibold text-xl">Address</h3>
            <p class="text-sm text-start">Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
           <!--review-->
            <div class="flex place-items-center place-content-start gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-half" viewBox="0 0 16 16">
  <path d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z"/>
</svg> 
     </div>
     <hr class="mt-2">
     
            @include('layout2.view-btn',[$id=1])  
        
        </div>
    </div>
    <!--new box-->
    <div data-aos="fade-up" class="inline-block w-80  h-auto m-4 p-2 hover3 shadow-lg shadow-blue-600">
        <div data-aos="fade-up" class="w-auto overflow-hidden h-72 grid place-items-center">
            <img src="{{asset('frontend/image/doctors/img3.png')}}" alt="Blynzo" class="hover1  w-auto h-72 ">
        </div>
        <div data-aos="fade-up" class="w-auto h-18 text-start overflow-hidden ">
            <strong class="text-gray-400 uppercase" >Specialization</strong> 
            <h3 class="text-3xl font-semibold flex place-items-center place-content-start gap-4">Doctors Name
                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></h3>
<h3 class="font-semibold text-xl">Address</h3>
            <p class="text-sm text-start">Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
           <!--review-->
            <div class="flex place-items-center place-content-start gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-half" viewBox="0 0 16 16">
  <path d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z"/>
</svg> 
     </div>
     <hr class="mt-2">
     
            @include('layout2.view-btn',[$id=1])  
        
        </div>
    </div>
    <!--new box-->

    </div>
  
 </div>
 <div class="w-auto flex place-items-center px-12 gap-2 place-content-end">
   <button onclick="re_no(20);" id="re_no1" class="flex place-items-center py-2 px-4 duration active:scale-105 text-white bg-blue-400 border border-black shadow text-lg font-semibold">20</button>
   <button onclick="re_no(30);" id="re_no2" class="flex place-items-center py-2 px-4 duration active:scale-105 text-white bg-blue-400 border border-black shadow text-lg font-semibold">30</button>
   <button onclick="re_no(50);" id="re_no3" class="flex place-items-center py-2 px-4 duration active:scale-105 text-white bg-blue-400 border border-black shadow text-lg font-semibold">50</button>
 </div>
 </article>
 <script>
  let result_no=null;
  let re_no1=document.getElementById('re_no1');
  let re_no2=document.getElementById('re_no2');
  let re_no3=document.getElementById('re_no3');
  function re_no(result_no){
if(20==result_no){
re_no1.style.backgroundColor="black";
re_no2.style.backgroundColor="blue";
re_no3.style.backgroundColor="blue";
}
else if(30==result_no){
re_no1.style.backgroundColor="blue";
re_no2.style.backgroundColor="black";
re_no3.style.backgroundColor="blue";
}
else if(50==result_no){
re_no1.style.backgroundColor="blue";
re_no2.style.backgroundColor="blue";
re_no3.style.backgroundColor="black";
}
  }
 </script>
 <!-- top hospitals -->
 <article>
    <div data-aos="fade-up" class="p_a latest-main-box grid place-items-center">
    <h1 class="text-5xl font-bold text_clr2 text-start">Top Hospitals</h1>
    <p class="text-lg text_clr1 text-center my-4">At our hospital, patient well-being is our top priority. We believe in fostering a healing environment that combines advanced medical solutions with empathy and respect. Whether it’s routine check-ups, emergency care, or specialized treatments, we are committed to making your healthcare journey smooth, comfortable, and efficient. Your health and trust inspire us to serve better every day.</p>
    <div data-aos="fade-up" class="w-auto justify-between text-center mt-8">
 <!--new-->
 <div data-aos="fade-up" class="inline-block w-80  h-auto m-4 p-2 hover3 shadow-lg shadow-blue-600">
        <div data-aos="fade-up" class="w-auto overflow-hidden h-72 grid place-items-center">
            <img src="{{asset('frontend/image/doctors/hospitals.jpg')}}" alt="Blynzo" class="hover1  w-auto h-72 ">
        </div>
        <div data-aos="fade-up" class="w-auto h-18 text-start overflow-hidden ">
            <strong class="text-gray-400 uppercase" >Specialization</strong> 
            <h3 class="text-3xl font-semibold flex place-items-center place-content-start gap-4">Hospitals Name
                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></h3>
<h3 class="font-semibold text-xl">Address</h3>
            <p class="text-sm text-start">Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
           <!--review-->
            <div class="flex place-items-center place-content-start gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-half" viewBox="0 0 16 16">
  <path d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z"/>
</svg> 
     </div>
     <hr class="mt-2">
     
            @include('layout2.view-btn',[$id=1])  
        
        </div>
    </div>
    <!--new box-->
    <div data-aos="fade-up" class="inline-block w-80  h-auto m-4 p-2 hover3 shadow-lg shadow-blue-600">
        <div data-aos="fade-up" class="w-auto overflow-hidden h-72 grid place-items-center">
            <img src="{{asset('frontend/image/doctors/hospitals.jpg')}}" alt="Blynzo" class="hover1  w-auto h-72 ">
        </div>
        <div data-aos="fade-up" class="w-auto h-18 text-start overflow-hidden ">
            <strong class="text-gray-400 uppercase" >Specialization</strong> 
            <h3 class="text-3xl font-semibold flex place-items-center place-content-start gap-4">Hospitals Name
                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></h3>
<h3 class="font-semibold text-xl">Address</h3>
            <p class="text-sm text-start">Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
           <!--review-->
            <div class="flex place-items-center place-content-start gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-half" viewBox="0 0 16 16">
  <path d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z"/>
</svg> 
     </div>
     <hr class="mt-2">
     
            @include('layout2.view-btn',[$id=1])  
        
        </div>
    </div>
    <!--new box-->
    <div data-aos="fade-up" class="inline-block w-80  h-auto m-4 p-2 hover3 shadow-lg shadow-blue-600">
        <div data-aos="fade-up" class="w-auto overflow-hidden h-72 grid place-items-center">
            <img src="{{asset('frontend/image/doctors/hospitals.jpg')}}" alt="Blynzo" class="hover1  w-auto h-72 ">
        </div>
        <div data-aos="fade-up" class="w-auto h-18 text-start overflow-hidden ">
            <strong class="text-gray-400 uppercase" >Specialization</strong> 
            <h3 class="text-3xl font-semibold flex place-items-center place-content-start gap-4">Hospitals Name
                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></h3>
<h3 class="font-semibold text-xl">Address</h3>
            <p class="text-sm text-start">Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
           <!--review-->
            <div class="flex place-items-center place-content-start gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-half" viewBox="0 0 16 16">
  <path d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z"/>
</svg> 
     </div>
     <hr class="mt-2">
     
            @include('layout2.view-btn',[$id=1])  
        
        </div>
    </div>
    <!--new box-->
    <div data-aos="fade-up" class="inline-block w-80  h-auto m-4 p-2 hover3 shadow-lg shadow-blue-600">
        <div data-aos="fade-up" class="w-auto overflow-hidden h-72 grid place-items-center">
            <img src="{{asset('frontend/image/doctors/hospitals.jpg')}}" alt="Blynzo" class="hover1  w-auto h-72 ">
        </div>
        <div data-aos="fade-up" class="w-auto h-18 text-start overflow-hidden ">
            <strong class="text-gray-400 uppercase" >Specialization</strong> 
            <h3 class="text-3xl font-semibold flex place-items-center place-content-start gap-4">Hospitals Name
                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></h3>
<h3 class="font-semibold text-xl">Address</h3>
            <p class="text-sm text-start">Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
           <!--review-->
            <div class="flex place-items-center place-content-start gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-half" viewBox="0 0 16 16">
  <path d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z"/>
</svg> 
     </div>
     <hr class="mt-2">
     
            @include('layout2.view-btn',[$id=1])  
        
        </div>
    </div>
    <!--new box-->

    </div>
  
 </div>
 <div class="w-auto flex place-items-center px-12 gap-2 place-content-end">
   <button onclick="re_noo(20);" id="re_noo1" class="flex place-items-center py-2 px-4 duration active:scale-105 text-white bg-blue-400 border border-black shadow text-lg font-semibold">20</button>
   <button onclick="re_noo(30);" id="re_noo2" class="flex place-items-center py-2 px-4 duration active:scale-105 text-white bg-blue-400 border border-black shadow text-lg font-semibold">30</button>
   <button onclick="re_noo(50);" id="re_noo3" class="flex place-items-center py-2 px-4 duration active:scale-105 text-white bg-blue-400 border border-black shadow text-lg font-semibold">50</button>
 </div>
 </article>
 <script>
  let result_noo=null;
  let re_noo1=document.getElementById('re_noo1');
  let re_noo2=document.getElementById('re_noo2');
  let re_noo3=document.getElementById('re_noo3');
  function re_noo(result_noo){
if(20==result_noo){
re_noo1.style.backgroundColor="black";
re_noo2.style.backgroundColor="blue";
re_noo3.style.backgroundColor="blue";
}
else if(30==result_noo){
re_noo1.style.backgroundColor="blue";
re_noo2.style.backgroundColor="black";
re_noo3.style.backgroundColor="blue";
}
else if(50==result_noo){
re_noo1.style.backgroundColor="blue";
re_noo2.style.backgroundColor="blue";
re_noo3.style.backgroundColor="black";
}
  }
 </script>
  <!-- top clinic -->
  <article>
    <div data-aos="fade-up" class="p_a latest-main-box grid place-items-center">
    <h1 class="text-5xl font-bold text_clr2 text-start">Top Clinics</h1>
    <p class="text-lg text_clr1 text-center my-4">At our hospital, patient well-being is our top priority. We believe in fostering a healing environment that combines advanced medical solutions with empathy and respect. Whether it’s routine check-ups, emergency care, or specialized treatments, we are committed to making your healthcare journey smooth, comfortable, and efficient. Your health and trust inspire us to serve better every day.</p>
    <div data-aos="fade-up" class="w-auto justify-between text-center mt-8">
 <!--new-->
 <div data-aos="fade-up" class="inline-block w-80  h-auto m-4 p-2 hover3 shadow-lg shadow-blue-600">
        <div data-aos="fade-up" class="w-auto overflow-hidden h-72 grid place-items-center">
            <img src="{{asset('frontend/image/doctors/clinic.jpg')}}" alt="Blynzo" class="hover1  w-auto h-72 ">
        </div>
        <div data-aos="fade-up" class="w-auto h-18 text-start overflow-hidden ">
            <strong class="text-gray-400 uppercase" >Specialization</strong> 
            <h3 class="text-3xl font-semibold flex place-items-center place-content-start gap-4">Clinics Name
                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></h3>
<h3 class="font-semibold text-xl">Address</h3>
            <p class="text-sm text-start">Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
           <!--review-->
            <div class="flex place-items-center place-content-start gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-half" viewBox="0 0 16 16">
  <path d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z"/>
</svg> 
     </div>
     <hr class="mt-2">
     
            @include('layout2.view-btn',[$id=1])  
        
        </div>
    </div>
    <!--new box-->
    <div data-aos="fade-up" class="inline-block w-80  h-auto m-4 p-2 hover3 shadow-lg shadow-blue-600">
        <div data-aos="fade-up" class="w-auto overflow-hidden h-72 grid place-items-center">
            <img src="{{asset('frontend/image/doctors/clinic.jpg')}}" alt="Blynzo" class="hover1  w-auto h-72 ">
        </div>
        <div data-aos="fade-up" class="w-auto h-18 text-start overflow-hidden ">
            <strong class="text-gray-400 uppercase" >Specialization</strong> 
            <h3 class="text-3xl font-semibold flex place-items-center place-content-start gap-4">Clinics Name
                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></h3>
<h3 class="font-semibold text-xl">Address</h3>
            <p class="text-sm text-start">Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
           <!--review-->
            <div class="flex place-items-center place-content-start gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-half" viewBox="0 0 16 16">
  <path d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z"/>
</svg> 
     </div>
     <hr class="mt-2">
     
            @include('layout2.view-btn',[$id=1])  
        
        </div>
    </div>
    <!--new box-->
    <div data-aos="fade-up" class="inline-block w-80  h-auto m-4 p-2 hover3 shadow-lg shadow-blue-600">
        <div data-aos="fade-up" class="w-auto overflow-hidden h-72 grid place-items-center">
            <img src="{{asset('frontend/image/doctors/clinic.jpg')}}" alt="Blynzo" class="hover1  w-auto h-72 ">
        </div>
        <div data-aos="fade-up" class="w-auto h-18 text-start overflow-hidden ">
            <strong class="text-gray-400 uppercase" >Specialization</strong> 
            <h3 class="text-3xl font-semibold flex place-items-center place-content-start gap-4">Clinics Name
                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></h3>
<h3 class="font-semibold text-xl">Address</h3>
            <p class="text-sm text-start">Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
           <!--review-->
            <div class="flex place-items-center place-content-start gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-half" viewBox="0 0 16 16">
  <path d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z"/>
</svg> 
     </div>
     <hr class="mt-2">
     
            @include('layout2.view-btn',[$id=1])  
        
        </div>
    </div>
    <!--new box-->
    <div data-aos="fade-up" class="inline-block w-80  h-auto m-4 p-2 hover3 shadow-lg shadow-blue-600">
        <div data-aos="fade-up" class="w-auto overflow-hidden h-72 grid place-items-center">
            <img src="{{asset('frontend/image/doctors/clinic.jpg')}}" alt="Blynzo" class="hover1  w-auto h-72 ">
        </div>
        <div data-aos="fade-up" class="w-auto h-18 text-start overflow-hidden ">
            <strong class="text-gray-400 uppercase" >Specialization</strong> 
            <h3 class="text-3xl font-semibold flex place-items-center place-content-start gap-4">Clinics Name
                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></h3>
<h3 class="font-semibold text-xl">Address</h3>
            <p class="text-sm text-start">Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
           <!--review-->
            <div class="flex place-items-center place-content-start gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFC000" class="bi bi-star-half" viewBox="0 0 16 16">
  <path d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z"/>
</svg> 
     </div>
     <hr class="mt-2">
     
            @include('layout2.view-btn',[$id=1])  
        
        </div>
    </div>
    <!--new box-->

    </div>
  
 </div>
 <div class="w-auto flex place-items-center px-12 gap-2 place-content-end">
   <button onclick="re_nooo(20);" id="re_nooo1" class="flex place-items-center py-2 px-4 duration active:scale-105 text-white bg-blue-400 border border-black shadow text-lg font-semibold">20</button>
   <button onclick="re_nooo(30);" id="re_nooo2" class="flex place-items-center py-2 px-4 duration active:scale-105 text-white bg-blue-400 border border-black shadow text-lg font-semibold">30</button>
   <button onclick="re_nooo(50);" id="re_nooo3" class="flex place-items-center py-2 px-4 duration active:scale-105 text-white bg-blue-400 border border-black shadow text-lg font-semibold">50</button>
 </div>
 </article>
 <script>
  let result_nooo=null;
  let re_nooo1=document.getElementById('re_nooo1');
  let re_nooo2=document.getElementById('re_nooo2');
  let re_nooo3=document.getElementById('re_nooo3');
  function re_nooo(result_nooo){
if(20==result_nooo){
re_nooo1.style.backgroundColor="black";
re_nooo2.style.backgroundColor="blue";
re_nooo3.style.backgroundColor="blue";
}
else if(30==result_nooo){
re_nooo1.style.backgroundColor="blue";
re_nooo2.style.backgroundColor="black";
re_nooo3.style.backgroundColor="blue";
}
else if(50==result_nooo){
re_nooo1.style.backgroundColor="blue";
re_nooo2.style.backgroundColor="blue";
re_nooo3.style.backgroundColor="black";
}
  }
 </script>
</main>
@endSection