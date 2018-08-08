<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <title> Tau Control | Tecnología a la medida</title>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,900%7CGentium+Basic:400italic&amp;subset=latin,latin" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/extras.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/theme.min.css">
    <link rel="stylesheet" href="/css/corporate.min.css">
    <link rel="icon" href="/images/cropped-tau-control-logo-32x32.png" sizes="32x32" />
    <link rel="icon" href="/images/cropped-tau-control-logo-192x192.png" sizes="192x192" />
    <link rel="shortcut icon" href="assets/images/favicons/favicon.ico">
    {{--<style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 200px;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>--}}
</head>
<body class="pace-on pace-counter">
    <div class="pace-overlay"></div>
    @include('main.partials.top-bar')
    <div id="content" role="main">
        <article>
            @yield('content')
        </article>
        @include('main.partials.footer')
    </div>
    <a class="go-top go-top-circle" href="javascript:void(0)"> <i class="fa fa-angle-up"></i> </a>
    <script type="text/javascript">
        var oxyThemeData = {
            navbarHeight: 100,
            navbarScrolled: 90,
            navbarScrolledPoint: 20,
            menuClose: 'off',
            scrollFinishedMessage: 'No more items to load.',
            hoverMenu:
                {
                    hoverActive: false,
                    hoverDelay: 1,
                    hoverFadeDelay: 200
                },
            siteLoader: 'on'
        };
    </script>
    <script src="/js/theme.min.js"></script>
    <script src="/js/revolution.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function()
        {
            jQuery('.tp-banner').show().revolution(
                {
                    delay: 7000,
                    startwidth: 1170,
                    startheight: 480,
                    onHoverStop: "on", // Stop Banner Timer at Hover on Slide on/off
                    thumbWidth: 100, // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
                    thumbHeight: 50,
                    thumbAmount: 3,
                    hideThumbs: 0,
                    navigationType: "bullet", // bullet, thumb, none
                    navigationArrows: "solo", // nexttobullets, solo (old name verticalcentered), none
                    navigationStyle: "round", // round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom
                    navigationHAlign: "center", // Vertical Align top,center,bottom
                    navigationVAlign: "bottom", // Horizontal Align left,center,right
                    navigationHOffset: 0,
                    navigationVOffset: 20,
                    soloArrowLeftHalign: "left",
                    soloArrowLeftValign: "center",
                    soloArrowLeftHOffset: 20,
                    soloArrowLeftVOffset: 0,
                    soloArrowRightHalign: "right",
                    soloArrowRightValign: "center",
                    soloArrowRightHOffset: 20,
                    soloArrowRightVOffset: 0,
                    touchenabled: "on", // Enable Swipe Function : on/off
                    stopAtSlide: -1, // Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
                    stopAfterLoops: -1, // Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic
                    hideCaptionAtLimit: 0, // It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
                    hideAllCaptionAtLilmit: 0, // Hide all The Captions if Width of Browser is less then this value
                    hideSliderAtLimit: 0, // Hide the whole slider, and stop also functions if Width of Browser is less than this value
                    fullWidth: "on",
                    shadow: 0
                });
        });
    </script>
    {{--<script>
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8
            });
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgbhUTAgy672rwO6YRcvSXrnCZqlogLJ0&callback=initMap"
            async defer></script>--}}
</body>
</html>