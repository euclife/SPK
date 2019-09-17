<?php $__env->startSection('title','| Detail Lowongan'); ?>
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
                <a href="<?php echo e(url('admin/lowongan')); ?>"><i class="icon-arrow-left52 position-left"></i></a>
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
    <div class="col-lg-9 row">
        <div class="col-lg-12">

            <!-- Marketing campaigns -->
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h6 class="panel-title">Detail Lowongan</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i>
                                    <span class="caret"></span></a>
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
                                <th>Keterangan</th>
                                <th>Deadline</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="media-left">
                                        <h5 class="text-semibold no-margin"><?php echo e($lowongan->posisi); ?></h5>
                                    </div>
                                </td>

                                <td>

                                    <div class="media-left">
                                        <h6 class="text-semibold no-margin"><?php echo e($lowongan->keterangan); ?></h6>
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
                                                <span class="text-muted" style="font-size:20px">
                                                    <?php echo e(Carbon\Carbon::parse($lowongan->tanggal_selesai)->formatLocalized('%d %B %Y')); ?>

                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <a href="<?php echo e(url('admin/lowongan/compile')); ?>/<?php echo e($lowongan->id_lowongan); ?>" class="btn btn-danger">Kalkulasikan</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-flat border-top-green">
                <div class="table-responsive">
                    <table class="table table-lg text-nowrap text-center">
                        <thead class="bg-green-700 ">
                            <tr>
                                <th class="text-center">Umur</th>
                                <th class="text-center">IPK</th>
                                <th class="text-center">Tes Online</th>
                                <th class="text-center">CV</th>
                                <th class="text-center">Ijasah</th>
                            </tr>
                        </thead>
                        <tbody>
                           <tr>
                               <td>20 - 22 = 0,5</td>
                               <td>> 3.00 = 0,5</td>
                               <td>1 soal benar =  0,1</td>
                               <td> sesuai = 0,5</td>
                               <td> sesuai = 0,5</td>
                           </tr>
                            <tr>
                                <td>23 - 25 = 0,3</td>
                                <td>< 3.00 = 0,3</td>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-flat border-top-orange">
                <div class="panel-heading">
                    <h6 class="panel-title">Pembobotan Nilai</h6>
                </div>
                <div class="table-responsive">
                    <table class="table table-lg text-nowrap text-center">
                        <thead class="bg-orange-800 ">
                            <tr>
                                <th class="text-center" rowspan="2">Calon Pegawai</th>
                                <th class="text-center" colspan="5">Kriteria</th>
                                <th class="text-center bg-purple" colspan="5">Hasil</th>
                            </tr>
                            <tr>
                                <th class="text-center">C1</th>
                                <th class="text-center">C2</th>
                                <th class="text-center">C3</th>
                                <th class="text-center">C4</th>
                                <th class="text-center">C5</th>
                                <th class="text-center bg-purple">C1</th>
                                <th class="text-center bg-purple">C2</th>
                                <th class="text-center bg-purple">C3</th>
                                <th class="text-center bg-purple">C4</th>
                                <th class="text-center bg-purple">C5</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $__currentLoopData = $pelamar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                  <td><?php echo e($item->user->name); ?></td>
                                  <?php if($item->nilai != null): ?>
                                  <td><?php echo e($item->nilai->c1); ?></td>
                                  <td><?php echo e($item->nilai->c2); ?></td>
                                  <td><?php echo e($item->nilai->c3); ?></td>
                                  <td><?php echo e($item->nilai->c4); ?></td>
                                  <td><?php echo e($item->nilai->c5); ?></td>
                                  <td><?php echo e($item->nilai->hasil_c1); ?></td>
                                  <td><?php echo e($item->nilai->hasil_c2); ?></td>
                                  <td><?php echo e($item->nilai->hasil_c3); ?></td>
                                  <td><?php echo e($item->nilai->hasil_c4); ?></td>
                                  <td><?php echo e($item->nilai->hasil_c5); ?></td>
                                  <?php else: ?>
                                  <td>-</td>
                                  <td>-</td>
                                  <td>-</td>
                                  <td>-</td>
                                  <td>-</td>
                                  <td>-</td>
                                  <td>-</td>
                                  <td>-</td>
                                  <td>-</td>
                                  <td>-</td>
                                  <?php endif; ?>
                                
                              </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /marketing campaigns -->
    <div class="col-md-3">
        <!-- Members online -->
        <div class="col-md-12">
            <div class="panel bg-teal-400">
                <div class="panel-body">
                    <div class="heading-elements" style="font-size:30px">
                        <i class="fa fa-users"></i>
                    </div>
                    <h3 class="no-margin"><?php echo e(count($pelamar)); ?></h3>
                    Pelamar
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-flat border-top-indigo">
                <div class="panel-heading">
                    <h6 class="panel-title">Nilai Bobot Minimal</h6>
                </div>

                <div class="table-responsive">
                    <table class="table table-lg text-nowrap text-center">
                        <thead class="bg-indigo-700 ">
                            <tr >
                                <th class="text-center">Kriteria</th>
                                <th class="text-center">Bobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php ($totalBobot = 0); ?>
                            <?php $__currentLoopData = $bobot; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($value->kriteria); ?></td>
                                <td><?php echo e($value->bobot); ?></td>
                            </tr>
                            <?php ($totalBobot += $value->bobot); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot class="text-center bg-indigo-300">
                            <tr>
                                <th class="text-center">Total</th>
                                <th class="text-center"><?php echo e($totalBobot); ?></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-flat border-top-success">
                <div class="panel-heading">
                    <h6 class="panel-title">Nilai Akhir</h6>
                </div>

                <div class="table-responsive">
                    <table class="table table-lg text-nowrap text-center">
                        <thead class="bg-success ">
                            <tr>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php $__currentLoopData = $hasil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <tr>
                                   <td><a href="<?php echo e(url('admin/profile')); ?>/<?php echo e($item->id); ?>"><?php echo e($item->user->name); ?></a>
                                   </td>
                                   <?php if($item->nilai != null): ?>
                                   <td><?php echo e($item->nilai->nilai); ?></td>
                                    <?php else: ?>
                                    <td>-</td>
                                   <?php endif; ?>
                               </tr>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- /dashboard content -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboardMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Data\Project\Laravel\SPK\resources\views/admin/lowongan/detail.blade.php ENDPATH**/ ?>