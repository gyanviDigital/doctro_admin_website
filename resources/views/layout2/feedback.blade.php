<style>
    .crousel_main_box2 {
            width: 100%;
            height: 300px;
        }

        .crousel_multi_img2 {
            position: relative;
            width: cover;
            height: 300px;
            overflow: hidden;
        }

        .crousel_img_all2 {
            position: absolute;
            width: 100%;
            height: 300px;
        }

        .crousel_img_all2:not(.active) {
            top: 0;
            left: -100%;
        }

        @keyframes c_next21 {
            from {
                left: 0%;

            }

            to {
                left: -100%;
            }
        }

        @keyframes c_next22 {
            from {
                left: 100%;
            }

            to {
                left: 0%;
            }
        }

        /* this is for c_pre2*/
        @keyframes c_pre21 {
            from {
                left: 0%;

            }

            to {
                left: 100%;
            }
        }

        @keyframes c_pre22 {
            from {
                left: -100%;
            }

            to {
                left: 0%;
            }
        }
        @media (max-width:800px) {
          .feedback-img{
            display: none;
          }
        }

        /* btn css styles*/
        .c_pre2,
        .c_next2 {
            padding: 5px 20px;
            border: hidden;
            background-color: transparent;
            margin-top: -160px;
            position: absolute;
            cursor: pointer;
            font-size: medium;
            font-weight: 600;
        }

        .c_pre2:hover,
        .c_next2:hover {
            background-color: rgb(216, 211, 211);
        }

        .c_pre2:active,
        .c_next2:active {
            background-color: rgb(0, 0, 0);
            color: white;
            transform: scale(1.2);
        }

        .c_pre2 {
          left: 10px;
        }
        
        .c_next2 {
          right: 10px;
        } 
</style>
<div class="crousel_main_box2 bg-gray-50 p-4">
            <div class="crousel_multi_img2" onmouseover="c_mouse_over2()" onmouseleave="c_mouse_leave2()">
            <!---box new-->   
            <div class="box_flex2 crousel_img_all2 active">
                  <div class="box2 feedback-img">
                    <img src="{{asset('frontend/image/doctors/img1.png')}}" alt="Blynzo" class="">
                  </div>
                  <div class="box2 p-2">
                    <h3 class="text-3xl text_clr2 font-semibold text-start my-3 "><strong class="border-b-2 border-black"> Ajay Kumar</strong></h3>
                    <p class="text-lg text_clr1">I am extremely satisfied with the implementation of the doctor's appointment system. This platform effectively addresses the needs of both patients and healthcare providers, making the appointment scheduling process seamless and efficient.</p>
                    <div class="flex place-items-center place-content-start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="yellow" class="bi bi-star-half" viewBox="0 0 16 16">
  <path d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z"/>
</svg>
                    </div>
                  </div>
                 </div>
                   <!---box new-->  
                   <div class="box_flex2 crousel_img_all2 ">
                  <div class="box2 feedback-img">
                    <img src="{{asset('frontend/image/doctors/img1.png')}}" alt="Blynzo" class="">
                  </div>
                  <div class="box2 p-2">
                    <h3 class="text-3xl text_clr2 font-semibold text-start my-3"> <span>:- </span><strong> Annu Kumari</strong></h3>
                    <p class="text-lg text_clr1">I am extremely satisfied with the implementation of the doctor's appointment system. This platform effectively addresses the needs of both patients and healthcare providers, making the appointment scheduling process seamless and efficient.</p>
                    <div class="flex place-items-center place-content-start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="yellow" class="bi bi-star-half" viewBox="0 0 16 16">
  <path d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z"/>
