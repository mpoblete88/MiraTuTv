<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--$ npm install animate.css --save--}}
    <link rel="stylesheet" href="{{ url('/css/animate.min.css') }}">
    @yield('head')
    <style>
        @yield('style')
    </style>
</head>
<body class="web">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="{{ url('/') }}"><img src="/images/logo/logo_horizontal.png" alt="{{ config('app.name', 'Laravel') }}"></a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll @if(url()->current() == url('/')) active @endif" href="{{ url('/') }}">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll @if(url()->current() == url('/plans')) active @endif" href="{{ url('/plans') }}">Planes TV</a>
                    </li>
                    <li>
                        <a class="page-scroll @if(url()->current() == url('/help-center')) active @endif" href="{{ url('/help-center') }}">Centro de ayuda</a>
                    </li>
                    <!--<li>
                       <a class="page-scroll" href="#">Configura tu plan</a>
                   </li>-->
               </ul>
               <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li>
                        <form>
                            <div class="search-wrapper">
                                <input class="search-input" type="text" placeholder="¿Que Buscas?"/><i class="fa fa-search"></i>
                            </div>
                        </form>
                    </li>
                    @guest
                    <li>
                    </li>
                    <li class="dropdown">
                        <a class="login" data-toggle="dropdown" href="{{ route('login') }}"><i class="fa fa-user-o"></i></a>
                        <ul class="dropdown-login dropdown-menu dropdown-lr animated fadeInDown" role="menu">
                            <div class="col-lg-12">
                                <div class="text-center"><h3><b>Ingresar</b></h3></div>
                                <form class="form-horizontal" method="POST" action="{{ route('login') }}" autocomplete="off">
                                    {{ csrf_field() }}
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <div class="col-md-12">
                                            <input id="email" type="email" class="form-control" placeholder="¿Cual es su Email?" name="email" value="{{ old('email') }}" required autofocus>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                        <div class="col-md-12">
                                            <input id="password" type="password" class="form-control" name="password" placeholder="¿Cual es su Contraseña?" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary bg-green">
                                                Ingresar
                                            </button>

                                            <a class="btn btn-link " href="{{ route('password.request') }}">
                                                ¿Contraseña?
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </ul>
                    </li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-user-o"></i> Hola! {{ Auth::user()->first_name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu animated fadeInDown" role="menu">
                                <li>
                                    <a href="{{url('/home')}}">Mi TV</a>
                                </li>
                                <li>
                                    <a href="{{url('/')}}">Mis Datos</a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Salir
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endguest
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<div id="app">
    @yield('content')
</div>
<footer class="row">
    <div class="container">
        <div class="col-md-1">
            <a class="navbar-brand" href="#">
                <img style="width: 100px" src="/images/logo/logo_blanco.png" alt="">
            </a>
        </div>

        <div id="contact" class="col-md-5">
            <br>
            <h5>Contáctanos Estado 171, of.21 - Rancagua - <a style="color: #929497" href="mailto:ventas@miratutv.com" target="_blank">ventas@miratutv.com</a></h5>
            <h6> © Copyright 2017 MIRATUTV - Todos los derechos reservados</h6>
        </div>

        <div id="rrss" class="col-md-6 pull-right">
            <br>
            <h4>Facebook | Twitter | Ubicacion</h4>
        </div>
    </div>
</footer>


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
