@extends('admin.layouts.base')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
<style>
    body {
        background-color: #F7FAFC;
    }

</style>
@endsection

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">


@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-2 nopadding">
            @include('admin.component.sidebar')
        </div>
        <div class="col-10 nopadding">
            @include('admin.component.header')

            <div class="container mt-4">
                {{-- alert --}}
                <div class="row">
                    <div class="col">
                        @if (session()->has('status'))
                        <div class="alert alert-success">
                            {{ session()->get('status') }}
                        </div>
                        @endif
                    </div>
                </div>
                {{-- Insight user --}}
                <div class="row justify-content-betwen gy-3">
                    <div class="col">
                        <div class=" d-flex bg-white align-items-center px-1 py-2 border-r-sedang h-20">
                        <img src="{{asset('assets/img/heroicons-solid_user-group.svg')}}"  class="rounded-pill fs-3 p-1 me-2">
                            <div>
                                <span class="text-black" style="font-size: 11px">Total Pengguna</span>
                                <span class="d-block fw-bold">{{ $users_total }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class=" d-flex bg-white align-items-center px-1 py-2 border-r-sedang h-20">
                        <img src="{{asset('assets/img/gridicons_user-add.svg')}}" class="rounded-pill fs-3 p-1 me-2">
                            <div>
                                <span class="text-black" style="font-size: 11px">Pengguna Baru</span>
                                <span class="d-block fw-bold">{{ $users_month }}</span>
                            </div>
                        </div>
                    </div> 
                    @foreach ($usersubs as $subscription)
                    <div class="col">
                        <div class=" d-flex bg-white align-items-center px-1 py-2 border-r-sedang h-20">
                            @if ($subscription->id == 1)
                            <img src="{{asset('assets/img/Frame_384.svg')}}"  class="rounded-pill fs-3 p-1 me-2" >
                            @endif
                            @if ($subscription->id == 2)
                            <img src="{{asset('assets/img/ic_baseline-payments.svg')}}"  class="rounded-pill fs-3 p-1 me-2" >
                            @endif
                            @if ($subscription->id == 3)
                            <img src="{{asset('assets/img/bxs_user.svg')}}"  class="rounded-pill fs-3 p-1 me-2">
                            @endif
                            @if ($subscription->id == 4)
                            <img src="{{asset('assets/img/ic_baseline-business-center.svg')}}" class="rounded-pill fs-3 p-1 me-2">
                            @endif
                            <div>
                                <span class="text-black" style="font-size: 11px">{{ $subscription->name }}</span>
                                <span class="d-block fw-bold">{{ $subscription->users->count() }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
<br>
                <div class="card">
                    <div class="card-body">
                <nav class="user-tabs">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active text-secondary" id="menunggu-tab" data-bs-toggle="tab"
                                data-bs-target="#menunggu" type="button" role="tab" aria-controls="menunggu"
                                aria-selected="true">Verifikasi Pengguna</button>
                            <button class="nav-link text-secondary" id="tolak-tab" data-bs-toggle="tab" data-bs-target="#tolak"
                                type="button" role="tab" aria-controls="tolak" aria-selected="false">Pengguna</button>
                        </div>
                    </nav>
                        </div>
                        </div>
                <div class="tab-content pt-4" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="menunggu" role="tabpanel" aria-labelledby="menunggu-tab">
                    <div class="container pt-4">
                        <table id="hempas" class="table table-no-border-head align-middle" style="border-radius: 20px; overflow: hidden; background-color:#ffffff">
                        <thead style="background-color:#f6beb226;">
                            <tr class="fw-bold">
                                <td scope="col" class="text-left align-middle">No</th>
                                <td scope="col" class="text-left align-middle">Pengguna</th>
                                <td scope="col" class="text-left align-middle">Pekerjaan</th>
                                <td scope="col" class="text-left align-middle">Region</th>
                                <td scope="col" class="text-left align-middle">Waktu</th>
                                <td scope="col" class="text-left align-middle">Status</th>
                                <td scope="col" class="text-left align-middle">Konfirmasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- LOOPING DATA --}}
                            @php $no=1; @endphp
                            @foreach ($users as $user)
                                @if ($user->role_id == 1)
                                    @php continue; @endphp
                                @endif

                                @if ($user->status == 2)
                                    @php continue; @endphp
                                @endif

                                @if ($user->profile == null)
                                    @php continue; @endphp
                                @endif

                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <div>
                                        <h6 class="nopadding">{{ $user->nama_lengkap }}</h6>
                                        <span class="d-block" style="font-size: 13px">{{ $user->email }}</span>
                                    </div>
                                </td>
                                <td>{{ $user->job }}</td>
                                <td>{{ $user->profile->province }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>
                                    @if ($user->status == 1)
                                    <div class="text-pending p-2 text-center rounded-pill">Menunggu</div>
                                    @elseif ($user->status == 2)
                                    <div class="text-complete p-2 text-center rounded-pill">Aktif</div>
                                    @else
                                    <div class="text-rejected p-2 text-center rounded-pill">Ditolak</div>
                                    @endif
                                </td>
                                <td class="text-end">
                                    @if ($user->status == 3)
                                    <div class="aksi-menu">
                                        <ul>
                                            <li>
                                                <a  class="btn btn-outline" 
                                                    data-bs-toggle="tooltip" 
                                                    data-bs-placement="bottom" title="Pratinjau"
                                                    href="{{ route('admin.users.profile', $user->id) }}"
                                                    >
                                                    <i class="bi bi-search"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a  class="btn btn-outline" 
                                                    data-bs-toggle="modal" 
                                                    data-bs-toggle="tooltip" 
                                                    data-bs-placement="bottom" 
                                                    title="Hapus"
                                                    data-bs-target="#deleteModal{{ $user->id }}"
                                                    >
                                                    <i class="bi bi-trash"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    @else
                                    <button type="button" class="btn btn-orange text-white me-3 px-3 py-2"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal{{ $user->id }}">
                                        Verifikasi
                                    </button>
                                    @endif
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
                                        <div class="mb-3">
                                            <b><ins class="fw-bold text-center " style="font-size: 18px;">Data Pribadi</ins></b>
                                        </div>
                                            <div class="mb-3 text-center">
                                                <img src="{{ asset('storage/'.$user->profile->image_ktp ) }}" alt="" width="350px">
                                            </div>
                                            <div class="mb-3">
                                                <label for="NIK" class="form-label">NIK (Nomor Induk Kependudukan)*</label>
                                                <input type="email" class="form-control" id="NIK" placeholder="NIK"
                                                    value="{{ $user->profile->nik}}" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Nama</label>
                                                <input type="text" class="form-control" id="nama" placeholder="nama"
                                                    name="name" value="{{ $user->profile->nama_lengkap }}" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="jenis-kelamin" class="form-label">Jenis Kelamin</label>
                                                <input type="text" class="form-control" id="jenis-kelamin"
                                                placeholder="Jenis Kelamin" value="{{ $user->profile->gender }}" readonly>
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
                                            <div class="mb-3">
                                                <label for="tanggal-lahir" class="form-label">Pekerjaan</label>
                                                <input type="text" class="form-control" id="tanggal-lahir"
                                                    placeholder="Tanggal-lahir" value="{{ $user->profile->job }}"
                                                    readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="tanggal-lahir" class="form-label">Alamat Kantor</label>
                                                <input type="text" class="form-control" id="tanggal-lahir"
                                                    placeholder="Tanggal-lahir" value="{{ $user->profile->address }}"
                                                    readonly>
                                            </div>
                                            <br>
                                            <div class="mb-3">
                                                </div>
                                                <b><ins class="fw-bold text-center " style="font-size: 18px;">Data Alamat</ins></b>
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
                                                        value="{{ $user->profile->ktp_city ?? '-' }}" readonly>
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
                                                        value="{{ $user->profile->ktp_city ?? '-' }}" readonly>
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
                                        <div class="col card-header py-3">
                                            @if ($user->status != 2)
                                            <a class="btn btn-success"
                                                href="{{route('admin.users.status',['id'=>$user->id,'status'=>'2'])}}">Setujui</a>
                                            <button class="btn btn-danger btn-tolak" data-bs-toggle="modal"
                                                data-bs-target="#modalTolak{{ $user->id }}">
                                                Tolak Akun
                                            </button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- END MODAL FOR VIEW DETAIL BUTTON --}}

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
                                                <label for="exampleFormControlTextarea1" class="form-label">Alasan penolakan akun</label>
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
                            {{-- END MODAL UNTUK PENOLAKAN --}}
                            @endforeach
                    </tbody>
                </table>
                {{-- END OF LIST USER --}}
                {{-- THE CURRENT PAGINATION --}}
                </div>
                </div>
                <div class="tab-pane fade" id="tolak" role="tabpanel" aria-labelledby="tolak-tab">
                <div class="container pt-4">
                        <table id="heyaa" class="table table-no-border-head align-middle" style="width:100%; border-radius: 20px; overflow: hidden; background-color:#ffffff">
                        <thead style="background-color:#f6beb226;">
                            <tr class="fw-bold">
                                        <td scope="col" class="text-left align-middle">ID</td>
                                        <td scope="col" class="text-left align-middle">Pengguna</td>
                                        <td scope="col" class="text-left align-middle">Pekerjaan</td>
                                        <td scope="col" class="text-left align-middle">Role</td>
                                        <td scope="col" class="text-left align-middle">Terakhir Aktif</td>
                                        <td scope="col" class="text-left align-middle">Status</td>
                                        <td scope="col" class="text-left align-middle">Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Untuk tab Pengguna -->
                                    @php $i=1; @endphp
                                    @foreach ($users as $ser)
                                        @if ($ser->role_id == 1)
                                            @php
                                                continue;
                                            @endphp
                                        @endif

                                        <!-- Jika role responden dan 
                                        statusnya menggunggu atau ditolak
                                        maka akan dilewati -->
                                        @if ($ser->role_id == 3)
                                            @if ($ser->status != 2)
                                                @php
                                                    continue;
                                                @endphp
                                            @endif
                                        @endif

                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            @if ($ser->avatar != null)
                                                <td scope="col" class="d-flex align-items-center">
                                                    <img src="{{ asset('assets/img/photo-neil-seims.jpg') }}" alt=""
                                                        class="rounded-pill me-2">
                                                    <div>
                                                        <h6 class="nopadding">{{ $ser->nama_lengkap }}</h6>
                                                        <span class="d-block" style="font-size: 13px">{{ $ser->email }}</span>
                                                    </div>
                                                </td>
                                            @else
                                                <td scope="col" class="d-flex align-items-center">
                                                    <img src="{{ asset('assets/img/photo-neil-seims.jpg') }}" alt=""
                                                        class="rounded-pill me-2">
                                                    <div>
                                                        <h6 class="nopadding">{{ $ser->nama_lengkap }}</h6>
                                                        <span class="d-block" style="font-size: 13px">{{ $ser->email }}</span>
                                                    </div>
                                                </td>
                                            @endif
                                            <td>{{ $ser->job }}</td>
                                            @if ($ser->role_id != null && $ser->role != null)
                                                <td>{{ $ser->role->name }}</td>
                                            @else
                                                <td>No Role Selected</td>
                                            @endif
                                            <td>{{ $ser->updated_at }}</td>
                                            <td>
                                            @if ($ser->status == 1)
                                                @if ($ser->role_id == 2)
                                                    <div class="text-complete p-2 text-center rounded-pill">Aktif</div>
                                                @else
                                                    <div class="text-pending p-2 text-center rounded-pill">Menunggu</div>
                                                @endif
                                            @elseif ($ser->status == 2)
                                                <div class="text-complete p-2 text-center rounded-pill">Aktif</div>
                                            @else
                                                <div class="text-rejected p-2 text-center rounded-pill">Ditolak</div>
                                            @endif
                                            </td>
                                            {{-- <td class="text-nowrap">
                                                <a href="{{ route('admin.users.notify', $ser->id) }}" class="btn btn-sm btn-success">Notify</a>
                                                <form action="{{ route('admin.users.destroy', $ser->id) }}" method="POST"
                                                    onsubmit="return confirm('Are you sure?');">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                                </form>
                                            </td> --}}
                                            <td scope="col" class="text-left">
                                                <div class="aksi-menu">
                                                    <ul>
                                                        <li>
                                                            <a  class="btn btn-outline" 
                                                                data-bs-toggle="tooltip" 
                                                                data-bs-placement="bottom" title="Pratinjau"
                                                                href="{{ route('admin.users.profile', $ser->id) }}"
                                                                >
                                                                <i class="bi bi-search"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a  class="btn btn-outline" 
                                                                data-bs-toggle="modal" 
                                                                data-bs-toggle="tooltip" 
                                                                data-bs-placement="bottom" 
                                                                title="Hapus"
                                                                data-bs-target="#deleteModal{{ $ser->id }}"
                                                                >
                                                                <i class="bi bi-trash"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@foreach ($users as $ser)
