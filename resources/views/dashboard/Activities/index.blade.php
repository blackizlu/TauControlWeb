@extends('dashboard.layout')
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-sm-5 col-lg-6 skin_txt">
                    <h4 class="nav_top_align"><i class="fa fa-tasks"></i>
                        Actividades
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
                            <a href="#">Actividades</a>
                        </li>
                        <li class="active breadcrumb-item">Index</li>
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
                        <div>
                            <a class="btn btn-primary btn-md adv_cust_mod_btn" data-toggle="modal" data-href="#responsive" href="#responsive">Nueva Actividad</a>
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
                                    <th class="sorting_asc_disabled sorting_desc_disabled wid-20" tabindex="0" rowspan="1" colspan="1">Cliente</th>
                                    <th class="sorting_asc_disabled sorting_desc_disabled wid-20" tabindex="0" rowspan="1" colspan="1">Contacto</th>
                                    <th class="sorting_asc_disabled sorting_desc_disabled wid-10" tabindex="0" rowspan="1" colspan="1">Proyecto</th>
                                    <th class="sorting_asc_disabled sorting_desc_disabled wid-10" tabindex="0" rowspan="1" colspan="1">Fecha</th>
                                    <th class="sorting_asc_disabled sorting_desc_disabled wid-10" tabindex="0" rowspan="1" colspan="1">Hora</th>
                                    <th class="sorting_asc_disabled sorting_desc_disabled wid-10" tabindex="0" rowspan="1" colspan="1">Tipo de actividad</th>
                                    <th class="sorting_asc_disabled sorting_desc_disabled wid-10" tabindex="0" rowspan="1" colspan="1">Realizada</th>
                                    <th class="sorting_asc_disabled sorting_desc_disabled wid-10" tabindex="0" rowspan="1" colspan="1">Actividad</th>
                                    <th class="sorting_asc_disabled sorting_desc_disabled wid-10" tabindex="0" rowspan="1" colspan="1">Responsable</th>
                                    <th class="sorting_asc_disabled sorting_desc_disabled wid-10" tabindex="0" rowspan="1" colspan="1">Acciones</th>
                                </tr>
                                <tbody>
                                    <tr >
                                        <td>WolvesProgramminSur</td>
                                        <td>Sirius Alejandro Castellanos</td>
                                        <td>Camino del Bosque</td>
                                        <td>27/11/2019</td>
                                        <td>11:30AM</td>
                                        <td>Cita</td>
                                        <td>No</td>
                                        <td>Camino del Bosquenajsa sajsjsanas´aef </td>
                                        <td>Christian Marcos</td>
                                        <td>
                                            <a href="   " data-toggle="tooltip" data-placement="top" title="View User">
                                                <i class="fa fa-eye text-success"></i></a>
                                            &nbsp; &nbsp;
                                            <a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" href="  ">
                                                <i class="fa fa-pencil-alt text-warning"></i></a>
                                            &nbsp; &nbsp;
                                            <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Delete" href="#" data-id="  ">
                                                <i class="fa fa-trash text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <tr >
                                        <td>WolvesProgramminSur</td>
                                        <td>Sirius Alejandro Castellanos</td>
                                        <td>Camino del Bosque</td>
                                        <td>27/11/2019</td>
                                        <td>11:30AM</td>
                                        <td>Cita</td>
                                        <td>No</td>
                                        <td>Camino del Bosquenajsa sajsjsanas´aef </td>
                                        <td>Christian Marcos</td>
                                        <td>
                                            <a href="   " data-toggle="tooltip" data-placement="top" title="View User">
                                                <i class="fa fa-eye text-success"></i></a>
                                            &nbsp; &nbsp;
                                            <a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" href="  ">
                                                <i class="fa fa-pencil-alt text-warning"></i></a>
                                            &nbsp; &nbsp;
                                            <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Delete" href="#" data-id="  ">
                                                <i class="fa fa-trash text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <tr >
                                        <td>WolvesProgramminSur</td>
                                        <td>Sirius Alejandro Castellanos</td>
                                        <td>Camino del Bosque</td>
                                        <td>27/11/2019</td>
                                        <td>11:30AM</td>
                                        <td>Cita</td>
                                        <td>No</td>
                                        <td>Camino del Bosquenajsa sajsjsanas´aef </td>
                                        <td>Christian Marcos</td>
                                        <td>
                                            <a href="   " data-toggle="tooltip" data-placement="top" title="View User">
                                                <i class="fa fa-eye text-success"></i></a>
                                            &nbsp; &nbsp;
                                            <a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" href="  ">
                                                <i class="fa fa-pencil-alt text-warning"></i></a>
                                            &nbsp; &nbsp;
                                            <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Delete" href="#" data-id="  ">
                                                <i class="fa fa-trash text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <tr >
                                        <td>WolvesProgramminSur</td>
                                        <td>Sirius Alejandro Castellanos</td>
                                        <td>Camino del Bosque</td>
                                        <td>27/11/2019</td>
                                        <td>11:30AM</td>
                                        <td>Cita</td>
                                        <td>No</td>
                                        <td>Camino del Bosquenajsa sajsjsanas´aef </td>
                                        <td>Christian Marcos</td>
                                        <td>
                                            <a href="   " data-toggle="tooltip" data-placement="top" title="View User">
                                                <i class="fa fa-eye text-success"></i></a>
                                            &nbsp; &nbsp;
                                            <a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" href="  ">
                                                <i class="fa fa-pencil-alt text-warning"></i></a>
                                            &nbsp; &nbsp;
                                            <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Delete" href="#" data-id="  ">
                                                <i class="fa fa-trash text-danger"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- responsive model AGREGAR CLIENTE-->
    <form action="" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="modal fade in display_none" id="responsive" tabindex="-1" role="dialog" aria-hidden="false">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title text-white">Nueva Actividad</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row m-t-15">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="type" class="col-form-label">Cliente*</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user-tie text-primary"></i>
                                                    </span>
                                            <select class="form-control hide_search" tabindex="7" name="user_id">
                                                <option selected disabled>Selecciona al Cliente</option>
                                                {{--@foreach($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->profile->name }}</option>
                                                @endforeach--}}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="type" class="col-form-label">Contacto*</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user text-primary"></i>
                                                    </span>
                                            <select class="form-control hide_search" tabindex="7" name="user_id">
                                                <option selected disabled>Selecciona al contacto</option>
                                                {{--@foreach($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->profile->name }}</option>
                                                @endforeach--}}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="type" class="col-form-label">Proyecto*</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-folder text-primary"></i>
                                                    </span>
                                            <select class="form-control hide_search" tabindex="7" name="user_id">
                                                <option selected disabled>Selecciona el proyecto</option>
                                                {{--@foreach($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->profile->name }}</option>
                                                @endforeach--}}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="type" class="col-form-label">Fecha*</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-calendar-alt text-primary"></i>
                                                    </span>
                                            <div class="input-group input-append date" id="dpYears" data-date-format="yyyy-mm-dd">
                                                <input class="form-control" type="text" placeholder="dd-mm-aaaa" name="estimated_date" id="estimated_date">
                                            <span class="input-group-addon add-on"><i class="fa fa-calendar-alt"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row" >
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="type" class="col-form-label">Hora*</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-clock-o text-primary"></i>
                                                    </span>
                                            <form >
                                                <div class="input-group clockpicker2" data-align="top" data-placement="top" data-autoclose="true">
                                                    <input type="text" class="form-control" value="12:00">
                                                    <span class="input-group-addon add-on">
                                                        <i class="fa fa-clock-o"></i>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="type" class="col-form-label">Tipo de actividad*</label>
                                    </div>
                                    <div class="col-xl-3 col-lg-8">
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-clipboard-check text-primary"></i>
                                                    </span>
                                            <select class="form-control hide_search" tabindex="7" name="type" id="name1">
                                                <option selected disabled>Tipo de actividad</option>
                                                <option value="Arquitecto">Cita</option>
                                                <option value="Constructora">Envio de Correo</option>
                                                <option value="Desarrolladora">Instalación Obra</option>
                                                <option value="Cliente_final">Llamada</option>
                                                <option value="Gerencia_obra">Visita a obra</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="type" class="col-form-label">Actividad*</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkbox">
                                            <label class="text-success">
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                Realizada
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="type" class="col-form-label">Actividad*</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <textarea id="autosize" class="form-control" cols="50" rows="1" name="Actividad"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="type" class="col-form-label">Responsable*</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user-friends text-primary"></i>
                                                    </span>
                                            <select class="form-control hide_search" tabindex="7" name="user_id">
                                                <option selected disabled>Selecciona al responsable</option>
                                                {{--@foreach($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->profile->name }}</option>
                                                @endforeach--}}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Crear Actividad</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
