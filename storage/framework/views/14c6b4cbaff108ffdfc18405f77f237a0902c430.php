<div class="container row">
    <div class="col-md-4">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h6 class="panel-title">Foto<a class="heading-elements-toggle"><i class="icon-more"></i></a>
                </h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                <div class="thumbnail">
                    <h6 class="text-semibold no-margin">Foto Profil</h6>

                    <div class="thumb thumb-rounded thumb-slide">
                        <img src="<?php echo e(asset($foto)); ?>" alt="">
                        <div class="caption">
                            <span>
                                <a href="<?php echo e(asset($foto)); ?>" class="btn bg-green-300 btn-icon" data-popup="lightbox"><i
                                        class="icon-zoomin3"></i></a>

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
        </div>
    </div>

    <div class="col-md-8">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h6 class="panel-title">Identitas<a class="heading-elements-toggle"><i class="icon-more"></i></a>
                </h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body row">
                <div class="col-md-3">
                    <h6>Nama Lengkap </h6>
                </div>
                <div class="col-md-9">
                    <h6>: <?php echo e($user->name); ?></h6>
                </div>

                <div class="col-md-3">
                    <h6>Tempat Tanggal Lahir </h6>
                </div>
                <div class="col-md-9">
                    <h6>: <?php echo e($user->tempat_lahir); ?>,
                        <?php echo e(Carbon\Carbon::parse($user->tgl_lahir)->formatLocalized('%d %B %Y')); ?></h6>
                </div>
                <div class="col-md-3">
                    <h6>umur </h6>
                </div>
                <div class="col-md-9">
                    <h6>: <?php echo e($pelamar->umur); ?></h6>
                </div>
                <div class="col-md-3">
                    <h6>IPK </h6>
                </div>
                <div class="col-md-9">
                    <h6>: <?php echo e($pelamar->ipk); ?></h6>
                </div>
                <div class="col-md-3">
                    <h6>Hasil Tes </h6>
                </div>
                <div class="col-md-9">
                    <h6>: <?php echo e($pelamar->umum); ?></h6>
                </div>
                <div class="col-md-3">
                    <h6>Email </h6>
                </div>
                <div class="col-md-9">
                    <h6>: <?php echo e($user->email); ?></h6>
                    <button class="btn btn-orange-400">Email Undangan Untuk tahap selanjutnya</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\Data\Project\Laravel\SPK\resources\views/admin/pelamar/identitas.blade.php ENDPATH**/ ?>