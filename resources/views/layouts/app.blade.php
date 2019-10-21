<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- FAVICON -->

    <link rel="shortcut icon" type="image/x-icon" href="{{asset($setting->logo)}}">



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('apps/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('summernote/summernote.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/styles/atom-one-dark.min.css">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">

                    <img src="{{asset($setting->logo)}}" alt="{{$setting->logo}}" height="120px" width="120px">

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">

                <div class="row">
                    @if(Auth::check())
                        @if(Auth::user()->is_admin)
                    <div class="col-md-4">
                        <ul class="list-group">
                            <li class="list-group-item"><a href="{{route('admin')}}">Home</a></li>
                            <li class="list-group-item"><a href="{{route('about')}}">About</a></li>
                            <li class="list-group-item"><a href="{{route('faq')}}">Faq</a></li>
                            <li class="list-group-item"><a href="{{route('skills')}}">Skills</a></li>
                            <li class="list-group-item"><a href="{{route('projects')}}">Add Projects</a></li>
                            <li class="list-group-item"><a href="{{route('settings')}}">Settings</a></li>
                            <li class="list-group-item"><a href="{{route('services')}}">Services</a></li>
                            <li class="list-group-item"><a href="{{route('mail')}}">Mails</a></li>
                        </ul>
                    </div>
                        @endif
                    @endif

                    <div class="col-md-8">
                        @include('includes.error')
                        @yield('content')
                    </div>
                </div>

            </div>
        </main>
    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('summernote/summernote.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/highlight.min.js"></script>

    <script>
        @if(Session::has('success'))


        toastr.success('{{Session::get('success')}} ')

        @endif

        $(document).ready(function() {
            $('#summernote').summernote();
            $('.summernote').summernote();
        });
    </script>
</body>
</html>
