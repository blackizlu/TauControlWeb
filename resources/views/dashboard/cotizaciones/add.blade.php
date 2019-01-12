@extends('dashboard.layout')
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-sm-5 col-lg-6 skin_txt">
                    <h4 class="nav_top_align">
                        <i class="fa fa-file-invoice-dollar "></i>
                        Agregar cotización
                    </h4>
                </div>
                <div class="col-sm-7 col-lg-6">
                    <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="{{route('dashboard.index')}}">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                Inicio
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="">Cotizaciones</a>
                        </li>
                        <li class="active breadcrumb-item">Agregar cotización</li>
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
                            Nueva Cotización
                        </div>
                        <div class="card-block seclect_form">
                            <form  action="{{ route('dashboard.cotizaciones.store') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Proyecto*</h5>
                                        <select class="form-control chzn-select" tabindex="7" name="project_id" id="project_id">
                                            <option disabled selected>Buscar Proyecto</option>
                                            @foreach($projects as $project)
                                                <option value="{{ $project->id }}">{{ $project->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Monto*</h5>
                                        <div class="input-group ">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" class="form-control" name="amount">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Moneda*</h5>
                                        <div class="form-group">
                                            <select class="form-control hide_search" name="currency">
                                                <option value="USD">USD</option>
                                                <option value="MXN">MXN</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Fecha de solicitud de pricing*</h5>
                                        <div class="input-group input-append date" id="dpYears" data-date-format="yyyy-mm-dd">
                                            <input class="form-control" type="text" placeholder="dd-mm-aaaa" name="request" >
                                            <span class="input-group-addon add-on">
                                                <i class="fa fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Fecha de realización del pricing</h5>
                                        <div class="input-group input-append date" id="dpYears1" data-date-format="yyyy-mm-dd">
                                            <input class="form-control" type="text" placeholder="dd-mm-aaaa" name="realization" >
                                            <span class="input-group-addon add-on">
                                                <i class="fa fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 input_field_sections ">
                                        <h5>Fecha de venta</h5>
                                        <div class="input-group input-append date" id="dpYears2" data-date-format="yyyy-mm-dd">
                                            <input class="form-control" type="text" placeholder="dd-mm-aaaa" name="sold_date" >
                                            <span class="input-group-addon add-on">
                                                <i class="fa fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Vendida</h5>
                                        <div class="checkbox">
                                            <label class="text-success">
                                                <input type="checkbox" data-on-text="SI" data-off-text="NO" value="NO" name="sold">
                                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Seleccionar archivo</h5>
                                        <div class="col-sm-12 button_file m-t-5">
                                            <input id="input-4" name="file" type="file" multiple class="file-loading d-block">
                                        </div>
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
    </div>
@endsection
@section('scripts')


    @endsection

