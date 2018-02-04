@extends('admin.layout.head')
@section('title','Crear Plan')
@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">@yield('title')</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        @include('flash::message')

        {!! Form::open(['route' => ['plan.store']]) !!}
        <div class="box-body">

            <div class="form-group">
                {{ Form::label('lbl', 'Nombre', ['class' => 'control-label']) }}
                {{ Form::text('name', null, ['class' => 'form-control' ]) }}
            </div>
            <div class="form-group">
                {{ Form::label('lbl', 'Codigo', ['class' => 'control-label']) }}
                {{ Form::text('code', null,['class' => 'form-control' ]) }}
            </div>
            <div class="form-group">
                {{ Form::label('lbl', 'Descripcion', ['class' => 'control-label']) }}
                {{ Form::text('description', null,['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('lbl', 'Canales', ['class' => 'control-label']) }}
                {!! Form::selectMultiple('channels[]', $channels, null,['multiple']) !!}
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
