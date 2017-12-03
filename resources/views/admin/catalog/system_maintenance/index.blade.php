@extends('admin.layout.default')
@section('title','Mantencion de Sistema')


@section('content')

    @if($sytem_maintenance->count() > 0)
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>status</th>
            <th>title</th>
            <th>subtitle</th>
            <th>background_color</th>
            <th>title_color</th>
            <th>subtitle_color</th>
            <th>footer_text_color</th>
            <th>description</th>
            <th>footer</th>
            <th>font_family</th>
        </tr>
        </thead>
        <tbody>
        @foreach($sytem_maintenance as $maintenance)
            <tr>
                <td> {{$maintenance->id}}</td>

                <td>{{$maintenance->status}}</td>
                <td>{{$maintenance->title}}</td>
                <td>{{$maintenance->subtitle}}</td>
                <td>{{$maintenance->background_color}}</td>
                <td>{{$maintenance->title_color}}</td>
                <td>{{$maintenance->subtitle_color}}</td>
                <td>{{$maintenance->footer_text_color}}</td>
                <td>{{$maintenance->description}}</td>
                <td>{{$maintenance->footer}}</td>
                <td>{{$maintenance->font_family}}</td>
            </tr>

        @endforeach



        </tbody>
    </table>

    @else
        <h1>NO HAY CONFIGURACION VÁLIDA</h1>
    @endif

@endsection

