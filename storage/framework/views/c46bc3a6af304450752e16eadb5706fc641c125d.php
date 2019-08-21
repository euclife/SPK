<?php $__env->startSection('title','| Profile'); ?>
<?php $__env->startSection('profileActive','active'); ?>

<?php $__env->startSection('script'); ?>
  <script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/notifications/jgrowl.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/ui/moment/moment.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/pickers/daterangepicker.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/pickers/anytime.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/pickers/pickadate/picker.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/pickers/pickadate/picker.date.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/pickers/pickadate/picker.time.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/pickers/pickadate/legacy.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/forms/styling/uniform.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/forms/selects/select2.min.js')); ?>"></script>

  <script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/media/fancybox.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/pages/components_thumbnails.js')); ?>"></script>

  <script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/forms/styling/switch.min.js')); ?>"></script>

  <script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/uploaders/dropzone.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/core/app.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/pages/form_select2.js')); ?>"></script>
  
  <script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/pages/picker_date.js')); ?>"></script>


   <script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/pages/uploader_dropzone.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/ui/ripple.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header'); ?>
<!-- Page header -->
<div class="page-header">
   <div class="page-header-content">
      <div class="page-title">
         <h4>
            <i class="icon-arrow-left52 position-left"></i>
            <span class="text-semibold">Home</span> - Profile
         </h4>
      </div>

   </div>
</div>
<!-- /page header -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<h6 class="content-group text-semibold">
   My Profile
   <small class="display-block">Masukan Data Anda dengan benar!</small>
