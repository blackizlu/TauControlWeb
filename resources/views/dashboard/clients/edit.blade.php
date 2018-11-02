@extends('dashboard.layout')
@section('content')
    <div id="content" class="bg-container">
        <header class="head">
            <div class="main-bar">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <h4 class="nav_top_align skin_txt">
                            <i class="fa fa-user"></i>
                            Editar cliente
                        </h4>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="{{route ('dashboard.index') }}">
                                    <i class="fa fa-user" data-pack="default" data-tags=""></i>
                                    Inicio
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Clientes</a>
                            </li>
                            <li class="breadcrumb-item active">Editar cliente</li>
                        </ol>
                    </div>
                </div>
            </div>
        </header>
        <div class="outer">
            <div class="inner bg-container">
                <div class="card">

                    <div class="card-block m-t-35">
                        <div>
                            <h4>Información del cliente</h4>
                        </div>
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
                        <form class="form-horizontal login_validator" id="tryitForm" action="{{ route('dashboard.clients.update', $client->id) }}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PUT">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group row m-t-25">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="u-name" class="col-form-label">Nombre*</label>
                                        </div>
                                        <div class="col-xl-6 col-lg-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-user text-primary"></i>
                                                </span>
                                                <input type="text" name="client_name" value="{{ $client->client_name }}" id="u-name" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="type" class="col-form-label">Tipo</label>
                                        </div>
                                        <div class="col-xl-6 col-lg-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-users text-primary"></i>
                                                </span>
                                                <select class="form-control hide_search" tabindex="7" name="type" value="{{ $client->type }}">
                                                    <option selected disabled>Selecciona el tipo de contacto</option>
                                                    <option value="Arquitecto" @if($client->type == 'Arquitecto'){{ 'selected' }}@endif>Arquitecto</option>
                                                    <option value="Constructora" @if($client->type == 'Constructora'){{ 'selected' }}@endif>Constructora</option>
                                                    <option value="Desarrolladora" @if($client->type == 'Desarrolladora'){{ 'selected' }}@endif>Desarrolladora</option>
                                                    <option value="Cliente_final" @if($client->type == 'Cliente_final'){{ 'selected' }}@endif>Cliente final</option>
                                                    <option value="Gerencia_obra" @if($client->type == 'Gerencia_obra'){{ 'selected' }}@endif>Gerencia obra</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row m-t-25">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="u-name" class="col-form-label">Telefono de oficina*</label>
                                        </div>
                                        <div class="col-xl-6 col-lg-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-user text-primary"></i>
                                                </span>
                                                <input type="text" name="office_number" value="{{ $client->office_phone }}" id="u-name" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="email" class="col-form-label">Pagina web*</label>
                                        </div>
                                        <div class="col-xl-6 col-lg-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope text-primary"></i>
                                                </span>
                                                <input type="text" placeholder=" " id="web_page" name="web_page" value="{{ $client->web_page }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="email" class="col-form-label">Notas*</label>
                                        </div>
                                        <div class="col-xl-6 col-lg-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope text-primary"></i>
                                                </span>
                                                <input type="text" placeholder=" " id="notes" name="notes" value="{{ $client->notes }}" class="form-control">
                                            </div>
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
                                                    @foreach($users as $user)
                                                        <option value="{{ $user->id }}">{{ $user->profile->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    {{--          <div class="form-group gender_message row">
                                                  <div class="col-lg-3 text-lg-right">
                                                      <label class="col-form-label">Genero *</label>
                                                  </div>
                                                  <div class="col-xl-6 col-lg-8">
                                                      <div class="custom-controls-stacked">
                                                          <label class="custom-control custom-radio">
                                                              <input id="radio1" type="radio" name="gender"
                                                                     class="custom-control-input">
                                                              <span class="custom-control-indicator"></span>
                                                              <span class="custom-control-description">Masculino</span>
                                                          </label>
                                                          <label class="custom-control custom-radio">
                                                              <input id="radio2" type="radio" name="gender"
                                                                     class="custom-control-input">
                                                              <span class="custom-control-indicator"></span>
                                                              <span class="custom-control-description">Femenino</span>
                                                          </label>
                                                      </div>
                                                  </div>
                                              </div>--}}
                                    <div class="form-group row">
                                        <div class="col-lg-9 push-lg-3">
                                            <button class="btn btn-primary" type="submit">
                                                <i class="fa fa-user"></i>
                                                Actualizar
                                            </button>
                                            <button class="btn btn-warning" type="reset" id="clear">
                                                <i class="fa fa-refresh"></i>
                                                Reiniciar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection