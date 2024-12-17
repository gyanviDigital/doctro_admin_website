<div class="bg_clr1 sticky top-0 " style="z-index: 999 !important; ">
        <nav class="nav1 ">
            <div class="nav_box2">
             <a href="{{url('')}}" target="_blank" >
              <img src="{{asset($web_logo)}}" class="h-20 mr-3 sm:h-20" alt="{{$web_logo}}" />
                
                </a>

                <div class="menubar1">
                    <a class="nav_a" href="{{url('/')}}">
                        <div class="home_btn text_clr3 font-bold">HOME</div>
                    </a>
                    <div class="inline-block "> 
                    <div class="font-bold home_btn" onmouseover="about_down()" onmouseleave="about_drop()" >ABOUT </div>
                    <div class="bg_clr3 drop-down absolute py-8 px-10 w-60 shadow-lg shdow-black hidden" id="about_box" onmouseover="about_down()" onmouseleave="about_drop()"  style="z-index:9999 !important;" >
                        <a href="{{url('/about-us')}}" class="text-black nav_a " style="text-decoration:none;">About us</a> <br><br>
                         <a href="{{url('/mission-vission')}}" class="text-black nav_a " style="text-decoration:none;">Mission-vission</a> <br><br>
                        <a href="{{url('/founder-message')}}" class="text-black nav_a " style="text-decoration:none;">Founder-message</a> <br> 
                    </div>
                </div>
                
                   
                <div class="inline-block "> 
                    <div class="font-bold home_btn" onmouseover="we_work_down()" onmouseleave="we_work_drop()" >SERVICES</div>
                    <div class="bg_clr3 drop-down absolute py-8 px-10  w-60 shadow-lg shdow-black hidden" id="we_work_box" onmouseover="we_work_down()" onmouseleave="we_work_drop()"  style="z-index:9999 !important;" >
                        <a href="{{url('show-doctors')}}" class="text-black nav_a " style="text-decoration:none;">Doctors</a> <br> <br>
                        <a href="{{url('all-hospital')}}" class="text-black nav_a " style="text-decoration:none;">Hospitals</a> <br> <br>
                        <a href="{{url('all-pharmacies')}}" class="text-black nav_a " style="text-decoration:none;">Pharmacy</a> <br> <br>
                        <a href="{{url('all-labs')}}" class="text-black nav_a " style="text-decoration:none;">Lab Tests</a> <br> 
                            </div>
                </div>
                <a class="nav_a" href="{{url('faqs')}}">
                        <div class="home_btn text_clr3 font-bold">FAQs</div>
                    </a>
            
                    <!-- <div class="inline-block "> 
                    <div class="font-bold home_btn" onmouseover="impo_down()" onmouseleave="impo_drop()" >IMPORTANT LINKS</div>
                    <div class="bg_clr3 drop-down absolute py-8 px-10 shadow-lg shdow-black hidden" id="impo_box" onmouseover="impo_down()" onmouseleave="impo_drop()"  style="z-index:9999 !important;" >
                        <a href="{{url('make-donation')}}" class="text-black nav_a " style="text-decoration:none;">make-donation</a> <br> <br>
                        <a href="{{url('career')}}" class="text-black nav_a " style="text-decoration:none;">career</a> <br> <br>
                        <a href="{{url('candidate-register')}}" class="text-black nav_a " style="text-decoration:none;">candidate-register</a> <br> <br>
                        <a href="{{url('employee-register')}}" class="text-black nav_a " style="text-decoration:none;">employee-register</a> <br> <br>
                        <a href="{{url('notification')}}" class="text-black nav_a " style="text-decoration:none;">notification</a> <br>
                    </div>
                </div> -->
                      <a class="nav_a" href="{{url('/contact-us')}}">
                       <div class="home_btn text_clr3 font-bold">CONTACT</div>
                    </a>
                    <a class="nav_a" href="{{url('career')}}">
                       <div class="home_btn text_clr3 font-bold uppercase">Career</div>
                    </a>
                    
                   
                    <a class=" ml-8 duration-100 hover:scale-105  " href="{{url('patient-login')}}" style="text-decoration: none;">
                       <div class="home_btn text_clr3 font-bold p-1 bg-green-600 text-white rounded-lg shadow-white shadow active:bg-green-800">LOGIN/REGISTER</div>
                    </a>
                
                </div>
            </div>
            <div class="nav_box2">
             
              <!-- <form action="{{url('search')}}" method="post" class="flex gap-2">
                @csrf
                        <input placeholder="search Doctors" type="serch" class="button1 w-auto  font-bold pt-2 pb-2 pl-4 pr-4 rounded border-white border-2 bg-transparent hover:rounded-xl duration-1000 " />
                    <button type="submit" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg>
                    </button>  
                    </form> -->
                    <!-- <a class="nav_a" href="#">
                        <div class="font-bold"></div>
                    </a> -->
           

                <div class="all_menu_btn" >
   
                    <svg id="all_menu_btn" xmlns="http://www.w3.org/2000/svg"  fill="white" class="bi bi-list" style="width: 40px !important; height: 40px !important;" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
</svg>

<svg id="all_menu_close" xmlns="http://www.w3.org/2000/svg" fill="white" class="bi bi-x-lg hidden" style="width: 32px !important; height: 32px !important;" viewBox="0 0 16 16">
  <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
</svg>
                </div>
            </div>
        </nav>
        <!--start small screen code-->

        <div class="all_menu" hidden id="all_menu_height">
            <div class="menubar2">
                <a class="nav_a" href="{{url('/')}}" target="_blank">
                        <div class="home_btn text_clr4 font-bold">HOME</div>
                    </a>
                    <div class=""> 
                    <div class="flex justify-between ">
                   <div class="font-bold home_btn text-black">ABOUT US</div>
                   <strong onclick="about_down2()" class="text_clr4 cursor-pointer" id="about_p">+</strong>
                   <strong onclick="about_drop2()" class="text_clr4 cursor-pointer hidden" id="about_m">-</strong>
                   </div>
                    <div class="bg_clr3 drop-down relative py-8 px-10 shadow-lg shdow-black hidden" id="about_box2" onmouseover="about_down2()" onmouseleave="about_drop2()"  style="z-index:9999 !important;" >
                        <a href="{{url('/about-us')}}" class="text-black nav_a " style="text-decoration:none;">About us</a> <br><br>
                         <a href="{{url('/mission-vission')}}" class="text-black nav_a " style="text-decoration:none;">Mission-vission</a> <br><br>
                        <!-- <a href="{{url('/founder-message')}}" class="text-black nav_a " style="text-decoration:none;">Foundation-member</a> <br><br>
                        <a href="{{url('/foundation-achivement')}}" class="text-black nav_a " style="text-decoration:none;">Foundation-achivement</a> <br><br> -->
                        <a href="{{url('/founder-message')}}" class="text-black nav_a " style="text-decoration:none;">Founder-message</a> <br> 
                    </div>
                </div>
            
                       <div class=""> 
                <div class="flex justify-between ">
                   <div class="font-bold home_btn text-black">SERVICES</div>
                   <strong onclick="we_work_down2()" class="text_clr4 cursor-pointer" id="we_work_p">+</strong>
                   <strong onclick="we_work_drop2()" class="text_clr4 cursor-pointer hidden" id="we_work_m">-</strong>
                   </div>

                       <div class="bg_clr3 drop-down relative py-8 px-10 shadow-lg shdow-black hidden" id="we_work_box2"   style="z-index:9999 !important;" >
                         <a href="{{url('show-doctors')}}" class="text-black nav_a " style="text-decoration:none;">Doctor</a> <br>
                         <a href="{{url('all-hospital')}}" class="text-black nav_a " style="text-decoration:none;">Hospital</a>  <br>
                        <a href="{{url('all-pharmacies')}}" class="text-black nav_a " style="text-decoration:none;">Pharmacy</a><br>
                        <a href="{{url('all-labs')}}" class="text-black nav_a " style="text-decoration:none;">Lab Tests</a> <br>
                        </div>
                </div>
                     <a class="nav_a" href="{{url('/contact-us')}}">
                        <div class="home_btn text_clr4 font-bold">CONTACT US</div>
                    </a>
                    <a class="nav_a" href="{{url('/career')}}">
                        <div class="home_btn text_clr4 font-bold">Career</div>
                    </a>
               
            </div>
        </div>
    </div>
 <div class="absolute z-40 w-full">
 <div class="flex items-center md:order-2 place-self-end">
                @php
                if (Auth::check()){
                if (auth()->user()->language) {
                $lang_name = Auth::user()->language;
                $lang_image = App\Models\Language::where('name', $lang_name)->first()->image;
                }
                else{
                $lang_name = 'English';
                $lang_image = "English.png";
                }
                }
                else
                {
                $icon = \App\Models\Language::where('name',session('locale'))->first();
                if($icon)
                {
                $lang_name = session('locale');
                $lang_image = $icon->image;
                }
                else
                {
                $lang_name = 'English';
                $lang_image = "English.png";
                }
                }
                $languages = App\Models\Language::where('status',1)->get();
                @endphp
                <button type="button" id="languagesBtn" data-dropdown-toggle="language-dropdown-menu" class="inline-flex items-center justify-center px-4 py-2 text-sm text-gray-500 rounded-lg cursor-pointer">
                    <img src="{{asset('/images/upload/'.$lang_image)}}" class="w-5 h-5 mr-2 rounded-full" alt="{{'k'}}">
                    {{ $lang_name }}
                </button>

                <div id="allLanguages" class="z-50 hidden absolute mt-52 my-4 text-base list-none divide-y divide-gray-100 rounded-lg shadow bg-white" id="language-dropdown-menu">
                    <ul class="py-2" role="none">
                        @foreach ($languages as $language)
                        <li>
                            <a href="{{ url('select_language',$language->id) }}" class="block px-4 py-2 text-sm text-black-700" role="menuitem">
                                <div class="inline-flex items-center">
                                    <img alt="Image placeholder" src=" {{asset('images/upload/'.$language->image)}}" class="h-3.5 w-3.5 rounded-full mr-2">
                                    {{ $language->name }}
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="flex items-center relative">
                    <!-- <div class="my-auto cart">
                        <a class="text-gray-500 hover:text-gray-700 focus:text-gray-700 mr-4 flex relative" href="{{ url('view-cart') }}">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 20C5.45 20 4.97933 19.8043 4.588 19.413C4.196 19.021 4 18.55 4 18C4 17.45 4.196 16.979 4.588 16.587C4.97933 16.1957 5.45 16 6 16C6.55 16 7.02067 16.1957 7.412 16.587C7.804 16.979 8 17.45 8 18C8 18.55 7.804 19.021 7.412 19.413C7.02067 19.8043 6.55 20 6 20ZM16 20C15.45 20 14.9793 19.8043 14.588 19.413C14.196 19.021 14 18.55 14 18C14 17.45 14.196 16.979 14.588 16.587C14.9793 16.1957 15.45 16 16 16C16.55 16 17.021 16.1957 17.413 16.587C17.8043 16.979 18 17.45 18 18C18 18.55 17.8043 19.021 17.413 19.413C17.021 19.8043 16.55 20 16 20ZM4.2 2H18.95C19.3333 2 19.625 2.17067 19.825 2.512C20.025 2.854 20.0333 3.2 19.85 3.55L16.3 9.95C16.1167 10.2833 15.8707 10.5417 15.562 10.725C15.254 10.9083 14.9167 11 14.55 11H7.1L6 13H18V15H6C5.25 15 4.68333 14.6707 4.3 14.012C3.91667 13.354 3.9 12.7 4.25 12.05L5.6 9.6L2 2H0V0H3.25L4.2 2Z" fill="#000" />
                            </svg>
                            <p class="absolute flex items-center justify-center tot_cart">{{Session::has('cart') ? count(Session::get('cart')) : 0 }}</p>
                        </a>
                    </div> -->

                    @if (auth()->check())
                    <button id="profileBtn" onclick="profileFun()" data-dropdown-toggle="dropdownAvatarName" class="flex items-center text-sm font-medium text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-blue-500 md:mr-0 dark:text-white" type="button">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 mr-2 rounded-full" src="{{ url('images/upload/'.auth()->user()->image) }}" alt="user photo">
                        <div class="text-gray-500">{{ auth()->user()->name }}</div>
                        <svg class="w-4 h-4 mx-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <div id="allprofile" class="bg-white z-10 hidden absolute mt-32 right-0 divide-y divide-gray-100 rounded-lg shadow w-44  dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                            <li>
                                <a href="{{ url('user_profile') }}" class="block px-4 py-2 font-fira-sans">{{ __('Dashboard') }}</a>
                            </li>
                        </ul>
                        <div class="py-2">
                            <a href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-sm font-fira-sans">{{ __('Sign out') }}</a>
                        </div>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    @else
                    <div class="mt-auto mb-auto ml-3 xxsm:ml-0">
                        <a href="{{url('/patient-login')}}" class="rounded-none bg-primary tracking-wide px-4 py-2 text-black font-fira-sans font-normal text-sm">{{__('Sign In')}}</a>
                    </div>
                    @endif
                </div>
                <!-- <button data-collapse-toggle="mobile-menu-language-select" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden xxsm:block hover:bg-gray-100" aria-controls="mobile-menu-language-select" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" aria-hidden="true" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </button> -->
            </div>

 </div>
