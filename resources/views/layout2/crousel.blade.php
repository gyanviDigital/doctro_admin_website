@php 
    $banner[1]='frontend/image/crousel/banner1.jpg';
    $banner[2]='frontend/image/crousel/banner2.jpg';
    $banner[3]='frontend/image/crousel/img1.png';
    $banner[4]='frontend/image/crousel/img2.png';
   
@endphp
<div class="crousel_main_box">
            <div class="crousel_multi_img" >
                <div class="crousel_img_all1 active bg-cover bg-center flex gap-10 place-content-center place-items-center" style="background-image: url({{$banner[1]}});" >
                <img class="banner-back" src="{{asset($banner[3])}}"  alt="Blynzo Banner" />
                <div class="w-cover h-auto " >
               <span class=" text-5xl text-red-500 font-semibold"> Emergency?</span> <br>
<span class=" text-6xl font-bold text-blue-500">Find Nearest</span> <br>
<span class=" text-5xl text-red-500 font-semibold"> Medical Facility</span> <br>
<div class="flex gap-10 mt-4 ">
   <a href="{{url('/')}}"> <button class="py-2 px-4 border border-white rounded font-semibold text-lg bg-blue-300">View Hospitals</button></a>
    <a href="{{url('show-doctors')}}"> <button class="py-2 px-4 border border-white rounded font-semibold text-lg bg-blue-100">View Doctors</button></a>
    </div>
                </div>
                </div>
              
                <div class="crousel_img_all1  bg-cover bg-center flex gap-10 place-content-center place-items-center" style="background-image: url({{$banner[2]}});" >
                <img class="banner-back" src="{{asset($banner[4])}}"  alt="Blynzo Banner" />
                <div class="w-cover h-auto " >
               <span class=" text-5xl text-red-500 font-semibold"> Emergency?</span> <br>
<span class=" text-6xl font-bold text-blue-500">Find Nearest</span> <br>
<span class=" text-5xl text-red-500 font-semibold"> Medical Facility</span> <br>
<div class="flex gap-10 mt-4 ">
   <a href="{{url('/')}}"> <button class="py-2 px-4 border border-white rounded font-semibold text-lg bg-blue-300">View Hospitals</button></a>
    <a href="{{url('show-doctors')}}"> <button class="py-2 px-4 border border-white rounded font-semibold text-lg bg-blue-100">View Doctors</button></a>
    </div>
  
                </div>
                </div>
              
                   </div>
           </div>
           
<script type="text/javascript" src="{{asset('frontend/javascript/crousel.js')}}" ></script>


<div  class="overflow-hidden xl:w-3/4 mx-auto relative 2xl:-mt-[180px] 1xl:-mt-[160px] !xl:-mt-[205px] xlg:-mt-[110px] lg:-mt-[130px] md:-mt-[75px] xxmd:-mt-[95px] xmd:-mt-[85px] sm:-mt-[65px] xsm:mt-10 xxsm:mt-10 mb-20" style="margin-top: 20px;" >
        <div class="grid xxsm:grid-cols-1 xsm:grid-cols-1 msm:grid-cols-1 sm:grid-cols-3 lg:grid-cols-3 2xl:h-96 1xl:h-full xlg:h-full lg:h-72 xxmd:h-[250px] xxmd:w-full md:h-full md:w-full sm:h-full sm:w-full msm:h-full msm:w-full !xsm:w-full !xsm:h-full xxsm:w-full xxsm:h-full " style="margin-top: 0px;  height:auto;  padding-left:0px">
            @foreach ($banners as $banner)
                <div class="mx-auto  pt-20  pb-20 h-full w-full 1xl:h-96 1xl:w-full xl:h-full xxsm:h-96 xxsm:w-80 xsm:h-80 xsm:w-80 msm:h-80 msm:w-full sm:h-full sm:w-full md:h-full md:w-full align-items-center {{ $loop->iteration % 2 == 0 ? 'bg-primary text-white' : 'bg-white-50 text-black' }} shadow-2xl  " >
                    <img class="lg:h-16 lg:w-16 xxmd:h-12 xxmd:w-12 md:h-10 md:w-10 sm:h-10 sm:w-10 xsm:h-14 xsm:w-14 xxsm:h-10 xxsm:w-10 mx-auto
                bg-cover object-cover mb-5" src="{{asset($banner->fullImage)}}" alt="Blynzo banner" />
                    <h4 class="{{ $loop->iteration % 2 == 0 ? 'text-white' : 'text-black' }} text-center md:text-xl font-medium 1xl:mt-2 lg:mt-1 md:mt-2 xsm:mt-2 leading-8 font-fira-sans sm:text-xs xsm:text-lg xxsm:text-xs mb-5">
                        {{$banner->name}}
                    </h4>
                    <p class="font-fira-sans font-normal text-sm text-center mx-5" style="color: black;">{{ $banner->description }}</p>
                </div>
              @endforeach
        </div>
    </div>


   