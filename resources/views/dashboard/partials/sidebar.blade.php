@if(Auth::user()->type == 'admin')
<div id="left">
    <div class="menu_scroll m-t-40">
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
                            &nbsp;Categorías para cotizaciones
                        </a>
                    </li>
                    <li class="">
                        <a href="{{route('dashboard.tipocliente.index')}}">
                            <i class="fa fa-angle-right"></i>
                            &nbsp;Tipo de clientes
                        </a>
                    </li>
                    <li class="">
                        <a href="{{route('dashboard.tipoactividad.index')}}">
                            <i class="fa fa-angle-right"></i>
                            &nbsp;Tipo de actividades
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
            <li>
                <a href="{{route('dashboard.bitacora.index')}}">
                    <i class="fa fa-clipboard"></i>
                    <span class="link-title menu_hide">&nbsp;Bitacora</span>
                </a>
            </li>
            <li>
                <a href="{{route('dashboard.reportes.index')}}">
                    <i class="fa fa-print"></i>
                    <span class="link-title menu_hide">&nbsp;Reportes</span>
                </a>
            </li>
        </ul>
    </div>
</div>
@else
    <div id="left">
        <div class="menu_scroll m-t-40">
            <ul id="menu">
                <!-- /#Directo -->
                <li class="@if(Request::is('/')) {{ 'active' }} @endif">
                    <a href="{{route('dashboard.index')}}">
                        <i class="fa fa-home"></i>
                        <span class="link-title menu_hide">&nbsp;Inicio</span>
                    </a>
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
            </ul>
        </div>
    </div>@endif

<!-- /#Con Submenu y sub submenu -->
{{--
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
--}}