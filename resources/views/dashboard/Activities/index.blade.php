@extends('dashboard.layout')
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-sm-5 col-lg-6 skin_txt">
                    <h4 class="nav_top_align"><i class="fa fa-tasks"></i>
                        Actividades
                    </h4>
                </div>
                <div class="col-sm-7 col-lg-6">
                    <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="{{route('dashboard.index')}}">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                Inicio
                            </a>
                        </li>
                        <li class="active breadcrumb-item">Actividades</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="card">
                <div class="card-header bg-white">
                    Lista de actividades
                </div>
                <div class="card-block">
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
                        <div class="btn-group">
                                <a class="btn btn-primary btn-md adv_cust_mod_btn" data-toggle="modal" data-href="#responsive" href="#responsive">Nueva Actividad</a>
                        </div><br>
                        <div class="m-t-25">
                            <table id="example_demo" class="table table-hover table-striped table-bordered">
                                <thead>
                                <tr >
                                    <th>Cliente</th>
                                    <th>Contacto</th>
                                    <th>Proyecto</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Tipo de actividad</th>
                                    <th>Realizada</th>
                                    <th>Actividad</th>
                                    <th>Responsable</th>
                                    <th>Acciones</th>
                                </tr>
                                <tbody>
                                @foreach($activities as $activity)
                                    <tr>
                                        <td>{{$activity->client->client_name}}
                                            @if($activity->client->deleted_at != null)
                                                <span style="color: red; font-size: 10px;">(Eliminado)</span>
                                            @endif</td>
                                        <td>{{$activity->contact->contact_name}}
                                            @if($activity->contact->deleted_at != null)
                                                <span style="color: red; font-size: 10px;">(Eliminado)</span>
                                            @endif
                                        </td>
                                        <td>{{$activity->project->name}}
                                            @if($activity->project->deleted_at != null)
                                                <span style="color: red; font-size: 10px;">(Eliminado)</span>
                                            @endif</td>
                                        <td>{{\Carbon\Carbon::parse($activity->start)->format('d/m/Y')}}</td>
                                        <td>{{\Carbon\Carbon::parse($activity->time)->format('h:i A')}}</td>
                                        <td>{{$activity->Name_Activity}}</td>
                                        <td>
                                            <div class="checkbox" align="center">
                                                <label class="text-success">
                                                    <input type="checkbox" @if($activity->completed == true) checked @endif disabled>
                                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                </label>
                                            </div></td>
                                        <td>{{$activity->comments}}</td>
                                        <td>{{$activity->user->profile->name}}
                                            @if($activity->user->deleted_at != null)
                                                <span style="color: red; font-size: 10px;">(Eliminado)</span>
                                            @endif</td>
                                        <td>
                                            &nbsp; &nbsp;
                                            <a class="edit" id="edit_button" data-toggle="tooltip" data-placement="top" title="Editar" href="{{route ('dashboard.activities.edit',$activity->id)}}">
                                                <i class="fa fa-pencil-alt text-warning"></i></a>
                                            &nbsp; &nbsp;
                                            <a class="trash"  type="button" data-toggle="tooltip" data-placement="top" href="{{ route('dashboard.activities.delete', $activity->id) }}" title="Eliminar">
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
        <!--- responsive model Nueva Actividad-->
    <form action="{{route('dashboard.activities.store')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
    <div class="modal fade in display_none" id="responsive" tabindex="-1" role="dialog" aria-hidden="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title text-white">Nueva Actividad</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row m-t-15">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="type" class="col-form-label">Cliente*</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user-tie text-primary"></i>
                                                    </span>
                                            <select class="form-control" tabindex="7" name="client_id" id="client">
                                                <option selected disabled>Selecciona al Cliente</option>
                                                @foreach($clients as $client)
                                                    <option value="{{ $client->id }}">{{ $client->client_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="type" class="col-form-label">Contacto*</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user text-primary"></i>
                                                    </span>
                                            <select class="form-control" tabindex="7" name="contact_id" id="myContacts">
                                                <option selected disabled>Selecciona al contacto</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="type" class="col-form-label">Proyecto*</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-folder text-primary"></i>
                                                    </span>
                                            <select class="form-control" tabindex="7" name="project_id" id="proyectos">
                                                <option selected disabled>Selecciona el proyecto</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="type" class="col-form-label">Fecha de inicio*</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-calendar-alt text-primary"></i>
                                                    </span>
                                            <div class="input-group input-append date" id="dp3" data-date-format="yyyy-mm-dd">
                                                <input class="form-control" type="text" placeholder="dd-mm-aaaa" name="start" id="start">
                                            <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="type" class="col-form-label">Fecha de finalización*</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-calendar-alt text-primary"></i>
                                                    </span>
                                            <div class="input-group input-append date" id="dpYears" data-date-format="yyyy-mm-dd">
                                                <input class="form-control" type="text" placeholder="dd-mm-aaaa" name="end" id="end">
                                                <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row" >
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="type" class="col-form-label">Hora*</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-clock-o text-primary"></i>
                                                </span>
                                            <div class="input-group clockpicker2" data-align="top" data-placement="top" data-autoclose="true">
                                                <input type="text" class="form-control" value="12:00" name="time">
                                                <span class="input-group-addon add-on">
                                                    <i class="fa fa-clock-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="type" class="col-form-label">Tipo de actividad*</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-clipboard-check text-primary"></i>
                                                    </span>
                                            <select class="form-control" tabindex="7" name="activity" id="name1">
                                                <option selected disabled>Selecciona una actividad</option>
                                                <option value="cita">Cita</option>
                                                <option value="envio_correo">Envio de Correo</option>
                                                <option value="instalacion_obra">Instalación de obra</option>
                                                <option value="llamada">Llamada</option>
                                                <option value="visita_obra">Visita a obra</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="type" class="col-form-label">Actividad*</label>
                                    </div>
                                        <div class="col-lg-6">
                                            <div class="checkbox">
                                                <label class="text-success">
                                                    <input type="checkbox" data-on-text="SI" data-off-text="NO" value="NO" name="completed">
                                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                    Realizada
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="type" class="col-form-label">Comentarios*</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <textarea id="autosize" class="form-control" cols="50" rows="4" name="comments"></textarea>
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
                                                <select class="form-control" tabindex="7" name="user_id">
                                                    <option selected disabled>Selecciona al responsable</option>
                                                    @foreach($users as $user)
                                                        <option value="{{ $user->id }}">{{ $user->profile->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Crear Actividad</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!--- responsive model Editar Actividad-->
        <div class="modal fade in display_none" id="edit" tabindex="-1" role="dialog" aria-hidden="false">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title text-white">Editar Actividad</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <form action="{{route('dashboard.activities.update', $activity->id)}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">
                        {{ csrf_field() }}
                    <div class="modal-body">
                        <input type="hidden" name="activity_id" id="act_id" value="">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row m-t-15">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="type" class="col-form-label">Cliente*</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-user-tie text-primary"></i>
                                                        </span>
                                            <select class="form-control" tabindex="7" name="client_id" id="clientedit">
                                                <option value="client" selected></option>
                                                @foreach($clients as $client)
                                                    <option value="{{ $client->id }}">{{ $client->client_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="type" class="col-form-label">Contacto*</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-user text-primary"></i>
                                                        </span>
                                            <select class="form-control" tabindex="7" name="contact_id" id="myContactsedit">
                                                <option value="myContacts" selected></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="type" class="col-form-label">Proyecto*</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-folder text-primary"></i>
                                                        </span>
                                            <select class="form-control" tabindex="7" name="project_id" id="proyectosedit">
                                                <option value="proyectos" selected></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="type" class="col-form-label">Fecha de inicio*</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-calendar-alt text-primary"></i>
                                                    </span>
                                            <div class="input-group input-append date" id="dpYears" data-date-format="yyyy-mm-dd">
                                                <input class="form-control" type="text" placeholder="dd-mm-aaaa" name="start" id="start">
                                                <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="type" class="col-form-label">Fecha de finalización*</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-calendar-alt text-primary"></i>
                                                    </span>
                                            <div class="input-group input-append date" id="dp3" data-date-format="yyyy-mm-dd">
                                                <input class="form-control" type="text" placeholder="dd-mm-aaaa" name="end" id="end">
                                                <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row" >
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="type" class="col-form-label">Hora*</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-clock-o text-primary"></i>
                                                    </span>
                                            <div class="input-group clockpicker2" data-align="top" data-placement="top" data-autoclose="true">
                                                <input type="text" class="form-control" name="time" id="time">
                                                <span class="input-group-addon add-on">
                                                        <i class="fa fa-clock-o"></i>
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="type" class="col-form-label">Tipo de actividad*</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-clipboard-check text-primary"></i>
                                                        </span>
                                            <select class="form-control" tabindex="7" name="activity" id="activity">
                                                <option value="cita">Cita</option>
                                                <option value="envio_correo">Envio de Correo</option>
                                                <option value="instalacion_obra">Instalación de obra</option>
                                                <option value="llamada">Llamada</option>
                                                <option value="visita_obra">Visita a obra</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="type" class="col-form-label">Actividad*</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkbox">
                                            <label class="text-success">
                                                <input type="checkbox" data-on-text="SI" data-off-text="NO" name="completed" id="completed" value="completed">
                                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                Realizada
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="type" class="col-form-label">Comentarios*</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <textarea id="comments"  class="form-control" cols="50" rows="1" name="comments" id="comments"></textarea>
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
                                            <select class="form-control" tabindex="7" name="user_id" id="user">
                                                <option selected="selected" id="user"></option>
                                                @foreach($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->profile->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                    </div>
                    </form>
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
                color:'#cc2900',
                position: 'bottomCenter'
            });
        </script>
    @endif
    <script>

        var table = $('#example_demo').DataTable({
            oLanguage: {
                sInfo: "Mostrando _START_ a _END_ de _TOTAL_ Registros",
                sInfoEmpty: "No hay registros a mostrar",
                sInfoFiltered: "",
                sZeroRecords: "Ningún registro para mostrar",
                sSearch: "Buscar:",
                oPaginate: {
                    sFirst: "Primera Página",
                    sLast: "Última Página",
                    sNext: "Siguiente",
                    sPrevious: "Anterior"
                },
                sEmptyTable: "No se encontraron registros",
                sLengthMenu: "Mostrar _MENU_ Registros"

            }
        });

        $('#example_demo tbody').on( 'click', 'a.trash', function (e) {
            e.preventDefault();
            var url = $(this).attr('href');
            var tr = $(this).parents('tr');
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            new PNotify({
                title: 'Eliminar',
                text: '¿Desea eliminar la actividad?',
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
        $("#client").change((function (event) {
            var id = event.target.value;
            var url = "{{ route('activities.getContacts', ':D') }}";
            url = url.replace(':D', id);
            $.get(url ,function (response) {
                console.log(response);
                $("#proyectos ").empty();
                for(i=0; i<response.projects.length; i++){
                    $("#proyectos").append("<option  value='"+response.projects[i].id+"'>"+response.projects[i].name+"</option>");
                }
                $("#myContacts ").empty();
                for(i=0; i<response.contacts.length; i++){
                    $("#myContacts").append("<option value='"+response.contacts[i].id+"'>"+response.contacts[i].contact_name+"</option>");
                }
            });

        }));

        /*$('#edit').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                var activity_id = button.data('actid');
                var client = button.data('mytitle');
                var contact = button.data('mycontact');
                var project = button.data('myproject');
                var date = button.data('mydate');
                var date2 = button.data('mydate2');
                var time = button.data('mytime');
                var activity = button.data('myactivity');
                var done = button.data('mydone');
                var comments = button.data('mycomments');
                var responsable = button.data('myuser');
                var modal = $(this);


                modal.find('.modal-body #act_id').val(activity_id);
                modal.find('.modal-body #client').val(client);
                modal.find('.modal-body #myContacts').val(contact);
                modal.find('.modal-body #proyectos').val(project);
                modal.find('.modal-body #start').val(date);
                modal.find('.modal-body #end').val(date2);
                modal.find('.modal-body #time').val(time);
                modal.find('.modal-body #activity').val(activity);
                modal.find('.modal-body #completed').val(done);
                modal.find('.modal-body #comments').val(comments);
                modal.find('.modal-body #user').val(responsable);


            console.log(activity_id,client,contact,project,date,date2,time,activity,done,comments,responsable);
        });

        $('#delete').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var activity_id = button.data('actid');
            var modal = $(this);
            modal.find('.modal-body #act_id').val(activity_id);
        });*/
    </script>
@endsection
