@extends('dashboard.layout')
@section('content')
<header class="head">
    <div class="main-bar">
        <div class="row no-gutters">
            <div class="col-lg-6 ">
                <h4 class="nav_top_align skin_txt">
                    <i class="fa fa-user-tie"></i>
                    Clientes
                </h4>
            </div>
            <div class="col-lg-6 col-sm-8 col-12">
                <ol class="breadcrumb float-right  nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="{{route ('dashboard.index') }}">
                            <i class="fa fa-home" data-pack="default" data-tags=""></i> Inicio
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Clientes</a>
                    </li>
                    <li class="breadcrumb-item active">Agregar cliente</li>

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
                    <a href="{{route ('dashboard.clients.index')}}" id="editable_table_new" class=" btn btn-default"><i class="fa fa-arrow-left"></i>&nbsp;Regresar</a>
                </div>
                <div class="m-t-10">
                    <h4 style="color: #000000 !important;" >Información del cliente</h4>
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
                <form class="form-horizontal login_validator" id="tryitForm" action="{{ route('dashboard.clients.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row m-t-25">
                                <div class="col-lg-3 text-lg-right">
                                    <label for="u-name" class="col-form-label">Nombre de la empresa*</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user-tie text-primary"></i>
                                        </span>
                                        <input type="text" name="client_name" id="u-name" value="{{ old('client_name') }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3 text-lg-right">
                                    <label for="type" class="col-form-label">Tipo*</label>
                                </div>
                                <div class="col-xl-3 col-lg-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-users text-primary"></i>
                                        </span>
                                        <select class="form-control chzn-select" tabindex="2" name="tipo_id">
                                            <option selected disabled>Selecciona el tipo de cliente</option>
                                            @foreach($tipocliente as $tipo)
                                                <option value="{{ $tipo->id }}">{{ $tipo->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <label for="type" class="col-form-label">¿El cliente es empresa?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>&nbsp;
                                    <input class="make-switch-radio" data-on-text="SI" data-off-text="NO" type="checkbox" data-size="small" name="is_business">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3 text-lg-right">
                                    <label for="email" class="col-form-label">Telefono de oficina</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-phone text-primary"></i>
                                        </span>
                                        <input type="text" placeholder=" " id="office_number" name="office_number" value="{{ old('office_number') }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <!--APARTADO PARA LA INFORMACION DE CONTACTOS RELACIONADOS CON EL CLIENTE OSEASE EMPRESA -->
                            <div class="form-group row">
                                <div class="col-lg-3 text-lg-right">
                                    <label for="email" class="col-form-label">Contacto*</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-address-book text-primary"></i>
                                        </span>
                                        <input type="text" placeholder=" " id="contact" name="contact_name" value="{{ old('contact_name') }}" class="form-control">
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
                                            <i class="fa fa-phone text-primary"></i>
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

                            <!--APARTADO PARA LA INFORMACION DE CONTACTOS RELACIONADOS CON EL CLIENTE OSEASE EMPRESA -->

                            <div class="form-group row">
                                <div class="col-lg-3 text-lg-right">
                                    <label for="pwd" class="col-form-label">Página web</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-desktop text-primary"></i>
                                        </span>
                                        <input type="text" name="web_page" id="web_page" value="{{ old('web_page') }}" class="form-control">
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
                                        <select class="form-control chzn-select" tabindex="2" name="user_id">
                                            <option selected disabled>Selecciona al responsable</option>
                                            @foreach($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->profile->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3 text-lg-right">
                                    <label for="cpwd" class="col-form-label">Notas</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-sticky-note text-primary"></i>
                                        </span>
                                        <textarea name="notes" id="autosize" cols="30" rows="1" value="{{ old('notes') }}" class="form-control"></textarea>
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
                            <br>
                            <div class="form-group row m-t-20">
                                <div class="col-lg-9 push-lg-3">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-user"></i>
                                        Agregar cliente
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
@endsection