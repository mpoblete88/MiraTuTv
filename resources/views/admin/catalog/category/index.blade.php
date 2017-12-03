@extends('admin.layout.default')
@section('title','Categoria')


@section('content')


    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Descripcion</th>
        </tr>
        </thead>
        <tbody>

        @foreach($categories as  $category)

            <tr>
                <td> {{$category->id}}</td>
                <td> {{$category->name}}</td>
                <td> {{$category->description}}</td>
            </tr>

        @endforeach


        </tbody>
    </table>

@endsection

