<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT INTI @yield('title')</title>
    <link rel="icon" href="{{ asset('image/Logo-mini.png') }}" type="image/gif" sizes="16x16">
    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('template/material/assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('template/material/assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('template/material/assets/css/core.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('template/material/assets/css/components.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('template/material/assets/css/colors.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{{ asset('template/material/assets/js/plugins/loaders/pace.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/material/assets/js/core/libraries/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/material/assets/js/core/libraries/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/material/assets/js/plugins/loaders/blockui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/material/assets/js/plugins/ui/nicescroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/material/assets/js/plugins/ui/drilldown.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/material/assets/js/plugins/notifications/sweet_alert.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('template/material/assets/js/plugins/notifications/pnotify.min.js')}}"></script>

    <!-- /core JS files -->

    <!-- /core JS files -->

    @yield('script')

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

</head>
@php
$dir = 'upload/user/img/profile/';
$authFoto = "image/profile.jpg";
$blob = Auth::user()->foto;
if ($blob !="") {
$authFoto = $dir.$blob;
}
@endphp

<body>

    <!-- Main navbar -->
    <div class="navbar navbar-inverse bg-indigo">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('image/Logo.png') }}" alt=""></a>

            <ul class="nav navbar-nav pull-right visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            </ul>
        </div>

        <div class="navbar-collapse collapse" id="navbar-mobile">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"></li>

                <li class="dropdown dropdown-user">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ $authFoto }}" alt="">
                        <span>{{ Auth::user()->name }}</span>
                        <i class="caret"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="{{ url('profile') }}"><i class="icon-user-plus"></i> Profil</a></li>
                        <li class="divider"></li>
                        <li><a href="#" id="logout_button"><i class="icon-switch2"></i> Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="navbar navbar-default" id="navbar-second">
        <ul class="nav navbar-nav no-border visible-xs-block">
            <li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-menu7"></i></a></li>
        </ul>

        <div class="navbar-collapse collapse" id="navbar-second-toggle">
            <ul class="nav navbar-nav navbar-nav-material">
                @if (Auth::user()->level == 'ADMIN')
                <li class="@yield('dashboardActive')"><a href="{{ url('admin') }}"><i class="icon-display4 position-left"></i> Dashboard</a></li>
                <li class="@yield('lowonganActive')"><a href="{{ url('admin/lowongan') }}"><i class=" icon-stack3 position-left"></i> Lowongan</a></li>
                <li class="dropdown @yield('userActive')">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-lab position-left"></i> Soal <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu width-250">
                        <li class="@yield('psikotestActive')"><a href="{{url('admin/soal/psikotest')}}">Psikotest</a></li>
                        <li class="@yield('umumActive')"><a href="{{url('admin/soal/umum')}}">Umum</a></li>
                    </ul>
                </li>
            </ul>
            @else
            <li class="@yield('dashboardActive')"><a href="{{ url('dashboard') }}"><i class="icon-display4 position-left"></i> Dashboard</a></li>
            <li class="@yield('profileActive')"><a href="{{ url('profile') }}"> <i class="icon-profile position-left"></i>My Profile</a></li>
            @endif

            </ul>
        </div>
    </div>
    <!-- /second navbar -->

    @yield('header')


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper">
                @yield('content')
            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->


    <!-- Footer -->
    <div class="navbar navbar-default navbar-fixed-bottom footer">
        <ul class="nav navbar-nav visible-xs-block">
            <li><a class="text-center collapsed" data-toggle="collapse" data-target="#footer"><i class="icon-circle-up2"></i></a></li>
        </ul>

        <div class="navbar-collapse collapse" id="footer">
            <div class="navbar-text">
                &copy; 2019. <a href="#" class="navbar-link">PT. INTI</a> by <a href="#" class="navbar-link" target="_blank">Maulana Sutejo</a>
            </div>

        </div>
    </div>
    <!-- /footer -->

    <!-- /page container -->
    <script type="text/javascript">
        @if(session()->has('success'))
        $(function() {
            var notifSukses = (function thename() {
                new PNotify({
                    title: 'Success!',
                    text: '{{ Session::get('success')}}',
                    addclass: 'alert alert-styled-left bg-green-800',
                    icon: '<i class="fa fa-check-square"></i>'
                });
            });
            setTimeout(function() {
                notifSukses();
            }, 100);

        });
        @endif

        @if(session()->has('error'))
        $(function() {
            var notifSukses = (function thename() {
                new PNotify({
                    title: 'Error!',
                    text: '{{ Session::get('error')}}',
                    addclass: 'alert alert-styled-left bg-danger',
                    icon: '<i class="fa fa-check-square"></i>'
                });
            });
            setTimeout(function() {
                notifSukses();
            }, 100);

        });
        @endif


            $('#logout_button').on('click', function() {
                swal({
                        title: "Apa anda yakin?",
                        text: "Anda akan logout!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: '#DD6B55',
                        confirmButtonText: 'Logout!',
                        cancelButtonText: "Tidak",
                        closeOnConfirm: false,
                        closeOnCancel: true
                    },
                    function(isConfirm) {
                        if (isConfirm) {
                            document.getElementById('logout-form').submit();
                        }
                    });
            });
    </script>
</body>

</html>
