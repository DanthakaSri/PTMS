<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<title>NSBM TMS | Register</title>

	<!-- Stylesheets -->
	<!-- Web fonts -->
	<link rel="stylesheet"
		  href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

	<!-- OneUI CSS framework -->
	<link rel="stylesheet" id="css-main" href="{{ asset('/css/oneui.css') }}">

	<!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
	<!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
	<!-- END Stylesheets -->
<body>

<div id="page-container" >


	<!-- Header -->
	<header id="header-navbar" class="content-mini content-mini-full hidden-md hidden-lg">
		<div class="content-boxed">
			<!-- Header Navigation Right -->
			<ul class="nav-header pull-right">
				<li>
					<!-- Themes functionality initialized in App() -> uiHandleTheme() -->
					<div class="btn-group">
						<button class="btn btn-link text-white dropdown-toggle" data-toggle="dropdown" type="button">
							<i class="si si-drop"></i>
						</button>
						<ul class="dropdown-menu dropdown-menu-right sidebar-mini-hide font-s13">
							<li>
								<a data-toggle="theme" data-theme="default" tabindex="-1" href="javascript:void(0)">
									<i class="fa fa-circle text-default pull-right"></i> <span class="font-w600">Default</span>
								</a>
							</li>
							<li>
								<a data-toggle="theme" data-theme="assets/css/themes/amethyst.min.css" tabindex="-1" href="javascript:void(0)">
									<i class="fa fa-circle text-amethyst pull-right"></i> <span class="font-w600">Amethyst</span>
								</a>
							</li>
							<li>
								<a data-toggle="theme" data-theme="assets/css/themes/city.min.css" tabindex="-1" href="javascript:void(0)">
									<i class="fa fa-circle text-city pull-right"></i> <span class="font-w600">City</span>
								</a>
							</li>
							<li>
								<a data-toggle="theme" data-theme="assets/css/themes/flat.min.css" tabindex="-1" href="javascript:void(0)">
									<i class="fa fa-circle text-flat pull-right"></i> <span class="font-w600">Flat</span>
								</a>
							</li>
							<li>
								<a data-toggle="theme" data-theme="assets/css/themes/modern.min.css" tabindex="-1" href="javascript:void(0)">
									<i class="fa fa-circle text-modern pull-right"></i> <span class="font-w600">Modern</span>
								</a>
							</li>
							<li>
								<a data-toggle="theme" data-theme="assets/css/themes/smooth.min.css" tabindex="-1" href="javascript:void(0)">
									<i class="fa fa-circle text-smooth pull-right"></i> <span class="font-w600">Smooth</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li>
					<!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
					<button class="btn btn-link text-white pull-right" type="button" data-toggle="layout" data-action="sidebar_open">
						<i class="fa fa-navicon"></i>
					</button>
				</li>
			</ul>
			<!-- END Header Navigation Right -->

			<!-- Header Navigation Left -->
			<ul class="nav-header pull-left">
				<li class="header-content">
					<a class="h5" href="frontend_home.html">
						<i class="fa fa-circle-o-notch text-primary"></i> <span class="h4 font-w600 text-white">ne</span>
					</a>
				</li>
			</ul>
			<!-- END Header Navigation Left -->
		</div>
	</header>
	<!-- END Header -->

	<!-- Main Container -->
	<main id="main-container">
		<!-- Hero Content -->
		<div class="bg-success">
			<section class="content content-full content-boxed overflow-hidden">
				<!-- Section Content -->
				<div class="push-100-t push-50 text-center">
					<h1 class="h2 text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Sign up for a new account.</h1>
					<h2 class="h5 text-white-op visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Unlimited ideas. Unlimited power. Unlimited joy. Unlimited opportunities.</h2>
				</div>
				{{--<div class="row visibility-hidden" data-toggle="appear" data-class="animated fadeInUp">
					<div class="col-sm-8 col-sm-offset-2">
						<img class="img-responsive pull-b" src="assets/img/various/promo2.jpg" alt="">
					</div>
				</div>--}}
				<!-- END Section Content -->
			</section>
		</div>
		<!-- END Hero Content -->

		<!-- Content -->
		<div class="bg-white">
			<section class="content content-boxed">
				<!-- Section Content -->
				<div class="row items-push push-50-t push-30">
					<div class="col-md-6 col-md-offset-3">

						@if (count($errors) > 0)
							<div class="alert alert-danger">
								<strong>Whoops!</strong> There were some problems with your input.<br><br>
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif

						<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="form-group">
								<div class="col-xs-12">
									<div class="form-material form-material-success">
										<input class="form-control" type="text" id="frontend-signup-username"  name="name" value="{{ old('name') }}" placeholder="Please enter a username">
										<label for="frontend-signup-username">Username</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-xs-12">
									<div class="form-material form-material-success">
										<input class="form-control" type="email" id="frontend-signup-email" name="email" value="{{ old('email') }}" placeholder="Please provide your email">
										<label for="frontend-signup-email">Email</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-xs-12">
									<div class="form-material form-material-success">
										<input class="form-control" type="password" id="frontend-signup-password" name="password" placeholder="Choose a strong password..">
										<label for="frontend-signup-password">Password</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-xs-12">
									<div class="form-material form-material-success">
										<input class="form-control" type="password" id="frontend-signup-password2" name="password_confirmation" placeholder="..and confirm it">
										<label for="frontend-signup-password2">Confirm Password</label>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-6 col-sm-offset-3">
									<button class="btn btn-block btn-success" type="submit"><i class="fa fa-plus pull-right"></i> Sign Up</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- END Section Content -->
			</section>
		</div>
		<!-- END Content -->

		<!-- Login -->
		<div class="bg-gray-lighter">
			<section class="content content-full content-boxed">
				<!-- Section Content -->
				<div class="push-20-t push-20 text-center">
					<h3 class="h4 push-20 visibility-hidden" data-toggle="appear">Do you already have an account?</h3>
					<a class="btn btn-rounded btn-noborder btn-lg btn-success visibility-hidden" data-toggle="appear" data-class="animated bounceIn" href="{{ url('/auth/login') }}">Log In</a>
				</div>
				<!-- END Section Content -->
			</section>
		</div>
		<!-- END Login -->


	</main>
	<!-- END Main Container -->

</div>
<!-- END Page Container -->

<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<script src="{{asset('/js/core/jquery.min.js')}}"></script>
<script src="{{ asset('/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('/js/core/jquery.slimscroll.min.js') }}"></script>
<script src="{{asset('/js/core/jquery.scrollLock.min.js')}}"></script>
<script src="{{ asset('/js/core/jquery.appear.min.js') }}"></script>
<script src="{{asset('/js/core/jquery.countTo.min.js')}}"></script>
<script src="{{ asset('/js/core/jquery.placeholder.min.js') }}"></script>
<script src="{{ asset('/js/core/js.cookie.min.js') }}"></script>
<script src="{{asset('/js/app.js')}}"></script>

<!-- Page JS Code -->
<script>
	$(function () {
		// Init page helpers (Appear plugin)
		App.initHelpers('appear');
	});
</script>
</body>
</html>