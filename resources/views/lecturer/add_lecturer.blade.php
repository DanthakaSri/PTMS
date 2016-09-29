@extends('tmsApp')

@section('header')
@endsection

@section('title')
    <div class="col-sm-7">
        <h1 class="page-heading">
            Lecturer
            <small>Add Lecturer</small>
        </h1>
    </div>
    <div class="col-sm-5 text-right hidden-md">
        <ol class="breadcrumb push-10-t">
            <li>User Management</li>
            <li>Lecturer</li>
            <li><a class="link-effect" href="{{ url('/lecturer/create') }}">Add Lecturer</a></li>
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
                <h3 class="block-title">Lecturer Details</h3>
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

                <form class="form-horizontal push-5-t" action="{{ url('/lecturer') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="contact1-firstname">Lecturer ID</label>
                            <input class="form-control" type="text" id="contact1-firstname" name="lecturer_id"
                                   placeholder="Enter Lecturer ID" value="{{ old('lecturer_id') }}">
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="col-md-12" for="contact1-email">Lecturer First Name</label>
                        <div class="col-md-12">
                            <input class="form-control" type="text" id="contact1-email" name="first_name"
                                   value="{{ old('first_name') }}" placeholder="Enter Lecturer First Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="contact1-email">Lecturer Last Name</label>
                        <div class="col-md-12">
                            <input class="form-control" type="text" id="contact1-email" name="last_name"
                                   value="{{ old('last_name') }}" placeholder="Enter Lecturer Last Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12" for="contact1-subject">Faculty</label>
                        <div class="col-md-12">
                            <select class="form-control" id="contact1-subject" name="faculty_id" size="1">

                                @foreach($faculties as $faculty)
                                    <option value="{{ $faculty->faculty_id }}">{{ $faculty->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12" for="contact1-subject">Type</label>
                        <div class="col-md-12">
                            <select class="form-control" id="contact1-subject" name="type" size="1">
                                <option value="0">Internal Lecturer</option>
                                <option value="1">Visitiong Lecturer</option>

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button class="btn btn-sm btn-success" type="submit"><i class="fa fa-plus push-5-r"></i> Add
                                Lecturer
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