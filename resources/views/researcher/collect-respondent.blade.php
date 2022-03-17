@extends('layouts.footer')
@extends('layouts.base')
@extends('researcher.layouts.breadcrumb')
@extends('researcher.layouts.navbar2')

@section('content')

{{-- Collect Respondent --}}
<section class="collect-respondent py-5" id="collect-respondent">
    <div class="container">
        <h4>Collect Responses</h4>
        {{-- Share Link --}}
        <div class="border rounded p-5" style="margin-bottom: 200px">
            <div class="row">
                <div class="col-md-6">
                    <h5>Share Link</h5>
                    <p>Share this link with your respondents to collect their responses.</p>
                    <div class="d-flex align-items-center">
                        <input type="text" class="form-control me-3" id="link-input"
                            value="{{ $survey->shareable_link }}" readonly>
                        <a href="#" class="link-orange fs-4" data-bs-toggle="tooltip" title="Copy link"
                            onclick="clickToCopy()"><i class="far fa-copy"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <h5 class="text-center qrcode"> QR CODE</h5>
                    <div class="d-flex align-items-center" style="padding-left: 120px">
                        {!! QrCode::size(250)->generate( $survey->shareable_link ); !!}
                    </div>
                </div>
            </div>
        </div>
        {{-- End Share Link --}}
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
                        <img src="/assets/img/income_respondent.png" alt="income" height="130" class="rounded p-4">
                    </a>
                </div>
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

@endsection