@extends('layouts.footer')
@extends('layouts.base')
@extends('layouts.navbar')

@section('content')
<section class="auth ff-inter min-vh-100">
    <div class="container">
        <div class="row justify-content-between py-3 py-md-4 py-xxl-5">
            <div class="col-md-6 col-lg-5 text-white mt-4 mt-sm-5">
                <h1 class="fw-bold">Kami melihat Anda pertama kali di sini.</h1>
                <p class="mt-3">Dengan bergabung menjadi responden, kamu berkesempatan mendapatkan reward menarik.</p>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="card border-0 radius-default shadow py-2 px-2 px-md-4">
                    <div class="card-body">
                        <div class="text-center">
                            <a href="/"><img src="{{ asset('assets/img/surveyasia_black.svg') }}" alt="Surveyasia"
                                    width="250" class="img-fluid"></a>
                        </div>
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            @if ($role == 'researcher')
                            <input type="hidden" name="role" value="2">
                            @else
                            <input type="hidden" name="role" value="3">
                            @endif
                            <div class="mt-3">
                                <label for="nama_lengkap" class="form-label fw-semibold">Nama Lengkap</label>
                                <input type="nama_lengkap"
                                    class="form-control @error('nama_lengkap')is-invalid @enderror" id="nama_lengkap"
                                    name="nama_lengkap" placeholder="Masukkan nama lengkap Anda" required
                                    value="{{ old('nama_lengkap') }}" />
                                @error('nama_lengkap')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <label for="email" class="form-label fw-semibold">Email</label>
                                <input type="email" class="form-control @error('email')is-invalid @enderror" id="email"
                                    name="email" aria-describedby="emailHelp" placeholder="Masukkan email Anda" required
                                    value="{{ old('email') }}" />
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <label for="password" class="form-label fw-semibold">Password</label>
                                <input type="password" class="form-control @error('password')is-invalid @enderror"
                                    id="password" name="password" placeholder="Masukkan kata sandi Anda" required />
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <div class="form-check">
                                    <input class="form-check-input form-check-input-orange" type="checkbox"
                                        name="checkbox" id="checkbox" {{ old('checkbox') ? 'checked' : '' }} required>
                                    <label class="form-check-label fs-14px" for="checkbox">
                                        Dengan
                                        membuat akun berarti
                                        Anda menyetujui <a href="{{ route('tac') }}" class="link-orange">Syarat dan
                                            Ketentuan</a>, serta <a href="{{ route('privacy') }}"
                                            class="link-orange">Kebijakan
                                            Privasi</a> kami.
                                    </label>
                                </div>
                            </div>
                            @if ($role == 'researcher')
                            <button type="submit" class="btn btn-orange radius-default w-100 text-white mt-3"
                                name="submit">Daftar</button>
                            @else
                            <button type="submit" class="btn btn-orange radius-default w-100 text-white mt-3"
                                name="submit">Lanjutkan</button>
                            @endif
                        </form>
                        <p class="text-center text-muted fs-14px mt-4">atau daftar dengan</p>
                        <div class="d-flex justify-content-center gap-3">
                            <a href="{{ url('/auth/google') }}">
                                <div class="card card-btn radius-default py-2 px-3">
                                    <img src="{{ asset('assets/img/btn_google.png') }}" alt="Google" height="25" />
                                </div>
                            </a>
                            <a href="{{ url('/auth/facebook') }}">
                                <div class="card card-btn radius-default py-2 px-3">
                                    <img src="{{ asset('assets/img/btn_facebook.png') }}" alt="Facebook" height="25" />
                                </div>
                            </a>
                            <a href="{{ url('/auth/linkedin') }}">
                                <div class="card card-btn radius-default py-2 px-3">
                                    <img src="{{ asset('assets/img/btn_linkedin.png') }}" alt="LinkedIn" height="25" />
                                </div>
                            </a>
                        </div>
                        <div class="text-center mt-3">
                            <p class="text-muted fs-14px">Sudah memiliki akun? <a href="{{ route('login') }}"
                                    class="link-orange text-decoration-none fw-semibold">Masuk sekarang</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection