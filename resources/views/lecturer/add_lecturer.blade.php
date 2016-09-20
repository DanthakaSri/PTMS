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
    <div class="col-sm-5 text-right hidden-xs">
        <ol class="breadcrumb push-10-t">
            <li>User Management</li>
            <li>Lecturer</li>
            <li><a class="link-effect" href="{{ url('/lecturer/create') }}">Add Lecturer</a></li>
        </ol>
    </div>
    @endsection


@section('content')

            <!-- Mega Form -->
    <h2 class="content-heading">Lecturer</h2>
    <div class="block block-bordered">
        <div class="block-header bg-gray-lighter">
            <ul class="block-options">
                <li>
                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                </li>
                <li>
                    <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                </li>
            </ul>
            <h3 class="block-title">Lecturer Details</h3>
        </div>
        <div class="block-content">
            <form class="form-horizontal push-10-t push-10" action="base_forms_premade.html" method="post" onsubmit="return false;">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="mega-firstname">Firstname</label>
                                <input class="form-control input-lg" type="text" id="mega-firstname" name="mega-firstname" placeholder="Enter your firstname..">
                            </div>
                            <div class="col-xs-6">
                                <label for="mega-lastname">Lastname</label>
                                <input class="form-control input-lg" type="text" id="mega-lastname" name="mega-lastname" placeholder="Enter your lastname..">
                            </div>
                        </div>
                    </div>
                    {{--<div class="col-sm-5">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="mega-lastname">Username</label>
                                <input class="form-control input-lg" type="text" id="mega-username" name="mega-username" placeholder="Enter your username..">
                            </div>
                        </div>
                    </div>--}}
                </div>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="mega-bio">Bio</label>
                                <textarea class="form-control input-lg" id="mega-bio" name="mega-bio" rows="22" placeholder="Enter a few details about yourself.."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="mega-city">Where do you live?</label>
                                <input class="form-control input-lg" type="text" id="mega-city" name="mega-city" placeholder="Enter your location..">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="mega-skills">Skills</label>
                                <select class="form-control" id="mega-skills" name="mega-skills" size="7" multiple>
                                    <option value="1">HTML</option>
                                    <option value="2">CSS</option>
                                    <option value="3">JavaScript</option>
                                    <option value="4">PHP</option>
                                    <option value="5">Ruby</option>
                                    <option value="6">Photoshop</option>
                                    <option value="7">Illustrator</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="mega-age">Age</label>
                                <input class="form-control input-lg" type="text" id="mega-age" name="mega-age" placeholder="Enter your age..">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12">Gender</label>
                            <div class="col-xs-12">
                                <label class="css-input css-radio css-radio-warning push-10-r">
                                    <input type="radio" name="mega-gender-group"><span></span> Female
                                </label>
                                <label class="css-input css-radio css-radio-warning">
                                    <input type="radio" name="mega-gender-group"><span></span> Male
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <button class="btn btn-warning" type="submit"><i class="fa fa-check push-5-r"></i> Complete Profile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END Mega Form -->

@endsection


@section('footer')
@endsection