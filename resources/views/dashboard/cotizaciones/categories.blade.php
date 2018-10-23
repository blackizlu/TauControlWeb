@extends('dashboard.layout')
@section('content')
    <div id="content" class="bg-container">
        <header class="head">
            <div class="main-bar">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-sm-4 col-12">
                        <h4 class="nav_top_align">
                            <i class="fa fa-list-ol"></i>
                            Categorias
                        </h4>
                    </div>
                    <div class="col-lg-6 col-sm-8 col-12">
                        <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i> Inicio
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Categorias</a>
                            </li>
                            <li class="active breadcrumb-item">Lista de categorias</li>
                        </ol>
                    </div>
                </div>
            </div>
        </header>
        <div class="outer">
            <div class="inner bg-container">
                <section class="content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div id="multi" class="row"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            <ul id="foo" class="block__list block__list_words block_list_color1 text-center block__list block__list_tags"></ul>
                        <div class="col-lg-6">
                            <ul id="bar" class="block__list block__list_tags"></ul>
                            <div class="card m-t-35">
                                <div class="card-header bg-white">
                                    Addable list
                                </div>
                                <div class="card-block m-t-25">
                                    <div id="filter">
                                        <div class="block__list">
                                            <div class="editable_section">
                                                <div class="row">
                                                    <div class="col-12 px-0">
                                                        <ul id="editable" class="list-unstyled">
                                                            <li>text number one<i class="fa fa-close"></i></li>
                                                            <li>text number two<i class="fa fa-close"></i></li>
                                                            <li>text number three<i class="fa fa-close"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <button data-target="#myModal" data-toggle="modal" class="btn btn-primary btn-block editable_add">Add</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- modal -->
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">New List</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="float-right" aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="#" method="post" class="form" id="myform">
                                                    <div class="form-group is-empty label-floating">
                                                        <label class="control-label" for="list-name">Name:</label>
                                                        <input type="text" class="form-control" id="list-name" required>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-warning" id="modal_close_btn" data-dismiss="modal">Close</button>
                                                <input type="submit" class="btn btn-primary" id="save" value="Save">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection