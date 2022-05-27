@extends('layouts.footer')
@extends('layouts.base')
@extends('layouts.navbar')

@section('content')
<section class="auth ff-inter min-vh-100">
    <div class="container">
        <div class="row justify-content-between py-3 py-md-4 py-xxl-5">
            <div class="col-md-6 col-lg-5 text-white mt-4 mt-sm-5">
                <h1 class="fw-bold">Mari kita membuat sesuatu yang luar biasa hari ini.</h1>
                <p class="mt-3">Dengan bergabung menjadi responden, kamu berkesempatan mendapatkan reward menarik.</p>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="card border-0 radius-default shadow py-2 px-2 px-md-4">
                    <div class="card-body">
                        <div class="text-center">
                            <a href="/"><img src="{{ asset('assets/img/surveyasia_black.svg') }}" alt="Surveyasia"
                                    width="250" class="img-fluid"></a>
                        </div>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif

                            @if (session('verified'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Your Account Has been Verified Successfully!
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif

                            @if (session('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('loginError') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif

                            <div class="mt-4">
                                <label for="email" class="form-label fw-semibold">Email</label>
                                <input type="email" class="form-control @error('email')is-invalid @enderror" id="email"
                                    name="email" aria-describedby="emailHelp" placeholder="Masukkan email Anda"
                                    autofocus required value="{{ old('email') }}" />
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <label for="password" class="form-label fw-semibold">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Masukkan password Anda" required />
                            </div>
                            <div class="d-flex justify-content-between  mt-3">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input form-check-input-orange" type="checkbox"
                                            name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label fs-14px" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                                <a href="{{ route('password.request') }}"
                                    class="d-flex justify-content-end link-orange text-decoration-none fs-14px">Lupa
                                    password?</a>
                            </div>
                            <button type="submit"
                                class="btn btn-orange radius-default w-100 text-white mt-3">Masuk</button>
                        </form>
                        <p class="text-center text-muted fs-14px mt-4">atau masuk dengan akun lain</p>
                        <div class="d-flex justify-content-center gap-3">
                            <a href="{{ url('/auth/google') }}">
                                <div class="card card-btn radius-default py-2 px-3">
                                    <img src="{{ asset('assets/img/btn_google.png') }}" alt="Google" height="25" />
                                </div>
                            </a>
                            <a href="{{ url('/auth/facebook') }}" class="d-none">
                                <div class="card card-btn radius-default py-2 px-3">
                                    <img src="{{ asset('assets/img/btn_facebook.png') }}" alt="Facebook" height="25" />
                                </div>
                            </a>
                            <a href="{{ url('/auth/linkedin') }}" class="d-none">
                                <div class="card card-btn radius-default py-2 px-3">
                                    <img src="{{ asset('assets/img/btn_linkedin.png') }}" alt="LinkedIn" height="25" />
                                </div>
                            </a>
                        </div>
                        <div class="text-center mt-3">
                            <p class="text-muted fs-14px">Tidak memiliki akun? <a href="{{ route('choose-role') }}"
                                    class="link-orange text-decoration-none fw-semibold">Buat akun</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection