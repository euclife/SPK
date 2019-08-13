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
                    <input type="file" class="form-control text-uppercase" name="name" value="{{ $user->name }}">
                    @if ($errors->has('name'))
                      <div class="form-control-feedback">
                        <i class="icon-cancel-circle2"></i>
                      </div>
                      <span class="help-block text-danger">{{ $errors->first('name') }}</span>
                    @endif
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2">No Telepon</label>
                  <div class="col-lg-10">
                    <input type="numeric" class="form-control text-uppercase" name="no_telp" value="{{ $user->no_telp }}">
                    @if ($errors->has('no_telp'))
                      <div class="form-control-feedback">
                        <i class="icon-cancel-circle2"></i>
                      </div>
                      <span class="help-block text-danger">{{ $errors->first('no_telp') }}</span>
                    @endif
                  </div>
                </div>

                 <div class="form-group">
                  <label class="control-label col-lg-2">Tempat Lahir</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control text-uppercase" name="tempat_lahir" value="{{ $user->tempat_lahir }}" >
                    @if ($errors->has('tempat_lahir'))
                      <div class="form-control-feedback">
                        <i class="icon-cancel-circle2"></i>
                      </div>
                      <span class="help-block text-danger">{{ $errors->first('tempat_lahir') }}</span>
                    @endif
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2">Tanggal Lahir</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="tgl_lahir" placeholder="" name="tgl_lahir" value="{{ $user->tgl_lahir }}">
                    @if ($errors->has('tgl_lahir'))
                      <div class="form-control-feedback">
                        <i class="icon-cancel-circle2"></i>
                      </div>
                      <span class="help-block text-danger">{{ $errors->first('tgl_lahir') }}</span>
                    @endif
                  </div>
                </div>

                 <div class="form-group">
                  <label class="control-label col-lg-2"> Jenis Kelamin </label>
                  <div class="col-lg-10">
                   <label class="radio-inline radio-right">
                    <input type="radio" name="jenis_kelamin" {{ $user->jenis_kelamin == "PRIA" || old('jenis_kelamin') == ""? "checked='checked'" : "" }} value="PRIA">
                    Pria
                  </label>

                  <label class="radio-inline radio-right">
                    <input type="radio" name="jenis_kelamin" value="WANITA"  {{ $user->jenis_kelamin == "WANITA" ? "checked='checked'" : "" }}>
                    Wanita
                  </label>
                    @if ($errors->has('jenis_kelamin'))
                      <div class="form-control-feedback">
                        <i class="icon-cancel-circle2"></i>
                      </div>
                      <span class="help-block text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                    @endif
                  </div>
                </div>

                 <div class="form-group">
                  <label class="control-label col-lg-2">Alamat</label>
                  <div class="col-lg-10">
                    <textarea class="form-control" name="alamat" >{{ $user->alamat }}</textarea>
                    @if ($errors->has('alamat'))
                      <div class="form-control-feedback">
                        <i class="icon-cancel-circle2"></i>
                      </div>
                      <span class="help-block text-danger">{{ $errors->first('alamat') }}</span>
                    @endif
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2">Agama</label>
                  <div class="col-lg-10">
                    <select class="select-menu-color" name="agama" required="">
                        <option value="ISLAM" {{$user->agama == "ISLAM" ? "selected=''" : "" }}>ISLAM</option>
                        <option value="KRISTEN" {{ $user->agama == "KRISTEN" ? "selected=''" : "" }}>KRISTEN</option>
                        <option value="HINDU" {{ $user->agama == "HINDU" ? "selected=''" : "" }}>HINDU</option>
                        <option value="BUDHA" {{ $user->agama == "BUDHA" ? "selected=''" : "" }}>BUDHA</option>
                        <option value="KONGHUCU" {{ $user->agama == "KONGHUCU" ? "selected=''" : "" }}>KONGHUCU</option>
                    </select>
                    @if ($errors->has('agama'))
                      <div class="form-control-feedback">
                        <i class="icon-cancel-circle2"></i>
                      </div>
                      <span class="help-block text-danger">{{ $errors->first('agama') }}</span>
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
