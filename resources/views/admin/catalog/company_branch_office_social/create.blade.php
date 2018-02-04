@extends('admin.layout.head')
@section('title','Crear Red Social')
@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">@yield('title')</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        @include('flash::message')
        {!! Form::open(['route' => ['company_branch_office_social.store']]) !!}
        <div class="box-body">

            <div class="form-group">
                {{ Form::label('lbl', 'URL', ['class' => 'control-label']) }}
                {{ Form::text('url', null, ['class' => 'form-control' ]) }}
            </div>

            <div class="form-group">
                {{ Form::label('lbl', 'Sucursal', ['class' => 'control-label']) }}
                {!! Form::selectMultiple('branch_office', $branchOffices, null)  !!}
            </div>
            <div class="form-group">
                {{ Form::label('lbl', 'Red Social', ['class' => 'control-label']) }}
                {!! Form::selectMultiple('type', $types, null)  !!}
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