<div class="modal fade" id="deleteModal{{ $ser->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('admin.users.destroy', $ser->id) }}" method="POST">
        @method('delete')
        @csrf
            <div class="modal-content">
                <div class="btn ms-auto">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('assets/img/delete.png') }}" class="img-fluid" alt="">
                    <h2 class="text-center">Hapus Pengguna?</h2>
                    <p class="px-5 small text-secondary text-center">Apakah kamu yakin ingin menghapus user <span class="fw-bold">{{ $ser->nama_lengkap }}</span>? Jika anda menghapus user, maka user akan terhapus secara <span class="fw-bold">permanen</span> .</p>
                </div>
                <div class="row px-5 pb-5">
                    <div class="col d-grid gap-2">
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                    <div class="col d-grid gap-2">
                        <button type="button" class="btn bg-special-blue text-white" data-bs-dismiss="modal">Tidak</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endforeach

@endsection

@section('script')
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
    $('#heyaa').DataTable( {
        "language": {
            "decimal":        "",
    "emptyTable":     "Tidak ada data yang tersedia di tabel",
    "info":           "Menampilkan _START_ sampai _END_ dari _TOTAL_ item",
    "infoEmpty":      "Menampilkan 0 sampai 0 dari 0 item",
    "infoFiltered":   "(difilter dari _MAX_ total item)",
    "infoPostFix":    "",
    "thousands":      ",",
    "lengthMenu":     "Tampilkan _MENU_ item",
    "loadingRecords": "Memuat...",
    "processing":     "",
    "search":         "Cari :",
    "zeroRecords":    "Arsip tidak ditemukan",
    "paginate": {
        "next":       ">",
        "previous":   "<"
    },
        }
    } );
});
</script>
<script type="text/javascript">
    $(document).ready(function () {
    $('#hempas').DataTable( {
        "language": {
            "decimal":        "",
    "emptyTable":     "Tidak ada data yang tersedia di tabel",
    "info":           "Menampilkan _START_ sampai _END_ dari _TOTAL_ item",
    "infoEmpty":      "Menampilkan 0 sampai 0 dari 0 item",
    "infoFiltered":   "(difilter dari _MAX_ total item)",
    "infoPostFix":    "",
    "thousands":      ",",
    "lengthMenu":     "Tampilkan _MENU_ item",
    "loadingRecords": "Memuat...",
    "processing":     "",
    "search":         "Cari :",
    "zeroRecords":    "Arsip tidak ditemukan",
    "paginate": {
        "next":       ">",
        "previous":   "<"
    },
        }
    } );
});
</script>
@endsection