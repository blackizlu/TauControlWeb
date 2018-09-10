<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tau Control</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo1.ico"/>

    <!--global styles-->
    <link type="text/css" rel="stylesheet" href="/css/dashboard/components.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/custom.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- end of global styles-->
    <link type="text/css" rel="stylesheet" href="/css/dashboard/chartist.min.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/jquery.circliful.css">
    <link type="text/css" rel="stylesheet" href="/css/dashboard/index.css">
    <link type="text/css" rel="stylesheet" href="#" id="skin_change" />

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
<!-- /#wrap -->
<!-- global scripts-->
<script type="text/javascript" src="/js/dashboard/components.js"></script>
<script type="text/javascript" src="/js/dashboard/custom.js"></script>
<!--end of global scripts-->
<!--  plugin scripts -->
<script type="text/javascript" src="/js/dashboard/countUp.min.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.flip.min.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.sparkline.js"></script>
<script type="text/javascript" src="/js/dashboard/chartist.min.js"></script>
<script type="text/javascript" src="/js/dashboard/chartist-tooltip.js"></script>
<script type="text/javascript" src="/js/dashboard/swiper.min.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.circliful.min.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.flot.js" ></script>
<script type="text/javascript" src="/js/dashboard/jquery.flot.resize.js"></script>
<!--end of plugin scripts-->

<script type="text/javascript" src="/js/dashboard/index.js"></script>
</body>
</html>