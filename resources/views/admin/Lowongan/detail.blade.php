@extends('layouts.dashboardMaster')
@section('title','| Detail Lowongan')
@section('lowonganActive','active')

@section('script')

<!-- Theme JS files -->
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/visualization/d3/d3.min.js')}}">
</script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/visualization/d3/d3_tooltip.js')}}">
</script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/forms/styling/switchery.min.js')}}">
</script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/forms/styling/uniform.min.js')}}">
</script>
<script type="text/javascript"
    src="{{asset('template/material/assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/ui/moment/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/pickers/daterangepicker.js')}}">
</script>
<link href="{{asset('template/material/assets/css/icons/fontawesome/styles.min.css')}}" rel="stylesheet"
    type="text/css">
<script type="text/javascript" src="{{asset('template/material/assets/js/core/app.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/pages/dashboard.js')}}"></script>

<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/ui/ripple.min.js')}}"></script>
<!-- /theme JS files -->
@endsection
@section('header')
<!-- Page header -->
<div class="page-header">
    <div class="page-header-content">
        <div class="page-title">
            <h4>
                <a href="{{url('admin/lowongan')}}"><i class="icon-arrow-left52 position-left"></i></a>
                <span class="text-semibold">Admin</span> - Detail Lowongan
                <small class="display-block">Hello, {{ Auth::user()->name }}!</small>
            </h4>
        </div>

    </div>
</div>
<!-- /page header -->
@endsection