</svg>
                    </div>
                  </div>
                 </div>
                  <!---box new-->  
                  <div class="box_flex2 crousel_img_all2 ">
                  <div class="box2 feedback-img">
                    <img src="{{asset('frontend/image/doctors/img1.png')}}" alt="Blynzo" class="">
                  </div>
                  <div class="box2 p-2">
                    <h3 class="text-3xl text_clr2 font-semibold text-start my-3"> <span>:- </span><strong> Mohit Sharma</strong></h3>
                    <p class="text-lg text_clr1">I am extremely satisfied with the implementation of the doctor's appointment system. This platform effectively addresses the needs of both patients and healthcare providers, making the appointment scheduling process seamless and efficient.</p>
                    <div class="flex place-items-center place-content-start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="yellow" class="bi bi-star-half" viewBox="0 0 16 16">
  <path d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z"/>
</svg>
                    </div>
                  </div>
                 </div>
                  <!---box new-->  
                  <div class="box_flex2 crousel_img_all2 ">
                  <div class="box2 feedback-img">
                    <img src="{{asset('frontend/image/doctors/img1.png')}}" alt="Blynzo" class="">
                  </div>
                  <div class="box2 p-2">
                    <h3 class="text-3xl text_clr2 font-semibold text-start my-3"> <span>:- </span><strong> Pankaj Raj</strong></h3>
                    <p class="text-lg text_clr1">I am extremely satisfied with the implementation of the doctor's appointment system. This platform effectively addresses the needs of both patients and healthcare providers, making the appointment scheduling process seamless and efficient.</p>
                    <div class="flex place-items-center place-content-start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="yellow" class="bi bi-star-half" viewBox="0 0 16 16">
  <path d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z"/>
</svg>
                    </div>
                  </div>
                 </div>
                  <!---box new-->  
                  <div class="box_flex2 crousel_img_all2 ">
                  <div class="box2 feedback-img">
                    <img src="{{asset('frontend/image/doctors/img1.png')}}" alt="Blynzo" class="">
                  </div>
                  <div class="box2 p-2">
                    <h3 class="text-3xl text_clr2 font-semibold text-start my-3"> <span>:- </span><strong> Sonu Kumar</strong></h3>
                    <p class="text-lg text_clr1">I am extremely satisfied with the implementation of the doctor's appointment system. This platform effectively addresses the needs of both patients and healthcare providers, making the appointment scheduling process seamless and efficient.</p>
                    <div class="flex place-items-center place-content-start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="yellow" class="bi bi-star-half" viewBox="0 0 16 16">
  <path d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z"/>
</svg>
                    </div>
                  </div>
                 </div>
                
            </div>
            <button onmouseover="c_mouse_over2()" onclick="c_next2()" class="c_next2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
</svg>
            </button>
            <button onmouseover="c_mouse_over2()" onclick="c_pre2()" class="c_pre2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
</svg></button>
        </div>  

        <script>
          
        /* this is use for variables*/
        var multi_imgcc2 = document.querySelectorAll(".crousel_img_all2");
        var count2 = 0;

        /*auto slid function*/
        function c_auto_slid2() {
            multi_imgcc2[count2].style.animation = 'c_next21 1s linear forwards';
            if (count2 < multi_imgcc2.length - 1) {
                count2++;
            } else {
                count2 = 0;
            }
            multi_imgcc2[count2].style.animation = 'c_next22 1s linear forwards';
        }

        /*this is for c_pre2viouse btn*/
        function c_pre2_slid() {
            multi_imgcc2[count2].style.animation = 'c_pre21 1s linear forwards';
            if (count2 > 0) {
                count2--;
            } else {
                count2 = multi_imgcc2.length - 1;
            }
            multi_imgcc2[count2].style.animation = 'c_pre22 1s linear forwards';

        }

        /*this is c_loop2 use for  auto slide img crousel*/
        function c_loop2() {
            c_interval = setInterval(c_call_fun, 3000);
            function c_call_fun() {
                c_auto_slid2();
            }
        }
        c_loop2();
        /* mouse hover and mouse leave function use for stop and run auto slider*/
        function c_mouse_over2() {
            clearInterval(c_interval);
        }
        function c_mouse_leave2() {
            c_loop2();
        }
        /*c_next2 c_pre2 function*/
        function c_next2() {
            c_auto_slid2();
        }
        function c_pre2() {
            c_pre2_slid();
        }  
        </script>