<div id="left">
    <div class="menu_scroll">
        <div class="left_media">
            <div class="media user-media">
                <div class="user-media-toggleHover">
                    <span class="fa fa-user"></span>
                </div>
                <div class="user-wrapper">
                    <a class="user-link" href="#">
                        <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture"
                             src="/images/dashboard/admin.jpg">
                        <p class="user-info menu_hide">Welcome Micheal</p>
                    </a>
                </div>
            </div>
            <hr/>
        </div>
        <ul id="menu">
            <!-- /#Directo -->
            <li class="@if(Request::is('/')) {{ 'active' }} @endif">
                <a href="{{route('dashboard.index')}}">
                    <i class="fa fa-home"></i>
                    <span class="link-title menu_hide">&nbsp;Inicio</span>
                </a>
            </li>
            <li class="dropdown_menu">
                <a href="javascript:;">
                    <i class="fa fa-desktop"></i>
                    <span class="link-title menu_hide">&nbsp;Administrador</span>
                    <span class="fa arrow menu_hide"></span>
                </a>
                <ul class="sub-menu">
                    <li class="">
                        <a href="{{route('dashboard.users.index')}}">
                            <i class="fa fa-angle-right"></i>
                            &nbsp;Usuarios
                        </a>
                    </li>
                    <li class="">
                        <a href="{{route('dashboard.cotizaciones.categories')}}">
                            <i class="fa fa-angle-right"></i>
                            &nbsp;Lista de categorias
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown_menu @if(Request::is('clients') || Request::is('clients/*') || Request::is('contacts') || Request::is('contacts/*')) {{ 'active' }} @endif">
                <a href="javascript:;">
                    <i class="fa fa-user-tie"></i>
                    <span class="link-title menu_hide">&nbsp; Clientes</span>
                    <span class="fa arrow menu_hide"></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{route('dashboard.clients.index')}}">
                            <i class="fa fa-angle-right"></i>
                            &nbsp;Clientes
                        </a>
                    </li>
                    <li>
                        <a href="{{route('dashboard.contacts.index')}}">
                            <i class="fa fa-angle-right"></i>
                            &nbsp;Contactos
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown_menu">
                <a href="javascript:;">
                    <i class="fa fa-folder"></i>
                    <span class="link-title menu_hide">&nbsp; Proyectos</span>
                    <span class="fa arrow menu_hide"></span>
                </a>
                <ul class="sub-menu">
                    <li class="">
                        <a href="{{route('dashboard.projects.index')}}">
                            <i class="fa fa-angle-right"></i>
                            &nbsp;Proyectos
                        </a>
                    </li>
                    <li class="">
                        <a href="{{route('dashboard.cotizaciones.index')}}">
                            <i class="fa fa-angle-right"></i>
                            &nbsp;Cotizaciones
                        </a>
                    </li>
                    <li class="">
                        <a href="{{route('dashboard.cotizaciones.generate')}}">
                            <i class="fa fa-angle-right"></i>
                            &nbsp;Generar Cotización
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{route('dashboard.activities.index')}}">
                    <i class="fa fa-tasks"></i>
                    <span class="link-title menu_hide">&nbsp;Actividades</span>
                </a>
            </li>
            <!-- /#Con sub menu -->
            {{--<li class="dropdown_menu">--}}
                {{--<a href="javascript:;">--}}
                    {{--<i class="fa fa-user"></i>--}}
                    {{--<span class="link-title menu_hide">&nbsp; Usuarios</span>--}}
                    {{--<span class="fa arrow menu_hide"></span>--}}
                {{--</a>--}}
                {{--<ul>--}}
                    {{--<li>--}}
                        {{--<a href="{{route('dashboard.adduser')}}">--}}
                            {{--<i class="fa fa-angle-right"></i>--}}
                            {{--&nbsp; Agregar usuario--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="cards.html">--}}
                            {{--<i class="fa fa-angle-right"></i>--}}
                            {{--<span class="link-title">&nbsp;Lista de usuarios</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="transitions.html">--}}
                            {{--<i class="fa fa-angle-right"></i>--}}
                            {{--&nbsp; Usuarios eliminados--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>        <!-- /#Con Submenu y sub submenu -->--}}
            <li class="dropdown_menu">
                <a href="javascript:;">
                    <i class="fa fa-sitemap"></i>
                    <span class="link-title menu_hide">&nbsp; Multi Level Menu</span>
                    <span class="fa arrow menu_hide"></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="javascript:;">
                            <i class="fa fa-angle-right"></i>
                            &nbsp;Level 1
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu sub-submenu">
                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;Level 2
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;Level 2
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;Level 2
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu sub-submenu">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp;Level 3
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp;Level 3
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp;Level 3
                                            <span class="fa arrow"></span>
                                        </a>
                                        <ul class="sub-menu sub-submenu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                    &nbsp;Level 4
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                    &nbsp;Level 4
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                    &nbsp;Level 4
                                                    <span class="fa arrow"></span>
                                                </a>
                                                <ul class="sub-menu sub-submenu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-angle-right"></i>
                                                            &nbsp;Level 5
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-angle-right"></i>
                                                            &nbsp;Level 5
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-angle-right"></i>
                                                            &nbsp;Level 5
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp;Level 4
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;Level 2
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="fa fa-angle-right"></i>
                            &nbsp;Level 1
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="fa fa-angle-right"></i>
                            &nbsp;Level 1
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu sub-submenu">
                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;Level 2
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;Level 2
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;Level 2
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- /#menu -->
    </div>
</div>
<!-- /#left -->