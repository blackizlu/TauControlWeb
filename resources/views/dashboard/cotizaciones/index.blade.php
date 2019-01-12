@extends('dashboard.layout')
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-lg-6 col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-user-tie"></i>
                        Cotizaciones
                    </h4>
                </div>
                <div class="col-lg-6 col-sm-8 col-12">
                    <ol class="breadcrumb float-right  nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="{{route('dashboard.index')}}">
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
                <div class="card-block">
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
                        <div class="btn-group">
                            <a href="{{route ('dashboard.cotizaciones.add')}}" id="editable_table_new" class=" btn btn-default">
                                Nueva cotizacion  <i class="fa fa-plus"></i>
                            </a>
                        </div><br>
                        <div class="m-t-25">
                            <table id="example_demo" class="table table-hover table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th >Proyecto</th>
                                    <th >Cliente</th>
                                    <th >Monto</th>
                                    <th >Moneda </th>
                                    <th >Fecha de solicitud</th>
                                    <th >Fecha de realización</th>
                                    <th >Vendida</th>
                                    <th >Fecha de venta</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                {{--</thead>EN EL MONTO DE PROYECTO SE DEBERA MOSTRAR EL MONTO DE LA ULTIMA COTIZACION GENERADA PARA DICHO PROYECTO. UN PROYECTO PUEDE TENER MULTIPLES COTIZACIONES.--}}
                                <tbody>
                                @foreach($cotizaciones as $cotizacion)
                                    <tr>
                                        <td>{{$cotizacion->project->name}}</td>
                                        <td>{{$cotizacion->project->client->client_name}}</td>
                                        <td>${{number_format($cotizacion->amount, 2)}}</td>
                                        <td>{{$cotizacion->currency}}</td>
                                        <td>{{$cotizacion->Date1}}</td>
                                        <td>{{$cotizacion->realization}}</td>
                                        <td>
                                            <div class="checkbox" align="center">
                                                <label class="text-success">
                                                    <input type="checkbox" title="yes" @if($cotizacion->sold == true) checked @endif disabled>
                                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>{{$cotizacion->sold_date}}</td>
                                        <td>
                                            <a href="{{route('dashboard.cotizaciones.view', $cotizacion->id)}}" data-toggle="tooltip" data-placement="top" title="Ver proyecto">
                                                <i class="fa fa-eye text-success"></i></a>
                                            &nbsp; &nbsp;
                                            <a class="edit" data-toggle="tooltip" data-placement="top" title="Editar" href=" ">
                                                <i class="fa fa-pencil-alt text-warning"></i></a>
                                            &nbsp; &nbsp;
                                            <a class="trash"  type="button" data-toggle="tooltip" data-placement="top" href="  " title="Eliminar">
                                                <i class="fa fa-trash text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
        @endsection

@section('scripts')
    @if(Session::has('message'))
        <script>
            iziToast.show({
                title: 'Success',
                message: '{!! Session::get('message') !!}',
                color:'#cc2900',
                position: 'bottomCenter'
            });
        </script>
    @endif
    <script>

        var table = $('#example_demo').DataTable({
            oLanguage: {
                sInfo: "Mostrando _START_ a _END_ de _TOTAL_ Registros",
                sInfoEmpty: "No hay registros a mostrar",
                sInfoFiltered: "",
                sZeroRecords: "Ningún registro para mostrar",
                sSearch: "Buscar:",
                oPaginate: {
                    sFirst: "Primera Página",
                    sLast: "Última Página",
                    sNext: "Siguiente",
                    sPrevious: "Anterior"
                },
                sEmptyTable: "No se encontraron registros",
                sLengthMenu: "Mostrar _MENU_ Registros"

            }
        });

        $('#example_demo tbody').on( 'click', 'a.trash', function (e) {
            e.preventDefault();
            var url = $(this).attr('href');
            var tr = $(this).parents('tr');
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            new PNotify({
                title: 'Eliminar',
                text: '¿Desea eliminar la cotización?',
                icon: 'fa fa-question-circle',
                hide: false,
                type: 'error',
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
                console.log(CSRF_TOKEN);
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: { _token: CSRF_TOKEN, _method: 'delete' },
                    dataType: 'JSON',
                    success: function (data) {
                        if(data.success) {
                            table.row( tr )
                                .remove()
                                .draw();
                        }
                    }
                });
            });
        } );

    </script>
@endsection
