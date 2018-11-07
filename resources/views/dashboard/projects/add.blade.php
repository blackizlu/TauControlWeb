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
                            <a href="#">Proyectos</a>
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
                            <form class="form-horizontal">
                                <div class="row">
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Nombre del proyecto</h5>
                                        <form>
                                            <input type="text" class="form-control focused_input"
                                                   placeholder="Nombre del proyecto"/>
                                        </form>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Cliente*</h5>
                                        <select class="form-control chzn-select" tabindex="2">
                                            <option disabled selected>Buscar cliente</option>
                                                <option value="">Cliente</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <a class="btn btn-primary btn-md adv_cust_mod_btn fa fa-plus-circle m-t-15" data-toggle="modal" data-href="#responsive" href="#responsive ">Nuevo cliente </a>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Etapa*</h5>
                                        <select class="form-control hide_search" tabindex="2">
                                            <option disabled selected>Seleccionar etapa</option>
                                            <option value=" ">Cotizado</option>
                                            <option value=" ">Ganado</option>
                                            <option value=" ">Lead</option>
                                            <option value=" ">Pricing</option>
                                            <option value=" ">Rechazado</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Moneda</h5>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>USD</option>
                                                <option>MXN</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Fecha de creación</h5>
                                        <form>
                                            <div class="input-group input-append date" id="dp3" data-date-format="dd-mm-yyyy">
                                                <input class="form-control" type="text" placeholder="dd-mm-aaaa">
                                                <span class="input-group-addon add-on">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Fecha de vencimiento</h5>
                                        <form>
                                            <div class="input-group input-append  date" id="dpYears"  data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                <input class="form-control" type="text" placeholder="dd-mm-aaaa">
                                                <span class="input-group-addon add-on">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- responsive model AGREGAR CLIENTE-->
    <div class="modal fade in display_none" id="responsive" tabindex="-1" role="dialog" aria-hidden="false">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title text-white">Agregar Categoría</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('dashboard.categories.store') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <p>
                                    <input id="name" name="name" type="text" placeholder="Categoría" class="form-control"  value="{{ old('category') }}">
                                </p>

                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-secondary">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection

