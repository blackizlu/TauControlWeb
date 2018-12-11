@extends('dashboard.layout')
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-lg-6 col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-user"></i>
                        Contactos
                    </h4>
                </div>
                <div class="col-lg-6 col-sm-8 col-12">
                    <ol class="breadcrumb float-right  nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index1.html">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i> Inicio
                            </a>
                        </li>
                        <li class="active breadcrumb-item">Contactos</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="card">
                <div class="card-header bg-white">
                    Lista de contactos
                </div>
                <div class="card-block" id="user_body">
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
                    <div class="table-toolbar">
                        <div class="btn-group">
                            <a href="{{route ('dashboard.contacts.add')}}" id="editable_table_new" class=" btn btn-default">
                                Nuevo contacto  <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <div class="btn-group float-right users_grid_tools">
                            <div class="tools"></div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <table class="table  table-striped table-bordered table-hover dataTable no-footer" id="editable_table" role="grid">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Nombre</th>
                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Empresa</th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Puesto</th>
                                    <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1">Teléfono</th>
                                    <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1">Correo</th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $contact)
                                    <tr role="row" class="even">
                                        <td class="sorting_1">{{ $contact->contact_name }}</td>
                                        <td>{{ $contact->client->client_name }}</td>
                                        <td>{{ $contact->workstation }}</td>
                                        <td>{{ $contact->phone_number }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>
                                            &nbsp; &nbsp;
                                            <a class="edit" data-toggle="tooltip" data-placement="top" title="Editar" href="{{route ('dashboard.contacts.edit',$contact->id)}}">
                                                <i class="fa fa-pencil-alt text-warning"></i></a>
                                            &nbsp; &nbsp;
                                            <a class="delete hidden-xs hidden-sm confirm" data-toggle="tooltip" data-placement="top" title="Eliminar" href="#" data-id="{{ $contact->id }}">
                                                <i class="fa fa-trash text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.inner -->
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
        $('.confirm').click(function (e) {
            console.log('click');
            e.preventDefault();
            var id = $(this).data('id');
            new PNotify({
                title: 'Eliminar',
                text: '¿Desea eliminar el registro?',
                icon: 'fa fa-question-circle',
                hide: false,
                type: 'success',
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
                swal(id).done();
            }).on('pnotify.cancel', function () {
                swal('Oh ok. Chicken, I see.').done();

            });
            return false;
        });
    </script>
@endsection
