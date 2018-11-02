@extends('dashboard.layout')
@section('content')
    <div id="content" class="bg-container">
        <header class="head">
            <div class="main-bar">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <h4 class="nav_top_align skin_txt">
                            <i class="fa fa-user"></i>&nbsp;{{ $client->client_name }}
                        </h4>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="{{route ('dashboard.index') }}">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    Inicio
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Clientes</a>
                            </li>
                            <li class="breadcrumb-item active">Ver cliente</li>
                        </ol>
                    </div>
                </div>
            </div>
        </header>
        <div class="outer">
            <div class="inner bg-container">
                <div class="card">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-lg-6 m-t-35">
                                <div class="text-center">

                                    <div class="form-group">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumb_zoom zoom admin_img_width"> {{--AQUI SE PONDRA LA FOTO DEL RESPONSABLE--}}
                                                <img src="img/admin.jpg" alt="FOTO DEL RESPONSABLE" class="admin_img_width"></div>
                                            <div class="fileinput-preview fileinput-exists thumb_zoom zoom admin_img_width"></div>
                                            <div class="btn_file_position">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="view_friends_imgs"><br/>
                                            <p>
                                                <strong>Responsable:</strong> {{ $client->user->profile->name }}&nbsp;{{ $client->user->profile->last_name }}
                                            </p>
                                            <p>
                                                <strong>Algun dato del responsable</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 m-t-25">
                                <div>
                                    <ul class="nav nav-inline view_user_nav_padding">
                                        <li class="nav-item card_nav_hover">
                                            <a class="nav-link active" href="#user" id="home-tab"
                                               data-toggle="tab" aria-expanded="true">Cliente</a>
                                        </li>
                                        <li class="nav-item card_nav_hover">
                                            <a class="nav-link" href="#tab2" id="hats-tab" data-toggle="tab">Proyectos</a>
                                        </li>
                                        <li class="nav-item card_nav_hover">
                                            <a class="nav-link" href="#tab3"  id="followers" data-toggle="tab">Contactos</a>
                                        </li>
                                    </ul>
                                    <div id="clothing-nav-content" class="tab-content m-t-10">
                                        <div role="tabpanel" class="tab-pane fade show active" id="user">
                                            <table class="table" id="users">
                                                <tr>
                                                    <td>Nombre</td>
                                                    <td class="inline_edit">
                                                        <span class="editable"
                                                              data-title="Edit User Name">{{ $client->client_name }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Tipo</td>
                                                    <td>
                                                        <span class="editable" data-title="Edit E-mail">{{ $client->type }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Telefono de oficina</td>
                                                    <td>
                                                        <span class="editable" data-title="Edit Phone Number">{{ $client->office_number }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Página web</td>
                                                    <td>
                                                        <span class="editable" data-title="Edit Address">{{ $client->web_page }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Fecha de creación</td>
                                                    <td>1 month ago</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab2">
                                            <table class="table" id="users">
                                                <tr role="row">
                                                    <th>Nombre</th>
                                                    <th>Etapa</th>
                                                    <th>Monto</th>
                                                    <th>Moneda</th>
                                                </tr>
                                                <tr>
                                                    <td>Proyecto1</td>
                                                    <td>Cotizado</td>
                                                    <td>$164,579.00</td>
                                                    <td>USD</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab3">
                                            <div class="card_nav_body_padding follower_images">
                                                <div class="row">
                                                    <div class="col-sm-9 col-xl-9">
                                                        <div class="details">
                                                            <div class="name">
                                                                <a href="#">El luis</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <a>9612253275</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card m-t-35">
                            <div class="card-header bg-white">
                                <div>
                                    <i class="fa fa-calendar"></i>
                                    Proximos eventos
                                </div>
                            </div>
                            <div class="card-block m-t-35 padding-body view_user_cal">
                                <div id="calendar_mini" class="bg-primary"></div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item calendar-list">
                                        <div class="badge badge-pill badge-primary float-right">07:30</div>
                                        Cita en el quirofano
                                    </a>
                                    <a href="#" class="list-group-item calendar-list">
                                        <div class="badge badge-pill badge-primary float-right">10:30</div>
                                        Vendra el doctor
                                    </a>
                                    <a href="#" class="list-group-item calendar-list">
                                        <div class="badge badge-pill badge-primary float-right">11:30</div>
                                        Aplicar cirugia "transplante de corazon"
                                    </a>
                                    <a href="#" class="list-group-item calendar-list">
                                        <div class="badge badge-pill badge-primary float-right">21:30</div>
                                        Cena con mi esposo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card m-t-35">
                            <div class="card-header bg-white">
                                <div>
                                    <i class="fa fa-pencil"></i>
                                    Ultimas actividades
                                </div>
                            </div>
                            <div class="card-block m-t-35 padding">
                                <div class="feed">
                                    <ul>
                                        <li>
                                            <h5>
                                                Cita.
                                            </h5>
                                            <p>
                                                <strong>Se completo la cita con el arquitecto Miguel Herrera</strong>
                                            </p>
                                            <i>Hace 3 minutos</i>
                                        </li>
                                        <li>
                                            <h5>
                                                Tarea finalizada.
                                            </h5>
                                            <p>
                                                <strong>Will ya hizo lo que tenia que hacer.</strong>
                                            </p>
                                            <i>Hace 2 días</i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-t-35">
                    <div class="card-header bg-white">
                        <i class="fa fa-fw fa-clock-o"></i> Linea del tiempo.
                    </div>
                    <div class="card-block m-t-35">
                        <!--timeline-->
                        <div>
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-badge primary">
                                        <i class="fa fa-tag"></i>
                                    </div>
                                    <div class="timeline-panel bg-primary">
                                        <div class="timeline-heading text-white">
                                            <h5 class="timeline-title">Timeline Event One</h5>
                                            <p>
                                                <small>13 hours ago</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body text-white">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.  gravida tempor justo, at  justo fringilla at.
                                                .
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge danger">
                                        <i class="fa fa-fw fa-check-square-o"></i>
                                    </div>
                                    <div class="timeline-panel bg-danger">
                                        <div class="timeline-heading text-white">
                                            <h5 class="timeline-title">Timeline Event Two</h5>
                                            <p>
                                                <small>June 20,2016</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body text-white">
                                            <p> gravida tempor justo, at  justo fringilla at. gravida tempor justo, at justo fringilla at.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge info">
                                        <i class="fa fa-thumbs-o-up"></i>
                                    </div>
                                    <div class="timeline-panel bg-info">
                                        <div class="timeline-heading text-white">
                                            <h5 class="timeline-title">Timeline Event Three</h5>
                                            <p>
                                                <small>June 10 , 2016</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body text-white">
                                            <p>
                                                Lorem ipsum dolor sit amet.  gravida tempor justo, at bibendum justo fringilla  justo fringilla at.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge warning">
                                        <i class="fa fa-fw fa-indent"></i>
                                    </div>
                                    <div class="timeline-panel bg-warning">
                                        <div class="timeline-heading text-white">
                                            <h5 class="timeline-title">Timeline Event Four</h5>
                                            <p>
                                                <small>Apr 20,2016</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body text-white">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.  gravida tempor justo,  justo fringilla at.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge success">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </div>
                                    <div class="timeline-panel bg-success">
                                        <div class="timeline-heading text-white">
                                            <h5 class="timeline-title">Timeline Event Five</h5>
                                            <p>
                                                <small>Mar 15,2016</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body text-white">
                                            <p>
                                                Lorem Ipsum is simply dummy, vidis litro abertis.consectetur adipiscing elit.  gravida tempor justo, at  justo fringilla at.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge mint">
                                        <i class="fa fa-paperclip"></i>
                                    </div>
                                    <div class="timeline-panel bg-mint">
                                        <div class="timeline-heading text-white">
                                            <h5 class="timeline-title">Timeline Event Six</h5>
                                            <p>
                                                <small>Jan 1,2016</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body text-white">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.  gravida tempor justo, at  justo fringilla at.
                                                fringilla at.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--timeline ends-->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.inner -->
    @endsection