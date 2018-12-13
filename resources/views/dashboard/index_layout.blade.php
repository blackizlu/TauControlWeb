<?php //dd($activities); ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tau Control</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo1.ico"/>

    <!-- gkobalstyles-->
    <link type="text/css" rel="stylesheet" href="/css/dashboard/components.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/custom.css" />
    <link type="text/css" rel="stylesheet" href="#" id="skin_change"/>
    <!-- end of global styles-->

    <!-- Calendario styles-->
    <link type="text/css" rel="stylesheet" href="/css/dashboard/fullcalendar.min.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/calendar_custom.css" />
    <!-- end of plugin styles -->
    <!--Widgets styles-->
    <link type="text/css" rel="stylesheet" href="/css/dashboard/swiper.min.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/ihover.min.css"/>
    <!-- Widgets styles -->
    <link rel="stylesheet" type="text/css" href="/css/dashboard/widgets.css">


</head>

<body class="body">
<div id="wrap">
    @include('dashboard.partials.topbar')
    <div class="wrapper">
        @include('dashboard.partials.sidebar')
        <div id="content" class="bg-container">
            @yield('content')
        </div>
    </div>
</div>
<!-- global scripts-->
<script type="text/javascript" src="/js/dashboard/components.js"></script>
<script type="text/javascript" src="/js/dashboard/custom.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<!-- end of global scripts-->
<!-- Calendar scripts -->
<script type="text/javascript" src="/js/dashboard/moment.min.js"></script>
<script type="text/javascript" src="/js/dashboard/fullcalendar.min.js"></script>
<script type="text/javascript" src="/js/dashboard/calendarcustom.js" ></script>
<script type="text/javascript" src='/js/dashboard/calendarES.js'></script>
<!-- end of plugin scripts -->
<script>
    "use strict";
    $(document).ready(function() {
        /* initialize the external events
         -----------------------------------------------------------------*/
        function ini_events(ele) {
            ele.each(function() {

                var eventObject = {
                    title: $.trim($(this).text())
                };

                $(this).data('eventObject', eventObject);

                // make the event draggable using jQuery UI
                $(this).draggable({
                    zIndex: 1070,
                    revert: true,
                    revertDuration: 0
                });
            });
        }
        ini_events($('#external-events div.external-event'));
        var evt_obj;

        /* initialize the calendar */
        //Date for the calendar events (dummy data)
        var date = new Date();
        var d = date.getDate(),
            m = date.getMonth(),
            y = date.getFullYear();
        $('#calendar').fullCalendar({
            displayEventTime: true,
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },

            // eventos en calendario
            events: [{
            title: 'Instalacion de obra',
            start: new Date(y, m, 14),
            backgroundColor: "#ff9933"
        }],

            eventClick: function(calEvent, jsEvent, view) {
                evt_obj=calEvent;
                $("#event_title").val(evt_obj.title);
                currColor=evt_obj.backgroundColor;
                colorChooser.css({
                    "background-color": evt_obj.backgroundColor,
                    "border-color": evt_obj.backgroundColor
                }).html('type <span class="caret"></span>');
                $('#evt_modal').modal('show').on("shown.bs.modal",function(){
                    $("#event_title").focus();
                }).on("hidden.bs.modal",function () {
                    evt_obj="";
                });
                $(".text_save").on("click",function () {
                    evt_obj.title=$("#event_title").val();
                    evt_obj.backgroundColor=currColor;
                    $('#calendar').fullCalendar('updateEvent', evt_obj);
                    setTimeout(setpopover,100);
                });
            },
            editable: false,
            droppable: true,
            drop: function(date, allDay) {

                // retrieve the dropped element's stored Event Object
                var originalEventObject = $(this).data('eventObject');

                // we need to copy it, so that multiple events don't have a reference to the same object
                var copiedEventObject = $.extend({}, originalEventObject);
                var $calendar_badge= $(".calendar_badge");
                // assign it the date that was reported
                copiedEventObject.start = date;
                copiedEventObject.allDay = allDay;
                copiedEventObject.backgroundColor = $(this).css("background-color");
                copiedEventObject.borderColor = $(this).css("border-color");

                $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
                $calendar_badge.text(parseInt($calendar_badge.text()) + 1);
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    $(this).remove();
                }
                setpopover();
            },
            eventDrop: function() {
                setTimeout(setpopover,100);
            },
            eventResize:function() {
                setTimeout(setpopover,100);
            }
        });

        /* ADDING EVENTS */
        var currColor = "#737373"; //default
        //Color chooser button
        var colorChooser = $(".color-chooser-btn");
        $(".color-chooser > a").on('click',function(e) {
            e.preventDefault();
            //Save color
            currColor = $(this).css("background-color");
            //Add color effect to button
            colorChooser
                .css({
                    "background-color": currColor,
                    "border-color": currColor
                })
                .html($(this).text() + ' <span class="caret"></span>');
        });
        $("#add-new-event").on('click',function(e) {
            e.preventDefault();
            //Get value and make sure it is not null
            var $newevent= $("#new-event");
            var val = $newevent.val();
            if (val.length == 0) {
                return;
            }

            //Create event
            var event = $("<div />");
            event.css({
                "background-color": currColor,
                "border-color": currColor,
                "color": "#fff"
            }).addClass("external-event");
            event.html(val).append(' <i class="fa fa-times event-clear" aria-hidden="true"></i>');
            $('#external-events').prepend(event);

            //Add draggable funtionality
            ini_events(event);

            //Remove event from text input
            $newevent.val("");
        });
        $("body").on("click", "#external-events .event-clear", function() {
            $(this).closest(".external-event").remove();
            return false;
        });
        $(".modal-dialog [data-dismiss='modal']").on('click', function() {
            $("#new-event").replaceWith('<input type="text" id="new-event" class="form-control" placeholder="Event">');
        });

        function setpopover() {
            $(".fc-month-view").find(".fc-event-container a").each(function() {
                $(this).popover({
                    placement: 'top',
                    html: true,
                    content: $(this).text(),
                    trigger: 'hover'
                });
            });
            $(".fc-month-button").on('click',function () {
                $(".fc-event-container a").each(function() {
                    $(this).popover({
                        placement: 'top',
                        html: true,
                        content: $(this).text(),
                        trigger: 'hover'
                    });
                });
                return false;
            })
        }
        $(".fc-center").find('h2').css('font-size', '18px');
        setpopover();
    });
</script>

<!-- Widgets scripts -->
<script type="text/javascript" src="/js/dashboard/countUp.min.js"></script>
<script type="text/javascript" src="/js/dashboard/swiper.min.js"></script>
<script type="text/javascript" src="/js/dashboard/widget3.js"></script>
</body>
</html>
