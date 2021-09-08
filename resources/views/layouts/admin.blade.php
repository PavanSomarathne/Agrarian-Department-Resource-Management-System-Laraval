<!doctype html>
<html lang="en" class="color-sidebar sidebarcolor2">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="images/favicon.png">
	<title>Admin Panel</title>
	<!-- CSS FILES START -->
	<link href={{asset('assets/css/app.css')}} rel="stylesheet">
	<link href={{asset('assets/css/bootstrap.min.css')}} rel="stylesheet">
	<link href={{asset('assets/css/bootstrap-extended.css')}} rel="stylesheet">
	<link href={{asset('assets/css/bootstrap-min.css.map')}} rel="stylesheet">
	<link href={{asset('assets/css/dark-theme.css')}} rel="stylesheet">
	<link href={{asset('assets/css/header-colors.css')}} rel="stylesheet">
	<link href={{asset('assets/css/icons.css')}} rel="stylesheet">
	<link href={{asset('assets/css/pace.min.css')}} rel="stylesheet">
	<link href={{asset('assets/css/semi-dark.css')}} rel="stylesheet">
	<link href={{asset('assets/plugins/fullcalendar/css/main.min.css')}} rel="stylesheet">

	<!-- CSS FILES End -->
	
	<!-- DataTables added by Pavan -->


	<link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

</head>

