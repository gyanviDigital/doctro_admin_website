@extends('layout2.index',['title'=>'Hospital'])

@section('main')


<div class=" bg-cover bg-center relative overflow-hidden"  style="display:grid; padding:150px 10px; ">
    <img src="{{asset($page_name_img)}}" alt="" class=" absolute w-full h-96 md:h-auto" style="z-index: -3;">
<div class="" style="margin-left: 10vh;">    
<h1 class="text_clr1 text-start text-5xl font-semibold text-white drop-shadow-lg drop-shadow-black " >Hospitals</h1>
<a href="{{url('/')}}" class=" border-b-2 border-blue pb-1 text-3xl text_clr2 font-bold" >HOME</a>
</div>
</div>
{{-- Your Home For Health --}}
    <div class="pt-14 border-b border-white-light mb-10 pb-10">
        <h1 class="font-fira-sans font-semibold text-5xl text-center leading-10">{{ __('Your Home For') }} <span
                class="text-primary">{{ __('Health') }}</span></h1>
        <div class="p-5">
            <p class="font-fira-sans font-normal text-lg text-center leading-5 text-gray">
                {{ __('Find Better. Appoint Better') }}</p>
        </div>
        {{-- Search bar --}}
        <form action="{{ url('show-doctors') }}" id="searchForm" method="post">
            @csrf
            <div class="flex justify-center 2xl:flex-row xl:flex-row xlg:flex-row lg:flex-row xmd:flex-row md:flex-row sm:flex-row msm:flex-col
                xsm:flex-col xxsm:flex-col space-x-5 xmd:space-y-0 sm:space-y-0 sm:space-x-5 msm:space-x-0 xsm:space-x-0 xxsm:space-x-0 msm:p-5 msm:space-y-2 xsm:space-y-2 xsm:p-5 xxsm:space-y-2 xxsm:p-2">
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <input type="search" name="search_doctor" class="block p-2 pl-10 text-sm text-black-700 bg-white-50 border border-white-light 2xl:w-96 xmd:w-72 !sm:w-32 msm:w-40 h-12" placeholder="{{ __('Search Doctor...') }}">
                </div>
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <input type="hidden" name="from" value="js">
                    <input type="search" onFocus="geolocate()" id="autocomplete"
                        class="block p-2 pl-10 text-sm text-black-700 bg-white-50 border border-white-light 2xl:w-96 xmd:w-72 !sm:w-32 msm:w-40 h-12"
                        placeholder="{{ __('Set your location') }}">
                    <input type="hidden" name="doc_lat">
                    <input type="hidden" name="doc_lang">
                </div>
                <button type="button" onclick="searchDoctor()" class="text-white bg-primary text-center px-6 py-2 text-base font-normal leading-5 font-fira-sans sm:w-32 msm:w-32 xsm:w-32 xxsm:w-32 h-12"><i
                        class="fa-solid fa-magnifying-glass"></i> {{ __('Search') }}</button>
            </div>
        </form>
    </div>

    
<main class="mt-12">
   
<div class="grid place-items-center mt-6">
    <div class="text-center">
        @foreach($hospitalData as $arr)
        <div class="w-72 h-80 m-4 inline-block rounded shadow shadow-black">
            <div class="w-full h-60 overflow-hidden">
            <img src="{{asset('storage/'.$arr->image)}}" alt="" class="w-full h-full">
            </div>
            <h2 class="text-2xl text-green-700 place-self-center">{{$arr->name}}</h2>
 <a href="{{url('hospital-doctors',$arr->id)}}" class="">
    <button class="text-sm text-white font-semibold px-4 py-1 bg-blue-500 text-center mt-2" >View</button>
 </a>
        </div>
        @endforeach
    </div>
</div>
</main>
@endsection