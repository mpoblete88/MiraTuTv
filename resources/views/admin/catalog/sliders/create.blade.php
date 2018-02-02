@extends('admin.layout.head')
@section('title','Crear Slider')
@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">@yield('title')</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        @include('flash::message')

        {!! Form::open(['route' => ['sliders.store'], 'files' => 'true']) !!}
        <div class="box-body">

            <div class="form-group">
                {{ Form::label('lblName', 'Titulo', ['class' => ''])}}
                {{ Form::text('title', null, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('lblShortName', 'Sub titulo', ['class' => ''])}}

                {{ Form::text('subtitle', null, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('lblCode','Texto boton', ['class' => ''])}}
                {{ Form::text('text_button', null, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
              {{ Form::label('lblAttachment', 'Adjunto', ['class' => ''])}}
                {{ Form::file("attachment", ['class' => '']) }}
            </div>
            <div class="form-group">
                {{ Form::label('lblCode', 'URL', ['class' => ''])}}
                {{ Form::text('url', null, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('lblDescription', 'Descripcion', ['class' => ''])}}
                {{ Form::textarea('description',null,['class' => 'form-control']) }}
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
