@extends('layouts.base')

@section('content')
<section class="forgot-password-form" id="forgot-password-form">
  <div class="row">
    <div class="col-md-5 bg-default py-5 ps-5 text-white">
      <div class="row justify-content-center">
        <div class="col-10 col-sm-8">
            <a href="/">
                <img src="/assets/img/surveyasia_white.png" alt="Surveyasia" width="250">
            </a>
          <h1 class="mt-5 fw-bold">
            Mari kita membuat sesuatu yang luar biasa hari ini.
          </h1>
          <p class="mt-4">Dengan bergabung menjadi responden, kamu berkesempatan mendapatkan reward menarik.
          </p>
        </div>
      </div>
      <img src="/assets/img/ellipse_orange_gradient.png" alt="Log In"
        class="img-fluid ellipse-orange-gradient position-absolute bottom-0" />
      <img src="/assets/img/ellipse_orange.png" alt="Log In" class="img-fluid ellipse position-absolute bottom-0" />
    </div>
    <div class="col-md-7 forgot-password-right justify-content-center">
      <h1>🔐</h1>
      <h3 class="mt-2 fw-bold">Atur Ulang Kata Sandi</h3>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm New Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0 mt-3 justify-content-center">
                            <div class="col-md-6">
                            <button type="submit" class="btn btn-orange w-100 text-white my-3">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
