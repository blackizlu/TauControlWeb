@extends('dashboard.layout')
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-sm-5 col-lg-6 skin_txt">
                    <h4 class="nav_top_align">
                        <i class="fa fa-file-invoice-dollar "></i>
                        Agregar proyecto
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
                            <a href="">Proyectos</a>
                        </li>
                        <li class="active breadcrumb-item">Agregar proyecto</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer" style="margin-top: -25px !important;">
        <div class="inner bg-light lter bg-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card m-t-35">
                        <div class="card-header bg-white"><i class="fa fa-file-alt"></i>
                        Nuevo proyecto
                        </div>
                        <div class="card-block seclect_form">
                            <form  action="{{ route('dashboard.projects.store') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Nombre del proyecto*</h5>
                                            <input type="text" class="form-control focused_input" placeholder="Nombre del proyecto" name="name" id="name"/>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Cliente*</h5>
                                        <select class="form-control chzn-select" tabindex="7" name="client_id" id="client_id">
                                            <option disabled selected>Buscar cliente</option>
                                            @foreach($clients as $client)
                                                <option value="{{ $client->id }}">{{ $client->client_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <a class="btn btn-primary btn-md adv_cust_mod_btn m-t-15" data-toggle="modal" data-href="#responsive" href="#responsive ">Nuevo cliente </a>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Etapa*</h5>
                                        <select class="form-control hide_search" tabindex="2" name="phase" id="phase">
                                            <option disabled selected>Seleccionar etapa</option>
                                            <option value="Cotizado">Cotizado</option>
                                            <option value="Ganado">Ganado</option>
                                            <option value="Lead">Lead</option>
                                            <option value="Negociacion">Negociación</option>
                                            <option value="Pricing">Pricing</option>
                                            <option value="Rechazado">Rechazado</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Responsable del proyecto*</h5>
                                        <div class="form-group">
                                            <select class="form-control hide_search" tabindex="7" name="user_id" id="user_id">
                                                <option selected disabled>Seleccionar responsable</option>
                                                @foreach($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->profile->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Fecha estimada de cierre*</h5>
                                            <div class="input-group input-append date" id="dpYears" data-date-format="yyyy-mm-dd">
                                                <input class="form-control" type="text" placeholder="dd-mm-aaaa" name="estimated_date" id="estimated_date">
                                                <span class="input-group-addon add-on">
                                                        <i class="fa fa-calendar-alt"></i>
                                                    </span>
                                            </div>
                                    </div>
                                    <div class="col-lg-6 input_field_sections">
                                        <h5>Comentarios</h5>
                                        <textarea id="autosize" class="form-control" cols="50" rows="6" name="comments" ></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-4 input_field_sections">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         {{--Codigo para NAV bar --}}
        {{--<div class="col-lg-6 m-t-25">
            <div>
                <ul class="nav nav-inline view_user_nav_padding">
                    <li class="nav-item card_nav_hover">
                        <a class="nav-link active" href="#user" id="home-tab" data-toggle="tab" aria-expanded="true">Categoría 1</a>
                    </li>
                    <li class="nav-item card_nav_hover">
                        <a class="nav-link" href="#tab2" id="hats-tab" data-toggle="tab">Categoria 2</a>
                    </li>
                    <li class="nav-item card_nav_hover">
                        <a class="nav-link" href="#tab3"  id="followers" data-toggle="tab">Categoría 3</a>
                    </li>
                    <li class="nav-item card_nav_hover">
                        <a class="nav-link" href="#tab4"  id="cat4" data-toggle="tab">Categorría 4</a>
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
                    <div role="tabpanel" class="tab-pane fade" id="tab4">
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
                            <tr>
                                <td>Soy la subcategoria 4</td>
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
        </div>--}}
    </div>

    <!--- responsive model AGREGAR CLIENTE-->
    <form action="{{ route('dashboard.clients.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="modal fade in display_none" id="responsive" tabindex="-1" role="dialog" aria-hidden="false">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title text-white">Nuevo cliente</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Información del cliente</h4>
                                <div class="form-group row m-t-25">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="u-name" class="col-form-label">Nombre de la empresa*</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user-tie text-primary"></i>
                                                    </span>
                                            <input type="text" name="client_name" id="u-name" value="{{ old('client_name') }}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="type" class="col-form-label">Tipo*</label>
                                    </div>
                                    <div class="col-xl-3 col-lg-8">
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-users text-primary"></i>
                                                    </span>
                                            <select class="form-control hide_search" tabindex="7" name="type" id="name1">
                                                <option selected disabled>Tipo de contacto</option>
                                                <option value="Arquitecto">Arquitecto</option>
                                                <option value="Constructora">Constructora</option>
                                                <option value="Desarrolladora">Desarrolladora</option>
                                                <option value="Cliente_final">Cliente final</option>
                                                <option value="Gerencia_obra">Gerencia de obra</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="email" class="col-form-label">¿El cliente es empresa?*</label>
                                        </div>
                                        <div class="col-xl-6 col-lg-8">
                                            <div class="input-group">
                                                <input class="make-switch-radio" data-on-text="SI" data-off-text="NO" type="checkbox" data-size="small" name="is_business">
                                            </div>
                                        </div>
                                    </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="email" class="col-form-label">Telefono de oficina</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-phone text-primary"></i>
                                                    </span>
                                            <input type="text" placeholder=" " id="phone_number" name="office_number" value="{{ old('office_number') }}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!--APARTADO PARA LA INFORMACION DE CONTACTOS RELACIONADOS CON EL CLIENTE OSEASE EMPRESA -->
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="email" class="col-form-label">Contacto*</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-address-book text-primary"></i>
                                                    </span>
                                            <input type="text" placeholder=" " id="contact" name="contact_name" value="{{ old('contact_name') }}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="email" class="col-form-label">Telefono de contacto*</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-phone text-primary"></i>
                                                    </span>
                                            <input type="text" placeholder=" " id="phone_number" name="phone_number" value="{{ old('phone_number') }}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="email" class="col-form-label">Puesto</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-briefcase text-primary"></i>
                                                    </span>
                                            <input type="text" placeholder=" " id="workstation" name="workstation" value="{{ old('workstation') }}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="email" class="col-form-label">Correo</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-at text-primary"></i>
                                                    </span>
                                            <input type="text" placeholder=" " id="email" name="email" value="{{ old('email') }}" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <!--APARTADO PARA LA INFORMACION DE CONTACTOS RELACIONADOS CON EL CLIENTE OSEASE EMPRESA -->
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="pwd" class="col-form-label">Página web</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-desktop text-primary"></i>
                                                    </span>
                                            <input type="text" name="web_page" id="web_page" value="{{ old('web_page') }}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="cpwd" class="col-form-label">Notas</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-sticky-note text-primary"></i>
                                                    </span>
                                            <input type="text" name="notes" placeholder=" " id="notes" value="{{ old('notes') }}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="type" class="col-form-label">Responsable*</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user-friends text-primary"></i>
                                                    </span>
                                            <select class="form-control hide_search" tabindex="7" name="user_id">
                                                <option selected disabled>Selecciona al responsable</option>
                                                @foreach($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->profile->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Crear Cliente</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

