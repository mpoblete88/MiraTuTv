@extends('admin.layout.head')
@section('title','Mantencion de Sistema')


@section('content')
    <div class="box" id="boxHeader">
        <div class="box-header with-border">
            <h3 class="box-title">@yield('title') </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            @include('admin.layout.error')
            @include('flash::message')

            {!! Form::open(['route' => ['system_maintenance.update', $maintenance->id], 'method' => 'put', 'files' => true]) !!}

            <div class="form-group">
                {{ Form::label('lblName', 'Titulo', ['class' => ''])}}
                {{ Form::text('txtTitle', $maintenance->title, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('lblDescription','Sub titulo', ['class' => ''])}}
                {{ Form::text('txtSubTitle', $maintenance->subtitle, ['class' => 'form-control'])}}
            </div>

            <div class="form-group input-group">
                {{ Form::label('lblDescription', 'Color de fondo', ['class' => ''])}}
                {!! Form::colorPicker('txtBackgroundColor', $maintenance->background_color) !!}
            </div>

            <div class="form-group input-group">
                {{ Form::label('lblDescription', 'Color del titulo', ['class' => ''])}}
                {!! Form::colorPicker('txtTitleColor', $maintenance->title_color)!!}
            </div>
            <div class="form-group input-group">
                {{ Form::label('lblDescription', 'Color del Subtitulo', ['class' => ''])}}
                {!! Form::colorPicker('txtSubtitleColor', $maintenance->subtitle_color)!!}
            </div>


            <div class="form-group input-group">
                {{ Form::label('lblDescription', 'Color de texto del pie de Página', ['class' => ''])}}
                {!! Form::colorPicker('txtFooterColor', $maintenance->footer_text_color)!!}
            </div>

            <div class="form-group">
                {{ Form::label('lblDescription','Fuente', ['class' => ''])}}
                {!! Form::selectMultiple('txtFontFamily', $fontsGoogle,  $maintenance->font_family) !!}
            </div>

            <div class="form-group">
                {{ Form::label('lblDescription', 'Descripción', ['class' => ''])}}
                {{ Form::textarea('txtDescription', $maintenance->description, ['class' => 'form-control'])}}
            </div>

            <div class="form-group">
                {{ Form::label('lblDescription', 'Pie de página', ['class' => ''])}}
                {{ Form::textarea('txtFooter', $maintenance->footer, ['class' => 'form-control'])}}
            </div>


            <div class="form-group">
                {{ Form::checkbox('isActivate', 'true', $maintenance->status == 1)}}
                {{ Form::label('lblDescription', 'Activar', ['class' => ''])}}
            </div>


            {{ Form::submit('Actualizar', ['class' => 'btn btn-success']) }}
            {!! Form::close() !!}
        </div>
        <!-- /.box-body -->
    </div>
@endsection

