@extends('dashboard.layout')
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-lg-6 col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-user-tie"></i>
                        Clientes
                    </h4>
                </div>
                <div class="col-lg-6 col-sm-8 col-12">
                    <ol class="breadcrumb float-right  nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="{{route('dashboard.index')}}">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i> Inicio
                            </a>
                        </li>
                        <li class="active breadcrumb-item">Clientes</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="card">
                <div class="card-header bg-white">
                    Lista de clientes
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
                            <a href="{{route ('dashboard.clients.add')}}" id="editable_table_new" class=" btn btn-default">
                                Nuevo Cliente  <i class="fa fa-plus"></i>
                            </a>
                        </div><br>
                        <div class="m-t-25">
                            <table id="example_demo" class="table table-hover table-striped table-bordered">
                                <thead>
                                <tr >
                                    <th>Nombre</th>
                                    <th>Tipo de contacto</th>
                                    <th>Telefono de oficina</th>
                                    <th>Página web</th>
                                    <th>Notas</th>
                                    <th>Responsable</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($clients as $client)
                                    <tr>
                                        <td>{{ $client->client_name }}</td>
                                        <td>{{ $client->type }}</td>
                                        <td>{{ $client->office_number }}</td>
                                        <td>{{ $client->web_page }}</td>
                                        <td>{{ $client->notes }}</td>
                                        <td>{{ $client->user->profile->full_name }}
                                            @if($client->user->deleted_at != null)
                                                <span style="color: red; font-size: 10px;">(Eliminado)</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route ('dashboard.clients.view', $client->id)}}" data-toggle="tooltip" data-placement="top" title="Ver Cliente">
                                                <i class="fa fa-eye text-success"></i></a>
                                            &nbsp; &nbsp;
                                            <a class="edit" data-toggle="tooltip" data-placement="top" title="Editar" href="{{route ('dashboard.clients.edit',$client->id)}}">
                                                <i class="fa fa-pencil-alt text-warning"></i></a>
                                            &nbsp; &nbsp;
                                            <a class="trash"  type="button" data-toggle="tooltip" data-placement="top" href="{{ route('dashboard.clients.delete', $client->id) }}" title="Eliminar">
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
                text: '¿Desea eliminar el cliente?',
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
