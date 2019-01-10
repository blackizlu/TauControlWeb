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
                <div class="m-t-35 col-lg-6">
                    <div class="card">
                        <div class="card-header bg-white">
                            Tipo de actividades
                        </div>
                        <div class="card-block">
                            <div class="table-responsive ">
                                <table class="table m-t-15 table-striped" id="example_demo3">
                                    <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Color</th>
                                        <th>Código de color</th>
                                        <th>Acciones</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tipoactividad as $tipoact)
                                        <tr>
                                            <td>{{$tipoact->name}}</td>
                                            <td><span class="input-group-addon" style="background-color: {{$tipoact->color}}"></span></td>
                                            <td>{{$tipoact->color}}</td>
                                            <td><a class="edit" data-toggle="modal" data-href="#edit" data-placement="top" title="Editar" href="#edit3">
                                                    <i class="fa fa-pencil-alt text-warning"></i></a>
                                                &nbsp; &nbsp;     <a class="trash"  type="button" data-toggle="tooltip" data-placement="top" href="{{ route('dashboard.tipoactividad.delete', $tipoact->id) }}" title="Eliminar">
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
                <form class="form-horizontal login_validator col-lg-6" id="tryitForm" action="{{ route('dashboard.tipoactividad.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="m-t-35">
                        <div class="card">
                            <div class="card-header bg-white">
                                Agregar nueva actividad
                            </div>
                            <div class="card-block">
                                <div class="col-md-12">
                                    <h5>Nombre de la actividad</h5>
                                    <p>
                                        <input id="name" name="name" type="text" placeholder="Actividad" class="form-control"  value="">
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <h5>Color de la actividad</h5>
                                    <p>
                                        <input type="text" class="form-control" placeholder="#8fff00" id="cp1" name="color">
                                    </p>
                                </div>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--- responsive model EDITAR TIPO DE ACTIVIDAD -->
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
                                    <input id="name" name="name" type="text" placeholder="Tipo de cliente" class="form-control input-lg"  value="{{$tipoact->name}}">
                                </p>
                            </div>
                            <div class="col-md-12" >
                                <h5>Color de la actividad</h5>
                                <p>
                                    <input type="text" class="form-control input-lg" placeholder="#8fff00" id="cp11" name="color" >
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
        var table = $('#example_demo3').DataTable({
            "searching": false,
            "orderable": false,
            "paging": false,
            "info": false,
            "scrollY": "300px",
            "scrollCollapse": true
        });

        $('#example_demo3 tbody').on( 'click', 'a.trash', function (e) {
            e.preventDefault();
            var url = $(this).attr('href');
            var tr = $(this).parents('tr');
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            new PNotify({
                title: 'Eliminar',
                text: '¿Desea eliminar el tipo de actividad?',
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

