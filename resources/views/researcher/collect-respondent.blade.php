@extends('layouts.footer')
@extends('layouts.base')
{{-- @extends('researcher.layouts.breadcrumb') --}}
@extends('researcher.layouts.navbar2')

@section('content')

{{-- Breadcrumb --}}
<section class="breadcrumb-contact mt-3 ms-5" id="breadcrumb-contact">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/researcher/surveys" class="link-yellow text-decoration-none"><i class="fas fa-home fa-fw"></i>
                    Beranda</a></li>
            <li class="breadcrumb-item">
                <a href=" {{ route('researcher.surveys.manage', $survey->id) }}"
                    class="link-secondary text-decoration-none"> Survey</a>
            </li>
            <li class="breadcrumb-item">
                <a href=" {{ route('researcher.surveys.customizeDiagram', $survey->id) }}"
                    class="link-secondary text-decoration-none">Diagram</a>
            </li>
            <li class="breadcrumb-item active"><a
                    href=" {{ route('researcher.surveys.collectRespondent', $survey->id) }}"
                    class="link-secondary text-decoration-none">Kumpulkan Responden</a>
            </li>
            </li>
            <li class="breadcrumb-item"><a href=" {{ route('researcher.surveys.statusSurvey', $survey->id) }}"
                    class="link-secondary text-decoration-none">Status Survey</a>
            </li>
            <li class="breadcrumb-item"><a href=" {{ route('researcher.surveys.report', $survey->id) }}"
                    class="link-secondary text-decoration-none">Hasil Analisis</a>
            </li>
        </ol>
    </nav>
</section>
<hr class="mb-0">
{{-- end Breadcrumb --}}

{{-- Collect Respondent --}}
<section class="collect-respondent py-5" id="collect-respondent">
    <div class="container">
        {{-- <h4>Collect Responses</h4> --}}
        {{-- Share Link --}}
        <div class="border rounded p-5" style="margin-bottom: 200px">
            <div class="row">
                @if (session('success'))
                <div class="alert alert-success alert-dismissible show fade">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if (session('error'))
                <div class="alert alert-danger alert-dismissible show fade">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="col-md-7">
                    <h5>Bagikan Tautan</h5>
                    <p style="opacity: 80%;">Bagikan tautan ini dengan responden Anda untuk mengumpulkan tanggapan
                        mereka</p>
                    <div class="d-flex align-items-center mb-2">
                        <input type="text" class="form-control @error('link-input') is-invalid @enderror me-3"
                            id="link-input" name="link-input" value="{{ $survey->shareable_link }}" readonly>

                        @error('link-input')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        {{-- <div class="col-auto " id="button-hide" style="display: none;">
                            <div class="d-flex">
                                <a href="" class="btn fs-4 me-2 px-2 float-left" style="background-color: #EF4C29; color:white;"><i class="bi bi-check2"></i></a>
                                <a href="" class="btn fs-4 me-2 px-2 float-left" style="background-color: #85848B; color:white;"><i class="bi bi-x-lg"></i></a>
                            </div>
                        </div>    --}}


                        <button style="background-color: #F2F2F2;" class="btn link-secondary fs-4 me-2" id="btn-edit"
                            onclick="show()" data-bs-toggle="modal" data-bs-target="#editLinkModal"><i
                                class="fal fa-pen"></i></button>
                        <a href="#" style="background-color: #F2F2F2;" class="btn link-secondary fs-4"
                            data-bs-toggle="tooltip" title="Copy link" onclick="clickToCopy()"><i
                                class="far fa-copy"></i></a>
                    </div>
                    <p class="fs-12px" style="opacity: 80%;">Edit tautan terlebih dahulu untuk mendapatkan QR Code</p>
                    <p class="fs-12px fw-bold" style="opacity: 80%;"># http://localhost:8000/survey/(edit)</p>
                </div>
                <div class="col-md-5">
                    <h5 class="text-center qrcode"> QR CODE</h5>
                    <div class="py-5" id="download">
                        <div class="text-center">
                            {!! QrCode::size(250)->generate( $survey->shareable_link ); !!}
                        </div>
                    </div>
                    <center>
                        <button class="btn btn-orange pt-3" id="capture">Download</button>
                    </center>
                </div>
            </div>
        </div>
        {{-- End Share Link --}}

        {{-- Modal Edit Link --}}
