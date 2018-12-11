@extends('dashboard.layout')
@section('content')
    <div id="content" class="bg-container">
        <header class="head">
            <div class="main-bar">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <h4 class="nav_top_align skin_txt">
                            <i class="fa fa-user-tie"></i>
                            Nuevo contacto
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="{{route ('dashboard.index') }}">
                                    <i class="fa fa-user-tie" data-pack="default" data-tags=""></i>
                                    Inicio
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Contacto</a>
                            </li>
                            <li class="breadcrumb-item active">Agregar contacto</li>
                        </ol>
                    </div>
                </div>
            </div>
        </header>
        <div class="outer">
            <div class="inner bg-container">
                <div class="card">
                    <div class="card-block">
                        <div class="btn-group">
                            <a href="{{route ('dashboard.contacts.index')}}" id="editable_table_new" class=" btn btn-default"><i class="fa fa-arrow-left"></i>&nbsp;Regresar</a>
                        </div>
                        <div class="m-t-10">
                            <h4 style="color: #000000 !important;">Información del contacto</h4>
                        </div>
                        @if (count($errors) > 0)
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="alert alert-danger alert-dismissable" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <form class="form-horizontal login_validator" id="tryitForm" action="{{ route('dashboard.contacts.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row m-t-35">
                                <div class="col-12">
                                    <div class="form-group row m-t-25">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="u-name" class="col-form-label">Nombre completo*</label>
                                        </div>
                                        <div class="col-xl-6 col-lg-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-user-tie text-primary"></i>
                                                </span>
                                                <input type="text" name="contact_name" id="u-name" value="{{ old('contact_name') }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="email" class="col-form-label">Telefono de contacto*</label>
                                        </div>
                                        <div class="col-xl-6 col-lg-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-mobile text-primary"></i>
                                                </span>
                                                <input type="text" placeholder=" " id="phone_number" name="phone_number" value="{{ old('phone_number') }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="email" class="col-form-label">Puesto</label>
                                        </div>
                                        <div class="col-xl-6 col-lg-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-briefcase text-primary"></i>
                                                </span>
                                                <input type="text" placeholder=" " id="workstation" name="workstation" value="{{ old('workstation') }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="email" class="col-form-label">Correo</label>
                                        </div>
                                        <div class="col-xl-6 col-lg-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-at text-primary"></i>
                                                </span>
                                                <input type="text" placeholder=" " id="email" name="email" value="{{ old('email') }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="type" class="col-form-label">Empresa*</label>
                                        </div>
                                        <div class="col-xl-6 col-lg-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-user-friends text-primary"></i>
                                                </span>
                                                <select class="form-control chzn-select" tabindex="2" name="client_id">
                                                    <option selected disabled>Selecciona la empresa a la que pertenece</option>
                                                    @foreach($clients as $client)
                                                        <option value="{{ $client->id }}">{{ $client->client_name }}</option>
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
                                    <div class="form-group row m-t-35">
                                        <div class="col-lg-9 push-lg-3">
                                            <button class="btn btn-primary" type="submit">
                                                <i class="fa fa-user"></i>
                                                Agregar contacto
                                            </button>
                                        </div>
                                    </div><br><br><br><br><br><br>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection