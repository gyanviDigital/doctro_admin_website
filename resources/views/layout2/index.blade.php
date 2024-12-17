<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{url('frontend/image/logo.jpeg')}}"  class="icon">
    <title>title - Blynzo | Book Doctor Appointments Online |{{ $title ?? 'Blynzo' }}</title>
    <link rel="shortcut icon" href="{{$web_logo}}" type="image/x-icon">
    <link rel="stylesheet" href="{{url('frontend/css/styles.css')}}" class="">
<!--source code link-->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Libraries Stylesheet -->

    <!--source code link over-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <!--css link over-->
       <link rel="stylesheet" href="{{url('frontend/css/nav.css')}}" class="">
       <link rel="stylesheet" href="{{url('frontend/css/footer.css')}}" class="">
       <link rel="stylesheet" href="{{url('frontend/css/index.css')}}" class="">
       <link rel="stylesheet" href="{{url('frontend/css/layout.css')}}" class="">
       <link rel="stylesheet" href="{{url('frontend/css/styles.css')}}" class="">
       <link rel="stylesheet" href="{{url('frontend/css/crousel.css')}}" class="">
       <link rel="stylesheet" href="{{url('frontend/css/feedback.css')}}" class="">
       
<link href="https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@100..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">    
    <script src="https://cdn.tailwindcss.com"></script>
    @yield('css')
  <!--Start of Tawk.to Script-->
</head>
<body>
    @include('layout2.header')
    @yield('main')
    @include('layout2.footer')
</body>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>