<<<<<<< HEAD
        <div class="modal fade" id="editLinkModal" aria-labelledby="editLinkModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-fullscreen-xl-down modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editLinkLabel">Edit link</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('survey.update', $survey->id) }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="container">
                                                <input type="text" name="title" class="form-control"
                                                    value="{{ $survey->shareable_link }}"
                                                    style="color: #00000099; font-size:24px;"></input>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <div class="container mt-4">
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary ms-auto"><i class="bi bi-save"
                                                    style="font-size: 12px;"></i>
                                                Simpan
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
=======
        <div class="modal fade" id="editLinkModal"  aria-labelledby="editLinkModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-fullscreen-lg-down modal-dialog-scrollable">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editLinkLabel">Edit Tautan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('survey.update', $survey->id) }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <div class="col">
                                <div class="container">
                                    <label for="" class="mb-2">Masukan tautan baru</label>
                                    <input type="text" name="title" class="form-control mb-5" value="{{ $survey->shareable_link }}" style="color: rgba(0, 0, 0, 0.6); font-size:16px;"></input>
                                </div>
                            </div>
                        </div>
                </div>

                <div class="modal-footer">
                    <div class="row mb-3">
                        <div class="col">
                            <div class="container">
                                <div class="text-end">
                                    <button type="button" class="btn btn-gray me-2"
                                    data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-save ms-auto">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
>>>>>>> cd81c11c28ad6205d4ea6f0c9974da3a9e73c643
                </div>
            </div>
        </div>
        {{-- End Modal Edit Link --}}

        {{-- <div class="border rounded p-5 mt-4">
            <div class="row">
                <h5 class="mb-5">Step ke-1: Siapa yang ingin kamu survei?</h5>
                <div class="col me-3">
                    <a class="btn border" data-bs-toggle="collapse" href="#collapseRegion" role="button"
                        aria-expanded="false" aria-controls="collapseRegion">
                        <p>Wilayah</p>
                        <img src="/assets/img/region_respondent.png" alt="region" height="130" class="rounded p-4">
                    </a>
                </div>
                <div class="col me-3">
                    <a class="btn border" data-bs-toggle="collapse" href="#collapseGender" role="button"
                        aria-expanded="false" aria-controls="collapseGender">
                        <p>Jenis Kelamin</p>
                        <img src="/assets/img/gender_respondent.png" alt="gender" height="130" class="rounded p-4">
                    </a>
                </div>
                <div class="col me-3">
                    <a class="btn border" data-bs-toggle="collapse" href="#collapseAge" role="button"
                        aria-expanded="false" aria-controls="collapseAge">
                        <p>Umur</p>
                        <img src="/assets/img/age_respondent.png" alt="age" height="130" class="rounded p-4">
                    </a>
                </div>
                <div class="col">
                    <a class="btn border" data-bs-toggle="collapse" href="#collapseIncome" role="button"
                        aria-expanded="false" aria-controls="collapseIncome">
                        <p>Pendapatan</p>
                    </div>
                        <img src="/assets/img/income_respondent.png" alt="income" height="130" class="rounded p-4">
                    </a>
            </div>
        </div> --}}
        {{-- Collapse --}}
        {{-- <div class="collapse" id="collapseRegion">
            <div class="bg-light-grey rounded mt-3 p-5">
                <h5>Wilayah</h5>
                <div class="col-md-4">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Pilih Wilayah</option>
                        <option value="1">Jakarta</option>
                        <option value="2">Bandung</option>
                        <option value="3">Bali</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="collapse" id="collapseGender">
            <div class="bg-light-grey rounded mt-3 p-5">
                <h5>Jenis Kelamin</h5>
                <div class="col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="allGender" checked>
                        <label class="form-check-label" for="allGender">
                            Semuanya
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="maleGender">
                        <label class="form-check-label" for="maleGender">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="femaleGender">
                        <label class="form-check-label" for="femaleGender">
                            Perempuan
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="collapse" id="collapseAge">
            <div class="bg-light-grey rounded mt-3 p-5">
                <h5>Umur</h5>
                <div class="row justify-content-between">
                    <div class="mt-3">
                        <input type="range" class="form-range" min="18" max="99" id="ageRange">
                    </div>
                    <div class="col-md-1 text-center">
                        <div class="mb-3">
                            <label for="minAge" class="form-label text-muted">Min</label>
                            <input type="number" class="form-control" id="minAge" placeholder="18" min="18" max="99">
                        </div>
                    </div>
                    <div class="col-md-1 text-center">
                        <div class="mb-3">
                            <label for="maxAge" class="form-label text-muted">Max</label>
                            <input type="number" class="form-control" id="maxAge" placeholder="99" min="18" max="99">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="collapse" id="collapseIncome">
            <div class="bg-light-grey rounded mt-3 p-5">
                <h5>Pendapatan</h5>
                <div class="col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="allIncome" id="selectAllIncome">
                        <label class="form-check-label" for="selectAllIncome">
                            Pilih Semua
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="zeroIncome" id="selectZeroIncome">
                        <label class="form-check-label" for="selectZeroIncome">
                            Rp0 - Rp30.000.000
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="thirtyIncome" id="selectThirtyIncome">
                        <label class="form-check-label" for="selectThirtyIncome">
                            Rp30.000.001 - Rp60.000.000
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="sixtyIncome" id="selectSixtyIncome">
                        <label class="form-check-label" for="selectSixtyIncome">
                            Rp60.000.001 - Rp120.000.000
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="oneTwentyIncome"
                            id="selectOneTwentyIncome">
                        <label class="form-check-label" for="selectOneTwentyIncome">
                            Rp120.000.001 - Rp180.000.000
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="oneEightyIncome"
                            id="selectOneEightyIncome">
                        <label class="form-check-label" for="selectOneEightyIncome">
                            Lebih dari Rp180.000.000
                        </label>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- End Collapse --}}
        {{-- <div class="border rounded p-5 mt-4">
            <div class="row">
                <h5 class="mb-5">Step ke-2: Berapa banyak responden yang dibutuhkan?</h5>
                <div class="col-md-1">
                    <input type="number" class="form-control" id="number" name="totalRespondent" min="1"
                        placeholder="220">
                </div>
                <div class="col align-self-center">
                    <input type="range" min="50" max="3000" value="220" class="slider-respondent w-100"
                        id="totalRespondent" onchange="valueSlider()">
                    <p id="valueSlider">0</p>
                </div>
            </div>
        </div> --}}

        {{-- Gift --}}
        {{-- <div class="border rounded p-5 mt-4">
            <div class="row">
                <div class="col-md-5 d-flex">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="additional-gift" id="additional-gift"
                            name="additional-gift">
                    </div>
                    <div class="form-group">
                        <label for="additional-gift">Addtional Gift</label>
                        <input type="text" class="form-control" id="additional-gift" name="additional-gift-input"
                            placeholder="100.000">
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-8 d-flex">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="advance-analysis" id="advance-analysis"
                            name="advance-analysis">
                    </div>
                    <div>
                        <h5>Add Advance Analysis</h5>
                        <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus beatae
                            dignissimos, in,
                            facilis.</p>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- End Gift --}}
    </div>
</section>

{{-- End Collect Respondent --}}
<script src="{{ asset('js/html2canvas.js') }}"></script>
<script>
    document.getElementById("capture").onclick = function () {
        const screenshotTarget = document.getElementById('download');

        html2canvas(screenshotTarget).then((canvas) => {
            const base64image = canvas.toDataURL("image/png");
            var anchor = document.createElement('a');
            anchor.setAttribute("href", base64image);
            anchor.setAttribute("download", "my-image.png");
            anchor.click();
            anchor.remove();
        })
    }

</script>
<script type="text/javascript">
    function show() {
        var x = document.getElementById("button-hide");
        var y = document.getElementById("btn-edit");
        if (x.style.display === "none") {
            x.style.display = "block";
            y.style.display = "none";
        } else {
            x.style.display = "none";
            y.style.display = "block";
        }
    }

    function showQr() {
        var q = document.getElementById("qr");
        var b = document.getElementById("btn-check");
        if (q.style.display === "none") {
            b.style.display = "block";
            q.style.display = "block";
        }
    }

</script>

<!-- for modal survey status -->
@if ($survey->status == 'pending')
@include('researcher.modals.popup-status-pending')
@elseif ($survey->status == 'reject')
@include('researcher.modals.popup-status-reject')
@else
@include('researcher.modals.popup-status-draft')
@endif

<script type="text/javascript">
    $(window).on('load', function () {
        if ("{{ $survey->status }}" !== 'active') {
            $('#myModal').modal('show');
        } else {
            $('#myModal').modal('hide');
        }
    });

</script>
<!-- end modal survey status -->

@endsection
