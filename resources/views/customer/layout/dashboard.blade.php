<!DOCTYPE html>
<html lang="es">
<head>

    @include('partials.favicon')

    @include('admin.partials.call_to_css')


    <!-- Google Chart Loader before de DOM load -->
    <script src="{{env('URL_SYSTEM')}}/js/chart_loader.js"></script>
</head>

<body>
@include('admin.partials.nav')
        <!-- container -->
<div class="container">
    <div class="container-fluid" style="margin-top: 100px; "></div>

    @yield('content')
</div>

<!-- Modals Dashboard -->
@include('admin.partials.modals')

<!-- Calls to JS -->
@include('admin.partials.call_to_js')

@include('admin.partials.js.formjs')
</body>
</html>