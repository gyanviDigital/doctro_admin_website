<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
          //public  variable use
          $web_name='BLYNZO';
          $web_address='Near Reliance Petrol Pump, 
Vidyanagar Cross, 
BB Road, Bengaluru, 
Karnataka 562157';
          $web_email="blynzoslot@gmail.com";
          $web_phone1='+91 73074 48679';
          $web_phone2='+91 73074 48679';
          $web_logo='frontend/image/logo.png';
          $page_name_img='frontend/image/layout/page-name-img.jpg';
          $who_we_img='frontend/image/about/who_we_img.jpg';
           view()->share([
              'web_name'=>$web_name,
              'web_address'=>$web_address,
              'web_email'=>$web_email,
              'web_phone1'=>$web_phone1,
              'web_phone2'=>$web_phone2,
              'web_logo'=>$web_logo,
              'page_name_img'=>$page_name_img,
              'who_we_img'=>$who_we_img,
              ]);
    }
}
