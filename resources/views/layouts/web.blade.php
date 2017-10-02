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
    @yield('head')
    <style>
        body {
            width: 100%;
            height: 100%;
        }

        html {
            width: 100%;
            height: 100%;
        }
        #app{
            margin-top: 80px;
            min-height: 80%;
        }
        footer{
            background-color: #292b2c!important;
            padding: 10px;
            height: 300px;
        }

        #contact{
            padding-left: 50px;
            color: #74787E;
        }
        #CONTACT h6{
            color: #4f5359;
        }

        #rrss{
            color: #74787E;
        }
        .navbar-inverse a.navbar-brand{
            height: 80px;
            margin-right: 50px;
        }
        .navbar-inverse a img{
            height: 100% !important;
        }

        .navbar-inverse .nav.navbar-nav li a{
            height: 80px;
            line-height: 50px;
            width: 180px;
            text-align: center;
        }
        .navbar-inverse .nav.navbar-nav li a:hover, .navbar-inverse .nav.navbar-nav li a.active{
            color: #4CB686;
        }
        section{
            padding: 35px;
            width: 100%;
            min-height: 350px;
        }
        section:nth-child(even){
            background: #FFFFFF;
        }
        section:nth-child(odd){
            background: #DDDDDD;
        }

        @yield('style')
    </style>
</head>
<body>
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
                        <a class="page-scroll" href="{{ url('/plans') }}">Planes TV</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ url('/help-center') }}">Centro de ayuda</a>
                    </li>
                    <li>
                        <a class="page-scroll active" href="#">Configura tu plan</a>
                    </li>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                    <li><a href="{{ url('/')  }}">search</a></li>
                    <li>
                        <a href="{{ route('login') }}">Login</a>
                    </li>

                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
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
