<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="//images/dashboard/logo1.ico"/>

    <!--global styles-->
    <link type="text/css" rel="stylesheet" href="/css/dashboard/components.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/custom.css" />
    <!-- end of global styles-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="/css/dashboard/c3.min.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/toastr.min.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/switchery.min.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/new_dashboard.css"/>
    <link type="text/css" rel="stylesheet" href="#" id="skin_change"/>
</head>
<div id="wrap">
    <div id="top">
@include('dashboard.partials.topbar')
@include('dashboard.partials.sidebar')
        @yield('content')


    </div>
</div>

<body class="body">
<!-- /#wrap -->
<!-- global scripts-->
<script type="text/javascript" src="/js/dashboard/components.js"></script>
<script type="text/javascript" src="/js/dashboard/custom.js"></script>
<!-- global scripts end-->
<script type="text/javascript" src="/js/dashboard/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="/js/dashboard/raphael-min.js"></script>
<script type="text/javascript" src="/js/dashboard/d3.min.js"></script>
<script type="text/javascript" src="/js/dashboard/c3.min.js"></script>
<script type="text/javascript" src="/js/dashboard/toastr.min.js"></script>
<script type="text/javascript" src="/js/dashboard/switchery.min.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.flot.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.flot.resize.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.flot.stack.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.flot.time.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.flot.spline.min.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.flot.categories.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.flot.pie.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.flot.tooltip.min.js"></script>
<script type="text/javascript" src="/js/dashboard/newsTicker.js"></script>
<script type="text/javascript" src="/js/dashboard/countUp.min.js"></script>
<!--end of plugin scripts-->
<script type="text/javascript" src="/js/dashboard/new_dashboard.js"></script>

</body>
</html>