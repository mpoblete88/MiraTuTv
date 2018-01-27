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
                {{ Form::text('txtBackgroundColor', $maintenance->background_color, ['class' => 'form-control colorPicker colorpicker-element'])}}
            </div>

            <div class="form-group input-group">
                {{ Form::label('lblDescription', 'Color del titulo', ['class' => ''])}}
                {{ Form::text('txtTitleColor', $maintenance->title_color, ['class' => 'form-control colorPicker colorpicker-element'])}}
            </div>
            <div class="form-group input-group">
                {{ Form::label('lblDescription', 'Color del Subtitulo', ['class' => ''])}}
                {{ Form::text('txtSubtitleColor', $maintenance->subtitle_color, ['class' => 'form-control colorPicker colorpicker-element'])}}
            </div>


            <div class="form-group input-group">
                {{ Form::label('lblDescription', 'Color de texto del pie de Página', ['class' => ''])}}
                {{ Form::text('txtFooterColor', $maintenance->footer_text_color, ['class' => 'form-control colorPicker colorpicker-element'])}}
            </div>

            <div class="form-group">
                {{ Form::label('lblDescription','Fuente', ['class' => ''])}}
                {{ Form::select('txtFontFamily', $fontsGoogle,  $maintenance->font_family, ['class' => 'form-control'])}}
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
                {{ Form::checkbox('isActivate', null, $maintenance->status == 1 ? true : false)}}

                {{ Form::label('lblDescription', 'Activar', ['class' => ''])}}
            </div>


            {{ Form::submit('Actualizar', ['class' => 'btn btn-success']) }}
            {!! Form::close() !!}
        </div>
        <!-- /.box-body -->
    </div>
@endsection

