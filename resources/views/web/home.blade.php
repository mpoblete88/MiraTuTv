@extends('layouts.web')
<style>
    @section('style')
    .plans-tv{
        width: 100%;
    }
    .plans-tv li{
        float: left;
        width: 22%;
        text-align: center;
        height: 200px;
        display: inline-block;
    }
    .plans-tv li a{
        float: left;
        width: 100%;
    }
    .plans-tv li a:after{
        width: 150px;
        height: 150px;
        content: "";
        border-radius: 50%;
        background: #212121;
        float: left;
        margin-top: 20px;
        margin-left: 50px;
    }
    .plans-tv li:nth-of-type(1) a:hover:after,.plans-tv li:nth-of-type(1).active a:after{
        background: #52B1BF;

    }
    .plans-tv li:nth-of-type(2) a:hover:after,.plans-tv li:nth-of-type(2).active a:after{
        background: #FFAD20
    }
    .plans-tv li:nth-of-type(3) a:hover:after,.plans-tv li:nth-of-type(3).active a:after{
        background: #E91D62;

    }
    .plans-tv li:nth-of-type(4) a:hover:after,.plans-tv li:nth-of-type(4).active a:after{
        background: #4CB686;

    }
    @endsection
</style>
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="plan1"><h1 class="">slider Plan BASE</h1></div>
                        <div role="tabpanel" class="tab-pane" id="plan2"><h1 class="">slider Plan FÚTBOL</h1></div>
                        <div role="tabpanel" class="tab-pane" id="plan3"><h1 class="">slider Plan CINE</h1></div>
                        <div role="tabpanel" class="tab-pane" id="plan4"><h1 class="">slider Plan TOTAL</h1></div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" >
                    <ul class="plans-tv" role="tablist">
                        <li role="presentation" class="active"><a href="#plan1" aria-controls="home" role="tab" data-toggle="tab">Plan BASE</a><span class="circle"></span></li>
                        <li role="presentation"><a href="#plan2" aria-controls="profile" role="tab" data-toggle="tab">Plan FÚTBOL</a><span class="circle"></span></li>
                        <li role="presentation"><a href="#plan3" aria-controls="messages" role="tab" data-toggle="tab">Plan CINE</a><span class="circle"></span></li>
                        <li role="presentation"><a href="#plan4" aria-controls="settings" role="tab" data-toggle="tab">Plan TOTAL</a><span class="circle"></span></li>
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
                        <img width="350" height="350" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15edb4ff769%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15edb4ff769%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.125%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" class="rounded mx-auto d-block img-circle" >
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
                                                        <img  style="margin: 40px" class="rounded mx-auto d-block img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="160" height="160">
                                <p style="margin: 0">Conoce nuestros</p>
                                <h3 style="margin: 0">Términos y Condiciones</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default" style="height: 348px">
                            <div class="panel-body text-center">
                                                        <img style="margin: 40px"  class="rounded mx-auto d-block img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="160" height="160">
                                <p style="margin: 0">Conoce nuestras</p>
                                <h3 style="margin: 0">Formas de pago</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default" style="height: 348px">
                            <div class="panel-body text-center">
                                                        <img  style="margin: 40px" class="rounded mx-auto d-block img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="160" height="160">
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