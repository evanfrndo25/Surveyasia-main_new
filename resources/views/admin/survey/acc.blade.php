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
                                <button class="nav-link me-5" id="kumpulan-tab" data-bs-toggle="tab"
                                    data-bs-target="#kumpulan" type="button" role="tab" aria-controls="kumpulan"
                                    aria-selected="false">Kumpulan Responden</button>
                                <button class="nav-link me-5" id="status-tab" data-bs-toggle="tab"
                                    data-bs-target="#status" type="button" role="tab" aria-controls="status"
                                    aria-selected="false">Status Survey</button>
                                <button class="nav-link me-5" id="hasil-tab" data-bs-toggle="tab"
                                    data-bs-target="#hasil" type="button" role="tab" aria-controls="hasil"
                                    aria-selected="false">Hasil Analisis</button>
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
                                                    <input type="text"
                                                        class="form-control me-3 border-r-besar border-0 bg-light py-2"
                                                        placeholder="Nama Researcher">
                                                </div>
                                                <div class="col-2">
                                                    <input type="text"
                                                        class="form-control border-r-besar border-0 bg-light py-2"
                                                        placeholder="ID 3127" disabled>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="form-label">Email</label>
                                                <div class="col-3">
                                                    <input type="email"
                                                        class="form-control border-r-besar border-0 bg-light py-2"
                                                        placeholder="Email Researcher">
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
                                                    <input type="text"
                                                        class="form-control border-r-besar border-0 bg-light py-2"
                                                        placeholder="Nama Researcher">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="form-label">Deskripsi</label>
                                                <textarea class="form-control border-r-besar border-0 bg-light py-2"
                                                    placeholder="Leave a comment here" rows="3"></textarea>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="deskripsi" class="form-label">Kategori Survei</label>
                                                <div class="col-2">
                                                    <select class="form-select border-r-besar border-0 bg-light px-3 ">
                                                        <option value="Chart JS">Pelanggan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="deskripsi" class="form-label">Estimasi
                                                    Penyelesaian</label>
                                                <div class="col-1">
                                                    <input type="number"
                                                        class="form-control border-r-besar border-0 bg-light py-2"
                                                        placeholder="40">
                                                </div>
                                                <div class="col-4 my-auto">
                                                    <p class="my-auto">Menit</p>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="deskripsi" class="form-label">Maximum Responden</label>
                                                <div class="col-1">
                                                    <input type="number"
                                                        class="form-control border-r-besar border-0 bg-light py-2"
                                                        placeholder="50">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="form-label">Jumlah Reward</label>
                                                <div class="col-2">
                                                    <input type="text"
                                                        class="form-control border-r-besar border-0 bg-light py-2"
                                                        placeholder="Rp. 4000">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="deskripsi" class="form-label">Status</label>
                                                <div class="col-2">
                                                    <select class="form-select border-r-besar border-0 bg-light px-3 ">
                                                        <option value="Chart JS">Active</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="form-label">Waktu Upload Survey</label>
                                                <div class="col-2">
                                                    <input type="text"
                                                        class="form-control border-r-besar border-0 bg-light py-2"
                                                        placeholder="24 Maret 2022" disabled>
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
                                        <p class="bg-light px-4 py-3 btn text-center" style="cursor: auto;">2</p>
                                    </div>
                                    <div class="col-2 text-center">
                                        <p>Total Bagian</p>
                                        <p class="bg-light px-4 py-3 btn text-center" style="cursor: auto;">1</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <p class="text-decoration-underline fw-bold">Pertanyaan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="status" role="tabpanel" aria-labelledby="status-tab">
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
                            <div class="tab-pane fade" id="kumpulan" role="tabpanel" aria-labelledby="kumpulan-tab">
                                <section class="collect-respondent py-5" id="collect-respondent">
                                    <div class="border rounded p-5">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <h5>Bagikan Tautan</h5>
                                                <p style="opacity: 80%;">Bagikan tautan ini dengan responden Anda untuk
                                                    mengumpulkan tanggapan mereka</p>
                                                <div class="d-flex align-items-center mb-2">
                                                    <input type="text" class="form-control me-3" id="link-input"
                                                        value="{{ $survey->shareable_link }}" readonly>     
                                                                                                     
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
                            <div class="tab-pane fade" id="hasil" role="tabpanel" aria-labelledby="hasil-tab">
                                <div class="row pt-3">
                                    <div class="col-4">
                                        <div class="card p-4">
                                            <div class="border-bottom">
                                                <p class="small text-secondary">Title Survey</p>
                                                <p>Survey Terhadap Belanja Online</p>
                                            </div>
                                            <div class="border-bottom">
                                                <p class="small text-secondary">Tipe Survey</p>
                                                <p>Member Anual Personal</p>
                                            </div>
                                            <div class="border-bottom">
                                                <p class="small text-secondary">Total Responden</p>
                                                <p>20/100 Responden</p>
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
