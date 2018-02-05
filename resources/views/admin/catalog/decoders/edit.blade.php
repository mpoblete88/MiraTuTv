@extends('admin.layout.head')
@section('title','Editar Decodificadores')
@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">@yield('title')</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        @include('flash::message')

        {!! Form::open(['route' => ['decoders.update', $decoder->id], 'method' => 'put']) !!}
        <div class="box-body">

            <div class="form-group">
                {{ Form::label('lbl', 'Nombre', ['class' => 'control-label']) }}
                {{ Form::text('name', $decoder->name, ['class' => 'form-control' ]) }}
            </div>
            <div class="form-group">
                {{ Form::label('lbl', 'Codigo', ['class' => 'control-label']) }}
                {{ Form::text('code', $decoder->code,['class' => 'form-control' ]) }}
            </div>
            <div class="form-group">
                {{ Form::label('lbl', 'N# Serie', ['class' => 'control-label']) }}
                {{ Form::text('serial_number', $decoder->serial_number,['class' => 'form-control' ]) }}
            </div>
            <div class="form-group">
                {{ Form::label('lbl', 'Plan', ['class' => 'control-label']) }}
                {!!  Form::selectMultiple('plan', $plans, $decoder->plan->id)!!}
            </div>

            <div class="form-group">
                {!! Form::checkbox('activo', true, $decoder->status == 'active') !!}
                {{ Form::label('lbl', 'Activo', ['class' => 'control-label']) }}
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
