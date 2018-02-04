@extends('admin.layout.head')
@section('title','Modificar Sucursal')
@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">@yield('title')</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        @include('flash::message')
        {!! Form::open(['route' => ['company_branch_office.update', $company_branch_office->id], 'method' => 'put']) !!}
        <div class="box-body">

            <div class="form-group">
                {{ Form::label('lbl', 'Nombre', ['class' => 'control-label']) }}
                {{ Form::text('name', $company_branch_office->name, ['class' => 'form-control' ]) }}
            </div>
            <div class="form-group">
                {{ Form::label('lbl', 'RUT', ['class' => 'control-label']) }}
                {{ Form::text('rut', $company_branch_office->rut,['class' => 'form-control' ]) }}
            </div>

            <div class="form-group">
                {{ Form::label('lbl', 'Dirección', ['class' => 'control-label']) }}
                {{ Form::text('address', $company_branch_office->address->address, ['class' => 'form-control' ]) }}
            </div>

            <div class="form-group">
                {{ Form::label('lbl', 'Numero dirección', ['class' => 'control-label']) }}
                {{ Form::number('number', $company_branch_office->address->number, ['class' => 'form-control' ]) }}
            </div>
            <div class="form-group">
                {{ Form::label('lbl', 'Tipo de Propiedad', ['class' => 'control-label']) }}
                {{ Form::select('property', $properties,  $company_branch_office->address->property->id, ['class' => 'form-control' ]) }}
            </div>
            <div class="form-group">
                {{ Form::label('lbl', 'Numero de Propiedad (En caso de ser necesario)', ['class' => 'control-label']) }}
                {{ Form::number('property_number',  $company_branch_office->address->property_number, ['class' => 'form-control' ]) }}
            </div>
            <div class="form-group">
                {{ Form::label('lbl', 'Comuna', ['class' => 'control-label']) }}
                {!! Form::selectMultiple('commune', $communes,  $company_branch_office->address->commune->id)  !!}
            </div>
            <div class="form-group">
                {{ Form::checkbox('status', true, true) }}
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