<script>
    let languagesBtn=document.getElementById('languagesBtn');
    let allLanguages=document.getElementById('allLanguages');
    languagesBtn.addEventListener('click',()=>{
        allLanguages.classList.toggle('hidden');

    })

    let profileBtn=document.getElementById('profileBtn');
    let allprofile=document.getElementById('allprofile');
 function profileFun (){
        allprofile.classList.toggle('hidden');

    }
</script>


 <script>
         var all_menu_height = document.getElementById("all_menu_height");
       let all_menu_btn = document.getElementById("all_menu_btn");
       let all_menu_close=document.getElementById('all_menu_close');
       let all_menu_box = document.querySelector(".all_menu");
       all_menu_btn.addEventListener("click", () => {
           /*fow open menu */
        //    if (all_menu_box.hidden) {
               all_menu_box.hidden = false;
               all_menu_height.style.height = "auto";
               all_menu_close.style.display="block";
               all_menu_btn.style.display="none";
        // } else {
        //        all_menu_box.hidden = true;
        //    }
       });
       all_menu_close.addEventListener("click",()=>{
        all_menu_box.hidden = true;
               all_menu_close.style.display="none";
               all_menu_btn.style.display="block";
           
       });

       /*window screen size*/

       window.addEventListener('resize', function () {
           var window_size = window.innerWidth;
           if (window_size >= 900) {
               all_menu_box.hidden = true;
           }
       }, true);
       
       
       
       let select_box= document.getElementById("select-box");
       function select_btn(){
           select_box.style.display="block";
        }
        function remove_select(){
            select_box.style.display="none";
        }
       //open link select elements
       function openLink() {
            var select = document.getElementById("links");
            var selectedValue = select.value;
            if (selectedValue) {
                window.location.href = selectedValue;
            }
        }
        
        // function disableRightClick(event) {
            //     event.preventDefault(); 
            //     console.log("Right-click is disabled.");
            // }        
            // window.addEventListener('DOMContentLoaded', (event) => {
                //     document.addEventListener('contextmenu', disableRightClick);
                // });
                
                /*dropdown navebar hover*/

              
                /*about*/
                let about_box=document.getElementById('about_box');
                function about_down() {
                    about_box.style.transitionDelay="1s";
                    about_box.style.display='block';
                }
                function about_drop(){
                    about_box.style.display='none';
                }
       
  /*event*/
  let event_box=document.getElementById('event_box');
                function event_down() {
                     event_box.style.transitionDelay="1s";
                    event_box.style.display='block';
                }
                function event_drop(){
                    event_box.style.display='none';
                }
  
  /*we_work*/
                let we_work_box=document.getElementById('we_work_box');
                function we_work_down() {
                    we_work_box.style.transitionDelay="1s";
                    we_work_box.style.display='block';
                }
                function we_work_drop(){
                    we_work_box.style.display='none';
                }

