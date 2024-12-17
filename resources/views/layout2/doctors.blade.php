
<!--main member-->
 <div data-aos="fade-up" class="p_a latest-main-box grid place-items-center">
<h1 class="text-4xl font-semibold text-center text_clr1 drop-shadow my-6">Our <span class="text_clr2"> Top Doctors</span> </h1>
 
    <div data-aos="fade-up" class="w-auto justify-between text-center mt-8">
 <!--new-->
 @if(count($doctors)>0)
 <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 place-items-center">
    @foreach ($doctors as $doctor)
    <div data-aos="fade-up" class="w-full max-w-sm mx-auto h-auto m-4 p-2 shadow-lg shadow-blue-600 rounded-lg">
        <!-- Doctor Image Section -->
        <div data-aos="fade-up" class="w-full h-auto grid place-items-center overflow-hidden rounded-lg">
            <img src="{{ url($doctor->fullImage) }}" alt="{{ $doctor->name }}" class="w-14 h-14 object-cover hover:scale-105 transition-transform duration-300">
        </div>
        <!-- Doctor Details Section -->
        <div data-aos="fade-up" class="mt-4">
            <strong class="text-gray-500 uppercase text-sm">{{ $doctor['expertise']['name'] }}</strong>
            <h3 class="text-lg font-semibold flex items-center gap-2 mt-1">
                {{ $doctor->name }}
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg>
            </h3>
            <p class="text-sm text-gray-500 mt-1">{{ $doctor['rate'] }} ({{ $doctor['review'] }} {{ __('reviews') }})</p>
            <hr class="mt-3">
            <!-- Buttons Section -->
            <div class="flex justify-between mt-2 gap-1">
                <a href="{{ url('doctor-profile/'.$doctor['id'].'/'.Str::slug($doctor['name'])) }}">
                    <button class="py-1 px-2 rounded border border-transparent bg_clr2 text-white font-semibold hover:bg-blue-700 transition-colors duration-300 text-sm">View Profile</button>
                </a>
                <a href="{{ url('booking/'.$doctor->id.'/'.Str::slug($doctor->name)) }}">
                    <button class="py-1 px-2 rounded border border-transparent bg_clr1 text-white font-semibold hover:bg-green-700 transition-colors duration-300 text-sm">Book Now</button>
                </a>
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
    <div class="grid place-items-center py-8">
       <a href="{{url('show-doctors')}}"> <button class="rounded py-2 px-6 text-xl font-semibold bg_clr2 text_clr3 shadow shadow-black duration:200 active:scale-105">Show All</button></a>
    </div>
 </div>
 