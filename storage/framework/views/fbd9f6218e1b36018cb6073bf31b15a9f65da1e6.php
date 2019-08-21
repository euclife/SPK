<?php $__env->startSection('title','PT. INTI | Buat Akun'); ?>

<?php $__env->startSection('content'); ?>
<section class="row no-gutter reverse-order">
      <div class="col-one-half middle padding">
        <div class="max-width-s">
          <h5>Salamat Datang!</h5>
          <p class="paragraph">Masukkan identitas kamu untuk mendaftar.</p>
          <form  method="POST" action="<?php echo e(route('register')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
              <label for="name">Nama:</label>
              <input id="name" type="text" name="name" required="" value="<?php echo e(old('name')); ?>">
              <?php if($errors->has('name')): ?>
                    <span class="invalid-feedback" style="color: red">
                      <?php echo e($errors->first('name')); ?>

                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="email">E-Mail:</label>
              <input id="email" type="email" name="email" required="" value="<?php echo e(old('email')); ?>">
              <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" style="color: red">
                                      <?php echo e($errors->first('email')); ?>

                                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input id="password" type="password" name="password">
            </div>
            <div class="form-group">
              <label for="password">Konfirmasi Password:</label>
                <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
               <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" style="color: red">
                                      <?php echo e($errors->first('password')); ?>

                                    </span>
                <?php endif; ?>
            </div>
            <button type="submit" class="button button-primary full-width space-top" >Buat Akun</button>
          </form>
        </div>
        <div class="center max-width-s space-top">
        </div>
        <div class="center max-width-s">
          <span class="muted">Sudah punya akun? </span><a href="<?php echo e(route('login')); ?>">Masuk</a>
        </div>
      </div>
      <div class="col-one-half bg-image-05 featured-image"></div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\Laravel\SPK\resources\views/auth/register.blade.php ENDPATH**/ ?>