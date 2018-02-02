@extends('admin.layout.head')
@section('title','Comapañia')
@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">@yield('title')</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        @include('flash::message')

        {!! Form::open(['route' => ['channel.update', $company->id], 'method' => 'put']) !!}
        <div class="box-body">
            <div class="form-group">
                {{ Form::label('lblDescription', 'Nombre', ['class' => ''])}}
                {{ Form::text('name', $company->name, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('lblDescription', 'Nombre corto', ['class' => ''])}}
                {{ Form::text('short_name', $company->short_name, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('lblDescription', 'Sitio WEB', ['class' => ''])}}
                {{ Form::text('web_site', $company->web_site, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('lblFavicon', 'Favicon', ['class' => ''])}}
                {{ Form::file("favicon", ['class' => '']) }}


                <img alt="*" src="{{ asset($company->favicon_path) }}">

            </div>
            <div class="form-group">
                {{ Form::label('lblLogo', 'Logo', ['class' => ''])}}

                {{ Form::file("logo_path", ['class' => '']) }}


                <img alt="*" src="{{ asset($company->logo_path) }}" height="80" width="80">


            </div>
            <div class="form-group">
                {{ Form::label('lblLogoDark', 'Logo Oscuro', ['class' => ''])}}

                {{ Form::file("logo_dark_path", ['class' => '']) }}


                <img alt="*" src="{{ asset($company->logo_dark_path) }}" height="80" width="80">


            </div>
            <div class="form-group">
                {{ Form::label('lblLogoLight', 'Logo claro', ['class' => ''])}}
                {{ Form::file("logo_light_path", ['class' => '']) }}
                <img alt="*" src="{{ asset($company->logo_light_path) }}" height="80" width="80">

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
