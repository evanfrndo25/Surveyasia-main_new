@extends('layouts.footer')
@extends('layouts.base')
@extends('layouts.navbar')

@section('content')
<section class="auth ff-inter min-vh-100">
    <div class="container">
        <div class="row justify-content-center py-5 py-md-0">
            <div class="col-12 col-md-7 py-0 py-md-4 py-xxl-5">
                <div class="card radius-default shadow py-3 px-3 px-lg-5">
                    <div class="card-body text-center">
                        <img src="{{ asset('assets/img/email_verify.png') }}" alt="Surveyasia" width="300"
                            class="img-fluid">
                        <h4 class="fw-semibold mt-4">Verifikasi Email</h4>
                        <p class="mt-3 mb-1">Hai <span class="fw-semibold">{{ Auth::user()->nama_lengkap }}</span>!
                            Tautan
                            verifikasi
                            telah dikirim, mohon cek email Anda.
                        </p>
                        <p class="text-muted fs-14px">Jika tidak
                            menerima email dari Surveyasia, gunakan tombol
                            di
                            bawah untuk mengirim ulang email.
                        </p>

                        @if (session('status') == 'verification-link-sent')
                        <div class="mb-4 fw-semibold text-sm text-green-600">
                            {{ __('A new verification link has been sent to the email address you provided during
                            registration.') }}
                        </div>
                        @endif

                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ Auth::id() }}">
                            <button type="submit" class="btn btn-orange rounded-default text-white w-75">Kirim
                                Ulang</button>
                        </form>
                        <p class="text-muted fs-14px mb-0 mt-3">Pertanyaan? email
                            kami di <a href="mailto:surveyasia@citiasiainc.id"
                                class="link-orange text-decoration-none">surveyasia@citiasiainc.id</a>
                        </p>
                        <form action="{{ route('verification.logout') }}" method="POST" class="m-0 mt-3">
                            @csrf
                            <button class="btn btn-link link-orange text-decoration-none fs-14px">Kembali ke
                                Beranda</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection