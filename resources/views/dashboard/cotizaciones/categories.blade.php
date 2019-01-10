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
                            <a href="#">Administrador</a>
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
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-white">
                            Tipo de categoría de cotizaciones
                        </div>
                        <div class="card-block">
                            <div class="table-responsive ">
                                <div>
                                    <a class="btn btn-primary btn-md adv_cust_mod_btn" data-toggle="modal" data-href="#responsive" href="#responsive">Nuevo  <i class="fa fa-plus"></i></a>
                                </div>
                                <table class="table m-t-15 table-striped" id="example_demo">
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
                                    &nbsp; &nbsp;     <a class="trash"  type="button" data-toggle="tooltip" data-placement="top" href="{{ route('dashboard.categories.delete', $category->id) }}" title="Eliminar">
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
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-white">
                            Tipo de clientes
                        </div>
                        <div class="card-block">
                            <div class="table-responsive ">
                                <div>
                                    <a class="btn btn-primary btn-md adv_cust_mod_btn" data-toggle="modal" data-href="#responsive2" href="#responsive2">Nuevo  <i class="fa fa-plus"></i></a>
                                </div>
                                <table class="table m-t-15 table-striped" id="example_demo2">
                                    <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Acciones</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tipocliente as $tipo)
                                        <tr>
                                            <td>{{$tipo->name}}</td>
                                            <td><a class="edit" data-toggle="modal" data-href="#edit" data-placement="top" title="Editar" href="#edit2">
                                                    <i class="fa fa-pencil-alt text-warning"></i></a>
                                                &nbsp; &nbsp;     <a class="trash"  type="button" data-toggle="tooltip" data-placement="top" href="{{ route('dashboard.tipocliente.delete', $tipo->id) }}" title="Eliminar">
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
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-white">
                            Tipo de actividades
                        </div>
                        <div class="card-block">
                            <div class="table-responsive ">
                                <div>
                                    <a class="btn btn-primary btn-md adv_cust_mod_btn" data-toggle="modal" data-href="#responsive3" href="#responsive3">Nuevo  <i class="fa fa-plus"></i></a>
                                </div>
                                <table class="table m-t-15 table-striped" id="example_demo2">
                                    <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Acciones</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tipoactividad as $tipoact)
                                        <tr>
                                            <td>{{$tipoact->name}}</td>
                                            <td><a class="edit" data-toggle="modal" data-href="#edit" data-placement="top" title="Editar" href="#edit3">
                                                    <i class="fa fa-pencil-alt text-warning"></i></a>
                                                &nbsp; &nbsp;     <a class="trash"  type="button" data-toggle="tooltip" data-placement="top" href="{{ route('dashboard.tipocliente.delete', $tipo->id) }}" title="Eliminar">
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
        <!--- responsive model AGREGAR COTIZACIONES-->
        <form action="{{ route('dashboard.categories.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
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
                    </div>
                </div>
            </div>
        </form>

        <!--- responsive model AGREGAR TIPO DE CLIENTES-->
        <form action="{{ route('dashboard.tipocliente.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="modal fade in display_none" id="responsive2" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h4 class="modal-title text-white">Agregar Tipo de cliente</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <input id="name" name="name" type="text" placeholder="Tipo de cliente" class="form-control"  value="">
                                    </p>

                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!--- responsive model AGREGAR TIPO DE ACTIVIDAD-->
        <form action="{{ route('dashboard.tipoactividad.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="modal fade in display_none" id="responsive3" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h4 class="modal-title text-white">Agregar Tipo de actividad</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <input id="name" name="name" type="text" placeholder="Tipo de actividad" class="form-control"  value="">
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <p>
                                        <input id="name" name="name" type="text" placeholder="Color de la actividad" class="form-control"  value="">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!--- responsive model EDITAR -->
        <form action="{{ route('dashboard.categories.update', $category->id) }}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
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
                    </div>
                </div>
            </div>
        </form>
        <!--- responsive model EDITAR TIPO DE CLIENTES -->
        <form action="{{route('dashboard.tipocliente.update', $tipo->id)}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
            <div class="modal fade in display_none" id="edit2" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h4 class="modal-title text-white">Editar Tipo de cliente</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <p>
                                        <input id="name" name="name" type="text" placeholder="Tipo de cliente" class="form-control"  value="{{$tipo->name}}">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        {{--<!--- responsive model EDITAR TIPO DE ACTIVIDAD -->
        <form action="{{route('dashboard.tipoactividad.update', $tipoact->id)}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
            <div class="modal fade in display_none" id="edit3" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h4 class="modal-title text-white">Editar Tipo de actividad</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <p>
                                        <input id="name" name="name" type="text" placeholder="Tipo de cliente" class="form-control"  value="{{$tipoact->name}}">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>--}}
    </div>
