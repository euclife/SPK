@extends('layouts.dashboardMaster')
@section('title','| Lowongan')
@section('lowonganActive','active')

@section('script')
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/forms/selects/select2.min.js')}}"></script>

<script type="text/javascript" src="{{asset('template/material/assets/js/core/app.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/pages/datatables_basic.js')}}"></script>

<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/ui/ripple.min.js')}}"></script>
@endsection
@section('header')
<!-- Page header -->
<div class="page-header">
	<div class="page-header-content">
		<div class="page-title">
			<h4>
				<i class="icon-arrow-left52 position-left"></i>
				<span class="text-semibold">Home</span> - Lowongan
				<small class="display-block">List Lowongan yang tersedia!</small>
			</h4>
		</div>

	</div>
</div>
<!-- /page header -->
@endsection

@section('content')
<div class="panel panel-flat">
	<div class="panel-heading">
		<h5 class="panel-title">Pastikan anda mendaftar dan mengikuti tahapan tahapan yang kami berikan</h5>
		<div class="heading-elements">
			<ul class="icons-list">
				<li><a data-action="collapse"></a></li>
				<li><a data-action="reload"></a></li>
			</ul>
		</div>
	</div>
	<div class="panel-body">
		<table class="table datatable-basic table-bordered table-striped table-hover">
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
					<td class="mx-auto text-center"><a href="{{url('/lowongan/accept', $l->id_lowongan)}}" class="btn btn-success btn-lg btn-lowongan">Daftar</a></td>
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
			var url = '{{ url('
			api / syaratlowongan / ') }}/' + id
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
@endsection
