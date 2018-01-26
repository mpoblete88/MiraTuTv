@extends('admin.layout.head')
@section('title','Editar Cliente')
@section('extra_scripts')
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.min.css')}}">
    <script src="{{ asset('/js/bootstrap-datepicker.js') }}"></script>
    <script>
        $(document).ready(function()
        {
            $('.datepicker').datepicker();
        });
    </script>
@endsection
@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">@yield('title')</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        @include('flash::message')
        {!! Form::open(['route' => ['app_customers.update', $customer->id], 'method' => 'put']) !!}
        <div class="box-body">

            <div class="form-group">
                {{ Form::label('lbl', 'RUT', ['class' => 'control-label']) }}
                {{ Form::text('txtRut', $customer->rut, ['class' => 'form-control' ]) }}
            </div>

            <div class="form-group">
                {{ Form::label('lbl', 'Nombres', ['class' => 'control-label']) }}
                {{ Form::text('txtNames', $customer->first_name, ['class' => 'form-control' ]) }}
            </div>
            <div class="form-group">
                {{ Form::label('lbl', 'Apellidos', ['class' => 'control-label']) }}
                {{ Form::text('txtLastNames', $customer->last_name,['class' => 'form-control' ]) }}
            </div>
            <div class="form-group">
                {{ Form::label('lbl', 'Nombre Usuario', ['class' => 'control-label']) }}
                {{ Form::text('txtNameUser', $customer->nick_name, ['class' => 'form-control' ]) }}
            </div>
            <div class="form-group">
                {{ Form::label('lbl', 'Correo', ['class' => 'control-label']) }}
                {{ Form::email('txtEmail', $customer->email, ['class' => 'form-control' ]) }}
            </div>

            <div class="form-group">
                {{ Form::label('lbl', 'Fecha Nacimiento', ['class' => 'control-label']) }}
                {{ Form::text('dtpBorn', $customer->birthdate, ['class' => 'datepicker form-control' ]) }}
            </div>
            <div class="form-group">
                {{ Form::label('lbl', 'Contraseña', ['class' => 'control-label']) }}
                {{ Form::password('txtPassword', ['class' => 'form-control' ]) }}
            </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            {{ Form::submit('Editar', ['class' => 'btn btn-success']) }}
        </div>
        <!-- /.box-footer -->
        {!!  Form::close() !!}
    </div>
@endsection
