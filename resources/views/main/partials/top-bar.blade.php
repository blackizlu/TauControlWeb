<div class="top-bar">
    <div class="container">
        <div class="top top-left">
            <div class="sidebar-widget text-left small-screen-center widget_text">
                <div class="textwidget"> <i class="fa fa-envelope"></i>&nbsp; <a href="mailto:lambda@lambda-theme.com">info@taucontrol.com</a> </div>
            </div>
            <div class="sidebar-widget text-left small-screen-center widget_text">
                <div class="textwidget"> <i class="fa fa-phone"></i> &nbsp; +52 81 2718 5557 </div>
            </div>
        </div>
        <div class="top top-right">
            <div class="sidebar-widget text-right small-screen-center widget_social">
                <ul class="unstyled inline social-icons social-simple social-normal">
                    <li>
                        <a data-iconcolor="#3b5998" href="corporate-index.html"> <i class="fa fa-facebook"></i> </a>
                    </li>
                    <li>
                        <a data-iconcolor="#00acee" href="corporate-index.html"> <i class="fa fa-twitter"></i> </a>
                    </li>
                    <li>
                        <a data-iconcolor="#5FB0D5" href="corporate-index.html"> <i class="fa fa-linkedin"></i> </a>
                    </li>
                    <li>
                        <a data-iconcolor="#E45135" href="corporate-index.html"> <i class="fa fa-google-plus"></i> </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="menu navbar navbar-static-top header-logo-left-menu-right oxy-mega-menu navbar-sticky" id="masthead">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-target=".main-navbar" data-toggle="collapse" type="button"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="corporate-index.html">
                <img src="/images/logo.png" alt="" style="width: 40%">
            </a> </div>
        <div class="nav-container">
            <nav class="collapse navbar-collapse main-navbar logo-navbar navbar-right">
                <div class="menu-container">
                    <ul class="nav navbar-nav" id="menu-main">
                        <li class="menu-item @if(Request::url() == route('main.home')) {{ 'active' }} @endif">
                            <a href="/">Inicio</a>
                        </li>
                        <li class="menu-item @if(Request::url() == route('main.us')) {{ 'active' }} @endif">
                            <a href="{{ route('main.us') }}">Nosotros</a>
                        </li>
                        <li class="menu-item @if(Request::url() == route('main.solutions')) {{ 'active' }} @endif">
                            <a href="{{ route('main.solutions') }}">Soluciones</a>
                        </li>
                        <li class="menu-item @if(Request::is('success-stories/*') || Request::is('success-stories')) {{ 'active' }} @endif">
                            <a href="{{ route('main.success') }}">Casos de éxito</a>
                        </li>
                        <li class="menu-item @if(Request::url() == route('main.contact')) {{ 'active' }} @endif">
                            <a href="{{ route('main.contact') }}">Contáctanos</a>
                        </li>
                    </ul>
                </div>
                <div class="menu-sidebar">
                    <div class="sidebar-widget widget_search" id="search-5">
                        <form action="corporate-index.html" method="get" name="searchform">
                            <div class="input-group">
                                <input class="form-control" name="s" placeholder="Search" type="text"> <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit" value="Search">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span> </div>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>