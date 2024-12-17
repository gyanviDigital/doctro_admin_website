
 <!-- crousel-->
<div>
<h1 class="text-4xl font-semibold text-center text_clr1 drop-shadow my-6">Our <span class="text_clr2"> Top Hospital</span> </h1>
 <div class="wraps owl-carousel"> 
   
<!--new card -->

@foreach($hospitalData as $arr)
<div class="card card-one h-90 overflow-hidden">
       <div class="grid place-items-center h-72 w-auto overflow-hidden ">
         <img src="{{asset( 'storage/'.$arr->image)}}" class="" alt="{{$arr->image}}">
       </div>
       <div class="w-auto">
        <h1 class="text-xl font-bold text-center text-black">{{$arr->name}}</h1>
        <a href="{{url('hospital-doctors',$arr->id)}}">  <button class="text-lg w-full grid place-items-center text-start font-semibold text-lg px-8 py-2 bg_clr1">View Profile</button>  </a>
       </div>
    </div>
    @endforeach
<!--new card -->
  </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">


<script>
    $('.wraps').owlCarousel({
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