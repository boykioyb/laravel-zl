<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminLTE 2 | @yield('title')</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="shortcut icon" type="image/vnd.microsoft.icon"  href="{{ asset('4edu/img/favicon.ico') }}">
	<link rel="stylesheet" href="{{ asset('4edu/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('4edu/css/4edu/register.css') }}">
	<link rel="stylesheet" href="{{ asset('4edu/dist/css/AdminLTE.min.css') }}">
	<link rel="stylesheet" href="{{ asset('4edu/css/4edu/style.css') }}">
	<link rel="stylesheet" href="{{ asset('4edu/css/4edu/update.css') }}">
	<link rel="stylesheet" href="{{ asset('4edu/plugins/iCheck/flat/blue.css') }}">
	<!-- <link rel="stylesheet" href="{{ asset('4edu/plugins/morris/morris.css') }}"> -->
	<!-- <link rel="stylesheet" href="{{ asset('4edu/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}"> -->
	<!-- <link rel="stylesheet" href="{{ asset('4edu/plugins/datepicker/datepicker3.css') }}"> -->
	<!-- <link rel="stylesheet" href="{{ asset('4edu/plugins/daterangepicker/daterangepicker.css') }}"> -->
	<link rel="stylesheet" href="{{ asset('4edu/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
	<link rel="stylesheet" href="{{ asset('4edu/dist/css/skins/_all-skins.min.css') }}">
	<link rel="stylesheet" href="{{ asset('4edu/css/4edu/mobile.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom-admin.css') }}">
	@yield('css')

