@extends('tmsApp')

@section('header')
@endsection

@section('title')
    <div class="col-sm-7">
        <h1 class="page-heading">
            course
            <small>Manage course</small>
        </h1>
    </div>
    <div class="col-sm-5 text-right hidden-md">
        <ol class="breadcrumb push-10-t">
            <li>Resource Management</li>
            <li>course</li>
            <li><a class="link-effect" href="{{ url('/course/') }}">Manage course</a></li>
        </ol>
    </div>
@endsection


@section('content')
    <div class="col-lg-8 col-lg-offset-2">
        <!-- Header BG Table -->
        <div class="block">
            <div class="block-header">
                <ul class="block-options">
                    <li>
                        <a href="{{ url('/course/') }}" type="button" data-toggle="tooltip"
                           title="Add new course"><i class="si si-plus"></i> Add New subject</a>
                    </li>
                </ul>
                <h3 class="block-title">course Details</h3>
            </div>
            <div class="block-content">
                <table class="table table-hover table-borderless table-header-bg">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 50px;">Subject#</th>
                        <th>Subject Name</th>
                        <th>Course Name</th>
                        <th>Faculty</th>
                        <th>Hours</th>
                        <th class="text-center" style="width: 100px;">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($subjects))

                        @foreach($subjects as $subject)
                            <tr>
                                <td class="text-center">{{ $subject->course_id }}</td>
                                <td>{{ $subject->name }}</td>
                                <td>{{ $subject->course->name }}</td>
                                <td>{{ $subject->course->faculty->name }}</td>
                                <td>{{ $subject->hours}}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a class="btn btn-xs btn-default"
                                           href="{{ url('/course/'.$subject->id.'/edit') }}" data-toggle="tooltip"
                                           title="Edit Courses"><i class="fa fa-pencil"></i></a>
                                        <a class="btn btn-xs btn-default" href="{{ url('/course/'.$subject->id) }}"
                                           data-toggle="tooltip"
                                           title="Remove Courses"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <p>No course records found</p>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Header BG Table -->
    </div>
@endsection


@section('footer')
@endsection