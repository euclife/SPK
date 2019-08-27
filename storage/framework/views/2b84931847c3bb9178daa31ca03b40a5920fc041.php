<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT INTI <?php echo $__env->yieldContent('title'); ?></title>
    <link rel="icon" href="<?php echo e(asset('image/Logo-mini.png')); ?>" type="image/gif" sizes="16x16">
    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('template/material/assets/css/icons/icomoon/styles.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('template/material/assets/css/bootstrap.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('template/material/assets/css/core.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('template/material/assets/css/components.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('template/material/assets/css/colors.css')); ?>" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/loaders/pace.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/core/libraries/jquery.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/core/libraries/bootstrap.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/loaders/blockui.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/ui/nicescroll.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/ui/drilldown.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/notifications/sweet_alert.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/notifications/pnotify.min.js')); ?>"></script>

    <!-- /core JS files -->

    <!-- /core JS files -->

    <?php echo $__env->yieldContent('script'); ?>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

</head>
<?php
$dir = 'upload/user/img/profile/';
$authFoto = "image/profile.jpg";
$blob = Auth::user()->foto;
if ($blob !="") {
$authFoto = $dir.$blob;
}
?>

<body>

    <!-- Main navbar -->
    <div class="navbar navbar-inverse bg-indigo">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('image/Logo.png')); ?>" alt=""></a>

            <ul class="nav navbar-nav pull-right visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            </ul>
        </div>

        <div class="navbar-collapse collapse" id="navbar-mobile">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"></li>

                <li class="dropdown dropdown-user">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo e($authFoto); ?>" alt="">
                        <span><?php echo e(Auth::user()->name); ?></span>
                        <i class="caret"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="<?php echo e(url('profile')); ?>"><i class="icon-user-plus"></i> Profil</a></li>
                        <li class="divider"></li>
                        <li><a href="#" id="logout_button"><i class="icon-switch2"></i> Logout</a></li>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="navbar navbar-default" id="navbar-second">
        <ul class="nav navbar-nav no-border visible-xs-block">
            <li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-menu7"></i></a></li>
        </ul>

        <div class="navbar-collapse collapse" id="navbar-second-toggle">
            <ul class="nav navbar-nav navbar-nav-material">
                <?php if(Auth::user()->level == 'ADMIN'): ?>
                <li class="<?php echo $__env->yieldContent('dashboardActive'); ?>"><a href="<?php echo e(url('admin')); ?>"><i class="icon-display4 position-left"></i> Dashboard</a></li>
                <li class="<?php echo $__env->yieldContent('lowonganActive'); ?>"><a href="<?php echo e(url('admin/lowongan')); ?>"><i class=" icon-stack3 position-left"></i> Lowongan</a></li>
                <li class="dropdown <?php echo $__env->yieldContent('userActive'); ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-lab position-left"></i> Soal <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu width-250">
                        <li class="<?php echo $__env->yieldContent('psikotestActive'); ?>"><a href="<?php echo e(url('admin/soal/psikotest')); ?>">Psikotest</a></li>
                        <li class="<?php echo $__env->yieldContent('umumActive'); ?>"><a href="<?php echo e(url('admin/soal/umum')); ?>">Umum</a></li>
                    </ul>
                </li>
            </ul>
            <?php else: ?>
            <li class="<?php echo $__env->yieldContent('dashboardActive'); ?>"><a href="<?php echo e(url('dashboard')); ?>"><i class="icon-display4 position-left"></i> Dashboard</a></li>
            <li class="<?php echo $__env->yieldContent('profileActive'); ?>"><a href="<?php echo e(url('profile')); ?>"> <i class="icon-profile position-left"></i>My Profile</a></li>
            <?php endif; ?>

            </ul>
        </div>
    </div>
    <!-- /second navbar -->

    <?php echo $__env->yieldContent('header'); ?>


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->


    <!-- Footer -->
    <div class="navbar navbar-default navbar-fixed-bottom footer">
        <ul class="nav navbar-nav visible-xs-block">
            <li><a class="text-center collapsed" data-toggle="collapse" data-target="#footer"><i class="icon-circle-up2"></i></a></li>
        </ul>

        <div class="navbar-collapse collapse" id="footer">
            <div class="navbar-text">
                &copy; 2019. <a href="#" class="navbar-link">PT. INTI</a> by <a href="#" class="navbar-link" target="_blank">Maulana Sutejo</a>
            </div>

        </div>
    </div>
    <!-- /footer -->

    <!-- /page container -->
    <script type="text/javascript">
        <?php if(session()->has('success')): ?>
        $(function() {
            var notifSukses = (function thename() {
                new PNotify({
                    title: 'Success!',
                    text: '<?php echo e(Session::get('success')); ?>',
                    addclass: 'alert alert-styled-left bg-green-800',
                    icon: '<i class="fa fa-check-square"></i>'
                });
            });
            setTimeout(function() {
                notifSukses();
            }, 100);

        });
        <?php endif; ?>

        <?php if(session()->has('error')): ?>
        $(function() {
            var notifSukses = (function thename() {
                new PNotify({
                    title: 'Error!',
                    text: '<?php echo e(Session::get('error')); ?>',
                    addclass: 'alert alert-styled-left bg-danger',
                    icon: '<i class="fa fa-check-square"></i>'
                });
            });
            setTimeout(function() {
                notifSukses();
            }, 100);

        });
        <?php endif; ?>


            $('#logout_button').on('click', function() {
                swal({
                        title: "Apa anda yakin?",
                        text: "Anda akan logout!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: '#DD6B55',
                        confirmButtonText: 'Logout!',
                        cancelButtonText: "Tidak",
                        closeOnConfirm: false,
                        closeOnCancel: true
                    },
                    function(isConfirm) {
                        if (isConfirm) {
                            document.getElementById('logout-form').submit();
                        }
                    });
            });
    </script>
</body>

</html>
<?php /**PATH D:\Data\Project\Laravel\SPK\resources\views/layouts/dashboardMaster.blade.php ENDPATH**/ ?>