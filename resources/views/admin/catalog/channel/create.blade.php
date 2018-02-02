@extends('admin.layout.head')
@section('title','Crear Canal')
@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">@yield('title')</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        @include('flash::message')

        {!! Form::open(['route' => ['channel.store']]) !!}
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
                {{ Form::label('lbl', 'Categorias', ['class' => 'control-label']) }}
                {{ Form::select('categories[]', $categories,null,['class' => 'form-control', 'multiple']) }}
            </div>
            <div class="form-group">
                {{ Form::label('lbl', 'Tipo', ['class' => 'control-label']) }}
                {{ Form::select('type', $types, null,['class' => 'form-control']) }}
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
