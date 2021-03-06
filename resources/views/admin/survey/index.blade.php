@extends('admin.layouts.base')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
<style>
    .btn-1,
    .btn-2 {
        border: solid #B0B0B0 2px;
        color: #B0B0B0;
    }

    .btn-1:hover {
        background-color: #F99E3F;
        color: #fff;
        border: solid #F99E3F 2px;
    }

    .btn-2:hover {
        background-color: #B0B0B0;
        color: #000;
    }

    .survey-tabs .nav-tabs .nav-link.active {
        color: #F99E3F !important;
        border-bottom: 3px solid #F99E3F;
    }
</style>
@endsection

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">

@section('content')

<!-- FUNGSI COUNTDOWN -->
<script>
    const countDown = (time, surveyId) => {
        // Mengatur waktu akhir perhitungan mundur
        var after2day = new Date(time);
        after2day.setDate(after2day.getDate() + 2);
        let countDownDate = after2day.getTime();

        // Memperbarui hitungan mundur setiap 1 detik
        var x = setInterval(() => {
            // Untuk mendapatkan tanggal dan waktu hari ini
            var now = new Date().getTime();

            // Temukan jarak antara sekarang dan tanggal hitung mundur
            var distance = countDownDate - now;

            // Perhitungan waktu untuk hari, jam, menit dan detik
            // var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 48)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Keluarkan hasil dalam elemen dengan id = "countD"
            document.getElementById(`countD${surveyId}`).innerHTML = `${hours} : ${minutes} : ${seconds}`;
                
            // Jika hitungan mundur selesai, tulis beberapa teks 
            if (distance < 0) {
                clearInterval(x);
                let getAttr = document.getElementById("countD" + surveyId);
                getAttr.className = 'text-center text-danger'
                getAttr.innerHTML = "0 : 0 : 0";
            }

            // Jika waktu kurang dari 10 jam, maka ubah warna teks menjadi merah
            if( hours < 10 ) {
                let getAttr = document.getElementById("countD" + surveyId);
                getAttr.className = 'text-center text-danger'
            }
        }, 1000);
    }
</script>
<!-- END FUNGSI COUNTDOWN -->

