@extends('tmsApp')

@section('header')
        <!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="{{ asset('/js/plugins/fullcalendar/fullcalendar.min.css') }}">
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

        <!-- Calendar and Events functionality (initialized in js/pages/base_comp_calendar.js), for more info and examples you can check out http://fullcalendar.io/ -->
<div class="row items-push">
    <div class="col-md-4 col-md-push-8 col-lg-2 col-lg-push-10">
        <!-- Add Event Form -->
        <form class="js-form-add-event push-30" action="base_comp_calendar.html" method="post">
            <div class="input-group">
                <input class="js-add-event form-control" type="text" placeholder="Add event..">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="fa fa-plus"></i></button>
                </div>
            </div>
        </form>
        <!-- END Add Event Form -->

        <!-- Event List -->
        <ul class="js-events list list-events">
            <li style="background-color: #fac5a5;">Work</li>
            <li style="background-color: #b5d0eb;">Relax</li>
            <li style="background-color: #faeab9;">Gym</li>
            <li style="background-color: #fac5a5;">Secret Project</li>
            <li style="background-color: #c8e2b3;">Cinema</li>
            <li style="background-color: #b6d1ec;">Biking</li>
            <li style="background-color: #c8e2b3;">Trip</li>
            <li style="background-color: #faeab9;">Swimming</li>
        </ul>
        <div class="text-center text-muted">
            <small><em><i class="fa fa-arrows"></i> Drag and drop events on the calendar</em></small>
        </div>
        <!-- END Event List -->
    </div>
    <div class="col-md-8 col-md-pull-4 col-lg-10 col-lg-pull-2">
        <!-- Calendar Container -->
        <div class="js-calendar"></div>
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
<script src="{{ asset('/js/pages/base_comp_calendar.js') }}"></script>
@endsection
