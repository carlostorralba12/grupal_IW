<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--title>{{ config('app.name', 'FarmaWeb') }}</title-->
    <title>FarmaWeb</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <i class="fa fa-home" aria-hidden="true"></i> FarmaWeb
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    
                        @auth
                            @if(Auth::user()->typeUser == 'admin')
                            <div class="nav-item dropdown">
                                
                                <a class="nav-link dropdown-toggle" type="button" id="adminDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Administración
                                </a>

                                <div class="dropdown-menu" aria-labelledby="adminDropdown">

                                    <a class="dropdown-item" href="/admin/categorias">Catálogo</a>
                                    <a class="dropdown-item" href="#">Pedidos</a>

                                </div>
                            </div>
                            @endif
                        @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">
                                        <i class="fa fa-sign-in" aria-hidden="true"></i> {{ __('Login') }}
                                    </a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">
                                        <i class="fa fa-user-plus" aria-hidden="true"></i> {{ __('Registro') }}
                                    </a>
                                </li>
                            @endif
                        @else
                            @auth
                            <li class="nav-item">
                                <a class="nav-link" href="/carrito">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> {{ __('Carrito') }}
                                </a>
                            </li>
                    
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out" aria-hidden="true"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endauth
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<footer class="page-footer text-center font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright py-3"><i class="fa fa-copyright" aria-hidden="true"></i> 2021 Copyright: |
    <a href="{{URL::to('/')}}">FarmaWeb</a> |
    <a href="{{URL::to('/contacto')}}">Contacto</a> |
    <a href="{{URL::to('/about')}}">Sobre nosotros</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</html>
