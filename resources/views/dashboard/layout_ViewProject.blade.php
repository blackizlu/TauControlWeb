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
    <link type="text/css" rel="stylesheet" href="/css/dashboard/responsive.dataTables.min.css" />

    <link type="text/css" rel="stylesheet" href="/css/dashboard/tables.css" />
    <!--Radio Checkbox styles-->
    <link type="text/css" rel="stylesheet" href="/css/dashboard/bootstrap-switch.min.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/switchery.min.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/radiobox.min.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/checkbox.min.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/radio_checkbox.css" />
    <!--File input-->
    <link type="text/css" rel="stylesheet" href="/css/dashboard/jquery.inputlimiter.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/chosen.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/bootstrap-colorpicker.min.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/jquery.tagsinput.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/daterangepicker.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/bootstrap-datepicker.min.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/bootstrap-timepicker.min.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/bootstrap-switch.min.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/jasny-bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/fileinput.min.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/multi-select.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/form_elements.css"/>


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
<!--File Input-->
<script type="text/javascript" src="/js/dashboard/jquery.uniform.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.inputlimiter.js"></script>
<script type="text/javascript" src="/js/dashboard/chosen.jquery.js"></script>
<script type="text/javascript" src="/js/dashboard/bootstrap-colorpicker.min.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.tagsinput.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.validVal.min.js"></script>
<script type="text/javascript" src="/js/dashboard/moment.min.js"></script>
<script type="text/javascript" src="/js/dashboard/daterangepicker.js"></script>
<script type="text/javascript" src="/js/dashboard/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="/js/dashboard/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="/js/dashboard/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.autosize.min.js"></script>
<script type="text/javascript" src="/js/dashboard/inputmask.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.inputmask.js"></script>
<script type="text/javascript" src="/js/dashboard/inputmask.date.extensions.js"></script>
<script type="text/javascript" src="/js/dashboard/inputmask.extensions.js"></script>
<script type="text/javascript" src="/js/dashboard/fileinput.min.js"></script>
<script type="text/javascript" src="/js/dashboard/theme.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.multi-select.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.min.js"></script>

<!--end of plugin scripts-->
<script type="text/javascript" src="/js/dashboard/form.js"></script>
<script type="text/javascript" src="/js/dashboard/form_elements.js"></script>


<!--plugin scripts Datatables-->
<script type="text/javascript" src="/js/dashboard/select2.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/js/dashboard/dataTables.tableTools.js"></script>
<script type="text/javascript" src="/js/dashboard/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="/js/dashboard/dataTables.bootstrap.min.js"></script>
{{--<script type="text/javascript" src="/js/dashboard/dataTables.buttons.min.js"></script>--}}
<script type="text/javascript" src="/js/dashboard/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/js/dashboard/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="/js/dashboard/dataTables.rowReorder.min.js"></script>
{{--<script type="text/javascript" src="/js/dashboard/buttons.colVis.min.js"></script>--}}
{{--<script type="text/javascript" src="/js/dashboard/buttons.html5.min.js"></script>--}}
{{--<script type="text/javascript" src="/js/dashboard/buttons.bootstrap.min.js"></script>--}}
{{--<script type="text/javascript" src="/js/dashboard/buttons.print.min.js"></script>--}}
<script type="text/javascript" src="/js/dashboard/dataTables.scroller.min.js"></script>
<!-- Radio Checkbox scripts-->
<script type="text/javascript" src="/js/dashboard/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="/js/dashboard/switchery.min.js"></script>

<script type="text/javascript" src="/js/dashboard/radio_checkbox.js"></script>
<script type="text/javascript" src="/js/dashboard/datatable.js"></script>
<!-- end of global scripts-->



</body>

</html>
