@extends('layouts.web')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane animated slideInLeft active" id="plan1"><h1 class="">slider Plan BASE</h1></div>
                        <div role="tabpanel" class="tab-pane animated slideInLeft" id="plan2"><h1 class="">slider Plan FÚTBOL</h1></div>
                        <div role="tabpanel" class="tab-pane animated slideInLeft" id="plan3"><h1 class="">slider Plan CINE</h1></div>
                        <div role="tabpanel" class="tab-pane animated slideInLeft" id="plan4"><h1 class="">slider Plan TOTAL</h1></div>
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
                            <input class="form-control mr-sm-2 " style="border-radius:20px; margin-top: 80px; width: 300px" type="text" placeholder="Tu Nombre" aria-label="Search">
                            <input class="form-control mr-sm-2 " style="border-radius:20px; margin-top: 15px; width: 300px" type="text" placeholder="Tu Correo" aria-label="Search">
                        </div>
                        <div class="col-lg-4">

                            <a class="btn btn-lg btn-default" style="background: #212121; color: #FFFFFF;margin-top: 130px" href="#" role="button">Consultar</a>
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
                            <div class="panel-body text-center" style="height: 348px">
                                                        <img  style="margin: 40px;fill: #444444" class="rounded mx-auto d-block hvr-icon-float" src="{{url('/images/icon-term.svg')}}" alt="Generic placeholder " width="100" height="100">
                                <p style="margin: 0">Conoce nuestros</p>
                                <h3 style="margin: 0">Términos y Condiciones</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default" style="height: 348px">
                            <div class="panel-body text-center">
                                                        <img style="margin: 40px;fill: #444444"  class="rounded mx-auto d-block hvr-icon-float" src="{{url('/images/icon-pai.svg')}}" alt="Generic placeholder " width="100" height="100">
                                <p style="margin: 0">Conoce nuestras</p>
                                <h3 style="margin: 0">Formas de pago</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default" style="height: 348px">
                            <div class="panel-body text-center">
                                                        <img  style="margin: 40px;fill: #444444" class="rounded mx-auto d-block hvr-icon-float" src="{{url('/images/icon-help.svg')}}" alt="Generic placeholder " width="100" height="100">
                                <p style="margin: 0">Ayuda con equipo o servicio</p>
                                <h3 style="margin: 0">Sitio ayuda online</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection