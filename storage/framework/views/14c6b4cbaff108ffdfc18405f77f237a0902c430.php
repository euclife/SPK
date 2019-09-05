<div class=" row">
    <div class="col-md-4">
        <div class="panel panel-flat">
            <div class="panel-heading">
            </div>
            <div class="panel-body">
                <div class="thumbnail">
                    <p class="text-semibold no-margin">Foto Profil</p>

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
                        <p class="text-semibold no-margin"><?php echo e($user->name); ?></p>
                        <ul class="icons-list mt-15">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="panel panel-flat">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td> : <?php echo e($user->name); ?> </td>
                    </tr>
                    <tr>
                        <td>TTL</td>
                        <td> : <?php echo e($user->tempat_lahir); ?>,
                            <?php echo e(Carbon\Carbon::parse($user->tgl_lahir)->formatLocalized('%d %B %Y')); ?> </td>
                    </tr>

                    <tr>
                        <td>Umur</td>
                        <td> : <?php echo e($pelamar->umur); ?></td>
                    </tr>

                    <tr>
                        <td>IPK</td>
                        <td> : <?php echo e($pelamar->ipk); ?></td>
                    </tr>

                    <tr>
                        <td>Hasil Tes</td>
                        <td> : <?php echo e($pelamar->umum); ?></td>
                    </tr>

                    <tr>
                        <td>E-Mail</td>
                        <td> : <?php echo e($user->email); ?></td>
                    </tr>

                    <tr>
                        <td>Berkas</td>
                        <td>
                            <a href="?file=cv" class="btn btn-success">CV</a>
                            <a href="?file=lamaran" class="btn btn-danger">Lamaran</a>
                            <a href="?file=ijasah" class="btn">Ijasah</a>
                        </td>
                    </tr>

                </table>
                <a href="<?php echo e(url('pelamar/lolos/')); ?>/<?php echo e($pelamar->id); ?>" class="btn btn-success">Lolos Tahap
                    Selanjutnya</a>
                <a href="<?php echo e(url('pelamar/gagal/')); ?>/<?php echo e($pelamar->id); ?>" class="btn btn-danger">Gagal</a>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\Data\Project\Laravel\SPK\resources\views/admin/pelamar/identitas.blade.php ENDPATH**/ ?>