<script src={{asset('assets/js/jquery.min.js')}}></script>
<script src={{asset('assets/js/index.js')}}></script>
<script src={{asset('assets/js/bootstrap.bundle.min.js')}}></script> <!-- Pavan has commented codes inside -->
<script src={{asset('assets/js/bootstrap.bundle.min.js.map')}}></script>
<script src={{asset('assets/js/pace.min.js')}}></script>
<script src={{asset('assets/js/widgets.js')}}></script>
<script src={{asset('assets/js/app.js')}}></script>
<script src={{asset('assets/plugins/fullcalendar/js/main.min.js')}}></script>
<script src={{asset('assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}></script>

<script src="/js/font_awesome_all.js"></script>
<!--added by Pavan -->

<!-- DataTables  & Plugins added by Pavan -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.js"></script>
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!--wrapper-->
<div class="wrapper">
	<!--sidebar wrapper -->
	<div class="sidebar-wrapper" data-simplebar="true">
		<div class="sidebar-header">
			<a href="/" class="mx-auto">
			<div >
				<img src="assets/images/agro.png" class="logo-icon" alt="logo icon">
			</div>
			</a>
			<!-- <div class="toggle-icon ms-auto">
					<i class='bx bx-first-page'></i>
				</div> -->
		</div>
		<!--navigation-->
		<ul class="metismenu" id="menu">
			<li>
				<a href="/dashboard" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-home'></i>
					</div>
					<div class="menu-title">Dashboard</div>
				</a>
				<ul>
					<li> <a href="{{ route('register_farmer') }}"><i class="bx bx-right-arrow-alt"></i>Add Farmer</a>
					</li>
					<li> <a href="{{ route('farmer.viewall') }}"><i class="bx bx-right-arrow-alt"></i>View Farmers</a>
					</li>
					<li> <a href="{{ route('register_officer') }}"><i class="bx bx-right-arrow-alt"></i>Add Officer</a>
					</li>
					<li> <a href="{{ route('officer.viewall') }}"><i class="bx bx-right-arrow-alt"></i>Views Officers</a>
					</li>
					<li> <a href="{{ route('harvest.add') }}"><i class="bx bx-right-arrow-alt"></i>Add Harvest</a>
					</li>
					<li> <a href="{{ route('harvest.viewall') }}"><i class="bx bx-right-arrow-alt"></i>View Harvest</a>
					</li>
					<li> <a href="/subsidies"><i class="bx bx-right-arrow-alt"></i>Subsidies</a>
					</li>
					<li> <a href="/events"><i class="bx bx-right-arrow-alt"></i>Events</a>
					<li> <a href="{{ route('profile.update') }}"><i class="bx bx-right-arrow-alt"></i>My Profile</a>
					</li>
					<li> <a href="/fertilizerFarmer"><i class="bx bx-right-arrow-alt"></i>Fertilizer Requests Farmer</a>
					</li>
					<li> <a href="/fertilizerOfficer"><i class="bx bx-right-arrow-alt"></i>Fertilizer Requests Officer</a>
					</li>
					<li> <a href="/fertilizerAdmin"><i class="bx bx-right-arrow-alt"></i>Fertilizer Requests Admin</a>
					</li>
				</ul>
			</li>
		</ul>
		<!--end navigation-->
	</div>
	<!--end sidebar wrapper -->
	<!--start header -->
	<header>
		<div class="topbar d-flex align-items-center">
			<nav class="navbar navbar-expand">
				<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
				</div>
				<!-- <div class="top-menu-left d-none d-lg-block">
						<ul class="nav">
						  <li class="nav-item">
							<a class="nav-link" href="app-emailbox.html"><i class='bx bx-envelope'></i></a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" href="app-chat-box.html"><i class='bx bx-message'></i></a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" href="app-fullcalender.html"><i class='bx bx-calendar'></i></a>
						  </li>
						  <li class="nav-item">
							  <a class="nav-link" href="app-to-do.html"><i class='bx bx-check-square'></i></a>
						  </li>
					  </ul>
					 </div> -->
				<div class="search-bar flex-grow-1">
					<div class="position-relative search-bar-box">
						<input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
						<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
					</div>
				</div>
				<div class="top-menu ms-auto">
					<ul class="navbar-nav align-items-center">
						<!-- <li class="nav-item mobile-search-icon">
								<a class="nav-link" href="#">	<i class='bx bx-search'></i>
								</a>
							</li> -->

						<li class="nav-item dropdown dropdown-large">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">0</span>
								<i class='bx bx-bell'></i>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a href="javascript:;">
									<div class="msg-header">
										<p class="msg-header-title">Notifications</p>
										<p class="msg-header-clear ms-auto">Marks all as read</p>
									</div>
								</a>
								<div class="header-notifications-list">
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											
											<div class="flex-grow-1">
												<h6 class="msg-name"><span class="msg-time float-end">
													</span></h6>
												<p class="msg-info">Zero Notifications</p>
											</div>
										</div>
									</a>
									<!-- <a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="notify bg-light-danger text-danger"><i class="bx bx-cart-alt"></i>
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
														ago</span></h6>
												<p class="msg-info">You have recived new orders</p>
											</div>
										</div>
									</a> -->

								</div>
								<a href="javascript:;">
									<div class="text-center msg-footer">View All Notifications</div>
								</a>
							</div>
						</li>
						<!-- <li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
									<i class='bx bx-comment'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Messages</p>
											<p class="msg-header-clear ms-auto">Marks all as read</p>
										</div>
									</a>
									<div class="header-message-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Daisy Anderson <span class="msg-time float-end">5 sec
												ago</span></h6>
													<p class="msg-info">The standard chunk of lorem</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-2.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Althea Cabardo <span class="msg-time float-end">14
												sec ago</span></h6>
													<p class="msg-info">Many desktop publishing packages</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-3.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Oscar Garner <span class="msg-time float-end">8 min
												ago</span></h6>
													<p class="msg-info">Various versions have evolved over</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-4.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Katherine Pechon <span class="msg-time float-end">15
												min ago</span></h6>
													<p class="msg-info">Making this the first true generator</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-5.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Amelia Doe <span class="msg-time float-end">22 min
												ago</span></h6>
													<p class="msg-info">Duis aute irure dolor in reprehenderit</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-6.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Cristina Jhons <span class="msg-time float-end">2 hrs
												ago</span></h6>
													<p class="msg-info">The passage is attributed to an unknown</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-7.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">James Caviness <span class="msg-time float-end">4 hrs
												ago</span></h6>
													<p class="msg-info">The point of using Lorem</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-8.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Peter Costanzo <span class="msg-time float-end">6 hrs
												ago</span></h6>
													<p class="msg-info">It was popularised in the 1960s</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-9.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">David Buckley <span class="msg-time float-end">2 hrs
												ago</span></h6>
													<p class="msg-info">Various versions have evolved over</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-10.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Thomas Wheeler <span class="msg-time float-end">2 days
												ago</span></h6>
													<p class="msg-info">If you are going to use a passage</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-11.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Johnny Seitz <span class="msg-time float-end">5 days
												ago</span></h6>
													<p class="msg-info">All the Lorem Ipsum generators</p>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">View All Messages</div>
									</a>
								</div>
							</li> -->
					</ul>
				</div>
				<div class="user-box dropdown">
					<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						@guest
						@if (Route::has('login') || Route::has('register'))
						<img src="assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
						<div class="user-info ps-3">
							<p class="user-name mb-0">Hi! Saman Perera</p>
							<p class="designattion mb-0">Farmer</p>
						</div>
						@endif
						@else
						
						@if (Auth::user()->profile_image == null)
						<img src="/storage/profile_images/profile.png" class="user-img" alt="user avatar">
						@else 
						<img src={{ Auth::user()->profile_image }} class="user-img" alt="user avatar">
						@endif
						<div class="user-info ps-3">
							<p class="user-name mb-0">Hi! {{ Auth::user()->name}}</p>
							<p class="designattion mb-0">{{ Auth::user()->type}}</p>
						</div>

						@endguest
					</a>
					<ul class="dropdown-menu dropdown-menu-end">
						<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
						</li>

						<li>
							<div class="dropdown-divider mb-0"></div>
						</li>
						<li><a class="dropdown-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
						</li>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							@csrf
						</form>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<!--end header -->
	<!--start page wrapper -->
	<div class="page-wrapper">
		@yield('content')
	</div>
	<!--end page wrapper -->
	<!--start overlay-->
	<div class="overlay toggle-icon"></div>
	<!--end overlay-->
	<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
	<!--End Back To Top Button-->
	<footer class="page-footer">
		<p class="mb-0">Copyright © 2021. All right reserved.</p>
	</footer>
</div>
<!--end wrapper-->