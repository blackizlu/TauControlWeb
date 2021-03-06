@extends('dashboard.layout')
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-sm-5 col-lg-6 skin_txt">
                    <h4 class="nav_top_align">
                        <i class="fa fa-file-invoice-dollar "></i>
                        Editar actividad
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
                            <a href="">Actividades</a>
                        </li>
                        <li class="active breadcrumb-item">Editar actividad</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <form action="{{route('dashboard.activities.update', $activity->id)}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
            <div class="row">
                <div class="col-md-12">
                    <div class="btn-group m-t-15 m-l-20">
                        <a href="{{route ('dashboard.activities.index')}}" id="editable_table_new" class=" btn btn-default"><i class="fa fa-arrow-left"></i>&nbsp;Regresar</a>
                    </div>
                    <div class="form-group row m-t-15">
                        <div class="col-lg-3 text-lg-right">
                            <label for="type" class="col-form-label">Cliente*</label>
                        </div>
                        <div class="col-xl-6 col-lg-8">
                            <div class="input-group">
                                       {{-- <span class="input-group-addon">
                                            <i class="fa fa-user-tie text-primary"></i>
                                        </span>--}}
                                <select class="form-control chzn-select" tabindex="2" name="client_id" value="{{$activity->client->id}}">
                                    <option selected value="{{$activity->client->id}}">{{$activity->client->client_name}}</option>
                                    @foreach($clients as $client)
                                        <option value="{{ $client->id }}">{{ $client->client_name }}</option>
                                    @endforeach
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

                                <select class="form-control chzn-select" tabindex="2" name="contact_id" value="{{$activity->contact->id}}">
                                    <option selected value="{{$activity->contact->id}}">{{$activity->contact->contact_name}}</option>
                                    @foreach($contacts as $contact)
                                        <option value="{{ $contact->id }}">{{ $contact->contact_name }}</option>
                                    @endforeach
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
                                <select class="form-control chzn-select" tabindex="2" name="project_id" value="{{$activity->project->id}}">
                                    <option selected value="{{$activity->project->id}}">{{$activity->project->name}}</option>
                                    @foreach($projects as $project)
                                        <option value="{{ $project->id}}">{{ $project->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3 text-lg-right">
                            <label for="type" class="col-form-label">Fecha de inicio*</label>
                        </div>
                        <div class="col-xl-6 col-lg-8">
                            <div class="input-group">
                                <div class="input-group input-append date" id="dp3" data-date-format="yyyy-mm-dd">
                                    <input class="form-control" type="text" placeholder="dd-mm-aaaa" name="start" id="start" value="{{$activity->start}}">
                                    <span class="input-group-addon add-on"><i class="fa fa-calendar-alt"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3 text-lg-right">
                            <label for="type" class="col-form-label">Fecha de finalización*</label>
                        </div>
                        <div class="col-xl-6 col-lg-8">
                            <div class="input-group">
                                <div class="input-group input-append date" id="dpYears" data-date-format="yyyy-mm-dd">
                                    <input class="form-control" type="text" placeholder="dd-mm-aaaa" name="end" id="end" value="{{$activity->end}}">
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
                                <div class="input-group clockpicker2" data-align="top" data-placement="top" data-autoclose="true">
                                    <input type="text" class="form-control" value="{{$activity->time}}" name="time">
                                    <span class="input-group-addon add-on">
                                        <i class="fa fa-clock-o"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3 text-lg-right">
                            <label for="type" class="col-form-label">Tipo de actividad*</label>
                        </div>
                        <div class="col-xl-6 col-lg-8">
                            <div class="input-group">
                                <select class="form-control hide_search" tabindex="7" name="tipoact_id" id="name1" value="{{ $activity->tipoactividad->name}}">
                                    @foreach($tipoactividad as $tipo)
                                        <option value="{{ $tipo->id }}">{{ $tipo->name }}</option>
                                    @endforeach

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
                                    <input type="checkbox" data-on-text="SI" data-off-text="NO"@if($activity->completed == '1'){{ 'checked' }}@endif name="completed" id="completed">
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                    Realizada
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3 text-lg-right">
                            <label for="type" class="col-form-label">Responsable*</label>
                        </div>
                        <div class="col-xl-6 col-lg-8">
                            <div class="input-group">
                                <select class="form-control hide_search" tabindex="7" name="user_id" value="{{$activity->user->id}}">
                                    <option selected value="{{$activity->user->id}}">{{$activity->user->profile->name}}</option>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id}}">{{ $user->profile->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3 text-lg-right">
                            <label for="type" class="col-form-label">Comentarios*</label>
                        </div>
                        <div class="col-lg-6">
                            <textarea id="autosize" class="form-control" cols="50" rows="4" name="comments">{{$activity->comments}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 push-lg-3">
                    <button class="btn btn-primary" type="submit">
                        <i class="fa fa-user"></i>
                        Actualizar
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection