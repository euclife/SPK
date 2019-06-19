@extends('layouts.auth')

@section('title','PT. INTI | Masuk')

@section('content')
   <section class="row no-gutter reverse-order">
      <div class="col-one-half middle padding">
        <div class="max-width-s">
          <h5>Selamat Datang Kembali.</h5>
          <p class="paragraph">Masuk ke akun anda.</p>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
              <label for="email">Email:</label>
              <input id="email" type="email" name="email" value="{{ old('email') }}" required="">
               @if ($errors->has('email'))
                                    <span class="invalid-feedback" style="color: red">
                                      {{ $errors->first('email') }}
                                    </span>
                @endif
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input id="password" type="password" name="password" {{ $errors->has('password') ? ' is-invalid' : '' }}">
               @if ($errors->has('password'))
                                    <span class="invalid-feedback" style="color: red">
                                        {{ $errors->first('password') }}
                                    </span>
                                @endif
              <a href="{{ route('password.request') }}" class="form-help">Lupa password?</a>
            </div>
            <div class="form-group">
              <input id="remember-me" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="remember-me" class="checkbox">Ingat saya</label>
            </div>
            <button type="submit" class="button button-primary full-width" role="button">Masuk</button>
          </form>
        </div>
        <div class="center max-width-s space-top">
          <span class="muted">Belum punya akun? </span><a href="{{route('register')}}">Sign Up</a>
        </div>
      </div>
      <div class="col-one-half bg-image-04 featured-image"></div>
    </section>
@endsection
