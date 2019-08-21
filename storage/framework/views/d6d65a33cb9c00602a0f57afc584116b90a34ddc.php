<?php $__env->startSection('title','| Lowongan'); ?>
<?php $__env->startSection('lowonganActive','active'); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/tables/datatables/datatables.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/forms/selects/select2.min.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/core/app.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/pages/datatables_basic.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/ui/ripple.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('header'); ?>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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
				<?php $__currentLoopData = $lowongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($l->posisi); ?></td>
					<td><?php echo e(Carbon\Carbon::parse($l->tanggal_selesai)->formatLocalized('%d %B %Y')); ?></td>
					<td class="mx-auto text-center"><button type="button" class="btn btn-info btn-lg btn-lowongan" data-id="<?php echo e($l->id_lowongan); ?>" data-posisi="<?php echo e($l->posisi); ?>">Syarat</button></td>
					<td class="mx-auto text-center"><a href="<?php echo e(url('/lowongan/accept', $l->id_lowongan)); ?>" class="btn btn-success btn-lg">Daftar</a></td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
			var url = '<?php echo e(url('api/syaratlowongan/')); ?>/' + id
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboardMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Data\Project\Laravel\SPK\resources\views/pages/user/lowongan.blade.php ENDPATH**/ ?>