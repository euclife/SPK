@extends('layouts.dashboardMaster')
@section('title','| Dashboard')
@section('dashboardActive','active')

@section('script')

<!-- Theme JS files -->
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/ui/moment/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/pickers/daterangepicker.js')}}"></script>

<script type="text/javascript" src="{{asset('template/material/assets/js/core/app.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/pages/dashboard.js')}}"></script>

<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/ui/ripple.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/media/fancybox.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/pages/components_thumbnails.js')}}"></script>

@endsection

@section('header')
<!-- Page header -->
<div class="page-header">
	<div class="page-header-content">
		<div class="page-title">
			<h4>
				<i class="icon-arrow-left52 position-left"></i>
				<span class="text-semibold">Home</span> - Dashboard
				<small class="display-block">Hello, {{ Auth::user()->name }}!</small>
			</h4>
		</div>

	</div>
</div>
<!-- /page header -->
@endsection

@section('content')
@if ($status != "clear")
<div class="row">
	<div class="col-lg-12">

		<!-- Members online -->
		<div class="panel bg-teal-400">
			<div class="panel-body">
				<div class="heading-elements">
					<span class="heading-text badge bg-teal-800"></span>
				</div>

				<h1 class="no-margin">Mohon Lengkapi Data Anda</h1>
				<a href="{{url('profile')}}" class="text-white">Klik di Sini untuk melengkapi profil anda</a>
			</div>

			<div class="container-fluid">
				<div id="members-online"></div>
			</div>
		</div>
		<!-- /members online -->

	</div>
</div>
 @else
<div class="row">
	<div class="col-lg-12">
		<!-- Marketing campaigns -->
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h6 class="panel-title">Status Lamar</h6>
				<div class="heading-elements">
				</div>
			</div>

			<div class="table-responsive">
				<table class="table table-lg text-nowrap">
					<thead>
						<tr>
							<th class="col-md-5">Posisi</th>
							<th class="col-md-5">Status</th>
							<th class="col-md-2">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="col-md-5">
								<div class="media-left">
									<div id="campaigns-donut"></div>
								</div>

								<div class="media-left">
									<h5 class="text-semibold no-margin">Web Programmer</h5>
									<ul class="list-inline list-inline-condensed no-margin">
										<li>
											<span class="status-mark border-success"></span>
										</li>
										<li>
											<span class="text-muted">May 12, 12:30 am</span>
										</li>
									</ul>
								</div>
							</td>

							<td class="col-md-5">
								<div class="media-left">
									<div id="campaign-status-pie"></div>
								</div>

								<div class="media-left">
									<h5 class="text-semibold no-margin">Lolos Seleksi Kedua
									</h5>
									<ul class="list-inline list-inline-condensed no-margin">
										<li>
											<span class="status-mark border-danger"></span>
										</li>
										<li>
											<span class="text-muted">Jun 4, 4:00 am</span>
										</li>
									</ul>
								</div>
							</td>

							<td class="text-right col-md-2">
								<a href="{{url('test')}}" class="btn bg-danger-300"><i class="icon-statistics position-left"></i> Test Online Sekarang</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


@endif
<div class="row">
	<div class="col-lg-12 col-sm-6">
		<div class="thumbnail">
			<div class="thumb">
				<img src="{{asset('image/Tahapan_Penyeleksian.png')}}" alt="">
			</div>
		</div>
	</div>
</div>


@endsection
