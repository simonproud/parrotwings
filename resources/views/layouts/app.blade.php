<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Parrot Wings</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="../assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="../assets/plugins/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
	<link href="../assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="../assets/css/apple/style.min.css" rel="stylesheet" />
	<link href="../assets/css/apple/style-responsive.min.css" rel="stylesheet" />
	<link href="../assets/css/apple/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="/assets/plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
    <link href="/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<a href="/" class="navbar-brand"><span class="navbar-logo"></span> <b>Parrot</b>Wings</a>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- end navbar-header -->

			<!-- begin header-nav -->
			<ul class="navbar-nav navbar-right">
                <li >
					<a href="/wallet"><span class="d-none d-md-inline">{{money_format('%.2n',$wallet['wallet'])}} PW</span></a>
				</li>

				<li class=" ">
					<a href="javascript:;">
						{{Auth::user()->name}}
					</a>
				</li>
				<li><a href="/logout" class="dropdown-item">Log Out</a></li>
			</ul>
			<!-- end header navigation right -->
		</div>
		<!-- end #header -->

		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					 @guest
					 @else
					<li class="nav-profile">
						<a href="#" data-toggle="nav-profile">
							<div class="cover with-shadow"></div>
							<div class="info">
								<b class=" pull-right"></b>
								{{Auth::user()->name}}
								<small>{{money_format('%.2n',$wallet['wallet'])}} PW</small>
							</div>
						</a>
					</li>
					 @endguest
					<!--<li>
						<ul class="nav nav-profile">
                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="#"><i class="fa fa-pencil-alt"></i> Send Feedback</a></li>
                            <li><a href="#"><i class="fa fa-question-circle"></i> Helps</a></li>
                        </ul>
					</li>-->
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Меню</li>
					<li class="has-sub active">
						<a href="#">
					        <b class="caret"></b>
						    <i class="fa fa-th-large"></i>
						    <span>Кошелёк</span>
					    </a>
						<ul class="sub-menu">
						    <li><a href="/wallet/moneyto">Перевести</a></li>
						    <li><a href="/wallet/transactions">Список транзакций</a></li>
						</ul>
					</li>

			        <!-- begin sidebar minify button -->
					<li><a href="#" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->

		<!-- begin #content -->
		<div id="content" class="content">

			<!-- begin page-header -->
			<h1 class="page-header">Dashboard <small>header small text goes here...</small></h1>
			<!-- end page-header -->

			 @yield('content')
		</div>
		<!-- end #content -->



		<!-- begin scroll to top btn -->
		<a href="#" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
<script src="/assets/js/theme/apple.min.js"></script>

	<script src="/assets/js/apps.js"></script>
	<script src="/js/app.js"></script>
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="/assets/plugins/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="../assets/crossbrowserjs/html5shiv.js"></script>
		<script src="../assets/crossbrowserjs/respond.min.js"></script>
		<script src="../assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/assets/plugins/js-cookie/js.cookie.js"></script>


	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="/assets/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="/assets/plugins/flot/jquery.flot.min.js"></script>
	<script src="/assets/plugins/flot/jquery.flot.time.min.js"></script>
	<script src="/assets/plugins/flot/jquery.flot.resize.min.js"></script>
	<script src="/assets/plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="/assets/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="/assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
	<script src="/assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
			Dashboard.init();
		});
	</script>
</body>
</html>
