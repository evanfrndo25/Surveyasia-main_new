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

<div class="container-fluid" style="background-color: #F7F8FC; height: 100%;">
    <div class="row">
        <div class="col-2 nopadding">
            @include('admin.component.sidebar')
        </div>
        <div class="col-10 nopadding">
            @include('admin.component.header')

            <div class="container py-4">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('admin.survey.index') }}" class="mb-2 text-dark text-decoration-none" style="font-weight: 600;font-size: 16px;">
                    <i class="bi bi-chevron-left pe-2"></i>Kembali </a>
                        <h4 class=" text-center py-3" style="fw-bold">Detail Survey</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <div class="card border-0 bg-white p-3" style="border-radius: 20px;">
                        <nav class="survey-tabs">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link me-5 text-secondary active" id="survey-tab" data-bs-toggle="tab"
                                    data-bs-target="#survey" type="button" role="tab" aria-controls="survey"
                                    aria-selected="true">Survey</button>
                                <button class="nav-link me-5 text-secondary" id="pertanyaan-tab" data-bs-toggle="tab"
                                    data-bs-target="#pertanyaan" type="button" role="tab" aria-controls="pertanyaan"
                                    aria-selected="false">Pertanyaan</button>
                                <button class="nav-link me-5 text-secondary" id="kumpulan-tab" data-bs-toggle="tab"
                                    data-bs-target="#kumpulan" type="button" role="tab" aria-controls="kumpulan"
                                    aria-selected="false">Kumpulan Responden</button>
                                <button class="nav-link me-5 text-secondary" id="status-tab" data-bs-toggle="tab"
                                    data-bs-target="#status" type="button" role="tab" aria-controls="status"
                                    aria-selected="false">Status Survey</button>
                                <button class="nav-link me-5 text-secondary" id="hasil-tab" data-bs-toggle="tab"
                                    data-bs-target="#hasil" type="button" role="tab" aria-controls="hasil"
                                    aria-selected="false">Hasil Analisis</button>
                            </div>
                        </nav>
                        </div>
                        <br>

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="survey" role="tabpanel"
                                aria-labelledby="survey-tab">
                                <div class="card border-0 bg-white p-3" style="border-radius: 20px;">
                                    <nav class="user-tabs">
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active text-secondary" id="detail-tab"
                                                data-bs-toggle="tab" data-bs-target="#detail" type="button" role="tab"
                                                aria-controls="detail" aria-selected="true">Detail</button>
                                            <button class="nav-link text-secondary" id="desain-tab" data-bs-toggle="tab"
                                                data-bs-target="#desain" type="button" role="tab" aria-controls="desain"
                                                aria-selected="false">Desain</button>
                                        </div>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="detail" role="tabpanel"
                                                aria-labelledby="detail-tab">
                                                <br>
                                                <div class="row py-3">
                                                    <p class="text-decoration-underline fw-bold">Kreator</p>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-9">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Researcher</label>
                                                                <input type="text" class="form-control"
                                                                    id="exampleFormControlInput1" name="" disabled
                                                                    value="{{ $survey->user->nama_lengkap }}">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">ID</label>
                                                                <input type="text" class="form-control"
                                                                    id="exampleFormControlInput1" name="" disabled
                                                                    value="{{ $survey->user->id}}">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1"
                                                        class="form-label">Email</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1" name="" disabled
                                                                value="{{ $survey->user->email }}">
                                                </div>
                                                <div class="row mb-3">
                                                    <p class="text-decoration-underline fw-bold">Survei</p>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-9">
                                                        <label for="exampleFormControlInput1" class="form-label">Judul</label>
                                                                <input type="text" class="form-control"
                                                                    id="exampleFormControlInput1" name="" disabled
                                                                    value="{{ $survey->title }}">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">ID</label>
                                                                <input type="text" class="form-control"
                                                                    id="exampleFormControlInput1" name="" disabled
                                                                    value="{{ $survey->id }}">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Deskripsi</label>
                                                            <textarea class="form-control" id="deskripsi" rows="8"
                                                                readonly>{{ $survey->description }}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="deskripsi" class="form-label">Kategori Survei</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1" name="" disabled
                                                                value="{{ $category_survey }}">
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="deskripsi" class="form-label">Estimasi Penyelesaian</label>
                                                        <div class="col-1">
                                                        <input type="text" class="form-control"
                                                                id="exampleFormControlInput1" name="" disabled
                                                                value="{{ $survey->estimate_completion }}">
                                                        </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="deskripsi" class="form-label">Maximum Responden</label>
                                                        <div class="col-1">
                                                        <input type="text" class="form-control"
                                                                id="Waktu" name="max_attempt"
                                                                value="{{ $survey->max_attempt}}" disabled>
                                                        </div>
                                                        <div class="col-4 my-auto">
                                                            <p class="my-auto">Menit</p>
                                                        </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="form-label">Jumlah Reward</label>
                                                        <div class="col-2">
                                                                <input type="text" class="form-control"
                                                                    id="Point" name="reward_point"
                                                                    value="Rp. {{ $survey->reward_point }}" disabled>
                                                        </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="deskripsi" class="form-label">Status</label>
                                                        <div class="col-2">
                                                            <select type="text" class="form-control"
                                                            disabled>
                                                            <option>
                                                            @if ($survey->status == 'active')
                                                                Diterima
                                                            @elseif ($survey->status == 'reject')
                                                                Ditolak
                                                            @elseif ($survey->status == 'draft')
                                                                Diarsipkan
                                                            @else
                                                                Menunggu
                                                            @endif
                                                            <option>
                                                            </select>
                                                        </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Waktu Upload Survey</label>
                                                        <div class="col-3">
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1" name="" disabled
                                                                value="{{  $survey->created_at  }}">
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="desain" role="tabpanel" aria-labelledby="desain-tab">
                                                <div class="mb-3">
                                                <br>
                                                    <div class="col-3">
                                                        <p>logo</p>
                                                        <img src="{{ asset('assets/img/Group-33556.png') }}" height="100px" alt="">
                                                    </div>
                                                    <br>
                                                    <div class="col-3">
                                                        <p>logo</p>
                                                        <img src="{{ asset('assets/img/Group-33558.png') }}" height="100px" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            </nav>
                               
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
                            
                            
                            <div class="tab-pane fade" id="status" role="tabpanel" aria-labelledby="status-tab">
                            <div class="card border-0 bg-white p-3" style="border-radius: 20px;">
                                <section class="data-respondent py-5" id="data-respondent" style="margin-bottom: 250px">
                                    <div class="container">
                                        <h4>Data Responden</h4>
                                        <table class="table table-hover">
                                            <thead class="table border text-white" style="background-color: coral;">
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col">Metode</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Responden</th>
                                                    <th scope="col">Tanggal Modifikasi</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border">
                                                    <td><i class="fas fa-share-alt fa-fw"></i></td>
                                                    <td>Berbagi Tautan</td>
                                                    <td>Active</td>
                                                    <td>0</td>
                                                    <td>Kamis, 30 September 2021, 8:56 PM</td>
                                                    <td><i class="fas fa-ellipsis-h fa-fw"></i></td>
                                                </tr>
                                                <tr class="border">
                                                    <td><i class="fas fa-user-check fa-fw"></i></td>
                                                    <td>Target Responden</td>
                                                    <td>Active</td>
                                                    <td>0</td>
                                                    <td>Kamis, 30 September 2021, 8:56 PM</td>
                                                    <td><i class="fas fa-ellipsis-h fa-fw"></i></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                            </div>
                            </div>
                            <div class="tab-pane fade" id="kumpulan" role="tabpanel" aria-labelledby="kumpulan-tab">
                            <div class="card border-0 bg-white p-3" style="border-radius: 20px;">
                                <section class="collect-respondent py-5" id="collect-respondent">
                                    <div class="border rounded p-5">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <h5>Bagikan Tautan</h5>
                                                <p style="opacity: 80%;">Bagikan tautan ini dengan responden Anda untuk
                                                    mengumpulkan tanggapan mereka</p>
                                                <div class="d-flex align-items-center mb-2">
                                                    <input 
                                                        type="text" 
                                                        class="form-control me-3" 
                                                        id="link-input"
                                                        value="{{ $survey->shareable_link }}" 
                                                        disabled
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <h5 class="text-center qrcode">QR CODE</h5>
                                                <div class="text-center">
                                                    @if ($survey->shareable_link)
                                                    {!! QrCode::size(250)->generate($survey->shareable_link) !!}
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            </div>
                            <div class="tab-pane fade" id="hasil" role="tabpanel" aria-labelledby="hasil-tab">
                                <div class="row pt-3">
                                    <div class="col-4">
                                        <div class="card p-4">
                                            <div class="border-bottom">
                                                <p class="small text-secondary">Title Survey</p>
                                                <p>{{ $survey->title }}</p>
                                            </div>
                                            <div class="border-bottom">
                                                <p class="small text-secondary">Tipe Survey</p>
                                                <p>{{ $category_subs }}</p>
                                            </div>
                                            <div class="border-bottom">
                                                <p class="small text-secondary">Total Responden</p>
                                                <p>{{ $total_filled_in }}/{{ $survey->max_attempt }} Responden</p>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2 pt-3">
                                            <button class="btn btn-secondary rounded-pill py-2" type="button">Advance
                                                Analisis</button>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card p-5">

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
</div>
@endsection