<div class="container-fluid" style="background-color: #F7F8FC; height: 100vh;">
    <div class="row">
        <div class="col-2 nopadding">
            @include('admin.component.sidebar')
        </div>
        <div class="col-10 nopadding">
            @include('admin.component.header')
            <div class="container pt-4">
                @if (session()->has('status'))
                <div class="alert alert-success">
                    {{ session()->get('status') }}
                </div>
                @endif
                <div class="card border-0 bg-white p-3" style="border-radius: 20px;">
                    <nav class="survey-tabs">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link text-secondary active" id="menunggu-tab" data-bs-toggle="tab"
                                data-bs-target="#menunggu" type="button" role="tab" aria-controls="menunggu"
                                aria-selected="true">MENUNGGU</button>
                            <button class="nav-link text-secondary" id="tolak-tab" data-bs-toggle="tab" data-bs-target="#tolak"
                                type="button" role="tab" aria-controls="tolak" aria-selected="false">DITOLAK</button>
                            <button class="nav-link text-secondary" id="terima-tab" data-bs-toggle="tab" data-bs-target="#terima"
                                type="button" role="tab" aria-controls="terima" aria-selected="false">DITERIMA</button>
                        </div>
                    </nav>
                </div>
                <br>

                

                {{-- LOOPING DATA --}}
                <!-- Tampilan Baru -->
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="menunggu" role="tabpanel" aria-labelledby="menunggu-tab">

                                <table id="asa" class="table table-no-border-head align-middle" style="border-radius: 20px; overflow: hidden; background-color:#ffffff">
                                    <thead style="background: rgba(255, 175, 158, 0.2);">
                                        <tr>
                                            <th scope="col" colspan="2">Survey</th>
                                            <th scope="col" >Kreator</th>
                                            <th scope="col" class="text-center">Hitung Mundur</th>
                                            <th scope="col" class="text-center">Aksi</th>
                                            <th scope="col" class="text-center">Konfirmasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @if (count($surveysPending) == 0)
                                        <p>Tidak ada survey</p>
                                    @endif
                                    @foreach ($surveysPending as $survey)
                                        <tr>
                                            <td class="col-1">
                                            <img src="{{ asset('assets/img/img-survey.svg') }}" class="rounded-circle img-fluid"
                                                alt="">
                                            </td>
                                            <td class="col-4">
                                                <div>
                                                    <p class="fw-bold">{!! Str::limit($survey->title,40) !!}</p>
                                                    <p class="small">{!! Str::limit($survey->description,50) !!}</p>    
                                                    <p class="btn btn-link" data-bs-toggle="modal"
                                                            data-bs-target="#modal{{ $survey->id }}">Baca Selengkapnya</p>
                                                </div>
                                            </td>
                                            <td class="col-2">
                                                <div>
                                                    <p class="small">{{ date('d-M-Y', strtotime($survey->created_at)); }}</p>
                                                    <p class="small">ID#{{ $survey->user_id }} <br> {{ $survey->user->nama_lengkap }}</p>
                                                </div>
                                            </td>
                                            <td class="col-2">
                                                <div>
                                                    <script>
                                                        countDown('{{ $survey->updated_at }}', '{{ $survey->id }}');
                                                    </script>
                                                    <h5 class="text-center text-warning" id="countD{{ $survey->id }}"></h5>
                                                </div>
                                            </td>
                                            <td class="col-1">
                                                <div class="text-center">
                                                <a href="{{ route('admin.survey.show', $survey->id) }}"
                                                    class="btn"><i class="bi bi-search h4"></i></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center d-flex justify-content-center">
                                                    <div class="pe-3">
                                                        <a href="{{ route('admin.survey.acc-survey', $survey->id) }}" class="rounded-circle btn btn-1">
                                                            <i class="bi bi-check-lg h1"></i>
                                                        </a>
                                                        <p class="btn-1-1 small">Terima</p>
                                                    </div>
                                                    <div>
                                                        <button type="button"  data-bs-toggle="modal" data-bs-target="#denyModal{{ $survey->id }}" class="rounded-circle btn btn-2">
                                                        <i class="bi bi-x-lg h1"></i>
                                                        </button>
                                                        <p class="btn-2-1 small">Tolak</p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        {{-- MODAL FOR VIEW DETAIL BUTTON --}}
                        <div class="modal fade" id="modal{{ $survey->id }}" aria-hidden="true"
                            aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            {{-- MODAL VIEW DETAIL --}}
                            <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="fw-bold"> Survey</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row mb-3">
                                            <div class="col-lg-12">
                                                <label for="exampleFormControlInput1" class="form-label">Kategori Survey</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                                    name="" disabled value="{{ $survey->category->name }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-lg-12">
                                                <label for="kategori" class="form-label">Judul</label>
                                                <textarea class="form-control" id="kategori" rows="2"
                                                readonly>{{ $survey->title }}</textarea>              
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-lg-12">
                                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                                <textarea class="form-control" id="description" rows="10"
                                                readonly>{{ $survey->description }}</textarea>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                                    @endforeach
                                    </tbody>
                                </table>
                            
                        <!-- Modal deny -->
                        @foreach ($surveysPending as $survey)
                            <div class="modal fade" id="denyModal{{ $survey->id }}" tabindex="-1"
                                aria-labelledby="denyModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form action="{{ route('admin.survey.deny-survey', $survey->id) }}" method="POST">
                                        @csrf
                                        <div class="modal-content">
                                            <div class="btn ms-auto">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="bg-white">
                                                <h1 class="text-center"><i class="bi bi-trash display-1 text-danger"></i></h1>
                                                <h4 class="text-center text-danger">Tolak Survey?</h4>
                                            </div>
                                            <div class="modal-body bg-light px-4">
                                                <div>
                                                <div class="form-check">
                                                    <input 
                                                        class="form-check-input" 
                                                        type="radio" 
                                                        name="reason" 
                                                        value="Survei terindikasi mengandung SARA."
                                                    >
                                                        Survei terindikasi mengandung SARA.
                                                </div>
                                                <div class="form-check">
                                                    <input 
                                                        class="form-check-input" 
                                                        type="radio" 
                                                        name="reason" 
                                                        value="Survei terindikasi mengandung unsur kekerasan."
                                                    >
                                                        Survei terindikasi mengandung unsur kekerasan.
                                                </div>
                                                <div class="form-check">
                                                    <input 
                                                        class="form-check-input" 
                                                        type="radio" 
                                                        name="reason" 
                                                        value="Survei tidak relevan (logo/judul survei tidak cocok dengan isi survei)."
                                                    >
                                                        Survei tidak relevan (logo/judul survei tidak cocok dengan isi survei).
                                                </div>
                                                <div class="form-check">
                                                    <input 
                                                        class="form-check-input" 
                                                        type="radio" 
                                                        name="reason" 
                                                        value="Survei terindikasi bukan merupakan karya orisinil."
                                                    >
                                                        Survei terindikasi bukan merupakan karya orisinil.
                                                </div>
                                                <div class="form-check">
                                                    <input 
                                                        class="form-check-input" 
                                                        type="radio" 
                                                        name="reason" 
                                                        value="Survei terindikasi melanggar hak privasi individu (terlalu vulgar, mengandung pelecehan seksual)."
                                                    >
                                                        Survei terindikasi melanggar hak privasi individu (terlalu vulgar, mengandung pelecehan seksual).
                                                </div>
                                                </div>
                                            </div>
                                            <div class="row px-4 mt-3 mb-3">
                                                <div class="col d-grid gap-2">
                                                    <button type="submit" class="btn btn-danger">TOLAK</button>
                                                </div>
                                                <div class="col d-grid gap-2">
                                                    <button type="button" class="btn btn-outline-secondary"
                                                        data-bs-dismiss="modal">KEMBALI</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="tab-pane fade" id="tolak" role="tabpanel" aria-labelledby="tolak-tab">
                    <table id="aya" class="table table-no-border-head align-middle" style="border-radius: 20px; overflow: hidden; background-color:#ffffff">
                                    <thead style="background: rgba(255, 175, 158, 0.2);">
                                        <tr>
                                            <th scope="col" colspan="2">Survey</th>
                                            <th scope="col">Kreator</th>
                                            <th scope="col" class="text-center">Waktu</th>
                                            <th scope="col" class="text-center">Alasan</th>
                                            <th scope="col" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($surveysDeny as $survey)
                                        @if (count($surveysDeny) == 0)
                                            <p>Tidak ada survey</p>
                                        @endif
                                        <tr>
                                            <td class="col-1">
                                            <img src="{{ asset('assets/img/img-survey.svg') }}" class="rounded-circle img-fluid"
                                                alt="">
                                            </td>
                                            <td class="col-4">
                                            <div>
                                                    <p class="fw-bold">{!! Str::limit($survey->title,40) !!}</p>
                                                    <p class="small">{!! Str::limit($survey->description,50) !!}</p>    
                                                    <p class="btn btn-link" data-bs-toggle="modal"
                                                            data-bs-target="#modal{{ $survey->id }}">Baca Selengkapnya</p>
                                                </div>
                                            </td>
                                            <td class="col-1">
                                                <div>
                                                    <p class="small">ID#{{ $survey->user_id }} <br> {{ $survey->user->nama_lengkap }}</p>
                                                </div>
                                            </td>
                                            <td class="col-2">
                                                <div class="text-center">
                                                    <h6>{{ date('d-M-Y', strtotime($survey->created_at)); }}</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <p class="small text-danger">
                                                        {{ $survey->reason_deny ? $survey->reason_deny : 'Detail kosong' }}
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="col-1 text-center">
                                                <div class="btn-group">
                                                    <div>
                                                        <a href="{{ route('admin.survey.deny', $survey->id) }}" class="btn text-secondary"><i class="bi bi-search h3"></i></a>
                                                    </div>
                                                    <div> 
                                                        <a href="#" role="button" id="dropdown-manage-news text-end" data-bs-toggle="dropdown" class="btn text-secondary" aria-expanded="false">
                                                            <i class="bi bi-pencil-square h3"></i>
                                                        </a>
                                                        <ul class="dropdown-menu bg-dark" aria-labelledby="dropdown-manage-news">
                                                            <li><a class="dropdown-item text-white" href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#ubahstts0"></i><i
                                                                        class="bi bi-gear-fill me-2"></i>Ubah Staus</a></li>
                                                            <li>
                                                            <li>
                                                                <a href="{{ route('admin.survey.change-status', $survey->id) }}" class="dropdown-item text-white">Batal tolak</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        {{-- MODAL FOR VIEW DETAIL BUTTON --}}
                        <div class="modal fade" id="modal{{ $survey->id }}" aria-hidden="true"
                            aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            {{-- MODAL VIEW DETAIL --}}
                            <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                            <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="fw-bold"> Survey</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row mb-3">
                                            <div class="col-lg-12">
                                                <label for="exampleFormControlInput1" class="form-label">Kategori Survey</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                                    name="" disabled value="{{ $survey->category->name }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-lg-12">
                                                <label for="kategori" class="form-label">Judul</label>
                                                <textarea class="form-control" id="kategori" rows="2"
                                                readonly>{{ $survey->title }}</textarea>              
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-lg-12">
                                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                                <textarea class="form-control" id="description" rows="10"
                                                readonly>{{ $survey->description }}</textarea>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                                    @endforeach
                                    </tbody>
                                </table>
                            
                        <!-- Modal -->
                        @foreach ($surveysDeny as $survey)
                        <div class="modal fade" id="ubahstts0" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ubah Status</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col">
                                                <h4>Detail Survey</h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label">Judul Survei</label>
                                                    <input type="text"
                                                        class="form-control border-0 rounded-pill px-3 py-2 bg-light"
                                                        placeholder="Isi Disini...">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label">Kreator</label>
                                                    <input type="text"
                                                        class="form-control border-0 rounded-pill px-3 py-2 bg-light"
                                                        placeholder="Isi Disini...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 pt-4">
                                                <h4>Status</h4>
                                            </div>
                                            <div class="col">
                                                <div class="d-flex nav  nav-tabs" id="nav-tab" role="tablist">
                                                    <div class="form-check pe-4">
                                                        <input class="form-check-input nav-link" type="radio"
                                                            name="tab-tunggu" id="tab-tunggu-tab" data-bs-toggle="tab"
                                                            data-bs-target="#tab-tunggu" role="tab"
                                                            aria-controls="tab-tunggu" aria-selected="true">
                                                        <label class="form-check-label" for="tab-tunggu-tab">
                                                            Menunggu
                                                        </label>
                                                    </div>
                                                    <div class="form-check pe-4">
                                                        <input class="form-check-input nav-link" type="radio"
                                                            name="tab-tolak" id="tab-tolak-tab" data-bs-toggle="tab"
                                                            data-bs-target="#tab-tolak" role="tab"
                                                            aria-controls="tab-tolak" aria-selected="false">
                                                        <label class="form-check-label" for="tab-tolak-tab">
                                                            Ditolak
                                                        </label>
                                                    </div>
                                                    <div class="form-check pe-4">
                                                        <input class="form-check-input nav-link" type="radio"
                                                            name="tab-terima" id="tab-terima-tab" data-bs-toggle="tab"
                                                            data-bs-target="#tab-terima" role="tab"
                                                            aria-controls="tab-terima" aria-selected="false">
                                                        <label class="form-check-label" for="tab-terima-tab">
                                                            Ditolak
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="tab-content" id="nav-tabContent">
                                                    <div class="tab-pane fade" id="tab-tunggu" role="tabpanel"
                                                        aria-labelledby="tab-tunggu-tab"></div>
                                                    <div class="tab-pane fade" id="tab-tolak" role="tabpanel"
                                                        aria-labelledby="tab-tolak-tab">
                                                        <h4 class="pt-4 pb-2">Detail Penolakan</h4>
                                                        <div>
                                                            <div class="form-check py-1">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="chek1">
                                                                <label class="form-check-label small" for="chek1">
                                                                    Lorem ipsum dolor sit amet.
                                                                </label>
                                                            </div>
                                                            <div class="form-check py-1">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="chek2">
                                                                <label class="form-check-label small" for="chek2">
                                                                    Lorem ipsum dolor sit amet.
                                                                </label>
                                                            </div>
                                                            <div class="form-check py-1">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="chek3">
                                                                <label class="form-check-label small" for="chek3">
                                                                    Lorem ipsum dolor sit amet.
                                                                </label>
                                                            </div>
                                                            <div class="form-check py-1">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="chek4">
                                                                <label class="form-check-label small" for="chek4">
                                                                    Lorem ipsum dolor sit amet.
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab-terima" role="tabpanel"
                                                        aria-labelledby="tab-terima-tab"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer me-auto">
                                        <button type="button"
                                            class="btn bg-special-blue text-white px-5 py-2 rounded-3">Simpan</button>
                                        <button type="button" class="btn btn-secondary px-5 py-2 rounded-3"
                                            data-bs-dismiss="modal">Batal</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="tab-pane fade" id="terima" role="tabpanel" aria-labelledby="terima-tab">
                        
                            <table id="ata" class="table table-no-border-head align-middle" style="border-radius: 20px; overflow: hidden; background-color:#ffffff">
                                    <thead style="background: rgba(255, 175, 158, 0.2);">
                                        <tr>
                                            <th scope="col" colspan="2">Survey</th>
                                            <th scope="col">Kreator</th>
                                            <th scope="col">Aktifitas</th>
                                            <th scope="col">Status</th>
                                            <th scope="col" class="text-center">Waktu</th>
                                            <th scope="col" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($surveysAcc as $survey)
                                        @if (count($surveysAcc) == 0)
                                            <p>Tidak ada survey</p>
                                        @endif
                                        <tr>
                                        <td class="col-1">
                                            <img src="{{ asset('assets/img/img-survey.svg') }}" class="rounded-circle img-fluid"
                                                alt="">
                                            </td>
                                            <td class="col-4">
                                            <div>
                                                    <p class="fw-bold">{!! Str::limit($survey->title,40) !!}</p>
                                                    <p class="small">{!! Str::limit($survey->description,50) !!}</p>    
                                                    <p class="btn btn-link" data-bs-toggle="modal"
                                                            data-bs-target="#modal{{ $survey->id }}">Baca Selengkapnya</p>
                                                </div>
                                            </td>
                                            <td class="col-2">
                                                <p class="small">ID#{{ $survey->user_id }} <br> {{ $survey->user->nama_lengkap }}</p>
                                                <div>
                                                </div>
                                            </td>
                                            <td class="col-1">
                                                <div>
                                                    <h6 class="fw-light">
                                                        {{ $survey->type }}
                                                    </h6>
                                                </div>
                                            </td>
                                            <td class="col-2">
                                                <div>
                                                    <p class="small text-success btn text-center rounded-pill" style="background-color: #EBF9F1;">
                                                        Aktif
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="col-2">
                                                <div class="text-center">
                                                    <h6>{{ date('d-M-Y', strtotime($survey->created_at)); }}</h6>
                                                </div>
                                            </td>
                                            <td class="col-1 text-center">
                                                <div class="btn-group">
                                                    <div>
                                                        <a href="{{ route('admin.survey.acc', $survey->id) }}" class="btn text-secondary"><i class="bi bi-search h3"></i></a>
                                                    </div>
                                                    <div> 
                                                        <a href="#" role="button" id="dropdown-manage-news text-end" data-bs-toggle="dropdown" class="btn text-secondary" aria-expanded="false">
                                                            <i class="bi bi-pencil-square h3"></i>
                                                        </a>
                                                        <ul class="dropdown-menu bg-dark" aria-labelledby="dropdown-manage-news">
                                                            <li><a class="dropdown-item text-white" href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#ubahstts0"></i><i
                                                                        class="bi bi-gear-fill me-2"></i>Ubah Status</a></li>
                                                            <li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        {{-- MODAL FOR VIEW DETAIL BUTTON --}}
                        <div class="modal fade" id="modal{{ $survey->id }}" aria-hidden="true"
                            aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            {{-- MODAL VIEW DETAIL --}}
                            <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                            <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="fw-bold"> Survey</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row mb-3">
                                            <div class="col-lg-12">
                                                <label for="exampleFormControlInput1" class="form-label">Kategori Survey</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                                    name="" disabled value="{{ $survey->category->name }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-lg-12">
                                                <label for="kategori" class="form-label">Judul</label>
                                                <textarea class="form-control" id="kategori" rows="2"
                                                readonly>{{ $survey->title }}</textarea>              
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-lg-12">
                                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                                <textarea class="form-control" id="description" rows="10"
                                                readonly>{{ $survey->description }}</textarea>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                                    @endforeach
                                    </tbody>
                                </table>
                            
                        <!-- Modal -->
                        @foreach ($surveysAcc as $survey)
                        <div class="modal fade" id="ubahstts" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ubah Status</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col">
                                                <h4>Detail Survey</h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label">Judul Survei</label>
                                                    <input type="text"
                                                        class="form-control border-0 rounded-pill px-3 py-2 bg-light"
                                                        placeholder="Isi Disini...">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label">Kreator</label>
                                                    <input type="text"
                                                        class="form-control border-0 rounded-pill px-3 py-2 bg-light"
                                                        placeholder="Isi Disini...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 pt-4">
                                                <h4>Status</h4>
                                            </div>
                                            <div class="col">
                                                <div class="d-flex nav  nav-tabs" id="nav-tab" role="tablist">
                                                    <div class="form-check pe-4">
                                                        <input class="form-check-input nav-link" type="radio"
                                                            name="tab-tunggu-terima" id="tab-tunggu-terima-tab"
                                                            data-bs-toggle="tab" data-bs-target="#tab-tunggu-terima"
                                                            role="tab" aria-controls="tab-tunggu-terima"
                                                            aria-selected="true">
                                                        <label class="form-check-label" for="tab-tunggu-terima-tab">
                                                            Menunggu
                                                        </label>
                                                    </div>
                                                    <div class="form-check pe-4">
                                                        <input class="form-check-input nav-link" type="radio"
                                                            name="tab-tolak-terima" id="tab-tolak-terima-tab"
                                                            data-bs-toggle="tab" data-bs-target="#tab-tolak-terima"
                                                            role="tab" aria-controls="tab-tolak-terima"
                                                            aria-selected="false">
                                                        <label class="form-check-label" for="tab-tolak-terima-tab">
                                                            Ditolak
                                                        </label>
                                                    </div>
                                                    <div class="form-check pe-4">
                                                        <input class="form-check-input nav-link" type="radio"
                                                            name="tab-terima-terima" id="tab-terima-terima-tab"
                                                            data-bs-toggle="tab" data-bs-target="#tab-terima-terima"
                                                            role="tab" aria-controls="tab-terima-terima"
                                                            aria-selected="false">
                                                        <label class="form-check-label" for="tab-terima-terima-tab">
                                                            Ditolak
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="tab-content" id="nav-tabContent">
                                                    <div class="tab-pane fade" id="tab-tunggu-terima" role="tabpanel"
                                                        aria-labelledby="tab-tunggu-terima-tab"></div>
                                                    <div class="tab-pane fade" id="tab-tolak-terima" role="tabpanel"
                                                        aria-labelledby="tab-tolak-terima-tab">
                                                        <h4 class="pt-4 pb-2">Detail Penolakan</h4>
                                                        <div>
                                                            <div class="form-check py-1">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="chek1">
                                                                <label class="form-check-label small" for="chek1">
                                                                    Lorem ipsum dolor sit amet.
                                                                </label>
                                                            </div>
                                                            <div class="form-check py-1">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="chek2" checked>
                                                                <label class="form-check-label small" for="chek2">
                                                                    Lorem ipsum dolor sit amet.
                                                                </label>
                                                            </div>
                                                            <div class="form-check py-1">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="chek3" checked>
                                                                <label class="form-check-label small" for="chek3">
                                                                    Lorem ipsum dolor sit amet.
                                                                </label>
                                                            </div>
                                                            <div class="form-check py-1">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="chek4" checked>
                                                                <label class="form-check-label small" for="chek4">
                                                                    Lorem ipsum dolor sit amet.
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab-terima-terima" role="tabpanel"
                                                        aria-labelledby="tab-terima-terima-tab"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer me-auto">
                                        <button type="button"
                                            class="btn bg-special-blue text-white px-5 py-2 rounded-3">Simpan</button>
                                        <button type="button" class="btn btn-secondary px-5 py-2 rounded-3"
                                            data-bs-dismiss="modal">Batal</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit News -->
