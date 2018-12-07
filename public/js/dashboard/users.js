'use strict';
$(document).ready(function() {
    var table = $('#editable_table');
    table.DataTable({
        dom: "<'text-right'B><f>lr<'table-responsive't><'row'<'col-md-5 col-12'i><'col-md-7 col-12'p>>",
        buttons: [
            {extend: 'copy', text: 'Copiar' }, 'csv', {extend: 'print', text: 'Imprimir' }
        ],
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

        }
    });
    var tableWrapper = $("#editable_table_wrapper");
    tableWrapper.find(".dataTables_length select").select2({
        showSearchInput: false//hide search box with special css class
    }); // initialize select2 dropdown
    $("#editable_table_wrapper .dt-buttons .btn").addClass('btn-secondary').removeClass('btn-default');
    $(".dataTables_wrapper").removeClass("form-inline");
    $(".dataTables_paginate .pagination").addClass("float-right");
});