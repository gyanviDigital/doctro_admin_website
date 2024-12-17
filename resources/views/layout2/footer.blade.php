<iframe src="{{url('https://webapp.joyz.ai/6752c33c7d34e6b148024f21/chatbot/f837f36a-7024-5f70-86d3-cb5806ec138a/conversation')}}" frameborder="0" id="chatbots" class="w-96 h-80 fixed hidden right-10 bottom-16" style="z-index: 999 ! important;"></iframe>
  <button id="chatbotsbtn" class="fixed bottom-2 right-10" style="z-index: 999 !important;">
  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-chat-square-dots-fill p-2 bg-green-500 rounded-full" viewBox="0 0 16 16">
  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
</svg>
  </button>
  <script>
    document.getElementById('chatbotsbtn').addEventListener('click', () => {
        document.getElementById('chatbots').classList.toggle('hidden');
    });
</script>
<div class="box_flex2 android">
  <div class="box2 py-4">
    <h2 class="text-4xl font-semibold text_clr1">Join as a Doctors</h2>
    <p class="my-4 text-sm font-normal">Find a Doctors/Hospitals/Clinics</p>
  </div>
  <div class="box2 py-4">
  <a href="{{url('doctor/doctor_signup')}}">  <div class="inline-block py-1 px-6 bg_clr1 bg_clr1_h rounded flex place-items-center place-content-center gap-4 mt-2"><strong>Join Now</strong></div></a>
  <a href="{{url('show-doctors')}}">   <div class="inline-block py-1 px-6 bg_clr1 bg_clr1_h rounded flex place-items-center place-content-center gap-4 mt-2"><strong>Find Now</strong></div></a>
  </div>
</div>
<div class="pg-footer">
    <footer class="footer">
      <svg class="footer-wave-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 100" preserveAspectRatio="none">
        <path class="footer-wave-path" d="M851.8,100c125,0,288.3-45,348.2-64V0H0v44c3.7-1,7.3-1.9,11-2.9C80.7,22,151.7,10.8,223.5,6.3C276.7,2.9,330,4,383,9.8 c52.2,5.7,103.3,16.2,153.4,32.8C623.9,71.3,726.8,100,851.8,100z"></path>
      </svg>
      <div class="footer-content">
        <div class="footer-content-column">
          <div class="footer-logo">
            <a class="a_footer w-40 footer-logo-link" href="/"  >
              <img src="{{$web_logo}}" alt="{{$web_logo}}" class="w-24">
            </a>
          </div>
        
          <div class="footer-menu">
          <p class="text-start text-sm font-normal my-2">Blynzo is a software that lets you book doctor appointments without waiting in line, based on available time slots, for quick and easy treatment.</p>
          
          <div class="flex gap-2 ">
            <div class="w-6  place-items-center h-cover grid">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
</svg> </div>
<div class="" style="font-size: small;">{{$web_address}}</div>
<span></span>
</div>
<div class="flex gap-2 mt-2">
            <div class="w-6  place-items-center h-cover grid">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-telephone-inbound-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0"/>
</svg> </div>
<div class="" style="font-size: small;"> <a href="telto:{{$web_phone1}}">{{$web_phone1}}</a></div>
<span></span>
</div>

<div class="flex gap-2 mt-2">
            <div class="w-6  place-items-center h-cover grid">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
  <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671"/>
  <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791"/>
</svg> </div>
<div class="" style="font-size: small;"> <a href="mailto:{{$web_email}}">{{$web_email}}</a></div>

