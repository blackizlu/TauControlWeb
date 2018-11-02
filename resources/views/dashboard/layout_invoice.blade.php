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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <!--end of global styles-->
    <!--plugin styles-->
    <link type="text/css" rel="stylesheet" href="/css/dashboard/select2.min.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/scroller.bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/colReorder.bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/dataTables.bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/dataTables.bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/responsive.dataTables.min.css" />
    <!-- end of plugin styles -->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="/css/dashboard/tables.css" />
    <link type="text/css" rel="stylesheet" href="#" id="skin_change" />
    <!--End of page level styles-->
    <!-- Estilos para vista cotizaciones/tabla agregable-->
    <link type="text/css" rel="stylesheet" href="/css/dashboard/sortable.css" />
    <!--FIN Estilos para vista cotizaciones/tabla agregable-->
    <!-- Estilos para vista cotizaciones/buttons-->
    <link type="text/css" rel="stylesheet" href="/css/dashboard/buttons.min.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/buttons.css"/>
    <!-- Estilos para vista cotizaciones/buttons/tooltips mensajitos-->
    <link type="text/css" rel="stylesheet" href="/css/dashboard/tooltipster.bundle.min.css">
    <link type="text/css" rel="stylesheet" href="/css/dashboard/tipso.min.css">
    <!--Plugin style-->
    <link type="text/css" rel="stylesheet" href="/css/dashboard/component.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/bootstrap-tagsinput.css"/>
    <link rel="stylesheet" type="text/css" href="/css/dashboard/animate.min.css" />
    <!-- end of plugin styles -->
    <link type="text/css" rel="stylesheet" href="/css/dashboard/portlet.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/advanced_components.css"/>
    <!-- modals -->
    <link type="text/css" rel="stylesheet" href="/css/dashboard/component.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/bootstrap-tagsinput.css"/>
    <link rel="stylesheet" type="text/css" href="/css/dashboard/animate.min.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/portlet.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/advanced_components.css"/>

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

<script type="text/javascript" src="/js/dashboard/components.js"></script>
<script type="text/javascript" src="/js/dashboard/custom.js"></script>
<!--plugin scripts-->
<script type="text/javascript" src="/js/dashboard/select2.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/js/dashboard/dataTables.tableTools.js"></script>
<script type="text/javascript" src="/js/dashboard/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="/js/dashboard/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="/js/dashboard/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/js/dashboard/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="/js/dashboard/dataTables.rowReorder.min.js"></script>
<script type="text/javascript" src="/js/dashboard/buttons.colVis.min.js"></script>
<script type="text/javascript" src="/js/dashboard/buttons.html5.min.js"></script>
<script type="text/javascript" src="/js/dashboard/buttons.bootstrap.min.js"></script>
<script type="text/javascript" src="/js/dashboard/buttons.print.min.js"></script>
<script type="text/javascript" src="/js/dashboard/dataTables.scroller.min.js"></script>
<!-- end of plugin scripts -->
<!--Page level scripts-->
<script type="text/javascript" src="/js/dashboard/datatable.js"></script>
<!--end of global scripts-->
<!-- plugin scripts botones/tooltips mensajitos -->
<script type="text/javascript" src="/js/dashboard/tooltipster.bundle.min.js"></script>
<script type="text/javascript" src="/js/dashboard/tipso.min.js"></script>
<script type="text/javascript" src="/js/dashboard/tooltips.js"></script>
<script type="text/javascript" src="/js/dashboard/modals.js"></script>

</body>

</html>
