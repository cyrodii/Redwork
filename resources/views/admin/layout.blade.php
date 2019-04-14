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
			<div id="app">
				@include('admin.top')
				@include('admin.nav')
				@yield('content')             
			</div>
			<!--footer-->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
							Copyright © 2019 <a href="#"><span style="color:#B33939">Red</span>Work</a>. All rights reserved.
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
		<script src="/admin/js/sweet-alert.js"></script>
		<script src="/admin/plugins/sweet-alert/sweetalert.min.js"></script>
		<!-- Custom Js-->
		<script src="/admin/js/custom.js"></script>
		<script src="/js/app.js"></script>
	</body>
</html>