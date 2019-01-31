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
                                        <select class="form-control chzn-select" tabindex="2" name="client_id" id="client">
                                            <option value="{{$projects->client_id}}" selected>{{$projects->client->client_name}}</option>
                                        @foreach($clients as $client)
                                                <option value="{{ $client->id }}">{{ $client->client_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Contacto*</h5>
                                        <select class="form-control ui-select" tabindex="2" name="contact_id" id="myContacts">
                                            <option selected disabled>Selecciona un cliente</option>
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
@section('scripts')
    <script>
        $("#client").change((function (event) {
            var id = event.target.value;
            var url = "{{ route('projects.getContacts', ':D') }}";
            url = url.replace(':D', id);
            $.get(url ,function (response) {
                console.log(response);
                $("#myContacts ").empty();
                for(i=0; i<response.contacts.length; i++){
                    $("#myContacts").append("<option value='"+response.contacts[i].id+"'>"+response.contacts[i].contact_name+"</option>");
                }
            });

        }));
    </script>

@endsection

{{--Codigo para NAV bar --}}
{{--<div class="col-lg-6 m-t-25">
    <div>
        <ul class="nav nav-inline view_user_nav_padding">
            <li class="nav-item card_nav_hover">
                <a class="nav-link active" href="#user" id="home-tab" data-toggle="tab" aria-expanded="true">Categoría 1</a>
            </li>
            <li class="nav-item card_nav_hover">
                <a class="nav-link" href="#tab2" id="hats-tab" data-toggle="tab">Categoria 2</a>
            </li>
            <li class="nav-item card_nav_hover">
                <a class="nav-link" href="#tab3"  id="followers" data-toggle="tab">Categoría 3</a>
            </li>
            <li class="nav-item card_nav_hover">
                <a class="nav-link" href="#tab4"  id="cat4" data-toggle="tab">Categorría 4</a>
            </li>
        </ul>
        <div id="clothing-nav-content" class="tab-content m-t-10">
            <div role="tabpanel" class="tab-pane fade show active" id="user">
                <table class="table" id="users">
                    <tr>
                        <td>Soy la subcategoria1</td>
                        <td class="inline_edit">
                            <span class="editable" data-title="Edit User Name"><a class="edit" data-toggle="tooltip" data-placement="top" title="Editar" href="">
                        <i class="fa fa-pencil-alt text-warning"></i></a>
                          &nbsp; &nbsp;
                         <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Desactivar" href="#" data-id="">
                        <i class="fa fa-ban text-danger"></i></a></span>
                        </td>

                    </tr>
                    </tr>
                </table>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab2">
                <table class="table" id="users">
                    <tr>
                        <td>Soy la subcategoria1</td>
                        <td class="inline_edit">
                            <span class="editable" data-title="Edit User Name"><a class="edit" data-toggle="tooltip" data-placement="top" title="Editar" href="">
                        <i class="fa fa-pencil-alt text-warning"></i></a>
                          &nbsp; &nbsp;
                         <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Desactivar" href="#" data-id="">
                        <i class="fa fa-ban text-danger"></i></a></span>
                        </td>

                    </tr>
                    <tr>
                        <td>Soy la subcategoria 2</td>
                        <td class="inline_edit">
                            <span class="editable" data-title="Edit User Name"><a class="edit" data-toggle="tooltip" data-placement="top" title="Editar" href="">
                        <i class="fa fa-pencil-alt text-warning"></i></a>
                          &nbsp; &nbsp;
                         <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Desactivar" href="#" data-id="">
                        <i class="fa fa-ban text-danger"></i></a></span>
                        </td>

                    </tr>
                </table>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab3">
                <table class="table" id="users">
                    <tr>
                        <td>Soy la subcategoria1</td>
                        <td class="inline_edit">
                            <span class="editable" data-title="Edit User Name"><a class="edit" data-toggle="tooltip" data-placement="top" title="Editar" href="">
                        <i class="fa fa-pencil-alt text-warning"></i></a>
                          &nbsp; &nbsp;
                         <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Desactivar" href="#" data-id="">
                        <i class="fa fa-ban text-danger"></i></a></span>
                        </td>

                    </tr>
                    <tr>
                        <td>Soy la subcategoria 2</td>
                        <td class="inline_edit">
                            <span class="editable" data-title="Edit User Name"><a class="edit" data-toggle="tooltip" data-placement="top" title="Editar" href="">
                        <i class="fa fa-pencil-alt text-warning"></i></a>
                          &nbsp; &nbsp;
                         <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Desactivar" href="#" data-id="">
                        <i class="fa fa-ban text-danger"></i></a></span>
                        </td>

                    </tr>
                    <tr>
                        <td>Soy la subcategoria 3</td>
                        <td class="inline_edit">
                            <span class="editable" data-title="Edit User Name"><a class="edit" data-toggle="tooltip" data-placement="top" title="Editar" href="">
                        <i class="fa fa-pencil-alt text-warning"></i></a>
                          &nbsp; &nbsp;
                         <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Desactivar" href="#" data-id="">
                        <i class="fa fa-ban text-danger"></i></a></span>
                        </td>

                    </tr>
                </table>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab4">
                <table class="table" id="users">
                    <tr>
                        <td>Soy la subcategoria1</td>
                        <td class="inline_edit">
                            <span class="editable" data-title="Edit User Name"><a class="edit" data-toggle="tooltip" data-placement="top" title="Editar" href="">
                        <i class="fa fa-pencil-alt text-warning"></i></a>
                          &nbsp; &nbsp;
                         <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Desactivar" href="#" data-id="">
                        <i class="fa fa-ban text-danger"></i></a></span>
                        </td>

                    </tr>
                    <tr>
                        <td>Soy la subcategoria 2</td>
                        <td class="inline_edit">
                            <span class="editable" data-title="Edit User Name"><a class="edit" data-toggle="tooltip" data-placement="top" title="Editar" href="">
                        <i class="fa fa-pencil-alt text-warning"></i></a>
                          &nbsp; &nbsp;
                         <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Desactivar" href="#" data-id="">
                        <i class="fa fa-ban text-danger"></i></a></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Soy la subcategoria 3</td>
                        <td class="inline_edit">
                            <span class="editable" data-title="Edit User Name"><a class="edit" data-toggle="tooltip" data-placement="top" title="Editar" href="">
                        <i class="fa fa-pencil-alt text-warning"></i></a>
                          &nbsp; &nbsp;
                         <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Desactivar" href="#" data-id="">
                        <i class="fa fa-ban text-danger"></i></a></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Soy la subcategoria 4</td>
                        <td class="inline_edit">
                            <span class="editable" data-title="Edit User Name"><a class="edit" data-toggle="tooltip" data-placement="top" title="Editar" href="">
                        <i class="fa fa-pencil-alt text-warning"></i></a>
                          &nbsp; &nbsp;
                         <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Desactivar" href="#" data-id="">
                        <i class="fa fa-ban text-danger"></i></a></span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>--}}