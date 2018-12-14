@extends('dashboard.layout_users_index')
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-lg-6 col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-user"></i>
                        Usuarios
                    </h4>
                </div>
                <div class="col-lg-6 col-sm-8 col-12">
                    <ol class="breadcrumb float-right  nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index1.html">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i> Inicio
                            </a>
                        </li>
                        <li class="active breadcrumb-item">Usuarios</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="card">
                <div class="card-header bg-white">
                    Lista de usuarios
                </div>
                <div class="card-block">
                    <div class="m-t-35">
                        <div class="btn-group">
                            <a href="{{route ('dashboard.users.add')}}" id="editable_table_new" class=" btn btn-default">
                                Nuevo Usuario  <i class="fa fa-plus"></i>
                            </a>
                        </div><br>
                        <button id="del_button" class="btn btn-danger m-t-15" data-toggle="tooltip" data-placement="right" title="Selecciona un usuario de la tabla para desactivarlo" > Desactivar usuario seleccionado </button>
                        <div class="m-t-25">
                            <table id="example_demo" class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Correo</th>
                                    <th>Teléfono</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->profile->name }}</td>
                                        <td>{{ $user->profile->last_name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->profile->phone_number }}</td>
                                        <td>
                                            <a class="edit" id="edit_button" data-toggle="tooltip" data-placement="top" title="Editar" href="{{route ('dashboard.users.edit',$user->id)}}">
                                                <i class="fa fa-pencil-alt text-warning"></i></a>
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
@endsection
@section('scripts')
    @if(Session::has('message'))
        <script>
            iziToast.show({
                title: 'Success',
                message: '{!! Session::get('message') !!}',
                color:'#cc411e',
                position: 'bottomCenter'
            });
        </script>
    @endif
    <script>
        $('.delete').on('click', function (e) {
            e.preventDefault();
            var url = $(this).attr('href');
            new PNotify({
                title: 'Eliminar',
                text: '¿Desea eliminar el registro?',
                icon: 'fa fa-question-circle',
                hide: false,
                type: 'warning',
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
                swal('' + url).done();
            }).on('pnotify.cancel', function () {
                swal('Oh ok. Chicken, I see.').done();

            });
        });
    </script>
@endsection

