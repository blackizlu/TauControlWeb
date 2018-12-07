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
    <link type="text/css" rel="stylesheet" href="/css/dashboard/scroller.bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/colReorder.bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/dataTables.bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/dataTables.bootstrap.css" />
    <!-- end of plugin styles -->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="/css/dashboard/tables.css" />

    <!-- end of plugin styles -->

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
                                    <i class="fa fa-clipboard"></i>
                                    Bitacora
                                </h4>
                            </div>
                            <div class="col-lg-6 col-md-8 col-sm-8">
                                <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                                    <li class="breadcrumb-item">
                                        <a href="index1.html">
                                            <i class="fa fa-home" data-pack="default" data-tags=""></i> Inicio
                                        </a>
                                    </li>

                                    <li class="breadcrumb-item active">Bitacora</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="outer">
                    <div class="inner bg-light lter bg-container">
                        <div class="row">
                            <div class="col-12 data_tables">
                                <div class="card
">
                                    <div class="card-header bg-white">
                                        <i class="fa fa-table"></i> Registro de acciones
                                    </div>
                                    <div class="card-block m-t-35">
                                        <table id="example3" class="display table table-stripped table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Proyecto</th>
                                                <th>Etapa</th>
                                                <th>Responsable</th>
                                                <th>Fecha de actualización</th>
                                                <th>Actualizado por</th>
                                                <th>Acciones</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>Proyecto</th>
                                                <th>Etapa</th>
                                                <th>Responsable</th>
                                                <th>Fecha de actualización</th>
                                                <th>Actualizado por</th>
                                                <th hidden></th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            <tr>
                                                <td>Casas Geo</td>
                                                <td>Lead</td>
                                                <td>Luis Castellanos</td>
                                                <td>5/12/2018 20:14:43</td>
                                                <td>Christian Marcos</td>
                                                <td><a href="" data-toggle="tooltip" data-placement="top" title="View User">
                                                        <i class="fa fa-eye text-success"></i></a>
                                                    &nbsp; &nbsp;
                                                    <a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" href="">
                                                        <i class="fa fa-pencil-alt text-warning"></i></a>
                                                    &nbsp; &nbsp;
                                                    <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Delete" href="#" data-id="">
                                                        <i class="fa fa-trash text-danger"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Antigua Barilla</td>
                                                <td>Ganado</td>
                                                <td>Giovanny Niño</td>
                                                <td>8/12/2018 11:32:07</td>
                                                <td>Christian Marcos</td>
                                                <td><a href="" data-toggle="tooltip" data-placement="top" title="View User">
                                                        <i class="fa fa-eye text-success"></i></a>
                                                    &nbsp; &nbsp;
                                                    <a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" href="">
                                                        <i class="fa fa-pencil-alt text-warning"></i></a>
                                                    &nbsp; &nbsp;
                                                    <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Delete" href="#" data-id="">
                                                        <i class="fa fa-trash text-danger"></i></a></td>
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
        </div>
    </div>
</div>
<!-- global scripts-->
<script type="text/javascript" src="/js/dashboard/components.js"></script>
<script type="text/javascript" src="/js/dashboard/custom.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<!-- end of global scripts-->

<script type="text/javascript" src="/js/dashboard/select2.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/js/dashboard/dataTables.tableTools.js"></script>
<script type="text/javascript" src="/js/dashboard/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="/js/dashboard/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="/js/dashboard/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="/js/dashboard/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="/js/dashboard/dataTables.rowReorder.min.js"></script>
<script type="text/javascript" src="/js/dashboard/buttons.colVis.min.js"></script>
<script type="text/javascript" src="/js/dashboard/buttons.html5.min.js"></script>
<script type="text/javascript" src="/js/dashboard/buttons.bootstrap.min.js"></script>
<script type="text/javascript" src="/js/dashboard/buttons.print.min.js"></script>
<script type="text/javascript" src="/js/dashboard/dataTables.scroller.min.js"></script>
<!-- end of plugin scripts -->
<!--Page level scripts-->
<script type="text/javascript" src="/js/dashboard/simple_datatables.js"></script>

</body>

</html>