</div>

        
          </div>
        </div>
        <div class="footer-content-column">
          <div class="footer-menu">
            <h2 class="footer-menu-name">Quick Links</h2>
            <ul id="menu-company" class="footer-menu-list">
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="{{url('')}}">Home</a>
              </li>
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category">
                <a href="{{url('about-us')}}">About</a>
              </li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="{{url('show-doctors')}}">Services</a>
              </li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="{{url('faqs')}}">FAQS</a>
              </li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="{{url('contact-us')}}">Contact Us</a>
              </li>

            </ul>
          </div>
        
        </div>
        <div class="footer-content-column">
          <div class="footer-menu">
            <h2 class="footer-menu-name">Additional links </h2>
            <ul id="menu-quick-links" class="footer-menu-list">
              <li class="menu-item menu-item-type-custom menu-item-object-custom">
                <a href="{{url('termscondition')}}">Terms & Conditions</a>
              </li>
             
              <!-- refund-policy -->
              <li class="menu-item menu-item-type-custom menu-item-object-custom">
                <a href="{{url('refund-policy')}}">Refund Policy</a>
              </li>
              <!-- <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="{{url('')}}">Events</a>
              </li> -->
              
            </ul>
          </div>
        </div>
        <div class="footer-content-column">
          <div class="footer-call-to-action">
            
          <div class="h-40  ">
            <form action="{{url('')}}" method="post" class="">
              @csrf
              <label for="email"> News Letter</label>
              <div class="">
           <input type="email" placeholder="Enter Email Address" name="email" class="py-2 px-2 outline-none border-none rounded text-gray-400 text-sm font-normal">
           <button type="submit" class="py-2 text-sm px-4 rounded bg_clr2 text-white font-semibold mt-1">submit</button>
           </div>
            </form>
<div class="w-full mt-4">
  <a href="" class="mt-8 duration-100 hover:shadow hover:shadow-white active:scale-105 ">
              <button class="flex gap-2 py-2 px-4 rounded-lg bg-white text-black font-bold text-sm">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="black" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
</svg>
                <span>Process of working</span></button>
            </a>
          <a href="{{url('login')}}">  <button class="px-4 py-1 rounded shadow shadow-white text-white duration:100 active:scale-105 mt-2 bg_clr2">Admin </button></a>
            </div>
            
           
          </div>
              </div>
         
        </div>
        <div class="footer-social-links">
          <a href="{{url('https://www.instagram.com/blynzo?igsh=cm51NHdldHllOWgx')}}">
             <svg class="footer-social-amoeba-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 236 54">
            <path class="footer-social-amoeba-path" d="M223.06,43.32c-.77-7.2,1.87-28.47-20-32.53C187.78,8,180.41,18,178.32,20.7s-5.63,10.1-4.07,16.7-.13,15.23-4.06,15.91-8.75-2.9-6.89-7S167.41,36,167.15,33a18.93,18.93,0,0,0-2.64-8.53c-3.44-5.5-8-11.19-19.12-11.19a21.64,21.64,0,0,0-18.31,9.18c-2.08,2.7-5.66,9.6-4.07,16.69s.64,14.32-6.11,13.9S108.35,46.5,112,36.54s-1.89-21.24-4-23.94S96.34,0,85.23,0,57.46,8.84,56.49,24.56s6.92,20.79,7,24.59c.07,2.75-6.43,4.16-12.92,2.38s-4-10.75-3.46-12.38c1.85-6.6-2-14-4.08-16.69a21.62,21.62,0,0,0-18.3-9.18C13.62,13.28,9.06,19,5.62,24.47A18.81,18.81,0,0,0,3,33a21.85,21.85,0,0,0,1.58,9.08,16.58,16.58,0,0,1,1.06,5A6.75,6.75,0,0,1,0,54H236C235.47,54,223.83,50.52,223.06,43.32Z"></path>
          </svg>
          </a>
          <a class="a_footer footer-social-link linkedin" href="{{url('https://www.instagram.com/blynzo?igsh=cm51NHdldHllOWgx')}}" target="_blank">
            <span class="hidden-link-text">Linkedin</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
