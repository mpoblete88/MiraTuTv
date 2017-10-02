@extends('admin.layout.default')
@section('title','Sucursales de Compañia ' . $company->name)


@section('content')

    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>RUT</th>
            <th>Principal</th>
            <th>Estado</th>
        </tr>
        </thead>
        <tbody>

        @foreach($company_branch_offices as  $company_branch_office)

            <tr>
                <td> {{$company_branch_office->id}}</td>
                <td> {{$company_branch_office->name}}</td>
                <td> {{$company_branch_office->rut}}</td>
                <td> {{$company_branch_office->current}}</td>
                <td> {{$company_branch_office->status}}</td>

            </tr>

        @endforeach


        </tbody>
    </table>

@endsection

