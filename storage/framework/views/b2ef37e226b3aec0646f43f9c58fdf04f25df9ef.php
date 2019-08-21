<!doctype html>
<html lang="en">
<head>
  <title><?php echo $__env->yieldContent('title'); ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="apple-touch-icon-precomposed" href="media/favicon.png">
  <link rel="icon" href="<?php echo e(asset('template/auth/media/favicon.png')); ?>">
  <link rel="mask-icon" href="<?php echo e(asset('template/auth/media/favicon.svg')); ?>" color="rgb(36,38,58)">
  <link rel="shortcut icon" href="<?php echo e(asset('template/auth/media/favicon.png')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('template/auth/css/main.css')); ?>">
</head>
<body class="page page-onboarding preload">

  <main>
    <a href="<?php echo e(url('/')); ?>" class="button button-close" role="button"></a>

    <?php echo $__env->yieldContent('content'); ?>
  </main>

  <script src="<?php echo e(asset('template/auth/js/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('template/auth/js/main.js')); ?>"></script>
</body>
</html><?php /**PATH D:\Data\Project\Laravel\SPK\resources\views/layouts/auth.blade.php ENDPATH**/ ?>