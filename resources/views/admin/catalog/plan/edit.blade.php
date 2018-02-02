@extends('admin.layout.head')
@section('title','Editar Plan')
@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">@yield('title')</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        @include('flash::message')

        {!! Form::open(['route' => ['plan.update', $plan->id], 'method' => 'put']) !!}
        <div class="box-body">

            <div class="form-group">
                {{ Form::label('lbl', 'Nombre', ['class' => 'control-label']) }}
                {{ Form::text('name', $plan->name, ['class' => 'form-control' ]) }}
            </div>
            <div class="form-group">
                {{ Form::label('lbl', 'Codigo', ['class' => 'control-label']) }}
                {{ Form::text('code', $plan->code,['class' => 'form-control' ]) }}
            </div>
            <div class="form-group">
                {{ Form::label('lbl', 'Descripcion', ['class' => 'control-label']) }}
                {{ Form::text('description', $plan->description,['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('lbl', 'Canales', ['class' => 'control-label']) }}
                {{ Form::select('channels[]', $channels,$plan->channels->pluck('id'),['class' => 'form-control', 'multiple']) }}
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
