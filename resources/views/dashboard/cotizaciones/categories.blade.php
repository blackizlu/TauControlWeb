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
                <div class="col-12 data_tables">
                    <div class="card">
                        <div class="card-header bg-white">
                            <i class="fa fa-table"></i> Categorías
                        </div>
                            <div class="card-block p-t-10">
                            <div class="m-l-20">
                                <a class="btn btn-primary btn-md adv_cust_mod_btn" data-toggle="modal"
                                   data-href="#responsive" href="#responsive">Agregar Categoría</a>
                                <a class="btn btn-primary btn-md adv_cust_mod_btn" data-toggle="modal"
                                   data-href="#stack1" href="#responsive2">Agregar Subcategoría</a>
                                <!--<a class="btn btn-info btn-md adv_cust_mod_btn" data-toggle="modal"-->
                                <!--data-href="#custom" href="#custom">Custom Width</a>-->
                            </div>
                            <div class="row">
                                <div class="col-4 m-t-15">
                                    <div class="list-group" id="list-tab" role="tablist">
                                        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
                                        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
                                        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
                                        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
                                    </div>
                                </div>
                                <div class="col-8 m-t-15">
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">..2432.</div>
                                        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">..2223452134314213432323.</div>
                                        <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">.2343532525233..</div>
                                        <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">2466664...</div>
                                    </div>
                                </div>
                            </div>
                            {{--<div class="row">--}}
                                {{--<div class="col-4 m-t-15 m-l-20">--}}
                                    {{--<div class="list-group" id="myList" role="tablist">--}}
                                        {{--<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>--}}
                                        {{--<a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-6 m-t-15">--}}
                                    {{--<div class="tab-content">--}}
                                        {{--<div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">--}}
                                            {{--<ul class="list-group lists_margin_bottom ">--}}
                                                {{--<li class="list-group-item">Subcat1<a class="edit m-l-10" data-toggle="tooltip" data-placement="top" title="Editar" href="">--}}
                                                        {{--<i class="fa fa-pencil-alt text-warning"></i></a>--}}
                                                    {{--&nbsp; &nbsp;<a class="delete hidden-xs hidden-sm confirm m-l-10" data-toggle="tooltip" data-placement="top" title="Desactivar" href="#" data-id=""><i class="fa fa-ban text-danger"></i></a>--}}
                                                {{--</li>--}}
                                                {{--<li class="list-group-item">Subcat2<a class="edit m-l-10" data-toggle="tooltip" data-placement="top" title="Editar" href=""><i class="fa fa-pencil-alt text-warning"></i></a>--}}
                                                    {{--&nbsp; &nbsp;<a class="delete hidden-xs hidden-sm confirm m-l-10" data-toggle="tooltip" data-placement="top" title="Desactivar" href="#" data-id=""><i class="fa fa-ban text-danger"></i></a>--}}
                                                {{--</li>--}}

                                            {{--</ul>--}}
                                        {{--</div>--}}
                                        {{--<div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">--}}
                                            {{--<ul class="list-group lists_margin_bottom ">--}}
                                                {{--<li class="list-group-item">Subcat2.1<a class="edit m-l-10" data-toggle="tooltip" data-placement="top" title="Editar" href=""><i class="fa fa-pencil-alt text-warning"></i></a>--}}
                                                    {{--&nbsp; &nbsp;<a class="delete hidden-xs hidden-sm confirm m-l-10" data-toggle="tooltip" data-placement="top" title="Desactivar" href="#" data-id=""><i class="fa fa-ban text-danger"></i></a>--}}
                                                {{--</li>--}}
                                                {{--<li class="list-group-item">Subcat2.2<a class="edit m-l-10" data-toggle="tooltip" data-placement="top" title="Editar" href=""><i class="fa fa-pencil-alt text-warning"></i></a>--}}
                                                    {{--&nbsp; &nbsp;<a class="delete hidden-xs hidden-sm confirm m-l-10" data-toggle="tooltip" data-placement="top" title="Desactivar" href="#" data-id=""><i class="fa fa-ban text-danger"></i></a>--}}
                                                {{--</li>--}}

                                            {{--</ul>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- modal responsivo subcategoria -->
    {{--<div class="modal fade in display_none" id="responsive" tabindex="-1" role="dialog" aria-hidden="false">--}}
        {{--<div class="modal-dialog modal-md">--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header bg-primary">--}}
                    {{--<h4 class="modal-title text-white">Nueva Categoría</h4>--}}
                    {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<p>--}}
                                {{--<input id="name" name="name" type="text" placeholder="Nombre de la categoría"--}}
                                       {{--class="form-control"></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="modal-footer">--}}
                    {{--<button type="button" data-dismiss="modal" class="btn btn-secondary">Cerrar</button>--}}
                    {{--<button type="button" class="btn btn-primary">Guardar</button>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!--- modal responsivo subcategoria -->--}}
    {{--<div class="modal fade in display_none" id="responsive2" tabindex="-1" role="dialog" aria-hidden="false">--}}
        {{--<div class="modal-dialog modal-md">--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header bg-primary">--}}
                    {{--<h4 class="modal-title text-white">Nueva Subcategoría</h4>--}}
                    {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<p>--}}
                                {{--<input id="name" name="name" type="text" placeholder="Nombre de la subcategoría"--}}
                                       {{--class="form-control"></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="modal-footer">--}}
                    {{--<button type="button" data-dismiss="modal" class="btn btn-secondary">Cerrar</button>--}}
                    {{--<button type="button" class="btn btn-primary">Guardar</button>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

@endsection
@section('scripts')
    <script>
//        $('#myList a').on('click', function (e) {
//            e.preventDefault()
//            $(this).tab('show')
//            $('#myList a[href="#list-home"]').tab('show')
//            $('#myList a[href="#list-profile"]').tab('show')
//
//        })
    </script>
@endsection
