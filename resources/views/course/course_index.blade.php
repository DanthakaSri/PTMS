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
                        <a href="{{ url('/course/create') }}" type="button" data-toggle="tooltip"
                           title="Add new course"><i class="si si-plus"></i> Add New course</a>
                    </li>
                </ul>
                <h3 class="block-title">course Details</h3>
            </div>
            <div class="block-content">
                <table class="table table-hover table-borderless table-header-bg">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 50px;">Course#</th>
                        <th>Course Name</th>
                        <th>Faculty</th>
                        <th class="text-center" style="width: 100px;">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($courses))

                        @foreach($courses as $course)
                            <tr>
                                <td class="text-center">{{ $course->course_id }}</td>
                                <td>{{ $course->name }}</td>
                                <td>{{ $course->faculty->name }}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a class="btn btn-xs btn-default"
                                           href="{{ url('/course/'.$course->id.'/edit') }}" data-toggle="tooltip"
                                           title="Edit Courses"><i class="fa fa-pencil"></i></a>
                                        <a class="btn btn-xs btn-default" href="{{ url('/course/'.$course->id) }}"
                                           data-toggle="tooltip"
                                           title="Remove Courses"><i class="fa fa-times"></i></a>
                                        <a class="btn btn-xs btn-default" href="{{ url('/subject/create') }}"
                                           data-toggle="tooltip"
                                           title="Add Subject"><i class="fa fa-plus"></i></a>
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