<div class="modal fade" id="modal-edit-news" tabindex="-1" aria-labelledby="modal-edit-newsLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body py-4">
                <div class="d-flex justify-content-between">
                    <h5 class="modal-title" id="exampleModalLabel">Edit News</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <hr class="mt-2">
                <div class="container-fluid px-0 mb-5">
                    <div class="row">
                        <div class="col-6">
                            <form method="post" enctype="multipart/form-data" id="form-edit">
                                @method('put')
                                @csrf
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="hidden" class="form-control border-r-besar" id="id" name="id">
                                    <input type="hidden" id="oldImg" name="oldImg">
                                    <input type="text" class="form-control border-r-besar" id="title" name="title">
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deksripsi</label>
                                    <textarea class="form-control border-r-besar" id="description" rows="5"
                                        name="description">
                    </textarea>
                                </div>

                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="foto" class="form-label">Upload Foto</label>
                                <img id="img" alt="" width="70" class="d-block mb-1">
                                <input type="file" class="form-control border-r-besar" id="foto" name="img">

                            </div>
                            <hr class="mt-2">
                            <div class="container-fluid px-0 mb-5">
                                <div class="row">
                                    <div class="col-6">
                                        <form method="post" enctype="multipart/form-data" id="form-edit">
                                            @method('put')
                                            @csrf
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title</label>
                                                <input type="hidden" class="form-control border-r-besar" id="id"
                                                    name="id">
                                                <input type="hidden" id="oldImg" name="oldImg">
                                                <input type="text" class="form-control border-r-besar" id="title"
                                                    name="title">
                                            </div>
                                            <div class="mb-3">
                                                <label for="deskripsi" class="form-label">Deksripsi</label>
                                                <textarea class="form-control border-r-besar" id="description" rows="5"
                                                    name="description">
                                </textarea>
                                            </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="foto" class="form-label">Upload Foto</label>
                                            <img id="img" alt="" width="70" class="d-block mb-1">
                                            <input type="file" class="form-control border-r-besar" id="foto" name="img">

                                        </div>
                                        <div class="mb-3">
                                            <label for="tanggal" class="form-label">Tanggal Publish</label>
                                            <input type="date" class="form-control border-r-besar" id="tanggal"
                                                value="2021-07-22">
                                        </div>
                                        <div class="mb-3">
                                            <label for="jam-publish" class="form-label">Jam Publish</label>
                                            <input type="time" class="form-control border-r-besar" id="jam-publish"
                                                value="23:00">
                                        </div>

                                    </div>
                                </div>
                                {{-- <div class="mb-3">
                  <label for="tanggal" class="form-label">Tanggal
                    Publish</label>
                  <input type="date" class="form-control border-r-besar"
                    id="tanggal" value="2021-07-22">
                </div>
                <div class="mb-3">
                  <label for="jam-publish" class="form-label">Jam
                    Publish</label>
                  <input type="time" class="form-control border-r-besar"
                    id="jam-publish" value="23:00">
                </div> --}}

                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn text-white mx-auto px-lg-3 mt-5"
                        style="background-color: #4C6FFF">Simpan
                    </button>



                </div>

            </div>
        </div>
    </div>

    {{-- END OF MODAL EDIT NEWS --}}


    @endsection

    @section('script')
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
    $('#asa').DataTable( {
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
    $('#aya').DataTable( {
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
    $('#ata').DataTable( {
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