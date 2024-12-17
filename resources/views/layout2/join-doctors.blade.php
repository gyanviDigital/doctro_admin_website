


<div class="mt-6">
<h1 class="text-4xl font-semibold text-center text_clr1 drop-shadow ">Top Doctors of Specialities </span></h1>
 <div class="wraps2 owl-carousel ">

 @if(count($treatments) > 0)
        @foreach($treatments as $treatment)
 <div class="card2 card2-one h-auto  overflow-hidden " >
       <div class="grid place-items-center h-auto w-auto overflow-hidden ">
         <a href="{{url('/')}}"><img src="{{$treatment->fullImage}}" class="w-20 h-20" alt="{{$treatment->fullImage}}"></a>
         <p class="text-white">{{$treatment->name}}</p>
         <form action="{{ url('show-doctors') }}" method="post" class="">
                            @csrf
                            <input type="hidden" name="treatment_id" value="{{ $treatment->id }}">
                            <button type="submit" class="px-2 py-1  bg-blue-800 rounded shadow shadow-blue-400 border-none text-white pointer " >{{__('Consult Now!')}}
                               
                            </button>
                        </form>
       </div>
    </div>
    @endforeach
                @else
                <div class="flex justify-center mt-44 font-fira-sans font-normal text-base text-gray">{{__('No Data Available')}}</div>
                @endif

  </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">


<script>
    $('.wraps2').owlCarousel({
    margin:10, 
    autoplay:true,
    autoplayTimeout:2000, 
    loop:true,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
            nav:false,
        },
        600:{
            items:2,
            nav:false,
        },
    1000:{
            items:4,
            nav:false,
        },
    }
});

</script>


