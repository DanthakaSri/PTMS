@extends('tmsApp')

@section('header')
@endsection

@section('title')
    <div class="col-sm-7">
        <h1 class="page-heading">
            Faculty
            <small>Faculty</small>
        </h1>
    </div>
    <div class="col-sm-5 text-right hidden-md">
        <ol class="breadcrumb push-10-t">
            <li>Resource Management</li>
            {{--<li>Faculty</li>--}}
            <li><a class="link-effect" href="{{ url('/faculty/') }}">Faculty</a></li>
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
                        <a href="{{ url('/faculty/create') }}" type="button" data-toggle="tooltip"
                                title="Add new faculty"><i class="si si-plus"></i></a>
                    </li>
                </ul>
                <h3 class="block-title">Faculty Details</h3>
            </div>
            <div class="block-content">
                <table class="table table-hover table-borderless table-header-bg">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 50px;">Faculty#</th>
                        <th>Faculty Name</th>
                        <th class="text-center" style="width: 100px;">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($faculties))

                        @foreach($faculties as $faculty)
                            <tr>
                                <td class="text-center">{{ $faculty->faculty_id }}</td>
                                <td>{{ $faculty->name }}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a class="btn btn-xs btn-default" href="{{ url('/faculty/'.$faculty->id.'/edit') }}"  data-toggle="tooltip"
                                           title="Edit Hall"><i class="fa fa-pencil"></i></a>
                                        <a class="btn btn-xs btn-default" href="{{ url('/faculty/'.$faculty->id) }}"  data-toggle="tooltip"
                                           title="Remove Hall"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <p>No Faculty records found</p>
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