@extends('tmsApp')

@section('content')

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-8 col-md-7">
				<div class="card">
					<div class="header">
						<h4 class="title">Timetable (this week)</h4>
					</div>
					<div class="content">
						<div class="list-group">
							<a href="#" class="list-group-item ">
								<h4 class="list-group-item-heading">List group item heading</h4>
								<p class="list-group-item-text">This faith has only been teleported by a united planet.</p>
							</a>
						</div>
						<div class="list-group">
							<a href="#" class="list-group-item ">
								<h4 class="list-group-item-heading">List group item heading</h4>
								<p class="list-group-item-text">You have to lure, and forget paradox by your wrestling.</p>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-5">
				<div class="card card-user">
					<div class="image">
						<img src="{{ asset('img/background.jpg') }}" alt="..."/>
					</div>
					<div class="content">
						<div class="author">
							<img class="avatar border-white" src="{{asset('img/faces/face-2.jpg')}}" alt="..."/>
							<h4 class="title">Chet Faker<br />
								{{--<a href="#"><small>@chetfaker</small></a>--}}
							</h4>
						</div>
						<div class="clearfix"><br></div>
						<ul class="list-unstyled">
							<li ><i class="fa fa-user"></i> BSC-UGC-MIS-15-17-021</li>
							<li ><i class="fa fa-university"></i> BSc.Management Information System</li>
							<li ><i class="fa fa-asterisk"></i> Year 4 (2013 -2016)</li>
						</ul>
					</div>
					<hr>

				</div>
				<div class="card">
					<div class="header">
						<h4 class="title">Team Members</h4>
					</div>
					<div class="content">
						<ul class="list-unstyled team-members">
							<li>
								<div class="row">
									<div class="col-xs-3">
										<div class="avatar">
											<img src="assets/img/faces/face-0.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
										</div>
									</div>
									<div class="col-xs-6">
										DJ Khaled
										<br />
										<span class="text-muted"><small>Offline</small></span>
									</div>

									<div class="col-xs-3 text-right">
										<btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-xs-3">
										<div class="avatar">
											<img src="assets/img/faces/face-1.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
										</div>
									</div>
									<div class="col-xs-6">
										Creative Tim
										<br />
										<span class="text-success"><small>Available</small></span>
									</div>

									<div class="col-xs-3 text-right">
										<btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-xs-3">
										<div class="avatar">
											<img src="assets/img/faces/face-3.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
										</div>
									</div>
									<div class="col-xs-6">
										Flume
										<br />
										<span class="text-danger"><small>Busy</small></span>
									</div>

									<div class="col-xs-3 text-right">
										<btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
