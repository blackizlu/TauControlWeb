<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard-1| Admire</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="//images/dashboard/logo1.ico"/>

    <!--global styles-->
    <link type="text/css" rel="stylesheet" href="/css/dashboard/components.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/custom.css" />
    <!-- end of global styles-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="/css/dashboard/c3.min.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/toastr.min.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/switchery.min.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/new_dashboard.css"/>
    <link type="text/css" rel="stylesheet" href="#" id="skin_change"/>
</head>
<body class="body">

<div id="wrap">
    <div id="top">
        <!-- .navbar -->
        <nav class="navbar navbar-static-top">
            <div class="container-fluid m-0">
                <a class="navbar-brand float-left" href="index.html">
                    <h4><img src="/images/dashboard/logo1.ico" class="admin_img" alt="logo"> ADMIRE ADMIN</h4>
                </a>
                <div class="menu">
                    <span class="toggle-left" id="menu-toggle">
                        <i class="fa fa-bars"></i>
                    </span>
                </div>
                <div class="topnav dropdown-menu-right float-right">
                    <div class="btn-group hidden-md-up small_device_search" data-toggle="modal"
                         data-target="#search_modal">
                        <i class="fa fa-search text-primary"></i>
                    </div>
                    <div class="btn-group">
                        <div class="notifications no-bg">
                            <a class="btn btn-default btn-sm messages" data-toggle="dropdown" id="messages_section"> <i
                                        class="fa fa-envelope-o fa-1x"></i>
                                <span class="badge badge-pill badge-warning notifications_badge_top">8</span>
                            </a>
                            <div class="dropdown-menu drop_box_align" role="menu" id="messages_dropdown">
                                <div class="popover-title">You have 8 Messages</div>
                                <div id="messages">
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="/images/dashboard/mailbox_imgs/5.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data"><strong>hally</strong>
                                                sent you an image.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="/images/dashboard/mailbox_imgs/8.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data"><strong>Meri</strong>
                                                invitation for party.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="/images/dashboard/mailbox_imgs/7.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <strong>Remo</strong>
                                                meeting details .
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="/images/dashboard/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <strong>David</strong>
                                                upcoming events list.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="/images/dashboard/mailbox_imgs/5.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data"><strong>hally</strong>
                                                sent you an image.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="/images/dashboard/mailbox_imgs/8.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data"><strong>Meri</strong>
                                                invitation for party.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="/images/dashboard/mailbox_imgs/7.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <strong>Remo</strong>
                                                meeting details .
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="/images/dashboard/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <strong>David</strong>
                                                upcoming events list.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="popover-footer">
                                    <a href="mail_inbox.html" class="text-white">Inbox</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <div class="notifications messages no-bg">
                            <a class="btn btn-default btn-sm" data-toggle="dropdown" id="notifications_section"> <i
                                        class="fa fa-bell-o"></i>
                                <span class="badge badge-pill badge-danger notifications_badge_top">9</span>
                            </a>
                            <div class="dropdown-menu drop_box_align" role="menu" id="notifications_dropdown">
                                <div class="popover-title">You have 9 Notifications</div>
                                <div id="notifications">
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="/images/dashboard/mailbox_imgs/1.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Remo</strong>
                                                sent you an image
                                                <br>
                                                <small class="primary_txt">just now.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="/images/dashboard/mailbox_imgs/2.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>clay</strong>
                                                business propasals
                                                <br>
                                                <small class="primary_txt">20min Back.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="/images/dashboard/mailbox_imgs/3.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>John</strong>
                                                meeting at Ritz
                                                <br>
                                                <small class="primary_txt">2hrs Back.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="/images/dashboard/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Luicy</strong>
                                                Request Invitation
                                                <br>
                                                <small class="primary_txt">Yesterday.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="/images/dashboard/mailbox_imgs/1.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Remo</strong>
                                                sent you an image
                                                <br>
                                                <small class="primary_txt">just now.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="/images/dashboard/mailbox_imgs/2.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>clay</strong>
                                                business propasals
                                                <br>
                                                <small class="primary_txt">20min Back.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="/images/dashboard/mailbox_imgs/3.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>John</strong>
                                                meeting at Ritz
                                                <br>
                                                <small class="primary_txt">2hrs Back.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="/images/dashboard/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Luicy</strong>
                                                Request Invitation
                                                <br>
                                                <small class="primary_txt">Yesterday.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="/images/dashboard/mailbox_imgs/1.jpg" class="message-img avatar rounded-circle"
                                                     alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Remo</strong>
                                                sent you an image
                                                <br>
                                                <small class="primary_txt">just now.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="popover-footer">
                                    <a href="#" class="text-white">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <div class="notifications request_section no-bg">
                            <a class="btn btn-default btn-sm messages" id="request_btn"> <i
                                        class="fa fa-sliders" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="btn-group">
                        <div class="user-settings no-bg">
                            <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
                                <img src="/images/dashboard/admin.jpg" class="admin_img2 img-thumbnail rounded-circle avatar-img"
                                     alt="avatar"> <strong>Micheal</strong>
                                <span class="fa fa-sort-down white_bg"></span>
                            </button>
                            <div class="dropdown-menu admire_admin">
                                <a class="dropdown-item title" href="#">
                                    Admire Admin</a>
                                <a class="dropdown-item" href="edit_user.html"><i class="fa fa-cogs"></i>
                                    Account Settings</a>
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-user"></i>
                                    User Status
                                </a>
                                <a class="dropdown-item" href="mail_inbox.html"><i class="fa fa-envelope"></i>
                                    Inbox</a>

                                <a class="dropdown-item" href="lockscreen.html"><i class="fa fa-lock"></i>
                                    Lock Screen</a>
                                <a class="dropdown-item" href="login2.html"><i class="fa fa-sign-out"></i>
                                    Log Out</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="top_search_box float-right hidden-sm-down">
                    <form class="header_input_search float-right">
                        <input type="text" placeholder="Search" name="search">
                        <button type="submit">
                            <span class="font-icon-search"></span>
                        </button>
                        <div class="overlay"></div>
                    </form>
                </div>
            </div>
            <!-- /.container-fluid -->
        </nav>
        <div class="wrapper">
            <div id="left">
                <div class="menu_scroll">
                    <div class="left_media">
                        <div class="media user-media">
                            <div class="user-media-toggleHover">
                                <span class="fa fa-user"></span>
                            </div>
                            <div class="user-wrapper">
                                <a class="user-link" href="#">
                                    <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture"
                                         src="/images/dashboard/admin.jpg">
                                    <p class="user-info menu_hide">Welcome Micheal</p>
                                </a>
                            </div>
                        </div>
                        <hr/>
                    </div>
                    <ul id="menu">
                        <li class="active">
                            <a href="index1.html">
                                <i class="fa fa-home"></i>
                                <span class="link-title menu_hide">&nbsp;Dashboard 1</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html">
                                <i class="fa fa-tachometer"></i>
                                <span class="link-title menu_hide">&nbsp;Dashboard 2

                            </span>
                            </a>
                        </li>
                        <li class="dropdown_menu">
                            <a href="javascript:;">
                                <i class="fa fa-anchor"></i>
                                <span class="link-title menu_hide">&nbsp; Components</span>
                                <span class="fa arrow menu_hide"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="general_components.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; General Components
                                    </a>
                                </li>
                                <li>
                                    <a href="cards.html">
                                        <i class="fa fa-angle-right"></i>
                                        <span class="link-title">&nbsp;Cards</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="transitions.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Transitions
                                    </a>
                                </li>
                                <li>
                                    <a href="buttons.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Buttons
                                    </a>
                                </li>
                                <li>
                                    <a href="icons.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Icons
                                    </a>
                                </li>
                                <li>
                                    <a href="tooltips.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Tooltips
                                    </a>
                                </li>
                                <li>
                                    <a href="animations.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Animations
                                    </a>
                                </li>

                                <li>
                                    <a href="sliders.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Sliders
                                    </a>
                                </li>
                                <li>
                                    <a href="notifications.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Notifications
                                    </a>
                                </li>
                                <li>
                                    <a href="p_notify.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; P-Notify
                                    </a>
                                </li>
                                <li>
                                    <a href="izitoast.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Izi-Toast
                                    </a>
                                </li>
                                <li>
                                    <a href="cropper.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Cropper
                                    </a>
                                </li>
                                <li>
                                    <a href="jstree.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp;Js Tree
                                    </a>
                                </li>
                                <li>
                                    <a href="modal.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Modals
                                    </a>
                                </li>


                                <li>
                                    <a href="sortable.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Sortable
                                    </a>
                                </li>
                                <li>
                                    <a href="sweet_alert.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Sweet alerts
                                    </a>
                                </li>
                                <li>
                                    <a href="grids_layout.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Grid View
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown_menu">
                            <a href="javascript:;">
                                <i class="fa fa-th-large"></i>
                                <span class="link-title menu_hide">&nbsp; Widgets</span>
                                <span class="fa arrow menu_hide"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="widgets1.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Widgets 1
                                    </a>
                                </li>
                                <li>
                                    <a href="widgets2.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Widgets 2
                                    </a>
                                </li>
                                <li>
                                    <a href="widgets3.html">
                                        <i class="fa fa-angle-right"></i>
                                        <span class="link-title">&nbsp; Widgets 3</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown_menu">
                            <a href="javascript:;">
                                <i class="fa fa-pencil"></i>
                                <span class="link-title menu_hide">&nbsp; Forms</span>
                                <span class="fa arrow menu_hide"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="form_elements.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Form Elements
                                    </a>
                                </li>
                                <li>
                                    <a href="form_layouts.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Form Layouts
                                    </a>
                                </li>
                                <li>
                                    <a href="form_validations.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Form Validations
                                    </a>
                                </li>
                                <li>
                                    <a href="form_editors.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Form Editors
                                    </a>
                                </li>
                                <li>
                                    <a href="radio_checkbox.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Radio and Checkbox
                                    </a>
                                </li>
                                <li>
                                    <a href="form_wizards.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Wizards
                                    </a>
                                </li>
                                <li>
                                    <a href="datetime_picker.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Date Time Picker
                                    </a>
                                </li>

                                <li>
                                    <a href="ratings.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Ratings
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="dropdown_menu">
                            <a href="#">
                                <i class="fa fa-th"></i>
                                <span class="link-title menu_hide">&nbsp; Tables</span>
                                <span class="fa arrow menu_hide"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="simple_tables.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Simple Tables
                                    </a>
                                </li>
                                <li>
                                    <a href="simple_datatables.html">
                                        <i class="fa fa-angle-right"></i>
                                        <span class="link-title">&nbsp; Simple Data Tables </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="datatables.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Data Tables
                                    </a>
                                </li>
                                <li>
                                    <a href="advanced_tables.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Advanced Tables
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown_menu">
                            <a href="#">
                                <i class="fa fa-bar-chart"></i>
                                <span class="link-title menu_hide">&nbsp; Charts</span>
                                <span class="fa arrow menu_hide"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="charts.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Flot Charts
                                    </a>
                                </li>
                                <li>
                                    <a href="advanced_charts.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Advanced Charts
                                    </a>
                                </li>
                                <li>
                                    <a href="chartist.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Chartist
                                    </a>
                                </li>
                                <li>
                                    <a href="rickshaw.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Rickshaw Charts
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown_menu">
                            <a href="#">
                                <i class="fa fa-user"></i>
                                <span class="link-title menu_hide">&nbsp; Users</span>
                                <span class="fa arrow menu_hide"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="users.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; User Grid
                                    </a>
                                </li>
                                <li>
                                    <a href="add_user.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Add User
                                    </a>
                                </li>
                                <li>
                                    <a href="view_user.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; User Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="delete_user.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Delete User
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fa fa-calendar"></i>
                                <span class="link-title menu_hide">&nbsp; Calendar</span>
                                <span class="badge badge-pill badge-primary float-right calendar_badge menu_hide">7</span>
                            </a>
                        </li>
                        <li>
                            <a href="gallery.html">
                                <i class="fa fa-picture-o"></i>
                                <span class="link-title menu_hide"> Gallery</span>
                            </a>
                        </li>
                        <li class="dropdown_menu">
                            <a href="#">
                                <i class="fa fa-envelope-o"></i>
                                <span class="link-title menu_hide">&nbsp; Email</span>
                                <span class="fa arrow menu_hide"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="mail_compose.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Compose
                                    </a>
                                </li>
                                <li>
                                    <a href="mail_inbox.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Inbox
                                    </a>
                                </li>

                                <li>
                                    <a href="mail_view.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; View
                                    </a>
                                </li>
                                <li>
                                    <a href="mail_sent.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Sent
                                    </a>
                                </li>
                                <li>
                                    <a href="mail_spam.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Spam
                                    </a>
                                </li>

                                <li>
                                    <a href="mail_draft.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Draft
                                    </a>
                                </li>
                                <li>
                                    <a href="mail_trash.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Trash
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown_menu">
                            <a href="#">
                                <i class="fa fa-map-marker"></i>
                                <span class="link-title menu_hide">&nbsp; Maps</span>
                                <span class="fa arrow menu_hide"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="maps.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Google Maps
                                    </a>
                                </li>
                                <li>
                                    <a href="jqvmaps.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Vector Maps
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown_menu">
                            <a href="javascript:;">
                                <i class="fa fa-file"></i>
                                <span class="link-title menu_hide">&nbsp; Pages</span>
                                <span class="fa arrow menu_hide"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="404.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; 404
                                    </a>
                                </li>
                                <li>
                                    <a href="500.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; 500
                                    </a>
                                </li>
                                <li>
                                    <a href="login1.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Login 1
                                    </a>
                                </li>
                                <li>
                                    <a href="login2.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp;<span class="link-title">&nbsp;Login 2</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="login3.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp;<span class="link-title">&nbsp;Login 3</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="register1.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Register 1
                                    </a>
                                </li>
                                <li>
                                    <a href="register2.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp;<span class="link-title">&nbsp;Register 2</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="register3.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp;<span class="link-title">&nbsp;Register 3</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="lockscreen.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Lock Screen 1
                                    </a>
                                </li>
                                <li>
                                    <a href="lockscreen2.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Lock Screen 2
                                    </a>
                                </li>
                                <li>
                                    <a href="lockscreen3.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Lock Screen 3
                                    </a>
                                </li>
                                <li>
                                    <a href="invoice.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Invoice
                                    </a>
                                </li>
                                <li>
                                    <a href="blank.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Blank Page
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown_menu">
                            <a href="javascript:;">
                                <i class="fa fa-th"></i>
                                <span class="link-title menu_hide">&nbsp; Layouts</span>
                                <span class="fa arrow menu_hide"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="boxed.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Boxed Layout
                                    </a>
                                </li>
                                <li>
                                    <a href="fixed-header-boxed.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Boxed &amp; Fixed Header
                                    </a>
                                </li>
                                <li>
                                    <a href="fixed-header-menu.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Fixed Header &amp; Menu
                                    </a>
                                </li>
                                <li>
                                    <a href="fixed-header.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Fixed Header
                                    </a>
                                </li>
                                <li>
                                    <a href="fixed-menu-boxed.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Boxed &amp; Fixed Menu
                                    </a>
                                </li>
                                <li>
                                    <a href="fixed-menu.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Fixed Menu
                                    </a>
                                </li>
                                <li>
                                    <a href="no-header.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; No Header
                                    </a>
                                </li>
                                <li>
                                    <a href="no-left-sidebar.html">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; No Left Sidebar
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown_menu">
                            <a href="javascript:;">
                                <i class="fa fa-sitemap"></i>
                                <span class="link-title menu_hide">&nbsp; Multi Level Menu</span>
                                <span class="fa arrow menu_hide"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp;Level 1
                                        <span class="fa arrow"></span>
                                    </a>
                                    <ul class="sub-menu sub-submenu">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-angle-right"></i>
                                                &nbsp;Level 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-angle-right"></i>
                                                &nbsp;Level 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-angle-right"></i>
                                                &nbsp;Level 2
                                                <span class="fa arrow"></span>
                                            </a>
                                            <ul class="sub-menu sub-submenu">
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-angle-right"></i>
                                                        &nbsp;Level 3
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-angle-right"></i>
                                                        &nbsp;Level 3
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-angle-right"></i>
                                                        &nbsp;Level 3
                                                        <span class="fa arrow"></span>
                                                    </a>
                                                    <ul class="sub-menu sub-submenu">
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-angle-right"></i>
                                                                &nbsp;Level 4
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-angle-right"></i>
                                                                &nbsp;Level 4
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-angle-right"></i>
                                                                &nbsp;Level 4
                                                                <span class="fa arrow"></span>
                                                            </a>
                                                            <ul class="sub-menu sub-submenu">
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-angle-right"></i>
                                                                        &nbsp;Level 5
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-angle-right"></i>
                                                                        &nbsp;Level 5
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-angle-right"></i>
                                                                        &nbsp;Level 5
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-angle-right"></i>
                                                        &nbsp;Level 4
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-angle-right"></i>
                                                &nbsp;Level 2
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp;Level 1
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp;Level 1
                                        <span class="fa arrow"></span>
                                    </a>
                                    <ul class="sub-menu sub-submenu">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-angle-right"></i>
                                                &nbsp;Level 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-angle-right"></i>
                                                &nbsp;Level 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-angle-right"></i>
                                                &nbsp;Level 2
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- /#menu -->
                </div>
            </div>
<!-- /#wrap -->
<!-- global scripts-->
<script type="text/javascript" src="/js/dashboard/components.js"></script>
<script type="text/javascript" src="/js/dashboard/custom.js"></script>
<!-- global scripts end-->
<script type="text/javascript" src="/js/dashboard/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="/js/dashboard/raphael-min.js"></script>
<script type="text/javascript" src="/js/dashboard/d3.min.js"></script>
<script type="text/javascript" src="/js/dashboard/c3.min.js"></script>
<script type="text/javascript" src="/js/dashboard/toastr.min.js"></script>
<script type="text/javascript" src="/js/dashboard/switchery.min.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.flot.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.flot.resize.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.flot.stack.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.flot.time.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.flot.spline.min.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.flot.categories.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.flot.pie.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.flot.tooltip.min.js"></script>
<script type="text/javascript" src="/js/dashboard/newsTicker.js"></script>
<script type="text/javascript" src="/js/dashboard/countUp.min.js"></script>
<!--end of plugin scripts-->
<script type="text/javascript" src="/js/dashboard/new_dashboard.js"></script>

</body>
</html>