</svg>
          </a>
          <a class="a_footer footer-social-link twitter" href="{{url('')}}" target="_blank">
            <span class="hidden-link-text">Twitter</span>
            <svg class="footer-social-icon-svg" style="width: 25px; height:25px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
              <path class="footer-social-icon-path" d="M 25.855469 5.574219 C 24.914063 5.992188 23.902344 6.273438 22.839844 6.402344 C 23.921875 5.75 24.757813 4.722656 25.148438 3.496094 C 24.132813 4.097656 23.007813 4.535156 21.8125 4.769531 C 20.855469 3.75 19.492188 3.113281 17.980469 3.113281 C 15.082031 3.113281 12.730469 5.464844 12.730469 8.363281 C 12.730469 8.773438 12.777344 9.175781 12.867188 9.558594 C 8.503906 9.339844 4.636719 7.246094 2.046875 4.070313 C 1.59375 4.847656 1.335938 5.75 1.335938 6.714844 C 1.335938 8.535156 2.261719 10.140625 3.671875 11.082031 C 2.808594 11.054688 2 10.820313 1.292969 10.425781 C 1.292969 10.449219 1.292969 10.46875 1.292969 10.492188 C 1.292969 13.035156 3.101563 15.15625 5.503906 15.640625 C 5.0625 15.761719 4.601563 15.824219 4.121094 15.824219 C 3.78125 15.824219 3.453125 15.792969 3.132813 15.730469 C 3.800781 17.8125 5.738281 19.335938 8.035156 19.375 C 6.242188 20.785156 3.976563 21.621094 1.515625 21.621094 C 1.089844 21.621094 0.675781 21.597656 0.265625 21.550781 C 2.585938 23.039063 5.347656 23.90625 8.3125 23.90625 C 17.96875 23.90625 23.25 15.90625 23.25 8.972656 C 23.25 8.742188 23.246094 8.515625 23.234375 8.289063 C 24.261719 7.554688 25.152344 6.628906 25.855469 5.574219 "></path>
            </svg>
          </a>
          <a class="a_footer footer-social-link youtube" href="{{url('https://youtube.com/@blynzoslot?si=mKNnwn40U7Z2KiCb')}}" target="_blank">
            <span class="hidden-link-text">Youtube</span>
            <svg class="footer-social-icon-svg" style="width: 25px; height:25px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
              <path class="footer-social-icon-path" d="M 15 4 C 10.814 4 5.3808594 5.0488281 5.3808594 5.0488281 L 5.3671875 5.0644531 C 3.4606632 5.3693645 2 7.0076245 2 9 L 2 15 L 2 15.001953 L 2 21 L 2 21.001953 A 4 4 0 0 0 5.3769531 24.945312 L 5.3808594 24.951172 C 5.3808594 24.951172 10.814 26.001953 15 26.001953 C 19.186 26.001953 24.619141 24.951172 24.619141 24.951172 L 24.621094 24.949219 A 4 4 0 0 0 28 21.001953 L 28 21 L 28 15.001953 L 28 15 L 28 9 A 4 4 0 0 0 24.623047 5.0546875 L 24.619141 5.0488281 C 24.619141 5.0488281 19.186 4 15 4 z M 12 10.398438 L 20 15 L 12 19.601562 L 12 10.398438 z"></path>
            </svg>
          </a>
          <a class="a_footer footer-social-link github" href="{{url('https://www.facebook.com/share/B57WZnqUAkrLriPt/')}}" target="_blank">
            <span class="hidden-link-text">Facebook</span>
           <svg xmlns="http://www.w3.org/2000/svg" style="width: 25px; height:25px" fill="white" class="bi bi-facebook " viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
</svg>
          </a>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="footer-copyright-wrapper">
          <p class="footer-copyright-text">
            <a class="a_footer footer-copyright-link" href="{{url('gyanvidigital.com')}}" > ©2024. | copyright &copy; <strong class="text-black">Gyanvi Digital</strong> | All rights reserved. </a>
          </p>
        </div>
      </div>
    </footer>
  </div>