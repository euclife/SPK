@extends('layouts.user')

@section('title','Edit Profil')

@section('css')
   <!-- FONT AWESOME-->
   <!-- FONT AWESOME-->
   <link rel="stylesheet" href="{{asset('template/admin/vendor/font-awesome/css/font-awesome.css')}}">
   <!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="{{asset('template/admin/vendor/simple-line-icons/css/simple-line-icons.css')}}">
   <!-- ANIMATE.CSS-->
   <link rel="stylesheet" href="{{asset('template/admin/vendor/animate.css/animate.css')}}">
   <!-- WHIRL (spinners)-->
   <link rel="stylesheet" href="{{asset('template/admin/vendor/whirl/dist/whirl.css')}}">
   <!-- =============== PAGE VENDOR STYLES ===============-->
   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="{{asset('template/admin/css/bootstrap.css')}}" id="bscss">
   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="{{asset('template/admin/css/app.css')}}" id="maincss">
   

   {{-- Js --}}

    <!-- =============== VENDOR SCRIPTS ===============-->
   <!-- MODERNIZR-->
   <script src="{{asset('template/admin/vendor/modernizr/modernizr.custom.js')}}"></script>
   <!-- JQUERY-->
   <script src="{{asset('template/admin/vendor/jquery/dist/jquery.js')}}"></script>
   <!-- BOOTSTRAP-->
   <script src="{{asset('template/admin/vendor/popper.js/dist/umd/popper.js')}}"></script>
   <script src="{{asset('template/admin/vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
   <!-- STORAGE API-->
   <script src="{{asset('template/admin/vendor/js-storage/js.storage.js')}}"></script>
   <!-- JQUERY EASING-->
   <script src="{{asset('template/admin/vendor/jquery.easing/jquery.easing.js')}}"></script>
   <!-- ANIMO-->
   <script src="{{asset('template/admin/vendor/animo/animo.js')}}"></script>
   <!-- SCREENFULL-->
   <script src="{{asset('template/admin/vendor/screenfull/dist/screenfull.js')}}"></script>
   <!-- LOCALIZE-->
   <script src="{{asset('template/admin/vendor/jquery-localize/dist/jquery.localize.js')}}"></script>
   <!-- =============== PAGE VENDOR SCRIPTS ===============-->
   <!-- JQUERY VALIDATE-->
   <script src="{{asset('template/admin/vendor/jquery-validation/dist/jquery.validate.js')}}"></script>
   <script src="{{asset('template/admin/vendor/jquery-validation/dist/additional-methods.js')}}"></script>
   <!-- JQUERY STEPS-->
   <script src="{{asset('template/admin/vendor/jquery-steps/build/jquery.steps.js')}}"></script>
   <!-- =============== APP SCRIPTS ===============-->
   <script src="{{asset('template/admin/js/app.js')}}"></script>
@endsection

@section('content')
<!-- Main section-->
      <section class="section-container">
         
         <!-- Page content-->
         <div class="content-wrapper">
            <div class="content-heading">Edit Profil</div>
            <div class="card card-default">
               <div class="card-header"></div>
               <div class="card-body">
                  <form id="example-form"  action="{{url('profilVerifikasi')}}" method="post">
                     @csrf
                     <div>
                        <h4>Profile
                           <br>
                        </h4>
                        <fieldset>
                           <label for="name">Nama Lengkap *</label>
                           <input class="form-control required"  name="name" type="text" value="{{$user->name}}">
                           <label for="surname">Tempat Lahir *</label>
                           <input class="form-control required"  name="tempat_lahir" type="text">
                           <label for="email">Tanggal Lahir *</label>
                           <input class="form-control required"  name="tanggal_lahir" type="date">
                           <div class="form-group ">
                           <label class="col-md-10 col-form-label">Jenis Kelamin</label>
                           <div class="col-md-2">
                              <label class="c-radio">
                                 <input id="inlineradio1" type="radio" name="jenis_kelamin" value="Pria" checked="">
                                 <span class="fa fa-circle"></span>Pria</label>
                              <label class="c-radio">
                                 <input id="inlineradio2" type="radio" name="jenis_kelamin" value="Wanita">
                                 <span class="fa fa-circle"></span>Wanita</label>
                           </div>
                           </div>
                        </fieldset>
                        <h4>Tempat Tinggal
                           <br>
                        </h4>
                        <fieldset>
                           <label for="name">Alamat *</label>
                           <input class="form-control required"  name="alamat" type="text">
                           <label for="surname">RT *</label>
                           <input class="form-control required"  name="rt" type="text">
                           <label for="email">RW *</label>
                           <input class="form-control required"  name="rw" type="text">
                           <label for="address">Kab/Kota*</label>
                           <input class="form-control"  name="Kab/Kota" type="text">
                        </fieldset>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      
      </section>
      <!-- Page footer-->
@endsection