</head>
<body class="hold-transition skin-blue sidebar-mini fixed sidebar-collapse">
	<div class="wrapper">
		<header class="main-header">
			<!-- Logo -->
			<a href="{{ route('social') }}" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<div class="logo-mini"><img src="{{ asset('4edu/dist/img/logo2.png') }}" alt="User Image"></div>
				<!-- logo for regular state and mobile devices -->
				<div class="logo-lg"><img src="{{ asset('4edu/dist/img/logo.png') }}" alt="User Image"></div>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				<div class="col-md-3 timkiem">
					<div class="input-group margin">
						<input type="text" class="form-control input-sm">
						<span class="input-group-btn">
							<button type="button " class="btn btn-info btn-sm">Search</button>
						</span>
					</div>
				</div>
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- Messages: style can be found in dropdown.less-->
						<li class="dropdown ">
							<div class="margin">
								<select id="languagechange" name="locale" >
									<option value="en">English</option>
									<option value="vi" >Vietnamese</option>
								</select>
								<input type="hidden" name="_token" id="csrf_token" value="{{ csrf_token() }}">
								</div>

							</li>
							<li class="dropdown messages-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-envelope-o"></i>
									<span class="label label-success">4</span>
								</a>
								<ul class="dropdown-menu">
									<li class="header">You have 4 messages</li>
									<li>
										<!-- inner menu: contains the actual data -->
										<ul class="menu">
											<li><!-- start message -->
												<a href="#">
													<div class="pull-left">
														<img src="{{ asset('4edu/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
													</div>
													<h4>
														Support Team
														<small><i class="fa fa-clock-o"></i> 5 mins</small>
													</h4>
													<p>Why not buy a new awesome theme?</p>
												</a>
											</li>
											<!-- end message -->
											<li>
												<a href="#">
													<div class="pull-left">
														<img src="{{ asset('4edu/dist/img/user3-128x128.jpg') }}" class="img-circle" alt="User Image">
													</div>
													<h4>
														AdminLTE Design Team
														<small><i class="fa fa-clock-o"></i> 2 hours</small>
													</h4>
													<p>Why not buy a new awesome theme?</p>
												</a>
											</li>
											<li>
												<a href="#">
													<div class="pull-left">
														<img src="{{ asset('4edu/dist/img/user4-128x128.jpg') }}" class="img-circle" alt="User Image">
													</div>
													<h4>
														Developers
														<small><i class="fa fa-clock-o"></i> Today</small>
													</h4>
													<p>Why not buy a new awesome theme?</p>
												</a>
											</li>
											<li>
												<a href="#">
													<div class="pull-left">
														<img src="{{ asset('4edu/dist/img/user3-128x128.jpg') }}" class="img-circle" alt="User Image">
													</div>
													<h4>
														Sales Department
														<small><i class="fa fa-clock-o"></i> Yesterday</small>
													</h4>
													<p>Why not buy a new awesome theme?</p>
												</a>
											</li>
											<li>
												<a href="#">
													<div class="pull-left">
														<img src="{{ asset('4edu/dist/img/user4-128x128.jpg') }}" class="img-circle" alt="User Image">
													</div>
													<h4>
														Reviewers
														<small><i class="fa fa-clock-o"></i> 2 days</small>
													</h4>
													<p>Why not buy a new awesome theme?</p>
												</a>
											</li>
										</ul>
									</li>
									<li class="footer"><a href="#">See All Messages</a></li>
								</ul>
							</li>
							<!-- Notifications: style can be found in dropdown.less -->
							<li class="dropdown notifications-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-bell-o"></i>
									<span class="label label-warning">10</span>
								</a>
								<ul class="dropdown-menu">
									<li class="header">You have 10 notifications</li>
									<li>
										<!-- inner menu: contains the actual data -->
										<ul class="menu">
											<li>
												<a href="#">
													<i class="fa fa-users text-aqua"></i> 5 new members joined today
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
													page and may cause design problems
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-users text-red"></i> 5 new members joined
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-shopping-cart text-green"></i> 25 sales made
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-user text-red"></i> You changed your username
												</a>
											</li>
										</ul>
									</li>
									<li class="footer"><a href="#">View all</a></li>
								</ul>
							</li>
							<!-- Tasks: style can be found in dropdown.less -->
							<li class="dropdown tasks-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-flag-o"></i>
									<span class="label label-danger">9</span>
								</a>
								<ul class="dropdown-menu">
									<li class="header">You have 9 tasks</li>
									<li>
										<!-- inner menu: contains the actual data -->
										<ul class="menu">
											<li><!-- Task item -->
												<a href="#">
													<h3>
														Design some buttons
														<small class="pull-right">20%</small>
													</h3>
													<div class="progress xs">
														<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
															<span class="sr-only">20% Complete</span>
														</div>
													</div>
												</a>
											</li>
											<!-- end task item -->
											<li><!-- Task item -->
												<a href="#">
													<h3>
														Create a nice theme
														<small class="pull-right">40%</small>
													</h3>
													<div class="progress xs">
														<div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
															<span class="sr-only">40% Complete</span>
														</div>
													</div>
												</a>
											</li>
											<!-- end task item -->
											<li><!-- Task item -->
												<a href="#">
													<h3>
														Some task I need to do
														<small class="pull-right">60%</small>
													</h3>
													<div class="progress xs">
														<div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
															<span class="sr-only">60% Complete</span>
														</div>
													</div>
												</a>
											</li>
											<!-- end task item -->
											<li><!-- Task item -->
												<a href="#">
													<h3>
														Make beautiful transitions
														<small class="pull-right">80%</small>
													</h3>
													<div class="progress xs">
														<div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
															<span class="sr-only">80% Complete</span>
														</div>
													</div>
												</a>
											</li>
											<!-- end task item -->
										</ul>
									</li>
									<li class="footer">
										<a href="#">View all tasks</a>
									</li>
								</ul>
							</li>
							<!-- User Account: style can be found in dropdown.less -->
							<li class="dropdown user user-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<img src="{{ asset('4edu/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
									<span class="hidden-xs">{{ Auth::user()->fullname }}</span>
								</a>
								<ul class="dropdown-menu">
									<!-- User image -->
									<li class="user-header">
										<img src="{{ asset('4edu/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">

										<p>
											{{ Auth::user()->fullname }}
											<small>Aministrator</small>
										</p>
									</li>
									<!-- Menu Body -->
									<li class="user-body">
										<div class="row">
											<div class="col-xs-4 text-center">
												<a href="#">Followers</a>
											</div>
											<div class="col-xs-4 text-center">
												<a href="#">Sales</a>
											</div>
											<div class="col-xs-4 text-center">
												<a href="#">Friends</a>
											</div>
										</div>
										<!-- /.row -->
									</li>
									<!-- Menu Footer-->
									<li class="user-footer">
										<div class="pull-left">
											<a href="{{ route('profile') }}" class="btn btn-default btn-flat">Profile</a>
										</div>
										<div class="pull-right">
											<a href="{{ route('logout') }}" class="btn btn-default btn-flat">Sign out</a>
										</div>
									</li>
								</ul>
							</li>
							<!-- Control Sidebar Toggle Button -->
							<li>
								<a href="#" class="settinh" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
								<a href="#" class="lisst" data-toggle="control-sidebar"><i class="fa fa-th-list"></i></a>
							</li>
						</ul>
					</div>
				</nav>
			</header>
			<aside class="main-sidebar">
				<!-- sidebar: style can be found in sidebar.less -->
				<section class="sidebar">
					<!-- Sidebar user panel -->
					<div class="user-panel">
						<div class="pull-left image">
							<img src="{{ asset('4edu/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
						</div>
						<div class="pull-left info">
							<p>{{ Auth::user()->fullname }}</p>
							<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
						</div>
					</div>
					<!-- search form -->
					<form action="#" method="get" class="sidebar-form">
						<div class="input-group">
							<input type="text" name="q" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
								<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
								</button>
							</span>
						</div>
					</form>
					<!-- /.search form -->
					<!-- sidebar menu: : style can be found in sidebar.less -->
					<ul class="sidebar-menu">
						<li class="header">MAIN NAVIGATION</li>
						<li class="active treeview">
							<a href="{{ route('social') }}">
								<i class="fa fa-dashboard"></i> <span>Social</span>

							</a>

						</li>
						<li class="treeview">
							<a href="{{ route('list.user') }}">
								<i class="fa fa-users"></i>
								<span>Danh Mục User</span>

							</a>
						</li>
					</ul>
				</section>
			</aside>
			<!--====  phần nội dung  ====-->
			<div class="content-wrapper contents ">

				@yield('content')
				<!--====  hết phần nội dung  ====-->
			</div>
			<footer class="main-footer">
				<div class="pull-right hidden-xs">
					<b>Version</b> 2.3.8
				</div>
				<strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
				reserved.
			</footer>
			<aside id="canhanng" class="control-sidebar control-sidebar-dark">
				<!-- Create the tabs -->
				<div class="col-md-3 col-xs-12">
					<div class="box box-solid">
						<div class="box-header with-border">
							<h3 class="box-title">Cá Nhân</h3>
							<div class="box-tools">
								<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
								</button>
							</div>
						</div>
						<div class="box-body no-padding" style="display: block;">
							<ul class="nav nav-pills nav-stacked">
								<li><a href="mailbox.html"><i class="fa fa-inbox text-blue"></i> Inbox
									<span class="label label-primary pull-right">12</span></a></li>
									<li><a href="#"><i class="fa fa-envelope-o text-green"></i> Sent</a></li>
									<li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
									<li><a href="#"><i class="fa fa-filter text-yellow"></i> Junk <span class="label label-warning pull-right">65</span></a>
									</li>
									<li><a href="#"><i class="fa fa-trash-o text-red"></i> Trash</a></li>
								</ul>
							</div>
						</div>
						<div class="box box-solid">
							<div class="box-header with-border">
								<h3 class="box-title">Lối tắt</h3>
								<div class="box-tools">
									<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
									</button>
								</div>
							</div>
							<div class="box-body no-padding">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"><i class="fa  fa-windows text-yellow"></i> Promotions</a></li>
									<li><a href="#"><i class="fa  fa-wordpress text-light-blue"></i> Wordpress</a></li>
									<li><a href="#"><i class="fa  fa-futbol-o text-light-red"></i> Social</a></li>
									<li><a href="#"><i class="fa fa-youtube-square text-red"></i> Important</a></li>
									<li><a href="#"><i class="fa  fa-music text-green"></i> Social</a></li>
									<li><a href="#"><i class="fa  fa-pie-chart text-red"></i> About Me</a></li>
								</ul>
							</div>
						</div>
					</div>
				</aside>
				<!--hết cá nhân-->
				<!-- Control Sidebar -->
				<aside id="stert" class="control-sidebar control-sidebar-dark">
					<!-- Create the tabs -->
					<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
						<li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
						<li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<!-- Home tab content -->
						<div class="tab-pane" id="control-sidebar-home-tab">
							<h3 class="control-sidebar-heading">Recent Activity</h3>
							<ul class="control-sidebar-menu">
								<li>
									<a href="javascript:void(0)">
										<i class="menu-icon fa fa-birthday-cake bg-red"></i>

										<div class="menu-info">
											<h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

											<p>Will be 23 on April 24th</p>
										</div>
									</a>
								</li>
								<li>
									<a href="javascript:void(0)">
										<i class="menu-icon fa fa-user bg-yellow"></i>

										<div class="menu-info">
											<h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

											<p>New phone +1(800)555-1234</p>
										</div>
									</a>
								</li>
								<li>
									<a href="javascript:void(0)">
										<i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

										<div class="menu-info">
											<h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

											<p>nora@example.com</p>
										</div>
									</a>
								</li>
								<li>
									<a href="javascript:void(0)">
										<i class="menu-icon fa fa-file-code-o bg-green"></i>

										<div class="menu-info">
											<h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
											<p>Execution time 5 seconds</p>
										</div>
									</a>
								</li>
							</ul>
							<!-- /.control-sidebar-menu -->
							<h3 class="control-sidebar-heading">Tasks Progress</h3>
							<ul class="control-sidebar-menu">
								<li>
									<a href="javascript:void(0)">
										<h4 class="control-sidebar-subheading">
											Custom Template Design
											<span class="label label-danger pull-right">70%</span>
										</h4>

										<div class="progress progress-xxs">
											<div class="progress-bar progress-bar-danger" style="width: 70%"></div>
										</div>
									</a>
								</li>
								<li>
									<a href="javascript:void(0)">
										<h4 class="control-sidebar-subheading">
											Update Resume
											<span class="label label-success pull-right">95%</span>
										</h4>

										<div class="progress progress-xxs">
											<div class="progress-bar progress-bar-success" style="width: 95%"></div>
										</div>
									</a>
								</li>
								<li>
									<a href="javascript:void(0)">
										<h4 class="control-sidebar-subheading">
											Laravel Integration
											<span class="label label-warning pull-right">50%</span>
										</h4>

										<div class="progress progress-xxs">
											<div class="progress-bar progress-bar-warning" style="width: 50%"></div>
										</div>
									</a>
								</li>
								<li>
									<a href="javascript:void(0)">
										<h4 class="control-sidebar-subheading">
											Back End Framework
											<span class="label label-primary pull-right">68%</span>
										</h4>
										<div class="progress progress-xxs">
											<div class="progress-bar progress-bar-primary" style="width: 68%"></div>
										</div>
									</a>
								</li>
							</ul>
							<!-- /.control-sidebar-menu -->
						</div>
						<!-- /.tab-pane -->
						<!-- Stats tab content -->
						<div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
						<!-- /.tab-pane -->
						<!-- Settings tab content -->
						<div class="tab-pane" id="control-sidebar-settings-tab">
							<form method="post">
								<h3 class="control-sidebar-heading">General Settings</h3>
								<div class="form-group">
									<label class="control-sidebar-subheading">
										Report panel usage
										<input type="checkbox" class="pull-right" checked>
									</label>

									<p>
										Some information about this general settings option
									</p>
								</div>
								<!-- /.form-group -->

								<div class="form-group">
									<label class="control-sidebar-subheading">
										Allow mail redirect
										<input type="checkbox" class="pull-right" checked>
									</label>

									<p>
										Other sets of options are available
									</p>
								</div>
								<!-- /.form-group -->

								<div class="form-group">
									<label class="control-sidebar-subheading">
										Expose author name in posts
										<input type="checkbox" class="pull-right" checked>
									</label>

									<p>
										Allow the user to show his name in blog posts
									</p>
								</div>
								<!-- /.form-group -->

								<h3 class="control-sidebar-heading">Chat Settings</h3>

								<div class="form-group">
									<label class="control-sidebar-subheading">
										Show me as online
										<input type="checkbox" class="pull-right" checked>
									</label>
								</div>
								<!-- /.form-group -->

								<div class="form-group">
									<label class="control-sidebar-subheading">
										Turn off notifications
										<input type="checkbox" class="pull-right">
									</label>
								</div>
								<!-- /.form-group -->
								<div class="form-group">
									<label class="control-sidebar-subheading">
										Delete chat history
										<a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
									</label>
								</div>
								<!-- /.form-group -->
							</form>
						</div>
						<!-- /.tab-pane -->
					</div>
				</aside>
				<!-- /.control-sidebar -->
				<div class="control-sidebar-bg"></div>
				<script src="{{ asset('4edu/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
				<!-- jQuery UI 1.11.4 -->
				<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
				<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
				<script>
					$.widget.bridge('uibutton', $.ui.button);
				</script>
				<!-- Bootstrap 3.3.6 -->
				<script src="{{ asset('4edu/bootstrap/js/bootstrap.min.js') }}"></script>
				<!-- Morris.js charts -->
				<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script> -->
				<!-- <script src="{{ asset('4edu/plugins/morris/morris.min.js') }}"></script> -->
				<!-- Sparkline -->
				<!-- <script src="{{ asset('4edu/plugins/sparkline/jquery.sparkline.min.js') }}"></script> -->
				<!-- jvectormap -->
				<!-- <script src="{{ asset('4edu/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script> -->
				<!-- <script src="{{ asset('4edu/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script> -->
				<!-- jQuery Knob Chart -->
				<!-- <script src="{{ asset('4edu/plugins/knob/jquery.knob.js') }}"></script> -->
				<!-- daterangepicker -->
				<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script> -->
				<!-- <script src="{{ asset('4edu/plugins/daterangepicker/daterangepicker.js') }}"></script> -->
				<!-- datepicker -->
				<!-- <script src="{{ asset('4edu/plugins/datepicker/bootstrap-datepicker.js') }}"></script> -->
				<!-- Bootstrap WYSIHTML5 -->
				<!-- <script src="{{ asset('4edu/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script> -->
				<!-- Slimscroll -->
				<script src="{{ asset('4edu/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
				<!-- FastClick -->
				<!-- <script src="{{ asset('4edu/plugins/fastclick/fastclick.js') }}"></script> -->
				<script src="{{ asset('4edu/css/4edu/mobilejs.js') }}"></script>
				<!-- AdminLTE App -->
				<script src="{{ asset('4edu/dist/js/app.min.js') }}"></script>
				<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
				<!-- <script src="{{ asset('4edu/dist/js/pages/dashboard.js') }}"></script> -->
				<!-- AdminLTE for demo purposes -->
				@yield('javascript')

			</body>
			</html>
