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


@section('content')

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

                <div class="d-flex align-items-center justify-content-between py-4">
                    <div class="position-relative input-group align-items-center" style="width: 15%">
                        <input type="text" class="form-control rounded-pill py-2 text-center"
                            placeholder="Cari disini..." aria-label="search" aria-describedby="basic-addon1"
                            style="font-size: 12px">
                        <a href="#">
                            <i class="position-absolute top-50 start-0 translate-middle-y bi bi-search p-2 ms-1 text-secondary"
                                style="z-index: 999;"></i>
                        </a>
                    </div>
                </div>

                {{-- LOOPING DATA --}}
                <!-- Tampilan Baru -->
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="menunggu" role="tabpanel" aria-labelledby="menunggu-tab">
                        @if (count($surveysPending) == 0)
                            <p>Tidak ada survey</p>
                        @endif
                        @foreach ($surveysPending as $survey)
                        <div class="card border-0" style="border-radius: 20px; overflow: hidden;">
                            <div class="card-body p-0">
                                <table class="table table-no-border-head align-middle">
                                    <thead>
                                        <tr style="background: rgba(255, 175, 158, 0.2);">
                                            <th scope="col" style="font-size: 18px;" colspan="2">Survey</th>
                                            <th scope="col" style="font-size: 18px;">Kreator</th>
                                            <th scope="col" style="font-size: 18px;">Hitung Mundur</th>
                                            <th scope="col" style="font-size: 18px;">Aksi</th>
                                            <th scope="col" style="font-size: 18px;">Konfirmasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="col-1">
                                            <img src="{{ asset('assets/img/img-survey.svg') }}" class="rounded-circle img-fluid"
                                                alt="">
                                            </td>
                                            <td class="col-4">
                                                <div>
                                                    <p>{{ $survey->title }}</p>
                                                    <p class="small">{{ $survey->description }}</p>
                                                </div>
                                            </td>
                                            <td class="col-2">
                                                <div>
                                                    <p class="small">{{ $survey->created_at }}</p>
                                                    <p class="small">{{ $survey->user_id }} <br> {{ $survey->user->nama_lengkap }}</p>
                                                </div>
                                            </td>
                                            <td class="col-2">
                                                <div>
                                                    <h5 style="color: #F99E3F;">30 : 00 : 0</h5>
                                                </div>
                                            </td>
                                            <td class="col-1">
                                                <div>
                                                <a href="{{ route('admin.survey.show', $survey->id) }}"
                                                    class="btn"><i class="bi bi-search h4"></i></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center d-flex">
                                                    <div class="pe-3">
                                                        <a href="{{ route('admin.survey.acc-survey', $survey->id) }}" class="rounded-circle btn btn-1">
                                                            <i class="bi bi-check-lg h1"></i>
                                                        </a>
                                                        <p class="btn-1-1">Terima</p>
                                                    </div>
                                                    <div>
                                                        <button type="button"  data-bs-toggle="modal" data-bs-target="#denyModal{{ $survey->id }}" class="rounded-circle btn btn-2">
                                                        <i class="bi bi-x-lg h1"></i>
                                                        </button>
                                                        <p class="btn-2-1">Tolak</p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                         <!-- Modal deny -->
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
                        @foreach ($surveysDeny as $survey)
                        @if (count($surveysDeny) == 0)
                            <p>Tidak ada survey</p>
                        @endif
                        <div class="card border-0" style="border-radius: 20px; overflow: hidden;">
                            <div class="card-body p-0">
                                <table class="table table-no-border-head align-middle">
                                    <thead>
                                        <tr style="background: rgba(255, 175, 158, 0.2);">
                                            <th scope="col" style="font-size: 18px;" colspan="2">Survey</th>
                                            <th scope="col" style="font-size: 18px;">Kreator</th>
                                            <th scope="col" style="font-size: 18px;" class="text-center">Waktu</th>
                                            <th scope="col" style="font-size: 18px;" class="text-center">Alasan</th>
                                            <th scope="col" style="font-size: 18px;" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="col-1">
                                            <img src="{{ asset('assets/img/img-survey.svg') }}" class="rounded-circle img-fluid"
                                                alt="">
                                            </td>
                                            <td class="col-4">
                                                <div>
                                                    <p>{{ $survey->title }}</p>
                                                    <p class="small">{{ $survey->description }}</p>
                                                </div>
                                            </td>
                                            <td class="col-1">
                                                <div>
                                                    <p class="small">{{ $survey->user_id }} <br> {{ $survey->user->nama_lengkap }}</p>
                                                </div>
                                            </td>
                                            <td class="col-2">
                                                <div class="text-center">
                                                    <h5>{{ date('d-m-Y', strtotime($survey->created_at)); }}</h5>
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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Modal -->
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
                        @foreach ($surveysAcc as $survey)
                        @if (count($surveysAcc) == 0)
                            <p>Tidak ada survey</p>
                        @endif
                        <div class="card border-0" style="border-radius: 20px; overflow: hidden;">
                            <div class="card-body p-0">
                                <table class="table table-no-border-head align-middle">
                                    <thead>
                                        <tr style="background: rgba(255, 175, 158, 0.2);">
                                            <th scope="col" style="font-size: 18px;" colspan="2">Survey</th>
                                            <th scope="col" style="font-size: 18px;">Kreator</th>
                                            <th scope="col" style="font-size: 18px;">Aktifitas</th>
                                            <th scope="col" style="font-size: 18px;">Status</th>
                                            <th scope="col" style="font-size: 18px;" class="text-center">Waktu</th>
                                            <th scope="col" style="font-size: 18px;" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="col-1">
                                            <img src="{{ asset('assets/img/img-survey.svg') }}" class="rounded-circle img-fluid"
                                                alt="">
                                            </td>
                                            <td class="col-4">
                                                <div>
                                                    <p>{{ $survey->title }}</p>
                                                    <p class="small">{{ $survey->description }}</p>
                                                </div>
                                            </td>
                                            <td class="col-2">
                                                <div>
                                                    <p class="small">{{ $survey->user_id }} <br> {{ $survey->user->nama_lengkap }}</p>
                                                </div>
                                            </td>
                                            <td class="col-1">
                                                <div>
                                                    <h5 class="fw-light">
                                                        {{ $survey->type }}
                                                    </h5>
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
                                                    <h5>{{ date('d-m-Y', strtotime($survey->created_at)); }}</h5>
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
                                                                        class="bi bi-gear-fill me-2"></i>Ubah Staus</a></li>
                                                            <li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Modal -->
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
