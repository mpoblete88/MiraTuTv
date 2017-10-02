{{--<body>--}}
<div class="modal-header"
     style="z-index: 100; border: black; background-color:#1C1D22; position: relative; width: 100%; height:88px; padding: 0!important;">

    <button type="button" class="close btn-close-library" data-dismiss="modal" aria-label="Close" style="color: white!important;">
        <span aria-hidden="true">&times;</span>
    </button>
    <div class="dummy-logo" style="z-index: 120">
        <!--Logo-->
        <img src="{{env('URL_SYSTEM')}}/images/logos/logo.png" alt="">
    </div>

    <!--Contenedor de Opciones-->
    <div class="header_library" style="visibility: hidden">

    </div>
</div>

<div class="modal-body" style="padding: 0!important;">
    @yield('content')
</div>



<!--Scripts for Clean Library Modals-->
<script>

    var modalLibrary = $('#libraryImages');
    $(modalLibrary).on('hidden.bs.modal', function (e) {
        $(this).data('bs.modal', null);
    });

    var modalShowImage = $('#showImage');
    $(modalShowImage).on('hidden.bs.modal', function (e) {

        $(this).data('bs.modal', null);
    });
</script>
