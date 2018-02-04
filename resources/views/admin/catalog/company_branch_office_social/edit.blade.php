@extends('admin.layout.head')
@section('title','Editar Red Social')
@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">@yield('title')</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        @include('flash::message')
        {!! Form::open(['route' => ['company_branch_office_social.update',$social->id], 'method' => 'put']) !!}
        <div class="box-body">

            <div class="form-group">
                {{ Form::label('lbl', 'URL', ['class' => 'control-label']) }}
                {{ Form::text('url', $social->url, ['class' => 'form-control' ]) }}
            </div>

            <div class="form-group">
                {{ Form::label('lbl', 'Sucursal', ['class' => 'control-label']) }}
                {!! Form::selectMultiple('branch_office', $branchOffices, $social->branch_office->id)  !!}
            </div>
            <div class="form-group">
                {{ Form::label('lbl', 'Red Social', ['class' => 'control-label']) }}
                {!! Form::selectMultiple('type', $types, $social->type->id)  !!}
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
