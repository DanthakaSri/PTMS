@extends('tmsApp')

@section('header')
        <!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="{{ asset('/js/plugins/fullcalendar/fullcalendar.min.css') }}">
<link rel="stylesheet" href="{{ asset('/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">

@endsection

@section('title')
    <div class="col-sm-7">
        <h1 class="page-heading">
            Welcome
            <small>NSBM Timetable Management System</small>
        </h1>
    </div>
    <div class="col-sm-5 text-right hidden-xs">
        <ol class="breadcrumb push-10-t">
            <li>Generic</li>
            <li><a class="link-effect" href="{{ url('/home') }}">Home</a></li>
        </ol>
    </div>
@endsection
@section('content')

    <div class="row item-push">
        <!-- Contact Forms -->
        <div class="col-lg-6 col-lg-offset-3">
            <!-- Bootstrap Contact -->
            <div class="block block-themed">
                <div class="block-header bg-info">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle"
                                    data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Timetable Details</h3>
                </div>
                <div class="block-content">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal push-5-t" action="{{ url('/timetable') }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-12" for="contact1-email">Timetable Name</label>
                            <div class="col-md-12">
                                <input class="form-control" type="text" id="contact1-email" name="name_1"
                                       value="master" placeholder="Enter Timetable Name" disabled>
                                <input class="form-control" type="hidden" id="contact1-email" name="name"
                                       value="master" placeholder="Enter Timetable Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12" for="contact1-subject">Subject</label>
                            <div class="col-md-12">
                                <select class="form-control" id="contact1-subject" name="subject_id" size="1">

                                    @foreach($subjects as $subject)
                                        <option value="{{ $subject->subject_id }}">{{ $subject->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 " for="example-datepicker1">Start Date</label>
                            <div class="col-md-12">
                                <input class="js-datepicker form-control" type="text" id="example-datepicker1"
                                       name="start" data-date-format="yy/mm/dd" placeholder="yy/mm/dd">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 " for="example-datepicker1">End Date</label>
                            <div class="col-md-12">
                                <input class="js-datepicker form-control" type="text" id="example-datepicker1"
                                       name="end" data-date-format="yy/mm/dd" placeholder="yy/mm/dd">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12" for="contact1-subject">Select Hall</label>
                            <div class="col-md-12">
                                <select class="form-control" id="contact1-subject" name="hall" size="1">

                                    @foreach($halls as $hall)
                                        <option value="{{ $hall->name }}">{{ $hall->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-success" type="submit"><i class="fa fa-plus push-5-r"></i>
                                    Add
                                    to Timetable
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Bootstrap Contact -->
        </div>

    </div>
    <!-- Calendar and Events functionality (initialized in js/pages/base_comp_calendar.js), for more info and examples you can check out http://fullcalendar.io/ -->
    <div class="row items-push">
        <div class="col-md-12col-md-offset-0 col-lg-12 col-lg-offset-0">
            <!-- Calendar Container -->
            <div id="calendar" class="js-calendar"></div>
        </div>
    </div>
    <!-- END Calendar -->
    @endsection

    @section('footer')
            <!-- Page Plugins -->
    <script src="{{ asset('/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/js/plugins/fullcalendar/moment.min.js') }}"></script>
    <script src="{{ asset('/js/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('/js/plugins/fullcalendar/gcal.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('/js/plugins/bootstrap-datepicker/bootstrap-datepicker3.min.css') }}"></script>

    {{--<script src="{{ asset('/js/pages/base_comp_calendar.js') }}"></script>--}}

    <script>
        $(function () {
            /* initialize the external events
             -----------------------------------------------------------------*/
            function ini_events(ele) {
                jQuery('.js-events')
                        .find('li')
                        .each(function () {
                            var $event = jQuery(this);

                            // create an Event Object
                            var $eventObject = {
                                title: jQuery.trim($event.text()),
                                color: $event.css('background-color')
                            };

                            // store the Event Object in the DOM element so we can get to it later
                            jQuery(this).data('eventObject', $eventObject);

                            // make the event draggable using jQuery UI
                            jQuery(this).draggable({
                                zIndex: 999,
                                revert: true,
                                revertDuration: 0
                            });
                        });
            }

            ini_events($('#external-events ul.external-event'));

            /* initialize the calendar
             -----------------------------------------------------------------*/
            //Date for the calendar events (dummy data)
            var date = new Date();
            var d = date.getDate(),
                    m = date.getMonth(),
                    y = date.getFullYear();
            //while(reload==false){
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                buttonText: {
                    today: 'Today',
                    month: 'Month',
                    week: 'Week',
                    day: 'Day',
                    listDay: 'List Day',
                    listWeek: 'List Week'
                },

                events: {url: "allTimetables"},

                editable: true,
                droppable: true, // this allows things to be dropped onto the calendar !!!

                drop: function (date, allDay) {
                    // this function is called when something is dropped
                    // retrieve the dropped element's stored Event Object
                    var originalEventObject = $(this).data('eventObject');
                    // we need to copy it, so that multiple events don't have a reference to the same object
                    var copiedEventObject = $.extend({}, originalEventObject);
                    allDay = true;
                    // assign it the date that was reported
                    copiedEventObject.start = date;
                    copiedEventObject.allDay = allDay;
                    copiedEventObject.backgroundColor = $(this).css("background-color");
//                    copiedEventObject.borderColor = $(this).css("border-color");

                    // render the event on the calendar
                    //$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
                    // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                    // is the "remove after drop" checkbox checked?


                    if ($('#drop-remove').is(':checked')) {
                        // if so, remove the element from the "Draggable Events" list
                        $(this).remove();
                    }
                    //We keep the event created in database | Guardamos el evento creado en base de datos
                    var title = copiedEventObject.title;
                    var start = copiedEventObject.start.format("YYYY-MM-DD HH:mm");
                    var back = copiedEventObject.backgroundColor;

                    var csrfToken = document.getElementsByName("_token")[0].value;
                    $.ajax({
                        url: 'createEvents',
                        data: 'title=' + title + '&start=' + start + '&allday=' + allDay + '&background=' + back + '&type=null',
                        type: "POST",
                        headers: {
                            "X-CSRF-TOKEN": csrfToken
                        },
                        success: function (events) {
                            console.log('Evento creado');
                            $('#calendar').fullCalendar('refetchEvents');
                        },
                        error: function (json) {
                            console.log("Error al crear evento");
                        }
                    });
                },
                //update time of the event
                eventResize: function (event) {
                    var start = event.start.format("YYYY-MM-DD HH:mm");
                    var back = event.backgroundColor;
                    var allDay = event.allDay;
                    if (event.end) {
                        var end = event.end.format("YYYY-MM-DD HH:mm");
                    } else {
                        var end = "NULL";
                    }
                    var csrfToken = document.getElementsByName("_token")[0].value;
                    $.ajax({
                        url: 'updateEvents',
                        data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id + '&background=' + back + '&allday=' + allDay,
                        type: "POST",
                        headers: {
                            "X-CSRF-TOKEN": csrfToken
                        },
                        success: function (json) {
                            console.log("Updated Successfully");
                        },
                        error: function (json) {
                            console.log("Error al actualizar evento");
                        }
                    });
                },
                // drag and drop date
                eventDrop: function (event, delta) {
                    var start = event.start.format("YYYY-MM-DD HH:mm");
                    if (event.end) {
                        var end = event.end.format("YYYY-MM-DD HH:mm");
                    } else {
                        var end = "NULL";
                    }
                    var back = event.backgroundColor;
                    var allDay = event.allDay;
                    var crsfToken = document.getElementsByName("_token")[0].value;

                    $.ajax({
                        url: 'updateEvents',
                        data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id + '&background=' + back + '&allday=' + allDay,
                        type: "POST",
                        headers: {
                            "X-CSRF-TOKEN": crsfToken
                        },
                        success: function (json) {
                            console.log("Updated  eventdrop");
                        },
                        error: function (json) {
                            console.log("Error in  eventdrop");
                        }
                    });
                },

                //mouse hover

                eventMouseover: function (event, jsEvent, view) {
                    var start = (event.start.format("HH:mm"));
                    var back = event.backgroundColor;
                    if (event.end) {
                        var end = event.end.format("HH:mm");
                    } else {
                        var end = "No End time";
                    }
                    if (event.allDay) {
                        var allDay = "Yes";
                    } else {
                        var allDay = "No";
                    }
                    var faculty_name = (event.faculty_name);
                    var course_name = (event.course_name);
                    var hall_name = (event.hall_name);
                    var tooltip = '<div class="tooltipevent"  style="width:auto;height:auto; display: none; padding: 9px 14px;-webkit-background-clip: padding-box;background-clip: padding-box;border-radius: 6px;-webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2); box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);border: 1px solid rgba(0, 0, 0, 0.2);border: 1px solid #ccc;color:black;background:' + back + ';position:absolute;z-index:10001;">' + '<center>' + event.title + '</center>' + 'All Day Event: ' + allDay + '<br>' + 'Start time : ' + start + '<br>' + 'End time : ' + end + '<br>' + 'Faculty:' + faculty_name + '<br>' + 'Course:' + course_name + '<br>' + 'Hall:' + hall_name + '</div>';


                    $("body").append(tooltip);
                    $(this).mouseover(function (e) {
                        $(this).css('z-index', 10000);
                        $('.tooltipevent').fadeIn('500');
                        $('.tooltipevent').fadeTo('10', 1.9);
                    }).mousemove(function (e) {
                        $('.tooltipevent').css('top', e.pageY + 10);
                        $('.tooltipevent').css('left', e.pageX + 20);
                    });
                },


                eventMouseout: function (calEvent, jsEvent) {
                    $(this).css('z-index', 8);
                    $('.tooltipevent').remove();
                },

                dayClick: function (date, jsEvent, view) {
                    if (view.name === "month") {
                        $('#calendar').fullCalendar('gotoDate', date);
                        $('#calendar').fullCalendar('changeView', 'agendaDay');
                    }
                },

                eventClick: function (event, jsEvent, view) {
                    var crsfToken = document.getElementsByName("_token")[0].value;

                    if (editable()) {
                        var con = confirm("Are you sure to delete this event");

                        if (con) {
                            $.ajax({
                                url: 'deleteEvents',
                                data: 'id=' + event.id,
                                headers: {
                                    "X-CSRF-TOKEN": crsfToken
                                },
                                type: "POST",
                                success: function () {
                                    $('#calendar').fullCalendar('removeEvents', event._id);
                                    console.log("Event Cancelled");
                                }
                            });
                        } else {
                            console.log("Cancelled");
                        }
                    }

                },


            });

            /* ADDING THE PANEL EVENTS | AGREGANDO EVENTOS AL PANEL */
            var currColor = "#3c8dbc"; //Red by default
            //Color chooser button
            var colorChooser = $("#color-chooser-btn");
            $("#color-chooser > li > a").click(function (e) {
                e.preventDefault();
                //Save color
                currColor = $(this).css("color");
                //Add color effect to button
                $('#add-new-event').css({"background-color": currColor, "border-color": currColor});
            });
            $("#add-new-event").click(function (e) {
                e.preventDefault();
                //Get value and make sure it is not null
                var val = $("#new-event").val();
                if (val.length == 0) {
                    return;
                }

                //Create events
                var event = $("<li />");
                event.css({
                    "background-color": currColor,
                    "border-color": currColor,
                    "color": "#fff"
                }).addClass("external-event");
                event.html(val);
                $('#external-events').prepend(event);

                //Add draggable funtionality
                ini_events(event);

                //Remove event from text input
                $("#new-event").val("");
            });
        });
    </script>

@endsection
