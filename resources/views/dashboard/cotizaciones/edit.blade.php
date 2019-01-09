@extends('dashboard.layout')
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-sm-5 col-lg-6 skin_txt">
                    <h4 class="nav_top_align">
                        <i class="fa fa-file-invoice-dollar "></i>
                        Editar proyecto
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
                            <a href="">Proyectos</a>
                        </li>
                        <li class="active breadcrumb-item">Editar proyecto</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer" style="margin-top: -25px !important;">
        <div class="inner bg-light lter bg-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card m-t-35">
                        <div class="card-header bg-white"><i class="fa fa-file-alt"></i>
                            {{$projects->name}}
                        </div>
                        <div class="card-block seclect_form">
                            <form  action="{{ route('dashboard.projects.update', $projects->id) }}" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_method" value="PUT">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Nombre del proyecto*</h5>
                                        <input type="text" class="form-control focused_input" placeholder="Nombre del proyecto" name="name" id="name" value="{{$projects->name}}"/>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Cliente*</h5>
                                        <select class="form-control chzn-select" tabindex="2" name="client_id" id="client_id">
                                            <option value="{{$projects->client_id}}" selected>{{$projects->client->client_namea}}</option>
                                            @foreach($clients as $client)
                                                <option value="{{ $client->id }}">{{ $client->client_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Etapa*</h5>
                                        <select class="form-control hide_search" tabindex="2" name="phase" id="phase" value="{{$projects->phase}}">
                                            <option value="Cotizado"@if($projects->phase == 'Cotizado'){{ 'selected' }}@endif>Cotizado</option>
                                            <option value="Ganado"@if($projects->phase == 'Ganado'){{ 'selected' }}@endif>Ganado</option>
                                            <option value="Lead"@if($projects->phase == 'Lead'){{ 'selected' }}@endif>Lead</option>
                                            <option value="Negociacion"@if($projects->phase == 'Negociacion'){{ 'selected' }}@endif>Negociación</option>
                                            <option value="Pricing"@if($projects->phase == 'Pricing'){{ 'selected' }}@endif>Pricing</option>
                                            <option value="Rechazado"@if($projects->phase == 'Rechazado'){{ 'selected' }}@endif>Rechazado</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Responsable del proyecto*</h5>
                                        <div class="form-group">
                                            <select class="form-control hide_search" tabindex="7" name="user_id" id="user_id">
                                                <option value="{{$projects->user_id}}" selected>{{$projects->user->profile->name}}</option>
                                                @foreach($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->profile->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Fecha estimada de cierre*</h5>
                                        <div class="input-group input-append date" id="dpYears" data-date-format="yyyy-mm-dd">
                                            <input class="form-control" type="text" placeholder="dd-mm-aaaa" name="estimated_date" id="estimated_date" value="{{$projects->estimated_date}}">
                                            <span class="input-group-addon add-on">
                                                        <i class="fa fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 input_field_sections">
                                        <h5>Comentarios</h5>
                                        <textarea id="autosize" class="form-control" cols="50" rows="6" name="comments">{{$projects->comments}}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-4 input_field_sections">
                                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
