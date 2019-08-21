<?php $__env->startSection('title','PT. INTI | Masuk'); ?>

<?php $__env->startSection('content'); ?>
   <section class="row no-gutter reverse-order">
      <div class="col-one-half middle padding">
        <div class="max-width-s">
          <h5>Selamat Datang Kembali.</h5>
          <p class="paragraph">Masuk ke akun anda.</p>
          <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
              <label for="email">Email:</label>
              <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required="">
               <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" style="color: red">
                                      <?php echo e($errors->first('email')); ?>

                                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input id="password" type="password" name="password" <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>">
               <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" style="color: red">
                                        <?php echo e($errors->first('password')); ?>

                                    </span>
                                <?php endif; ?>
              <a href="<?php echo e(route('password.request')); ?>" class="form-help">Lupa password?</a>
            </div>
            <div class="form-group">
              <input id="remember-me" type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
              <label for="remember-me" class="checkbox">Ingat saya</label>
            </div>
            <button type="submit" class="button button-primary full-width" role="button">Masuk</button>
          </form>
        </div>
        <div class="center max-width-s space-top">
          <span class="muted">Belum punya akun? </span><a href="<?php echo e(route('register')); ?>">Sign Up</a>
        </div>
      </div>
      <div class="col-one-half bg-image-04 featured-image"></div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Data\Project\Laravel\SPK\resources\views/auth/login.blade.php ENDPATH**/ ?>