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
                            <a href="index1.html">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                Inicio
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Proyectos</a>
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
                                        <h5 class="m-t-5">$185,965.00</h5>
                                    </div>
                                    <div class="col-lg-2 input_field_sections">
                                        <h6>Moneda</h6>
                                        <h5 class="m-t-5">MXN</h5>
                                    </div>
                                    <div class="col-lg-6 input_field_sections">
                                        <h6>Comentarios</h6>
                                        <h5>{{ $project->comments }}</h5>
                                    </div>
                                    <div class="col-lg-2 input_field_sections">     </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h6>Fecha de creación del proyecto</h6>
                                        <h5>{{ $project->created_at }}</h5>
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
                                        <a class="nav-link" href="#tab3"  id="followers" data-toggle="tab">Bitacora</a>
                                    </li>
                                </ul>
                                <div id="clothing-nav-content" class="tab-content m-t-10">
                                    <div role="tabpanel" class="tab-pane fade show active" id="user">
                                        <table class="table  table-striped table-bordered table-hover dataTable no-footer" id="editable_table" role="grid">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc_disabled sorting_desc_disabled wid-20" tabindex="0" rowspan="1" colspan="1">Actividad</th>
                                                <th class="sorting_asc_disabled sorting_desc_disabled wid-20" tabindex="0" rowspan="1" colspan="1">Tipo de actividad</th>
                                                <th class="sorting_asc_disabled sorting_desc_disabled wid-10" tabindex="0" rowspan="1" colspan="1">Contacto</th>
                                                <th class="sorting_asc_disabled sorting_desc_disabled wid-10" tabindex="0" rowspan="1" colspan="1">Fecha</th>
                                                <th class="sorting_asc_disabled sorting_desc_disabled wid-10" tabindex="0" rowspan="1" colspan="1">Hora</th>
                                                <th class="sorting_asc_disabled sorting_desc_disabled wid-10" tabindex="0" rowspan="1" colspan="1">Realizada</th>
                                                <th class="sorting_asc_disabled sorting_desc_disabled wid-10" tabindex="0" rowspan="1" colspan="1">Responsable</th>
{{--
                                                <th class="sorting_asc_disabled sorting_desc_disabled wid-10" tabindex="0" rowspan="1" colspan="1">Acciones</th>
--}}
                                            </tr>
                                            <tbody>
                                            @foreach($project->activities as $activity)
                                                <tr >
                                                    <td>{{$activity->comments}}</td>
                                                    <td>{{$activity->Activity_Name}}</td>
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
                                            <table class="table table-striped table-bordered table-hover" id="sample_6">
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
                                                <tbody>
                                                <tr>
                                                    <td>Casas Geo Nativa</td>
                                                    <td>Wolves Programming</td>
                                                    <td>$3,858,099.00</td>
                                                    <td>MXN</td>
                                                    <td>11/11/2019</td>
                                                    <td>30/12/2019</td>
                                                    <td>Si</td>
                                                    <td>15/12/2019</td>
                                                    <td>                                            &nbsp; &nbsp;

                                                        <a href="" data-toggle="tooltip" data-placement="top" title="Generar cotizacion">
                                                            <i class="fa fa-plus text-success"></i></a>
                                                        &nbsp; &nbsp;

                                                        &nbsp; &nbsp;
                                                        <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Eliminar" href="#" data-id="">
                                                            <i class="fa fa-trash text-danger"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Casas Geo Nativa</td>
                                                    <td>Wolves Programming</td>
                                                    <td>$3,858,099.00</td>
                                                    <td>MXN</td>
                                                    <td>11/11/2019</td>
                                                    <td>30/12/2019</td>
                                                    <td>No</td>
                                                    <td></td>
                                                    <td>                                            &nbsp; &nbsp;

                                                        <a href="" data-toggle="tooltip" data-placement="top" title="Generar cotizacion">
                                                            <i class="fa fa-plus text-success"></i></a>
                                                        &nbsp; &nbsp;

                                                        &nbsp; &nbsp;
                                                        <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Eliminar" href="#" data-id="">
                                                            <i class="fa fa-trash text-danger"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Casas Geo Nativa</td>
                                                    <td>Wolves Programming</td>
                                                    <td>$3,858,099.00</td>
                                                    <td>MXN</td>
                                                    <td>11/11/2019</td>
                                                    <td>30/12/2019</td>
                                                    <td>Si</td>
                                                    <td>15/12/2019</td>
                                                    <td>                                            &nbsp; &nbsp;

                                                        <a href="" data-toggle="tooltip" data-placement="top" title="Generar cotizacion">
                                                            <i class="fa fa-plus text-success"></i></a>
                                                        &nbsp; &nbsp;

                                                        &nbsp; &nbsp;
                                                        <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Eliminar" href="#" data-id="">
                                                            <i class="fa fa-trash text-danger"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Casas Geo Nativa</td>
                                                    <td>Wolves Programming</td>
                                                    <td>$3,858,099.00</td>
                                                    <td>MXN</td>
                                                    <td>11/11/2019</td>
                                                    <td>30/12/2019</td>
                                                    <td>Si</td>
                                                    <td>15/12/2019</td>
                                                    <td>                                            &nbsp; &nbsp;

                                                        <a href="" data-toggle="tooltip" data-placement="top" title="Generar cotizacion">
                                                            <i class="fa fa-plus text-success"></i></a>
                                                        &nbsp; &nbsp;

                                                        &nbsp; &nbsp;
                                                        <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Eliminar" href="#" data-id="">
                                                            <i class="fa fa-trash text-danger"></i></a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab3">

                                        Bitacora

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