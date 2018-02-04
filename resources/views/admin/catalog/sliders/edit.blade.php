@extends('admin.layout.head')
@section('title','Editar Slider')
@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">@yield('title')</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        @include('flash::message')

        {!! Form::open(['route' => ['sliders.update', $slider->id], 'method' => 'put', 'files' => 'true']) !!}
        <div class="box-body">

            <div class="form-group">
                {{ Form::label('lblName', 'Titulo', ['class' => ''])}}
                {{ Form::text('title', $slider->title, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('lblShortName', 'Sub titulo', ['class' => ''])}}

                {{ Form::text('subtitle', $slider->subtitle, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('lblCode','Texto boton', ['class' => ''])}}
                {{ Form::text('text_button', $slider->text_button, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
              {{ Form::label('lblAttachment', 'Adjunto', ['class' => ''])}}
                {{ Form::file("attachment", ['class' => '']) }}

                <h4>Adjunto anterior</h4>
                @if(!is_null($slider->attachment))
                    <img src="{{ asset($slider->attachment->path) }}" alt="" width="200" height="200">
                    @else
                    No hay adjunto aún.
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('lblCode', 'URL', ['class' => ''])}}
                {{ Form::text('url', $slider->url, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('lblDescription', 'Descripcion', ['class' => ''])}}
                {{ Form::textarea('description',$slider->description,['class' => 'form-control']) }}
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
