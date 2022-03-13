@extends('layouts.footer')
@extends('layouts.base')
@extends('layouts.navbar')

@section('content')
<section class="auth ff-inter min-vh-100">
  <div class="container">
    <div class="row justify-content-between py-0 py-md-4 py-xxl-5">
      <div class="col-md-6 col-lg-5 text-white mt-4 mt-sm-5">
        <h1 class="fw-bold">Mari kita membuat sesuatu yang luar biasa hari ini.</h1>
        <p class="mt-3">Dengan bergabung menjadi responden, kamu berkesempatan mendapatkan reward menarik.</p>
      </div>
      <div class="col-md-6 col-lg-5">
        <div class="card border-0 radius-default shadow py-2 px-2 px-md-4">
          <div class="card-body">
            <div class="text-center">
              <a href="/"><img src="{{ asset('assets/img/surveyasia_black.svg') }}" alt="Surveyasia" width="250"
                  class="img-fluid"></a>
            </div>

            @if (session('status'))
            <div class="alert alert-success mt-4" role="alert">
              {{ session('status') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <h4 class="fw-semibold mt-4 mb-0">Lupa password?</h4>
            <p class="text-muted fs-14px">Masukkan email Anda dan kami akan mengirimkan
              tautan reset.</p>
            <form method="POST" action="{{ route('password.email') }}">
              @csrf
              <div class="mt-3">
                <label for="email" class="form-label fw-semibold">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                  id="email" name="email" aria-describedby="emailHelp" placeholder="Masukkan email Anda" required
                  autocomplete="email" autofocus />
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <button type="submit" class="btn btn-orange radius-default w-100 text-white mt-4">Kirim Tautan</button>
            </form>
            <div class="text-center mt-3">
              <a href="{{ route('login') }}" class="link-orange text-decoration-none fs-14px">Kembali ke
                halaman Masuk</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection