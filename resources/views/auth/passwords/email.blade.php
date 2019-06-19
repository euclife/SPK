@extends('layouts.auth')
@section('title','PT. INTI | Lupa Password')

@section('content')
<section class="row no-gutter reverse-order">
  <div class="col-one-half middle padding">
    <div class="max-width-s">
     @if (session('status'))
     <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <h5>Lupa Password?</h5>
    <p class="paragraph">Kami akan mengirimkan tautan untuk merubah password anda.</p>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-group">
          <label for="email">Email:</label>
          <input id="email" type="email"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          @error('email')
          <span class="invalid-feedback" role="alert" style="color: red">
            {{ $message }}
        </span>
        @enderror
    </div>
    <button type="submit"  class="button button-primary full-width space-top" role="button">Kirim tautan</button>
</form>
</div>
<div class="center max-width-s space-top">
    <span class="muted">Sudah Punya akun? </span><a href="{{route('login')}}">Log In</a>
</div>
</div>
<div class="col-one-half bg-image-06 featured-image"></div>
</section>

@endsection