@endsection

@section('scripts')
    @if(Session::has('message'))
        <script>
            iziToast.show({
                title: 'Success',
                message: '{!! Session::get('message') !!}',
                color:'#cc2900',
                position: 'bottomCenter'
            });
        </script>
    @endif
    <script>
        var table = $('#example_demo').DataTable({
            "searching": false,
            "orderable": false,
            "paging": false,
            "info": false
        });

        $('#example_demo tbody').on( 'click', 'a.trash', function (e) {
            e.preventDefault();
            var url = $(this).attr('href');
            var tr = $(this).parents('tr');
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            new PNotify({
                title: 'Eliminar',
                text: '¿Desea eliminar la categoría?',
                icon: 'fa fa-question-circle',
                hide: false,
                type: 'error',
                confirm: {
                    confirm: true
                },
                buttons: {
                    closer: false,
                    sticker: false
                },
                history: {
                    history: false
                }
            }).get().on('pnotify.confirm', function () {
                console.log(CSRF_TOKEN);
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: { _token: CSRF_TOKEN, _method: 'delete' },
                    dataType: 'JSON',
                    success: function (data) {
                        if(data.success) {
                            table.row( tr )
                                .remove()
                                .draw();
                        }
                    }
                });
            });
        } );

    </script>
    <script>
        var table = $('#example_demo2').DataTable({
            "searching": false,
            "orderable": false,
            "paging": false,
            "info": false
        });

        $('#example_demo2 tbody').on( 'click', 'a.trash', function (e) {
            e.preventDefault();
            var url = $(this).attr('href');
            var tr = $(this).parents('tr');
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            new PNotify({
                title: 'Eliminar',
                text: '¿Desea eliminar el tipo de contacto?',
                icon: 'fa fa-question-circle',
                hide: false,
                type: 'error',
                confirm: {
                    confirm: true
                },
                buttons: {
                    closer: false,
                    sticker: false
                },
                history: {
                    history: false
                }
            }).get().on('pnotify.confirm', function () {
                console.log(CSRF_TOKEN);
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: { _token: CSRF_TOKEN, _method: 'delete' },
                    dataType: 'JSON',
                    success: function (data) {
                        if(data.success) {
                            table.row( tr )
                                .remove()
                                .draw();
                        }
                    }
                });
            });
        } );
    </script>
    <script>
        var table = $('#example_demo3').DataTable({
            "searching": false,
            "orderable": false,
            "paging": false,
            "info": false
        });

        $('#example_demo3 tbody').on( 'click', 'a.trash', function (e) {
            e.preventDefault();
            var url = $(this).attr('href');
            var tr = $(this).parents('tr');
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            new PNotify({
                title: 'Eliminar',
                text: '¿Desea eliminar el tipo de contacto?',
                icon: 'fa fa-question-circle',
                hide: false,
                type: 'error',
                confirm: {
                    confirm: true
                },
                buttons: {
                    closer: false,
                    sticker: false
                },
                history: {
                    history: false
                }
            }).get().on('pnotify.confirm', function () {
                console.log(CSRF_TOKEN);
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: { _token: CSRF_TOKEN, _method: 'delete' },
                    dataType: 'JSON',
                    success: function (data) {
                        if(data.success) {
                            table.row( tr )
                                .remove()
                                .draw();
                        }
                    }
                });
            });
        } );
    </script>
@endsection

