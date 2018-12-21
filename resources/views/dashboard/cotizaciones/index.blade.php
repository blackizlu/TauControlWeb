@extends('dashboard.layout')
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-lg-6 col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-file-invoice-dollar"></i>
                        Cotizaciones
                    </h4>
                </div>
                <div class="col-lg-6 col-sm-8 col-12">
                    <ol class="breadcrumb float-right  nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index1.html">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i> Inicio
                            </a>
                        </li>
                        <li class="active breadcrumb-item">Cotizaciones</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="card">
                <div class="card-header bg-white">
                    Lista de cotizaciones
                </div>
                <div class="card-block " id="user_body" >
                    @if(Session::has('message'))
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert"
                                            aria-hidden="true">×
                                    </button>
                                    {!! Session::get('message') !!}
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="table-toolbar">
                        <div class="col-lg-4 input_field_sections">
                        </div>
                        <div class="btn-group float-right users_grid_tools">
                            <div class="tools"></div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <table class="table  table-striped table-bordered table-hover dataTable no-footer" id="editable_table" role="grid">
                                <thead>
                                <tr role="row">
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
                                <tbody>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Casas Xion</td>
                                        <td>Construc Xion SA de CV</td>
                                        <td >$322,036,700.00</td>
                                        <td>USD</td>
                                        <td>2018/11/07</td>
                                        <td>2018/11/09</td>
                                        <td>
                                            <div class="checkbox" align="center">
                                                <label class="text-success">
                                                    <input type="checkbox" title="yes" {{--@if($activity->completed == true) checked @endif disabled--}}>
                                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td>                                            &nbsp; &nbsp;

                                            <a href="" data-toggle="tooltip" data-placement="top" title="Ver Cotización">
                                                <i class="fa fa-eye text-success"></i></a>
                                            &nbsp; &nbsp;
                                            <a class="edit" data-toggle="modal" data-href="#editar" data-placement="top" title="Editar" href="#editar">
                                                <i class="fa fa-pencil-alt text-warning"></i></a>
                                            &nbsp; &nbsp;
                                            <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Eliminar" href="#" data-id="">
                                                <i class="fa fa-trash text-danger"></i></a>
                                        </td>
                                    </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.inner -->
    </div>

    <!--- MODAL PARA COTIZACION VENDIDA-->
    <form action="{{ route('dashboard.cotizaciones.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="modal fade in display_none" id="yes" tabindex="-1" role="dialog" aria-hidden="false">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h4 class="modal-title text-white">Cotizacion vendida</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5>Especifica la fecha en la que se vendio esta cotización</h5>
                                <form>
                                    <div class="input-group input-append date col-lg-6 m-t-15" id="dp3" data-date-format="dd-mm-yyyy">
                                        <input class="form-control" type="text" placeholder="dd-mm-aaaa">
                                        <span class="input-group-addon add-on">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Cerrar</button>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <script>
        $(".confirm").on("click", function () {
            var id = $(this).data('id');
            new PNotify({
                title: 'Eliminar',
                text: '¿Desea eliminar el registro?',
                icon: 'fa fa-question-circle',
                hide: false,
                type: 'success',
                confirm: {
                    confirm: true
                },
                buttons: {
                    closer: false,
                    sticker: false
                },
                history: {
                    history: false
                }
            }).get().on('pnotify.confirm', function () {
                swal(id).done();
            }).on('pnotify.cancel', function () {
                swal('Oh ok. Chicken, I see.').done();

            });
            return false;
        });

        $('input[type="checkbox"]').on('change', function(e){
            if(e.target.checked){
                $('#yes').modal();
            }
        });
    </script>
@endsection
