@extends('admin.layout.default')
@section('title','Planes')


@section('content')


    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Canales</th>
        </tr>
        </thead>
        <tbody>

        @foreach($plans as  $plan)

            <tr>
                <td> {{$plan->id}}</td>
                <td> {{$plan->code}}</td>
                <td> {{$plan->name}}</td>
                <td> {{$plan->description}}</td>
                <td> {{$plan->channels->count()}}</td>
            </tr>

        @endforeach


        </tbody>
    </table>

@endsection

