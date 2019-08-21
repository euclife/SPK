<?php $__env->startSection('title','Edit Profil'); ?>

<?php $__env->startSection('css'); ?>
   <!-- FONT AWESOME-->
   <!-- FONT AWESOME-->
   <link rel="stylesheet" href="<?php echo e(asset('template/admin/vendor/font-awesome/css/font-awesome.css')); ?>">
   <!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="<?php echo e(asset('template/admin/vendor/simple-line-icons/css/simple-line-icons.css')); ?>">
   <!-- ANIMATE.CSS-->
   <link rel="stylesheet" href="<?php echo e(asset('template/admin/vendor/animate.css/animate.css')); ?>">
   <!-- WHIRL (spinners)-->
   <link rel="stylesheet" href="<?php echo e(asset('template/admin/vendor/whirl/dist/whirl.css')); ?>">
   <!-- =============== PAGE VENDOR STYLES ===============-->
   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="<?php echo e(asset('template/admin/css/bootstrap.css')); ?>" id="bscss">
   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="<?php echo e(asset('template/admin/css/app.css')); ?>" id="maincss">
   

   

    <!-- =============== VENDOR SCRIPTS ===============-->
   <!-- MODERNIZR-->
   <script src="<?php echo e(asset('template/admin/vendor/modernizr/modernizr.custom.js')); ?>"></script>
   <!-- JQUERY-->
   <script src="<?php echo e(asset('template/admin/vendor/jquery/dist/jquery.js')); ?>"></script>
   <!-- BOOTSTRAP-->
   <script src="<?php echo e(asset('template/admin/vendor/popper.js/dist/umd/popper.js')); ?>"></script>
   <script src="<?php echo e(asset('template/admin/vendor/bootstrap/dist/js/bootstrap.js')); ?>"></script>
   <!-- STORAGE API-->
   <script src="<?php echo e(asset('template/admin/vendor/js-storage/js.storage.js')); ?>"></script>
   <!-- JQUERY EASING-->
   <script src="<?php echo e(asset('template/admin/vendor/jquery.easing/jquery.easing.js')); ?>"></script>
   <!-- ANIMO-->
   <script src="<?php echo e(asset('template/admin/vendor/animo/animo.js')); ?>"></script>
   <!-- SCREENFULL-->
   <script src="<?php echo e(asset('template/admin/vendor/screenfull/dist/screenfull.js')); ?>"></script>
   <!-- LOCALIZE-->
   <script src="<?php echo e(asset('template/admin/vendor/jquery-localize/dist/jquery.localize.js')); ?>"></script>
   <!-- =============== PAGE VENDOR SCRIPTS ===============-->
   <!-- JQUERY VALIDATE-->
   <script src="<?php echo e(asset('template/admin/vendor/jquery-validation/dist/jquery.validate.js')); ?>"></script>
   <script src="<?php echo e(asset('template/admin/vendor/jquery-validation/dist/additional-methods.js')); ?>"></script>
   <!-- JQUERY STEPS-->
   <script src="<?php echo e(asset('template/admin/vendor/jquery-steps/build/jquery.steps.js')); ?>"></script>
   <!-- =============== APP SCRIPTS ===============-->
   <script src="<?php echo e(asset('template/admin/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Main section-->
      <section class="section-container">
         
         <!-- Page content-->
         <div class="content-wrapper">
            <div class="content-heading">Edit Profil</div>
            <div class="card card-default">
               <div class="card-header"></div>
               <div class="card-body">
                  <form id="example-form" action="#">
                     <div>
                        <h4>Data Diri
                           <br>
                           <small>Mohon di isi sesuai dengan data anda</small>
                        </h4>
                        <fieldset>
                           <label for="userName">Nama Lengkap *</label>
                           <input class="form-control required" id="userName" name="userName" type="text" value="<?php echo e($user->name); ?>">
                           <label for="password">Password *</label>
                           <input class="form-control required" id="password" name="password" type="text">
                           <label for="confirm">Confirm Password *</label>
                           <input class="form-control required" id="confirm" name="confirm" type="text">
                           <p>(*) Mandatory</p>
                        </fieldset>
                        <h4>Profile
                           <br>
                           <small>Nam egestas, leo eu gravida tincidunt</small>
                        </h4>
                        <fieldset>
                           <label for="name">First name *</label>
                           <input class="form-control required" id="name" name="name" type="text">
                           <label for="surname">Last name *</label>
                           <input class="form-control required" id="surname" name="surname" type="text">
                           <label for="email">Email *</label>
                           <input class="form-control required" id="email" name="email" type="text">
                           <label for="address">Address</label>
                           <input class="form-control" id="address" name="address" type="text">
                           <p>(*) Mandatory</p>
                        </fieldset>
                        <h4>Hints
                           <br>
                           <small>Nam egestas, leo eu gravida tincidunt</small>
                        </h4>
                        <fieldset>
                           <p class="lead text-center">Almost there!</p>
                        </fieldset>
                        <h4>Finish
                           <br>
                           <small>Nam egestas, leo eu gravida tincidunt</small>
                        </h4>
                        <fieldset>
                           <p class="lead">One last check</p>
                           <div class="checkbox c-checkbox">
                              <label>
                                 <input type="checkbox" required="required" name="terms">
                                 <span class="fa fa-check"></span>I agree with the Terms and Conditions.</label>
                           </div>
                        </fieldset>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      
      </section>
      <!-- Page footer-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\Laravel\SPK\resources\views/pages/user/form/profilEdit.blade.php ENDPATH**/ ?>