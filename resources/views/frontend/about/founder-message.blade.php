@extends('layout2.index',['title'=>'founder message'])
@section('main')
@include('layout2.page-name',[$pagename='Founder-Message'])
<main class="p-4">
    <div class="box_flex2 p_a">
        <div class="box2 py-6  grid place-items-center w-2/3">
            <div class="" style="width: 100%;">
            <h1 class="text-5xl text-bold text-start my-4 text_clr2 text-start">Our founder Message</h1>
            </div>
            <p class="text-start text-lg text-semibold my-2">Our founder, <strong> Miss Shambhavi </strong>, a young dynamic and visionary individual, is a technical graduate (B.Tech in Computer Science and Engineering) with a passion for innovation. 
           
             In her early sixteen, she is driven by the desire to create a startup aimed at simplifying the process of booking appointments with healthcare professionals, 
            
              including doctors, pathologists, and many more. Her mission is to address the challenges faced by individuals seeking timely and hassle-free access to healthcare services.</p>

</p>
            </div>
        <div class="box2 py-6 w-1/3  grid place-items-center" >
            <img src="{{asset('frontend/image/about/founder.png')}}" alt="Blynzo founder image" class="w-96 w-cover">
        </div>
    </div>

   
</main>

@endSection