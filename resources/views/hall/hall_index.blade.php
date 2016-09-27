@extends('tmsApp')

@section('header')
@endsection

@section('title')
    <div class="col-sm-7">
        <h1 class="page-heading">
            Hall
            <small> Manage Hall</small>
        </h1>
    </div>
    <div class="col-sm-5 text-right hidden-md">
        <ol class="breadcrumb push-10-t">
            <li>Resource Management</li>
            <li>Hall</li>
            <li><a class="link-effect" href="{{ url('/hall/') }}">Manage Hall</a></li>
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
                        <a href="{{ url('/hall/create') }}" data-toggle="tooltip"
                           title="Add new hall"><i class="si si-plus"></i> Add New Hall</a>
                    </li>
                </ul>
                <h3 class="block-title">Hall Details</h3>
            </div>
            <div class="block-content">
                <table class="table table-hover table-borderless table-header-bg">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 50px;">Hall#</th>
                        <th>Hall Name</th>
                        <th>Faculty</th>
                        <th>Capacity</th>
                        <th class="hidden-xs" style="width: 15%;">Type</th>
                        <th class="text-center" style="width: 100px;">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($halls))

                            @foreach($halls as $hall)
                                <tr>
                                    <td class="text-center">{{ $hall->hall_id }}</td>
                                    <td>{{ $hall->name }}</td>
                                    <td>{{ $hall->faculty->name }}</td>
                                    <td>{{ $hall->capacity }}</td>
                                    <td class="hidden-xs">
                                        @if($hall->type == 0)
                                        <span class="label label-primary">Lecture Hall</span>
                                            @else
                                            <span class="label label-info">Auditorium</span>

                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a class="btn btn-xs btn-default" href="{{ url('/hall/'.$hall->id.'/edit') }}"  data-toggle="tooltip"
                                                    title="Edit Hall"><i class="fa fa-pencil"></i></a>
                                            <a class="btn btn-xs btn-default" href="{{ url('/hall/'.$hall->id) }}"  data-toggle="tooltip"
                                                    title="Remove Hall"><i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                    @else
                        <p>No Hall records found</p>
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