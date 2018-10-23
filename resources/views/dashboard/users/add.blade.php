@extends('dashboard.layout')
@section('content')
    <div id="content" class="bg-container">
        <header class="head">
            <div class="main-bar">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <h4 class="nav_top_align skin_txt">
                            <i class="fa fa-user"></i>
                            Nuevo usuario
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
                            <li class="breadcrumb-item active">Agregar usuario</li>
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
                            <h4 style="color: #000000 !important;">Información Personal</h4>
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
                        <form class="form-horizontal login_validator" id="tryitForm" action="{{ route('dashboard.users.store') }}" method="post" enctype="multipart/form-data">
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
                                                <input type="text" name="name" id="u-name" value="{{ old('name') }}" class="form-control">
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
                                                <input type="text" name="last_name" id="u-name" value="{{ old('last_name') }}" class="form-control">
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
                                                <input type="text" placeholder=" " id="correo" name="email" value="{{ old('email') }}" class="form-control">
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
                                                <input type="password" name="password" id="password" class="form-control">
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
                                                <input type="password" name="confirm_password" placeholder=" " id="c_password" class="form-control">
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
                                                <input type="text" placeholder=" " id="phone_number" name="phone_number" value="{{ old('phone_number') }}" class="form-control">
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
                                                <select class="form-control hide_search" tabindex="7" name="type">
                                                    <option selected disabled>Selecciona el tipo de Usuario</option>
                                                    <option value="admin">Administrador</option>
                                                    <option value="salesman">Ventas</option>
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
                                                Agregar usuario
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

