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

<!--plugin styles Datatables-->
<link type="text/css" rel="stylesheet" href="/css/dashboard/select2.min.css" />
<link type="text/css" rel="stylesheet" href="/css/dashboard/dataTables.bootstrap.css" />
<!-- end of plugin styles -->
<!-- Chartist Graficas styles -->
<!--Page level styles-->
<link type="text/css" rel="stylesheet" href="/css/dashboard/tables.css" />

<!-- end of plugin styles -->
<style>
canvas {  -moz-user-select: none;  -webkit-user-select: none;  -ms-user-select: none;  }
</style>


</head>

<body class="body">
<div id="wrap">
    @include('dashboard.partials.topbar')
    <div class="wrapper">
        @include('dashboard.partials.sidebar')
        <div id="content" class="bg-container">
            <div id="content" class="bg-container">
                <header class="head">
                    <div class="main-bar">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-4 col-sm-4">
                                <h4 class="nav_top_align">
                                    <i class="fa fa-print"></i>
                                    Reportes
                                </h4>
                            </div>
                            <div class="col-lg-6 col-md-8 col-sm-8">
                                <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                                    <li class="breadcrumb-item">
                                        <a href="index1.html">
                                            <i class="fa fa-home" data-pack="default" data-tags=""></i> Inicio
                                        </a>
                                    </li>

                                    <li class="breadcrumb-item active">Reportes</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="outer">
                    <div class="inner bg-container">
                        <div class="card col-6">
                            <div class="card-header bg-white">
                                Todos los proyectos
                            </div>
                            <div class="card-block m-t-35" id="user_body">
                                <div class="table-toolbar">
                                    <div class="btn-group">

                                    </div>
                                    <div class="btn-group float-right users_grid_tools">
                                        <div class="tools"></div>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <table class="table table-striped table-bordered table-hover dataTable no-footer" id="editable_table" role="grid">
                                            <thead>
                                            <tr role="row">
                                                <th >Proyectos</th>
                                                <th >Etapa</th>
                                                <th >Monto MXN</th>
                                                <th >Monto USD</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row" class="even">
                                                    <td>65</td>
                                                    <td>Cotizado</td>
                                                    <td>$1,094,872.10</td>
                                                    <td>$2,337,960.92</td>
                                                </tr>
                                                <tr>
                                                    <td>46</td>
                                                    <td>Ganado</td>
                                                    <td>$ 5,712,602.03</td>
                                                    <td>$524,840.31</td>
                                                </tr>
                                                <tr>
                                                    <td>207</td>
                                                    <td>Lead</td>
                                                    <td>$ 0.00</td>
                                                    <td>$ 0.00</td>
                                                </tr>
                                                <tr>
                                                    <td>16</td>
                                                    <td>Negociación</td>
                                                    <td>$ 999,000.00</td>
                                                    <td>$497,702.53</td>
                                                </tr>
                                                <tr>
                                                    <td>44</td>
                                                    <td>Pricing</td>
                                                    <td>$ 0.00</td>
                                                    <td>$912,680.26</td>
                                                </tr>
                                                <tr>
                                                    <td>126</td>
                                                    <td>Rechazado</td>
                                                    <td>$ 35,421,585.63</td>
                                                    <td>$7,328,810.88</td>
                                                </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="inner bg-container" >
                            <div class="card m-t-15">
                                <div class="card-header bg-white">
                                    Comparativa responsables
                                </div>
                                <div class="card-block m-t-35">
                                        <canvas id="canvas"></canvas>
                                </div>
                            </div>
                    </div>
                    <!-- /.inner -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- global scripts-->
<script type="text/javascript" src="/js/dashboard/components.js"></script>
<script type="text/javascript" src="/js/dashboard/custom.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

<!-- Chartist Graficas scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js" integrity="sha256-o8aByMEvaNTcBsw94EfRLbBrJBI+c3mjna/j4LrfyJ8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js" integrity="sha256-MZo5XY1Ah7Z2Aui4/alkfeiq3CopMdV/bbkc/Sh41+s=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js" integrity="sha256-rjYnB0Bull7k2XkbJ03UNGqMuMieR769uQVGSSlsi6A=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js" integrity="sha256-oSgtFCCmHWRPQ/JmR4OoZ3Xke1Pw4v50uh6pLcu+fIc=" crossorigin="anonymous"></script>
<script type="text/javascript" src="/js/dashboard/utils.js"></script>
<!-- end of global scripts-->

<script type="text/javascript" src="/js/dashboard/select2.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/js/dashboard/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="/js/dashboard/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="/js/dashboard/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="/js/dashboard/buttons.colVis.min.js"></script>
<script type="text/javascript" src="/js/dashboard/buttons.html5.min.js"></script>
<script type="text/javascript" src="/js/dashboard/buttons.bootstrap.min.js"></script>
<script type="text/javascript" src="/js/dashboard/buttons.print.min.js"></script>
<!-- end of plugin scripts -->

<!--Page level scripts-->

<script>//Script comparativa responsables.
    var barChartData = {
        labels: ['Christian', 'Luis', 'Giovanny', 'Giovanny', 'Giovanny', 'Giovanny', 'Giovanny', 'Giovanny'],
        datasets: [{
            label: 'Negociacion',
            backgroundColor: window.chartColors.warning,
            data: [

                8,10,80,13,4,26,9,28//negociacion

            ]
        }, {
            label: 'Pricing',
            backgroundColor: window.chartColors.info,
            data: [

                12,20,32,33,7,0,12,34//pricing

            ]
        }, {
            label: 'Ganado',
            backgroundColor: window.chartColors.success,
            data: [

                9,6,60,15,2,70,14,34//ganado

            ]
        },{
            label: 'Cotizado',
            backgroundColor: window.chartColors.primary,
            data: [

                9,15,50,44,4,6,22,12//cotizado

            ]
        },{
            label: 'Rechazado',
            backgroundColor: window.chartColors.danger,
            data: [

                15,12,89,24,0,0,13,15//rechazado

            ]
        },{
            label: 'Lead',
            backgroundColor: window.chartColors.muted,
            data: [

                6,44,70,62,4,5,6,37//lead

            ]
        }]

    };
    window.onload = function() {
        var ctx = document.getElementById('canvas').getContext('2d');
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                tooltips: {
                    mode: 'index',
                    intersect: false
                },
                responsive: true,
                scales: {
                    xAxes: [{
                        stacked: true,
                    }],
                    yAxes: [{
                        ticks: {
                            beginAtZero: true//para comenzar la numeracion en Y desde 0 y subira hasta el multiplo de 10 proximo al valor mas alto
                        }
                    }]
                }
            }
        });
    };

    'use strict';
    $(document).ready(function() {
        var table = $('#editable_table');
        table.DataTable({
            dom: "<'text-left'B><f>lr<'table-responsive't><'row'<'col-md-5 col-12'i><'col-md-7 col-12'p>>",
            buttons: [
                {extend: 'copy', text: 'Copiar' }, 'csv', {extend: 'print', text: 'Imprimir' }
            ],

            bPaginate: false,
            bInfo: false,
            searching: false,
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
                sLengthMenu: "Mostrar _MENU_ Registros",

            }
        });
        var tableWrapper = $("#editable_table_wrapper");
        tableWrapper.find(".dataTables_length select").select2({
            showSearchInput: false//hide search box with special css class
        }); // initialize select2 dropdown
        $("#editable_table_wrapper .dt-buttons .btn").addClass('btn-secondary').removeClass('btn-default');
    });


</script>

</body>

</html>
