<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="msapplication-TileColor" content="#0061da">
		<meta name="theme-color" content="#1643a3">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<link rel="icon" href="/admin/images/favicon.svg" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="/admin/images/favicon.svg" />

		<!-- Title -->
		<title>Redwork - @yield('title')</title>
		<link rel="stylesheet" href="/admin/fonts/fonts/font-awesome.min.css">

		<!-- Font Family-->
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

		<!-- Dashboard Css -->

		<link href="/admin/css/dashboard.css" rel="stylesheet" />

		<!-- c3.js Charts Plugin -->
		<link href="/admin/plugins/charts-c3/c3-chart.css" rel="stylesheet" />

		<!-- Morris.js Charts Plugin -->
		<link href="/admin/plugins/morris/morris.css" rel="stylesheet" />

		<!-- Custom scroll bar css-->
		<link href="/admin/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

		<!---Font icons-->
		<link href="/admin/plugins/iconfonts/plugin.css" rel="stylesheet" />
	</head>
	<body class="">
		<div id="global-loader" ></div>
		<div class="page" >
			<div class="page-main">
				<div class="header py-1">
					<div class="container">
						<div class="d-flex">
							<a class="header-brand" href="{{ route('dashboard') }}">
								<img src="/admin/images/brand/logo.png" class="header-brand-img" alt="Viboon logo">
							</a>
							<div class=" ">
								<form class="input-icon mt-2 ">
									<div class="input-icon-addon">
										<i class="fe fe-search"></i>
									</div>
									<input type="search" class="form-control header-search" placeholder="Search" tabindex="1">
								</form>
							</div>
							<div class="d-flex order-lg-2 ml-auto">
								<div class="dropdown d-none d-md-flex mt-1" >
									<a  class="nav-link icon full-screen-link">
										<i class="fe fe-maximize floating"  id="fullscreen-button"></i>
									</a>
								</div>						
								<div class="dropdown d-none d-md-flex mt-1">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fe fe-bell floating"></i>
										<span class="nav-unread bg-danger"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg">
												<i class="fa fa-thumbs-o-up"></i>
											</div>
											<div>
												<strong>Someone likes our posts.</strong>
												<div class="small text-muted">3 hours ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg">
												<i class="fa fa-commenting-o"></i>
											</div>
											<div>
												<strong> 3 New Comments</strong>
												<div class="small text-muted">5  hour ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg">
												<i class="fa fa-cogs"></i>
											</div>
											<div>
												<strong> Server Rebooted.</strong>
												<div class="small text-muted">45 mintues ago</div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">View all Notification</a>
									</div>
								</div>
								<div class="dropdown d-none d-md-flex mt-1">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fe fe-mail floating"></i>
										<span class=" nav-unread badge badge-warning  badge-pill">2</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a href="#" class="dropdown-item text-center">2 New Messages</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item d-flex pb-3">
											<span class="avatar brround mr-3 align-self-center" style="background-image: url(/admin/images/faces/male/41.jpg)"></span>
											<div>
												<strong>Madeleine</strong> Hey! there I' am available....
												<div class="small text-muted">3 hours ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<span class="avatar brround mr-3 align-self-center" style="background-image: url(/admin/images/faces/female/1.jpg)"></span>
											<div>
												<strong>Anthony</strong> New product Launching...
												<div class="small text-muted">5  hour ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<span class="avatar brround mr-3 align-self-center" style="background-image: url(/admin/images/faces/female/18.jpg)"></span>
											<div>
												<strong>Olivia</strong> New Schedule Realease......
												<div class="small text-muted">45 mintues ago</div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">See all Messages</a>
									</div>
								</div>
								<div class="dropdown d-none d-md-flex mt-1">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fe fe-grid floating"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<ul class="drop-icon-wrap p-1">
											<li>
												<a href="email.html" class="drop-icon-item">
													<i class="fe fe-mail text-dark"></i>
													<span class="block"> E-mail</span>
												</a>
											</li>
											<li>
												<a href="calendar2.html" class="drop-icon-item">
													<i class="fe fe-calendar text-dark"></i>
													<span class="block">calendar</span>
												</a>
											</li>
											<li>
												<a href="maps.html" class="drop-icon-item">
													<i class="fe fe-map-pin text-dark"></i>
													<span class="block">map</span>
												</a>
											</li>
											<li>
												<a href="cart.html" class="drop-icon-item">
													<i class="fe fe-shopping-cart text-dark"></i>
													<span class="block">Cart</span>
												</a>
											</li>
											<li>
												<a href="chat.html" class="drop-icon-item">
													<i class="fe fe-message-square text-dark"></i>
													<span class="block">chat</span>
												</a>
											</li>
											<li>
												<a href="profile.html" class="drop-icon-item">
													<i class="fe fe-phone-outgoing text-dark"></i>
													<span class="block">contact</span>
												</a>
											</li>
										</ul>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">View all</a>
									</div>
								</div>
								<div class="dropdown mt-1">
									<a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
										<span class="avatar avatar-md brround" style="background-image: url(/admin/images/faces/female/25.jpg)"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
										<div class="text-center">
											<a href="#" class="dropdown-item text-center font-weight-sembold user">Jessica Allan</a>
											<span class="text-center user-semi-title text-dark">web designer</span>
											<div class="dropdown-divider"></div>
										</div>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-account-outline "></i> Profile
										</a>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon  mdi mdi-settings"></i> Settings
										</a>
										<a class="dropdown-item" href="#">
											<span class="float-right"><span class="badge badge-primary">6</span></span>
											<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
										</a>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
										</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="/">
											<i class="dropdown-icon mdi mdi-compass-outline"></i> Back to Redwork
										</a>
										<a class="dropdown-item" href="{{ route('logout') }} href="{{ route('logout') }}"
										onclick="event.preventDefault();
													  document.getElementById('logout-form').submit();">
											<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												@csrf
											</form>
										</a>
									</div>
								</div>
							</div>
							<a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
							<span class="header-toggler-icon"></span>
							</a>
						</div>
					</div>
                </div>
                @include('admin.nav')
                    

                @yield('content')             

			<!--footer-->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
							Copyright © 2018 <a href="#">Viboon</a>. Designed by <a href="#">Spruko</a> All rights reserved.
						</div>
					</div>
				</div>
			</footer>
			<!-- End Footer-->
		</div>

		<!-- Back to top -->
		<a href="#top" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>

		<!-- Dashboard Core -->
		<script src="/admin/js/vendors/jquery-3.2.1.min.js"></script>
		<script src="/admin/js/vendors/bootstrap.bundle.min.js"></script>
		<script src="/admin/js/vendors/jquery.sparkline.min.js"></script>
		<script src="/admin/js/vendors/selectize.min.js"></script>
		<script src="/admin/js/vendors/jquery.tablesorter.min.js"></script>
		<script src="/admin/js/vendors/circle-progress.min.js"></script>
		<script src="/admin/plugins/rating/jquery.rating-stars.js"></script>

		<script src="/admin/plugins/echarts/echarts.js"></script>
		<script src="/admin/js/index1.js"></script>
		<!--Morris.js Charts Plugin -->
		<script src="/admin/plugins/am-chart/amcharts.js"></script>
		<script src="/admin/plugins/am-chart/serial.js"></script>

		<!-- Custom scroll bar Js-->
		<script src="/admin/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- Custom Js-->
		<script src="/admin/js/custom.js"></script>

	</body>
</html>