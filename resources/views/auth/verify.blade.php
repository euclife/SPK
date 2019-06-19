@extends('layouts.auth')
@section('title','PT. INTI | Auth')

@section('content')
<section class="row no-gutter reverse-order">
  <div class="col-one-half middle padding">
    <div class="max-width-s">
      <h5>Harap Verifikasi E-Mail Anda.</h5>
      <p class="paragraph">Periksa Email anda.</p>
      <p class="paragraph">Jika anda tidak menerima email verifikasi, <a href="{{ route('verification.resend') }}">klik disini untuk mengirim email verifikasi ulang</a>.</p>
      @if (session('resent'))
      <div class="alert alert-success" role="alert">
        {{ __('Tautan verifikasi baru telah di kirim ke alamat E-mail anda.') }}
    </div>
    @endif
    @guest
    
    @else
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <a  class="button button-primary space-top" href="{{ route('logout') }}"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();" >Logout</a>
    @endguest
</div>
</div>

<div class="col-one-half bg-image-04 featured-image"></div>
</section>

@endsection
