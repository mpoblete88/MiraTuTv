@extends('admin.layout.head')
@section('title','Crear Sucursal')
@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">@yield('title')</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        @include('flash::message')
        {!! Form::open(['route' => ['company_branch_office.store']]) !!}
        <div class="box-body">

            <div class="form-group">
                {{ Form::label('lbl', 'Nombre', ['class' => 'control-label']) }}
                {{ Form::text('name', null, ['class' => 'form-control' ]) }}
            </div>
            <div class="form-group">
                {{ Form::label('lbl', 'RUT', ['class' => 'control-label']) }}
                {{ Form::text('rut', null,['class' => 'form-control' ]) }}
            </div>

            <div class="form-group">
                {{ Form::label('lbl', 'Dirección', ['class' => 'control-label']) }}
                {{ Form::text('address', null, ['class' => 'form-control' ]) }}
            </div>

            <div class="form-group">
                {{ Form::label('lbl', 'Numero dirección', ['class' => 'control-label']) }}
                {{ Form::number('number', null, ['class' => 'form-control' ]) }}
            </div>
            <div class="form-group">
                {{ Form::label('lbl', 'Tipo de Propiedad', ['class' => 'control-label']) }}
                {{ Form::select('property', $properties, null, ['class' => 'form-control' ]) }}
            </div>
            <div class="form-group">
                {{ Form::label('lbl', 'Ciudad', ['class' => 'control-label']) }}
                {{ Form::select('city', $cities, null, ['class' => 'form-control' ]) }}
            </div>
            <div class="form-group">
                {{ Form::checkbox('status', true, false) }}
                {{ Form::label('lbl', 'Activo', ['class' => 'control-label']) }}
            </div>


        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            {{ Form::submit('Modificar', ['class' => 'btn btn-success']) }}
        </div>
        <!-- /.box-footer -->
        {!!  Form::close() !!}
    </div>
@endsection
