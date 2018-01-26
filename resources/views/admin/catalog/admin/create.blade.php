@extends('admin.layout.head')
@section('title','Crear Administrador')
@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Crear Administrador</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        @include('flash::message')
        {!! Form::open(['route' => ['app_admins.store']]) !!}
            <div class="box-body">

                <div class="form-group">
                    {{ Form::label('lbl', 'Nombres', ['class' => 'control-label']) }}
                    {{ Form::text('txtNames', null, ['class' => 'form-control' ]) }}
                </div>
                <div class="form-group">
                    {{ Form::label('lbl', 'Apellidos', ['class' => 'control-label']) }}
                    {{ Form::text('txtLastNames', null,['class' => 'form-control' ]) }}
                </div>
                <div class="form-group">
                    {{ Form::label('lbl', 'Nombre Usuario', ['class' => 'control-label']) }}
                    {{ Form::text('txtNameUser', null, ['class' => 'form-control' ]) }}
                </div>
                <div class="form-group">
                    {{ Form::label('lbl', 'Correo', ['class' => 'control-label']) }}
                    {{ Form::email('txtEmail', null, ['class' => 'form-control' ]) }}
                </div>

            <div class="form-group">
                {{ Form::label('lbl', 'Contraseña', ['class' => 'control-label']) }}
                {{ Form::password('txtPassword', ['class' => 'form-control' ]) }}
            </div>

    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        {{ Form::submit('Crear', ['class' => 'btn btn-success']) }}
    </div>
    <!-- /.box-footer -->
    {!!  Form::close() !!}
    </div>
@endsection
