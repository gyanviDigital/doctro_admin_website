@php
$search_img='frontend/image/search2.png';
@endphp
<div class=" gap-10 ">
    <div class="h-auto bg-white rounded p-3 grid place-items-center shadow-lg shadow-gray-300 box2 ">
        <div class="">
        <h3 class="font-semibold text-2xl text-blue-900">Find the Best Doctors, Hospitals, and Clinics Near You</h3>
        <form action="{{url('/search')}}" method="post" class="text-center p-3">
            @csrf
<input type="text" name="name" class="inline-block py-2 px-4 rounded m-2 outline-none border border-blue-800 w-80 text-gray-400  duration-100  hover:scale-105" placeholder="Search your Doctors,Clinic and Hospitals etc.">
<input name="location" placeholder="Location" class="inline-block py-2 px-4 rounded m-2 outline-none border border-blue-800 text-gray-400  duration-100  hover:scale-105"/>
<button type="submit" class="inline-block bg-blue-900 py-2 px-4 outline-none border border-blue-900 rounded text-white font-semibold text-xl mt-4  duration-100  hover:scale-105"> 
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg>
</button>
        </form>
        </div>
    </div>

     <div class="flex justify-around bg-blue-950 rounded px-6 py-2 grid lg:flex lg:place-items-center  " >
        <img src="{{$search_img}}" alt="{{$search_img}}" class=" w-auto ">
        <div class="grid gap-2 place-items-center self-center w-auto mt-6 lg:mt-0 ">
            <h3 class="text-xl text-white lg:text-5xl">Are You A Doctor ?</h3>
            <h2 class="text-4xl font-bold text-shadow text-white lg:mt-4">Join Our Team</h2>
            <a href="{{url('doctor/doctor_login')}}" class="lg:mt-4">  <button class="py-2 px-6 bg-green-400 rounded shadow text-white font-semibold shadow-green-300  duration-100  hover:scale-105">Login As a Doctor</button>     </a>
            <a href="{{url('doctor/doctor_signup')}}" class="lg:mt-4">  <button class="py-2 px-6 bg-blue-400 rounded shadow text-white font-semibold shadow-green-300  duration-100  hover:scale-105">Join As a Doctor</button>     </a>
            </div>
    </div>

</div>


