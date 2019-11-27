<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <title>Pagina Web Panzotti Pastas!</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{!! asset('fonts/ionicons.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">

    <!-- estilos -->
    <script src="https://kit.fontawesome.com/a6f4c22e9b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{!! asset('css/scrolling-nav.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/estilos2.css') !!}">

    <link rel="stylesheet" href="{!! asset('css/Simple-Slider.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/Swipe-Slider-9.css') !!}">

    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{!! asset('fonts/beyond_the_mountains-webfont.css') !!}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('productoWeb')}}">Productos</a>
                        </li>

                        <li class="nav-item">
                                <a class="nav-link" href="">Recetas</a>
                        </li>

                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarme') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                        <li class="nav-item">
                            <button class="btn btn-danger ml-2">pedidos: 3834-7799661</button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div style="min-height: 500px">

        @yield('content')

    </div>

    <!-- Footer -->
    <div class="footer-dark text-white py-5">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Servicios</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Quienes Somos?</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Pastas Panzotti</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula
                            rhoncus
                            elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in
                            justo.</p>
                    </div>
                    <div class="col item social">
                        <a href="#"><i class="icon ion-social-facebook"></i></a>
                        <a href="#"><i class="icon ion-social-instagram"></i></a>
                    </div>
                </div>
                <p class="copyright">Panzotti Pastas © 2019.</p>
            </div>
        </footer>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{!! asset('js/bootstrap.bundle.min.js') !!}" async></script>
    <script type="text/javascript" src="{!! asset('js/jquery.min.js') !!}" async></script>

    <!-- Plugin JavaScript -->
    <script type="text/javascript" src="{!! asset('js/jquery.easing.min.js') !!}" async></script>

    <!-- js -->
    <script type="text/javascript" src="{!! asset('js/scrolling-nav.js') !!}" async></script>
    <script type="text/javascript" src="{!! asset('js/Simple-Slider.js') !!}" async></script>
    <script type="text/javascript" src="{!! asset('js/Swipe-Slider-9.js') !!}" async></script>

</body>

</html>
</body>

</html>
