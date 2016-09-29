<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-focus"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>NSBM TMS | Dashboard</title>

    <!-- Stylesheets -->
    <!-- Web fonts -->
    <link rel="stylesheet"
          href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

    <!-- OneUI CSS framework -->
    <link rel="stylesheet" id="css-main" href="{{asset('/css/oneui.css')}}">

    @section('header')

    @show

            <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>

<div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">

    <!-- Sidebar -->
    <nav id="sidebar">
        <!-- Sidebar Scroll Container -->
        <div id="sidebar-scroll">
            <!-- Sidebar Content -->
            <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
            <div class="sidebar-content">
                <!-- Side Header -->
                <div class="side-header side-content bg-white-op">
                    <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                    <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button"
                            data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times"></i>
                    </button>
                    <a class="h5 text-white" href="index.html">
                        <i class="fa fa-circle-o-notch text-primary"></i> <span class="h4 font-w600 sidebar-mini-hide">ne</span>
                    </a>
                </div>
                <!-- END Side Header -->

                <!-- Side Content -->
                <div class="side-content">
                    <ul class="nav-main">
                        <li>
                            <a href="{{ url('/home') }}"><i class="si si-speedometer"></i><span
                                        class="sidebar-mini-hide">Dashboard</span></a>
                        </li>
                        <li class="nav-main-heading"><span class="sidebar-mini-hide">User Management</span></li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i
                                        class="si si-graduation"></i><span
                                        class="sidebar-mini-hide">Lecturer</span></a>
                            <ul>
                                <li>
                                    <a href="{{ url('/lecturer/') }}">Manage Lecturer</a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-main-heading"><span class="sidebar-mini-hide">Resource Management</span></li>

                        <li @if(Request::is('/hall/')){{'class=open'}} @endif >
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-home"></i><span
                                            class="sidebar-mini-hide">Hall</span></a>
                                <ul>
                                    <li>
                                        <a @if(Request::is('/hall/')){{'class=active'}} @endif href="{{ url('/hall/') }}">Manage
                                            Halls</a>
                                    </li>
                                </ul>
                            </li>
                        </li>

                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i
                                        class="si si-shield"></i><span class="sidebar-mini-hide">Faculty</span></a>
                            <ul>
                                <li>
                                    <a @if(Request::is('/faculty')){{'class=active'}} @endif href="{{ url('/faculty') }}">Manage
                                        Faculties</a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-main-heading"><span class="sidebar-mini-hide">Timetable Management</span></li>
                        <li class="open">
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span
                                        class="sidebar-mini-hide">Course Timetable</span></a>
                            <ul>
                                <li>
                                    <a class="active" href="{{ url('/course') }}">Manage Courses</a>
                                </li>
                                <li>
                                    <a class="active" href="base_pages_blank.html">Schedule timetable</a>
                                </li>
                                <li>
                                    <a class="active" href="base_pages_blank.html">Edit timetable</a>
                                </li>
                                <li>
                                    <a class="active" href="base_pages_blank.html">Delete timetable</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-fire"></i><span
                                        class="sidebar-mini-hide">Lecturer Timetable</span></a>
                            <ul>
                                <li>
                                    <a class="active" href="base_pages_blank.html">Schedule Timetable</a>
                                </li>
                                <li>
                                    <a class="active" href="base_pages_blank.html">Edit Timetable</a>
                                </li>
                                <li>
                                    <a class="active" href="base_pages_blank.html">Delete Timetable</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-heading"><span class="sidebar-mini-hide">Calendar Management</span></li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-fire"></i><span
                                        class="sidebar-mini-hide">Calendar</span></a>
                            <ul>
                                <li>
                                    <a class="active" href="{{ url('/holiday') }}">Manage Holidays & Events</a>
                                </li>

                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- END Side Content -->
            </div>
            <!-- Sidebar Content -->
        </div>
        <!-- END Sidebar Scroll Container -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="header-navbar" class="content-mini content-mini-full">
        <!-- Header Navigation Right -->
        <ul class="nav-header pull-right">
            <li>
                <div class="btn-group">
                    <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                        <img src="{{asset('/img/avatars/avatar13.jpg')}}" alt="Avatar">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-header">Profile</li>
                        {{-- <li>
                             <a tabindex="-1" href="base_pages_inbox.html">
                                 <i class="si si-envelope-open pull-right"></i>
                                 <span class="badge badge-primary pull-right">3</span>Inbox
                             </a>
                         </li>--}}
                        <li>
                            <a tabindex="-1" href="base_pages_profile.html">
                                <i class="si si-user pull-right"></i>Profile
                                {{--<span class="badge badge-success pull-right">1</span>--}}
                            </a>
                        </li>
                        {{--<li>
                            <a tabindex="-1" href="javascript:void(0)">
                                <i class="si si-settings pull-right"></i>Settings
                            </a>
                        </li>--}}
                        <li class="divider"></li>
                        {{-- <li class="dropdown-header">Actions</li>
                         <li>
                             <a tabindex="-1" href="base_pages_lock.html">
                                 <i class="si si-lock pull-right"></i>Lock Account
                             </a>
                         </li>--}}
                        <li>
                            <a tabindex="-1" href="{{ url('/auth/logout') }}">
                                <i class="si si-logout pull-right"></i>Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
        <!-- END Header Navigation Right -->

        <!-- Header Navigation Left -->
        <ul class="nav-header pull-left">
            <li class="hidden-md hidden-lg">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                    <i class="fa fa-navicon"></i>
                </button>
            </li>
            <li class="hidden-xs hidden-sm">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                    <i class="fa fa-ellipsis-v"></i>
                </button>
            </li>

            <li class="visible-xs">
                <!-- Toggle class helper (for .js-header-search below), functionality initialized in App() -> uiToggleClass() -->
                <button class="btn btn-default" data-toggle="class-toggle" data-target=".js-header-search"
                        data-class="header-search-xs-visible" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </li>
            <li class="js-header-search header-search">
                <form class="form-horizontal" action="base_pages_search.html" method="post">
                    <div class="form-material form-material-primary input-group remove-margin-t remove-margin-b">
                        <input class="form-control" type="text" id="base-material-text" name="base-material-text"
                               placeholder="Search..">
                        <span class="input-group-addon"><i class="si si-magnifier"></i></span>
                    </div>
                </form>
            </li>
        </ul>
        <!-- END Header Navigation Left -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Header -->
        <div class="content bg-gray-lighter">
            <div class="row items-push">
                @section('title')

                @show
            </div>
        </div>
        <!-- END Page Header -->

        <!-- Page Content -->
        <div class="content">


            @yield('content')


        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
        <div class="pull-right">
            Crafted with <i class="fa fa-heart text-city"></i> by <a class="font-w600" href="http://goo.gl/vNS3I"
                                                                     target="_blank">DanthakaSri</a>
        </div>
        <div class="pull-left">
            <a class="font-w600" href="javascript:void(0)" target="_blank">NSBM</a> &copy; <span
                    class="js-year-copy"></span>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->
<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<script src="{{ asset('/js/core/jquery.min.js')  }}"></script>
<script src="{{ asset('/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('/js/core/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('/js/core/jquery.scrollLock.min.js') }}"></script>
<script src="{{ asset('/js/core/jquery.appear.min.js') }}"></script>
<script src="{{ asset('/js/core/jquery.countTo.min.js') }}"></script>
<script src="{{ asset('/js/core/jquery.placeholder.min.js') }}"></script>
<script src="{{ asset('/js/core/js.cookie.min.js') }}"></script>
<script src="{{ asset('/js/app.js') }}"></script>

@section('footer')

@show
</body>
</html>
