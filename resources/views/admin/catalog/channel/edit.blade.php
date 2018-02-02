@extends('admin.layout.head')
@section('title','Editar Canal')
@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">@yield('title')</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        @include('flash::message')

        {!! Form::open(['route' => ['channel.update', $channel->id], 'method' => 'put']) !!}
        <div class="box-body">
            <div class="form-group">
                {{ Form::label('lbl', 'Nombre', ['class' => 'control-label']) }}
                {{ Form::text('name', $channel->name, ['class' => 'form-control' ]) }}
            </div>
            <div class="form-group">
                {{ Form::label('lbl', 'Codigo', ['class' => 'control-label']) }}
                {{ Form::text('code', $channel->code,['class' => 'form-control' ]) }}
            </div>
            <div class="form-group">
                {{ Form::label('lbl', 'Categorias', ['class' => 'control-label']) }}
                {{ Form::select('categories[]', $categories, $channel->category->pluck('id'),['class' => 'form-control', 'multiple']) }}
            </div>
            <div class="form-group">
                {{ Form::label('lbl', 'Tipo', ['class' => 'control-label']) }}
                {{ Form::select('type', $types, $channel->type->id,['class' => 'form-control']) }}
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
