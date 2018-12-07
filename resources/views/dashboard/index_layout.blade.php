<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tau Control</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo1.ico"/>

    <!-- gkobalstyles-->
    <link type="text/css" rel="stylesheet" href="/css/dashboard/components.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/custom.css" />
    <link type="text/css" rel="stylesheet" href="#" id="skin_change"/>
    <!-- end of global styles-->

    <!-- Calendario styles-->
    <link type="text/css" rel="stylesheet" href="/css/dashboard/fullcalendar.min.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/calendar_custom.css" />
    <!-- end of plugin styles -->
    <!--Widgets styles-->
    <link type="text/css" rel="stylesheet" href="/css/dashboard/swiper.min.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/ihover.min.css"/>
    <!-- Widgets styles -->
    <link rel="stylesheet" type="text/css" href="/css/dashboard/widgets.css">

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
<!-- Calendar scripts -->
<script type="text/javascript" src="/js/dashboard/moment.min.js"></script>
<script type="text/javascript" src="/js/dashboard/fullcalendar.min.js"></script>
<script type="text/javascript" src="/js/dashboard/calendarcustom.js" ></script>
<!-- end of plugin scripts -->
<script type="text/javascript" src="/js/dashboard/calendar.js"></script>
<!-- Widgets scripts -->
<script type="text/javascript" src="/js/dashboard/countUp.min.js"></script>
<script type="text/javascript" src="/js/dashboard/swiper.min.js"></script>
<script type="text/javascript" src="/js/dashboard/widget3.js"></script>
</body>
</html>
