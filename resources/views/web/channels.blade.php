<div class="modal-header" style="background: #4AA2B2; color: white">
    <button type="button" class="close" data-dismiss="modal" style="color: white">&times;</button>
    <h1 class=""><span>Plan</span><br> <b>BASE</b></h1>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-5">
                <ul class="tabs-plans" role="tablist">
                    <li class="active">
                        <a href="#c-all" role="tab" data-toggle="tab">
                        Todos 153</a>{{--Active al tabs--}}
                    </li>
                    <li>
                        <a href="#c1" role="tab" data-toggle="tab">
                            Culturales 7</a>

                    </li>
                    <li> <a href="#c2" role="tab" data-toggle="tab">
                            Deportes 8</a>

                    </li>
                    <li> <a href="#c3" role="tab" data-toggle="tab">
                            Internacionales 16</a>

                    </li>
                    <li> <a href="#c4" role="tab" data-toggle="tab">
                            Infantiles 10</a>

                    </li>
                    <li> <a href="#c5" role="tab" data-toggle="tab">
                            Música 5</a>

                    </li>
                    <li> <a href="#c6" role="tab" data-toggle="tab">
                            Nacionales 10</a>

                    </li>
                    <li> <a href="#c7" role="tab" data-toggle="tab">
                            Nacionales HD 6</a>

                    </li>
                    <li> <a href="#c8" role="tab" data-toggle="tab">
                            Noticias 5</a>

                    </li>
                    <li> <a href="#c9" role="tab" data-toggle="tab">
                            Peliculas y series 29</a>

                    </li>
                    <li> <a href="#c10" role="tab" data-toggle="tab">
                            Ver listado de señales fijas y variables de servicio de televisíon</a>

                    </li>
                </ul>
            </div>
            <div class="col-lg-7">
                <div class="tab-content" style="float:left;background: #cccccc; width: 100%; height: 400px; overflow: scroll; border-radius:5px; padding: 10px">
                    <div role="tabpanel"  class="tab-pane active fade in" id="c-all">
                        <p>Todos</p>
                        <ul style="list-style: none; padding: 0">
                            @for ($i = 0; $i < 153; $i++)
                            <li style="float: left">
                                <img src="/images/logo/logo_fondo_blanco.png" width="80px" alt="" style="border: 1px solid #000000">
                            </li>
                            @endfor
                        </ul>
                    </div>
                    <div role="tabpanel"  class="tab-pane fade in" id="c1">
                        <p>Culturales</p>
                        <ul style="list-style: none; padding: 0">
                        @for ($i = 0; $i < 7; $i++)
                            <li style="float: left">
                                <img src="/images/logo/logo_fondo_blanco.png" width="80px" alt="" style="border: 1px solid #000000">
                            </li>
                        @endfor
                        </ul>
                    </div>
                    <div role="tabpanel"  class="tab-pane fade in" id="c2">
                        <p>Deportes</p>
                        <ul style="list-style: none; padding: 0">
                            @for ($i = 0; $i < 7; $i++)
                                <li style="float: left">
                                    <img src="/images/logo/logo_fondo_blanco.png" width="80px" alt="" style="border: 1px solid #000000">
                                </li>
                            @endfor
                        </ul>
                    </div>
                    <div role="tabpanel"  class="tab-pane fade in" id="c3">
                        <p>Internacionales</p>
                        <ul style="list-style: none; padding: 0">
                            @for ($i = 0; $i < 8; $i++)
                                <li style="float: left">
                                    <img src="/images/logo/logo_fondo_blanco.png" width="80px" alt="" style="border: 1px solid #000000">
                                </li>
                            @endfor
                        </ul>
                    </div>
                    <div role="tabpanel"  class="tab-pane fade in" id="c4">
                        <p>Infantiles</p>
                        <ul style="list-style: none; padding: 0">
                            @for ($i = 0; $i < 10; $i++)
                                <li style="float: left">
                                    <img src="/images/logo/logo_fondo_blanco.png" width="80px" alt="" style="border: 1px solid #000000">
                                </li>
                            @endfor
                        </ul>
                    </div>
                    <div role="tabpanel"  class="tab-pane fade in" id="c5">
                        <p>Música</p>
                        <ul style="list-style: none; padding: 0">
                            @for ($i = 0; $i < 5; $i++)
                                <li style="float: left">
                                    <img src="/images/logo/logo_fondo_blanco.png" width="80px" alt="" style="border: 1px solid #000000">
                                </li>
                            @endfor
                        </ul>
                    </div>
                    <div role="tabpanel"  class="tab-pane fade in" id="c6">
                        <p>Nacionales</p>
                        <ul style="list-style: none; padding: 0">
                            @for ($i = 0; $i < 10; $i++)
                                <li style="float: left">
                                    <img src="/images/logo/logo_fondo_blanco.png" width="80px" alt="" style="border: 1px solid #000000">
                                </li>
                            @endfor
                        </ul>
                    </div>
                    <div role="tabpanel"  class="tab-pane fade in" id="c7">
                        <p>Nacionales HD</p>
                        <ul style="list-style: none; padding: 0">
                            @for ($i = 0; $i < 6; $i++)
                                <li style="float: left">
                                    <img src="/images/logo/logo_fondo_blanco.png" width="80px" alt="" style="border: 1px solid #000000">
                                </li>
                            @endfor
                        </ul>
                    </div>
                    <div role="tabpanel"  class="tab-pane fade in" id="c8">
                        <p>Noticias</p>
                        <ul style="list-style: none; padding: 0">
                            @for ($i = 0; $i < 5; $i++)
                                <li style="float: left">
                                    <img src="/images/logo/logo_fondo_blanco.png" width="80px" alt="" style="border: 1px solid #000000">
                                </li>
                            @endfor
                        </ul>
                    </div>
                    <div role="tabpanel"  class="tab-pane fade in" id="c9">
                        <p>Peliculas y series</p>
                        <ul style="list-style: none; padding: 0">
                            @for ($i = 0; $i < 29; $i++)
                                <li style="float: left">
                                    <img src="/images/logo/logo_fondo_blanco.png" width="80px" alt="" style="border: 1px solid #000000">
                                </li>
                            @endfor
                        </ul>
                    </div>
                    <div role="tabpanel"  class="tab-pane fade in" id="c10">
                        <p>listado de señales</p>
                        <ul style="list-style: none; padding: 0">
                            @for ($i = 0; $i < 7; $i++)
                                <li style="float: left">
                                    <img src="/images/logo/logo_fondo_blanco.png" width="80px" alt="" style="border: 1px solid #000000">
                                </li>
                            @endfor
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>