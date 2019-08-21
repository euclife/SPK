<?php $__env->startSection('title','PT. INTI | Auth'); ?>

<?php $__env->startSection('content'); ?>
<section class="row no-gutter reverse-order">
  <div class="col-one-half middle padding">
    <div class="max-width-s">
      <h5>Harap Verifikasi E-Mail Anda.</h5>
      <p class="paragraph">Periksa Email anda.</p>
      <p class="paragraph">Jika anda tidak menerima email verifikasi, <a href="<?php echo e(route('verification.resend')); ?>">klik disini untuk mengirim email verifikasi ulang</a>.</p>
      <?php if(session('resent')): ?>
      <div class="alert alert-success" role="alert">
        <?php echo e(__('Tautan verifikasi baru telah di kirim ke alamat E-mail anda.')); ?>

    </div>
    <?php endif; ?>
    <?php if(auth()->guard()->guest()): ?>
    
    <?php else: ?>
    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
        <?php echo csrf_field(); ?>
    </form>
    <a  class="button button-primary space-top" href="<?php echo e(route('logout')); ?>"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();" >Logout</a>
    <?php endif; ?>
</div>
</div>

<div class="col-one-half bg-image-04 featured-image"></div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\Laravel\SPK\resources\views/auth/verify.blade.php ENDPATH**/ ?>