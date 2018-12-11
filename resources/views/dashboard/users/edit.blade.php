@extends('dashboard.layout_adduser')
@section('content')
    <div id="content" class="bg-container">
        <header class="head">
            <div class="main-bar">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <h4 class="nav_top_align skin_txt">
                            <i class="fa fa-user"></i>
                            Editar usuario
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
                                <a href="#">Usuarios</a>
                            </li>
                            <li class="breadcrumb-item active">Editar usuario</li>
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
                            <a href="{{route ('dashboard.users.index')}}" id="editable_table_new" class=" btn btn-default"><i class="fa fa-arrow-left"></i>&nbsp;Regresar</a>
                        </div>
                        <div class="m-t-10">
                            <h4 style="color: #000000 !important;">Información Personal</h4>
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
                        <form class="form-horizontal login_validator" id="tryitForm" action="{{ route('dashboard.users.update', $user->id) }}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PUT">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group row m-t-25">
                                        <div class="col-lg-3 text-center text-lg-right">
                                            <label class="col-form-label">Foto de perfil</label>
                                        </div>
                                        <div class="col-lg-6 text-center text-lg-left">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new img-thumbnail text-center">
                                                    <img src="#" data-src="holder.js/100%x100%"  alt="not found"></div>
                                                <div class="fileinput-preview fileinput-exists img-thumbnail"></div>
                                                <div class="m-t-20 text-center">
                                                    <span class="btn btn-primary btn-file">
                                                        <span class="fileinput-new">Seleccionar imagen</span>
                                                        <span class="fileinput-exists">Cambiar</span>
                                                        <input type="file" name="image">
                                                    </span>
                                                    <a href="#" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">Eliminar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row m-t-25">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="u-name" class="col-form-label">Nombre*</label>
                                        </div>
                                        <div class="col-xl-6 col-lg-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-user text-primary"></i>
                                                </span>
                                                <input type="text" name="name" value="{{ $user->profile->name }}" id="u-name" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row m-t-25">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="u-name" class="col-form-label">Apellidos*</label>
                                        </div>
                                        <div class="col-xl-6 col-lg-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-user text-primary"></i>
                                                </span>
                                                <input type="text" name="last_name" value="{{ $user->profile->last_name }}" id="u-name" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="email" class="col-form-label">Correo*</label>
                                        </div>
                                        <div class="col-xl-6 col-lg-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope text-primary"></i>
                                                </span>
                                                <input type="text" placeholder=" " id="correo" name="email" value="{{ $user->email }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="pwd" class="col-form-label">Contraseña*</label>
                                        </div>
                                        <div class="col-xl-6 col-lg-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-lock text-primary"></i>
                                                </span>
                                                <input type="password" name="password" value="" id="pwd" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="cpwd" class="col-form-label">Confirmar contraseña*</label>
                                        </div>
                                        <div class="col-xl-6 col-lg-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-lock text-primary"></i>
                                                </span>
                                                <input type="password" name="confirm_password" placeholder=" " id="cpwd" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="phone" class="col-form-label">Telefono*</label>
                                        </div>
                                        <div class="col-xl-6 col-lg-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-phone text-primary"></i>
                                                </span>
                                                <input type="text" placeholder=" " id="phone_number" name="phone_number" value="{{ $user->profile->phone_number }}" class="form-control">
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
                                                <select class="form-control hide_search" tabindex="7" name="type" value="{{ $user->type }}">
                                                    <option selected disabled>Selecciona el tipo de Usuario</option>
                                                    <option value="admin" @if($user->type == 'admin'){{ 'selected' }}@endif>Administrador</option>
                                                    <option value="salesman" @if($user->type == 'salesman'){{ 'selected' }}@endif>Ventas</option>
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