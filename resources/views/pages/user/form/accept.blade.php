@extends('layouts.dashboardMaster')

@section('title','| Daftar')
@section('lowonganActive','active')

@section('script')
  <script type="text/javascript" src="{{asset('template/material/assets/js/plugins/notifications/jgrowl.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('template/material/assets/js/plugins/ui/moment/moment.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('template/material/assets/js/plugins/pickers/daterangepicker.js')}}"></script>
  <script type="text/javascript" src="{{asset('template/material/assets/js/plugins/pickers/anytime.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('template/material/assets/js/plugins/pickers/pickadate/picker.js')}}"></script>
  <script type="text/javascript" src="{{asset('template/material/assets/js/plugins/pickers/pickadate/picker.date.js')}}"></script>
  <script type="text/javascript" src="{{asset('template/material/assets/js/plugins/pickers/pickadate/picker.time.js')}}"></script>
  <script type="text/javascript" src="{{asset('template/material/assets/js/plugins/pickers/pickadate/legacy.js')}}"></script>
  <script type="text/javascript" src="{{asset('template/material/assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('template/material/assets/js/plugins/forms/selects/select2.min.js')}}"></script>

  <script type="text/javascript" src="{{asset('template/material/assets/js/plugins/media/fancybox.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('template/material/assets/js/pages/components_thumbnails.js')}}"></script>

  <script type="text/javascript" src="{{asset('template/material/assets/js/plugins/forms/styling/switch.min.js')}}"></script>

  <script type="text/javascript" src="{{asset('template/material/assets/js/plugins/uploaders/dropzone.min.js') }}"></script>
  <script type="text/javascript" src="{{asset('template/material/assets/js/core/app.js') }}"></script>
  <script type="text/javascript" src="{{asset('template/material/assets/js/pages/form_select2.js')}}"></script>

  <script type="text/javascript" src="{{asset('template/material/assets/js/pages/picker_date.js')}}"></script>


   <script type="text/javascript" src="{{ asset('template/material/assets/js/pages/uploader_dropzone.js') }}"></script>

<script type="text/javascript" src="{{ asset('template/material/assets/js/plugins/ui/ripple.min.js') }}"></script>
@endsection


@section('header')
<!-- Page header -->
<div class="page-header">
   <div class="page-header-content">
      <div class="page-title">
         <h4>
            <i class="icon-arrow-left52 position-left"></i>
            <span class="text-semibold">Home</span> - Profile
         </h4>
      </div>

   </div>
</div>
<!-- /page header -->
@endsection

@section('content')

<h6 class="content-group text-semibold">
   My Profile
   <small class="display-block">Masukan Data Anda dengan benar!</small>
</h6>
<div class="row">

   <div class="col-md-9">
     <div class="panel panel-flat">
          <div class="panel-heading">
            <h5 class="panel-title">Identitas</h5>
            <div class="heading-elements">
              <ul class="icons-list">
              </ul>
            </div>
          </div>

          <div class="panel-body">
            <p class="content-group-lg">Harap Masukkan data yang sebenar-benarnya. Kami tidak bertanggung jawab bila di waktu mendatang terjadi pelanggaran bilamana data yang di masukkan tidak benar</p>

            <form class="form-horizontal" action="{{ url('profile') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <fieldset class="content-group">
                <legend class="text-bold">Identitas Diri</legend>

                <div class="form-group">
                  <label class="control-label col-lg-2">SURAT LAMARAN</label>
                  <div class="col-lg-10">
                    <input type="file" class="form-control text-uppercase" name="surat_lamaran" required>
                    @if ($errors->has('surat_lamaran'))
                      <div class="form-control-feedback">
                        <i class="icon-cancel-circle2"></i>
                      </div>
                      <span class="help-block text-danger">{{ $errors->first('surat_lamaran') }}</span>
                    @endif
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2">CV</label>
                  <div class="col-lg-10">
                    <input type="file" class="form-control text-uppercase" name="cv">
                    @if ($errors->has('cv'))
                      <div class="form-control-feedback">
                        <i class="icon-cancel-circle2"></i>
                      </div>
                      <span class="help-block text-danger">{{ $errors->first('cv') }}</span>
                    @endif
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2">IPK</label>
                  <div class="col-lg-10">
                    <input type="number" class="form-control text-uppercase" name="ipk" required>
                    @if ($errors->has('ipk'))
                      <div class="form-control-feedback">
                        <i class="icon-cancel-circle2"></i>
                      </div>
                      <span class="help-block text-danger">{{ $errors->first('ipk') }}</span>
                    @endif
                  </div>
                </div>


              </fieldset>
              <div class="text-right">
                <button type="submit" class="btn btn-primary">Simpan </button>
              </div>
            </form>
          </div>
        </div>
   </div>
</div>

@endsection
