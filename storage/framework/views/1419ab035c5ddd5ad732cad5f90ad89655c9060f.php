<?php $__env->startSection('title','| Detail Pelamar'); ?>
<?php $__env->startSection('lowonganActive','active'); ?>

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
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/media/fancybox.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/pages/components_thumbnails.js')); ?>"></script>
<script src="https://cdnjs.com/libraries/pdf.js"></script>


<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/ui/ripple.min.js')); ?>"></script>
<!-- /theme JS files -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('header'); ?>
<!-- Page header -->
<div class="page-header">
    <div class="page-header-content">
        <div class="page-title">
            <h4>
                <a href="<?php echo e(url('admin/lowongan')); ?>"><i class="icon-arrow-left52 position-left"></i></a>
                <span class="text-semibold">Admin</span> - Detail Pelamar
                <small class="display-block">Hello, <?php echo e(Auth::user()->name); ?>!</small>
            </h4>
        </div>

    </div>
</div>
<!-- /page header -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="panel panel-flat">
    <div class="panel-heading">
        <h6 class="panel-title">Detail Pelamar<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="reload"></a></li>
                <li><a data-action="close"></a></li>
            </ul>
        </div>
    </div>

    <div class="panel-body">
        <div class="tabbable tab-content-bordered">
            <ul class="nav nav-tabs bg-green-600">
                <li class="active"><a href="#colored-tab1" data-toggle="tab" class="legitRipple"
                        aria-expanded="true">Identitas</a></li>
                <li class=""><a href="#colored-tab2" data-toggle="tab" class="legitRipple" aria-expanded="false">CV</a>
                </li>
                <li class=""><a href="#colored-tab3" data-toggle="tab" class="legitRipple" aria-expanded="false">Lamaran</a>
                </li>
                <li class=""><a href="#colored-tab4" data-toggle="tab" class="legitRipple" aria-expanded="false">Ijasah</a>
                </li>
            </ul>

            <div class="tab-content ">
                <div class="tab-pane has-padding active" id="colored-tab1">
                    <?php echo $__env->make('admin.pelamar.identitas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

                <div class="tab-pane has-padding" id="colored-tab2">
                    <?php echo $__env->make('admin.pelamar.cv', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
                </div>

                <div class="tab-pane has-padding" id="colored-tab3">
                    <?php echo $__env->make('admin.pelamar.lamaran', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
                </div>

                <div class="tab-pane has-padding" id="colored-tab4">
                    <?php echo $__env->make('admin.pelamar.ijasah', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboardMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Data\Project\Laravel\SPK\resources\views/admin/pelamar/show.blade.php ENDPATH**/ ?>