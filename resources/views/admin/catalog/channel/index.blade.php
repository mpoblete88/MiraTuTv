@extends('admin.layout.default')
@section('title','Canales Disponibles')


@section('content')


    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Canale</th>
            <th>Tipo</th>
            <th>Estado</th>
            <th>Categoria</th>
            <th>En planes</th>
        </tr>
        </thead>
        <tbody>

        @foreach($channels as  $channel)

            <tr>
                <td>  {{$channel->id}}</td>
                <td> {{$channel->name}}</td>
                <td> {{$channel->code}}</td>
                <td> {{$channel->type->short_name}}</td>
                <td> {{$channel->status}}</td>
                <td> @foreach($channel->category as $category)
                         <li> {{$category->name}}</li>
                     @endforeach
                </td>
                <td> {{$channel->plans->count()}}</td>
                <td> </td>
                <td> </td>
            </tr>

        @endforeach


        </tbody>
    </table>

@endsection

