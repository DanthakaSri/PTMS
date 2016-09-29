@extends('tmsApp')

@section('header')
@endsection

@section('title')
    <div class="col-sm-7">
        <h1 class="page-heading">
            Lecturer
            <small> Manage Lecturer</small>
        </h1>
    </div>
    <div class="col-sm-5 text-right hidden-md">
        <ol class="breadcrumb push-10-t">
            <li>User Management</li>
            <li>Lecturer</li>
            <li><a class="link-effect" href="{{ url('/lecturer/') }}">Manage Lecturer</a></li>
        </ol>
    </div>
@endsection


@section('content')

    <div class="col-lg-8 col-lg-offset-2">
        <!-- Header BG Table -->
        <div class="block">
            <div class="block-header">
                <ul class="block-options">
                    <li >
                        <a href="{{ url('/lecturer/create') }}" data-toggle="tooltip"
                           title="Add new lecturer"><i class="si si-plus"></i> Add New Lecturer</a>
                    </li>
                </ul>
                <h3 class="block-title">Lecturer Details</h3>
            </div>
            <div class="block-content">
                <table class="table table-hover table-borderless table-header-bg">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 50px;">Lecturer#</th>
                        <th>Lecturer  Name</th>
                        <th>Faculty</th>
                        <th class="hidden-xs" style="width: 15%;">Type</th>
                        <th class="text-center" style="width: 100px;">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($lecturers))

                        @foreach($lecturers as $lecturer)
                            <tr>
                                <td class="text-center">{{ $lecturer->lecturer_id }}</td>
                                <td>{{ $lecturer->last_name }},{{ $lecturer->first_name }}</td>
                                <td>{{ $lecturer->faculty->name }}</td>
                                <td class="hidden-xs">
                                    @if($lecturer->type == 0)
                                        <span class="label label-primary">Internal Lecturer</span>
                                    @else
                                        <span class="label label-info">Visiting Lecturer</span>

                                    @endif
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a class="btn btn-xs btn-default" href="{{ url('/lecturer/'.$lecturer->id.'/edit') }}"  data-toggle="tooltip"
                                           title="Edit Lecturer"><i class="fa fa-pencil"></i></a>
                                        <a class="btn btn-xs btn-default" href="{{ url('/lecturer/'.$lecturer->id) }}"  data-toggle="tooltip"
                                           title="Remove Lecturer"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <p>No Lecturer records found</p>
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