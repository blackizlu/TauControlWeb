@extends('dashboard.layout_ViewProject')
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-sm-5 col-lg-6 skin_txt">
                    <h4 class="nav_top_align"><i class="fa fa-eye "></i>
                        Ver Proyecto
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
                            <a href="{{route('dashboard.projects.index')}}">Proyectos</a>
                        </li>
                        <li class="active breadcrumb-item">{{ $project->name }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer" style="margin-top: -25px !important;">
        <div class="inner bg-light lter bg-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card m-t-15">
                        <div class="card-header bg-white"><i class="fa fa-folder-open "></i>
                            {{ $project->name }}
                        </div>
                        <div class="card-block seclect_form" style="padding-top: 0;">
                            <form class="form-horizontal">
                                <div class="row">
                                    <div class="col-lg-4 input_field_sections">
                                        <h6>Nombre del proyecto</h6>
                                        <h5 class="m-t-5">{{ $project->name }}</h5>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h6>Cliente</h6>
                                        <h5 class="m-t-5">{{ $project->client->client_name }}</h5>

                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h6>Etapa</h6>
                                        <h5 class="m-t-5">{{ $project->phase }}</h5>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h6>Responsable del proyecto</h6>
                                        <h5 class="m-t-5">{{ $project->user->profile->name }}&nbsp;{{$project->user->profile->last_name}}</h5>

                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h6>Fecha estimada de cierre</h6>
                                        <h5 class="m-t-5">{{\Carbon\Carbon::parse($project->estimated_date)->format('d/m/Y')}}</h5>
                                    </div>
                                    <div class="col-lg-2 input_field_sections">
                                        <h6>Monto</h6>
                                        <h5 class="m-t-5">${{ $project->last_invoice != '' ? $project->last_invoice->amount : ''}}</h5>
                                    </div>
                                    <div class="col-lg-2 input_field_sections">
                                        <h6>Moneda</h6>
                                        <h5 class="m-t-5">MXN</h5>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h6>Comentarios</h6>
                                        <h5>{{ $project->comments }}</h5>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h6>Contacto</h6>
                                        <h5>{{$project->contact->contact_name}}</h5>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h6>Fecha de creación del proyecto</h6>
                                        <h5>{{\Carbon\Carbon::parse($project->created_at)->format('d/m/Y')}}</h5>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="outer" style="margin-top: -25px !important;">
        <div class="inner bg-light lter bg-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card m-t-15">
                        <div class="col-lg-12 ">
                            <div>
                                <ul class="nav nav-inline view_user_nav_padding">
                                    <li class="nav-item card_nav_hover">
                                        <a class="nav-link active" href="#user" id="home-tab" data-toggle="tab" aria-expanded="true">Actividades</a>
                                    </li>
                                    <li class="nav-item card_nav_hover">
                                        <a class="nav-link" href="#tab2" id="hats-tab" data-toggle="tab">Cotizaciones</a>
                                    </li>
                                    <li class="nav-item card_nav_hover">
                                        <a class="nav-link" href="#tab4"  data-toggle="tab">Documentos</a>
                                    </li>
                                    <li class="nav-item card_nav_hover">
                                        <a class="nav-link" href="#tab5"  data-toggle="tab">Documentos aprobados</a>
                                    </li>
                                    <li class="nav-item card_nav_hover">
                                        <a class="nav-link" href="#tab3"  id="followers" data-toggle="tab">Bitacora</a>
                                    </li>
                                </ul>
                                <div id="clothing-nav-content" class="tab-content m-t-10">
                                    <div role="tabpanel" class="tab-pane fade show active" id="user">
                                        <table class="table  table-striped table-bordered dataTable no-footer" id="editable_table" role="grid">
                                            <thead>
                                            <tr role="row">
                                                <th>Actividad</th>
                                                <th>Tipo de actividad</th>
                                                <th>Contacto</th>
                                                <th>Fecha</th>
                                                <th>Hora</th>
                                                <th>Realizada</th>
                                                <th>Responsable</th>
                                            </tr>
                                            <tbody>
                                            @foreach($project->activities as $activity)
                                                <tr >
                                                    <td>{{$activity->comments}}</td>
                                                    <td>{{$activity->tipoactividad->name}}</td>
                                                    <td>{{$activity->contact->contact_name}}</td>
                                                    <td>{{\Carbon\Carbon::parse($activity->deadline)->format('d/m/Y')}}</td>
                                                    <td>{{\Carbon\Carbon::parse($activity->time)->format('h:i A')}}</td>
                                                    <td>
                                                        <div class="checkbox" align="center">
                                                            <label class="text-success">
                                                                <input type="checkbox" @if($activity->completed == true) checked @endif disabled>
                                                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                            </label>
                                                        </div></td>
                                                    <td>{{$activity->user->profile->name}} </td>
                                                    {{--<td>
                                                        <a data-toggle="modal"  data-placement="top" title="Ver actividad" data-href="#responsive" href="#responsive">
                                                            <i class="fa fa-eye text-success"></i></a>
                                                        &nbsp; &nbsp;
                                                        <a data-toggle="modal"  data-actid="{{$activity->id}}" data-mytitle="{{$activity->client->client_name}}" data-mycontact="{{$activity->contact->contact_name}}" data-myproject="{{$activity->project->name}}"  data-mydate="{{$activity->deadline}}" data-mytime="{{$activity->time}}" data-myactivity="{{$activity->activity}}" data-mydone="{{$activity->completed}}" data-mycomments="{{$activity->comments}}" data-myuser="{{$activity->user->profile->name}}" data-placement="top" title="Editar actividad" data-href="#edit" href="#edit" type="hidden">
                                                            <i class="fa fa-pencil-alt text-warning"></i></a>
                                                        &nbsp; &nbsp;
                                                        <a data-toggle="modal" data-actid="{{$activity->id}}" data-placement="top" title="Eliminar actividad" data-href="#delete" href="#delete" type="hidden">
                                                            <i class="fa fa-trash text-danger"></i></a>

                                                    </td>--}}
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="tab2">
                                        <div>
                                            <table class="table m-t-15 table-striped table-bordered" id="example_demo3">
                                                <thead>
                                                <tr>
                                                    <th>Proyecto</th>
                                                    <th>Cliente</th>
                                                    <th>Monto</th>
                                                    <th>Moneda </th>
                                                    <th>Fecha de solicitud</th>
                                                    <th>Fecha de realización</th>
                                                    <th>Vendida</th>
                                                    <th>Fecha de venta</th>
                                                    <th>Acciones</th>
                                                </tr>
                                                </thead>
                                                <tbody>@foreach($project->cotizacion as $cotizaciones)
                                                <tr>
                                                    <td>{{$cotizaciones->project->name}}</td>
                                                    <td>{{$cotizaciones->project->client->client_name}}</td>
                                                    <td>${{ $project->last_invoice != '' ? $project->last_invoice->amount : ''}}</td>
                                                    <td>{{$cotizaciones->currency}}</td>
                                                    <td>@if(empty($cotizaciones->request)){{ ' ' }} @else {{\Carbon\Carbon::parse($cotizaciones->request)->format('d/m/Y')}}@endif</td>
                                                    <td>@if(empty($cotizaciones->realization)){{ ' ' }} @else {{\Carbon\Carbon::parse($cotizaciones->realization)->format('d/m/Y')}}@endif</td>
                                                    <td>
                                                        <div class="checkbox" align="center">
                                                            <label class="text-success">
                                                                <input type="checkbox" title="yes" @if($cotizaciones->sold == true) checked @endif disabled>
                                                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>@if(empty($cotizaciones->sold_date)){{ ' ' }} @else {{\Carbon\Carbon::parse($cotizaciones->sold_date)->format('d/m/Y')}}@endif</td>
                                                    <td>@if(!empty($cotizaciones->file))
                                                            <a href="{{ asset('storage/' .$cotizaciones->file)}}" target="blank" data-toggle="tooltip" data-placement="top" title="Ver cotizacion">
                                                            <i class="fa fa-eye text-success"></i>
                                                        </a> @endif
                                                    </td>
                                                </tr>@endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab4">
                                        <div class="btn-group">
                                            <a class="btn btn-success adv_cust_mod_btn button-rounded" data-toggle="modal" data-href="#docs" href="#docs">Añadir documentos</a>

                                        </div>
                                        <table id="example_demo" class="table table-hover table-striped table-bordered m-t-10">
                                            <thead>
                                            <tr>
                                                <th>Nombre del archivo</th>
                                                <th>Acciones</th>

                                            </tr>
                                            </thead>
                                            <tbody>@foreach($project->documents as $file)
                                                <tr>
                                                    <td>{{$file->file}}</td>
                                                    <td>
                                                        <a href="{{ asset('storage/' . $file->file)}}" target="_blank" data-toggle="tooltip" data-placement="top" title="Ver">
                                                            <i class="fa fa-eye text-success"></i></a>
                                                        &nbsp; &nbsp;

                                                        <a class="trash"  type="button" data-toggle="tooltip" data-placement="top" href="  " title="Eliminar">
                                                            <i class="fa fa-trash text-danger"></i></a>
                                                    </td>
                                                </tr>@endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab5">
                                        <div class="btn-group">
                                            <a class="btn btn-success adv_cust_mod_btn button-rounded" data-toggle="modal" data-href="#approved" href="#approved">Añadir documentos</a>

                                        </div>
                                        <table id="example_demo" class="table table-hover table-striped table-bordered m-t-10">
                                            <thead>
                                            <tr>
                                                <th>Nombre del archivo</th>
                                                <th>Acciones</th>

                                            </tr>
                                            </thead>
                                            <tbody>@foreach($project->approveddocs as $file)
                                                <tr>
                                                    <td>{{$file->file}}</td>
                                                    <td>
                                                        <a href="{{ asset('storage/' . $file->file)}}" target="_blank" data-toggle="tooltip" data-placement="top" title="Ver">
                                                            <i class="fa fa-eye text-success"></i></a>
                                                        &nbsp; &nbsp;

                                                        <a class="trash"  type="button" data-toggle="tooltip" data-placement="top" href="  " title="Eliminar">
                                                            <i class="fa fa-trash text-danger"></i></a>
                                                    </td>
                                                </tr>@endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab3">
                                        :D
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--//Modal guardar archivos--}}
    <form action="{{route('dashboard.projects.documents.upload', $project->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="modal fade in display_none" id="docs" tabindex="-1" role="dialog" aria-hidden="false">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title text-white">Añadir documentos</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <input id="project_files" name="file[]" type="file" multiple class="file-loading">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer m-t-15">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    dashboard.projects.approved.upload
    {{--//Modal guardar archivos aprobados--}}
    <form action="{{route('dashboard.projects.approved.upload', $project->id)}}"  method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="modal fade in display_none" id="approved" tabindex="-1" role="dialog" aria-hidden="false">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title text-white">Añadir documentos aprobados</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <input id="project_files2" name="file[]" type="file" multiple class="file-loading">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer m-t-15">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

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
        var table = $('#example_demo3').DataTable({
            "searching": false,
            "orderable": false,
            "paging": false,
            "info": false,
            "scrollY": "300px",
            "scrollCollapse": true
        });

        $('#example_demo3 tbody').on( 'click', 'a.trash', function (e) {
            e.preventDefault();
            var url = $(this).attr('href');
            var tr = $(this).parents('tr');
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            new PNotify({
                title: 'Eliminar',
                text: '¿Desea eliminar el tipo de actividad?',
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

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@endsection
