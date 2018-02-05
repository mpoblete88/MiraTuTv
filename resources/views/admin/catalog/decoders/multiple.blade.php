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

        {!! Form::open(['route' => ['decoders.multiple.post'], 'files' => true]) !!}
        <div class="box-body">

            <div class="form-group">
                {{ Form::label('lbl', 'Archivo', ['class' => 'control-label']) }}
                {!!  Form::file('archive')!!}
            </div>

            <div class="form-group">
                {{ Form::label('lbl', 'Plan', ['class' => 'control-label']) }}
                {!!  Form::selectMultiple('plan', $plans,  null)!!}
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
