@extends('layouts.dashboardMaster')

@section('title','| Daftar')
@section('lowonganActive','active')

@section('script')
{{-- Form --}}
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/forms/styling/switch.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/forms/selects/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}">
</script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/forms/inputs/autosize.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/forms/inputs/formatter.min.js')}}"></script>
<script type="text/javascript"
    src="{{asset('template/material/assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/forms/inputs/typeahead/handlebars.min.js')}}">
</script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/forms/inputs/passy.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/forms/inputs/maxlength.min.js')}}"></script>
 <script type="text/javascript" src="{{  asset('template/material/assets/js/plugins/forms/inputs/formatter.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('template/material/assets/js/pages/form_inputs.js') }}"></script>

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

   <div class="col-md-12">
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

            <form class="form-horizontal" action="{{ url('pelamar/accept') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" value="{{ $lowongan->id_lowongan }}" name="id">
              <fieldset class="content-group">
                <legend class="text-bold">Identitas Diri</legend>

                <div class="form-group">
                  <label class="control-label col-lg-2">SURAT LAMARAN</label>
                  <div class="col-lg-10">
                    <input type="file" class="file-styled-primary" name="surat_lamaran" required>
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
                    <input type="file" class="file-styled-primary" name="cv" required>
                    @if ($errors->has('cv'))
                      <div class="form-control-feedback">
                        <i class="icon-cancel-circle2"></i>
                      </div>
                      <span class="help-block text-danger">{{ $errors->first('cv') }}</span>
                    @endif
                  </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Ijasah</label>
                    <div class="col-lg-10">
                        <input type="file" class="file-styled-primary" name="ijasah" required>
                        @if ($errors->has('ijasah'))
                        <div class="form-control-feedback">
                            <i class="icon-cancel-circle2"></i>
                        </div>
                        <span class="help-block text-danger">{{ $errors->first('ijasah') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2">IPK</label>
                  <div class="col-lg-10 row">
                    <div class="col-md-3">
                      <input type="number" class="form-control" pattern="([0-9].[0-9])x" name="ipk"
                          id="ipk" required value="{{ old('ipk') }}">
                    </div>
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

<script>
  	$(function() {

  	$('[name="nip"]').formatter({
  	pattern: '<?php echo('{{99999999}} {{999999}} {{9}} {{999}}')?>'
  	}); 


  	});
</script>

@endsection
