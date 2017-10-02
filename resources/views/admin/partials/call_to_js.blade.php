<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{env('URL_SYSTEM')}}/js/modernizr.custom.js"></script>

<!-- JS for this Template -->

<!-- Var to send URL SYSTEM to Dropzone for reload the page with jquery -->
<script> var url_library = '{!! route('admin_library_index') !!}';</script>

<script src="{{env('URL_SYSTEM')}}/js/dropzone.js"></script>
<script src="{{env('URL_SYSTEM')}}/js/classie.js"></script>
<script src="{{env('URL_SYSTEM')}}/js/main.js"></script>
<script src="{{env('URL_SYSTEM')}}/js/jscolor.min.js"></script>
<script src="{{env('URL_SYSTEM')}}/js/alertify.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

<!--[if lt IE 9]-->
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<!--[endif]-->