@extends('admin.layouts.base')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
<style>
    body {
        background-color: #F7FAFC;
    }
</style>
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
                    <div class="container py-4">
                        <div class="container ">
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route('admin.users.index') }}"
                                        class="mb-2 text-dark h6 text-decoration-none">
                                        <i class="bi bi-chevron-left pe-2"></i>
                                        Kembali
                                    </a>
                                    <h4 class=" text-center py-3" style="fw-bold">Detail Pengguna</h4>
                                </div>
                            </div>
                        </div>


                        <div class="card border-0 bg-white p-3" style="border-radius: 20px;">
                            <nav class="user-tabs">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active text-secondary" id="biodata-tab" data-bs-toggle="tab"
                                        data-bs-target="#biodata" type="button" role="tab" aria-controls="biodata"
                                        aria-selected="true">Biodata</button>
                                    <button class="nav-link text-secondary" id="survey-tab" data-bs-toggle="tab"
                                        data-bs-target="#survey" type="button" role="tab" aria-controls="survey"
                                        aria-selected="false">Survei</button>
                                    <button class="nav-link text-secondary" id="transaksi-tab" data-bs-toggle="tab"
                                        data-bs-target="#transaksi" type="button" role="tab" aria-controls="transaksi"
                                        aria-selected="false">Transaksi</button>
                                </div>
                            </nav>
                        </div>
                        </br>
                        {{-- LOOPING DATA --}}
                        <!-- Tampilan Baru -->
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="biodata" role="tabpanel"
                                aria-labelledby="biodata-tab">
                                <div class="card border-0 bg-white p-3" style="border-radius: 20px;">
                                    <nav class="user-tabs">
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active text-secondary" id="kontak-tab"
                                                data-bs-toggle="tab" data-bs-target="#kontak" type="button" role="tab"
                                                aria-controls="kontak" aria-selected="true">Biodata</button>
                                            <button class="nav-link text-secondary" id="data-tab" data-bs-toggle="tab"
                                                data-bs-target="#data" type="button" role="tab" aria-controls="data"
                                                aria-selected="false">Data Pribadi</button>
                                        </div>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="kontak" role="tabpanel"
                                                aria-labelledby="kontak-tab">
                                                <div class="col-1 text-center">
                                                    <br>
                                                    <p class=" text-center " style="fw-bold; font-size: 13px;">Foto
                                                        Profil</p>
                                                    <img src="{{ asset('assets/img/photo-neil-seims.jpg') }}"
                                                        alt="Profile Picture" width="70" height="70"
                                                        class="d-block mb-2 rounded-pill profile-picture-preview object-fit-cover">
                                                </div>
                                                <br>
                                                <div class="col-1 text-center">
                                                    <ins class=" text-center "
                                                        style="fw-bold; font-size: 16px;">Kreator</ins>
                                                </div>
                                                </br>
                                                <div class="row mb-3">
                                                    <div class="col-lg-9">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Nama</label>
                                                        <input type="text" class="form-control"
                                                            id="exampleFormControlInput1" name="" disabled
                                                            value="{{ $user->nama_lengkap }}">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">ID</label>
                                                        <input type="text" class="form-control"
                                                            id="exampleFormControlInput1" name="" disabled
                                                            value="{{ $user->id}}">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1"
                                                        class="form-label">Telepon</label>
                                                    <input type="text" class="form-control"
                                                        id="exampleFormControlInput1" name="" disabled
                                                        value="{{ $user->telp }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1"
                                                        class="form-label">Email</label>
                                                    <input type="text" class="form-control"
                                                        id="exampleFormControlInput1" name="" disabled
                                                        value="{{ $user->email }}">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="data" role="tabpanel"
                                                aria-labelledby="data-tab">
                                                <br>
                                                @if (isset($user->profile->id))
                                                <b><ins class=" text-center " style="fw-bold; font-size: 18px;">Data
                                                        Pribadi</ins></b>
                                                <form action="{{ route('admin.users.update', $user->profile->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <!--  must active public storage  -->
                                                                <img src="{{ asset('storage/'.$user->profile->image_ktp) }}"
                                                                    class="img-fluid" alt="" width="400px">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <label for="NIK" class="form-label">NIK (Nomor Induk
                                                                    Kependudukan)*</label>
                                                                <input type="NIK" class="form-control" id="NIK"
                                                                    placeholder="NIK" value="{{ $user->profile->nik }}"
                                                                    readonly>
                                                                @error('nik')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                                <p class="text-danger " id="messageNIK" hidden></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nama" class="form-label">Nama</label>
                                                        <input type="text" class="form-control" id="nama"
                                                            placeholder="nama" name="name"
                                                            value="{{ $user->profile->nama_lengkap }}" readonly>
                                                        @error('nama_lengkap')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="jenis-kelamin" class="form-label">Jenis
                                                            Kelamin</label>
                                                        <input type="text" class="form-control" id="jenis-kelamin"
                                                            placeholder="Jenis Kelamin"
                                                            value="{{ $user->profile->gender }}" readonly>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="tempat-lahir" class="form-label">Tempat
                                                            Lahir</label>
                                                        <input type="text" class="form-control" id="tempat-lahir"
                                                            placeholder="tempat lahir"
                                                            value="{{ $user->profile->birth_place }}" readonly>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="tanggal-lahir" class="form-label">Tanggal
                                                            Lahir</label>
                                                        <input type="text" class="form-control" id="tanggal-lahir"
                                                            placeholder="Tanggal-lahir"
                                                            value="{{ $user->profile->birth_date }}" readonly>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="tanggal-lahir" class="form-label">Pekerjaan</label>
                                                        <input type="text" class="form-control" id="tanggal-lahir"
                                                            placeholder="Tanggal-lahir"
                                                            value="{{ $user->profile->job }}" readonly>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="tanggal-lahir" class="form-label">Alamat
                                                            Kantor</label>
                                                        <textarea class="form-control" id="alamat" rows="3"
                                                            readonly>{{ $user->profile->address}}</textarea>
                                                    </div>
                                                    <br>
                                                    <div class="mb-3">
                                                        <b><ins class=" text-center "
                                                                style="fw-bold; font-size: 18px;">Data Alamat</ins></b>
                                                    </div>
                                                    <label class="main">Alamat Saat ini sesuai dengan KTP
                                                        <input type="checkbox" checked="checked">
                                                        <span class="w3docs"></span>
                                                    </label>
                                                    <div class="row mb-3">
                                                        <div class="col-lg-6">
                                                            <label for="provinsi" class="form-label">Provinsi</label>
                                                            <input type="text" class="form-control" id="provinsi"
                                                                placeholder="Provinsi"
                                                                value="{{ $user->profile->ktp_province }}" readonly>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="kota" class="form-label">Kota</label>
                                                            <input type="text" class="form-control" id="kota"
                                                                placeholder="Kota"
                                                                value="{{ $user->profile->ktp_city }}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-lg-6">
                                                            <label for="kecamatan" class="form-label">Kecamatan</label>
                                                            <input type="text" class="form-control" id="kecamatan"
                                                                placeholder="Kecamatan"
                                                                value="{{ $user->profile->ktp_district }}" readonly>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="kota" class="form-label">Kode Pos</label>
                                                            <input type="text" class="form-control" id="kota"
                                                                placeholder="Kode-pos"
                                                                value="{{ $user->profile->postal_code }}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-lg-12">
                                                            <label for="kota" class="form-label">Alamat</label>
                                                            <textarea class="form-control" id="alamat" rows="3"
                                                                readonly>{{ $user->profile->ktp_address }}</textarea>
                                                        </div>
                                                    </div>
                                                </form>
                                                @else
                                                <h4 class="text-danger">User Belum Mengisi Data Diri</h4>
                                                @endif
                                            </div>
                                        </div>
                                </div>
                            </div>
                            </nav>
                            <div class="tab-pane fade" id="survey" role="tabpanel" aria-labelledby="survey-tab">
                                <div class="card border-0 bg-white p-3" style="border-radius: 20px;">
                                    <nav class="user-tabs">
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active text-secondary" id="kontak-tab"
                                                data-bs-toggle="tab" data-bs-target="#responden" type="button"
                                                role="tab" aria-controls="responden"
                                                aria-selected="true">Responden</button>
                                            <button class="nav-link text-secondary" id="researcher-tab"
                                                data-bs-toggle="tab" data-bs-target="#researcher" type="button"
                                                role="tab" aria-controls="data" aria-selected="false">
                                                Researcher
                                            </button>
                                        </div>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="responden" role="tabpanel"
                                                aria-labelledby="responden-tab">
                                                <div class="card border-0 bg-white p-10" style="border-radius: 20px;">
                                                    <div class="container pt-4">
                                                        <table id="hempas"
                                                            class="table table-no-border-head align-middle"
                                                            style="border-radius: 0px; overflow: hidden; background-color:#ffffff">
                                                            <thead style="background-color:#f6beb226;">
                                                                <tr class="fw-bold">
                                                                    <td scope="col" class="text-left align-middle">No
                                                                    </td>
                                                                    <td scope="col" class="text-left align-middle">
                                                                        Survey</td>
                                                                    <td scope="col" class="text-left align-middle">
                                                                        Pertanyaan</td>
                                                                    <td scope="col" class="text-left align-middle">
                                                                        Kreator</td>
                                                                    <td scope="col" class="text-left align-middle">Waktu
                                                                    </td>
                                                                    <td scope="col" class="text-left align-middle">Aksi
                                                                    </td>
                                                                </tr>
                                                            </thead>
                                                            <!-- Belum bisa Menampilkan Responden -->
                                                            {{-- @foreach ($respondents as $r1)
                                                            @foreach ($r1->surveys as $r2)
                                                            @foreach ($r2->answers as $r3)
                                                            @foreach ($r3->question as $r4) --}}
                                                            <tbody>
                                                                {{-- <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $r2->title ?? 'null' }}</td>
                                                                <td>{{ $r4->question ?? 'null' }}</td>
                                                                <td>{{ $r1->nama_lengkap ?? 'null' }}</td>
                                                                <td>{{ $r3->created_at }}</td>
                                                                <td>
                                                                    <a href="#" class="btn btn-warning btn-sm">edit</a>
                                                                    <a href="#" class="btn btn-danger btn-sm">hapus</a>
                                                                </td> --}}
                                                            </tbody>
                                                            {{-- @endforeach
                                                            @endforeach
                                                            @endforeach
                                                            @endforeach --}}
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="researcher" role="tabpanel"
                                                aria-labelledby="researcher-tab">
                                                <div class="card border-0 bg-white p-10" style="border-radius: 20px;">
                                                    <div class="container pt-4">
                                                        <table id="hempas"
                                                            class="table table-no-border-head align-middle"
                                                            style="border-radius: 0px; overflow: hidden; background-color:#ffffff">
                                                            <thead style="background-color:#f6beb226;">
                                                                <tr class="fw-bold">
                                                                    <td scope="col" class="text-left align-middle">No
                                                                    </td>
                                                                    <td scope="col" class="text-left align-middle">
                                                                        Survey</td>
                                                                    <td scope="col" class="text-left align-middle">
                                                                        Kreator</td>
                                                                    <td scope="col" class="text-left align-middle">Waktu
                                                                    </td>
                                                                    <td scope="col" class="text-left align-middle">
                                                                        Status</td>
                                                                    <td scope="col" class="text-left align-middle">Aksi
                                                                    </td>
                                                                </tr>
                                                            </thead>
                                                            <!-- Belum Bisa menampilkan Resaercher  -->
                                                            @foreach ($users as $a)
                                                            <tbody>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $a->title ?? 'null' }}</td>
                                                                <td>{{ $a->user->nama_lengkap ?? 'null' }}</td>
                                                                <td>{{ $a->created_at ?? 'null' }}</td>
                                                                <td>{{ $a->status ?? 'null' }}</td>
                                                                <td>
                                                                    <a href="#" class="btn btn-warning btn-sm">edit</a>
                                                                    <a href="#" class="btn btn-danger btn-sm">hapus</a>
                                                                </td>
                                                            </tbody>
                                                            @endforeach
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                </nav>
                            </div>
                            <div class="tab-pane fade" id="transaksi" role="tabpanel" aria-labelledby="transaksi-tab">
                                <div class="card border-0 bg-white p-10" style="border-radius: 20px;">
                                    <div class="container pt-4">
                                        <table id="hempas" class="table table-no-border-head align-middle"
                                            style="border-radius: 0px; overflow: hidden; background-color:#ffffff">
                                            <thead style="background-color:#f6beb226;">
                                                <tr class="fw-bold">
                                                    <td scope="col" class="text-left align-middle">No Transaksi</td>
                                                    <td scope="col" class="text-left align-middle">Keterangan</td>
                                                    <td scope="col" class="text-left align-middle">Tanggal</td>
                                                    <td scope="col" class="text-left align-middle">saldo</td>
                                                    <td scope="col" class="text-left align-middle">Metode Penarikan</td>
                                                    <td scope="col" class="text-left align-middle">Status</td>
                                                    <td scope="col" class="text-left align-middle">Aksi</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Belum bisa Menampilkan Transaksi -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>















                            @endsection