@extends('admin.layouts.base')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
@endsection
{{-- @section('script')
    <script src="/js/admin/fetchToModal.js"></script>
@endsection --}}


@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-2 nopadding">
            @include('admin.component.sidebar')
        </div>
        <div class="col-10 nopadding">
            @include('admin.component.header')


            <div class="container pt-4">

                {{-- ALERT NOTIF TRIGGERED BY ACC OR REJECT BUTTON --}}
                @if (session('status') == 'Acc user success')
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if (session('status') == 'Reject user success')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                {{-- LIST USER --}}
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="position-relative input-group align-items-center" style="width: 15%">
                        <input type="text" class="form-control rounded-pill py-2 text-center"
                            placeholder="Search everything" aria-label="search" aria-describedby="basic-addon1"
                            style="font-size: 12px">
                        <a href="#">
                            <i class="position-absolute top-50 start-0 translate-middle-y bi bi-search p-2 ms-1 text-secondary"
                                style="z-index: 999;"></i>
                        </a>
                    </div>
                </div>

                <table class="table table-no-border-head align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">User</th>
                            <th scope="col">Tanggal Pembuatan</th>
                            <th scope="col">Status</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>

                        {{-- LOOPING DATA --}}
                        @foreach ($users as $user)
                        @if ($user->profile != null)
                        <tr>

                            <td scope="col" class="d-flex align-items-center">
                                <img src="{{ asset('assets/img/photo-neil-seims.jpg') }}" alt=""
                                    class="rounded-pill me-2">
                                <div>
                                    <h6 class="nopadding">{{ $user->nama_lengkap }}</h6>
                                    <span class="d-block" style="font-size: 13px">admin@gmail.com</span>
                                </div>
                            </td>
                            <td>{{ $user->role->name }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                @if ($user->status == 1)
                                <div class="text-pending p-2 text-center rounded-pill">Pending</div>
                                @elseif ($user->status == 2)
                                <div class="text-complete p-2 text-center rounded-pill">Complete</div>
                                @else
                                <div class="text-rejected p-2 text-center rounded-pill">Rejected</div>
                                @endif

                            </td>
                            <td class="text-end">
                                <button type="button" class="btn text-white rounded-pill btn-detail"
                                    style="background-color: #77A4F9" data-bs-toggle="modal"
                                    data-bs-target="#modal{{ $user->id }}">
                                    View Detail
                                </button>
                            </td>
                        </tr>
                        {{-- MODAL FOR VIEW DETAIL BUTTON --}}
                        <div class="modal fade" id="modal{{ $user->id }}" aria-hidden="true"
                            aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            {{-- MODAL VIEW DETAIL --}}
                            <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalToggleLabel">Verifikasi Pengguna</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{-- <form action="{{route('admin.users.status',['id'=>$user->id,'status'=>'2'])}}"
                                        method="post"> --}}
                                        {{-- <input type="text" id="id_user" name="id" value="{{ $user->id }}" > --}}
                                        <div class="mb-3 text-center">
                                            <img src="{{ asset('storage/'.$user->profile->image_ktp )}}" alt=""
                                                width="400px">
                                        </div>
                                        <div class="mb-3">
                                            <label for="NIK" class="form-label">NIK (Nomor Induk Kependudukan)*</label>
                                            <input type="email" class="form-control" id="NIK" placeholder="NIK"
                                                value="{{ $user->profile->nik }}" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="nama" placeholder="nama"
                                                name="name" value="{{ $user->profile->nama_lengkap }}" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="jenis-kelamin" class="form-label">Jenis Kelamin</label>
                                            <input type="text" class="form-control" id="jenis-kelamin"
                                                placeholder="Jenis Kelamin" value="{{ $user->profile->gender }}"
                                                readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tempat-lahir" class="form-label">Tempat Lahir</label>
                                            <input type="text" class="form-control" id="tempat-lahir"
                                                placeholder="tempat lahir" value="{{ $user->profile->birth_place }}"
                                                readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tanggal-lahir" class="form-label">Tanggal Lahir</label>
                                            <input type="text" class="form-control" id="tanggal-lahir"
                                                placeholder="Tanggal-lahir" value="{{ $user->profile->birth_date }}"
                                                readonly>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-lg-6">
                                                <label for="provinsi" class="form-label">Provinsi</label>
                                                <input type="text" class="form-control" id="provinsi"
                                                    placeholder="Provinsi" value="{{ $user->profile->ktp_province }}"
                                                    readonly>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="kota" class="form-label">Kota</label>
                                                <input type="text" class="form-control" id="kota" placeholder="Kota"
                                                    value="{{ $user->profile->ktp_city }}" readonly>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-lg-6">
                                                <label for="kecamatan" class="form-label">Kecamatan</label>
                                                <input type="text" class="form-control" id="kecamatan"
                                                    placeholder="Kecamatan" value="{{ $user->profile->ktp_district }}"
                                                    readonly>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="kota" class="form-label">Kota</label>
                                                <input type="text" class="form-control" id="kota" placeholder="Kota"
                                                    value="{{ $user->profile->ktp_city }}" readonly>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="kode-pos" class="form-label">Kode Pos</label>
                                            <input type="text" class="form-control" id="kode-pos"
                                                placeholder="Tanggal-lahir" value="{{ $user->profile->postal_code }}"
                                                readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <textarea class="form-control" id="alamat" rows="3"
                                                readonly>{{ $user->profile->ktp_address }}</textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        @if ($user->status != 2)
                                        <a class="btn btn-success"
                                            href="{{route('admin.users.status',['id'=>$user->id,'status'=>'2'])}}">Setujui</a>
                                        <button class="btn btn-danger btn-tolak" data-bs-toggle="modal"
                                            data-bs-target="#modalTolak{{ $user->id }}">
                                            Tolak Akun
                                        </button>
                                        @endif
                                    </div>
                                    {{-- </form> --}}
                                </div>
                            </div>
                        </div>

                        {{-- MODAL UNTUK PENOLAKAN --}}
                        <div class="modal fade" id="modalTolak{{ $user->id }}" aria-hidden="true"
                            aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalToggleLabel2">Yakin Tolak User?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{-- <form action="" method="POST"> --}}
                                        <div class="mb-3">
                                            {{-- <input type="text" id="id-penolakan" name="id" value="{{ $user->id }}">
                                            <label for="exampleFormControlTextarea1" class="form-label">Alasan penolakan
                                                akun</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                rows="3"></textarea> --}}
                                        </div>
                                        {{-- </form> --}}
                                    </div>
                                    <div class="modal-footer">

                                        <a class="btn btn-success"
                                            href="{{route('admin.users.status',['id'=>$user->id,'status'=>'3'])}}">Yakin</a>
                                        <button class="btn btn-danger" data-bs-target="#modal1"
                                            data-bs-toggle="modal">Batal</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- END OF MODAL FOR VIEW DETAIL BUTTON --}}

                        @endif
                        @endforeach
                    </tbody>
                </table>
                {{-- END OF LIST USER --}}
                {{-- THE CURRENT PAGINATION --}}
                {{ $users->links() }}
            </div>




        </div>
    </div>
</div>


@endsection