/*impo box*/
                let impo_box=document.getElementById('impo_box');
                function impo_down() {
                    impo_box.style.transitionDelay="1s";
                    impo_box.style.display='block';
                }
                function impo_drop(){
                    impo_box.style.display='none';
                }
               

  /*small screen menu bar*/
                
  let about_p=document.getElementById('about_p');
  let about_m=document.getElementById('about_m');
  let event_p=document.getElementById('event_p');
  let event_m=document.getElementById('event_m');
  let we_work_p=document.getElementById('we_work_p');
  let we_work_m=document.getElementById('we_work_m');
  let impo_p=document.getElementById('impo_p');
  let impo_m=document.getElementById('impo_m');




 /*about2*/
 let about_box2=document.getElementById('about_box2');
                function about_down2() {
                    about_box2.style.transitionDelay="1s";
                    about_box2.style.display='block';
                    about_p.style.display='none';
                    about_m.style.display='block';
                }
                function about_drop2(){
                    about_box2.style.display='none';
                    about_p.style.display='block';
                    about_m.style.display='none';
                }
/*event2*/
let event_box2=document.getElementById('event_box2');
                function event_down2() {
                    event_box2.style.transitionDelay="1s";
                    event_box2.style.display='block';
                    event_p.style.display='none';
                    event_m.style.display='block';
                }
                function event_drop2(){
                    event_box2.style.display='none';
                    event_p.style.display='block';
                    event_m.style.display='none';
               
                }
/*we_work2*/
let we_work_box2=document.getElementById('we_work_box2');
                function we_work_down2() {
                    we_work_box2.style.transitionDelay="1s";
                    we_work_box2.style.display='block';
                    we_work_p.style.display='none';
                    we_work_m.style.display='block';
                }
                function we_work_drop2(){
                    we_work_box2.style.display='none';
                    we_work_p.style.display='block';
                    we_work_m.style.display='none';
                }
 /*impo box2*/
 let impo_box2=document.getElementById('impo_box2');
                function impo_down2() {
                    impo_box2.style.transitionDelay="1s";
                    impo_box2.style.display='block';
                    impo_p.style.display='none';
                    impo_m.style.display='block';
                }
                function impo_drop2(){
                    impo_box2.style.display='none';
                    impo_p.style.display='block';
                    impo_m.style.display='none';
                }

                </script>
