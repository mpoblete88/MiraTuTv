@extends('admin.layout.default')
@section('title','Datos de Compañia')


@section('content')

    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Nombre Corto</th>
            <th>Pagina Web</th>
            <th>Favicon</th>
            <th>Logo</th>
            <th>Logo Oscuro</th>
            <th>Logo Suave</th>
        </tr>
        </thead>
        <tbody>

        @foreach($companies as  $company)

            <tr>
                <td>  {{$company->id}}</td>
                <td><a href="{{route('company_branch_office.index', $company->id)}}">{{$company->name}}</a> </td>
                <td> {{$company->short_name}}</td>
                <td> {{$company->web_site}}</td>
                <td> {{$company->favicon_path}}</td>
                <td> {{$company->logo_path}}</td>
                <td> {{$company->logo_dark_path}}</td>
                <td> {{$company->logo_light_path}}</td>
            </tr>

        @endforeach


        </tbody>
    </table>

@endsection

