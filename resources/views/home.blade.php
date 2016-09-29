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

    <div class="col-md-8 col-md-offset-2 col-lg-10 col-lg-offset-1">
        <!-- Calendar Container -->

        {!! $c->calendar() !!}
        {!! $c->script() !!}
        {{--<div class="js-calendar"></div>--}}
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
    {{--<script src="{{ asset('/js/pages/base_comp_calendar.js') }}"></script>--}}

@endsection
