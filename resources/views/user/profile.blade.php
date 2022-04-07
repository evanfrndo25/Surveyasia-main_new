@extends('layouts.footer')
@extends('layouts.base')

@if (Auth::user()->role_id == 2)
@include('researcher.layouts.navbar2')
@elseif(Auth::user()->role_id == 3)
@include('respondent.layouts.navbar2')
@endif

@section('content')

<h3 class="pt-5 ms-5 fw-bold">Akun Saya</h3>

{{-- User Dashboard --}}
<section class="user-profile pt-4 pb-5 mx-5" id="user-profile">
    <div class="row">
        {{-- Sidebar --}}
        <div class="col-lg-2 d-none d-md-block">
            <div class="shadow p-4 me-4" style="border-radius: 16px;">
                <h5>Personal</h5>
                <a href="{{ route('user-profile') }}" class="link-dark text-decoration-none">
                    <p class="mt-3 ms-3"><i class="fas fa-user fa-fw"></i> Profil</p>
                </a>
                @if(Auth::user()->role_id == 3)
                <a href="{{ route('respondent.survey.history') }}" class="link-dark text-decoration-none">
                    <p class="mt-3 ms-3"><i class="fas fa-ticket-alt fa-fw"></i> Saldo Hadiah</p>
                </a>
                @endif
                @if (Auth::user()->role_id == 2)
                <a href="{{ route('researcher.transaction.history') }}" class="link-dark text-decoration-none">
                    <p class="mt-3 ms-3"><i class="fas fa-file-invoice-dollar fa-fw"></i> Riwayat Transaksi</p>
                </a>
                <a href="{{ route('researcher.tutorial.index') }}" class="link-dark text-decoration-none">
                    <p class="mt-3 ms-3"><i class="fas fa-tv fa-fw"></i> Tutorial</p>
                </a>
                @endif
                <a href="{{ route('news.index') }}" class="link-dark text-decoration-none">
                    <p class="mt-3 ms-3"><i class="fas fa-newspaper fa-fw"></i> Berita</p>
                </a>
                <a href="{{ route('contact.index') }}" class="link-dark text-decoration-none">
                    <p class="mt-3 ms-3"><i class="fas fa-phone-alt fa-fw"></i> Kontak</p>
                </a>
                <form action="{{ route('logout') }}" method="POST" class="m-0">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt fa-fw"></i>
                        Logout</button>
                </form>
            </div>
        </div>
        {{-- End Sidebar --}}

        {{-- User Profile --}}
        <div class="col-lg-10 shadow pt-4 pb-5 px-5" style="border-radius: 16px;">
            @if (session('success'))
            <div class="alert alert-success alert-dismissible show fade">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (session('error'))
            <div class="alert alert-danger alert-dismissible show fade">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="row">
                <div class="col-md-2">
                    @if (Auth::user()->avatar == null)
                    <img src="{{ asset('assets/img/noimage.png') }}" alt="Profile Picture" width="110"
                        class="img-fluid d-block mb-2 ms-3 rounded-pill object-fit-cover">
                    @elseif (Auth::user()->provider_name != null)
                    <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->nama_lengkap }}" width="110"
                        class="img-fluid d-block mb-2 ms-3 rounded-pill object-fit-cover">
                    @else
                    <img src="{{ asset('storage/' . \Auth::user()->avatar) }}" width="110" height="110"
                        alt="{{ Auth::user()->nama_lengkap }}"
                        class="img-fluid d-block mb-2 ms-3 rounded-pill object-fit-cover" name="avatar">
                    @endif
                    <span class="d-flex">
                        <a href="{{ route('edit-profile') }}" class="link-orange text-decoration-none">Change</a>
                        <p class="text-orange m-0 mx-1">|</p>
                        <a href="{{ route('user-profile.delete', [\Auth::user()->id]) }}" method="post"
                            class="link-orange text-decoration-none"
                            onclick="return confirm('Apakah Anda yakin menghapus Foto Profil ini?')">Delete</a>
                        @csrf
                        @method('DELETE')
                    </span>
                </div>
                <div class="col">
                    <h3 class="fw-semibold">{{ $user->nama_lengkap }}</h3>
                    @if (Auth::user()->subscription_id != null)
                    <p>Show subscription name</p>
                    @elseif(Auth::user()->subscription_id == 1)
                    <p class="fs-14px text-muted me-3">Free Account</p>
                    <a href="{{ route('researcher.pricings.index') }}" class="btn btn-orange btn-sm" role="button">Upgrade
                    </a>
                    @else
                    <p>hai</p>
                    @endif
                </div>
            </div>

            <div class="d-flex justify-content-end mt-3">
                <a href="{{ route('edit-profile') }}" class="btn btn-outline-orange">Edit Profil</a>
            </div>

            <div class="row mt-4">
                <div class="col-md-2">
                    <p>Nama</p>
                </div>
                <div class="col">
                    <p class="fw-semibold">{{ $user->nama_lengkap }}</p>
                </div>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <p>Email</p>
                </div>
                <div class="col">
                    <p class="fw-semibold">{{ Auth::user()->email }}</p>
                    <div class="d-flex">
                        @if (Auth::user()->email_verified_at != null)
                        <p class="text-success me-3">Verified</p>
                        @else
                        <p class="text-orange me-3">Not Verified</p>
                        <a href="#" class="link-orange text-decoration-none">Resend
                            Email</a>
                        @endif
                    </div>
                </div>
                <hr>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <p>No. Telepon</p>
                </div>
                <div class="col">
                    <p class="fw-semibold">{{ $user->profile->telp ?? $user->telp }}</p>
                </div>
                <hr>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <p>Pekerjaan</p>
                </div>
                <div class="col">
                    <p class="fw-semibold">{{ $user->profile->job ?? $user->job }}</p>
                </div>
                <hr>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <p>Alamat</p>
                </div>
                <div class="col">
                    <p class="fw-semibold">
                        {{ $user->profile->address ?? $user->address }}
                    </p>
                </div>
                <hr>
            </div>
        </div>
    </div>
</section>
{{-- End User Profile --}}

@endsection
