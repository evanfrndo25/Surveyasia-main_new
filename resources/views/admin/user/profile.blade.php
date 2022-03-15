@extends('admin.layouts.base')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-2 nopadding">
            @include('admin.component.sidebar')
        </div>
        <div class="col-10 nopadding">
            @include('admin.component.header')

            <div class="container mt-4">
                <div class="row">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="col">
                        @if (isset($user->profile->id))
                        <form action="{{ route('admin.users.update', $user->profile->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <img src="" class="img-fluid" alt=""
                                            width="400px">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <input type="hidden" name="id_user" id="" value="{{  $user->id }}">
                                        <label for="exampleFormControlInput1" class="form-label ">NIK</label>
                                        <input type="text" class="form-control @error('nik') is-invalid @enderror"
                                            id="exampleFormControlInput1" name="nik" value="{{ $user->profile->nik }}">
                                        @error('nik')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <p class="text-danger " id="messageNIK" hidden></p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label ">Nama</label>
                                        <input type="text"
                                            class="form-control @error('nama_lengkap') is-invalid @enderror"
                                            id="nama_lengkap" name="nama_lengkap" aria-describedby="titleHelp" required
                                            value="{{ $user->profile->nama_lengkap }}">
                                        @error('nama_lengkap')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                                        <select class="form-select @error('gender') is-invalid @enderror" name="gender"
                                            aria-label="Default select example" required
                                            value="{{ $user->profile->gender }}">
                                            @if ($user->profile->gender == 'L')
                                            <option value="L" selected>Laki-laki</option>
                                            <option value="P">Perempuan</option>
                                            @endif
                                            <option value="L">Laki-laki</option>
                                            <option value="P" selected>Perempuan</option>
                                        </select>
                                        @error('gender')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name="birth_place" value="{{ $user->profile->birth_place }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="exampleFormControlInput1"
                                            name="birth_date" value="{{ $user->profile->birth_date }}">
                                    </div>

                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Provinsi</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name="ktp_province" value="{{ $user->profile->ktp_province }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kota</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name="ktp_city" value="{{ $user->profile->ktp_city }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kode Pos</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name="ktp_postal_code" value="{{ $user->profile->ktp_postal_code }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                        <textarea class="form-control" name="ktp_address" id="" cols="30"
                                            rows="5">{{ $user->profile->address }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('admin.users.index') }}" class="btn btn-light">Cancel</a>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                        @else
                        <h4 class="text-danger">User Belum Mengisi Data Diri</h4>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
