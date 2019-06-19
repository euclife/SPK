<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	 <!-- CSRF Token -->
	 <meta name="csrf-token" content="{{ csrf_token() }}">

	 <link rel="icon" href="{{asset('image/logo.png')}}">
	<title>PT. Inti | @yield('title')</title>
	<!-- =============== VENDOR STYLES ===============-->
	@yield('css')
		<!-- SWEET ALERT-->
	<link rel="stylesheet" href="{{asset('template/admin/vendor/sweetalert/dist/sweetalert.css')}}">
	<!-- SWEET ALERT-->
   <script src="{{('template/admin/vendor/sweetalert/dist/sweetalert.min.js')}}"></script>
</head>
<div class="wrapper">
		<!-- top navbar-->
		<header class="topnavbar-wrapper ">
			<!-- START Top Navbar-->
			<nav class="navbar topnavbar ">
				<!-- START navbar header-->
				<div class="navbar-header ">
					<a class="navbar-brand " href="#/">
						<div class="brand-logo">
							<img class="img-fluid" src="{{asset('image/Logo-Extra-Mini.ico')}}" alt="App Logo">
						</div>
						<div class="brand-logo-collapsed ">
							<img class="img-fluid" src="{{asset('image/Logo-Extra-Mini2.ico')}}" alt="App Logo">
						</div>
					</a>
				</div>
				<!-- END navbar header-->
				<!-- START Left navbar-->
				<ul class="navbar-nav mr-auto flex-row ">
					<li class="nav-item ">
						<!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
						<a class="nav-link d-none d-md-block d-lg-block d-xl-block" href="#" data-trigger-resize="" data-toggle-state="aside-collapsed">
							<em class="fa fa-navicon"></em>
						</a>
						<!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
						<a class="nav-link sidebar-toggle d-md-none" href="#" data-toggle-state="aside-toggled" data-no-persist="true">
							<em class="fa fa-navicon"></em>
						</a>
					</li>
					<!-- START User avatar toggle-->
					<li class="nav-item d-none d-md-block">
						<!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
						<a class="nav-link" id="user-block-toggle" href="#user-block" data-toggle="collapse">
							<em class="icon-user"></em>
						</a>
					</li>
					<!-- END User avatar toggle-->
					<!-- START lock screen-->
					<li class="nav-item d-none d-md-block">
						<a class="nav-link" href="lock.html" title="Lock screen">
							<em class="icon-lock"></em>
						</a>
					</li>
					<!-- END lock screen-->
				</ul>
				<!-- END Left navbar-->
				<!-- START Right Navbar-->
				<ul class="navbar-nav flex-row">
					<!-- Search icon-->
					<li class="nav-item">
						<a class="nav-link" href="#" data-search-open="">
							<em class="icon-magnifier"></em>
						</a>
					</li>
					<!-- Fullscreen (only desktops)-->
					<li class="nav-item d-none d-md-block">
						<a class="nav-link" href="#" data-toggle-fullscreen="">
							<em class="fa fa-expand"></em>
						</a>
					</li>
					<!-- START Alert menu-->
					<li class="nav-item dropdown dropdown-list">
						<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-toggle="dropdown">
							<em class="icon-user"></em> &nbsp;
							 {{ Auth::user()->name }}
						</a>
						<!-- START Dropdown menu-->
						<div class="dropdown-menu dropdown-menu-right">
							<div class="dropdown-item">
								<!-- START list group-->
								<div class="list-group">
									<!-- list item-->
									<div class="list-group-item list-group-item-action">
										<div class="media">
											<div class="align-self-start mr-2">
												<em class="fa fa-setting fa-2x text-info"></em>
											</div>
											<div class="media-body " >
												<p class="m-0">Profil</p>
											</div>
										</div>
									</div>
									<div class="list-group-item list-group-item-action">
										<span class="d-flex align-items-center">
											<button id="logout_button"><span class="text-sm">Log Out</span></button>
												<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
													 @csrf
												</form>
										</span>
									</div>
								</div>
								<!-- END list group-->
							</div>
						</div>
						<!-- END Dropdown menu-->
					</li>
					<!-- END Alert menu-->
					<!-- START Offsidebar button-->
				  
					<!-- END Offsidebar menu-->
				</ul>
				<!-- END Right Navbar-->
				<!-- START Search form-->
				<form class="navbar-form" role="search" action="search.html">
					<div class="form-group">
						<input class="form-control" type="text" placeholder="Type and hit enter ...">
						<div class="fa fa-times navbar-form-close" data-search-dismiss=""></div>
					</div>
					<button class="d-none" type="submit">Submit</button>
				</form>
				<!-- END Search form-->
			</nav>
			<!-- END Top Navbar-->
		</header>
		<!-- sidebar-->
		<aside class="aside-container">
			<!-- START Sidebar (left)-->
			<div class="aside-inner">
				<nav class="sidebar" data-sidebar-anyclick-close="">
					<!-- START sidebar nav-->
					<ul class="sidebar-nav">
						<!-- START user info-->
						<li class="has-user-block">
							<div class="collapse" id="user-block">
								<div class="item user-block">
									<!-- User picture-->
									<div class="user-block-picture">
										<div class="user-block-status">
											<img class="img-thumbnail rounded-circle" src="img/user/02.jpg" alt="Avatar" width="60" height="60">
											<div class="circle bg-success circle-lg"></div>
										</div>
									</div>
									<!-- Name and Job-->
									<div class="user-block-info">
										<span class="user-block-name">Hello, Mike</span>
										<span class="user-block-role">Designer</span>
									</div>
								</div>
							</div>
						</li>
						<!-- END user info-->
						<!-- Iterates over all sidebar items-->
						<li class="nav-heading ">
							<span data-localize="sidebar.heading.HEADER">Main Navigation</span>
						</li>
						<li class=" ">
							<a href= "./admin/form-wizard.html" title="Dashboard" data-toggle="collapse">
								<div class="float-right badge badge-success">3</div>
								<em class="icon-speedometer"></em>
								<span data-localize="sidebar.nav.DASHBOARD">Dashboard</span>
							</a>
						</li>
						<li class=" ">
							<a href="./admin/widgets.html" title="Widgets">
								<div class="float-right badge badge-success">30</div>
								<em class="icon-grid"></em>
								<span data-localize="sidebar.nav.WIDGETS">Widgets</span>
							</a>
						</li>
						<li class=" ">
							<a href="#layout" title="Layouts" data-toggle="collapse">
								<em class="icon-layers"></em>
								<span>Layouts</span>
							</a>
							<ul class="sidebar-nav sidebar-subnav collapse" id="layout">
								<li class="sidebar-subnav-header">Layouts</li>
								<li class=" ">
									<a href="./admin/dashboard_h.html" title="Horizontal">
										<span>Horizontal</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-heading ">
							<span data-localize="sidebar.heading.COMPONENTS">Components</span>
						</li>
						<li class=" ">
							<a href="#elements" title="Elements" data-toggle="collapse">
								<em class="icon-chemistry"></em>
								<span data-localize="sidebar.nav.element.ELEMENTS">Elements</span>
							</a>
							<ul class="sidebar-nav sidebar-subnav collapse" id="elements">
								<li class="sidebar-subnav-header">Elements</li>
								<li class=" ">
									<a href="./admin/buttons.html" title="Buttons">
										<span data-localize="sidebar.nav.element.BUTTON">Buttons</span>
									</a>
								</li>
								<li class=" ">
									<a href="./admin/notifications.html" title="Notifications">
										<span data-localize="sidebar.nav.element.NOTIFICATION">Notifications</span>
									</a>
								</li>
								<li class=" ">
									<a href="./admin/sweetalert.html" title="Sweet Alert">
										<span>Sweet Alert</span>
									</a>
								</li>
								<li class=" ">
									<a href="carousel.html" title="Carousel">
										<span data-localize="sidebar.nav.element.INTERACTION">Carousel</span>
									</a>
								</li>
								<li class=" ">
									<a href="spinners.html" title="Spinners">
										<span data-localize="sidebar.nav.element.SPINNER">Spinners</span>
									</a>
								</li>
								<li class=" ">
									<a href="animations.html" title="Animations">
										<span data-localize="sidebar.nav.element.ANIMATION">Animations</span>
									</a>
								</li>
								<li class=" ">
									<a href="dropdown-animations.html" title="Dropdown">
										<span data-localize="sidebar.nav.element.DROPDOWN">Dropdown</span>
									</a>
								</li>
								<li class=" ">
									<a href="nestable.html" title="Nestable">
										<span>Nestable</span>
									</a>
								</li>
								<li class=" ">
									<a href="sortable.html" title="Sortable">
										<span>Sortable</span>
									</a>
								</li>
								<li class=" ">
									<a href="cards.html" title="Cards">
										<span data-localize="sidebar.nav.element.CARDS">Cards</span>
									</a>
								</li>
								<li class=" ">
									<a href="portlets.html" title="Portlets">
										<span data-localize="sidebar.nav.element.PORTLET">Portlets</span>
									</a>
								</li>
								<li class=" ">
									<a href="grid.html" title="Grid">
										<span data-localize="sidebar.nav.element.GRID">Grid</span>
									</a>
								</li>
								<li class=" ">
									<a href="grid-masonry.html" title="Grid Masonry">
										<span data-localize="sidebar.nav.element.GRID_MASONRY">Grid Masonry</span>
									</a>
								</li>
								<li class=" ">
									<a href="typo.html" title="Typography">
										<span data-localize="sidebar.nav.element.TYPO">Typography</span>
									</a>
								</li>
								<li class=" ">
									<a href="icons-font.html" title="Font Icons">
										<div class="float-right badge badge-success">+400</div>
										<span data-localize="sidebar.nav.element.FONT_ICON">Font Icons</span>
									</a>
								</li>
								<li class=" ">
									<a href="icons-weather.html" title="Weather Icons">
										<div class="float-right badge badge-success">+100</div>
										<span data-localize="sidebar.nav.element.WEATHER_ICON">Weather Icons</span>
									</a>
								</li>
								<li class=" ">
									<a href="colors.html" title="Colors">
										<span data-localize="sidebar.nav.element.COLOR">Colors</span>
									</a>
								</li>
							</ul>
						</li>
						<li class=" ">
							<a href="#forms" title="Forms" data-toggle="collapse">
								<em class="icon-note"></em>
								<span data-localize="sidebar.nav.form.FORM">Forms</span>
							</a>
							<ul class="sidebar-nav sidebar-subnav collapse" id="forms">
								<li class="sidebar-subnav-header">Forms</li>
								<li class=" ">
									<a href="form-standard.html" title="Standard">
										<span data-localize="sidebar.nav.form.STANDARD">Standard</span>
									</a>
								</li>
								<li class=" ">
									<a href="form-extended.html" title="Extended">
										<span data-localize="sidebar.nav.form.EXTENDED">Extended</span>
									</a>
								</li>
								<li class=" ">
									<a href="form-validation.html" title="Validation">
										<span data-localize="sidebar.nav.form.VALIDATION">Validation</span>
									</a>
								</li>
								<li class=" ">
									<a href="form-wizard.html" title="Wizard">
										<span>Wizard</span>
									</a>
								</li>
								<li class=" ">
									<a href="form-upload.html" title="Upload">
										<span>Upload</span>
									</a>
								</li>
								<li class=" ">
									<a href="form-xeditable.html" title="xEditable">
										<span>xEditable</span>
									</a>
								</li>
								<li class=" ">
									<a href="form-imagecrop.html" title="Cropper">
										<span>Cropper</span>
									</a>
								</li>
							</ul>
						</li>
						<li class=" ">
							<a href="#charts" title="Charts" data-toggle="collapse">
								<em class="icon-graph"></em>
								<span data-localize="sidebar.nav.chart.CHART">Charts</span>
							</a>
							<ul class="sidebar-nav sidebar-subnav collapse" id="charts">
								<li class="sidebar-subnav-header">Charts</li>
								<li class=" ">
									<a href="chart-flot.html" title="Flot">
										<span data-localize="sidebar.nav.chart.FLOT">Flot</span>
									</a>
								</li>
								<li class=" ">
									<a href="chart-radial.html" title="Radial">
										<span data-localize="sidebar.nav.chart.RADIAL">Radial</span>
									</a>
								</li>
								<li class=" ">
									<a href="chart-js.html" title="Chart JS">
										<span>Chart JS</span>
									</a>
								</li>
								<li class=" ">
									<a href="chart-rickshaw.html" title="Rickshaw">
										<span>Rickshaw</span>
									</a>
								</li>
								<li class=" ">
									<a href="chart-morris.html" title="MorrisJS">
										<span>MorrisJS</span>
									</a>
								</li>
								<li class=" ">
									<a href="chart-chartist.html" title="Chartist">
										<span>Chartist</span>
									</a>
								</li>
							</ul>
						</li>
						<li class=" ">
							<a href="#tables" title="Tables" data-toggle="collapse">
								<em class="icon-grid"></em>
								<span data-localize="sidebar.nav.table.TABLE">Tables</span>
							</a>
							<ul class="sidebar-nav sidebar-subnav collapse" id="tables">
								<li class="sidebar-subnav-header">Tables</li>
								<li class=" ">
									<a href="table-standard.html" title="Standard">
										<span data-localize="sidebar.nav.table.STANDARD">Standard</span>
									</a>
								</li>
								<li class=" ">
									<a href="table-extended.html" title="Extended">
										<span data-localize="sidebar.nav.table.EXTENDED">Extended</span>
									</a>
								</li>
								<li class=" ">
									<a href="table-datatable.html" title="DataTables">
										<span data-localize="sidebar.nav.table.DATATABLE">DataTables</span>
									</a>
								</li>
								<li class=" ">
									<a href="table-bootgrid.html" title="BootGrid">
										<span>BootGrid</span>
									</a>
								</li>
							</ul>
						</li>
						<li class=" ">
							<a href="#maps" title="Maps" data-toggle="collapse">
								<em class="icon-map"></em>
								<span data-localize="sidebar.nav.map.MAP">Maps</span>
							</a>
							<ul class="sidebar-nav sidebar-subnav collapse" id="maps">
								<li class="sidebar-subnav-header">Maps</li>
								<li class=" ">
									<a href="maps-google.html" title="Google Maps">
										<span data-localize="sidebar.nav.map.GOOGLE">Google Maps</span>
									</a>
								</li>
								<li class=" ">
									<a href="maps-vector.html" title="Vector Maps">
										<span data-localize="sidebar.nav.map.VECTOR">Vector Maps</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-heading ">
							<span data-localize="sidebar.heading.MORE">More</span>
						</li>
						<li class=" ">
							<a href="#pages" title="Pages" data-toggle="collapse">
								<em class="icon-doc"></em>
								<span data-localize="sidebar.nav.pages.PAGES">Pages</span>
							</a>
							<ul class="sidebar-nav sidebar-subnav collapse" id="pages">
								<li class="sidebar-subnav-header">Pages</li>
								<li class=" ">
									<a href="login.html" title="Login">
										<span data-localize="sidebar.nav.pages.LOGIN">Login</span>
									</a>
								</li>
								<li class=" ">
									<a href="register.html" title="Sign up">
										<span data-localize="sidebar.nav.pages.REGISTER">Sign up</span>
									</a>
								</li>
								<li class=" ">
									<a href="recover.html" title="Recover Password">
										<span data-localize="sidebar.nav.pages.RECOVER">Recover Password</span>
									</a>
								</li>
								<li class=" ">
									<a href="lock.html" title="Lock">
										<span data-localize="sidebar.nav.pages.LOCK">Lock</span>
									</a>
								</li>
								<li class=" ">
									<a href="template.html" title="Starter Template">
										<span data-localize="sidebar.nav.pages.STARTER">Starter Template</span>
									</a>
								</li>
								<li class=" ">
									<a href="404.html" title="404">
										<span>404</span>
									</a>
								</li>
								<li class=" ">
									<a href="500.html" title="500">
										<span>500</span>
									</a>
								</li>
								<li class=" ">
									<a href="maintenance.html" title="Maintenance">
										<span>Maintenance</span>
									</a>
								</li>
							</ul>
						</li>
						<li class=" ">
							<a href="#extras" title="Extras" data-toggle="collapse">
								<em class="icon-cup"></em>
								<span data-localize="sidebar.nav.extra.EXTRA">Extras</span>
							</a>
							<ul class="sidebar-nav sidebar-subnav collapse" id="extras">
								<li class="sidebar-subnav-header">Extras</li>
								<li class=" ">
									<a href="#blog" title="Blog" data-toggle="collapse">
										<em class="fa fa-angle-right"></em>
										<span>Blog</span>
									</a>
									<ul class="sidebar-nav sidebar-subnav collapse" id="blog">
										<li class="sidebar-subnav-header">Blog</li>
										<li class=" ">
											<a href="blog.html" title="List">
												<span>List</span>
											</a>
										</li>
										<li class=" ">
											<a href="blog-post.html" title="Post">
												<span>Post</span>
											</a>
										</li>
										<li class=" ">
											<a href="blog-articles.html" title="Articles">
												<span>Articles</span>
											</a>
										</li>
										<li class=" ">
											<a href="blog-article-view.html" title="Article View">
												<span>Article View</span>
											</a>
										</li>
									</ul>
								</li>
								<li class=" ">
									<a href="#ecommerce" title="eCommerce" data-toggle="collapse">
										<em class="fa fa-angle-right"></em>
										<span>eCommerce</span>
									</a>
									<ul class="sidebar-nav sidebar-subnav collapse" id="ecommerce">
										<li class="sidebar-subnav-header">eCommerce</li>
										<li class=" ">
											<a href="ecommerce-orders.html" title="Orders">
												<div class="float-right badge badge-success">10</div>
												<span>Orders</span>
											</a>
										</li>
										<li class=" ">
											<a href="ecommerce-order-view.html" title="Order View">
												<span>Order View</span>
											</a>
										</li>
										<li class=" ">
											<a href="ecommerce-products.html" title="Products">
												<span>Products</span>
											</a>
										</li>
										<li class=" ">
											<a href="ecommerce-product-view.html" title="Product View">
												<span>Product View</span>
											</a>
										</li>
										<li class=" ">
											<a href="ecommerce-checkout.html" title="Checkout">
												<span>Checkout</span>
											</a>
										</li>
									</ul>
								</li>
								<li class=" ">
									<a href="#forum" title="Forum" data-toggle="collapse">
										<em class="fa fa-angle-right"></em>
										<span>Forum</span>
									</a>
									<ul class="sidebar-nav sidebar-subnav collapse" id="forum">
										<li class="sidebar-subnav-header">Forum</li>
										<li class=" ">
											<a href="forum-categories.html" title="Categories">
												<span>Categories</span>
											</a>
										</li>
										<li class=" ">
											<a href="forum-topics.html" title="Topics">
												<span>Topics</span>
											</a>
										</li>
										<li class=" ">
											<a href="forum-discussion.html" title="Discussion">
												<span>Discussion</span>
											</a>
										</li>
									</ul>
								</li>
								<li class=" ">
									<a href="contacts.html" title="Contacts">
										<span>Contacts</span>
									</a>
								</li>
								<li class=" ">
									<a href="contact-details.html" title="Contact details">
										<span>Contact details</span>
									</a>
								</li>
								<li class=" ">
									<a href="projects.html" title="Projects">
										<span>Projects</span>
									</a>
								</li>
								<li class=" ">
									<a href="project-details.html" title="Projects details">
										<span>Projects details</span>
									</a>
								</li>
								<li class=" ">
									<a href="team-viewer.html" title="Team viewer">
										<span>Team viewer</span>
									</a>
								</li>
								<li class=" ">
									<a href="social-board.html" title="Social board">
										<span>Social board</span>
									</a>
								</li>
								<li class=" ">
									<a href="vote-links.html" title="Vote links">
										<span>Vote links</span>
									</a>
								</li>
								<li class=" ">
									<a href="bug-tracker.html" title="Bug tracker">
										<span>Bug tracker</span>
									</a>
								</li>
								<li class=" ">
									<a href="faq.html" title="FAQ">
										<span>FAQ</span>
									</a>
								</li>
								<li class=" ">
									<a href="help-center.html" title="Help Center">
										<span>Help Center</span>
									</a>
								</li>
								<li class=" ">
									<a href="followers.html" title="Followers">
										<span>Followers</span>
									</a>
								</li>
								<li class=" ">
									<a href="settings.html" title="Settings">
										<span>Settings</span>
									</a>
								</li>
								<li class=" ">
									<a href="plans.html" title="Plans">
										<span>Plans</span>
									</a>
								</li>
								<li class=" ">
									<a href="file-manager.html" title="File manager">
										<span>File manager</span>
									</a>
								</li>
								<li class=" ">
									<a href="mailbox.html" title="Mailbox">
										<span data-localize="sidebar.nav.extra.MAILBOX">Mailbox</span>
									</a>
								</li>
								<li class=" ">
									<a href="timeline.html" title="Timeline">
										<span data-localize="sidebar.nav.extra.TIMELINE">Timeline</span>
									</a>
								</li>
								<li class=" ">
									<a href="calendar.html" title="Calendar">
										<span data-localize="sidebar.nav.extra.CALENDAR">Calendar</span>
									</a>
								</li>
								<li class=" ">
									<a href="invoice.html" title="Invoice">
										<span data-localize="sidebar.nav.extra.INVOICE">Invoice</span>
									</a>
								</li>
								<li class=" ">
									<a href="search.html" title="Search">
										<span data-localize="sidebar.nav.extra.SEARCH">Search</span>
									</a>
								</li>
								<li class=" ">
									<a href="todo.html" title="Todo List">
										<span data-localize="sidebar.nav.extra.TODO">Todo List</span>
									</a>
								</li>
								<li class=" ">
									<a href="profile.html" title="Profile">
										<span data-localize="sidebar.nav.extra.PROFILE">Profile</span>
									</a>
								</li>
							</ul>
						</li>
						<li class=" ">
							<a href="#multilevel" title="Multilevel" data-toggle="collapse">
								<em class="fa fa-folder-open-o"></em>
								<span>Multilevel</span>
							</a>
							<ul class="sidebar-nav sidebar-subnav collapse" id="multilevel">
								<li class="sidebar-subnav-header">Multilevel</li>
								<li class=" ">
									<a href="#level1" title="Level 1" data-toggle="collapse">
										<span>Level 1</span>
									</a>
									<ul class="sidebar-nav sidebar-subnav collapse" id="level1">
										<li class="sidebar-subnav-header">Level 1</li>
										<li class=" ">
											<a href="multilevel-1.html" title="Level1 Item">
												<span>Level1 Item</span>
											</a>
										</li>
										<li class=" ">
											<a href="#level2" title="Level 2" data-toggle="collapse">
												<span>Level 2</span>
											</a>
											<ul class="sidebar-nav sidebar-subnav collapse" id="level2">
												<li class="sidebar-subnav-header">Level 2</li>
												<li class=" ">
													<a href="#level3" title="Level 3" data-toggle="collapse">
														<span>Level 3</span>
													</a>
													<ul class="sidebar-nav sidebar-subnav collapse" id="level3">
														<li class="sidebar-subnav-header">Level 3</li>
														<li class=" ">
															<a href="multilevel-3.html" title="Level3 Item">
																<span>Level3 Item</span>
															</a>
														</li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class=" ">
							<a href="documentation.html" title="Documentation">
								<em class="icon-graduation"></em>
								<span data-localize="sidebar.nav.DOCUMENTATION">Documentation</span>
							</a>
						</li>
					</ul>
					<!-- END sidebar nav-->
				</nav>
			</div>
			<!-- END Sidebar (left)-->
		</aside>


	@yield('content')
  <!-- Page footer-->
		<footer class="footer-container">
			<span>&copy; 2018 - PT. INTI</span>
		</footer>
	</div>
	<!-- =============== VENDOR SCRIPTS ===============-->
	<script type="text/javascript">
		$(function() {

	 $('#logout_button').on('click', function() {
		  swal({
					 title: "Apa anda yakin?",
					 text: "Anda akan keluar dari aplikasi!",
					 type: "warning",
					 showCancelButton: true,
					 confirmButtonColor: '#DD6B55',
					 confirmButtonText: 'Logout!',
					 cancelButtonText: "Tidak",
					 closeOnConfirm: false,
					 closeOnCancel: true
				},
				function(isConfirm){
					 if (isConfirm){
						  document.getElementById('logout-form').submit();
					 }
			});
	 });
 });
	</script>
</body>

</html>