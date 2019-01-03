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
<!--Widgets styles-->
<link type="text/css" rel="stylesheet" href="/css/dashboard/swiper.min.css"/>
<link type="text/css" rel="stylesheet" href="/css/dashboard/ihover.min.css"/>
<!-- Widgets styles -->
<link rel="stylesheet" type="text/css" href="/css/dashboard/widgets.css">
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
                        <div class="row sales_section">
                            <div class="col-xl-4 col-sm-6 col-12">
                                <div class="card p-d-15">
                                    <div class="sales_icons">
                                        <span class="bg-success"></span>
                                        <i class="fa fa-dollar"></i>
                                    </div>
                                    <div>
                                        <h5 class="sales_orders text-right m-t-5">Ganados</h5>  {{--Widget3.js para modificar los valores a mostrar--}}
                                        <h1 class="sales_number m-t-15 text-right" id="ganados"></h1>
                                        <p class="sales_text">Monto en MXN: $593,381.20
                                            {{--<span class="pull-right"><i class="fa fa-dollar text-mint font_18 m-r-5"></i>25.25%</span>--}}</p>
                                        <p class="sales_text">Monto en USD: $361,413.65
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-12 ">
                                <div class="card p-d-15">
                                    <div class="sales_icons">
                                        <span class="bg-primary"></span>
                                        <i class="fa fa-file-invoice-dollar"></i>
                                    </div>
                                    <div>
                                        <h5 class="sales_orders text-right m-t-5">Cotizados</h5>
                                        <h1 class="sales_number m-t-15 text-right" id="cotizados"></h1>
                                        <p class="sales_text">Monto en MXN: $989,900.38</p>
                                        <p class="sales_text">Monto en USD: $380,043.34</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-12 ">
                                <div class="card p-d-15">
                                    <div class="sales_icons">
                                        <span class="bg-warning"></span>
                                        <i class="fa fa-handshake-o"></i>
                                    </div>
                                    <div>
                                        <h5 class="sales_orders text-right m-t-5">Negociación</h5>
                                        <h1 class="sales_number m-t-15 text-right" id="negociados"></h1>
                                        <p class="sales_text">Monto en MXN: $0.00</p>
                                        <p class="sales_text">Monto en USD: $274,976.03</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="inner bg-container m-t-15">
                        <div class="row sales_section">
                            <div class="col-xl-4 col-sm-6 col-12 ">
                                <div class="card p-d-15">
                                    <div class="sales_icons">
                                        <span class="bg-lead"></span>
                                        <i class="fa fa-bullseye"></i>
                                    </div>
                                    <div>
                                        <h5 class="sales_orders text-right m-t-5">Lead</h5>
                                        <h1 class="sales_number m-t-15 text-right" id="lead"></h1>
                                        <p class="sales_text">Monto en MXN: $0.00</p>
                                        <p class="sales_text">Monto en USD: $0.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-12 ">
                                <div class="card p-d-15">
                                    <div class="sales_icons">
                                        <span class="bg-muted"></span>
                                        <i class="fa fa-calculator"></i>
                                    </div>
                                    <div>
                                        <h5 class="sales_orders text-right m-t-5">Pricing</h5>
                                        <h1 class="sales_number m-t-15 text-right" id="pricing"></h1>
                                        <p class="sales_text">Monto en MXN: $0.00</p>
                                        <p class="sales_text">Monto en USD: $$912,680.26</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-12 ">
                                <div class="card p-d-15">
                                    <div class="sales_icons">
                                        <span class="bg-danger"></span>
                                        <i class="fa fa-times-circle"></i>
                                    </div>
                                    <div>
                                        <h5 class="sales_orders text-right m-t-5">Rechazados</h5>
                                        <h1 class="sales_number m-t-15 text-right"><span id="rechazados"></span></h1>
                                        <p class="sales_text">Monto en MXN: $14,163,496.63</p>
                                        <p class="sales_text">Monto en USD: $3,078,177.80</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="inner bg-light lter bg-container m-t-15">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card ">
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
                                                        <th >Etapa</th>
                                                        <th >Proyecto</th>
                                                        <th >Monto MXN</th>
                                                        <th >Monto USD</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr role="row" class="even">
                                                        <td><a class="delete hidden-xs hidden-sm confirm"><i class="fa fa-file-invoice-dollar text-primary"></i></a>&nbsp;Cotizado</td>
                                                        <td>{{$Cotizado}}</td>
                                                        <td>$1,094,872.10</td>
                                                        <td>$2,337,960.92</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a class="delete hidden-xs hidden-sm confirm"><i class="fa fa-dollar text-success"></i></a>&nbsp;Ganado</td>
                                                        <td>{{$Ganado}}</td>
                                                        <td>$ 5,712,602.03</td>
                                                        <td>$524,840.31</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a class="delete hidden-xs hidden-sm confirm"><i class="fa fa-bullseye"></i></a>&nbsp;Lead</td>
                                                        <td>{{$Lead}}</td>
                                                        <td>$ 0.00</td>
                                                        <td>$ 0.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a class="delete hidden-xs hidden-sm confirm"><i class="fa fa-handshake-o text-warning"></i></a>&nbsp;Negociación</td>
                                                        <td>{{$Negociacion}}</td>
                                                        <td>$ 999,000.00</td>
                                                        <td>$497,702.53</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a class="delete hidden-xs hidden-sm confirm"><i class="fa fa-calculator text-muted"></i></a>&nbsp;Pricing</td>
                                                        <td>{{$Pricing}}</td>
                                                        <td>$ 0.00</td>
                                                        <td>$912,680.26</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a class="delete hidden-xs hidden-sm confirm"><i class="fa fa-times-circle text-danger"></i></a>&nbsp;Rechazado</td>
                                                        <td>{{$Rechazado}}</td>
                                                        <td>$ 35,421,585.63</td>
                                                        <td>$7,328,810.88</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header bg-white">
                                        Proyectos por usuario
                                    </div>
                                    <div class="card-block m-t-35" id="user_body">
                                        <div class="table-toolbar" style="margin-top: -35px;">
                                            <div class="btn-group">

                                            </div>
                                            <div class="input-group col-6">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-search text-primary"></i>
                                                        </span>
                                                <select class="form-control" tabindex="7" name="user_id" id="user_id">
                                                    <option selected disabled>Buscar por usuario</option>
                                                    @foreach($users as $user)
                                                        <option value="{{ $user->id }}">{{ $user->profile->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <table class="table table-striped table-bordered table-hover dataTable no-footer" id="editabletable2" role="grid">
                                                    <thead>
                                                    <tr>
                                                        <th >Etapa</th>
                                                        <th>Proyectos</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><a class="delete hidden-xs hidden-sm confirm"><i class="fa fa-file-invoice-dollar text-primary"></i></a>&nbsp;Cotizado</td>
                                                        <td>15</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a class="delete hidden-xs hidden-sm confirm"><i class="fa fa-dollar text-success"></i></a>&nbsp;Ganado</td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a class="delete hidden-xs hidden-sm confirm"><i class="fa fa-bullseye"></i></a>&nbsp;Lead</td>
                                                        <td>44</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a class="delete hidden-xs hidden-sm confirm"><i class="fa fa-handshake-o text-warning"></i></a>&nbsp;Negociación</td>
                                                        <td>10</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a class="delete hidden-xs hidden-sm confirm"><i class="fa fa-calculator text-muted"></i></a>&nbsp;Princing</td>
                                                        <td>20</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a class="delete hidden-xs hidden-sm confirm"><i class="fa fa-times-circle text-danger"></i></a>&nbsp;Rechazado</td>
                                                        <td>12</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
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
                                <button class="btn btn-primary" id="downloadgrafica">Descargar Gráfica &nbsp;<i class="fa fa-save"></i></button>
                                    <canvas id="canvas"></canvas>
                            </div>
                        </div>
                    </div>
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
<!-- Exportar Graficas Charts.js a imagen -->
<script type="text/javascript" src="/js/dashboard/FileSaver.min.js"></script>
<script type="text/javascript" src="/js/dashboard/canvas-toBlob.js"></script>
<script type="text/javascript" src="/js/dashboard/canvas-to-blob.min.js"></script>
<script type="text/javascript" src="/js/dashboard/FileSaver.js"></script>
<script type="text/javascript" src="/js/dashboard/Blob.js"></script>
<!--Page level scripts-->
<!-- Widgets scripts -->
<script type="text/javascript" src="/js/dashboard/countUp.min.js"></script>
<script type="text/javascript" src="/js/dashboard/swiper.min.js"></script>
<script type="text/javascript" src="/js/dashboard/widgetReporte.js"></script>

<script>
    'use strict';
    $(document).ready(function () {
        var options = {
            useEasing: true,
            useGrouping: true,
            decimal: '.',
            prefix: '',
            suffix: ''
        };
        new CountUp("ganados", 0, '{{$Ganado}}', 0, 5.0, options).start();
        new CountUp("cotizados", 0, '{{$Cotizado}}', 0, 5.0, options).start();
        new CountUp("negociados", 0, '{{$Negociacion}}', 0, 5.0, options).start();
        new CountUp("rechazados", 0, '{{$Rechazado}}', 0, 5.0, options).start();
        new CountUp("lead", 0, '{{$Lead}}', 0, 5.0, options).start();
        new CountUp("pricing", 0, '{{$Pricing}}', 0, 5.0, options).start();

        var imgHeight=$(".left_align_img").height();
        $(".left_image").css("height",imgHeight);
    });
</script>

<script>//Script comparativa responsables.

    // draw background
    var backgroundColor = 'white';
    Chart.plugins.register({
        beforeDraw: function(c) {
            var ctx = c.chart.ctx;
            ctx.fillStyle = backgroundColor;
            ctx.fillRect(0, 0, c.chart.width, c.chart.height);
        }
    });

    var barChartData = {
        labels: [@foreach($users as $user)'{{$user->profile->name}}', @endforeach],
        datasets: [{
            label: 'Negociacion',
            backgroundColor: window.chartColors.warning,
            data: [

                8,10,10,13,4,26,9,28//negociacion

            ]
        }, {
            label: 'Pricing',
            backgroundColor: window.chartColors.info,
            data: [

                12,20,20,33,7,0,12,34//pricing

            ]
        }, {
            label: 'Ganado',
            backgroundColor: window.chartColors.success,
            data: [

                9,6,30,15,2,70,14,34//ganado

            ]
        },{
            label: 'Cotizado',
            backgroundColor: window.chartColors.primary,
            data: [

                9,15,40,44,4,6,22,12//cotizado

            ]
        },{
            label: 'Rechazado',
            backgroundColor: window.chartColors.danger,
            data: [

                15,12,50,24,0,0,13,15//rechazado

            ]
        },{
            label: 'Lead',
            backgroundColor: window.chartColors.muted,
            data: [

                6,44,60,62,4,5,6,37//lead

            ]
        }]

    };//datos para la grafica
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
                        stacked: false
                    }],
                    yAxes: [{
                        stacked: false,
                        ticks: {
                            beginAtZero: true//para comenzar la numeracion en Y desde 0 y subira hasta el multiplo de 10 proximo al valor mas alto
                        }
                    }]
                }
            }
        });
    };

    $("#downloadgrafica").click(function() {
        var canvas = document.getElementById("canvas");
        canvas.toBlob(function(blob)
        {
            saveAs(blob, "grafica.png");
        });
    });

    'use strict';
    $(document).ready(function() {
        var table = $('#editable_table');
        table.DataTable({
            dom: "<'text-left'B><f>lr<'table-responsive't><'row'<'col-md-5 col-12'i><'col-md-7 col-12'p>>",
            buttons: [
                {extend: 'copy', text: 'Copiar' }, 'csv', {extend: 'print', text: 'Imprimir' }
            ],

            ordering: false,
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
    'use strict';
    $(document).ready(function() {
        var table = $('#editabletable2');
        table.DataTable({
            dom:"<'text-left'B><f>lr<'table-responsive't><'row'<'col-md-5 col-12'i><'col-md-7 col-12'p>>",
            buttons: false,
            ordering: false,
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
        $("#user_id").change((function (event) {
            var id = event.target.value;
            var url = "{{ route('reportes.getProjects', ':D') }}";
            url = url.replace(':D', id);
            $.get(url ,function (response) {
                console.log(response);
                $("#proyectos ").empty();
                for(i=0; i<response.projects.length; i++){
                    $("#proyectos").append("<option  value='"+response.projects[i].id+"'>"+response.projects[i].name+"</option>");
                }
                $("#myContacts ").empty();
                for(i=0; i<response.contacts.length; i++){
                    $("#myContacts").append("<option value='"+response.contacts[i].id+"'>"+response.contacts[i].contact_name+"</option>");
                }
            });

        }));
        var tableWrapper = $("#editable_table_wrapper");
        tableWrapper.find(".dataTables_length select").select2({
            showSearchInput: false//hide search box with special css class
        }); // initialize select2 dropdown
        $("#editable_table_wrapper .dt-buttons .btn").addClass('btn-secondary').removeClass('btn-default');

    });

</script>

</body>

</html>
