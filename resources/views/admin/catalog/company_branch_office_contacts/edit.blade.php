@extends('admin.layout.head')
@section('title','Editar Telefono')
@section('extra_scripts')
    <script>
        $(document).ready(function () {
            $('#phones').select2({
                tags: true,
                tokenSeparators: [',', ' ']
            })
        });
    </script>
@endsection
@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">@yield('title')</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        @include('flash::message')
        {!! Form::open(['route' => ['company_branch_office_contacts.update',$contact->id], 'method' => 'put']) !!}
        <div class="box-body">

            <div class="form-group">
                {{ Form::label('lbl', 'Nombres', ['class' => 'control-label']) }}
                {{ Form::text('first_name', $contact->first_name, ['class' => 'form-control' ]) }}
            </div>

            <div class="form-group">
                {{ Form::label('lbl', 'Apellidos', ['class' => 'control-label']) }}
                {{ Form::text('last_name', $contact->last_name, ['class' => 'form-control' ]) }}
            </div>

            <div class="form-group">
                {{ Form::label('lbl', 'Correo', ['class' => 'control-label']) }}
                {{ Form::text('email', $contact->email, ['class' => 'form-control' ]) }}
            </div>

            <div class="form-group">
                {{ Form::label('lbl', 'Sucursal', ['class' => 'control-label']) }}
                {!! Form::selectMultiple('branch_office', $branchOffices, $contact->branch_office->id)  !!}
            </div>
            <div class="form-group">
                {{ Form::label('lbl', 'Sucursal', ['class' => 'control-label']) }}
                {!! Form::select('phones[]', $contact->phones->pluck('phone','id'), $contact->phones->pluck('id'), ['id' => 'phones', 'class' => 'form-control','multiple'])  !!}
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
