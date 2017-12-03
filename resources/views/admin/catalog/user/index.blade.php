@extends('admin.layout.default')
@section('title','Usuarios Vendedores')


@section('content')


    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Nick</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>

        @foreach($users as  $users)

            <tr>
                <td> {{$users->id}}</td>
                <td> {{$users->first_name}}</td>
                <td> {{$users->last_name}}</td>
                <td> {{$users->nick_name}}</td>
                <td> {{$users->email}}</td>
            </tr>

        @endforeach


        </tbody>
    </table>

@endsection

