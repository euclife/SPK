<!DOCTYPE html>
<html lang="ID">

<head>
    <title>Selamat Datang Di Website Lowongan Kerja PT. INTI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="icon" href="<?php echo e(asset('image/logo.png')); ?>">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="<?php echo e(asset('template/theme/css/bootstrap.css')); ?>" rel='stylesheet' type='text/css' />
    <link href="<?php echo e(asset('template/theme/css/zoomslider.css')); ?>" rel='stylesheet' type='text/css' />
    <link href="<?php echo e(asset('template/theme/css/style6.css')); ?>" rel='stylesheet' type='text/css' />
    <link href="<?php echo e(asset('template/theme/css/style.css')); ?>" rel='stylesheet' type='text/css' />
    <link href="<?php echo e(asset('template/theme/css/fontawesome-all.css')); ?>" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
</head>


<body>
    <!-- banner-inner -->
    <div id="demo-1" data-zs-src='["template/theme/images/1.jpg", "template/theme/images/2.jpg","template/theme/images/3.jpg", "template/theme/images/4.jpg"]' data-zs-overlay="dots">
        <div class="demo-inner-content">
            <div class="header-top">
                <header>
                    <div class="top-head ml-lg-auto text-center">
                        <div class="row">
                            <div class="col-md-4">
                                <span></span>
                            </div>
                            <div class="search col-md-2">
                                <div class="mobile-nav-button">
                                </div>
                                <!-- open/close -->
                                <div class="overlay overlay-door">
                                    <button type="button" class="overlay-close">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                    <form action="#" method="post" class="d-flex">
                                        <input class="form-control" type="search" placeholder="Search here..." required="">
                                        <button type="submit" class="btn btn-primary submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                                <!-- open/close -->
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="logo">
                            <h1>
                                <a class="navbar-brand" href="#">
                                     Industri Telekomunikasi Indonesia</a>
                            </h1>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <i class="fas fa-bars"></i>
                            </span>

                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-lg-auto text-center">
                                <li class="nav-item active">
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>
            </div>
            <!--/banner-info-w3layouts-->
            <div class="banner-info-w3layouts text-center">

                <h3>
                    <span>Lowongan Kerja</span>
                </h3>
                <p>Bergabung bersama kami untuk mendapatkan karir yang lebih baik!!</p>
                <a href="<?php echo e(route('login')); ?>" class="btn btn-primary btn-lg" >Masuk</a>
                <a href="<?php echo e(route('register')); ?>"class="btn btn-primary btn-lg" >Daftar</a>
                    <div class="col-md-3 banf">
                    </div>
            </div>
            <!--//banner-info-w3layouts-->
        </div>
    </div>
    <!-- banner-text -->
    <!-- banner-bottom-wthree -->
    <!-- //banner-bottom-wthree -->
    <!--/process-->
    <section class="banner-bottom-wthree pb-lg-5 pb-md-4 pb-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
            <!---728x90--->
                <h3 class="tittle text-center mb-lg-4 mb-3">
            
                    <span>Informasi</span>
                       Posisi pekerjaan terkini</h3>
                    <!---728x90--->
                                        
                                        <?php $__currentLoopData = $lowongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="job-post-main row my-3">
                                            <div class="col-md-9 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="job-single-sec">
                                                    <h4>
                                                        <a href="#">
                                                            <?php echo e($l->posisi); ?></a>
                                                    </h4>
                                                    <ul class="job-list-info d-flex">
                                                        <li>
                                                            <i class="fas fa-bullhorn"></i> Login Untuk Melamar</li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-3 job-single-time text-right">
                                                <span class="job-time">
                                                <button type="button" class="btn btn-info btn-lg btn-lowongan" data-id="<?php echo e($l->id_lowongan); ?>" >Syarat</button>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//preocess-->

    <!--job -->
    <section class="banner-bottom-wthree mid py-lg-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
                <div class="mid-info text-center pt-3">
                    <h3 class="tittle text-center cen mb-lg-5 mb-3">
                        <span>Informasi</span>Jika anda belum mempunyai akun , Silahkan daftar terlebih dahulu</h3>
                    <p></p>
                    <div class="resume">
                        <a href="<?php echo e(url('register')); ?>" >
                            <i class="far fa-user"></i> Daftar</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--//job -->
    <!--job -->
    <section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
            <!---728x90--->
                <h3 class="tittle text-center mb-lg-5 mb-3">
                    <span>Informasi</span>Tahapan Penyeleksian</h3>

                <div class="mid-info text-center mt-5">
                    <div class="parent-chart">
                        <div class="level lev-one top-level">
                            <div class="flow-position">
                                <img src="<?php echo e(asset('template/theme/images/s1.jpg')); ?>" alt=" " class="img-fluid rounded-circle">
                                <br>
                                <strong>Proses penyeleksian </strong>
                                <br>
                            </div>
                        </div>
                        <div class="flow-chart">
                            <div class="level lev-two last-lev">
                                <div class="flow-position">
                                    <img src="<?php echo e(asset('template/theme/images/s2.jpg')); ?>" alt=" " class="img-fluid rounded-circle">
                                    <br>
                                    <strong>1. Lowongan Pekerjaan</strong>
                                    <br>
                                </div>
                                <!--
                            -->
                                <div class="flow-position">
                                    <img src="<?php echo e(asset('template/theme/images/s3.jpg')); ?>" alt=" " class="img-fluid rounded-circle">
                                    <br>
                                    <strong>2. Memilih Kandidat Dari Cv
                                    </strong>
                                    <br>
                                </div>
                                <!--
                            -->
                                <div class="flow-position">
                                    <img src="<?php echo e(asset('template/theme/images/s4.jpg')); ?>" alt=" " class="img-fluid rounded-circle">
                                    <br>
                                    <strong>3. Tes Pengetahuan Umum Dan Psikotes ( Online )
                                    </strong>
                                    <br>
                                </div>
                                <!--
                            -->
                                <div class="flow-position">
                                    <img src="<?php echo e(asset('template/theme/images/s5.jpg')); ?>" alt=" " class="img-fluid rounded-circle">
                                    <br>
                                    <strong>4. Seleksi </strong>
                                    <br>
                                </div>
                                <!--
                            -->
                                <div class="flow-position">
                                    <img src="<?php echo e(asset('template/theme/images/s6.jpg')); ?>" alt=" " class="img-fluid rounded-circle">
                                    <br>
                                    <strong>5. Tes Kesehatan Dan Keahlian
                                    </strong>
                                    <br>
                                </div>
                                <!--
                            -->
                                <div class="flow-position">
                                    <img src="<?php echo e(asset('template/theme/images/s7.jpg')); ?>" alt=" " class="img-fluid rounded-circle">
                                    <br>
                                    <strong>6. Wawancara</strong>
                                    <br>
                                </div>
                                <!--
                            -->
                                <div class="flow-position">
                                    <img src="<?php echo e(asset('template/theme/images/s8.jpg')); ?>" alt=" " class="img-fluid rounded-circle">
                                    <br>
                                    <strong>7. Seleksi
                                    </strong>
                                    <br>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--//job -->
    <!--/candidates -->
    <!--//clients-->
    <!--footer -->
    <footer class="footer-emp-w3layouts bg-dark dotts py-lg-5 py-3">
        <div class="container-fluid px-lg-5 px-3">
            <div class="row footer-top">
                <div class="col-lg-3 footer-grid-wthree-w3ls">
                    <div class="footer-title">
                        <h3>About Us</h3>
                    </div>
                    <div class="footer-text">
                        <p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed, convallis at tellus. Nulla porttitor accumsana tincidunt.</p>
                        <ul class="footer-social text-left mt-lg-4 mt-3">

                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-facebook-f"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-twitter"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-google-plus-g"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-linkedin-in"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fas fa-rss"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-vk"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 footer-grid-wthree-w3ls">
                    <div class="footer-title">
                        <h3>Get in touch</h3>
                    </div>
                    <div class="contact-info">
                        <h4>Location :</h4>
                        <p>0926k 4th block building, king Avenue, New York City.</p>
                        <div class="phone">
                            <h4>Contact :</h4>
                            <p>Phone : +121 098 8907 9987</p>
                            <p>Email :
                                <a href="mailto:info@example.com">info@example.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 footer-grid-wthree-w3ls">
                    <div class="footer-title">
                        <h3>Quick Links</h3>
                    </div>
                    <ul class="links">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="about.html">About</a>
                        </li>
                        <li>
                            <a href="404.html">Error</a>
                        </li>
                        <li>
                            <a href="pricing.html">Job Packages</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact Us</a>
                        </li>
                    </ul>
                    <ul class="links">
                        <li>
                            <a href="how.html">How it works</a>
                        </li>
                        <li>
                            <a href="contact.html">Support</a>
                        </li>
                        <li>
                            <a href="employer_list.html">For Employers</a>
                        </li>
                    </ul>

                    <div class="clearfix"></div>
                </div>
                <div class="col-lg-3 footer-grid-wthree-w3ls">
                    <div class="footer-title">
                        <h3>Sign up for your offers</h3>
                    </div>
                    <div class="footer-text">
                        <p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
                        <form action="#" method="post">
                            <input class="form-control" type="email" name="Email" placeholder="Enter your email..." required="">
                            <button class="btn2">
                                <i class="far fa-envelope" aria-hidden="true"></i>
                            </button>
                            <div class="clearfix"> </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="copyright mt-4">
                <p class="copy-right text-center ">&copy; 2018 Replenish. All Rights Reserved | Design by
                    <a href="http://w3layouts.com/"> W3layouts </a>
                </p>
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <!--model-forms-->
    <!--// Syarat1-->
    <div class="modal fade" id="mdlSyarat" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Persyaratan</h5>
                           <div id="syarat">
                           </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
      <!--// Syarat2-->
    
    <!--//model-form-->
    <!-- js -->
  
    <!-- js -->
    <!--/slider-->
    <script src="<?php echo e(asset('template/theme/js/jquery-1.11.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('template/theme/js/modernizr-2.6.2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('template/theme/js/jquery.zoomslider.min.js')); ?>"></script>
    <!--//slider-->
    <!--search jQuery-->
    <script src="<?php echo e(asset('template/theme/js/classie-search.js')); ?>"></script>
    <script src="<?php echo e(asset('template/theme/js/demo1-search.js')); ?>"></script>
    <!--//search jQuery-->

    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
    <!-- password-script -->
    <script>
        window.onload = function() {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- //password-script -->

    <!-- stats -->
    <script src="<?php echo e(asset('template/theme/js/jquery.waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('template/theme/js/jquery.countup.js')); ?>"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats -->

    <!-- //js -->
    <script src="<?php echo e(asset('template/theme/js/bootstrap.js')); ?>"></script>
    <!--/ start-smoth-scrolling -->
    <script src="<?php echo e(asset('template/theme/js/move-top.js')); ?>"></script>
    <script src="<?php echo e(asset('template/theme/js/easing.js')); ?>"></script>
    <script src="<?php echo e(asset('template/js/blockui.js')); ?>"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
                                    var defaults = {
                                          containerID: 'toTop', // fading element id
                                        containerHoverID: 'toTopHover', // fading element hover id
                                        scrollSpeed: 1200,
                                        easingType: 'linear' 
                                     };
                                    */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
            });

            $(document).on("click", ".btn-lowongan", function () {
                var id = $(this).data('id');
                var url = '<?php echo e(url('api/syaratlowongan/')); ?>/'+id
                $.ajax({
                    url : url,
                    type : 'GET',
                    datatype : 'json',
                    success:function(data){
                        $('#syarat').empty();
                        for (var i=0; i<data.length; i++) {
                             $('#syarat').append("<p>"+(i+1)+" "+data[i].nama_syarat+"</p>");
                            }
                        $('#mdlSyarat').modal('show');
                    }
                });

            });
        });
    </script>
    <!--// end-smoth-scrolling -->

    <script type="text/javascript">
    $(function() {
       
        $('#exampleModalCenter2').on('hidden.bs.modal', function () {
            $(this).find('form').trigger('reset');
            $('.errorEmail').addClass('hidden');
            $('.errorPassword').addClass('hidden');
        })

        $('#exampleModalCenter2').on('hidden.bs.modal', function () {
            $(this).find('form').trigger('reset');
            $('.errorNamaReg').addClass('hidden');
            $('.errorEmailReg').addClass('hidden');
            $('.errorPasswordReg').addClass('hidden');
        })


        // Setup Ajax
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });

        // Submit Form Clicked
        $('#login').click(function(e){
            e.preventDefault();
            $('.errorEmail').addClass('hidden');
            $('.errorPassword').addClass('hidden');
            $.blockUI();

            $.ajax({
                url : '<?php echo e(route('login')); ?>',
                type : 'POST',
                dataType: 'json',
                data : {
                    'csrf-token': $('input[name=_token]').val(), 
                    'email' : $('#email').val(),
                    'password' : $('#password').val(),
                },
                // beforeSend: function(data){
                //     console.log(data);
                // }, 
                // error: function (data, textStatus, errorThrown) {
                //     console.log(data);
                // },
                success:function(data){
                    console.log(data);
                    $('.errorNama_pengunjung').addClass('hidden');
                    $('.errorTujuan').addClass('hidden');
                    $('.errorId_countries').addClass('hidden');
                    $('.errorEmail').addClass('hidden');
                    if (data.errors) {
                        if (data.errors.id_countries) {
                            $('.errorId_countries').removeClass('hidden');
                            $('.errorId_countries').text(data.errors.id_countries);
                        }
                        if (data.errors.email) {
                            $('.errorEmail').removeClass('hidden');
                            $('.errorEmail').text(data.errors.email);
                        }
                        if (data.errors.nama_pengunjung) {
                            $('.errorNama_pengunjung').removeClass('hidden');
                            $('.errorNama_pengunjung').text(data.errors.nama_pengunjung);
                        }
                        if (data.errors.tujuan) {
                            $('.errorTujuan').removeClass('hidden');
                            $('.errorTujuan').text(data.errors.tujuan);
                        }
                        $.unblockUI();
                    }
                    if (data.success == true) {
                        $.unblockUI();
                        $('#modal_form_tourist').modal('hide');
                        $('.errorNama_pengunjung').addClass('hidden');
                        $('.errorTujuan').addClass('hidden');
                        $('.errorId_countries').addClass('hidden');
                        swal('success!','Enjoy your vacation!','success');
                    }

                }
            });
        });
        
    });
</script>
</body><?php /**PATH D:\Data\Project\Laravel\SPK\resources\views/welcome.blade.php ENDPATH**/ ?>