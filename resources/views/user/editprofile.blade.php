@extends('layouts.footer')
@extends('layouts.base')

@if (Auth::user()->role_id == 2)
@include('researcher.layouts.navbar2')
@elseif(Auth::user()->role_id == 3)
@include('respondent.layouts.navbar2')
@endif

@section('content')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
            <a href="{{ route('user-profile') }}" class="link-dark"><i class="fa fa-arrow-left"></i> Kembali ke
                Profil</a>
            <div class="card mt-3">
                <div class="card-header">
                    <h4 class="card-title m-0">Ubah Profil</h4>
                </div>
                <form action="{{ route('edit-profile.update', [Auth::user()->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col">
                                <div class="d-flex">
                                    @if (Auth::user()->avatar == null)
                                    <img src="{{ asset('assets/img/noimage.png') }}" alt="Profile Picture" width="70"
                                        height="70"
                                        class="d-block mb-2 rounded-pill profile-picture-preview object-fit-cover">
                                    @elseif (Auth::user()->provider_name != null)
                                    <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->nama_lengkap }}"
                                        width="110"
                                        class="d-block mb-2 rounded-pill profile-picture-preview object-fit-cover">
                                    @else
                                    <img src="{{ asset('storage/' . \Auth::user()->avatar) }}" width="70" height="70"
                                        alt="{{ Auth::user()->nama_lengkap }}"
                                        class="d-block mb-2 rounded-pill profile-picture-preview object-fit-cover"
                                        name="avatar">
                                    @endif
                                    <span class="ms-3">
                                        <label for="avatar" class="form-label">Ubah Foto Profil</label>
                                        <input type="file" class="form-control profile-photo" id="profile-photo"
                                            name="avatar" value="{{ \Auth::user()->avatar }}">
                                        {!!$errors->first('avatar', '<span class="text-danger">:message</span>')!!}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <!-- <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror "
                                    name="nama_lengkap"
                                    value="{{ \Auth::user()->profile->nama_lengkap ?? $user->nama_lengkap }}">
                                @error('nama_lengkap')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div> -->
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ \Auth::user()->email }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="telp" class="form-label">Nomor Telepon</label>
                                <input type="tel" class="form-control @error('telp') is-invalid @enderror" name="telp"
                                    value="{{ $user->profile->telp ?? $user->telp }}">
                                @error('telp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="job" class="form-label">Pekerjaan</label>
                                <input type="text" class="form-control" onkeypress="if(event.key.match(/^[a-zA-ZÑñ\s]+$/) == null) { return false; }" />

                                <!-- <input type="text" class="form-control @error('job') is-invalid @enderror" name="job"
                                    value="{{ $user->profile->job ?? $user->job }}">
                                @error('job')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror -->
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="address" class="form-label">Alamat</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror"
                                    name="address" value="{{ $user->profile->address ?? $user->address }}">
                                @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-end">
                                <a class="btn btn-outline-orange" href="{{ route('user-profile') }}"
                                    role="button">Batal</a>
                                <button class="btn btn-orange" type="submit">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!--Ubah Password-->
        <div class="col-md-8 mt-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title m-0">Ubah Password</h4>
                </div>
                <form action="{{ route('change-password') }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <label for="old_password" class="form-label">Kata Sandi Lama</label>
                                <input type="password" class="form-control @error('old_password') is-invalid @enderror"
                                    name="old_password" required>
                            </div>
                            @error('old_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="password" class="form-label">Kata Sandi Baru</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" required>
                            </div>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi
                                    Baru</label>
                                <input type="password"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    name="password_confirmation" required>
                            </div>
                            @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="row mt-3">
                            <div class="col text-end">
                                <button class="btn btn-orange" type="submit">Ubah Kata Sandi</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection