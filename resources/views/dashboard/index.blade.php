@extends('dashboard.index_layout')
@section('content')
    <div id="content" class="bg-container">
        <header class="head">
            <div class="main-bar">
                <div class="row no-gutters">
                    <div class="col-sm-6">
                        <h4 class="nav_top_align">
                            <i class="fa fa-home"></i>
                            Inicio
                        </h4>
                    </div>
                </div>
            </div>
        </header>
        <!--- Calendario-->
        <div class="inner bg-light lter bg-container cal_btn_hov ">
            <div class="row">
                <div class="col-lg-12 media_max_991">
                    <div class="card "><a href="{{route('dashboard.activities.index')}}" class="btn btn-success btn-block m-t-15 m-l-10 col-md-2">Crear actividad</a>
                        <div class="card-block m-t-35">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--- responsive model Ver Actividad-->
    <div class="modal fade" id="evt_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">
                        <i class="fa fa-calendar"></i>
                        Actividad
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 input_field_sections">
                            <h5>Evento:</h5>
                            <input type="text"id="event_title" value="read only" readonly class="form-control">
                        </div>
                        <div class="col-lg-6 input_field_sections">
                            <h5>Cliente:</h5>
                            <input type="text"id="cliente" value="read only" readonly class="form-control">
                        </div>
                        <div class="col-lg-6 input_field_sections">
                            <h5>Contacto:</h5>
                            <input type="text"id="contacto" value="read only" readonly class="form-control">
                        </div>
                        {{--<div class="col-lg-6 input_field_sections">
                            <h5>Fecha:</h5>
                            <input type="text"id="start" value="read only" readonly class="form-control">
                        </div>--}}
                        <div class="col-lg-6 input_field_sections">
                            <h5>Fecha y hora:</h5>
                            <input type="text"id="hora" value="read only" readonly class="form-control">
                        </div>
                        <div class="col-lg-12 input_field_sections">
                            <h5>Comentarios:</h5>
                            <textarea type="text"id="comentario" value="read only"  rows="3" readonly class="form-control"></textarea>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary float-right" data-dismiss="modal">
                        Cerrar
                        <i class="fa fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection

<!--- Tarjetas para cada usuario  -->

{{--
        <div class="outer m-t-15">
            <div class="inner bg-container m-t-15">
                <div class="row sales_section m-t-5">
                        <div class="col-xl-4 col-sm-6 col-12">
                            <div class="card p-d-15">
                                <div class="sales_icons">
                                    <span class="bg-success"></span>
                                    <i class="fa fa-dollar"></i>
                                </div>
                                <div>
                                    <h5 class="sales_orders text-right m-t-5">Ganados</h5>  --}}
{{--Widget.js para modificar los valores a mostrar--}}{{--

                                    <h1 class="sales_number m-t-15 text-right" id="ganados"></h1>
                                    <p class="sales_text">Monto en MXN: $593,381.20
                                        --}}
{{--<span class="pull-right"><i class="fa fa-dollar text-mint font_18 m-r-5"></i>25.25%</span>--}}{{--
</p>
                                    <p class="sales_text">Monto en USD: $361,413.65
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 col-12 media_max_1199">
                            <div class="card p-d-15">
                                <div class="sales_icons">
                                    <span class="bg-primary"></span>
                                    <i class="fa fa-file-invoice-dollar"></i>
                                </div>
                                <div>
                                    <h5 class="sales_orders text-right m-t-5">Cotizados</h5>
                                    <h1 class="sales_number m-t-15 text-right" id="cotizados"></h1>
                                    <p class="sales_text">Monto en MXN: $989,900.38</p>
                                    <p class="sales_text">Monto en USD: $380,043.34</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 col-12 media_max_1199">
                            <div class="card p-d-15">
                                <div class="sales_icons">
                                    <span class="bg-warning"></span>
                                    <i class="fa fa-handshake-o"></i>
                                </div>
                                <div>
                                    <h5 class="sales_orders text-right m-t-5">Negociación</h5>
                                    <h1 class="sales_number m-t-15 text-right" id="negociados"></h1>
                                    <p class="sales_text">Monto en MXN: $0.00</p>
                                    <p class="sales_text">Monto en USD: $274,976.03</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row sales_section m-t-15">
                        <div class="col-xl-4 col-sm-6 col-12 ">
                            <div class="card p-d-15">
                                <div class="sales_icons">
                                    <span class="bg-lead"></span>
                                    <i class="fa fa-bullseye"></i>
                                </div>
                                <div>
                                    <h5 class="sales_orders text-right m-t-5">Lead</h5>
                                    <h1 class="sales_number m-t-15 text-right" id="lead"></h1>
                                    <p class="sales_text">Monto en MXN: $0.00</p>
                                    <p class="sales_text">Monto en USD: $0.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 col-12 ">
                            <div class="card p-d-15">
                                <div class="sales_icons">
                                    <span class="bg-muted"></span>
                                    <i class="fa fa-calculator"></i>
                                </div>
                                <div>
                                    <h5 class="sales_orders text-right m-t-5">Pricing</h5>
                                    <h1 class="sales_number m-t-15 text-right" id="pricing"></h1>
                                    <p class="sales_text">Monto en MXN: $0.00</p>
                                    <p class="sales_text">Monto en USD: $912,680.26</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 col-12 media_max_573">
                            <div class="card p-d-15">
                                <div class="sales_icons">
                                    <span class="bg-danger"></span>
                                    <i class="fa fa-times-circle"></i>
                                </div>
                                <div>
                                    <h5 class="sales_orders text-right m-t-5">Rechazados</h5>
                                    <h1 class="sales_number m-t-15 text-right"><span id="rechazados"></span></h1>
                                    <p class="sales_text">Monto en MXN: $14,163,496.63</p>
                                    <p class="sales_text">Monto en USD: $3,078,177.80</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
--}}

