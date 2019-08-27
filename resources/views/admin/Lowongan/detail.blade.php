@extends('layouts.dashboardMaster')
@section('title','| Detail Lowongan')
@section('lowonganActive','active')

@section('script')

<!-- Theme JS files -->
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/ui/moment/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/pickers/daterangepicker.js')}}"></script>
<link href="{{asset('template/material/assets/css/icons/fontawesome/styles.min.css')}}" rel="stylesheet" type="text/css">
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
    <div class="col-lg-8">
        <!-- Marketing campaigns -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h6 class="panel-title">Detail Lowongan</h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
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
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /marketing campaigns -->
    <div class="col-md-2">
        <!-- Members online -->
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
    <div class="col-md-2">
        <!-- Members online -->
        <div class="panel bg-danger-400">
            <div class="panel-body">
                <div class="heading-elements" style="font-size:30px">
                    <i class="fa fa-tasks"></i>
                </div>
                <h3 class="no-margin">{{count($pelamar_tahap1)}}</h3>
                Tahap 1
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <!-- Members online -->
        <div class="panel bg-warning-400">
            <div class="panel-body">
                <div class="heading-elements" style="font-size:30px">
                    <i class="fa fa-tasks"></i>
                </div>
                <h3 class="no-margin">{{count($pelamar_tahap2)}}</h3>
                Tahap 2
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <!-- Members online -->
        <div class="panel bg-success-400">
            <div class="panel-body">
                <div class="heading-elements" style="font-size:30px">
                    <i class="fa fa-tasks"></i>
                </div>
                <h3 class="no-margin">{{count($pelamar_tahap3)}}</h3>
                Lolos
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h6 class="panel-title">Pelamar Tahap 1</h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
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
                    <thead class="bg-danger">
                        <tr>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>IPK</th>
                            <th>Point</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pelamar_tahap1 as $key => $value)
                          <tr>
                            <td><a href="{{url('admin/profile/'.$value->id)}}"> {{$value->name}} </a></td>
                            <td>{{$value->umur}}</td>
                            <td>{{$value->ipk}}</td>
                            <td>{{$value->point}}</td>
                          </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">

        <div class="panel panel-flat">
            <div class="panel-heading">
                <h6 class="panel-title">Pelamar Tahap 2</h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
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
                    <thead class="bg-warning">
                        <tr>
                            <th>Nama</th>
                            <th>Psikotes</th>
                            <th>Umum</th>
                            <th>Point</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($pelamar_tahap2 as $key => $value)
                        <tr>
                          <td><a href="{{url('admin/profile/'.$value->id)}}"> {{$value->name}} </a></td>
                          <td>{{$value->psikotes}}</td>
                          <td>{{$value->umum}}</td>
                          <td>{{$value->point}}</td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">

        <div class="panel panel-flat">
            <div class="panel-heading">
                <h6 class="panel-title">Lolos</h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
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
                    <thead class="bg-success">
                        <tr>
                            <th>Nama</th>
                            <th>Point</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($pelamar_tahap3 as $key => $value)
                        <tr>
                          <td><a href="{{url('admin/profile/'.$value->id)}}"> {{$value->name}} </a></td>
                          <td>{{$value->point}}</td>
                          <td class="text-right col-md-2">
                            <a href="{{url('admin/profil/'.$value->id)}}" class="btn bg-indigo-300"><i class="icon-user position-left"></i> Lihat Profile</a>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /dashboard content -->


@endsection
