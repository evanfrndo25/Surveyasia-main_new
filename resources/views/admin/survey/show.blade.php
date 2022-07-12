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

                    <div class="card border-0 bg-white p-3" style="border-radius: 20px;">
                        <nav class="user-tabs">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active text-secondary" id="survey-tab" data-bs-toggle="tab"
                                        data-bs-target="#survey" type="button" role="tab" aria-controls="survey"
                                        aria-selected="true">Survey</button>
                                    <button class="nav-link text-secondary" id="pertanyaan-tab" data-bs-toggle="tab"
                                        data-bs-target="#pertanyaan" type="button" role="tab" aria-controls="pertanyaan"
                                        aria-selected="false">Pertanyaan</button>
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
                                                <div class="row mb-3">
                                                    <p class="text-decoration-underline fw-bold">Kreator</p>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-9">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Researcher</label>
                                                            @foreach ($surveytemp as $dataitem)
                                                                <input type="text" class="form-control"
                                                                    id="exampleFormControlInput1" name="" disabled
                                                                    value="{{ $dataitem->user->nama_lengkap }}">
                                                            @endforeach
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">ID</label>
                                                            @foreach ($surveytemp as $dataitem)
                                                                <input type="text" class="form-control"
                                                                    id="exampleFormControlInput1" name="" disabled
                                                                    value="{{ $dataitem->user_id }}">
                                                            @endforeach
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1"
                                                        class="form-label">Email</label>
                                                        @foreach ($surveytemp as $dataitem)
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1" name="" disabled
                                                                value="{{ $dataitem->user->email }}">
                                                        @endforeach
                                                </div>
                                                <br>
                                                <div class="row mb-3">
                                                    <p class="text-decoration-underline fw-bold">Survei</p>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-9">
                                                        <label for="exampleFormControlInput1" class="form-label">Judul</label>
                                                            @foreach ($surveytemp as $dataitem)
                                                                <input type="text" class="form-control"
                                                                    id="exampleFormControlInput1" name="" disabled
                                                                    value="{{ $dataitem->title }}">
                                                            @endforeach
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">ID</label>
                                                            @foreach ($surveytemp as $dataitem)
                                                                <input type="text" class="form-control"
                                                                    id="exampleFormControlInput1" name="" disabled
                                                                    value="{{ $dataitem->id }}">
                                                            @endforeach
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Deskripsi</label>
                                                        @foreach ($surveytemp as $dataitem)
                                                            <textarea class="form-control" id="deskripsi" rows="8"
                                                                readonly>{{ $dataitem->description }}</textarea>
                                                        @endforeach
                                                </div>
                                                <div class="mb-3">
                                                    <label for="deskripsi" class="form-label">Kategori Survei</label>
                                                        @foreach ($surveytemp as $dataitem)
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1" name="" disabled
                                                                value="{{ $dataitem->category->name }}">
                                                        @endforeach
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="deskripsi" class="form-label">Estimasi Penyelesaian</label>
                                                        <div class="col-1">
                                                            @foreach ($surveytemp as $dataitem)
                                                                <input type="text" class="form-control"
                                                                    id="exampleFormControlInput1" name="" disabled
                                                                    placeholder="40">
                                                            @endforeach
                                                        </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="deskripsi" class="form-label">Maximum Responden</label>
                                                        <div class="col-1">
                                                        <input type="text" class="form-control"
                                                                id="Waktu" name="max_attempt"
                                                                value="{{ $dataitem->max_attempt }}" disabled>
                                                        </div>
                                                        <div class="col-4 my-auto">
                                                            <p class="my-auto">Menit</p>
                                                        </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="form-label">Jumlah Reward</label>
                                                        <div class="col-2">
                                                            @foreach ($surveytemp as $dataitem)
                                                                <input type="text" class="form-control"
                                                                    id="Point" name="reward_point"
                                                                    value="{{ $dataitem->reward_point }}" disabled>
                                                            @endforeach
                                                        </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="deskripsi" class="form-label">Status</label>
                                                        <div class="col-2">
                                                            <select type="text" class="form-control"
                                                            disabled>
                                                            @foreach ($surveytemp as $dataitem)
                                                            <option>
                                                                @if ($dataitem->status == 'active')
                                                                    Diterima
                                                                @elseif ($dataitem->status == 'closed')
                                                                    Ditolak
                                                                @else
                                                                    Menunggu
                                                                @endif
                                                            </option>
                                                            @endforeach
                                                            </select>
                                                        </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Waktu Upload Survey</label>
                                                        <div class="col-3">
                                                            @foreach ($surveytemp as $dataitem)
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1" name="" disabled
                                                                value="{{ $dataitem->created_at }}">
                                                            @endforeach
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
                                <div class="card border-0 bg-white p-3" style="border-radius: 20px;">
                                    <div class="col-12">
                                        <p class="text-decoration-underline fw-bold">Detail Pertanyaan</p>
                                    </div>
                                    <div class="col-2 text-center">
                                        <p>Total Pertanyaan</p>
                                        <p class="bg-light px-4 py-3 btn text-center" style="cursor: auto;">
                                            {{ count($question) }}</p>
                                    </div>
                                    <div class="col-2 text-center">
                                        <p>Total Bagian</p>
                                        <p class="bg-light px-4 py-3 btn text-center" style="cursor: auto;">1</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <p class="text-decoration-underline fw-bold">Pertanyaan</p>

                                        @foreach ($question as $dataitem)
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
</div>
<script>
    var quest = {!! $question !!};
</script>
<script type="module" src="{{ asset('js/admin/buildQuestion.js') }}"></script>

@endsection
