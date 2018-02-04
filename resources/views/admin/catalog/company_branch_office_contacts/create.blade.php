@extends('admin.layout.head')
@section('title','Crear Telefono')
@section('extra_scripts')
    <script>
        $(document).ready(function () {
            var txtCountPhone = $('#count_phones');
            txtCountPhone.change(function () {
                var phone_int = parseInt(this.value);
                if (phone_int >= 0 && phone_int < 5) {
                    var phoneDiv = $('#phonesDiv');
                    phoneDiv.html(" ");
                    for (i = 0; i < phone_int; i++) {
                        var j = i + 1;
                        phoneDiv.append('<div class="form-group">' +
                            '<label for="lblCount" class="">Telefono #' + j + '</label>' +
                            '{{ Form::text('phones[]', null, ['class' => 'form-control', 'required'])}}' +
                            '</div>');
                    }
                } else {
                    alert('Minimo 0 y máximo 4');
                }
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
        {!! Form::open(['route' => ['company_branch_office_contacts.store']]) !!}
        <div class="box-body">

            <div class="form-group">
                {{ Form::label('lbl', 'Nombres', ['class' => 'control-label']) }}
                {{ Form::text('first_name', null, ['class' => 'form-control' ]) }}
            </div>

            <div class="form-group">
                {{ Form::label('lbl', 'Apellidos', ['class' => 'control-label']) }}
                {{ Form::text('last_name', null, ['class' => 'form-control' ]) }}
            </div>

            <div class="form-group">
                {{ Form::label('lbl', 'Correo', ['class' => 'control-label']) }}
                {{ Form::text('email', null, ['class' => 'form-control' ]) }}
            </div>

            <div class="form-group">
                {{ Form::label('lbl', 'Sucursal', ['class' => 'control-label']) }}
                {!! Form::selectMultiple('branch_office', $branchOffices, null)  !!}
            </div>
            <div class="form-group" id="divCountPhone">
                {{ Form::label('lblCount', 'Cantidad de Telefonos', ['class' => 'control-label'])}}

                {{ Form::number('count_phones', null, ['class' => 'form-control', 'id' => 'count_phones', 'min' => '0', 'placeholder' => '0'])}}
            </div>

            <div id="phonesDiv"></div>


        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            {{ Form::submit('Crear', ['class' => 'btn btn-success']) }}
        </div>
        <!-- /.box-footer -->
        {!!  Form::close() !!}
    </div>
@endsection
