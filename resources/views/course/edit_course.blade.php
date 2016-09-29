@extends('tmsApp')

@section('header')
@endsection

@section('title')
    <div class="col-sm-7">
        <h1 class="page-heading">
            Course
            <small>Edit Course</small>
        </h1>
    </div>
    <div class="col-sm-5 text-right hidden-md">
        <ol class="breadcrumb push-10-t">
            <li>Resource Management</li>
            <li>Course</li>
            <li><a class="link-effect" href="{{ url('/course/') }}">Edit Course</a></li>
        </ol>
    </div>
    @endsection


    @section('content')

            <!-- Contact Forms -->
    <div class="col-lg-6 col-lg-offset-3">
        <!-- Bootstrap Contact -->
        <div class="block block-themed">
            <div class="block-header bg-info">
                <h3 class="block-title"> Edit Course Details</h3>
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
                {{--{{ url('/course/'.$course->id) }}--}}
                <form class="form-horizontal push-5-t" action="/course/{{ $course->id }}" method="PATCH">
                    {{--{!! Form::model($course,['method'=>'PATCH','action'=>['CourseController@update',$course->id]]) !!}--}}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="contact1-firstname">Course ID</label>
                            <input class="form-control" type="text" id="contact1-firstname" name="course_id"
                                   placeholder="Enter Course ID" value="{{ $course->course_id }}" disabled>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="contact1-firstname">Course Name</label>
                            <input class="form-control" type="text" id="contact1-firstname" name="name"
                                   placeholder="Enter Course Name" value="{{ $course->name }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="contact1-subject">Faculty</label>
                        <div class="col-md-12">
                            <select class="form-control" id="contact1-subject" name="faculty_id" size="1">
                                <option value="{{ $course->faculty_id }}" selected>{{ $course->faculty->name }}</option>
                                @foreach($faculties as $faculty)
                                    <option value="{{ $faculty->faculty_id }}">{{ $faculty->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <button class="btn btn-sm btn-success" type="submit"><i class="fa fa-plus push-5-r"></i>
                                Update
                                Course
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