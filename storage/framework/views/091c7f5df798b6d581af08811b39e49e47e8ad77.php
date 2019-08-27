<?php $__env->startSection('title','| Lowongan'); ?>
<?php $__env->startSection('lowonganActive','active'); ?>

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
              <a href="<?php echo e(url('admin/lowongan')); ?>"><i class="icon-arrow-left52 position-left"></i></a>
                <span class="text-semibold">Admin</span> - Tambah Lowongan
            </h4>
        </div>

    </div>
</div>
<!-- /page header -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<h6 class="content-group text-semibold">
    Tambah Data Lowongan
</h6>
<div class="row">

    <div class="col-md-12">
        <div class="panel panel-flat border-top-teal">
            <div class="panel-heading">
                <div class="heading-elements">
                    <ul class="icons-list">
                    </ul>
                </div>
            </div>

            <div class="panel-body">

                <form class="form-horizontal" action="<?php echo e(url('admin/lowongan/create')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <fieldset class="content-group">

                        <div class="form-group">
                            <label class="control-label col-lg-2">Posisi</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control text-uppercase" name="posisi" required placeholder="Masukkan Posisi Lowongan" value="<?php echo e(old('posisi')); ?>">
                                <?php if($errors->has('posisi')): ?>
                                <div class="form-control-feedback">
                                    <i class="icon-cancel-circle2"></i>
                                </div>
                                <span class="help-block text-danger"><?php echo e($errors->first('posisi')); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Tanggal Berakhir</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="tgl_lahir" placeholder="Masukkan Tanggal Selesai" name="tanggal_selesai" value="<?php echo e(old('tanggal_selesai')); ?>" required>
                                <?php if($errors->has('tanggal_selesai')): ?>
                                <div class="form-control-feedback">
                                    <i class="icon-cancel-circle2"></i>
                                </div>
                                <span class="help-block text-danger"><?php echo e($errors->first('tanggal_selesai')); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Keterangan</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="tgl_lahir" placeholder="Masukkan Keterangan Lowongan" name="keterangan" value="<?php echo e(old('keterangan')); ?>">
                                <?php if($errors->has('keterangan')): ?>
                                <div class="form-control-feedback">
                                    <i class="icon-cancel-circle2"></i>
                                </div>
                                <span class="help-block text-danger"><?php echo e($errors->first('keterangan')); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>



                    </fieldset>
                    <fieldset class="content-group">
                        <legend class="text-bold">Syarat</legend>



                        <div class="form-group">
                          <table class="table">
                            <thead>
                              <tr>
                                <th class="col-md-9">Syarat</th>
                                <th class="col-md-3">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td><input type="text" class="form-control text-uppercase" name="syarat[]" placeholder="Masukkan Syarat Lowongan" required></td>
                                <td><button type="button" name="add" id="add" class="text-right btn btn-primary btn-icon btn-rounded legitRipple">
                                  <i class="icon-plus2"></i>
                                </button></td>
                              </tr>
                            </tbody>
                          </table>
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
<script type="text/javascript">
  $(document).ready(function () {
      var count = 1;

      function dynamic_syarat(number)
      {
          var html = '<tr id="row'+number+'">';
          html+='<td><input type="text" class="form-control text-uppercase" name="syarat[]" placeholder="Masukkan Syarat Lowongan" required></td>';

          if (number > 1) {
            html+= '<td >';
            html += '<button type="button" class="text-right btn btn-danger btn-icon btn-rounded btn_remove legitRipple" id="'+number+'" name="remove">';
          html += '    <i class="icon-minus2"></i></button>';
            html += '</td>';
            html+="</tr>";
            $('tbody').append(html);
          }else{
            html += '<td>';
            html += '<button type="button" name="add" id="add" class="text-right btn btn-primary btn-icon btn-rounded legitRipple">';
              html += '<i class="icon-plus2"></i>';
            html += '</button>';
            html += '</td></tr>';
            $('tbody').html(html);
          }
      }
      $('#add').click(function() {
        count++;
        dynamic_syarat(count);
      });

      $(document).on('click', '.btn_remove', function(){
					var button_id = $(this).attr("id");
					$('#row'+button_id+'').remove();
				});
  });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboardMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Data\Project\Laravel\SPK\resources\views/admin/lowongan/create.blade.php ENDPATH**/ ?>