'use strict';
$(document).ready(function() {
    $('#example1').DataTable( {

        "dom": "<'row'<'col-md-5 col-12'l><'col-md-7 col-12'f>r><'table-responsive't><'row'<'col-md-5 col-12'i><'col-md-7 col-12'p>>"
    } );
    $('#example2').DataTable( {
        "dom": "<'row'<'col-md-5 col-12'l><'col-md-7 col-12'f>r><'table-responsive't><'row'<'col-md-5 col-12'i><'col-md-7 col-12'p>>",
        "pagingType": "full_numbers"
    } );
    $('#example3').DataTable( {
        "dom": "<'row'<'col-md-5 col-12'l><'col-md-7 col-12'f>r><'table-responsive't><'row'<'col-md-5 col-12'i><'col-md-7 col-12'p>>",
        oLanguage: {
            sInfo: "Mostrando _START_ a _END_ de _TOTAL_ Registros",
            sInfoEmpty: "No hay registros a mostrar",
            sInfoFiltered: "",
            sZeroRecords: "Ningún registro para mostrar",
            sSearch: "Buscar:",
            oPaginate: {
                sFirst: "Primera Página",
                sLast: "Última Página",
                sNext: "Siguiente",
                sPrevious: "Anterior"
            },
            sEmptyTable: "No se encontraron registros",
            sLengthMenu: "Mostrar _MENU_ Registros"

        },
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );

                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );

                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    } );
    $(".dataTables_wrapper").removeClass("form-inline");
} );