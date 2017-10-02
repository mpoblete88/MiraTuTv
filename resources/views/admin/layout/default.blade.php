<!DOCTYPE html>
<html lang="es">
<head>

    {{--@include('partials.favicon')--}}

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<body>
@include('admin.partials.nav')

<div class="container">

    <div class="container-fluid" style="margin-top: 100px; "></div>

    <div class="panel panel-primary">

        <div class="panel-heading">
            <h3> @yield('title')</h3>
        </div>

        <div class="panel-body">
            <div>
                @if (trim($__env->yieldContent('add')))
                    <a href="@yield('add')" class="btn btn-primary btn-lg active"
                       role="button">Agregar @yield('to_add')</a>
                @endif
            </div>
            <hr>
            @yield('content')
        </div>
    </div>
</div>

<!-- Modals Default -->
{{--@include('admin.partials.modals')--}}





</body>
</html>
