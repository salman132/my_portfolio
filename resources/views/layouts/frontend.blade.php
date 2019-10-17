<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... META DATA ... -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>salman rahman auvi | web developer</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Hello iam {{$user->name}}, iam a {{$user->about->profession}}."/>
    <meta name="keywords" content=" 'salman rahman auvi', 'salman', 'auvi', 'web-developer' ">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ... FAVICON... -->
    <link rel="shortcut icon" type="image/x-icon" href="{{$user->settings->logo}}">

    <!-- ... STYLE SHEETS... -->
    <link rel="stylesheet" href="{{ asset('apps/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{asset('apps/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('apps/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('apps/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('apps/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('apps/css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('apps/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('apps/css/jquery-ui.theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('apps/css/jquery-ui.structure.min.css')}}">
    <link rel="stylesheet" href="{{asset('apps/css/animate.css')}}">

    <!-- ... MAIN CSS... -->
    <link rel="stylesheet" href="{{asset('apps/style.css')}}">
    <link rel="stylesheet" href="{{asset('apps/responsive.css')}}">


    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
</head>
<body>

<!-- ... HEADER AREA... -->
<header class="header-area" id="my-header">
   <div class="image-noise">
       <div class="container">
           <div class="header-top">
               <div class="row">
                   <div class="logo-area col-md-8 col-sm-8 col-xs-8">
                       <h1><a href="{{route('home')}}"><img src="{{asset($setting->logo)}}" alt="{{asset($setting->logo)}}"></a></h1>
                   </div>
                   <div class="social-area col-md-4 col-sm-4 col-xs-4">
                       <ul>
                           <li><a href="https://www.facebook.com/salman.auvi"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="https://twitter.com/salman00rahman"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="https://plus.google.com/u/0/+SalmanRahmanAuvi"><i class="fa fa-google-plus"></i></a></li>
                       </ul>
                   </div>
               </div>
           </div>
           <hr>
           <!-- ... main menu ... -->
           <nav class="main-menu">
               <div class="my-menubar image-noise">
                   <a href="#">menu<i class="fa fa-bars"></i></a>
               </div>
               <ul>
                   <li class="active"><a href="{{route('home')}}">home</a></li>
                   <li><a href="#about-me">about me</a></li>
                   <li><a href="#services">services</a></li>
                   <li><a href="#portfolio">my work</a></li>
                   <li><a href="#skills">my skills</a></li>
                   <li><a href="#contact">contact</a></li>
               </ul>
           </nav>



           <!-- ... banner-text... -->
           <div class="banner-text text-center">
               <h3>i'am</h3>
               <h2><span>{{$user->name}}</span></h2>
               <h3>{{$user->about->profession}}</h3>
           </div>

           <!-- ... know me ... -->
           <div class="know-me  text-center">
               <a href="#about-me">know me</a>
           </div>

           <div class="swipe-down text-center my-tooltip">
               <a href="#services" title="Go down"><i class="fa fa-angle-down"></i></a>
           </div>
       </div>

       <!-- ... scroll-menu ... -->
       <div class="scroll-menu text-center">
           <div class="logo col-md-5">
               <h2><a href="#">salman</a></h2>
           </div>
           <div class="scroll-menu-holder col-md-7 ">
               <ul>
                   <li><a href="{{route('home')}}">home</a></li>
                   <li><a href="#about-me">about me</a></li>
                   <li><a href="#services">services</a></li>
                   <li><a href="#portfolio">my work</a></li>
                   <li><a href="#skills">my skills</a></li>
                   <li><a href="#contact">contact</a></li>
               </ul>
           </div>

       </div>

       <!-- ... scroll-icons ... -->
       <div class="my-scroll-top">
           <a href="#my-header" class="doing-top-scroll"><i class="fa fa-angle-up"></i></a>
       </div>
   </div>

</header>

@yield('content')










<!-- .... FOOTER AREA ...  		 -->
<footer class="footer-area">
    <div class="container">
        <h2 class="text-center"><span>follow me</span></h2>

        <div class="social-icons text-center wow bounceInLeft">
            <a class="facebook" href="https://www.facebook.com/salman.auvi"><i class="fa fa-facebook"></i></a>
            <a class="twitter" href="https://twitter.com/salman00rahman"><i class="fa fa-twitter"></i></a>
            <a class="google-plus" href="https://plus.google.com/u/0/+SalmanRahmanAuvi"><i class="fa fa-google-plus"></i></a>
            <a class="linkedin" href="https://www.linkedin.com/in/salman-rahman-auvi-auvi-2b86ab129?trk=nav_responsive_tab_profile_pic"><i class="fa fa-linkedin"></i></a>
        </div>

        <div class="bottom-footer">
            <hr>
            <h6 class="text-center">@php echo date('Y')  @endphp | created &amp; maintined by {{$user->name}}.</h6>
        </div>


    </div>
</footer>

<!-- .... SCRIPT FILES ... -->

<script src="{{ asset('apps/js/vendor/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('apps/js/vendor/jquery-ui.min.js') }}"></script>
<script src="{{ asset('apps/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('apps/js/jquery.mixitup.js') }}"></script>
<script src="{{ asset('apps/js/wow.min.js') }}"></script>
<script src="{{ asset('apps/js/custom.js') }}"></script>
@yield('js')

</body>


</html>
