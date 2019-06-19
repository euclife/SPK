<!doctype html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="apple-touch-icon-precomposed" href="media/favicon.png">
  <link rel="icon" href="{{asset('template/auth/media/favicon.png')}}">
  <link rel="mask-icon" href="{{asset('template/auth/media/favicon.svg')}}" color="rgb(36,38,58)">
  <link rel="shortcut icon" href="{{asset('template/auth/media/favicon.png')}}">
  <link rel="stylesheet" href="{{asset('template/auth/css/main.css')}}">
</head>
<body class="page page-onboarding preload">

  <main>
    <a href="{{url('/')}}" class="button button-close" role="button"></a>

    @yield('content')

  </main>

  <script src="{{asset('template/auth/js/jquery.min.js')}}"></script>
  <script src="{{asset('template/auth/js/main.js')}}"></script>
</body>
</html>