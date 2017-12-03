@extends('admin.layout.default')
@section('title','Usuarios Clientes')


@section('content')


    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Abreviatura</th>
        </tr>
        </thead>
        <tbody>

        @foreach($customers as  $customer)

            <tr>
                <td> {{$customer->id}}</td>
                <td> {{$customer->first_name}}</td>
                <td> {{$customer->last_name}}</td>
                <td> {{$customer->nick_name}}</td>
                <td> {{$customer->email}}</td>
            </tr>

        @endforeach


        </tbody>
    </table>

@endsection

