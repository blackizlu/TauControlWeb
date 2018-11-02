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
                            <a href="index1.html">
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
                <div class="card-block m-t-35" id="user_body">
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
                        <div class="btn-group">
                            <a href="{{route ('dashboard.projects.add')}}" id="editable_table_new" class=" btn btn-default">
                                Nuevo proyecto  <i class="fa fa-plus"></i>
                            </a>
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
                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Nombre</th>
                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Cliente</th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Etapa</th>
                                    <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1">Fecha estimada de cierre</th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Monto</th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Moneda</th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Responsable</th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Acciones</th>

                                </tr>
                                </thead>
                                <tbody>
                                {{--@foreach($clients as $client)
                                    <tr role="row" class="even">
                                        <td class="sorting_1">{{ $client->client_name }}</td>
                                        <td>{{ $client->type }}</td>
                                        <td>{{ $client->office_number }}</td>
                                        <td>{{ $client->web_page }}</td>
                                        <td>{{ $client->notes }}</td>
                                        <td>{{ $client->profile->name }}</td>
                                        <td>
                                            <a href="{{route ('dashboard.projects.view', $client->id)}}" data-toggle="tooltip" data-placement="top" title="View User">
                                                <i class="fa fa-eye text-success"></i></a>
                                            &nbsp; &nbsp;
                                            <a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" href="{{route ('dashboard.projects.edit',$client->id)}}">
                                                <i class="fa fa-pencil-alt text-warning"></i></a>
                                            &nbsp; &nbsp;
                                            <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Delete" href="#" data-id="{{ $client->id }}">
                                                <i class="fa fa-trash text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach--}}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.inner -->
    </div>
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
    </script>
@endsection
