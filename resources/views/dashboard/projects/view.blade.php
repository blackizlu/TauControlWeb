@extends('dashboard.layout')
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-sm-5 col-lg-6 skin_txt">
                    <h4 class="nav_top_align"><i class="fa fa-eye "></i>
                        Ver Proyecto
                    </h4>
                </div>
                <div class="col-sm-7 col-lg-6">
                    <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index1.html">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                Inicio
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Proyectos</a>
                        </li>
                        <li class="active breadcrumb-item">{{ $project->name }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer" style="margin-top: -25px !important;">
        <div class="inner bg-light lter bg-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card m-t-15">
                        <div class="card-header bg-white"><i class="fa fa-folder-open "></i>
                            {{ $project->name }}
                        </div>
                        <div class="card-block seclect_form" style="padding-top: 0;">
                            <form class="form-horizontal">
                                <div class="row">
                                    <div class="col-lg-4 input_field_sections">
                                        <h6>Nombre del proyecto</h6>
                                        <h5 class="m-t-5">{{ $project->name }}</h5>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h6>Cliente</h6>
                                        <h5 class="m-t-5">{{ $project->client->client_name }}</h5>

                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h6>Etapa</h6>
                                        <h5 class="m-t-5">{{ $project->phase }}</h5>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h6>Responsable del proyecto</h6>
                                        <h5 class="m-t-5">{{ $project->user->profile->name }}&nbsp;{{$project->user->profile->last_name}}</h5>

                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h6>Fecha estimada de cierre</h6>
                                        <h5 class="m-t-5">{{\Carbon\Carbon::parse($project->estimated_date)->format('d/m/Y')}}</h5>
                                    </div>
                                    <div class="col-lg-2 input_field_sections">
                                        <h6>Monto</h6>
                                        <h5 class="m-t-5">$185,965.00</h5>
                                    </div>
                                    <div class="col-lg-2 input_field_sections">
                                        <h6>Moneda</h6>
                                        <h5 class="m-t-5">MXN</h5>
                                    </div>
                                    <div class="col-lg-6 input_field_sections">
                                        <h6>Comentarios</h6>
                                        <h5>{{ $project->comments }}</h5>
                                    </div>
                                    <div class="col-lg-2 input_field_sections">     </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h6>Fecha de creación del proyecto</h6>
                                        <h5>{{ $project->created_at }}</h5>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="outer" style="margin-top: -25px !important;">
        <div class="inner bg-light lter bg-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card m-t-15">
                        <div class="col-lg-12 ">
                            <div>
                                <ul class="nav nav-inline view_user_nav_padding">
                                    <li class="nav-item card_nav_hover">
                                        <a class="nav-link active" href="#user" id="home-tab" data-toggle="tab" aria-expanded="true">Actividades</a>
                                    </li>
                                    <li class="nav-item card_nav_hover">
                                        <a class="nav-link" href="#tab2" id="hats-tab" data-toggle="tab">Cotizaciones</a>
                                    </li>
                                    <li class="nav-item card_nav_hover">
                                        <a class="nav-link" href="#tab3"  id="followers" data-toggle="tab">Bitacora</a>
                                    </li>
                                </ul>
                                <div id="clothing-nav-content" class="tab-content m-t-10">
                                    <div role="tabpanel" class="tab-pane fade show active" id="user">
                                        <table class="table" id="users">
                                            <tr>
                                                <td>Soy la subcategoria1</td>
                                                <td class="inline_edit">
                                                        <span class="editable" data-title="Edit User Name"><a class="edit" data-toggle="tooltip" data-placement="top" title="Editar" href="">
                                                    <i class="fa fa-pencil-alt text-warning"></i></a>
                                                      &nbsp; &nbsp;
                                                     <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Desactivar" href="#" data-id="">
                                                    <i class="fa fa-ban text-danger"></i></a></span>
                                                </td>

                                            </tr>
                                            </tr>
                                        </table>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab2">
                                        <table class="table table-striped table-bordered table-hover" id="sample_5">
                                            <thead>
                                            <tr>
                                                <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Proyecto</th>
                                                <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Cliente</th>
                                                <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Monto</th>
                                                <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1">Moneda </th>
                                                <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Fecha de solicitud</th>
                                                <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Fecha de realización</th>
                                                <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Vendida</th>
                                                <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Fecha de venta</th>
                                                <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Acciones</th>

                                            </tr>
                                            </thead>
                                            <tbody style="height: 50px">
                                            <tr>
                                                <td class="sorting_1">Casas Xion</td>
                                                <td>Construc Xion SA de CV</td>
                                                <td >$322,036,700.00</td>
                                                <td>USD</td>
                                                <td>2018/11/07</td>
                                                <td>2018/11/09</td>
                                                <td>
                                                    No <input type="checkbox" class="js-switch sm_toggle" title="yes"> Si
                                                </td>
                                                <td></td>
                                                <td>                                            &nbsp; &nbsp;

                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Generar cotizacion">
                                                        <i class="fa fa-plus text-success"></i></a>
                                                    &nbsp; &nbsp;

                                                    &nbsp; &nbsp;
                                                    <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Eliminar" href="#" data-id="">
                                                        <i class="fa fa-trash text-danger"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sorting_1">Casas Xion</td>
                                                <td>Construc Xion SA de CV</td>
                                                <td >$322,036,700.00</td>
                                                <td>USD</td>
                                                <td>2018/11/07</td>
                                                <td>2018/11/09</td>
                                                <td>
                                                    No <input type="checkbox" class="js-switch sm_toggle" title="yes"> Si
                                                </td>
                                                <td></td>
                                                <td>                                            &nbsp; &nbsp;

                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Generar cotizacion">
                                                        <i class="fa fa-plus text-success"></i></a>
                                                    &nbsp; &nbsp;

                                                    &nbsp; &nbsp;
                                                    <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Eliminar" href="#" data-id="">
                                                        <i class="fa fa-trash text-danger"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sorting_1">Casas Xion</td>
                                                <td>Construc Xion SA de CV</td>
                                                <td >$322,036,700.00</td>
                                                <td>USD</td>
                                                <td>2018/11/07</td>
                                                <td>2018/11/09</td>
                                                <td>
                                                    No <input type="checkbox" class="js-switch sm_toggle" title="yes"> Si
                                                </td>
                                                <td></td>
                                                <td>                                            &nbsp; &nbsp;

                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Generar cotizacion">
                                                        <i class="fa fa-plus text-success"></i></a>
                                                    &nbsp; &nbsp;

                                                    &nbsp; &nbsp;
                                                    <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Eliminar" href="#" data-id="">
                                                        <i class="fa fa-trash text-danger"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sorting_1">Casas Xion</td>
                                                <td>Construc Xion SA de CV</td>
                                                <td >$322,036,700.00</td>
                                                <td>USD</td>
                                                <td>2018/11/07</td>
                                                <td>2018/11/09</td>
                                                <td>
                                                    No <input type="checkbox" class="js-switch sm_toggle" title="yes"> Si
                                                </td>
                                                <td></td>
                                                <td>                                            &nbsp; &nbsp;

                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Generar cotizacion">
                                                        <i class="fa fa-plus text-success"></i></a>
                                                    &nbsp; &nbsp;

                                                    &nbsp; &nbsp;
                                                    <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Eliminar" href="#" data-id="">
                                                        <i class="fa fa-trash text-danger"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sorting_1">Casas Xion</td>
                                                <td>Construc Xion SA de CV</td>
                                                <td >$322,036,700.00</td>
                                                <td>USD</td>
                                                <td>2018/11/07</td>
                                                <td>2018/11/09</td>
                                                <td>
                                                    No <input type="checkbox" class="js-switch sm_toggle" title="yes"> Si
                                                </td>
                                                <td></td>
                                                <td>                                            &nbsp; &nbsp;

                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Generar cotizacion">
                                                        <i class="fa fa-plus text-success"></i></a>
                                                    &nbsp; &nbsp;

                                                    &nbsp; &nbsp;
                                                    <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Eliminar" href="#" data-id="">
                                                        <i class="fa fa-trash text-danger"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sorting_1">Casas Xion</td>
                                                <td>Construc Xion SA de CV</td>
                                                <td >$322,036,700.00</td>
                                                <td>USD</td>
                                                <td>2018/11/07</td>
                                                <td>2018/11/09</td>
                                                <td>
                                                    No <input type="checkbox" class="js-switch sm_toggle" title="yes"> Si
                                                </td>
                                                <td></td>
                                                <td>                                            &nbsp; &nbsp;

                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Generar cotizacion">
                                                        <i class="fa fa-plus text-success"></i></a>
                                                    &nbsp; &nbsp;

                                                    &nbsp; &nbsp;
                                                    <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Eliminar" href="#" data-id="">
                                                        <i class="fa fa-trash text-danger"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sorting_1">Casas Xion</td>
                                                <td>Construc Xion SA de CV</td>
                                                <td >$322,036,700.00</td>
                                                <td>USD</td>
                                                <td>2018/11/07</td>
                                                <td>2018/11/09</td>
                                                <td>
                                                    No <input type="checkbox" class="js-switch sm_toggle" title="yes"> Si
                                                </td>
                                                <td></td>
                                                <td>                                            &nbsp; &nbsp;

                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Generar cotizacion">
                                                        <i class="fa fa-plus text-success"></i></a>
                                                    &nbsp; &nbsp;

                                                    &nbsp; &nbsp;
                                                    <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Eliminar" href="#" data-id="">
                                                        <i class="fa fa-trash text-danger"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sorting_1">Casas Xion</td>
                                                <td>Construc Xion SA de CV</td>
                                                <td >$322,036,700.00</td>
                                                <td>USD</td>
                                                <td>2018/11/07</td>
                                                <td>2018/11/09</td>
                                                <td>
                                                    No <input type="checkbox" class="js-switch sm_toggle" title="yes"> Si
                                                </td>
                                                <td></td>
                                                <td>                                            &nbsp; &nbsp;

                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Generar cotizacion">
                                                        <i class="fa fa-plus text-success"></i></a>
                                                    &nbsp; &nbsp;

                                                    &nbsp; &nbsp;
                                                    <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Eliminar" href="#" data-id="">
                                                        <i class="fa fa-trash text-danger"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sorting_1">Casas Xion</td>
                                                <td>Construc Xion SA de CV</td>
                                                <td >$322,036,700.00</td>
                                                <td>USD</td>
                                                <td>2018/11/07</td>
                                                <td>2018/11/09</td>
                                                <td>
                                                    No <input type="checkbox" class="js-switch sm_toggle" title="yes"> Si
                                                </td>
                                                <td></td>
                                                <td>                                            &nbsp; &nbsp;

                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Generar cotizacion">
                                                        <i class="fa fa-plus text-success"></i></a>
                                                    &nbsp; &nbsp;

                                                    &nbsp; &nbsp;
                                                    <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Eliminar" href="#" data-id="">
                                                        <i class="fa fa-trash text-danger"></i></a>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>



                                    <div role="tabpanel" class="tab-pane fade" id="tab3">
                                        <table class="table" id="users">
                                            <tr>
                                                <td>Soy la subcategoria1</td>
                                                <td class="inline_edit">
                                                        <span class="editable" data-title="Edit User Name"><a class="edit" data-toggle="tooltip" data-placement="top" title="Editar" href="">
                                                    <i class="fa fa-pencil-alt text-warning"></i></a>
                                                      &nbsp; &nbsp;
                                                     <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Desactivar" href="#" data-id="">
                                                    <i class="fa fa-ban text-danger"></i></a></span>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Soy la subcategoria 2</td>
                                                <td class="inline_edit">
                                                        <span class="editable" data-title="Edit User Name"><a class="edit" data-toggle="tooltip" data-placement="top" title="Editar" href="">
                                                    <i class="fa fa-pencil-alt text-warning"></i></a>
                                                      &nbsp; &nbsp;
                                                     <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Desactivar" href="#" data-id="">
                                                    <i class="fa fa-ban text-danger"></i></a></span>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Soy la subcategoria 3</td>
                                                <td class="inline_edit">
                                                        <span class="editable" data-title="Edit User Name"><a class="edit" data-toggle="tooltip" data-placement="top" title="Editar" href="">
                                                    <i class="fa fa-pencil-alt text-warning"></i></a>
                                                      &nbsp; &nbsp;
                                                     <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Desactivar" href="#" data-id="">
                                                    <i class="fa fa-ban text-danger"></i></a></span>
                                                </td>

                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data Tables | Admire</title>
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo1.ico"/>

    <!-- global styles-->
    <link type="text/css" rel="stylesheet" href="/css/dashboard/components.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/custom.css" />
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
    <link type="text/css" rel="stylesheet" href="css/pages/tables.css" />
    <link type="text/css" rel="stylesheet" href="#" id="skin_change" />
    <!--End of page level styles-->
</head>

<body class="datatable_page">
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="img/loader.gif" style=" width: 40px;" alt="loading...">
    </div>
</div>
<div id="wrap">
    <div id="top">
        <!-- .navbar -->
        <nav class="navbar navbar-static-top">
            <div class="container-fluid m-0">
                <a class="navbar-brand float-left" href="index.html">
                    <h4><img src="img/logo1.ico" class="admin_img" alt="logo"> ADMIRE ADMIN</h4>
                </a>
                <div class="menu">
                    <span class="toggle-left" id="menu-toggle">
                        <i class="fa fa-bars"></i>
                    </span>
                </div>
                <div class="topnav dropdown-menu-right float-right">
                    <div class="btn-group hidden-md-up small_device_search" data-toggle="modal"
                         data-target="#search_modal">
                        <i class="fa fa-search text-primary"></i>
                    </div>
                    <div class="btn-group">
                        <div class="notifications no-bg">
                            <a class="btn btn-default btn-sm messages" data-toggle="dropdown" id="messages_section"> <i
                                        class="fa fa-envelope-o fa-1x"></i>
                                <span class="badge badge-pill badge-warning notifications_badge_top">8</span>
                            </a>
                            <div class="dropdown-menu drop_box_align" role="menu" id="messages_dropdown">
                                <div class="popover-title">You have 8 Messages</div>
                                <div id="messages">
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/5.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data"><strong>hally</strong>
                                                sent you an image.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/8.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data"><strong>Meri</strong>
                                                invitation for party.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/7.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <strong>Remo</strong>
                                                meeting details .
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <strong>David</strong>
                                                upcoming events list.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/5.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data"><strong>hally</strong>
                                                sent you an image.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/8.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data"><strong>Meri</strong>
                                                invitation for party.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/7.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <strong>Remo</strong>
                                                meeting details .
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <strong>David</strong>
                                                upcoming events list.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="popover-footer">
                                    <a href="mail_inbox.html" class="text-white">Inbox</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <div class="notifications messages no-bg">
                            <a class="btn btn-default btn-sm" data-toggle="dropdown" id="notifications_section"> <i
                                        class="fa fa-bell-o"></i>
                                <span class="badge badge-pill badge-danger notifications_badge_top">9</span>
                            </a>
                            <div class="dropdown-menu drop_box_align" role="menu" id="notifications_dropdown">
                                <div class="popover-title">You have 9 Notifications</div>
                                <div id="notifications">
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/1.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Remo</strong>
                                                sent you an image
                                                <br>
                                                <small class="primary_txt">just now.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/2.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>clay</strong>
                                                business propasals
                                                <br>
                                                <small class="primary_txt">20min Back.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/3.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>John</strong>
                                                meeting at Ritz
                                                <br>
                                                <small class="primary_txt">2hrs Back.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Luicy</strong>
                                                Request Invitation
                                                <br>
                                                <small class="primary_txt">Yesterday.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/1.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Remo</strong>
                                                sent you an image
                                                <br>
                                                <small class="primary_txt">just now.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/2.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>clay</strong>
                                                business propasals
                                                <br>
                                                <small class="primary_txt">20min Back.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/3.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>John</strong>
                                                meeting at Ritz
                                                <br>
                                                <small class="primary_txt">2hrs Back.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Luicy</strong>
                                                Request Invitation
                                                <br>
                                                <small class="primary_txt">Yesterday.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/1.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Remo</strong>
                                                sent you an image
                                                <br>
                                                <small class="primary_txt">just now.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="popover-footer">
                                    <a href="#" class="text-white">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <div class="notifications request_section no-bg">
                            <a class="btn btn-default btn-sm messages" id="request_btn"> <i
                                        class="fa fa-sliders" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="btn-group">
                        <div class="user-settings no-bg">
                            <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
                                <img src="img/admin.jpg" class="admin_img2 img-thumbnail rounded-circle avatar-img"
                                     alt="avatar"> <strong>Micheal</strong>
                                <span class="fa fa-sort-down white_bg"></span>
                            </button>
                            <div class="dropdown-menu admire_admin">
                                <a class="dropdown-item title" href="#">
                                    Admire Admin</a>
                                <a class="dropdown-item" href="edit_user.html"><i class="fa fa-cogs"></i>
                                    Account Settings</a>
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-user"></i>
                                    User Status
                                </a>
                                <a class="dropdown-item" href="mail_inbox.html"><i class="fa fa-envelope"></i>
                                    Inbox</a>

                                <a class="dropdown-item" href="lockscreen.html"><i class="fa fa-lock"></i>
                                    Lock Screen</a>
                                <a class="dropdown-item" href="login2.html"><i class="fa fa-sign-out"></i>
                                    Log Out</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="top_search_box float-right hidden-sm-down">
                    <form class="header_input_search float-right">
                        <input type="text" placeholder="Search" name="search">
                        <button type="submit">
                            <span class="font-icon-search"></span>
                        </button>
                        <div class="overlay"></div>
                    </form>
                </div>
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- /.navbar -->
        <!-- /.head -->
    </div>
    <!-- /#top -->
    <div class="wrapper">
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
                                     src="img/admin.jpg">
                                <p class="user-info menu_hide">Welcome Micheal</p>
                            </a>
                        </div>
                    </div>
                    <hr/>
                </div>
                <ul id="menu">
                    <li>
                        <a href="index1.html">
                            <i class="fa fa-home"></i>
                            <span class="link-title menu_hide">&nbsp;Dashboard 1</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.html">
                            <i class="fa fa-tachometer"></i>
                            <span class="link-title menu_hide">&nbsp;Dashboard 2

                            </span>
                        </a>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-anchor"></i>
                            <span class="link-title menu_hide">&nbsp; Components</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="general_components.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; General Components
                                </a>
                            </li>
                            <li>
                                <a href="cards.html">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="link-title">&nbsp;Cards</span>
                                </a>
                            </li>
                            <li>
                                <a href="transitions.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Transitions
                                </a>
                            </li>
                            <li>
                                <a href="buttons.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Buttons
                                </a>
                            </li>
                            <li>
                                <a href="icons.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Icons
                                </a>
                            </li>
                            <li>
                                <a href="tooltips.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Tooltips
                                </a>
                            </li>
                            <li>
                                <a href="animations.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Animations
                                </a>
                            </li>

                            <li>
                                <a href="sliders.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Sliders
                                </a>
                            </li>
                            <li>
                                <a href="notifications.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Notifications
                                </a>
                            </li>
                            <li>
                                <a href="p_notify.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; P-Notify
                                </a>
                            </li>
                            <li>
                                <a href="izitoast.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Izi-Toast
                                </a>
                            </li>
                            <li>
                                <a href="cropper.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Cropper
                                </a>
                            </li>
                            <li>
                                <a href="jstree.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;Js Tree
                                </a>
                            </li>
                            <li>
                                <a href="modal.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Modals
                                </a>
                            </li>


                            <li>
                                <a href="sortable.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Sortable
                                </a>
                            </li>
                            <li>
                                <a href="sweet_alert.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Sweet alerts
                                </a>
                            </li>
                            <li>
                                <a href="grids_layout.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Grid View
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-th-large"></i>
                            <span class="link-title menu_hide">&nbsp; Widgets</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="widgets1.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Widgets 1
                                </a>
                            </li>
                            <li>
                                <a href="widgets2.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Widgets 2
                                </a>
                            </li>
                            <li>
                                <a href="widgets3.html">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="link-title">&nbsp; Widgets 3</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-pencil"></i>
                            <span class="link-title menu_hide">&nbsp; Forms</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="form_elements.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Form Elements
                                </a>
                            </li>
                            <li>
                                <a href="form_layouts.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Form Layouts
                                </a>
                            </li>
                            <li>
                                <a href="form_validations.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Form Validations
                                </a>
                            </li>
                            <li>
                                <a href="form_editors.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Form Editors
                                </a>
                            </li>
                            <li>
                                <a href="radio_checkbox.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Radio and Checkbox
                                </a>
                            </li>
                            <li>
                                <a href="form_wizards.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Wizards
                                </a>
                            </li>
                            <li>
                                <a href="datetime_picker.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Date Time Picker
                                </a>
                            </li>

                            <li>
                                <a href="ratings.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Ratings
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="dropdown_menu active">
                        <a href="#">
                            <i class="fa fa-th"></i>
                            <span class="link-title menu_hide">&nbsp; Tables</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="simple_tables.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Simple Tables
                                </a>
                            </li>
                            <li>
                                <a href="simple_datatables.html">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="link-title">&nbsp; Simple Data Tables </span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="datatables.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Data Tables
                                </a>
                            </li>
                            <li>
                                <a href="advanced_tables.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Advanced Tables
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="#">
                            <i class="fa fa-bar-chart"></i>
                            <span class="link-title menu_hide">&nbsp; Charts</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="charts.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Flot Charts
                                </a>
                            </li>
                            <li>
                                <a href="advanced_charts.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Advanced Charts
                                </a>
                            </li>
                            <li>
                                <a href="chartist.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Chartist
                                </a>
                            </li>
                            <li>
                                <a href="rickshaw.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Rickshaw Charts
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span class="link-title menu_hide">&nbsp; Users</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="users.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; User Grid
                                </a>
                            </li>
                            <li>
                                <a href="add_user.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Add User
                                </a>
                            </li>
                            <li>
                                <a href="view_user.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; User Profile
                                </a>
                            </li>
                            <li>
                                <a href="delete_user.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Delete User
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="calendar.html">
                            <i class="fa fa-calendar"></i>
                            <span class="link-title menu_hide">&nbsp; Calendar</span>
                            <span class="badge badge-pill badge-primary float-right calendar_badge menu_hide">7</span>
                        </a>
                    </li>
                    <li>
                        <a href="gallery.html">
                            <i class="fa fa-picture-o"></i>
                            <span class="link-title menu_hide"> Gallery</span>
                        </a>
                    </li>
                    <li class="dropdown_menu">
                        <a href="#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="link-title menu_hide">&nbsp; Email</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="mail_compose.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Compose
                                </a>
                            </li>
                            <li>
                                <a href="mail_inbox.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Inbox
                                </a>
                            </li>

                            <li>
                                <a href="mail_view.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; View
                                </a>
                            </li>
                            <li>
                                <a href="mail_sent.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Sent
                                </a>
                            </li>
                            <li>
                                <a href="mail_spam.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Spam
                                </a>
                            </li>

                            <li>
                                <a href="mail_draft.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Draft
                                </a>
                            </li>
                            <li>
                                <a href="mail_trash.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Trash
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="#">
                            <i class="fa fa-map-marker"></i>
                            <span class="link-title menu_hide">&nbsp; Maps</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="maps.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Google Maps
                                </a>
                            </li>
                            <li>
                                <a href="jqvmaps.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Vector Maps
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-file"></i>
                            <span class="link-title menu_hide">&nbsp; Pages</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="404.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; 404
                                </a>
                            </li>
                            <li>
                                <a href="500.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; 500
                                </a>
                            </li>
                            <li>
                                <a href="login1.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Login 1
                                </a>
                            </li>
                            <li>
                                <a href="login2.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;<span class="link-title">&nbsp;Login 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="login3.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;<span class="link-title">&nbsp;Login 3</span>
                                </a>
                            </li>
                            <li>
                                <a href="register1.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Register 1
                                </a>
                            </li>
                            <li>
                                <a href="register2.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;<span class="link-title">&nbsp;Register 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="register3.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;<span class="link-title">&nbsp;Register 3</span>
                                </a>
                            </li>
                            <li>
                                <a href="lockscreen.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Lock Screen 1
                                </a>
                            </li>
                            <li>
                                <a href="lockscreen2.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Lock Screen 2
                                </a>
                            </li>
                            <li>
                                <a href="lockscreen3.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Lock Screen 3
                                </a>
                            </li>
                            <li>
                                <a href="invoice.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Invoice
                                </a>
                            </li>
                            <li>
                                <a href="blank.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Blank Page
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-th"></i>
                            <span class="link-title menu_hide">&nbsp; Layouts</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="boxed.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Boxed Layout
                                </a>
                            </li>
                            <li>
                                <a href="fixed-header-boxed.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Boxed &amp; Fixed Header
                                </a>
                            </li>
                            <li>
                                <a href="fixed-header-menu.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Fixed Header &amp; Menu
                                </a>
                            </li>
                            <li>
                                <a href="fixed-header.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Fixed Header
                                </a>
                            </li>
                            <li>
                                <a href="fixed-menu-boxed.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Boxed &amp; Fixed Menu
                                </a>
                            </li>
                            <li>
                                <a href="fixed-menu.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Fixed Menu
                                </a>
                            </li>
                            <li>
                                <a href="no-header.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; No Header
                                </a>
                            </li>
                            <li>
                                <a href="no-left-sidebar.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; No Left Sidebar
                                </a>
                            </li>
                        </ul>
                    </li>
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
        <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-md-4 col-sm-4">
                            <h4 class="nav_top_align">
                                <i class="fa fa-th"></i>
                                Data Tables
                            </h4>
                        </div>
                        <div class="col-lg-6 col-md-8 col-sm-8">
                            <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                                <li class="breadcrumb-item">
                                    <a href="index1.html">
                                        <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">Tables</a>
                                </li>
                                <li class="breadcrumb-item active">Data Tables</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-light lter bg-container">
                    <div class="row">
                        <div class="col-12 data_tables">
                            <!-- BEGIN EXAMPLE1 TABLE PORTLET-->
                            <div class="card">
                                <div class="card-header bg-white">
                                    <i class="fa fa-table"></i> Datatable with Table Tools
                                </div>
                                <div class="card-block p-t-25">
                                    <div class="">
                                        <div class="pull-sm-right">
                                            <div class="tools pull-sm-right"></div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <thead>
                                        <tr>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th>Department</th>
                                            <th>Salary</th>
                                            <th>Company</th>
                                        </tr>
                                        </thead>
                                        <tbody><tr><td>Isaiah</td><td>Reichel</td><td>Clothing</td><td>$2363</td><td>Reichert, Haley and Mayer</td></tr><tr><td>Gertrude</td><td>Watsica</td><td>Books</td><td>$5439</td><td>Hahn LLC</td></tr><tr><td>Keyshawn</td><td>Gutmann</td><td>Shoes</td><td>$3748</td><td>Pagac and Sons</td></tr><tr><td>Coralie</td><td>Hoppe</td><td>Clothing</td><td>$2369</td><td>Torp - Batz</td></tr><tr><td>Vita</td><td>Eichmann</td><td>Home</td><td>$8997</td><td>Braun - Abernathy</td></tr><tr><td>Kurtis</td><td>Graham</td><td>Beauty</td><td>$6912</td><td>Satterfield - Lockman</td></tr><tr><td>Elise</td><td>Mante</td><td>Music</td><td>$7884</td><td>Gibson - Hills</td></tr><tr><td>Sydnee</td><td>Lemke</td><td>Shoes</td><td>$4999</td><td>Roob Inc</td></tr><tr><td>Bridget</td><td>Shanahan</td><td>Home</td><td>$4412</td><td>Klein - Ryan</td></tr><tr><td>Sofia</td><td>Dare</td><td>Music</td><td>$6230</td><td>McCullough, Reilly and Rempel</td></tr><tr><td>Allison</td><td>Adams</td><td>Sports</td><td>$2658</td><td>Will, Ryan and Casper</td></tr><tr><td>Reese</td><td>Grant</td><td>Movies</td><td>$6288</td><td>Ryan - Stehr</td></tr><tr><td>Carlo</td><td>Pagac</td><td>Jewelery</td><td>$8824</td><td>Mante, Conroy and Lockman</td></tr><tr><td>Glenna</td><td>Kuphal</td><td>Electronics</td><td>$2494</td><td>Williamson - Walter</td></tr><tr><td>Arthur</td><td>Rath</td><td>Shoes</td><td>$7859</td><td>Block - Cruickshank</td></tr><tr><td>Estell</td><td>Ward</td><td>Music</td><td>$5779</td><td>Willms - Harber</td></tr><tr><td>Zackery</td><td>Cartwright</td><td>Outdoors</td><td>$7859</td><td>Blick and Sons</td></tr><tr><td>Vladimir</td><td>Kreiger</td><td>Grocery</td><td>$5337</td><td>Predovic - Stiedemann</td></tr><tr><td>Edd</td><td>Satterfield</td><td>Computers</td><td>$4131</td><td>Wilderman, Volkman and Hyatt</td></tr><tr><td>Josh</td><td>Gleichner</td><td>Industrial</td><td>$6370</td><td>Ruecker and Sons</td></tr><tr><td>Nyasia</td><td>Flatley</td><td>Tools</td><td>$7303</td><td>Schultz LLC</td></tr><tr><td>Ansel</td><td>Schmidt</td><td>Garden</td><td>$3206</td><td>Gutmann Group</td></tr><tr><td>Reinhold</td><td>Murphy</td><td>Automotive</td><td>$3803</td><td>Grant - Effertz</td></tr><tr><td>Patience</td><td>Rowe</td><td>Industrial</td><td>$2059</td><td>Gutmann LLC</td></tr><tr><td>Mack</td><td>Bechtelar</td><td>Computers</td><td>$8387</td><td>Kuvalis Group</td></tr><tr><td>Shemar</td><td>Schroeder</td><td>Shoes</td><td>$4877</td><td>Huels - Kling</td></tr><tr><td>Benjamin</td><td>Walker</td><td>Beauty</td><td>$9479</td><td>Stamm, Howe and Mraz</td></tr><tr><td>Jana</td><td>Pouros</td><td>Books</td><td>$6469</td><td>Pollich and Sons</td></tr><tr><td>Favian</td><td>Turner</td><td>Health</td><td>$8729</td><td>Fritsch - Funk</td></tr><tr><td>Cyril</td><td>Wolff</td><td>Computers</td><td>$9357</td><td>Runte Inc</td></tr><tr><td>Enrique</td><td>Lakin</td><td>Automotive</td><td>$8676</td><td>Ziemann - Dach</td></tr><tr><td>Zane</td><td>Hayes</td><td>Shoes</td><td>$3308</td><td>Luettgen Inc</td></tr><tr><td>Jennings</td><td>Hartmann</td><td>Grocery</td><td>$4084</td><td>Mosciski - Cummerata</td></tr><tr><td>Muhammad</td><td>Kiehn</td><td>Computers</td><td>$7328</td><td>Nolan - Champlin</td></tr><tr><td>Ned</td><td>Rohan</td><td>Electronics</td><td>$4029</td><td>Gislason - Rau</td></tr><tr><td>Nestor</td><td>Wisoky</td><td>Books</td><td>$4923</td><td>Buckridge LLC</td></tr><tr><td>Mark</td><td>O'Connell</td><td>Beauty</td><td>$9228</td><td>Kohler, Huels and Grimes</td></tr><tr><td>Sigmund</td><td>Kuphal</td><td>Kids</td><td>$4319</td><td>O'Connell Inc</td></tr><tr><td>Yasmeen</td><td>Trantow</td><td>Home</td><td>$3879</td><td>Will - Zboncak</td></tr><tr><td>Kory</td><td>Dibbert</td><td>Outdoors</td><td>$5853</td><td>Rosenbaum - Klocko</td></tr></tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE1 TABLE PORTLET-->
                            <!-- BEGIN EXAMPLE2 TABLE PORTLET-->
                            <div class="card m-t-35">
                                <div class="card-header bg-white">
                                    <i class="fa fa-table"></i> Show/Hide Columns
                                </div>
                                <div class="card-block m-t-35">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <div class="float-md-right text-center">
                                                <div class="btn-group show-hide">
                                                    <a class="btn btn-primary" href="#" data-toggle="dropdown">
                                                        Columns
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <div id="sample_4_column_toggler" class="dropdown-menu dropdown-checkboxes dropdown_checkbox_margin_left float-right">
                                                        <label>
                                                            <input type="checkbox" checked data-column="1">Name</label>
                                                        <label>
                                                            <input type="checkbox" checked data-column="2">Age</label>
                                                        <label>
                                                            <input type="checkbox" checked data-column="3">Location</label>
                                                        <label>
                                                            <input type="checkbox" checked data-column="4">Contact</label>
                                                        <label>
                                                            <input type="checkbox" checked data-column="5">Email</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-bordered table_res" id="sample_4">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th class="hidden-xs">Location</th>
                                            <th class="hidden-xs">Contact</th>
                                            <th class="hidden-xs">Email</th>
                                        </tr>
                                        </thead>
                                        <tbody><tr><td>Kiana Hahn</td><td>50</td><td>New Jonatan</td><td>365-997-1149</td><td>Kiana73@hotmail.com</td></tr><tr><td>Octavia Gibson</td><td>76</td><td>Lake Breanneville</td><td>778-708-0735</td><td>Octavia_Gibson17@gmail.com</td></tr><tr><td>Julia Reichel</td><td>24</td><td>North Darronberg</td><td>736-915-3862</td><td>Julia.Reichel92@yahoo.com</td></tr><tr><td>Justine Schowalter</td><td>68</td><td>East Jamirview</td><td>294-283-9728</td><td>Justine94@gmail.com</td></tr><tr><td>Maxwell Zemlak</td><td>54</td><td>Eunahaven</td><td>509-542-4821</td><td>Maxwell.Zemlak@yahoo.com</td></tr><tr><td>Maribel Gerhold</td><td>71</td><td>Estelletown</td><td>957-879-7629</td><td>Maribel.Gerhold@gmail.com</td></tr><tr><td>Yazmin Turcotte</td><td>31</td><td>Andrewbury</td><td>110-791-2923</td><td>Yazmin1@yahoo.com</td></tr><tr><td>Rahul Tromp</td><td>67</td><td>Lake Briceview</td><td>729-132-8087</td><td>Rahul28@yahoo.com</td></tr><tr><td>Jasmin Gusikowski</td><td>73</td><td>North Abigailshire</td><td>903-765-3090</td><td>Jasmin.Gusikowski@yahoo.com</td></tr><tr><td>Cale Gleason</td><td>32</td><td>Lake Genevieve</td><td>759-886-4400</td><td>Cale.Gleason@yahoo.com</td></tr><tr><td>Kayley Kerluke</td><td>75</td><td>South Trishaborough</td><td>279-286-5278</td><td>Kayley.Kerluke@gmail.com</td></tr><tr><td>Floyd Farrell</td><td>30</td><td>Wymanfurt</td><td>796-336-6537</td><td>Floyd.Farrell18@yahoo.com</td></tr><tr><td>Zackary Daniel</td><td>24</td><td>Janicetown</td><td>880-030-1600</td><td>Zackary79@hotmail.com</td></tr><tr><td>Santos Kunde</td><td>42</td><td>Baumbachstad</td><td>198-036-6433</td><td>Santos.Kunde33@yahoo.com</td></tr><tr><td>Dominique Berge</td><td>78</td><td>Aniyahmouth</td><td>779-004-1917</td><td>Dominique.Berge18@yahoo.com</td></tr><tr><td>Fabian Dickinson</td><td>54</td><td>Jerrellfort</td><td>483-827-5678</td><td>Fabian39@hotmail.com</td></tr><tr><td>Rosie White</td><td>40</td><td>Labadieshire</td><td>275-183-8949</td><td>Rosie61@yahoo.com</td></tr><tr><td>Karlie Cartwright</td><td>53</td><td>East Rubie</td><td>553-077-5020</td><td>Karlie.Cartwright19@hotmail.com</td></tr><tr><td>Grace Romaguera</td><td>41</td><td>Kutchshire</td><td>577-578-2307</td><td>Grace_Romaguera71@hotmail.com</td></tr><tr><td>Gerhard Dietrich</td><td>36</td><td>DuBuqueville</td><td>513-028-9142</td><td>Gerhard32@gmail.com</td></tr><tr><td>Francisca Hoeger</td><td>32</td><td>Novashire</td><td>998-135-3293</td><td>Francisca28@hotmail.com</td></tr><tr><td>Kendrick Dicki</td><td>61</td><td>East Toneyview</td><td>564-020-2377</td><td>Kendrick_Dicki@gmail.com</td></tr><tr><td>Priscilla Mosciski</td><td>49</td><td>Arnoview</td><td>247-303-7787</td><td>Priscilla.Mosciski27@yahoo.com</td></tr><tr><td>Emilia Quigley</td><td>35</td><td>Port Theodore</td><td>799-808-7144</td><td>Emilia_Quigley@yahoo.com</td></tr><tr><td>Lora Eichmann</td><td>61</td><td>Madysonshire</td><td>048-143-3979</td><td>Lora.Eichmann84@hotmail.com</td></tr><tr><td>Clarabelle Ortiz</td><td>73</td><td>Bergstromburgh</td><td>078-181-4484</td><td>Clarabelle50@hotmail.com</td></tr><tr><td>Vidal Schoen</td><td>61</td><td>Evelineberg</td><td>646-285-6354</td><td>Vidal6@hotmail.com</td></tr><tr><td>Magdalen Gerlach</td><td>77</td><td>Port Bernita</td><td>705-210-0934</td><td>Magdalen70@hotmail.com</td></tr><tr><td>Noe Gislason</td><td>37</td><td>Hoyttown</td><td>451-812-2902</td><td>Noe.Gislason@yahoo.com</td></tr><tr><td>Jeff Schimmel</td><td>72</td><td>Celiabury</td><td>443-011-6606</td><td>Jeff.Schimmel37@yahoo.com</td></tr><tr><td>Tyrell O'Reilly</td><td>21</td><td>Port Isaiahton</td><td>586-140-4624</td><td>Tyrell.OReilly70@gmail.com</td></tr><tr><td>Gene Erdman</td><td>27</td><td>Maureentown</td><td>480-708-5384</td><td>Gene.Erdman@gmail.com</td></tr><tr><td>Milo Spinka</td><td>78</td><td>Lakinbury</td><td>587-441-1827</td><td>Milo99@yahoo.com</td></tr><tr><td>Iva Hegmann</td><td>79</td><td>Smithside</td><td>496-238-5308</td><td>Iva.Hegmann@gmail.com</td></tr><tr><td>Hal Mayer</td><td>51</td><td>North Jeanshire</td><td>533-082-9278</td><td>Hal_Mayer@gmail.com</td></tr><tr><td>Garret Will</td><td>58</td><td>New Evelyn</td><td>878-572-7402</td><td>Garret_Will33@yahoo.com</td></tr><tr><td>Reyes Stehr</td><td>70</td><td>North Giles</td><td>011-439-1435</td><td>Reyes_Stehr@yahoo.com</td></tr><tr><td>Abagail Predovic</td><td>40</td><td>Krystinaburgh</td><td>222-092-1224</td><td>Abagail6@yahoo.com</td></tr><tr><td>Bridie Gerlach</td><td>59</td><td>New Elsie</td><td>486-238-7849</td><td>Bridie.Gerlach30@hotmail.com</td></tr><tr><td>Natalie Renner</td><td>54</td><td>North Maiyahaven</td><td>987-939-9063</td><td>Natalie_Renner60@gmail.com</td></tr><tr><td>Mandy Buckridge</td><td>62</td><td>Kihnbury</td><td>712-815-4573</td><td>Mandy75@gmail.com</td></tr><tr><td>Matilda Green</td><td>60</td><td>Gaylordport</td><td>404-572-7719</td><td>Matilda_Green61@yahoo.com</td></tr><tr><td>Brandon Koch</td><td>62</td><td>East Adonis</td><td>004-535-4509</td><td>Brandon.Koch@yahoo.com</td></tr></tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE2 TABLE PORTLET-->
                            <!-- BEGIN EXAMPLE3 TABLE PORTLET-->
                            <div class="card m-t-35">
                                <div class="card-header bg-white ">
                                    <i class="fa fa-table"></i> Scroller
                                </div>
                                <div class="card-block p-t-10">
                                    <div class="m-t-25">
                                        <table class="table table-striped table-bordered table-hover" id="sample_5">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>DOB</th>
                                                <th>Location</th>
                                            </tr>
                                            </thead>
                                            <tbody><tr><td>Walton Walter</td><td>Walton_Walter63</td><td>1973-1-22</td><td>West Queenview</td></tr><tr><td>Maggie Rath</td><td>Maggie_Rath54</td><td>1982-5-21</td><td>South Gastonmouth</td></tr><tr><td>Kylee Flatley</td><td>Kylee_Flatley78</td><td>1989-3-26</td><td>Lake Kayden</td></tr><tr><td>Mortimer Auer</td><td>Mortimer57</td><td>1990-3-6</td><td>West Anniefort</td></tr><tr><td>Birdie Donnelly</td><td>Birdie_Donnelly60</td><td>1971-7-2</td><td>South Estella</td></tr><tr><td>Era Kutch</td><td>Era.Kutch95</td><td>1978-10-23</td><td>West Lucashaven</td></tr><tr><td>Josefa VonRueden</td><td>Josefa51</td><td>1991-6-3</td><td>Lake Erica</td></tr><tr><td>Alexandrine Greenholt</td><td>Alexandrine54</td><td>1992-8-6</td><td>Kristoferton</td></tr><tr><td>Larue Romaguera</td><td>Larue.Romaguera</td><td>1960-7-26</td><td>Port Jenniefort</td></tr><tr><td>Lurline Swaniawski</td><td>Lurline97</td><td>1943-10-4</td><td>East Brian</td></tr><tr><td>Vallie Hintz</td><td>Vallie65</td><td>1943-8-4</td><td>South Darionshire</td></tr><tr><td>Rahul Walter</td><td>Rahul93</td><td>1988-8-16</td><td>New Clarabelle</td></tr><tr><td>Alta Hickle</td><td>Alta_Hickle</td><td>1976-3-4</td><td>Port Vance</td></tr><tr><td>Brayan Windler</td><td>Brayan.Windler73</td><td>1961-1-28</td><td>Walkerborough</td></tr><tr><td>Antone Block</td><td>Antone.Block</td><td>1983-7-23</td><td>Port Eldaborough</td></tr><tr><td>Serena Pfannerstill</td><td>Serena_Pfannerstill</td><td>1950-11-10</td><td>West Cieloview</td></tr><tr><td>Brittany Little</td><td>Brittany2</td><td>1943-8-23</td><td>Lenorabury</td></tr><tr><td>Tyrese Willms</td><td>Tyrese_Willms3</td><td>1992-2-12</td><td>Port Stonechester</td></tr><tr><td>Reese Hauck</td><td>Reese.Hauck40</td><td>1961-8-16</td><td>McDermottshire</td></tr><tr><td>Marie Maggio</td><td>Marie.Maggio</td><td>1975-5-4</td><td>New Margarett</td></tr><tr><td>Rosella Monahan</td><td>Rosella_Monahan</td><td>1975-4-7</td><td>New Robbiefurt</td></tr><tr><td>Beau Monahan</td><td>Beau89</td><td>1943-11-25</td><td>Port Amya</td></tr><tr><td>Julia Metz</td><td>Julia.Metz</td><td>1958-1-7</td><td>Port Elfriedahaven</td></tr><tr><td>Tatyana Terry</td><td>Tatyana_Terry</td><td>1954-2-23</td><td>North Javon</td></tr><tr><td>Lizeth Kutch</td><td>Lizeth.Kutch</td><td>1944-7-8</td><td>Lake Adaline</td></tr><tr><td>Anthony Hackett</td><td>Anthony.Hackett54</td><td>1970-9-7</td><td>South Joanaborough</td></tr><tr><td>Kaya McDermott</td><td>Kaya49</td><td>1984-2-17</td><td>North Robbie</td></tr><tr><td>Antonia Auer</td><td>Antonia23</td><td>1952-8-2</td><td>Ardenfurt</td></tr><tr><td>Marisa Cassin</td><td>Marisa_Cassin</td><td>1980-9-8</td><td>Lake Monserrateton</td></tr><tr><td>Curt Kassulke</td><td>Curt57</td><td>1942-10-9</td><td>North Johnnychester</td></tr><tr><td>Waino Stiedemann</td><td>Waino.Stiedemann</td><td>1970-9-24</td><td>West Kianburgh</td></tr><tr><td>Scottie Sipes</td><td>Scottie.Sipes</td><td>1989-8-21</td><td>North Paigefort</td></tr><tr><td>Dylan Kemmer</td><td>Dylan21</td><td>1963-3-15</td><td>Millsstad</td></tr><tr><td>Thora Johnson</td><td>Thora83</td><td>1992-2-15</td><td>Trompberg</td></tr><tr><td>Ervin Bartoletti</td><td>Ervin.Bartoletti</td><td>1962-3-6</td><td>South Patience</td></tr><tr><td>Morris Ritchie</td><td>Morris.Ritchie</td><td>1981-3-9</td><td>Brielleview</td></tr><tr><td>Sonia Streich</td><td>Sonia_Streich</td><td>1982-9-13</td><td>Tonyview</td></tr><tr><td>Cory Boyle</td><td>Cory98</td><td>1978-7-9</td><td>Kallieton</td></tr><tr><td>Fidel Ratke</td><td>Fidel_Ratke</td><td>1972-7-7</td><td>Deannabury</td></tr><tr><td>Conrad Jast</td><td>Conrad.Jast</td><td>1962-11-26</td><td>East Alanis</td></tr><tr><td>Chloe Daugherty</td><td>Chloe.Daugherty22</td><td>1944-7-17</td><td>Feestfurt</td></tr><tr><td>Leonel O'Keefe</td><td>Leonel.OKeefe97</td><td>1989-6-1</td><td>Satterfieldbury</td></tr><tr><td>Lizzie Dibbert</td><td>Lizzie_Dibbert86</td><td>1948-4-12</td><td>New Pauline</td></tr><tr><td>Juliet Schmitt</td><td>Juliet.Schmitt</td><td>1985-7-23</td><td>Sidneyfurt</td></tr><tr><td>Thalia Jacobs</td><td>Thalia97</td><td>1944-9-16</td><td>Binsville</td></tr><tr><td>Levi McClure</td><td>Levi.McClure80</td><td>1950-7-24</td><td>Calebmouth</td></tr><tr><td>Dayne Howe</td><td>Dayne.Howe89</td><td>1956-4-14</td><td>Athenamouth</td></tr><tr><td>Scotty Flatley</td><td>Scotty_Flatley</td><td>1965-9-18</td><td>Noemibury</td></tr><tr><td>Kaycee Schneider</td><td>Kaycee20</td><td>1950-7-9</td><td>West Matilde</td></tr><tr><td>Ward Corkery</td><td>Ward.Corkery44</td><td>1946-11-29</td><td>West Brigittehaven</td></tr></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END EXAMPLE3 TABLE PORTLET-->
                            <!-- BEGIN EXAMPLE4 TABLE PORTLET-->
                            <div class="card m-t-35">
                                <div class="card-header bg-white">
                                    <i class="fa fa-table"></i> Columns Reorder
                                </div>
                                <div class="card-block p-t-10">
                                    <div class=" m-t-25">
                                        <table class="table table-striped table-bordered table-hover " id="sample_6">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Age</th>
                                                <th class="hidden-xs">Email</th>
                                                <th class="hidden-xs">Account type</th>
                                                <th class="hidden-xs">Location</th>
                                            </tr>
                                            </thead>
                                            <tbody><tr><td>Annie Friesen</td><td>64</td><td>Annie.Friesen45@yahoo.com</td><td>Auto Loan Account</td><td>Port Ellis</td></tr><tr><td>Talia Nikolaus</td><td>67</td><td>Talia.Nikolaus@hotmail.com</td><td>Auto Loan Account</td><td>New Granvillefurt</td></tr><tr><td>Ignatius Turcotte</td><td>77</td><td>Ignatius.Turcotte@yahoo.com</td><td>Checking Account</td><td>Zechariahtown</td></tr><tr><td>Lora Anderson</td><td>58</td><td>Lora12@hotmail.com</td><td>Savings Account</td><td>Port Lessie</td></tr><tr><td>Easton Parker</td><td>71</td><td>Easton_Parker@gmail.com</td><td>Auto Loan Account</td><td>West Aurelie</td></tr><tr><td>Vincenza Dare</td><td>67</td><td>Vincenza_Dare61@gmail.com</td><td>Savings Account</td><td>East Macieville</td></tr><tr><td>Flavie Gerhold</td><td>42</td><td>Flavie.Gerhold43@gmail.com</td><td>Personal Loan Account</td><td>South Denafort</td></tr><tr><td>Federico Mohr</td><td>41</td><td>Federico.Mohr@hotmail.com</td><td>Credit Card Account</td><td>Kirlinchester</td></tr><tr><td>Rocky McKenzie</td><td>80</td><td>Rocky16@yahoo.com</td><td>Auto Loan Account</td><td>Stoneberg</td></tr><tr><td>Brad Johns</td><td>21</td><td>Brad_Johns84@gmail.com</td><td>Home Loan Account</td><td>South Isacborough</td></tr><tr><td>Chad Paucek</td><td>55</td><td>Chad85@gmail.com</td><td>Savings Account</td><td>East Paul</td></tr><tr><td>Trent Parker</td><td>41</td><td>Trent48@yahoo.com</td><td>Investment Account</td><td>Carrollfort</td></tr><tr><td>Eriberto Collier</td><td>62</td><td>Eriberto_Collier@gmail.com</td><td>Home Loan Account</td><td>Lyrictown</td></tr><tr><td>Terence Streich</td><td>79</td><td>Terence84@yahoo.com</td><td>Savings Account</td><td>Port Ismaelmouth</td></tr><tr><td>Audrey Parker</td><td>23</td><td>Audrey_Parker@hotmail.com</td><td>Home Loan Account</td><td>Wolffchester</td></tr><tr><td>Rose Nader</td><td>26</td><td>Rose.Nader23@hotmail.com</td><td>Savings Account</td><td>Port Anibal</td></tr><tr><td>Otho Ruecker</td><td>30</td><td>Otho43@gmail.com</td><td>Checking Account</td><td>New Marcelle</td></tr><tr><td>Sigurd Tremblay</td><td>28</td><td>Sigurd.Tremblay36@gmail.com</td><td>Money Market Account</td><td>Treutelborough</td></tr><tr><td>Manley Schuppe</td><td>51</td><td>Manley5@gmail.com</td><td>Auto Loan Account</td><td>New Micaelamouth</td></tr><tr><td>Malinda Pollich</td><td>35</td><td>Malinda.Pollich@gmail.com</td><td>Personal Loan Account</td><td>Carrollstad</td></tr><tr><td>Susana Wyman</td><td>50</td><td>Susana64@hotmail.com</td><td>Credit Card Account</td><td>Grimestown</td></tr><tr><td>Andy Kihn</td><td>73</td><td>Andy99@hotmail.com</td><td>Savings Account</td><td>North Solontown</td></tr><tr><td>Rebeka Lubowitz</td><td>58</td><td>Rebeka_Lubowitz35@gmail.com</td><td>Checking Account</td><td>Cadeview</td></tr><tr><td>Clotilde Bogisich</td><td>79</td><td>Clotilde.Bogisich86@gmail.com</td><td>Auto Loan Account</td><td>West Maiya</td></tr><tr><td>Victor Stracke</td><td>22</td><td>Victor_Stracke@hotmail.com</td><td>Investment Account</td><td>New Kole</td></tr><tr><td>Carmela Stoltenberg</td><td>50</td><td>Carmela33@yahoo.com</td><td>Savings Account</td><td>Joliemouth</td></tr><tr><td>Lydia Medhurst</td><td>69</td><td>Lydia.Medhurst@gmail.com</td><td>Credit Card Account</td><td>Rudyberg</td></tr><tr><td>Damion Walsh</td><td>38</td><td>Damion.Walsh77@gmail.com</td><td>Personal Loan Account</td><td>South Olin</td></tr><tr><td>Nestor Sawayn</td><td>26</td><td>Nestor31@yahoo.com</td><td>Home Loan Account</td><td>Janieport</td></tr><tr><td>Alia Klein</td><td>71</td><td>Alia.Klein63@gmail.com</td><td>Auto Loan Account</td><td>New Ethel</td></tr><tr><td>Penelope Brown</td><td>47</td><td>Penelope42@hotmail.com</td><td>Savings Account</td><td>Port Braulio</td></tr><tr><td>Felicia Hayes</td><td>37</td><td>Felicia53@yahoo.com</td><td>Home Loan Account</td><td>Turcotteberg</td></tr><tr><td>Sammie Stoltenberg</td><td>36</td><td>Sammie.Stoltenberg@gmail.com</td><td>Savings Account</td><td>North Walkermouth</td></tr><tr><td>General Quitzon</td><td>42</td><td>General.Quitzon3@hotmail.com</td><td>Personal Loan Account</td><td>Joliestad</td></tr><tr><td>Caterina Leuschke</td><td>75</td><td>Caterina79@yahoo.com</td><td>Credit Card Account</td><td>East Alvis</td></tr><tr><td>Mafalda Romaguera</td><td>80</td><td>Mafalda_Romaguera@hotmail.com</td><td>Money Market Account</td><td>Cloydfurt</td></tr><tr><td>Simeon O'Conner</td><td>66</td><td>Simeon_OConner@gmail.com</td><td>Savings Account</td><td>Jonesbury</td></tr><tr><td>Grayson Douglas</td><td>42</td><td>Grayson.Douglas81@hotmail.com</td><td>Auto Loan Account</td><td>Floridaborough</td></tr><tr><td>Leonardo Hegmann</td><td>68</td><td>Leonardo.Hegmann44@yahoo.com</td><td>Investment Account</td><td>Lake Rosario</td></tr><tr><td>Jane Nitzsche</td><td>29</td><td>Jane_Nitzsche41@yahoo.com</td><td>Personal Loan Account</td><td>Bradtkechester</td></tr><tr><td>Brooks Thompson</td><td>31</td><td>Brooks_Thompson32@hotmail.com</td><td>Checking Account</td><td>East Lisa</td></tr><tr><td>Flavio Shields</td><td>57</td><td>Flavio47@gmail.com</td><td>Personal Loan Account</td><td>North Caylastad</td></tr><tr><td>Gloria Gerlach</td><td>25</td><td>Gloria.Gerlach@hotmail.com</td><td>Personal Loan Account</td><td>Roobport</td></tr><tr><td>Christ Walker</td><td>65</td><td>Christ73@hotmail.com</td><td>Checking Account</td><td>Lavonmouth</td></tr><tr><td>Emmanuel Nienow</td><td>75</td><td>Emmanuel.Nienow@hotmail.com</td><td>Money Market Account</td><td>Kemmerview</td></tr><tr><td>Corine Lemke</td><td>54</td><td>Corine16@gmail.com</td><td>Credit Card Account</td><td>South Nasir</td></tr><tr><td>Jada Satterfield</td><td>34</td><td>Jada.Satterfield@gmail.com</td><td>Savings Account</td><td>New Terencemouth</td></tr><tr><td>Isac Gibson</td><td>64</td><td>Isac.Gibson96@yahoo.com</td><td>Personal Loan Account</td><td>West Matilde</td></tr><tr><td>Cade Crooks</td><td>38</td><td>Cade79@yahoo.com</td><td>Savings Account</td><td>North Dellaview</td></tr><tr><td>Marshall Jacobson</td><td>71</td><td>Marshall16@gmail.com</td><td>Auto Loan Account</td><td>Port Hyman</td></tr></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END EXAMPLE4 TABLE PORTLET-->
                            <div class="card m-t-35">
                                <div class="card-header bg-white">
                                    Server side row details
                                </div>
                                <div class="card-block m-t-35">
                                    <table id="row_details" class="display table-bordered responsive nowrap">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Department</th>
                                            <th>Contact</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Sarah Leannon</td>
                                            <td>Sarah22</td>
                                            <td>Sarah@hotmail.com</td>
                                            <td>Toys</td>
                                            <td>269-277-7340</td>
                                        </tr>
                                        <tr>
                                            <td>Prudence Braun</td>
                                            <td>Prudence.Braun</td>
                                            <td>Prudence@yahoo.com</td>
                                            <td>Home</td>
                                            <td>259-294-8730</td>
                                        </tr>
                                        <tr>
                                            <td>Frederik Beier</td>
                                            <td>Frederik_Beier71</td>
                                            <td>Frederik@yahoo.com</td>
                                            <td>Health</td>
                                            <td>115-781-3501</td>
                                        </tr>
                                        <tr>
                                            <td>Devyn Heathcote</td>
                                            <td>Devyn.Heathcote</td>
                                            <td>Devyn@yahoo.com</td>
                                            <td>Garden</td>
                                            <td>030-811-3564</td>
                                        </tr>
                                        <tr>
                                            <td>Mellie Kuhic</td>
                                            <td>Mellie83</td>
                                            <td>Kuhic73@yahoo.com</td>
                                            <td>Clothing</td>
                                            <td>341-136-6740</td>
                                        </tr>
                                        <tr>
                                            <td>Nova Sauer</td>
                                            <td>Nova33</td>
                                            <td>Sauer@hotmail.com</td>
                                            <td>Music</td>
                                            <td>243-061-3771</td>
                                        </tr>
                                        <tr>
                                            <td>Demetrius Mills</td>
                                            <td>Demetrius33</td>
                                            <td>Mills@gmail.com</td>
                                            <td>Kids</td>
                                            <td>254-829-7615</td>
                                        </tr>
                                        <tr>
                                            <td>Hope Hessel</td>
                                            <td>Hope25</td>
                                            <td>Hope@gmail.com</td>
                                            <td>Books</td>
                                            <td>767-138-4997</td>
                                        </tr>
                                        <tr>
                                            <td>Jackeline Champlin</td>
                                            <td>Jackeline.Champlin</td>
                                            <td>Jackeline@yahoo.com</td>
                                            <td>Jewelery</td>
                                            <td>059-603-4311</td>
                                        </tr>
                                        <tr>
                                            <td>Meaghan Renner</td>
                                            <td>Meaghan_Renner</td>
                                            <td>Meaghan20@gmail.com</td>
                                            <td>Automotive</td>
                                            <td>939-379-9525</td>
                                        </tr>
                                        <tr>
                                            <td>Peggie Kassulke</td>
                                            <td>Peggie_Kassulke</td>
                                            <td>Peggiee@hotmail.com</td>
                                            <td>Clothing</td>
                                            <td>039-431-8024</td>
                                        </tr>
                                        <tr>
                                            <td>Paige Walsh</td>
                                            <td>Paige_Walsh</td>
                                            <td>Paige@gmail.com</td>
                                            <td>Health</td>
                                            <td>129-485-9542</td>
                                        </tr>
                                        <tr>
                                            <td>Lamont Hettinger</td>
                                            <td>Lamont.Hettinger77</td>
                                            <td>Lamont@yahoo.com</td>
                                            <td>Automotive</td>
                                            <td>056-955-2547</td>
                                        </tr>
                                        <tr>
                                            <td>Giovanni Mosciski</td>
                                            <td>Giovanni.Mosciski77</td>
                                            <td>Giovai14@yahoo.com</td>
                                            <td>Music</td>
                                            <td>013-913-2683</td>
                                        </tr>
                                        <tr>
                                            <td>Gregoria Baumbach</td>
                                            <td>Gregoria21</td>
                                            <td>Gregoria@gmail.com</td>
                                            <td>Shoes</td>
                                            <td>613-910-1426</td>
                                        </tr>
                                        <tr>
                                            <td>Orval Howe</td>
                                            <td>Orval84</td>
                                            <td>Howe64@hotmail.com</td>
                                            <td>Grocery</td>
                                            <td>679-519-4414</td>
                                        </tr>
                                        <tr>
                                            <td>Angelica Conroy</td>
                                            <td>Angelica_Conroy</td>
                                            <td>Conroy44@gmail.com</td>
                                            <td>Industrial</td>
                                            <td>360-505-8432</td>
                                        </tr>
                                        <tr>
                                            <td>Gillian Hickle</td>
                                            <td>Gillian.Hickle30</td>
                                            <td>Gillian57@gmail.com</td>
                                            <td>Home</td>
                                            <td>159-164-6997</td>
                                        </tr>
                                        <tr>
                                            <td>Willa Feeney</td>
                                            <td>Willa58</td>
                                            <td>Feeney17@hotmail.com</td>
                                            <td>Games</td>
                                            <td>939-683-3718</td>
                                        </tr>
                                        <tr>
                                            <td>Elyse Cassin</td>
                                            <td>Elyse.Cassin</td>
                                            <td>Cassin72@hotmail.com</td>
                                            <td>Outdoors</td>
                                            <td>584-891-5946</td>
                                        </tr>
                                        <tr>
                                            <td>Miracle Hessel</td>
                                            <td>Miracle.Hessel</td>
                                            <td>Miracle@gmail.com</td>
                                            <td>Shoes</td>
                                            <td>549-158-1206</td>
                                        </tr>
                                        <tr>
                                            <td>Ethyl Pfannerstill</td>
                                            <td>Ethyl_Pfannerstill</td>
                                            <td>Ethyl@gmail.com</td>
                                            <td>Shoes</td>
                                            <td>643-622-2951</td>
                                        </tr>
                                        <tr>
                                            <td>Adah Ortiz</td>
                                            <td>Adah95</td>
                                            <td>Adah48@gmail.com</td>
                                            <td>Tools</td>
                                            <td>270-691-3304</td>
                                        </tr>
                                        <tr>
                                            <td>Berniece Klein</td>
                                            <td>Berniece_Klein</td>
                                            <td>Berniece3@yahoo.com</td>
                                            <td>Health</td>
                                            <td>211-699-9576</td>
                                        </tr>
                                        <tr>
                                            <td>Jordi Breitenberg</td>
                                            <td>Jordi59</td>
                                            <td>Jordi@yahoo.com</td>
                                            <td>Sports</td>
                                            <td>694-292-9691</td>
                                        </tr>
                                        <tr>
                                            <td>Adalberto Satterfield</td>
                                            <td>Adalberto94</td>
                                            <td>Adal@yahoo.com</td>
                                            <td>Books</td>
                                            <td>095-203-5357</td>
                                        </tr>
                                        <tr>
                                            <td>Reese Turner</td>
                                            <td>Reese21</td>
                                            <td>Reese27@hotmail.com</td>
                                            <td>Tools</td>
                                            <td>225-264-1503</td>
                                        </tr>
                                        <tr>
                                            <td>Tad Maggio</td>
                                            <td>Tad17</td>
                                            <td>Tad41@hotmail.com</td>
                                            <td>Baby</td>
                                            <td>238-050-3173</td>
                                        </tr>
                                        <tr>
                                            <td>Arlo Smitham</td>
                                            <td>Arlo_Smitham</td>
                                            <td>Smitham@hotmail.com</td>
                                            <td>Movies</td>
                                            <td>797-948-0375</td>
                                        </tr>
                                        <tr>
                                            <td>Orlando Pfannerstill</td>
                                            <td>Orlando20</td>
                                            <td>Orlando17@yahoo.com</td>
                                            <td>Sports</td>
                                            <td>683-899-2503</td>
                                        </tr>
                                        <tr>
                                            <td>Susan Hessel</td>
                                            <td>Susan_Hessel88</td>
                                            <td>Hessel60@gmail.com</td>
                                            <td>Home</td>
                                            <td>004-134-6430</td>
                                        </tr>
                                        <tr>
                                            <td>Luigi Veum</td>
                                            <td>Luigi_Veum</td>
                                            <td>Luigi75@hotmail.com</td>
                                            <td>Toys</td>
                                            <td>846-211-9311</td>
                                        </tr>
                                        <tr>
                                            <td>Emmie Rau</td>
                                            <td>Emmie_Rau7</td>
                                            <td>Emmie@hotmail.com</td>
                                            <td>Games</td>
                                            <td>151-075-1800</td>
                                        </tr>
                                        <tr>
                                            <td>Jessika Johns</td>
                                            <td>Jessika66</td>
                                            <td>Jessika@yahoo.com</td>
                                            <td>Beauty</td>
                                            <td>850-092-7783</td>
                                        </tr>
                                        <tr>
                                            <td>Elmore Hartmann</td>
                                            <td>Elmore_Hartmann</td>
                                            <td>Elmore@gmail.com</td>
                                            <td>Computers</td>
                                            <td>821-435-4775</td>
                                        </tr>
                                        <tr>
                                            <td>Liliana Schowalter</td>
                                            <td>Liliana67</td>
                                            <td>Liliana56@gmail.com</td>
                                            <td>Tools</td>
                                            <td>615-363-6678</td>
                                        </tr>
                                        <tr>
                                            <td>Elmira Zboncak</td>
                                            <td>Elmira_Zboncak</td>
                                            <td>Zboncak45@yahoo.com</td>
                                            <td>Music</td>
                                            <td>313-074-4827</td>
                                        </tr>
                                        <tr>
                                            <td>Domenic Larkin</td>
                                            <td>Domenic_Larkin32</td>
                                            <td>Larkin@gmail.com</td>
                                            <td>Computers</td>
                                            <td>463-196-1446</td>
                                        </tr>
                                        <tr>
                                            <td>Josh Wolff</td>
                                            <td>Josh_Wolff</td>
                                            <td>Josh@yahoo.com</td>
                                            <td>Automotive</td>
                                            <td>302-250-6870</td>
                                        </tr>
                                        <tr>
                                            <td>Cullen Rosenbaum</td>
                                            <td>Cullen_Rosenbaum</td>
                                            <td>Rosenbaum6@yahoo.com</td>
                                            <td>Grocery</td>
                                            <td>928-465-2210</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.inner -->
            </div>
            <!-- /.outer -->
            <!-- Modal -->
            <div class="modal fade" id="search_modal" tabindex="-1" role="dialog"
                 aria-hidden="true">
                <form>
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="float-right" aria-hidden="true">&times;</span>
                            </button>
                            <div class="input-group search_bar_small">
                                <input type="text" class="form-control" placeholder="Search..." name="search">
                                <span class="input-group-btn">
        <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
      </span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /#content -->
    </div>
    <!--wrapper-->
    <div id="request_list">
        <div class="request_scrollable">
            <ul class="nav nav-tabs m-t-15">
                <li class="nav-item">
                    <a class="nav-link active text-center" href="#settings" data-toggle="tab">Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="#favourites" data-toggle="tab">Favorites</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="settings">
                    <div id="settings_section">
                        <div class="layout_styles mx-3">
                            <div class="row">
                                <div class="col-12 m-t-35">
                                    <h4>Layout settings</h4>
                                </div>
                            </div>
                            <form autocomplete="off">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="float-left m-t-20">Fixed Header</div>
                                        <div class="float-right m-t-15">
                                            <div id="setting_fixed_nav">
                                                <input class="make-switch" data-on-text="ON" data-off-text="OFF" type="checkbox"
                                                       data-size="small">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="float-left m-t-20">Fixed Menu</div>
                                        <div class="float-right m-t-15">
                                            <div id="setting_fixed_menunav">
                                                <input class="make-switch" data-on-text="ON" data-off-text="OFF" name="radioBox" type="checkbox"
                                                       data-size="small">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="float-left m-t-20">No Breadcrumb</div>
                                        <div class="float-right m-t-15">
                                            <div id="setting_breadcrumb">
                                                <input class="make-switch" data-on-text="ON" data-off-text="OFF" type="checkbox"
                                                       data-size="small">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="mx-3">
                            <div class="row">
                                <div class="col-12 m-t-35">
                                    <h4 class="setting_title">General Settings</h4>
                                </div>
                            </div>
                            <div class="data m-t-5">
                                <div class="row">
                                    <div class="col-2"><i class="fa fa-bell-o setting_ions text-info"></i></div>
                                    <div class="col-7">
                                        <span class="chat_name">Notifications</span><br/>
                                        Get new notifications
                                    </div>
                                    <div class="col-2 checkbox float-right">
                                        <label class="text-info">
                                            <input type="checkbox" value="" checked>
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="data">
                                <div class="row">
                                    <div class="col-2"><i class="fa fa-envelope-o setting_ions text-danger"></i>
                                    </div>
                                    <div class="col-7">
                                        <span class="chat_name">Messages</span><br/>
                                        Get new messages
                                    </div>
                                    <div class="col-2 checkbox float-right">
                                        <label class="text-danger">
                                            <input type="checkbox" value="" checked>
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="data">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-exclamation-triangle setting_ions text-warning"></i>
                                    </div>
                                    <div class="col-7">
                                        <span class="chat_name">Warnings</span><br/>
                                        Get new warnings
                                    </div>
                                    <div class="col-2 checkbox float-right">
                                        <label class="text-warning">
                                            <input type="checkbox" value="" checked>
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="data">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-calendar texlayout_stylest-primary setting_ions"></i>
                                    </div>
                                    <div class="col-7">
                                        <span class="chat_name">Events</span><br/>
                                        Show new events
                                    </div>
                                    <div class="col-2 checkbox float-right">
                                        <label class="text-primary">
                                            <input type="checkbox" value="" >
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="favourites">
                    <div id="requests" class="mx-3">
                        <div class="m-t-35">
                            <h4 class="setting_title">Favorites</h4>
                        </div>
                        <div class="data m-t-10">
                            <div class="row">
                                <div class="col-2">
                                    <img src="img/images1.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                <div class="col-8 message-data"><span class="chat_name">Philip J. Webb</span><br/>
                                    Available
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle text-success"></i>
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="row">
                                <div class="col-2">
                                    <img src="img/mailbox_imgs/8.jpg" class="message-img avatar rounded-circle" alt="avatar1">
                                </div>
                                <div class="col-8 message-data">
                                    <span class="chat_name">Nancy T. Strozier</span><br/>
                                    Away
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle text-warning"></i>
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="row">
                                <div class="col-2">
                                    <img src="img/mailbox_imgs/3.jpg" class="message-img avatar rounded-circle" alt="avatar1">
                                </div>
                                <div class="col-8 message-data">
                                    <span class="chat_name">Robbinson</span><br/>
                                    Offline
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle"></i>
                                </div>
                            </div>
                        </div>
                        <h4 class="setting_title">Contacts</h4>
                        <div class="data m-t-10">
                            <div class="row">
                                <div class="col-2">
                                    <img src="img/mailbox_imgs/7.jpg" class="message-img avatar rounded-circle" alt="avatar1">
                                </div>
                                <div class="col-8 message-data">
                                    <span class="chat_name">Chester Hardesty</span><br/>
                                    Busy
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle text-warning"></i>
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="row">
                                <div class="col-2">
                                    <img src="img/mailbox_imgs/2.jpg" class="message-img avatar rounded-circle"
                                         alt="avatar1"></div>
                                <div class="col-8 message-data">
                                    <span class="chat_name">Peter</span><br/>
                                    Online
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle text-warning"></i>
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="row">
                                <div class="col-2">
                                    <img src="img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle" alt="avatar1">
                                </div>
                                <div class="col-8 message-data">
                                    <span class="chat_name">Devin Hartsell</span><br/>
                                    Available
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle text-success"></i>
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="row">
                                <div class="col-2">
                                    <img src="img/mailbox_imgs/4.jpg" class="message-img avatar rounded-circle"
                                         alt="avatar1"></div>
                                <div class="col-8 message-data">
                                    <span class="chat_name">Kimy Zorda</span><br/>
                                    Available
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle text-success"></i>
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="row">
                                <div class="col-2">
                                    <img src="img/mailbox_imgs/5.jpg" class="message-img avatar rounded-circle"
                                         alt="avatar1"></div>
                                <div class="col-8 message-data">
                                    <span class="chat_name">Jessica Bell</span><br/>
                                    Offline
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#content -->
    <div id="right">
        <div class="right_content">
            <div class="well-small dark m-t-15">
                <div class="row m-0">
                    <div class="col-lg-12 p-d-0">
                        <div class="skinmulti_btn" onclick="javascript:loadjscssfile('blue_black_skin.css','css')">
                            <div class="skin_blue skin_size b_t_r"></div>
                            <div class="skin_blue_border skin_shaddow skin_size b_b_r"></div>
                        </div>
                        <div class="skinmulti_btn" onclick="javascript:loadjscssfile('green_black_skin.css','css')">
                            <div class="skin_green skin_size b_t_r"></div>
                            <div class="skin_green_border skin_shaddow skin_size b_b_r"></div>
                        </div>
                        <div class="skinmulti_btn" onclick="javascript:loadjscssfile('purple_black_skin.css','css')">
                            <div class="skin_purple skin_size b_t_r"></div>
                            <div class="skin_purple_border skin_shaddow skin_size b_b_r"></div>
                        </div>
                        <div class="skinmulti_btn" onclick="javascript:loadjscssfile('orange_black_skin.css','css')">
                            <div class="skin_orange skin_size b_t_r"></div>
                            <div class="skin_orange_border skin_shaddow skin_size b_b_r"></div>
                        </div>
                        <div class="skinmulti_btn" onclick="javascript:loadjscssfile('red_black_skin.css','css')">
                            <div class="skin_red skin_size b_t_r"></div>
                            <div class="skin_red_border skin_shaddow skin_size b_b_r"></div>
                        </div>
                        <div class="skinmulti_btn" onclick="javascript:loadjscssfile('mint_black_skin.css','css')">
                            <div class="skin_mint skin_size b_t_r"></div>
                            <div class="skin_mint_border skin_shaddow skin_size b_b_r"></div>
                        </div>
                        <!--</div>-->
                        <div class="skin_btn skinsingle_btn skin_blue b_r height_40 skin_shaddow"
                             onclick="javascript:loadjscssfile('blue_skin.css','css')"></div>
                        <div class="skin_btn skinsingle_btn skin_green b_r height_40 skin_shaddow"
                             onclick="javascript:loadjscssfile('green_skin.css','css')"></div>
                        <div class="skin_btn skinsingle_btn skin_purple b_r height_40 skin_shaddow"
                             onclick="javascript:loadjscssfile('purple_skin.css','css')"></div>
                        <div class="skin_btn  skinsingle_btn skin_orange b_r height_40 skin_shaddow"
                             onclick="javascript:loadjscssfile('orange_skin.css','css')"></div>
                        <div class="skin_btn skinsingle_btn skin_red b_r height_40 skin_shaddow"
                             onclick="javascript:loadjscssfile('red_skin.css','css')"></div>
                        <div class="skin_btn skinsingle_btn skin_mint b_r height_40 skin_shaddow"
                             onclick="javascript:loadjscssfile('mint_skin.css','css')"></div>
                    </div>
                    <div class="col-lg-12 text-center m-t-15">
                        <button class="btn btn-dark button-rounded"
                                onclick="javascript:loadjscssfile('black_skin.css','css')">Dark
                        </button>
                        <button class="btn btn-secondary button-rounded default_skin"
                                onclick="javascript:loadjscssfile('default_skin.css','css')">Default
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- # right side -->
</div>
<!-- /#wrap -->
<!-- global scripts-->
<script type="text/javascript" src="/js/dashboard/components.js"></script>
<script type="text/javascript" src="/js/dashboard/custom.js"></script>
<!--end of global scripts-->
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
<!-- end of global scripts-->
</body>

</html>--}}
