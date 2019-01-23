@extends('dashboard.layout')
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-lg-6 col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-user-tie"></i>
                        Proyectos
                    </h4>
                </div>
                <div class="col-lg-6 col-sm-8 col-12">
                    <ol class="breadcrumb float-right  nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="{{route('dashboard.index')}}">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i> Inicio
                            </a>
                        </li>
                        <li class="active breadcrumb-item">Proyectos</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="card">
                <div class="card-header bg-white">
                    Lista de proyectos
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
                            <a href="{{route ('dashboard.projects.add')}}" id="editable_table_new" class=" btn btn-default">
                                Nuevo proyecto  <i class="fa fa-plus"></i>
                            </a>
                        </div><br>
                        <div class="m-t-25">
                            <table id="example_demo" class="table table-hover table-striped table-bordered">
                                <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Cliente</th>
                                <th>Etapa</th>
                                <th>Fecha estimada de cierre</th>
                                <th>Monto</th>
                                <th>Moneda</th>
                                <th>Responsable</th>
                                <th>Acciones</th>
                            </tr>
                                </thead>
                            {{--</thead>EN EL MONTO DE PROYECTO SE DEBERA MOSTRAR EL MONTO DE LA ULTIMA COTIZACION GENERADA PARA DICHO PROYECTO. UN PROYECTO PUEDE TENER MULTIPLES COTIZACIONES.--}}
                            <tbody>
                            @foreach($projects->SortBy('estimated_date') as $project)
                                <tr>
                                    <td>{{ $project->name }}</td>
                                    <td>{{ $project->client->client_name }}</td>
                                    <td>{{ $project->phase }}</td>
                                    <td>{{\Carbon\Carbon::parse($project->estimated_date)->format('d/m/Y')}}</td>
                                    <td>${{ $project->last_invoice != '' ? $project->last_invoice->amount : ''}}</td>
                                    <td>{{ $project->last_invoice != '' ? $project->last_invoice->currency : '' }}</td>
                                    <td>{{ $project->user->profile->full_name }}
                                        @if($project->user->deleted_at != null)
                                            <span style="color: red; font-size: 10px;">(Eliminado)</span>
                                        @endif
                                    </td>                                        <td>
                                        <a href="{{route ('dashboard.projects.view', $project->id)}}" data-toggle="tooltip" data-placement="top" title="Ver proyecto">
                                            <i class="fa fa-eye text-success"></i></a>
                                        &nbsp; &nbsp;
                                        <a class="edit" data-toggle="tooltip" data-placement="top" title="Editar" href="{{route ('dashboard.projects.edit',$project->id)}}">
                                            <i class="fa fa-pencil-alt text-warning"></i></a>
                                        &nbsp; &nbsp;
                                        <a class="trash"  type="button" data-toggle="tooltip" data-placement="top" href="{{ route('dashboard.projects.delete', $project->id) }}" title="Eliminar">
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
                text: '¿Desea eliminar el proyecto?',
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