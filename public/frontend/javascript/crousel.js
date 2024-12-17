   /* this is use for variables*/
   var multi_imgcc = document.querySelectorAll(".crousel_img_all1");
   var count = 0;

   /*auto slid function*/
   function c_auto_slid() {
       multi_imgcc[count].style.animation ='c_next1 1s linear forwards';
    
       if (count < multi_imgcc.length - 1) {
           count++;
       } else {
           count = 0;
       }
       multi_imgcc[count].style.animation = 'c_next2 1s linear forwards';
   }

   /*this is for c_previouse btn*/
   function c_pre_slid() {
       multi_imgcc[count].style.animation = 'c_pre1 1s linear forwards';
       if (count > 0) {
           count--;
       } else {
           count = multi_imgcc.length - 1;
       }
       multi_imgcc[count].style.animation = 'c_pre2 1s linear forwards';

   }

   /*this is c_loop use for  auto slide img crousel*/
   function c_loop() {
       c_interval = setInterval(c_call_fun, 3000);
       function c_call_fun() {
           c_auto_slid();
       }
   }
   c_loop();
   /* mouse hover and mouse leave function use for stop and run auto slider*/
   function c_mouse_over() {
       clearInterval(c_interval);
   }
   function c_mouse_leave() {
       c_loop();
   }
