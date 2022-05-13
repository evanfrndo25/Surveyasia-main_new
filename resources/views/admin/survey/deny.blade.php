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

            <div class="container py-4">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('admin.survey.index') }}" class="text-dark"><i
                                class="bi bi-arrow-left pe-2"></i>Kembali</a>
                        <h3 class="pt-3">Detail Survey</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <nav class="survey-tabs">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link me-5 active" id="survey-tab" data-bs-toggle="tab"
                                    data-bs-target="#survey" type="button" role="tab" aria-controls="survey"
                                    aria-selected="true">Survey</button>
                                <button class="nav-link me-5" id="pertanyaan-tab" data-bs-toggle="tab"
                                    data-bs-target="#pertanyaan" type="button" role="tab" aria-controls="pertanyaan"
                                    aria-selected="false">Pertanyaan</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="survey" role="tabpanel"
                                aria-labelledby="survey-tab">
                                <div class="row py-3">
                                    <div class="col">
                                        <p class="text-decoration-underline fw-bold">Desain Survey</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <p>logo</p>
                                        <img src="{{ asset('assets/img/Group-33556.png') }}" height="100px" alt="">
                                    </div>
                                    <div class="col-3">
                                        <p>logo</p>
                                        <img src="{{ asset('assets/img/Group-33558.png') }}" height="100px" alt="">
                                    </div>
                                </div>
                                <div class="row py-3">
                                    <div class="col">
                                        <p class="text-decoration-underline fw-bold">Kreator</p>
                                        <form>
                                            <div class="row mb-3">
                                                <label class="form-label">Researcher</label>
                                                <div class="col-3">
                                                    <input 
                                                        type="text"
                                                        class="form-control me-3 border-r-besar border-0 bg-light py-2"
                                                        value="{{ $survey->user->nama_lengkap }}"
                                                        disabled
                                                    >
                                                </div>
                                                <div class="col-2">
                                                    <input 
                                                        type="text"
                                                        class="form-control border-r-besar border-0 bg-light py-2"
                                                        value="ID {{ $survey->user->id }}"
                                                        disabled
                                                    >
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="form-label">Email</label>
                                                <div class="col-3">
                                                    <input 
                                                        type="email"
                                                        class="form-control border-r-besar border-0 bg-light py-2"
                                                        value="{{ $survey->user->email }}"
                                                        disabled
                                                    >
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="row py-3">
                                    <div class="col">
                                        <p class="text-decoration-underline fw-bold">Survey</p>
                                        <form>
                                            <div class="row mb-3">
                                                <label class="form-label">Judul</label>
                                                <div class="col-3">
                                                    <input 
                                                        type="text"
                                                        class="form-control border-r-besar border-0 bg-light py-2"
                                                        value="{{ $survey->title }}"
                                                        disabled
                                                    >
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="form-label">Deskripsi</label>
                                                <textarea 
                                                    class="form-control border-r-besar border-0 bg-light py-2" 
                                                    rows="3"
                                                    disabled
                                                >{{ $survey->description }}</textarea>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="deskripsi" class="form-label">Kategori Survei</label>
                                                <div class="col-2">
                                                    <select class="form-select border-r-besar border-0 bg-light px-3 " disabled>
                                                        <option>{{ $category_survey }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="deskripsi" class="form-label">Estimasi Penyelesaian</label>
                                                <div class="col-1">
                                                    <input 
                                                        type="number"
                                                        class="form-control border-r-besar border-0 bg-light py-2"
                                                        value="{{ $survey->estimate_completion }}"
                                                        disabled
                                                    >
                                                </div>
                                                <div class="col-4 my-auto">
                                                    <p class="my-auto">Menit</p>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="deskripsi" class="form-label">Maximum Responden</label>
                                                <div class="col-1">
                                                    <input 
                                                        type="number"
                                                        class="form-control border-r-besar border-0 bg-light py-2"
                                                        value="{{ $survey->max_attempt }}"
                                                        disabled
                                                    >
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="form-label">Jumlah Reward</label>
                                                <div class="col-2">
                                                    <input 
                                                        type="text"
                                                        class="form-control border-r-besar border-0 bg-light py-2"
                                                        value="Rp. {{ $survey->reward_point }}"
                                                        disabled
                                                    >
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="deskripsi" class="form-label">Status</label>
                                                <div class="col-2">
                                                    <select class="form-select border-r-besar border-0 bg-light px-3 " disabled>
                                                        <option>
                                                            @if ($survey->status == 'active')
                                                                Diterima
                                                            @elseif ($survey->status == 'closed')
                                                                Ditolak
                                                            @else
                                                                Menunggu
                                                            @endif
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="form-label">Waktu Upload Survey</label>
                                                <div class="col-2">
                                                    <input 
                                                        type="text"
                                                        class="form-control border-r-besar border-0 bg-light py-2"
                                                        value="{{ $survey->created_at }}" 
                                                        disabled
                                                    >
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pertanyaan" role="tabpanel" aria-labelledby="pertanyaan-tab">
                                <div class="row py-3">
                                    <div class="col-12">
                                        <p class="text-decoration-underline fw-bold">Detail Pertanyaan</p>
                                    </div>
                                    <div class="col-2 text-center">
                                        <p>Total Pertanyaan</p>
                                        <p class="bg-light px-4 py-3 btn text-center" style="cursor: auto;">{{ count($survey->questions) }}</p>
                                    </div>
                                    <div class="col-2 text-center">
                                        <p>Total Bagian</p>
                                        <p class="bg-light px-4 py-3 btn text-center" style="cursor: auto;">1</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <p class="text-decoration-underline fw-bold">Pertanyaan</p>

                                        @foreach ($survey->questions as $dataitem)
                                        <div class="card p-4 mb-3">
                                            <p class="fw-bold">{{ $dataitem->question }}</p>
                                            <p>tipe : {{ json_decode(stripslashes($dataitem->configuration))->componentName }}</p>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
