@extends('admin.layout.head')
@section('title','Editar Administrador')
@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Editar Administrador</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        @include('flash::message')
        {!! Form::open(['route' => ['app_admins.update', $admin->id], 'method' => 'put']) !!}
            <div class="box-body">

                <div class="form-group">
                    {{ Form::label('lbl', 'Nombres', ['class' => 'control-label']) }}
                    {{ Form::text('txtNames', $admin->first_name, ['class' => 'form-control' ]) }}
                </div>
                <div class="form-group">
                    {{ Form::label('lbl', 'Apellidos', ['class' => 'control-label']) }}
                    {{ Form::text('txtLastNames', $admin->last_name,['class' => 'form-control' ]) }}
                </div>
                <div class="form-group">
                    {{ Form::label('lbl', 'Nombre Usuario', ['class' => 'control-label']) }}
                    {{ Form::text('txtNameUser', $admin->nick_name, ['class' => 'form-control' ]) }}
                </div>
                <div class="form-group">
                    {{ Form::label('lbl', 'Correo', ['class' => 'control-label']) }}
                    {{ Form::email('txtEmail', $admin->email, ['class' => 'form-control' ]) }}
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
