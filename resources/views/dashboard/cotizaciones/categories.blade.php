@extends('dashboard.layout')
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-lg-6 col-md-4 col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-list-ol"></i>
                        Lista de Categorías
                    </h4>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-8">
                    <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="{{route('dashboard.index')}}">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i> Inicio
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Cotizaciónes</a>
                        </li>
                        <li class="breadcrumb-item active">Lista</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-light lter bg-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-white">
                            Categorías
                        </div>
                        <div class="card-block">
                            <div class="table-responsive ">
                                <div>
                                    <a class="btn btn-primary btn-md adv_cust_mod_btn" data-toggle="modal" data-href="#responsive" href="#responsive">Nueva Categoría</a>
                                </div>
                                <table class="table m-t-15">
                                    <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Acciones</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                    <tr>
                                        <td>{{$category->name}}</td>
                                        <td><a class="edit" data-toggle="modal" data-href="#edit" data-placement="top" title="Editar" href="#edit">
                                                <i class="fa fa-pencil-alt text-warning"></i></a>
                                            &nbsp; &nbsp;
                                            <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Desactivar" href="#" data-id="">
                                                <i class="fa fa-trash text-danger"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <!--- responsive model AGREGAR-->
        <div class="modal fade in display_none" id="responsive" tabindex="-1" role="dialog" aria-hidden="false">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title text-white">Agregar Categoría</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('dashboard.categories.store') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <p>
                                    <input id="name" name="name" type="text" placeholder="Categoría" class="form-control"  value="{{ old('category') }}">
                                </p>

                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--- responsive model EDITAR -->
        <div class="modal fade in display_none" id="edit" tabindex="-1" role="dialog" aria-hidden="false">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title text-white">Editar Categoría</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('dashboard.categories.update', $category->id) }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <p>
                                        <input id="name" name="name" type="text" placeholder="Categoría" class="form-control"  value="{{$category->name}}">
                                    </p>

                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
{{-- Codigo para NAV bar --}}
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
