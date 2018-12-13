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
                            <a href="index1.html">
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
                        <div>
                            <a class="btn btn-primary btn-md adv_cust_mod_btn" data-toggle="modal" data-href="#responsive" href="#responsive">Nueva Actividad</a>
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
                                    <th class="sorting_asc_disabled sorting_desc_disabled wid-20" tabindex="0" rowspan="1" colspan="1">Cliente</th>
                                    <th class="sorting_asc_disabled sorting_desc_disabled wid-20" tabindex="0" rowspan="1" colspan="1">Contacto</th>
                                    <th class="sorting_asc_disabled sorting_desc_disabled wid-10" tabindex="0" rowspan="1" colspan="1">Proyecto</th>
                                    <th class="sorting_asc_disabled sorting_desc_disabled wid-10" tabindex="0" rowspan="1" colspan="1">Fecha</th>
                                    <th class="sorting_asc_disabled sorting_desc_disabled wid-10" tabindex="0" rowspan="1" colspan="1">Hora</th>
                                    <th class="sorting_asc_disabled sorting_desc_disabled wid-10" tabindex="0" rowspan="1" colspan="1">Tipo de actividad</th>
                                    <th class="sorting_asc_disabled sorting_desc_disabled wid-10" tabindex="0" rowspan="1" colspan="1">Realizada</th>
                                    <th class="sorting_asc_disabled sorting_desc_disabled wid-10" tabindex="0" rowspan="1" colspan="1">Actividad</th>
                                    <th class="sorting_asc_disabled sorting_desc_disabled wid-10" tabindex="0" rowspan="1" colspan="1">Responsable</th>
                                    <th class="sorting_asc_disabled sorting_desc_disabled wid-10" tabindex="0" rowspan="1" colspan="1">Acciones</th>
                                </tr>
                                <tbody>
                                @foreach($activities as $activity)
                                    <tr >
                                        <td>{{$activity->client->client_name}}</td>
                                        <td>{{$activity->contact->contact_name}}</td>
                                        <td>{{$activity->project->name}}</td>
                                        <td>{{\Carbon\Carbon::parse($activity->deadline)->format('d/m/Y')}}</td>
                                        <td>{{$activity->time}}</td>
                                        <td>{{$activity->activity}}</td>
                                        <td>
                                            <div class="checkbox" align="center">
                                                <label class="text-success">
                                                    <input type="checkbox" @if($activity->completed == true) checked @endif disabled>
                                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                </label>
                                            </div></td>
                                        <td>{{$activity->comments}}</td>
                                        <td>{{$activity->user->profile->name}} </td>
                                        <td>
                                            &nbsp; &nbsp;
                                            <a data-toggle="modal"  data-actid="{{$activity->id}}" data-mytitle="{{$activity->client->client_name}}" data-mycontact="{{$activity->contact->contact_name}}" data-myproject="{{$activity->project->name}}"  data-mydate="{{$activity->start}}" data-mydate2="{{$activity->end}}" data-mytime="{{$activity->time}}" data-myactivity="{{$activity->activity}}" data-mydone="{{$activity->completed}}" data-mycomments="{{$activity->comments}}" data-myuser="{{$activity->user->profile->name}}" data-placement="top" title="Editar actividad" data-href="#edit" href="#edit" type="hidden">
                                                <i class="fa fa-pencil-alt text-warning"></i></a>
                                            &nbsp; &nbsp;
                                            <a data-toggle="modal" data-actid="{{$activity->id}}" data-placement="top" title="Eliminar actividad" data-href="#delete" href="#delete" type="hidden">
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
                                                <option value="instalacion_obra">Instalación Obra</option>
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

    <!--- responsive model Eliminar Actividad-->
        <div class="modal fade in display_none" id="delete" tabindex="-1" role="dialog" aria-hidden="false">
            <div class="modal-dialog modal-sd">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h4 class="modal-title text-white">Eliminar Actividad</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <form action="{{route('dashboard.activities.delete', $activity->id)}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">
                        {{ csrf_field() }}
                            <div class="modal-body">
                                <input type="hidden" name="activity_id" id="act_id" value="">
                                <p class="text-center m-t-15"><strong>¿Estas seguro que deseas eliminar esta actividad?</strong></p>
                            </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">No, cancelar</button>
                            <button type="submit" class="btn btn-danger">Si, eliminar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

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
                                            <select class="form-control" tabindex="7" name="client_id" id="client" value="client">
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
                                                <option value="instalacion_obra">Instalación Obra</option>
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
                                            <select class="form-control" tabindex="7" name="user_id" id="user" value="#user">
                                                <option selected value="#user"></option>
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

        $('#edit').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var activity_id = button.data('actid')
                var client = button.data('mytitle')
                var contact = button.data('mycontact')
                var project = button.data('myproject')
                var date = button.data('mydate')
                var date2 = button.data('mydate2')
                var time = button.data('mytime')
                var activity = button.data('myactivity')
                var done = button.data('mydone')
                var comments = button.data('mycomments')
                var responsable = button.data('myuser') // Extract info from data-* attributes
                var modal = $(this)                     // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                                                        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

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



            console.log(client,contact,project,date,date2,time,activity,done,comments,responsable,activity_id);
        });

        $('#delete').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var activity_id = button.data('actid')
            var modal = $(this)
            modal.find('.modal-body #act_id').val(activity_id);
        });
    </script>
@endsection
