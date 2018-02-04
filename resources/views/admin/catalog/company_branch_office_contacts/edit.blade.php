@extends('admin.layout.head')
@section('title','Editar Telefono')
@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">@yield('title')</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        @include('flash::message')
        {!! Form::open(['route' => ['company_branch_office_phones.update', $phone->id], 'method' => 'put']) !!}
        <div class="box-body">

            <div class="form-group">
                {{ Form::label('lbl', 'Telefono', ['class' => 'control-label']) }}
                {{ Form::text('phone', $phone->phone, ['class' => 'form-control' ]) }}
            </div>

            <div class="form-group">
                {{ Form::label('lbl', 'Pais', ['class' => 'control-label']) }}
                {!! Form::selectMultiple('country', $countries, $phone->country->id) !!}
            </div>
            <div class="form-group">
                {{ Form::label('lbl', 'Sucursal', ['class' => 'control-label']) }}
                {!! Form::selectMultiple('branch_office', $branchOffices, $phone->branch_office_address->id)  !!}
            </div>
            <div class="form-group">
                {{ Form::label('lbl', 'Tipo Telefono', ['class' => 'control-label']) }}
                {!! Form::selectMultiple('type_phone', $types, $phone->type->id)  !!}
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
