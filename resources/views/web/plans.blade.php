@extends('layouts.web')
@section('content')

    <section style="background: #FFFFFF; min-height: 100px !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4 class=""><img  style="fill: #444444; margin-right: 20px" class="rounded mx-auto d-block hvr-icon-float" src="{{url('/images/icon-term.svg')}}" alt="Generic placeholder " width="50" height="50"> TODOS LOS PLANES Incluyen 1 decodificador <b>HD</b> <a href="{{url('/info-decos-hd-modal')}}" data-toggle="modal" data-target="#miraModal">Mas Informacion</a></h4>
                </div>
            </div>
        </div>
    </section>
    <section class="content-plan p-base" style="background: #DDDDDD;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-2">
                        <span class="icon-plans icon-base"></span>
                        <h1 class="color-base pull-left" ><span>Plan</span> <br> BASE</h1>
                    </div>
                    <div class="col-lg-4" style="border-left: 2px solid #444444; padding-left: 20px">
                        <h2><span style="color:#52B1BF;font-weight: 800" >153</span> Canales de TV.</h2>
                        <ul>
                            <li>10 Canales Nacionales Standar (SD)</li>
                            <li>80 Canales Standar (SD)</li>
                            <li>06 Canales Nacionales en Alta Definición (HD)</li>
                            <li>57 Canales Nacionales en Altas Definición (HD)</li>
                        </ul>
                        <a class="btn btn-default" style="background: transparent;color:#52B1BF; border-color:#52B1BF " href="{{url('/plan/1/channels')}}" role="button" data-toggle="modal" data-target="#miraModal">Ver Canales</a>
                    </div>
                    <div class="col-lg-3" style="border-left: 2px solid #444444; padding-left: 20px">
                        <h3><span style="color:#52B1BF;font-weight: 800" >Decodificadores</span> </h3>
                        <ul>
                            <li>INCLUYE 1 Decodificador</li>
                        </ul>
                        <span class="label pull-left" style="background: #52B1BF; padding: 10px; width: 100%; margin-bottom: 10px"> ¿Desea agregar + Decos a tu plan? </span>

                        <span class="label label-default pull-left" style="width: 48%; padding: 7px"> + 2 Deco </span>
                        <span class="label label-default pull-left" style="width: 48%; padding: 7px; margin-left: 5px"> + 3 Deco </span>

                    </div>
                    <div class="col-lg-3" style="border-left: 2px solid #444444; padding-left: 50px">
                        <p>contratelo desde:</p>
                        <h1>$14.500</h1>
                        <p>*Incluye 1 decodificador <b>HD</b></p>
                        <a class="btn btn-lg btn-default" style="width: 200px;height: 70px;font-size: 30px; background: #212121; color: #FFFFFF;" href="{{url('/plan/1/hire')}}" role="button" data-toggle="modal" data-target="#miraModal">Contratar</a>
                        <br>
                        <a href="{{url('/info-plan-modal')}}" data-toggle="modal" data-target="#miraModal">Mas Informacion</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <section class="content-plan p-futbol" style="background: #DDDDDD;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-2">
                        <span class="icon-plans icon-futbol"></span>
                        <h1 class="color-futbol pull-left"><span>Plan</span> <br> FÚTBOL</h1>
                    </div>
                    <div class="col-lg-4" style="border-left: 2px solid #444444; padding-left: 20px">
                        <h2><span style="color:#FFAD20;font-weight: 800">160</span> Canales de TV.</h2>
                        <ul>
                            <li>10 Canales Nacionales Standar (SD)</li>
                            <li>80 Canales Standar (SD)</li>
                            <li>06 Canales Nacionales en Alta Definición (HD)</li>
                            <li>57 Canales Nacionales en Altas Definición (HD)</li>
                        </ul>
                        <a class="btn btn-default" style="background: transparent;color:#FFAD20; border-color:#FFAD20 " href="{{url('/plan/2/channels')}}" role="button" data-toggle="modal" data-target="#miraModal">Ver Canales</a>
                    </div>
                    <div class="col-lg-3" style="border-left: 2px solid #444444; padding-left: 20px">
                        <h3><span style="color:#FFAD20;font-weight: 800" >Decodificadores</span> </h3>
                        <ul>
                            <li>INCLUYE 1 Decodificador</li>
                        </ul>
                        <span class="label pull-left" style="background: #FFAD20; padding: 10px; width: 100%; margin-bottom: 10px"> ¿Desea agregar + Decos a tu plan? </span>

                        <span class="label label-default pull-left" style="width: 48%; padding: 7px"> + 2 Deco </span>
                        <span class="label label-default pull-left" style="width: 48%; padding: 7px; margin-left: 5px"> + 3 Deco </span>

                    </div>
                    <div class="col-lg-3" style="border-left: 2px solid #444444; padding-left: 50px">
                        <p>contratelo desde:</p>
                        <h1>$21.000</h1>
                        <p>*Incluye 1 decodificador <b>HD</b></p>
                        <a class="btn btn-lg btn-default" style="width: 200px;height: 70px;font-size: 30px; background: #212121; color: #FFFFFF;" href="{{url('/plan/2/hire')}}" role="button" data-toggle="modal" data-target="#miraModal">Contratar</a>
                        <br>
                        <a href="{{url('/info-plan-modal')}}" data-toggle="modal" data-target="#miraModal">Mas Informacion</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <br>
    <section class="content-plan p-cine" style="background: #DDDDDD;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-2">
                        <span class="icon-plans icon-cine"></span>
                        <h1 class="color-cine pull-left"><span>Plan</span> <br> CINE</h1>
                    </div>
                    <div class="col-lg-4" style="border-left: 2px solid #444444; padding-left: 20px">
                        <h2><span style="color:#E91D62;font-weight: 800" >175</span> Canales de TV.</h2>
                        <ul>
                            <li>10 Canales Nacionales Standar (SD)</li>
                            <li>80 Canales Standar (SD)</li>
                            <li>06 Canales Nacionales en Alta Definición (HD)</li>
                            <li>57 Canales Nacionales en Altas Definición (HD)</li>
                        </ul>
                        <a class="btn btn-default" style="background: transparent;color:#E91D62; border-color:#E91D62 " href="{{url('/plan/3/channels')}}" role="button" data-toggle="modal" data-target="#miraModal">Ver Canales</a>

                    </div>
                    <div class="col-lg-3" style="border-left: 2px solid #444444; padding-left: 20px">
                        <h3><span style="color:#E91D62;font-weight: 800" >Decodificadores</span> </h3>
                        <ul>
                            <li>INCLUYE 1 Decodificador</li>
                        </ul>
                        <span class="label pull-left" style="background: #E91D62; padding: 10px; width: 100%; margin-bottom: 10px"> ¿Desea agregar + Decos a tu plan? </span>

                        <span class="label label-default pull-left" style="width: 48%; padding: 7px"> + 2 Deco </span>
                        <span class="label label-default pull-left" style="width: 48%; padding: 7px; margin-left: 5px"> + 3 Deco </span>

                    </div>
                    <div class="col-lg-3" style="border-left: 2px solid #444444; padding-left: 50px">
                        <p>contratelo desde:</p>
                        <h1>$20.000</h1>
                        <p>*Incluye 1 decodificador <b>HD</b></p>
                        <a class="btn btn-lg btn-default" style="width: 200px;height: 70px;font-size: 30px; background: #212121; color: #FFFFFF;" href="{{url('/plan/3/hire')}}" role="button" data-toggle="modal" data-target="#miraModal">Contratar</a>
                        <br>
                        <a href="{{url('/info-plan-modal')}}" data-toggle="modal" data-target="#miraModal">Mas Informacion</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <br>
    <section class="content-plan p-total" style="background: #DDDDDD;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-2">
                        <span class="icon-plans icon-total"></span>
                        <h1 class="color-total pull-left"><span>Plan</span> <br> TOTAL</h1>
                    </div>
                    <div class="col-lg-4" style="border-left: 2px solid #444444; padding-left: 20px">
                        <h2><span style="color:#47AA71;font-weight: 800" >182</span> Canales de TV.</h2>
                        <ul>
                            <li>10 Canales Nacionales Standar (SD)</li>
                            <li>80 Canales Standar (SD)</li>
                            <li>06 Canales Nacionales en Alta Definición (HD)</li>
                            <li>57 Canales Nacionales en Altas Definición (HD)</li>
                        </ul>
                        <a class="btn btn-default" style="background: transparent;color:#47AA71; border-color:#47AA71 " href="{{url('/plan/4/channels')}}" role="button" data-toggle="modal" data-target="#miraModal">Ver Canales</a>
                    </div>
                    <div class="col-lg-3" style="border-left: 2px solid #444444; padding-left: 20px">
                        <h3><span style="color:#47AA71;font-weight: 800" >Decodificadores</span> </h3>
                        <ul>
                            <li>INCLUYE 1 Decodificador</li>
                        </ul>
                        <span class="label pull-left" style="background: #47AA71; padding: 10px; width: 100%; margin-bottom: 10px"> ¿Desea agregar + Decos a tu plan? </span>

                        <span class="label label-default pull-left" style="width: 48%; padding: 7px"> + 2 Deco </span>
                        <span class="label label-default pull-left" style="width: 48%; padding: 7px; margin-left: 5px"> + 3 Deco </span>

                    </div>
                    <div class="col-lg-3" style="border-left: 2px solid #444444; padding-left: 50px">
                        <p>contratelo desde:</p>
                        <h1>$25.000</h1>
                        <p>*Incluye 1 decodificador <b>HD</b></p>
                        <a class="btn btn-lg btn-default" style="width: 200px;height: 70px;font-size: 30px; background: #212121; color: #FFFFFF;" href="{{url('/plan/4/hire')}}" role="button" data-toggle="modal" data-target="#miraModal">Contratar</a>
                        <br>
                        <a href="{{url('/info-plan-modal')}}" data-toggle="modal" data-target="#miraModal">Mas Informacion</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <br>
@endsection