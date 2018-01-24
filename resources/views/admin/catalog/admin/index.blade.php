@extends('admin.layout.head')
@section('title','Usuarios Administradores')
@section('extra_scripts')
    <link rel="stylesheet" type="text/css" href="{{asset('css/datatable.css')}}"/>
    <script type="text/javascript" src="{{asset('js/datatable.js')}}"></script>
    <script>
       $(document).ready(function(){
            var user_table = $('#users-table').DataTable({

                "sDom": '<"top"if>rt<"bottom"lp><"clear">',
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todo"]],
                "pageLength": 25,
                stateSave: true,
                language: {
                    "paginate": {
                        "first":      "Primero",
                        "last":       "Ultimo",
                        "next":       "Siguiente",
                        "previous":   "Anterior"
                    },
                    "search":         "",
                    "sZeroRecords":'<div id="error-noData">'+
                    '<div id="content-error-noData">'+
                    '<i class="fa fa-database"></i>'+
                    '<h1> No se han encontrado registros </h1>'+
                    '</div></div>',
                    "emptyTable":     '<div id="error-noData">'+
                    '<div id="content-error-noData">'+
                    '<i class="fa fa-database"></i>'+
                    '<h1> No se han encontrado registros</h1>'+
                    '</div></div>',
                    "zeroRecords":    '<div id="error-noData">'+
                    '<div id="content-error-noData">'+
                    '<i class="fa fa-database"></i>'+
                    '<h1> No se han encontrado registros</h1>'+
                    '</div></div>',
                    "loadingRecords": '<div id="error-noData">'+
                    '<div id="content-error-noData">'+
                    '<i class="fa fa-circle-o-notch fa-spin fa-fw"></i>'+
                    '<h1> Buscando registros</h1>'+
                    '</div></div>',
                    "processing":     '<div id="error-noData">'+
                    '<div id="content-error-noData">'+
                    '<i class="fa fa-circle-o-notch fa-spin fa-fw"></i>'+
                    '<h1> Buscando registros</h1>'+
                    '</div></div>',
                    "infoEmpty":      "Mostrando 0 a 0 de 0 registros",
                    "info":           "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "infoFiltered":   "(Filtrado de _MAX_ total registros)",
                    "lengthMenu":     "Mostrar _MENU_ registros",
                    searchPlaceholder: "Buscar..."
                },
                responsive: {
                    details: {
                        renderer: function ( api, rowIdx, columns ) {
                            var data = $.map( columns, function ( col, i ) {
                                return col.hidden ?
                                    '<tr data-dt-row="'+col.rowIndex+'" data-dt-column="'+col.columnIndex+'">'+
                                    '<td>'+col.title+':'+'</td> '+
                                    '<td>'+col.data+'</td>'+
                                    '</tr>' :
                                    '';
                            } ).join('');
                            return data ?
                                $('<table/>').append( data ) :
                                false;
                        }
                    }
                },
                select: {
                    style:    'os',
                    selector: 'td:first-child'
                },
                ajax: '{!! route('datatable_admins') !!}',
                columns: [
                    {data: function(){
                            return '<label class="label--checkbox"><input type="checkbox" class="ck checkStyle"></label>'
                        },"orderable": false
                    },
                    { data: 'id'},
                    { data: 'full_name'},
                    { data: 'nick_name'},
                    { data: 'email'},
                    { data: function(data) {
                            return '<span class="label label-'+data.status_color+'">'+data.status_label+'</span>';
                        }},
                ],

            });

            var buttons = $('#buttons');
          var btnEdit = buttons.find('#btnEdit');
       user_table.on( 'select', function ( e, dt, type, indexes ) {
           var rowData = user_table.rows( indexes ).data().toArray();

           buttons.fadeIn("fast");
           if(rowData.length == 1)
           {
               btnEdit.fadeIn("fast");
           }else{
               btnEdit.fadeOut("fast");
           }
       } );
       user_table.on( 'deselect', function ( e, dt, type, indexes ) {
               var rowData = user_table.rows( indexes ).data().toArray();
           $('#buttons').fadeOut("slow");
           console.log(JSON.stringify( rowData ));
           } );

       });
    </script>
    @endsection

@section('content')
    <div id="buttons" style="display: none;">
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-edit" id="btnEdit">
            Launch Default Modal
        </button>

        <div class="modal fade" id="modal-edit" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Default Modal</h4>
                    </div>
                    <div class="modal-body">
                        <p>One fine body…</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div></div>
    <table class="table table-striped table-bordered" id="users-table">
        <thead>
        <tr>
            <th></th>
            <th>Id</th>
            <th>Nombre</th>
            <th>Nombre Usuario</th>
            <th>Correo</th>
            <th>Estado</th>

        </tr>
        </thead>
    </table>


@endsection

