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
    <link type="text/css" rel="stylesheet" href="/css/dashboard/buttons.min.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/buttons.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/tables.css"/>
    <!-- end of global styles-->

    <!-- Calendario styles-->
    <link type="text/css" rel="stylesheet" href="/css/dashboard/jasny-bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/bootstrapValidator.min.css"/>

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
<script type="text/javascript" src="/js/dashboard/buttons.js"></script>

<!-- end of global scripts-->
<!-- Calendar scripts -->
<script type="text/javascript" src="/js/dashboard/jasny-bootstrap.js"></script>
<script type="text/javascript" src="/js/dashboard/holder.js"></script>
<script type="text/javascript" src="/js/dashboard/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="/js/dashboard/validation.js"></script>
<!-- end of plugin scripts-->
</body>
</html>
