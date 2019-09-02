<?php $__env->startSection('title','| Lowongan'); ?>
<?php $__env->startSection('soalActive','active'); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript"
    src="<?php echo e(asset('template/material/assets/js/plugins/editors/summernote/summernote.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/forms/styling/uniform.min.js')); ?>">
</script>

<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/core/app.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/pages/editor_summernote.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/ui/ripple.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/pages/form_checkboxes_radios.js')); ?>">
</script>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('header'); ?>
<!-- Page header -->
<div class="page-header">
    <div class="page-header-content">
        <div class="page-title">
            <h4>
                <a href="<?php echo e(url('admin/lowongan')); ?>"><i class="icon-arrow-left52 position-left"></i></a>
                <span class="text-semibold">Admin</span> - Tambah Soal
            </h4>
        </div>

    </div>
</div>
<!-- /page header -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<h6 class="content-group text-semibold">
    Tambah Soal
</h6>
<div class="row">
    <div class="panel panel-flat">
        <div class="panel-heading">
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>
        <form action="<?php echo e(url('admin/soal/create')); ?>" method="POST" class="form-horizontal"
            enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="panel-body">
                <h5 class="panel-title">Pertanyaan</h5>
                <textarea class="summernote" name="pertanyaan">
                </textarea>
                <?php if($errors->has('pertanyaan')): ?>
                <div class="alert bg-danger-400 alert-styled-left">
                    <button type="button" class="close" data-dismiss="alert"><span>×</span><span
                            class="sr-only">Close</span></button>
                    <span class="text-semibold"><?php echo e($errors->first('pertanyaan')); ?>

                </div>
                <?php endif; ?>
                <div class="row">
                    <div class="col-md-2">
                        <h5> Jawaban A.</h5>
                    </div>
                    <div class="col-md-10">
                        <textarea class="summernote" name="a">
                        </textarea>
                        <?php if($errors->has('a')): ?>
                        <div class="alert bg-danger-400 alert-styled-left">
                            <button type="button" class="close" data-dismiss="alert"><span>×</span><span
                                    class="sr-only">Close</span></button>
                            <span class="text-semibold"><?php echo e($errors->first('a')); ?>

                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <h5> Jawaban B.</h5>
                    </div>
                    <div class="col-md-10">
                        <textarea class="summernote" name="b">
                        </textarea>
                        <?php if($errors->has('b')): ?>
                        <div class="alert bg-danger-400 alert-styled-left">
                            <button type="button" class="close" data-dismiss="alert"><span>×</span><span
                                    class="sr-only">Close</span></button>
                            <span class="text-semibold"><?php echo e($errors->first('b')); ?>

                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <h5> Jawaban C.</h5>
                    </div>
                    <div class="col-md-10">
                        <textarea class="summernote" name="c">
                        </textarea>
                        <?php if($errors->has('c')): ?>
                        <div class="alert bg-danger-400 alert-styled-left">
                            <button type="button" class="close" data-dismiss="alert"><span>×</span><span
                                    class="sr-only">Close</span></button>
                            <span class="text-semibold"><?php echo e($errors->first('c')); ?>

                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2">
                        <h5> Jawaban D.</h5>
                    </div>
                    <div class="col-md-10">
                        <textarea class="summernote" name="d" required>
                        </textarea>
                        <?php if($errors->has('d')): ?>
                        <div class="alert bg-danger-400 alert-styled-left">
                            <button type="button" class="close" data-dismiss="alert"><span>×</span><span
                                    class="sr-only">Close</span></button>
                            <span class="text-semibold"><?php echo e($errors->first('d')); ?>

                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2">Kunci Jawaban</label>
                    <div class="col-md-10">

                        <label class="radio-inline">
                            <input type="radio" name="kunci" class="styled"
                                <?php echo e(old('kunci') == "A" ? 'checked="checked' : ""); ?> checked="checked" value="A">
                            Jawaban <b>A</b>
                        </label>

                        <label class="radio-inline">
                            <input type="radio" name="kunci" class="styled" value="B"
                                <?php echo e(old('kunci') == "B" ? 'checked="checked' : ""); ?>>
                            Jawaban <b>B</b>
                        </label>

                        <label class="radio-inline">
                            <input type="radio" name="kunci" class="styled" value="C"
                                <?php echo e(old('kunci') == "C" ? 'checked="checked' : ""); ?>>
                            Jawaban <b>C</b>
                        </label>

                        <label class="radio-inline">
                            <input type="radio" name="kunci" class="styled" value="D"
                                <?php echo e(old('kunci') == "D" ? 'checked="checked' : ""); ?>>
                            Jawaban <b>D</b>
                        </label>
                        <?php if($errors->has('kunci')): ?>
                        <div class="alert bg-danger-400 alert-styled-left">
                            <button type="button" class="close" data-dismiss="alert"><span>×</span><span
                                    class="sr-only">Close</span></button>
                            <span class="text-semibold"><?php echo e($errors->first('kunci')); ?>

                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2">Score</label>
                    <div class="col-lg-10">
                        <input type="number" class="form-control" name="score" min="0" value="<?php echo e(old('score')); ?>"
                            required>
                        <?php if($errors->has('score')): ?>
                        <div class="alert bg-danger-400 alert-styled-left">
                            <button type="button" class="close" data-dismiss="alert"><span>×</span><span
                                    class="sr-only">Close</span></button>
                            <span class="text-semibold"><?php echo e($errors->first('score')); ?>

                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-success"> Submit</button>
            </div>
        </form>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboardMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Data\Project\Laravel\SPK\resources\views/admin/soal/create.blade.php ENDPATH**/ ?>