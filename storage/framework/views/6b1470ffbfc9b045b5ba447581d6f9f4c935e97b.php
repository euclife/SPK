<?php $__env->startSection('title','| Daftar'); ?>
<?php $__env->startSection('lowonganActive','active'); ?>

<?php $__env->startSection('script'); ?>

<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/forms/styling/switchery.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/forms/styling/uniform.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/forms/styling/switch.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/forms/selects/select2.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/forms/selects/bootstrap_multiselect.js')); ?>">
</script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/forms/inputs/autosize.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/forms/inputs/formatter.min.js')); ?>"></script>
<script type="text/javascript"
    src="<?php echo e(asset('template/material/assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/forms/inputs/typeahead/handlebars.min.js')); ?>">
</script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/forms/inputs/passy.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/forms/inputs/maxlength.min.js')); ?>"></script>
 <script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/forms/inputs/formatter.min.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/pages/form_inputs.js')); ?>"></script>

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

   <div class="col-md-12">
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

            <form class="form-horizontal" action="<?php echo e(url('pelamar/accept')); ?>" method="POST" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              <input type="hidden" value="<?php echo e($lowongan->id_lowongan); ?>" name="id">
              <fieldset class="content-group">
                <legend class="text-bold">Identitas Diri</legend>

                <div class="form-group">
                  <label class="control-label col-lg-2">SURAT LAMARAN</label>
                  <div class="col-lg-10">
                    <input type="file" class="file-styled-primary" name="surat_lamaran" required>
                    <?php if($errors->has('surat_lamaran')): ?>
                      <div class="form-control-feedback">
                        <i class="icon-cancel-circle2"></i>
                      </div>
                      <span class="help-block text-danger"><?php echo e($errors->first('surat_lamaran')); ?></span>
                    <?php endif; ?>
                  </div>
                </div>
                

                <div class="form-group">
                  <label class="control-label col-lg-2">CV</label>
                  <div class="col-lg-10">
                    <input type="file" class="file-styled-primary" name="cv" required>
                    <?php if($errors->has('cv')): ?>
                      <div class="form-control-feedback">
                        <i class="icon-cancel-circle2"></i>
                      </div>
                      <span class="help-block text-danger"><?php echo e($errors->first('cv')); ?></span>
                    <?php endif; ?>
                  </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Ijasah</label>
                    <div class="col-lg-10">
                        <input type="file" class="file-styled-primary" name="ijasah" required>
                        <?php if($errors->has('ijasah')): ?>
                        <div class="form-control-feedback">
                            <i class="icon-cancel-circle2"></i>
                        </div>
                        <span class="help-block text-danger"><?php echo e($errors->first('ijasah')); ?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2">IPK</label>
                  <div class="col-lg-10 row">
                    <div class="col-md-3">
                      <input type="number" class="form-control" pattern="([0-9].[0-9])x" name="ipk"
                          id="ipk" required>
                    </div>
                    <?php if($errors->has('ipk')): ?>
                      <div class="form-control-feedback">
                        <i class="icon-cancel-circle2"></i>
                      </div>
                      <span class="help-block text-danger"><?php echo e($errors->first('ipk')); ?></span>
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

<script>
  	$(function() {

  	$('[name="nip"]').formatter({
  	pattern: '<?php echo('{{99999999}} {{999999}} {{9}} {{999}}')?>'
  	}); 


  	});
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboardMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Data\Project\Laravel\SPK\resources\views/user/form/accept.blade.php ENDPATH**/ ?>