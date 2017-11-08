@extends('layouts.web')
@section('content')
    <section style="min-height: 100px !important;">
        <div class="container" >
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4 class=""><img  style="margin-right: 10px;fill: #444444" class="" src="{{url('/images/icon-help.svg')}}" alt="Generic placeholder " width="50" height="50"> Centro de ayuda <a href="#" data-toggle="modal" data-target="#miraModal">Mas Informacion</a></h4>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Collapsible Group Item #1
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Collapsible Group Item #2
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Collapsible Group Item #3
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <a href="#" style="color: #444444; text-decoration: none; " data-toggle="modal" role="button"  data-target="#miraModal">
                                <div class="panel-body text-center" style="height: 348px">
                                    <img  style="margin: 40px;fill: #444444" class="rounded mx-auto d-block hvr-icon-float" src="{{url('/images/icon-term.svg')}}" alt="Generic placeholder " width="100" height="100">
                                    <p style="margin: 0">Conoce nuestros</p>
                                    <h3 style="margin: 0">Términos y Condiciones</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <a href="#" style="color: #444444; text-decoration: none; " data-toggle="modal" role="button"  data-target="#miraModal">
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
                        <a href="#" style="color: #444444; text-decoration: none; " data-toggle="modal" role="button"  data-target="#miraModal">
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