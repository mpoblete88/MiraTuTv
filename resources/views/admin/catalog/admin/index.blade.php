@extends('admin.layout.head')
@section('title','Usuarios Administradores')
@section('extra_scripts')
    <link rel="stylesheet" href="{{asset('css/datatable.css')}}">
    <script type="text/javascript" charset="utf8" src="{{ asset('js/datatable.js') }}"></script>
    <script>
        $(document).ready(function () {
            var user_table = $('#users-table').DataTable({
                "sDom": '<"top"if>rt<"bottom"lp><"clear">',
                language: {
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    },
                    responsive: true,
                    "search": "",
                    "sZeroRecords": '<div id="error-noData">' +
                    '<div id="content-error-noData">' +
                    '<i class="fa fa-database"></i>' +
                    '<h1> No se han encontrado registros</h1>' +
                    '</div></div>',
                    "emptyTable": '<div id="error-noData">' +
                    '<div id="content-error-noData">' +
                    '<i class="fa fa-database"></i>' +
                    '<h1> No se han encontrado registros</h1>' +
                    '</div></div>',
                    "zeroRecords": '<div id="error-noData">' +
                    '<div id="content-error-noData">' +
                    '<i class="fa fa-database"></i>' +
                    '<h1> No se han encontrado registros</h1>' +
                    '</div></div>',
                    "loadingRecords": '<div id="error-noData">' +
                    '<div id="content-error-noData">' +
                    '<i class="fa fa-circle-o-notch fa-spin fa-fw"></i>' +
                    '<h1> Buscando registros</h1>' +
                    '</div></div>',
                    "processing": '<div id="error-noData">' +
                    '<div id="content-error-noData">' +
                    '<i class="fa fa-circle-o-notch fa-spin fa-fw"></i>' +
                    '<h1> Buscando registros</h1>' +
                    '</div></div>',
                    "infoEmpty": "Mostrando 0 a 0 de 0 registros",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "infoFiltered": "(Filtrado de _MAX_ total registros)",
                    "lengthMenu": "Mostrar _MENU_ registros",
                    searchPlaceholder: "Buscar..."
                },

                responsive: {
                    details: {
                        display: $.fn.dataTable.Responsive.display.modal({
                            header: function (row) {
                                var data = row.data();
                                return 'Detalle de ' + data.full_name;
                            }
                        }),
                        renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                            tableClass: 'table'
                        })
                    }
                },
                ajax: '{!! route('datatable_admins') !!}',
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todo"]],
                "pageLength": 10,
                stateSave: true,
                columns: [

                    {data: 'id'},
                    {data: 'full_name'},
                    {data: 'nick_name'},
                    {data: 'email'},
                    {
                        data: function (data) {
                            return '<span class="label label-' + data.status_color + '">' + data.status_label + '</span>';
                        }
                    },
                    {
                        data: function (data) {
                            var url = "";
                            var edit_url = "{{ route('app_admins.edit', ':ID:') }}";
                            var delete_url = '{{ Form::open(array("route" => array("app_admins.destroy", ":ID:"), "method" => "delete")) }}' +
                                ' <button type="submit" class="btn btn-danger btn-xs" title="{{ trans('general.action.delete')}}"><i class="fa fa-minus-circle" aria-hidden="true"></i></button>' +
                                '{{ Form::close() }}';

                            edit_url = edit_url.replace(':ID:', data.id);
                            delete_url = delete_url.replace(':ID:', data.id);
                            url += delete_url;
                            url += '<a href="' + edit_url + '" class="btn btn-success btn-xs" title="{{ trans('general.action.edit')}}"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>';

                            return url;
                        }
                    }
                ],
                initComplete: function () {
                    this.api().columns([1, 2]).every(function () {
                        var column = this;
                        var name_column = $(column.header()).text();
                        var select = $('<select style="min-width:100px"><option value="">' + name_column + '</option></select>');

                        select.appendTo($(column.header()).empty());
                        column.data().unique().sort().each(function (d, j) {
                            var isHTML = RegExp.prototype.test.bind(/(<([^>]+)>)/i);
                            if (isHTML(d)) {
                                select.append('<option value="' + $(d).text() + '">' + $(d).text() + '</option>')
                            }
                            else {
                                select.append('<option value="' + d + '">' + d + '</option>')
                            }
                        });

                        select.multipleSelect({
                            filter: true,
                            selectAll: false,
                            onClick: function (view) {
                                var search = [];

                                $.each(view.instance.$selectItems, function () {
                                    if ($(this).is(":checked")) {
                                        if ($(this).val() != "") {
                                            search.push($(this).val());
                                        }
                                    }
                                });

                                search = search.join('|');
                                column.search(search ? '^' + search + '$' : '', true, false)
                                    .draw();

                            }
                        })
                    });
                }
            });


        });
    </script>
@endsection

@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Lista de Administradores</h3>

            <div class="pull-right box-tools">

                <a href="{{ route('app_admins.create')}}" class="btn btn-success btn-sm"
                   title="{{ trans('general.action.create')}}"><i class="fa fa-plus" aria-hidden="true"></i></a>

            </div>
        </div>
        <div class="box-body">
            @include('flash::message')

            <table id="users-table" class="table table-bordered table-striped dataTable" cellspacing="0"
                   width="100%">
                <thead>
                <tr>
                    <th>Id</th>
                    <th data-priority="1">Nombre</th>
                    <th data-priority="2">Usuario</th>
                    <th data-priority="3">Correo</th>
                    <th>Estado</th>
                    <th data-priority="4">Acción</th>

                </tr>
                </thead>
            </table>
        </div>
    </div>


@endsection