</h6>
<div class="row">
   <div class="col-md-3">
    <?php if(Auth::user()->foto != ""): ?>
    <div class="col-md-12">
      <div class="thumbnail">
                  <h6 class="text-semibold no-margin">Foto Profil</h6>

              <div class="thumb thumb-rounded thumb-slide">
                <img src="<?php echo e(asset($foto)); ?>" alt="">
                <div class="caption">
                  <span>
                <a href="<?php echo e(asset($foto)); ?>" class="btn bg-green-300 btn-icon" data-popup="lightbox"><i class="icon-zoomin3"></i></a>
                    
                  </span>
                </div>
              </div>
            
                <div class="caption text-center">
                  <h6 class="text-semibold no-margin"><?php echo e($user->name); ?></h6>
                  <ul class="icons-list mt-15">
                          </ul>
                </div>
              </div>
    </div>
   <?php endif; ?>
    <div class="col-md-12">
       <div class="panel panel-flat border-top-blue">
         <div class="panel-heading">
            <h6 class="panel-title"><span class="text-semibold">Mengganti</span> Foto Profil</h6>
         </div>

         <div class="panel-body">
           <form action="<?php echo e(url('profileFoto')); ?>" class="dropzone" id="dropzone_foto" method="POST" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
           </form>
         </div>
      </div>
    </div>
   </div>
   <div class="col-md-9">
     <div class="panel panel-flat">
          <div class="panel-heading">
            <h5 class="panel-title">Identitas</h5>
            <div class="heading-elements">
              <ul class="icons-list">
              </ul>
            </div>
          </div>

          <div class="panel-body">
            <p class="content-group-lg">Harap Masukkan data yang sebenar-benarnya. Kami tidak bertanggung jawab bila di waktu mendatang terjadi pelanggaran bilamana data yang di masukkan tidak benar</p>

            <form class="form-horizontal" action="<?php echo e(url('profile')); ?>" method="POST">
              <?php echo csrf_field(); ?>
              <fieldset class="content-group">
                <legend class="text-bold">Identitas Diri</legend>

                <div class="form-group">
                  <label class="control-label col-lg-2">Nama Lengkap</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control text-uppercase" name="name" value="<?php echo e($user->name); ?>">
                    <?php if($errors->has('name')): ?>
                      <div class="form-control-feedback">
                        <i class="icon-cancel-circle2"></i>
                      </div>
                      <span class="help-block text-danger"><?php echo e($errors->first('name')); ?></span>
                    <?php endif; ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2">No Telepon</label>
                  <div class="col-lg-10">
                    <input type="numeric" class="form-control text-uppercase" name="no_telp" value="<?php echo e($user->no_telp); ?>">
                    <?php if($errors->has('no_telp')): ?>
                      <div class="form-control-feedback">
                        <i class="icon-cancel-circle2"></i>
                      </div>
                      <span class="help-block text-danger"><?php echo e($errors->first('no_telp')); ?></span>
                    <?php endif; ?>
                  </div>
                </div>

                 <div class="form-group">
                  <label class="control-label col-lg-2">Tempat Lahir</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control text-uppercase" name="tempat_lahir" value="<?php echo e($user->tempat_lahir); ?>" >
                    <?php if($errors->has('tempat_lahir')): ?>
                      <div class="form-control-feedback">
                        <i class="icon-cancel-circle2"></i>
                      </div>
                      <span class="help-block text-danger"><?php echo e($errors->first('tempat_lahir')); ?></span>
                    <?php endif; ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2">Tanggal Lahir</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="tgl_lahir" placeholder="" name="tgl_lahir" value="<?php echo e($user->tgl_lahir); ?>">
                    <?php if($errors->has('tgl_lahir')): ?>
                      <div class="form-control-feedback">
                        <i class="icon-cancel-circle2"></i>
                      </div>
                      <span class="help-block text-danger"><?php echo e($errors->first('tgl_lahir')); ?></span>
                    <?php endif; ?>
                  </div>
                </div>

                 <div class="form-group">
                  <label class="control-label col-lg-2"> Jenis Kelamin </label>
                  <div class="col-lg-10">
                   <label class="radio-inline radio-right">
                    <input type="radio" name="jenis_kelamin" <?php echo e($user->jenis_kelamin == "PRIA" || old('jenis_kelamin') == ""? "checked='checked'" : ""); ?> value="PRIA">
                    Pria
                  </label>

                  <label class="radio-inline radio-right">
                    <input type="radio" name="jenis_kelamin" value="WANITA"  <?php echo e($user->jenis_kelamin == "WANITA" ? "checked='checked'" : ""); ?>>
                    Wanita
                  </label>
                    <?php if($errors->has('jenis_kelamin')): ?>
                      <div class="form-control-feedback">
                        <i class="icon-cancel-circle2"></i>
                      </div>
                      <span class="help-block text-danger"><?php echo e($errors->first('jenis_kelamin')); ?></span>
                    <?php endif; ?>
                  </div>
                </div>

                 <div class="form-group">
                  <label class="control-label col-lg-2">Alamat</label>
                  <div class="col-lg-10">
                    <textarea class="form-control" name="alamat" ><?php echo e($user->alamat); ?></textarea>
                    <?php if($errors->has('alamat')): ?>
                      <div class="form-control-feedback">
                        <i class="icon-cancel-circle2"></i>
                      </div>
                      <span class="help-block text-danger"><?php echo e($errors->first('alamat')); ?></span>
                    <?php endif; ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2">Agama</label>
                  <div class="col-lg-10">
                    <select class="select-menu-color" name="agama" required="">
                        <option value="ISLAM" <?php echo e($user->agama == "ISLAM" ? "selected=''" : ""); ?>>ISLAM</option>
                        <option value="KRISTEN" <?php echo e($user->agama == "KRISTEN" ? "selected=''" : ""); ?>>KRISTEN</option>
                        <option value="HINDU" <?php echo e($user->agama == "HINDU" ? "selected=''" : ""); ?>>HINDU</option>
                        <option value="BUDHA" <?php echo e($user->agama == "BUDHA" ? "selected=''" : ""); ?>>BUDHA</option>
                        <option value="KONGHUCU" <?php echo e($user->agama == "KONGHUCU" ? "selected=''" : ""); ?>>KONGHUCU</option>
                    </select>
                    <?php if($errors->has('agama')): ?>
                      <div class="form-control-feedback">
                        <i class="icon-cancel-circle2"></i>
                      </div>
                      <span class="help-block text-danger"><?php echo e($errors->first('agama')); ?></span>
                    <?php endif; ?>
                  </div>
                </div>


              </fieldset>
              <div class="text-right">
                <button type="submit" class="btn btn-primary">Simpan </button>
              </div>
            </form>
          </div>
        </div>
   </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboardMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Data\Project\Laravel\SPK\resources\views/pages/user/form/profil.blade.php ENDPATH**/ ?>