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
                {{ Form::label('lbl', 'Numero de Propiedad (En caso de ser necesario)', ['class' => 'control-label']) }}
                {{ Form::number('property_number', null, ['class' => 'form-control' ]) }}
            </div>
            <div class="form-group">
                {{ Form::label('lbl', 'Comuna', ['class' => 'control-label']) }}
                {!! Form::selectMultiple('commune', $communes, null)  !!}
            </div>
            <div class="form-group">
                {{ Form::checkbox('status', true, true) }}
                {{ Form::label('lbl', 'Activo', ['class' => 'control-label']) }}
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
