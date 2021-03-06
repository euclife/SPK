<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	 <!-- CSRF Token -->
	 <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

	 <link rel="icon" href="<?php echo e(asset('image/logo.png')); ?>">
	<title>PT. Inti | <?php echo $__env->yieldContent('title'); ?></title>
	<!-- =============== VENDOR STYLES ===============-->
	<?php echo $__env->yieldContent('css'); ?>
		<!-- SWEET ALERT-->
	<link rel="stylesheet" href="<?php echo e(asset('template/admin/vendor/sweetalert/dist/sweetalert.css')); ?>">
	<!-- SWEET ALERT-->
   <script src="<?php echo e(('template/admin/vendor/sweetalert/dist/sweetalert.min.js')); ?>"></script>
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
							<img class="img-fluid" src="<?php echo e(asset('image/Logo-Extra-Mini.ico')); ?>" alt="App Logo">
						</div>
						<div class="brand-logo-collapsed ">
							<img class="img-fluid" src="<?php echo e(asset('image/Logo-Extra-Mini2.ico')); ?>" alt="App Logo">
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
							 <?php echo e(Auth::user()->name); ?>

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
									<button style="border: none; background-color: white;" id="logout_button">
									<div class="list-group-item list-group-item-action">
										<span class="d-flex align-items-center">
											<span class="text-sm">Log Out</span>
												<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
													 <?php echo csrf_field(); ?>
												</form>
										</span>
									</div>
									</button>
								</div>
							</div>
						</div>
					</li>
				</ul>
				
				<form class="navbar-form" role="search" action="search.html">
					<div class="form-group">
						<input class="form-control" type="text" placeholder="Type and hit enter ...">
						<div class="fa fa-times navbar-form-close" data-search-dismiss=""></div>
					</div>
					<button class="d-none" type="submit">Submit</button>
				</form>
			</nav>
		</header>
		<aside class="aside-container">
			<!-- START Sidebar (left)-->
			<div class="aside-inner">
				<nav class="sidebar" data-sidebar-anyclick-close="">
					<!-- START sidebar nav-->
					<ul class="sidebar-nav">
						<!-- START user info-->
						<!-- END user info-->
						<li class="nav-heading ">
							<span data-localize="sidebar.heading.HEADER">UTAMA</span>
						</li>
						<li class=" ">
							<a href= "<?php echo e(route('index')); ?>" title="Dashboard" >
								<em class="icon-speedometer"></em>
								<span data-localize="sidebar.nav.DASHBOARD">Dashboard</span>
							</a>
						</li>
						
						<li class="nav-heading ">
							<span data-localize="sidebar.heading.COMPONENTS">Komponen</span>
						</li>
						<li class=" ">
							<a href= "<?php echo e(url('lowongan')); ?>" title="Cari Lowongan Kerja" >
								<em class="icon-speedometer"></em>
								<span data-localize="sidebar.nav.DASHBOARD">Cari Lowongan Kerja</span>
							</a>
						</li>
						<li class=" ">
							<a href= "<?php echo e(url('tawaran')); ?>" title="Cari Lowongan Kerja" >
								<em class="icon-speedometer"></em>
								<span data-localize="sidebar.nav.DASHBOARD">Tawaran Kerja</span>
							</a>
						</li>
						<li class=" ">
							<a href= "<?php echo e(url('profil')); ?>" title="Cari Lowongan Kerja" >
								<em class="icon-speedometer"></em>
								<span data-localize="sidebar.nav.DASHBOARD">Edit Profil</span>
							</a>
						</li>
					</ul>
					<!-- END sidebar nav-->
				</nav>
			</div>
			<!-- END Sidebar (left)-->
		</aside>


	<?php echo $__env->yieldContent('content'); ?>
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

</html><?php /**PATH D:\Project\Laravel\SPK\resources\views/layouts/user.blade.php ENDPATH**/ ?>