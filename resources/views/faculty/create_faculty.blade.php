@extends('tmsApp')

@section('header')
@endsection

@section('title')
    <div class="col-sm-7">
        <h1 class="page-heading">
            Faculty
            <small>Add Faculty</small>
        </h1>
    </div>
    <div class="col-sm-5 text-right hidden-md">
        <ol class="breadcrumb push-10-t">
            <li>Resource Management</li>
            <li>Faculty</li>
            <li><a class="link-effect" href="{{ url('/faculty/create') }}">Add Faculty</a></li>
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
                <h3 class="block-title">Faculty Details</h3>
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

                <form class="form-horizontal push-5-t" action="{{ url('/faculty') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="contact1-firstname">Faculty ID</label>
                            <input class="form-control" type="text" id="contact1-firstname" name="faculty_id"
                                   placeholder="Enter Faculty ID" value="{{ old('faculty_id') }}">
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="col-md-12" for="contact1-email">Faculty Name</label>
                        <div class="col-md-12">
                            <input class="form-control" type="text" id="contact1-email" name="name"
                                   value="{{ old('name') }}" placeholder="Enter Faculty Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button class="btn btn-sm btn-success" type="submit"><i class="fa fa-plus push-5-r"></i> Add
                                Faculty
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