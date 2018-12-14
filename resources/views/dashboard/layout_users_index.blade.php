<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tau Control</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo1.ico"/>

    <!-- global styles-->
    <link type="text/css" rel="stylesheet" href="/css/dashboard/components.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/custom.css" />
    <link type="text/css" rel="stylesheet" href="#" id="skin_change"/>
    <!-- end of global styles-->
    <!--plugin Advanced Tables styles-->
    <link type="text/css" rel="stylesheet" href="/css/dashboard/select2.min.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/dataTables.bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/dataTables.bootstrap.css"/>

    <!-- end of plugin styles -->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="/css/dashboard/tables.css"/>


</head>

<body class="body">
<div id="wrap">
    @include('dashboard.partials.topbar')
    <div class="wrapper">
        @include('dashboard.partials.sidebar')
        <div id="content" class="bg-container">
            @yield('content')
        </div>
    </div>
</div>
<!-- global scripts-->
<script type="text/javascript" src="/js/dashboard/components.js"></script>
<script type="text/javascript" src="/js/dashboard/custom.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<!-- end of global scripts-->

<!--plugin scripts Advanced tables-->
<!-- plugin scripts -->
<script type="text/javascript" src="/js/dashboard/select2.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/js/dashboard/dataTables.bootstrap.min.js"></script>
<!-- end plugin scripts -->
<!--Page level scripts-->
<script>
    'use strict';
    $(document).ready(function(){
        // Scroll - horizontal and Vertical Scroll Table
        $('#example').DataTable( {
            "scrollY": 200,
            "scrollX": true,
        });
        //End of Scroll - horizontal and Vertical Scroll Table

        // advanced Table

        var table = $('#example_demo').DataTable({
            "dom": "<'row'<'col-md-5 col-sm-12'l><'col-md-7 col-sm-12'f>r><'table-responsive't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
            "paging": true,
            "searching": true,
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
        var $example_demo= $('#example_demo tbody');

        $example_demo.on( 'click', '#delete', function () {


            $(this).closest('tr').remove();
        } );

        // End of advanced Table
        $(".dataTables_wrapper").removeClass("form-inline");
    });
</script>


</body>

</html>
