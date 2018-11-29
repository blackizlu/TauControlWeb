@extends('dashboard.index_layout')
@section('content')
    <div id="content" class="bg-container">
        <header class="head">
            <div class="main-bar">
                <div class="row no-gutters">
                    <div class="col-sm-6">
                        <h4 class="nav_top_align">
                            <i class="fa fa-home"></i>
                            Inicio
                        </h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="outer">
            <div class="inner bg-light lter bg-container cal_btn_hov">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                Draggable Events
                                <div class="float-right">
                                    <a href="#" class="btn btn-link btn-xs" data-toggle="modal" data-target="#myModal">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-block m-t-35">
                                <div id='external-events'>
                                    <div class='external-event bg-warning'>Team Out <i class="fa fa-times event-clear" aria-hidden="true"></i></div>
                                    <div class='external-event bg-primary'>Product Seminar <i class="fa fa-times event-clear" aria-hidden="true"></i></div>
                                    <div class='external-event bg-danger'>Client Meeting <i class="fa fa-times event-clear" aria-hidden="true"></i></div>
                                    <div class='external-event bg-info'>Repeating Event <i class="fa fa-times event-clear" aria-hidden="true"></i></div>
                                    <div class='external-event bg-success'>Event Celebrations <i class="fa fa-times event-clear" aria-hidden="true"></i></div>
                                    <p class="well no-border no-radius">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id='drop-remove'>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">remove after drop</span>
                                        </label>
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal">Create event</a>
                            </div>
                        </div>
                        <!-- /.box -->
                    </div>
                    <div class="col-lg-9 media_max_991">
                        <div class="card">
                            <div class="card-block m-t-35">
                                <div id="calendar"></div>
                            </div>
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
                <br /> <br />
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel1">
                                    <i class="fa fa-plus"></i>
                                    Create Event
                                </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="input-group">
                                    <input type="text" id="new-event" class="form-control" placeholder="Event">
                                    <div class="input-group-btn">
                                        <button type="button" class="color-chooser-btn btn btn-default text-white dropdown-toggle" data-toggle="dropdown">
                                            Default
                                        </button>
                                        <div class="dropdown-menu float-right cal_modal_type color-chooser">
                                            <a class="color_primary text-center text-white dropdown-item" href="#">
                                                Primary
                                            </a>
                                            <a class="color_success text-center text-white dropdown-item" href="#">
                                                Success
                                            </a>
                                            <a class="color_info text-center text-white dropdown-item" href="#">
                                                Info
                                            </a>
                                            <a class="color_warning text-center text-white dropdown-item" href="#">
                                                warning
                                            </a>
                                            <a class="color_danger text-center text-white dropdown-item" href="#">
                                                Danger
                                            </a>
                                        </div>
                                    </div>
                                    <!-- /btn-group -->
                                </div>
                                <!-- /input-group -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger float-right" data-dismiss="modal">
                                    Close
                                    <i class="fa fa-times"></i>
                                </button>
                                <button type="button" class="btn btn-success pull-left" id="add-new-event" data-dismiss="modal">
                                    <i class="fa fa-plus"></i>
                                    Add
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.inner -->
        </div>
        <!-- /.outer -->
        <div class="modal fade" id="search_modal" tabindex="-1" role="dialog"
             aria-hidden="true">
            <form>
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="float-right" aria-hidden="true">&times;</span>
                        </button>
                        <div class="input-group search_bar_small">
                            <input type="text" class="form-control" placeholder="Search..." name="search">
                            <span class="input-group-btn">
        <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
      </span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /#content -->
    </div>

@endsection