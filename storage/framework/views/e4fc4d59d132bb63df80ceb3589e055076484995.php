<?php $__env->startSection('title','| Dashboard Admin'); ?>
<?php $__env->startSection('psikotestActive','active'); ?>

<?php $__env->startSection('script'); ?>

<!-- Theme JS files -->
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/visualization/d3/d3.min.js')); ?>">
</script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/visualization/d3/d3_tooltip.js')); ?>">
</script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/forms/styling/switchery.min.js')); ?>">
</script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/forms/styling/uniform.min.js')); ?>">
</script>
<script type="text/javascript"
    src="<?php echo e(asset('template/material/assets/js/plugins/forms/selects/bootstrap_multiselect.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/ui/moment/moment.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/pickers/daterangepicker.js')); ?>">
</script>
<link href="<?php echo e(asset('template/material/assets/css/icons/fontawesome/styles.min.css')); ?>" rel="stylesheet"
    type="text/css">
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/core/app.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/pages/dashboard.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/ui/ripple.min.js')); ?>"></script>
<!-- /theme JS files -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('header'); ?>
<!-- Page header -->
<div class="page-header">
    <div class="page-header-content">
        <div class="page-title">
            <h4>
                <i class="icon-arrow-left52 position-left"></i>
                <span class="text-semibold">Admin</span> - Psikotest
                <small class="display-block">Hello, <?php echo e(Auth::user()->name); ?>!</small>
            </h4>
        </div>

    </div>
</div>
<!-- /page header -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Dashboard content -->
<div class="panel panel-flat">
    <div class="panel-heading">
        <a href="<?php echo e(url('admin/lowongan/create')); ?>" class="btn btn-primary"> <i class="icon-plus3"></i> Tambah
            Lowongan</a>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="reload"></a></li>
            </ul>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-hover" id="lowongan">
            <thead class="bg-teal-400">
                <tr>
                    <th>No</th>
                    <th>Posisi</th>
                    <th>Deadline</th>
                    <th>Keterangan</th>
                    <th>Syarat</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>

<!-- /dashboard content -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboardMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Data\Project\Laravel\SPK\resources\views/admin/soal/psikotest/index.blade.php ENDPATH**/ ?>