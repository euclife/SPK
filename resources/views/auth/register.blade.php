@extends('layouts.auth')
@section('title','PT. INTI | Buat Akun')

@section('content')
<section class="row no-gutter reverse-order">
      <div class="col-one-half middle padding">
        <div class="max-width-s">
          <h5>Salamat Datang!</h5>
          <p class="paragraph">Masukkan identitas kamu untuk mendaftar.</p>
          <form  method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
              <label for="name">Nama:</label>
              <input id="name" type="text" name="name" required="" value="{{ old('name') }}">
              @if ($errors->has('name'))
                    <span class="invalid-feedback" style="color: red">
                      {{ $errors->first('name') }}
                    </span>
                @endif
            </div>
            <div class="form-group">
              <label for="email">E-Mail:</label>
              <input id="email" type="email" name="email" required="" value="{{ old('email')}}">
              @if ($errors->has('email'))
                                    <span class="invalid-feedback" style="color: red">
                                      {{ $errors->first('email') }}
                                    </span>
                @endif
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input id="password" type="password" name="password">
            </div>
            <div class="form-group">
              <label for="password">Konfirmasi Password:</label>
                <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
               @if ($errors->has('password'))
                                    <span class="invalid-feedback" style="color: red">
                                      {{ $errors->first('password') }}
                                    </span>
                @endif
            </div>
            <button type="submit" class="button button-primary full-width space-top" >Buat Akun</button>
          </form>
        </div>
        <div class="center max-width-s space-top">
        </div>
        <div class="center max-width-s">
          <span class="muted">Sudah punya akun? </span><a href="{{route('login')}}">Masuk</a>
        </div>
      </div>
      <div class="col-one-half bg-image-05 featured-image"></div>
</section>

@endsection