@section('content')
<!-- Dashboard content -->
<div class="row">
    <div class="col-lg-9 row">
        <div class="col-lg-12">

            <!-- Marketing campaigns -->
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h6 class="panel-title">Detail Lowongan</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i>
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#"><i class="icon-sync"></i> Update data</a></li>
                                    <li class="divider"></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-lg text-nowrap">
                        <thead class="bg-grey">
                            <tr>
                                <th>Posisi</th>
                                <th>Keterangan</th>
                                <th>Deadline</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="media-left">
                                        <h5 class="text-semibold no-margin">{{$lowongan->posisi}}</h5>
                                    </div>
                                </td>

                                <td>

                                    <div class="media-left">
                                        <h6 class="text-semibold no-margin">{{$lowongan->keterangan}}</h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="media-left">
                                        <div id="campaign-status-pie"></div>
                                    </div>

                                    <div class="media-left">
                                        <ul class="list-inline list-inline-condensed no-margin">
                                            <li>
                                                <span class="status-mark border-danger"></span>
                                            </li>
                                            <li>
                                                <span class="text-muted" style="font-size:20px">
                                                    {{ Carbon\Carbon::parse($lowongan->tanggal_selesai)->formatLocalized('%d %B %Y') }}
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <a href="{{ url('admin/lowongan/compile') }}/{{ $lowongan->id_lowongan }}" class="btn btn-danger">Kalkulasikan</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-flat border-top-green">
                <div class="table-responsive">
                    <table class="table table-lg text-nowrap text-center">
                        <thead class="bg-green-700 ">
                            <tr>
                                <th class="text-center">Umur</th>
                                <th class="text-center">IPK</th>
                                <th class="text-center">Tes Online</th>
                                <th class="text-center">CV</th>
                                <th class="text-center">Ijasah</th>
                            </tr>
                        </thead>
                        <tbody>
                           <tr>
                               <td>20 - 22 = 0,5</td>
                               <td>> 3.00 = 0,5</td>
                               <td>1 soal benar =  0,1</td>
                               <td> sesuai = 0,5</td>
                               <td> sesuai = 0,5</td>
                           </tr>
                            <tr>
                                <td>23 - 25 = 0,3</td>
                                <td>< 3.00 = 0,3</td>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-flat border-top-orange">
                <div class="panel-heading">
                    <h6 class="panel-title">Pembobotan Nilai</h6>
                </div>
                <div class="table-responsive">
                    <table class="table table-lg text-nowrap text-center">
                        <thead class="bg-orange-800 ">
                            <tr>
                                <th class="text-center" rowspan="2">Calon Pegawai</th>
                                <th class="text-center" colspan="5">Kriteria</th>
                                <th class="text-center bg-purple" colspan="5">Hasil</th>
                            </tr>
                            <tr>
                                <th class="text-center">C1</th>
                                <th class="text-center">C2</th>
                                <th class="text-center">C3</th>
                                <th class="text-center">C4</th>
                                <th class="text-center">C5</th>
                                <th class="text-center bg-purple">C1</th>
                                <th class="text-center bg-purple">C2</th>
                                <th class="text-center bg-purple">C3</th>
                                <th class="text-center bg-purple">C4</th>
                                <th class="text-center bg-purple">C5</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($pelamar as $item)
                              <tr>
                                  <td>{{ $item->user->name }}</td>
                                  @if ($item->nilai != null)
                                  <td>{{ $item->nilai->c1 }}</td>
                                  <td>{{ $item->nilai->c2 }}</td>
                                  <td>{{ $item->nilai->c3 }}</td>
                                  <td>{{ $item->nilai->c4 }}</td>
                                  <td>{{ $item->nilai->c5 }}</td>
                                  <td>{{ $item->nilai->hasil_c1 }}</td>
                                  <td>{{ $item->nilai->hasil_c2 }}</td>
                                  <td>{{ $item->nilai->hasil_c3 }}</td>
                                  <td>{{ $item->nilai->hasil_c4 }}</td>
                                  <td>{{ $item->nilai->hasil_c5 }}</td>
                                  @else
                                  <td>-</td>
                                  <td>-</td>
                                  <td>-</td>
                                  <td>-</td>
                                  <td>-</td>
                                  <td>-</td>
                                  <td>-</td>
                                  <td>-</td>
                                  <td>-</td>
                                  <td>-</td>
                                  @endif
                                
                              </tr>
                          @endforeach
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /marketing campaigns -->
    <div class="col-md-3">
        <!-- Members online -->
        <div class="col-md-12">
            <div class="panel bg-teal-400">
                <div class="panel-body">
                    <div class="heading-elements" style="font-size:30px">
                        <i class="fa fa-users"></i>
                    </div>
                    <h3 class="no-margin">{{count($pelamar)}}</h3>
                    Pelamar
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-flat border-top-indigo">
                <div class="panel-heading">
                    <h6 class="panel-title">Nilai Bobot Minimal</h6>
                </div>

                <div class="table-responsive">
                    <table class="table table-lg text-nowrap text-center">
                        <thead class="bg-indigo-700 ">
                            <tr >
                                <th class="text-center">Kriteria</th>
                                <th class="text-center">Bobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($totalBobot = 0)
                            @foreach ($bobot as $key => $value)
                            <tr>
                                <td>{{$value->kriteria}}</td>
                                <td>{{$value->bobot}}</td>
                            </tr>
                            @php($totalBobot += $value->bobot)
                            @endforeach
                        </tbody>
                        <tfoot class="text-center bg-indigo-300">
                            <tr>
                                <th class="text-center">Total</th>
                                <th class="text-center">{{ $totalBobot }}</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-flat border-top-success">
                <div class="panel-heading">
                    <h6 class="panel-title">Nilai Akhir</h6>
                </div>

                <div class="table-responsive">
                    <table class="table table-lg text-nowrap text-center">
                        <thead class="bg-success ">
                            <tr>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($hasil as $item)
                               <tr>
                                   <td><a href="{{ url('admin/profile') }}/{{ $item->id }}">{{ $item->user->name }}</a>
                                   </td>
                                   @if ($item->nilai != null)
                                   <td>{{ $item->nilai->nilai }}</td>
                                    @else
                                    <td>-</td>
                                   @endif
                               </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- /dashboard content -->


@endsection
