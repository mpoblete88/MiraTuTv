@extends('admin.layout.default')
@section('title','Usuarios Administradores')


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

        @foreach($admins as  $admin)

            <tr>
                <td> {{$admin->id}}</td>
                <td> {{$admin->first_name}}</td>
                <td> {{$admin->last_name}}</td>
                <td> {{$admin->nick_name}}</td>
                <td> {{$admin->email}}</td>
            </tr>

        @endforeach


        </tbody>
    </table>

@endsection

