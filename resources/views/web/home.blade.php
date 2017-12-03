@extends('layouts.web')
@section('content')
    <section class="slider-channels">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content">
                        <div role="tabpanel" style="background: url('{{ url('/images') }}/plan1.jpg')" class="tab-pane active fade in" id="plan1">
                            <div class="container animated slideInRight">
                                <div class="col-lg-6">
                                    <span class="icon-plans icon-base"></span>
                                    <h1 class=""><span>Plan</span><br> BASE</h1>
                                    <p>contratelo desde:</p>
                                    <h1 class="price">$14.500</h1>
                                    <ul>
                                        <li class="color-cine">Incluye 1 decodificador <b>HD</b></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <h2><span class="color-cine">153</span> Canales de TV.</h2>
                                    <ul>
                                        <li>10 Canales Nacionales Standar (SD)</li>
                                        <li>80 Canales Standar (SD)</li>
                                        <li>06 Canales Nacionales en Alta Definición (HD)</li>
                                        <li>57 Canales Nacionales en Altas Definición (HD)</li>
                                    </ul>
                                </div>
                                <div class="col-lg-12">
                                    <a class="btn btn-lg btn-default color-base" style="background: #FFFFFF; color: #444444;" href="{{url('/plan/1/hire')}}" role="button" data-toggle="modal" data-target="#miraModal">Contratar</a>
                                    <a class="btn btn-lg btn-default" style="background: transparent; color: #FFFFFF;" href="{{url('/plan/1/channels')}}" role="button" data-toggle="modal" data-target="#miraModal">Ver Canales</a>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" style="background: url('{{ url('/images') }}/plan2.jpg')" class="tab-pane fade" id="plan2">
                            <div class="container animated slideInLeft">
                                <div class="col-lg-6">
                                    <span class="icon-plans icon-futbol"></span>
                                    <h1 class=""><span>Plan</span><br> FÚTBOL</h1>
                                    <p>contratelo desde:</p>
                                    <h1 class="price">$21.000</h1>
                                    <ul>
                                        <li class="color-cine">Incluye 1 decodificador <b>HD</b></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <h2><span class="color-cine">160</span> Canales de TV.</h2>
                                    <ul>
                                        <li>10 Canales Nacionales Standar (SD)</li>
                                        <li>80 Canales Standar (SD)</li>
                                        <li>06 Canales Nacionales en Alta Definición (HD)</li>
                                        <li>57 Canales Nacionales en Altas Definición (HD)</li>
                                    </ul>
                                </div>
                                <div class="col-lg-12">
                                    <a class="btn btn-lg btn-default color-futbol" style="background: #FFFFFF; color: #444444;" href="{{url('/plan/2/hire')}}" role="button" data-toggle="modal" data-target="#miraModal">Contratar</a>
                                    <a class="btn btn-lg btn-default" style="background: transparent; color: #FFFFFF;" href="{{url('/plan/2/channels')}}" role="button" data-toggle="modal" data-target="#miraModal">Ver Canales</a>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" style="background: url('{{ url('/images') }}/plan4.jpg')"  class="tab-pane fade" id="plan3">
                            <div class="container animated slideInRight">
                                <div class="col-lg-6">
                                    <span class="icon-plans icon-cine"></span>
                                    <h1 class=""><span>Plan</span><br> CINE</h1>
                                    <p>contratelo desde:</p>
                                    <h1 class="price">$20.000</h1>
                                    <ul>
                                        <li class="color-futbol">Incluye 1 decodificador <b>HD</b></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <h2><span class="color-futbol">175</span> Canales de TV.</h2>
                                    <ul>
                                        <li>10 Canales Nacionales Standar (SD)</li>
                                        <li>80 Canales Standar (SD)</li>
                                        <li>06 Canales Nacionales en Alta Definición (HD)</li>
                                        <li>57 Canales Nacionales en Altas Definición (HD)</li>
                                    </ul>
                                </div>
                                <div class="col-lg-12">
                                    <a class="btn btn-lg btn-default color-cine" style="background: #FFFFFF; color: #444444;" href="{{url('/plan/3/hire')}}"role="button" data-toggle="modal" data-target="#miraModal">Contratar</a>
                                    <a class="btn btn-lg btn-default" style="background: transparent; color: #FFFFFF;" href="{{url('/plan/3/channels')}}" role="button" data-toggle="modal" data-target="#miraModal">Ver Canales</a>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" style="background: url('{{ url('/images') }}/plan3.jpg')" class="tab-pane fade" id="plan4">
                            <div class="container animated slideInLeft">
                                <div class="col-lg-6">
                                    <span class="icon-plans icon-total"></span>
                                    <h1 class="color-total"><span>Plan</span><br> TOTAL</h1>
                                    <p>contratelo desde:</p>
                                    <h1 class="price">$25.000</h1>
                                    <ul>
                                        <li class="color-total">Incluye 1 decodificador <b>HD</b></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <h2><span class="color-total">182</span> Canales de TV.</h2>
                                    <ul>
                                        <li>10 Canales Nacionales Standar (SD)</li>
                                        <li>80 Canales Standar (SD)</li>
                                        <li>06 Canales Nacionales en Alta Definición (HD)</li>
                                        <li>57 Canales Nacionales en Altas Definición (HD)</li>
                                    </ul>
                                </div>
                                <div class="col-lg-12">
                                    <a class="btn btn-lg btn-default color-total" style="background: #FFFFFF; color: #444444;" href="{{url('/plan/4/hire')}}" role="button" data-toggle="modal" data-target="#miraModal">Contratar</a>
                                    <a class="btn btn-lg btn-default" style="background: transparent; color: #FFFFFF;" href="{{url('/plan/4/channels')}}" role="button" data-toggle="modal" data-target="#miraModal">Ver Canales</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <section class="section-plans-tv">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" >
                    <ul class="plans-tv" role="tablist">
                        <li class="active" role="presentation"><a href="#plan1" aria-controls="home" role="tab" data-toggle="tab"><span>Plan</span> BASE</a><span class="circle icon-base"></span></li>
                        <li role="presentation"><a href="#plan2" aria-controls="profile" role="tab" data-toggle="tab"><span>Plan</span> FÚTBOL</a><span class="circle icon-futbol"></span></li>
                        <li role="presentation"><a href="#plan3" aria-controls="messages" role="tab" data-toggle="tab"><span>Plan</span> CINE</a><span class="circle icon-cine"></span></li>
                        <li role="presentation"><a href="#plan4" aria-controls="settings" role="tab" data-toggle="tab"><span>Plan</span> TOTAL</a><span class="circle icon-total"></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section style="min-height: 150px !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-4">
                        <img width="350" height="350" src="{{url('/images/call.jpg')}}" class="rounded mx-auto d-block img-circle" >
                    </div>
                    <div class="col-lg-8">
                        <h3 class="">CONSULTANOS POR TU PLAN</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="col-lg-8">
                            <form id="formConsultar" action="">
                                <span style="border-radius:25px; margin-top: 80px; width: 35px;height: 35px; text-align: center;float: left; background: #282828"><i style="color: white; line-height: 35px; font-size: 25px" class="fa fa-user-o"></i></span><input class="form-control mr-sm-2 " style="border-radius:20px; margin-top: 80px; width: 300px; margin-left: 5px; float: left" type="text" placeholder="Tu Nombre" >
                                <span style="border-radius:25px; margin-top: 15px; width: 35px;height: 35px; text-align: center;float: left; background: #282828; clear: left"><i style="color: white; line-height: 35px; font-size: 25px" class="fa fa-envelope-o"></i></span><input class="form-control mr-sm-2 " style="border-radius:20px; margin-top: 15px; width: 300px;margin-left: 5px; float: left" type="text" placeholder="Tu Correo" >
                            </form>
                            <div id="gracias" style="display: none; color: #4CB686;float: left ">
                                <h3>
                                    Gracias por contactarnos.
                                </h3>
                                <p>
                                    Te llamaremos de inmediato de lunes a viernes de 08:00 a 23:00 hrs. Sábados, domingos y festivos de 10:00 a 21:00 hrs. Fuera de este horario, será durante el día hábil siguiente
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <a id="consultar" class="btn btn-lg btn-default" style="background: #212121; color: #FFFFFF;margin-top: 130px"  >Consultar</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <a href="{{url('/terminos-modal')}}" style="color: #444444; text-decoration: none; " data-toggle="modal" role="button"  data-target="#miraModal">
                                <div class="panel-body text-center" style="height: 348px">
                                    <img  style="margin: 40px;fill: #444444" class="rounded mx-auto d-block hvr-icon-float" src="{{url('/images/icon-term.svg')}}" alt="Generic placeholder " width="100" height="100">
                                    <p style="margin: 0">Conoce nuestros</p>
                                    <h3 style="margin: 0">Términos y Condiciones</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{url('/formas-pago-modal')}}" style="color: #444444; text-decoration: none; " data-toggle="modal" role="button"  data-target="#miraModal">
                        <div class="panel panel-default" style="height: 348px">
                            <div class="panel-body text-center">
                                                        <img style="margin: 40px;fill: #444444"  class="rounded mx-auto d-block hvr-icon-float" src="{{url('/images/icon-pai.svg')}}" alt="Generic placeholder " width="100" height="100">
                                <p style="margin: 0">Conoce nuestras</p>
                                <h3 style="margin: 0">Formas de pago</h3>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{url('/help-center-modal')}}" style="color: #444444; text-decoration: none; " data-toggle="modal" role="button"  data-target="#miraModal">
                        <div class="panel panel-default" style="height: 348px">
                            <div class="panel-body text-center">
                                                        <img  style="margin: 40px;fill: #444444" class="rounded mx-auto d-block hvr-icon-float" src="{{url('/images/icon-help.svg')}}" alt="Generic placeholder " width="100" height="100">
                                <p style="margin: 0">Ayuda con equipo o servicio</p>
                                <h3 style="margin: 0">Sitio ayuda online</h3>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection