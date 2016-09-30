@extends('tmsApp')

@section('header')
@endsection

@section('title')
    <div class="col-sm-7">
        <h1 class="page-heading">
            Subject
            <small>Add Subject</small>
        </h1>
    </div>
    <div class="col-sm-5 text-right hidden-md">
        <ol class="breadcrumb push-10-t">
            <li>Manage Course</li>
            <li>Subject</li>
            <li><a class="link-effect" href="#">Add Subject</a></li>
        </ol>
    </div>
    @endsection


    @section('content')

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
                <h3 class="block-title">Subject Details</h3>
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

                <form class="form-horizontal push-5-t" action="{{ url('/subject') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label class="col-md-12" for="contact1-email">Course Name</label>
                        <div class="col-md-12">
                            <input class="form-control" type="text" id="contact1-email" name="name"
                                   value="{{ $course->name }}" placeholder="Enter Subject First Name" disabled>
                            <input type="hidden" value="{{ $course->id }}" name="course_id">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="contact1-firstname">Subject ID</label>
                            <input class="form-control" type="text" id="contact1-firstname" name="subject_id"
                                   placeholder="Enter Subject ID" value="{{ old('subject_id') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12" for="contact1-email">Subject Name</label>
                        <div class="col-md-12">
                            <input class="form-control" type="text" id="contact1-email" name="name"
                                   value="{{ old('name') }}" placeholder="Enter Subject Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12" for="contact1-email">Subject Hours</label>
                        <div class="col-md-12">
                            <input class="form-control" type="number" id="contact1-email" name="hours"
                                   value="{{ old('hours') }}" placeholder="Enter Subject Hours">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button class="btn btn-sm btn-success" type="submit"><i class="fa fa-plus push-5-r"></i> Add
                                Subject
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Bootstrap Contact -->
    </div>
@endsection


@section('footer')
@endsection