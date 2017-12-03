<div class="modal-body" style="background:#D8D8D8 ">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h3>Ingresa tus Datos</h3>
    @if(url()->current() == url('/plan/1/hire'))
    <p>para contratar Plan Base</p>
    @elseif(url()->current() == url('/plan/2/hire'))
        <p>para contratar Plan Fútbol</p>

    @elseif(url()->current() == url('/plan/3/hire'))
        <p>para contratar Plan Cine</p>

    @elseif(url()->current() == url('/plan/4/hire'))
        <p>para contratar Plan Total</p>

    @endif
    <div class="row">
        <form action="">

        <div class="col-lg-12">

        </div>
        <div class="col-lg-6">
            <span style="float: left; line-height: 50px; "><h5>RUT</h5></span> <input class="form-control mr-sm-2 " style="border-radius:20px; float: right; width: 200px" type="text" placeholder="Ej: 13454364-K" >
            <span style="float: left; line-height: 50px; clear: left"><h5>Telefono</h5></span><input class="form-control mr-sm-2 " style="border-radius:20px; float: right; width: 200px" type="text" placeholder="Ej: 998643214 (9 digitos)" >
        </div>
        <div class="col-lg-6">

            <a class="btn btn-lg btn-default" style="width: 200px; height: 70px; font-size: 30px; background: rgb(33, 33, 33); color: rgb(255, 255, 255);" href="#" role="button" data-toggle="modal" data-target="#miraModal">Contratar</a>
        </div>
        <div class="col-lg-12">
            <p style="font-size: 10px; font-weight: 900">Te llamaremos de inmediato de lunes a viernes de 08:00 a 23:00 hrs. Sábados, domingos y festivos de 10:00 a 21:00 hrs.
                Fuera de este horario, será durante el día hábil siguiente</p>
        </div>
        </form>
    </div>


</div>