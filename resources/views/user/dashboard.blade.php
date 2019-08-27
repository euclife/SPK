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
<div class="panel panel-flat">
	<div class="panel-heading">
		<h5 class="panel-title">Lowongan Yang Tersedia</h5>
		<div class="heading-elements">
			<ul class="icons-list">
				<li><a data-action="collapse"></a></li>
				<li><a data-action="reload"></a></li>
			</ul>
		</div>
	</div>
	<div class="panel-body">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Posisi</th>
					<th>Deadline</th>
					<th>Syarat</th>
					<th class="text-center">Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($lowongan as $l)
				<tr>
					<td>{{ $l->posisi }}</td>
					<td>{{ Carbon\Carbon::parse($l->tanggal_selesai)->formatLocalized('%d %B %Y') }}</td>
					<td class="mx-auto text-center"><button type="button" class="btn btn-info btn-lg btn-lowongan" data-id="{{ $l->id_lowongan  }}" data-posisi="{{ $l->posisi  }}">Syarat</button></td>
					<td class="mx-auto text-center"><a href="{{url('/lowongan/accept', $l->id_lowongan)}}" class="btn btn-success btn-lg">Daftar</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

<div id="mdlSyarat" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h6 class="modal-title" id="modalTitle"></h6>
			</div>

			<div class="modal-body">
				<h6 class="text-semibold">Syarat Pelamar</h6>
				<hr>
				<div id="syarat">
				</div>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$(document).on("click", ".btn-lowongan", function() {
			var id = $(this).data('id');
			var posisi = $(this).data('posisi');
			var url = '{{ url('api/syaratlowongan/') }}/' + id
			$.ajax({
				url: url,
				type: 'GET',
				datatype: 'json',
				success: function(data) {
					$('#syarat').empty();
					$('#modalTitle').empty();
					$('#modalTitle').text(posisi);
					for (var i = 0; i < data.length; i++) {
						$('#syarat').append("<p>" + (i + 1) + " " + data[i].nama_syarat + "</p>");
					}
					$('#mdlSyarat').modal('show');
				}
			});

		});
	});
</script>

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
