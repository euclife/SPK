<?php $__env->startSection('title','| Dashboard Admin'); ?>
<?php $__env->startSection('dashboardActive','active'); ?>

<?php $__env->startSection('script'); ?>

<!-- Theme JS files -->
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/visualization/d3/d3.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/visualization/d3/d3_tooltip.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/forms/styling/switchery.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/forms/styling/uniform.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/forms/selects/bootstrap_multiselect.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/ui/moment/moment.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/pickers/daterangepicker.js')); ?>"></script>
<link href="<?php echo e(asset('template/material/assets/css/icons/fontawesome/styles.min.css')); ?>" rel="stylesheet" type="text/css">
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
                <span class="text-semibold">Admin</span> - Detail Lowongan
                <small class="display-block">Hello, <?php echo e(Auth::user()->name); ?>!</small>
            </h4>
        </div>

    </div>
</div>
<!-- /page header -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Dashboard content -->
<div class="row">
    <div class="col-lg-8">
        <!-- Marketing campaigns -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h6 class="panel-title">Detail Lowongan</h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#"><i class="icon-sync"></i> Update data</a></li>
                                <li class="divider"></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-lg text-nowrap">
                    <thead class="bg-grey">
                        <tr>
                            <th>Posisi</th>
                            <th>Pelamar</th>
                            <th>Deadline</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="media-left">
                                    <div id="campaigns-donut"></div>
                                </div>

                                <div class="media-left">
                                    <h5 class="text-semibold no-margin">Web Developer</h5>
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

                            <td>
                                <div class="media-left">
                                    <div id="campaign-status-pie"></div>
                                </div>

                                <div class="media-left">
                                    <h5 class="text-semibold no-margin">3</h5>
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
                            <td>
                                <div class="media-left">
                                    <div id="campaign-status-pie"></div>
                                </div>

                                <div class="media-left">
                                    <ul class="list-inline list-inline-condensed no-margin">
                                        <li>
                                            <span class="status-mark border-danger"></span>
                                        </li>
                                        <li>
                                            <span class="text-muted">Aug 4, 4:00 am</span>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /marketing campaigns -->
    <div class="col-md-2">
        <!-- Members online -->
        <div class="panel bg-teal-400">
            <div class="panel-body">
                <div class="heading-elements" style="font-size:30px">
                    <i class="fa fa-users"></i>
                </div>
                <h3 class="no-margin">6</h3>
                Pelamar
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <!-- Members online -->
        <div class="panel bg-danger-400">
            <div class="panel-body">
                <div class="heading-elements" style="font-size:30px">
                    <i class="fa fa-tasks"></i>
                </div>
                <h3 class="no-margin">3</h3>
                Tahap 1
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <!-- Members online -->
        <div class="panel bg-warning-400">
            <div class="panel-body">
                <div class="heading-elements" style="font-size:30px">
                    <i class="fa fa-tasks"></i>
                </div>
                <h3 class="no-margin">2</h3>
                Tahap 2
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <!-- Members online -->
        <div class="panel bg-success-400">
            <div class="panel-body">
                <div class="heading-elements" style="font-size:30px">
                    <i class="fa fa-tasks"></i>
                </div>
                <h3 class="no-margin">1</h3>
                Lolos
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h6 class="panel-title">Pelamar Tahap 1</h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#"><i class="icon-sync"></i> Update data</a></li>
                                <li class="divider"></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-lg text-nowrap">
                    <thead class="bg-danger">
                        <tr>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>IPK</th>
                            <th>Point</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="<?php echo e(url('admin/profile/1')); ?>"> MaulAna Sutejo </a></td>
                            <td> 21</td>
                            <td> 3,8</td>
                            <td> 4</td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo e(url('admin/profile/1')); ?>"> Chandra Ramdhan </a></td>
                            <td> 25</td>
                            <td> 3,8</td>
                            <td> 3</td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo e(url('admin/profile/1')); ?>"> Budi </a></td>
                            <td> 24</td>
                            <td> 3,8</td>
                            <td> 4</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">

        <div class="panel panel-flat">
            <div class="panel-heading">
                <h6 class="panel-title">Pelamar Tahap 2</h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#"><i class="icon-sync"></i> Update data</a></li>
                                <li class="divider"></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-lg text-nowrap">
                    <thead class="bg-warning">
                        <tr>
                            <th>Nama</th>
                            <th>Nilai Tes</th>
                            <th>Point</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> Maul</td>
                            <td> 24</td>
                            <td> 6</td>
                        </tr>
                        <tr>
                            <td> Bambang</td>
                            <td> 25</td>
                            <td> 6</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">

        <div class="panel panel-flat">
            <div class="panel-heading">
                <h6 class="panel-title">Lolos</h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#"><i class="icon-sync"></i> Update data</a></li>
                                <li class="divider"></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-lg text-nowrap">
                    <thead class="bg-success">
                        <tr>
                            <th>Nama</th>
                            <th>Point</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> Muhammad Maul</td>
                            <td> 8</td>
                            <td class="text-right col-md-2">
                                <a href="<?php echo e(url('admin/profil/1')); ?>" class="btn bg-indigo-300"><i class="icon-user position-left"></i> View Profile</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /dashboard content -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboardMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Data\Project\Laravel\SPK\resources\views/pages/admin/Lowongan/detail.blade.php ENDPATH**/ ?>