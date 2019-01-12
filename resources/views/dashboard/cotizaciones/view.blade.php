@extends('dashboard.layout')
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-sm-5 col-lg-6 skin_txt">
                    <h4 class="nav_top_align">
                        <i class="fa fa-file-invoice-dollar "></i>
                        Ver Cotización
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
                        <li class="active breadcrumb-item">Ver cotización</li>
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
                            {{$cotizacion->project->name}}
                        </div>
                        <div class="card-block seclect_form">
                            <div class="row">
                                <div class="col-lg-4 input_field_sections">
                                    <h5>Proyecto*</h5>
                                    <input type="text" class="form-control" name="amount" value="{{$cotizacion->project->name}}" disabled>

                                </div>
                                <div class="col-lg-4 input_field_sections">
                                    <h5>Monto*</h5>
                                    <div class="input-group ">
                                        <span class="input-group-addon">$</span>
                                        <input type="text" class="form-control" name="amount" value="${{number_format($cotizacion->amount, 2)}}" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-4 input_field_sections">
                                    <h5>Moneda*</h5>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="amount" value="{{$cotizacion->currency}}" disabled>

                                    </div>
                                </div>
                                <div class="col-lg-4 input_field_sections">
                                    <h5>Fecha de solicitud de pricing*</h5>
                                    <div class="input-group input-append date">
                                        <input class="form-control" type="text" placeholder="dd-mm-aaaa" name="request" value="{{$cotizacion->Date1}}" disabled>
                                        <span class="input-group-addon add-on">
                                            <i class="fa fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-4 input_field_sections">
                                    <h5>Fecha de realización del pricing</h5>
                                    <div class="input-group input-append date">
                                        <input class="form-control" type="text" placeholder="dd-mm-aaaa" name="realization" value="{{$cotizacion->Date2}}" disabled="">
                                        <span class="input-group-addon add-on">
                                            <i class="fa fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 input_field_sections ">
                                    <h5>Fecha de venta</h5>
                                    <div class="input-group input-append date" >
                                        <input class="form-control" type="text" placeholder="dd-mm-aaaa" name="sold_date" value="{{$cotizacion->Date3}}" disabled>
                                        <span class="input-group-addon add-on">
                                            <i class="fa fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-4 input_field_sections">
                                    <h5>Vendida</h5>
                                    <div class="checkbox">
                                        <label class="text-success">
                                            <input type="checkbox" @if($cotizacion->sold == true) checked @endif disabled>
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                        </label>
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
@section('scripts')


@endsection

