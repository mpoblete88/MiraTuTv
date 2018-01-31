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

                {{ Form::checkbox('status', true, $company_branch_office->status == 'active') }}
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
