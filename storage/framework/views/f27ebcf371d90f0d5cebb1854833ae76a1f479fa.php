<!--/Login-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Masuk</h5>
                        <form  class="">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label class="mb-2">Email</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">
                                <small id="emailHelp" class="form-text text-muted">Jangan pernah membagikan email Anda dengan orang lain.</small>
                                <span class="text-danger errorEmail hidden"></span>
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="" required="">
                                <span class="text-danger errorPassword hidden"></span>
                            </div>
                            <button type="button" id="login" class="btn btn-primary submit mb-4"><?php echo e(__('Masuk')); ?></button>
                            <p class="text-center pb-4">
                                <a id="belumPunyaAkun" data-toggle="modal2" data-target="#exampleModalCenter"> Belum Punya Akun?</a>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Login-->
    <!--/Register-->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Daftar</h5>
                        <form action="#" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label>Nama</label>

                                <input type="text" class="form-control" id="validationDefault01" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" id="validationDefault02" placeholder="" required="">
                            </div>

                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" id="password1" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Konfirmasi Password</label>
                                <input type="password" class="form-control" id="password2" placeholder="" required="">
                            </div>

                            <button type="submit" class="btn btn-primary submit mb-4">Daftar</button>
                            <p class="text-center pb-4">
                                <a href="#">Dengan mengklik Daftar, saya menyetujui ketentuan Yang Ada.</a>
                            </p>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Register--><?php /**PATH D:\Project\Laravel\SPK\resources\views/pages/form/authModal.blade.php ENDPATH**/ ?>