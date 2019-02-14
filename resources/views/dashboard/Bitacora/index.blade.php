@extends('dashboard.layout')
@section('content')
    <style>
        .ui-select{
            width: 100%;
            border:1px solid #aaa;
            border-radius: 5px;
            background: linear-gradient(#ffffff 20%, #f6f6f6 50%, #eeeeee 52%, #f4f4f4 100%);
            font-size: 13px;
            font-family: "Source Sans Pro", sans-serif;
            font-weight: 400;
            color: #282828;}

        /* This is to remove the arrow of select element in IE */
        select::-ms-expand {	display: none; }
        select{
            -webkit-appearance: none;
        }
        @-moz-document url-prefix(){
            .ui-select{border: 1px solid #CCC; border-radius: 4px; box-sizing: border-box; position: relative; overflow: hidden;}
            .ui-select select { width: 110%; background-position: right 30px center !important; border: none !important;}
        }
    </style>
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-sm-5 col-lg-6 skin_txt">
                    <h4 class="nav_top_align"><i class="fa fa-clipboard"></i>
                        Bitacora
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
                        <li class="active breadcrumb-item">Bitacora</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="card">
                <div class="card-header bg-white">
                    Lista de actividades
                </div>
                <div class="card-block">
                    <div>
                        <table id="example_demo" class="table display nowrap table-striped">
                            <thead>
                            <tr>
                                <th>Usuario</th>
                                <th>Accion</th>
                                <th>Fecha y hora del evento</th>
                            </tr>
                            <tbody>@foreach($registros as $registro)
                                <tr>
                                    <td>{{$registro->user->profile->full_name}}</td>
                                    <td>@if($registro->client_id != ''){{$registro->message}} <strong>{{$registro->client->client_name}}</strong>
                                        @elseif($registro->contact_id != ''){{$registro->message}} <strong>{{$registro->contact->contact_name}}</strong>{{' del cliente '}}<strong>{{$registro->contact->client->client_name}}</strong>
                                        @elseif($registro->project_id != '' and $registro->type == 'create'){{$registro->message}}{{' '}}<strong>{{$registro->project->name}}</strong>{{' '}}<strong>{{$registro->project->phase}}</strong>{{' del cliente '}}<strong>{{ $registro->project->client->client_name}}</strong>
                                        @elseif($registro->project_id != '' and $registro->type == 'update'){{$registro->message}}{{' '}}<strong>{{$registro->project->name}}</strong>{{' del cliente '}}<strong>{{ $registro->project->client->client_name}}</strong>{{' a la fase '}}<strong>{{$registro->project->phase}}</strong>
                                        @elseif($registro->project_id != '' and $registro->type == 'delete'){{$registro->message}}{{' '}}<strong>{{$registro->project->name}}</strong>{{' del cliente '}}<strong>{{ $registro->project->client->client_name}}</strong>
                                        @elseif($registro->invoice_id != ''){{$registro->message}}{{' '}}<strong>{{$registro->invoice->project->name}}</strong>{{' del cliente '}}<strong>{{$registro->invoice->project->client->client_name}}</strong>
                                        @elseif($registro->activity_id != ''and $registro->type == 'create'){{$registro->message}}{{' '}}<strong>{{$registro->activity->tipoactividad->name}}</strong>{{' para el proyecto '}}<strong>{{ $registro->activity->project->name}}</strong>{{' del cliente '}}<strong>{{ $registro->activity->client->client_name}}</strong>
                                        @elseif($registro->activity_id != ''and $registro->type == 'update'){{$registro->message}}{{' '}}{{' del proyecto '}}<strong>{{ $registro->activity->project->name}}</strong>{{' a ' }}<strong>{{$registro->activity->tipoactividad->name}}</strong>
                                        @elseif($registro->activity_id != ''and $registro->type == 'delete'){{$registro->message}}{{' '}}<strong>{{$registro->activity->tipoactividad->name}}</strong>{{' del proyecto '}}<strong>{{ $registro->activity->project->name}}</strong>

                                        @endif</td>
                                    <td>el {{\Carbon\Carbon::parse($registro->created_at)->format('d/m/Y h:i A')}}</td>
                                </tr>@endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('#example_demo').DataTable({
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
    </script>
@endsection
