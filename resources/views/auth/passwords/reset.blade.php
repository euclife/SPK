@extends('layouts.auth')
@section('title','PT. INTI | Reset Password')

@section('content')
 <section class="row no-gutter reverse-order">
      <div class="col-one-half middle padding">
        <div class="max-width-s">
          <h5>Reset Password</h5>
          <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="form-group">
              <label for="email">Email:</label>
              <input id="email" type="email" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
               @error('email')
                    <span class="invalid-feedback" role="alert" style="color: red">
                            {{ $message }}
                        </span>
                    @enderror
            </div>
            <div class="form-group">
              <label for="password">Password Baru:</label>
              <input id="password" type="password" ame="password_confirmation" required autocomplete="new-password">
               @error('password')
                    <span class="invalid-feedback" role="alert" style="color: red">
                            {{ $message }}
                        </span>
                    @enderror
            </div>
            <div class="form-group">
              <label for="password-confirm">Konfirmasi Password:</label>
              <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
               @error('email')
                    <span class="invalid-feedback" role="alert" style="color: red">
                            {{ $message }}
                        </span>
                @enderror
            </div>
            <button type="submit" class="button button-primary full-width space-top" role="button">Reset Password</a>
          </form>
        </div>
      </div>
      <div class="col-one-half bg-image-06 featured-image"></div>
    </section>

@endsection
