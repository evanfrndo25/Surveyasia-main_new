@extends('layouts.footer')
@extends(Auth::guest() ? 'layouts.base' : (Auth::user()->role_id == 2 ? 'researcher.layouts.base' :
'layouts.base'))
@extends(Auth::guest() ? 'layouts.navbar' : (Auth::user()->role_id == 2 ? 'researcher.layouts.navbar' :
'respondent.layouts.navbar'))

@section('content')
<section class="pricing" id="pricing">
    <div class="row">
        <div class="col">
            <div class="row justify-content-center text-center">
                <h2 class="fw-bold pt-5">Pilihan Harga untuk Anda</h2>
                <div class="col-md-5">
                    <p class="text-secondary">Setting up an investment structure, raiding the neccessary capital,
                        and
                        maintaing
                        an excellent investor
                        relation throught the investment life requires well-established processes
                    </p>
                </div>
                <div class="d-flex justify-content-center">
                    <p class="fw-semibold">Bulanan</p>
                    <div class="form-check form-switch ms-2">
                        <input class="form-check-input form-check-input-orange" type="checkbox" id="pricingSwitch"
                            onchange="pricingSwitch()">
                    </div>
                    <p class="fw-semibold">Tahunan</p>
                </div>
            </div>
            <div class="monthly-pricing" id="monthlyPricing">
                <ul class="nav justify-content-center mb-3" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link link-pricing link-secondary" aria-current="page" href="#"
                            id="pay-per-survey-tab" data-bs-toggle="tab" data-bs-target="#pay-per-survey" type="button"
                            role="tab" aria-controls="pay-per-survey" aria-selected="true">
                            <h4 class="fw-semibold m-0">Pay Per Survey</h4>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link link-pricing link-secondary link-orange text-decoration-underline"
                            aria-current="page" href="#" id="personal-tab" data-bs-toggle="tab"
                            data-bs-target="#personal" type="button" role="tab" aria-controls="personal"
                            aria-selected="true">
                            <h4 class="fw-semibold m-0">Personal</h4>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link link-pricing link-secondary" aria-current="page" href="#" id="business-tab"
                            data-bs-toggle="tab" data-bs-target="#business" type="button" role="tab"
                            aria-controls="business" aria-selected="true">
                            <h4 class="fw-semibold m-0">Business</h4>
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade" id="pay-per-survey" role="tabpanel" aria-labelledby="pay-per-survey-tab">
                        <div class="container">
                            <div class="row justify-content-center pay-per-survey-price" id="pay-per-survey-price">
                                <div class="col-md-4 mt-md-0 mt-3">
                                    <div class="border radius-default p-3">
                                        <h5 class=" fw-bold">{{ $categorySubscription[1]->title }}</h5>
                                        <p class="fs-14px">{{ $categorySubscription[1]->description }}</p>
                                        <h4 class="fw-bold">Start from Rp{{
                                            number_format($categorySubscription[1]->price, 0, 0, '.') }}</h4>
                                        <p class="text-secondary fs-14px">Per bulan</p>
                                        <a class="btn btn-outline-dark radius-default w-100 fw-semibold mb-3"
                                            href="{{ route('researcher.payment.show', $categorySubscription[1]) }}"
                                            role="button">Choose this
                                            plan</a>
                                        <div class="text-secondary">
                                            <p>&#10004; Custom sesuai kebutuhan Anda</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-md-0 mt-3">
                                    <div class="border radius-default p-3">
                                        <h5 class=" fw-bold">{{ $categorySubscription[2]->title }}</h5>
                                        <p class="fs-14px">{{ $categorySubscription[2]->description }}</p>
                                        <h4 class="fw-bold">Contact us for custom pricing</h4>
                                        <p class="text-secondary fs-14px">Per bulan</p>
                                        <a class="btn btn-outline-dark radius-default w-100 fw-semibold mb-3"
                                            href="{{ route('contact.index') }}" role="button">Choose this plan</a>
                                        <div class="text-secondary">
                                            <p>&#10004; Kolaborasi Tim</p>
                                            <p>&#10004; Custom</p>
                                            <p>&#10004; Dukungan telepon</p>
                                            <p>&#10004; Tren data</p>
                                            <p>&#10004; Lihat alamat IP responden</p>
                                            <p>&#10004; Email Konfirmasi kepada Responden</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-5 justify-content-center">
                                <h2 class="text-center fw-bold mb-5">Fitur yang Didapatkan</h2>
                                <table class="table table-borderless text-center">

                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <h5 class="fw-bold mb-4">Features</h5>
                                            </th>
                                            <th scope="col">
                                                <h5 class="fw-bold mb-4">Make Your Own</h5>
                                            </th>
                                            <th scope="col">
                                                <h5 class="fw-bold mb-4">Contact Us</h5>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row">
                                                <p class="text-muted">Jumlah survei</p>
                                                <p class="text-muted">Pertanyaan per survei</p>
                                                <p class="text-muted">Jumlah responden</p>
                                                <p class="text-muted">Melacak tanggapan email</p>
                                                <p class="text-muted">Survei berulang</p>
                                                <p class="text-muted">Terima pembayaran</p>
                                                <p class="text-muted">Pengatur Waktu Tidak Aktif</p>
                                                <p class="text-muted">Kunci Kode Sandi</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">Unlimited</p>
                                                <p class="text-muted">Unlimited</p>
                                                <p class="text-muted">custom</p>
                                                @for ($i = 0; $i < 5; $i++) <p class="text-muted">&#10004;</p>
                                                    @endfor
                                            </td>
                                            <td>
                                                <p class="text-muted">Unlimited</p>
                                                <p class="text-muted">Unlimited</p>
                                                <p class="text-muted">custom</p>
                                                @for ($i = 0; $i < 5; $i++) <p class="text-muted">&#10004;</p>
                                                    @endfor
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                        <div class="container">
                            <div class="row justify-content-center personal-price" id="personal-price">
                                <div class="col-md-4 mt-md-0 mt-3">
                                    <div class="border radius-default p-3">
                                        <h5 class=" fw-bold">{{ $categorySubscription[3]->title }}</h5>
                                        <p class="fs-14px">{{ $categorySubscription[3]->description }}</p>
                                        <h4 class="fw-bold">Rp{{ number_format($categorySubscription[3]->price, 0, 0,
                                            '.') }}</h4>
                                        <p class="text-secondary fs-14px">Per bulan</p>
                                        <a class="btn btn-outline-dark radius-default w-100 fw-semibold mb-3"
                                            href="{{ route('researcher.payment.show', $categorySubscription[3]) }}"
                                            role="button">Choose this
                                            plan</a>
                                        <div class="text-secondary">
                                            <p>&#10004; Jumlah survei unlimited</p>
                                            <p>&#10004; Pertanyaan unlimited</p>
                                            <p>&#10004; 1.000 Responden</p>
                                            <p>&#10004; Melacak tanggapan email</p>
                                            <p>&#10004; Survey berulang</p>
                                            <p>&#10004; Terima pembayaran</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-md-0 mt-3">
                                    <div class="border radius-default p-3">
                                        <h5 class=" fw-bold">{{ $categorySubscription[4]->title }}</h5>
                                        <p class="fs-14px">{{ $categorySubscription[4]->description }}</p>
                                        <h4 class="fw-bold">Rp{{ number_format($categorySubscription[4]->price, 0, 0,
                                            '.') }}</h4>
                                        <p class="text-secondary fs-14px">Per bulan</p>
                                        <a class="btn btn-outline-dark radius-default w-100 fw-semibold mb-3"
                                            href="{{ route('researcher.payment.show', $categorySubscription[4]) }}"
                                            role="button">Choose this
                                            plan</a>
                                        <div class="text-secondary">
                                            <p>&#10004; Jumlah survei unlimited</p>
                                            <p>&#10004; Pertanyaan unlimited</p>
                                            <p>&#10004; 2.500 Responden</p>
                                            <p>&#10004; Fitur kolaborasi</p>
                                            <p>&#10004; Pengatur waktu tidak aktif</p>
                                            <p>&#10004; Terima pembayaran</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-md-0 mt-3">
                                    <div class="border radius-default p-3">
                                        <h5 class=" fw-bold">{{ $categorySubscription[5]->title }}</h5>
                                        <p class="fs-14px">{{ $categorySubscription[5]->description }}</p>
                                        <h4 class="fw-bold">Rp{{ number_format($categorySubscription[5]->price, 0, 0,
                                            '.') }}</h4>
                                        <p class="text-secondary fs-14px">Per bulan</p>
                                        <a class="btn btn-outline-dark radius-default w-100 fw-semibold mb-3"
                                            href="{{ route('researcher.payment.show', $categorySubscription[5]) }}"
                                            role="button">Choose this
                                            plan</a>
                                        <div class="text-secondary">
                                            <p>&#10004; Jumlah survei unlimited</p>
                                            <p>&#10004; Pertanyaan unlimited</p>
                                            <p>&#10004; 5.000 Responden</p>
                                            <p>&#10004; Fitur kolaborasi</p>
                                            <p>&#10004; Pengatur waktu tidak aktif</p>
                                            <p>&#10004; Terima pembayaran</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-5 justify-content-center">
                                <h2 class="text-center fw-bold mb-5">Fitur yang Didapatkan</h2>
                                <table class="table table-borderless text-center">

                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <h5 class="fw-bold mb-4">Features</h5>
                                            </th>
                                            <th scope="col">
                                                <h5 class="fw-bold mb-4">Basic</h5>
                                            </th>
                                            <th scope="col">
                                                <h5 class="fw-bold mb-4">Essential Annual</h5>
                                            </th>
                                            <th scope="col">
                                                <h5 class="fw-bold mb-4">Plus Annual</h5>
                                            </th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row">
                                                <p class="text-muted">Jumlah survei</p>
                                                <p class="text-muted">Pertanyaan per survei</p>
                                                <p class="text-muted">Jumlah responden</p>
                                                <p class="text-muted">Melacak tanggapan email</p>
                                                <p class="text-muted">Survei berulang</p>
                                                <p class="text-muted">Terima pembayaran</p>
                                                <p class="text-muted">Pengatur Waktu Tidak Aktif</p>
                                                <p class="text-muted">Kunci Kode Sandi</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">Unlimited</p>
                                                <p class="text-muted">Unlimited</p>
                                                <p class="text-muted">1.000 Responden</p>
                                                @for ($i = 0; $i < 5; $i++) <p class="text-muted">&#10004;</p>
                                                    @endfor
                                            </td>
                                            <td>
                                                <p class="text-muted">Unlimited</p>
                                                <p class="text-muted">Unlimited</p>
                                                <p class="text-muted">2.500 Responden</p>
                                                @for ($i = 0; $i < 5; $i++) <p class="text-muted">&#10004;</p>
                                                    @endfor
                                            </td>
                                            <td>
                                                <p class="text-muted">Unlimited</p>
                                                <p class="text-muted">Unlimited</p>
                                                <p class="text-muted">5000 Responden</p>
                                                @for ($i = 0; $i < 5; $i++) <p class="text-muted">&#10004;</p>
                                                    @endfor
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="business" role="tabpanel" aria-labelledby="business-tab">
                        <div class="container">
                            <div class="row justify-content-center business-price" id="business-price">
                                <div class="col-md-4 mt-md-0 mt-3">
                                    <div class="border radius-muted p-3">
                                        <h5 class=" fw-bold">{{ $categorySubscription[8]->title }}</h5>
                                        <p class="fs-14px">{{ $categorySubscription[8]->description }}</p>
                                        <h4 class="fw-bold">Rp{{ number_format($categorySubscription[8]->price, 0,
                                            0,
                                            '.') }}</h4>
                                        <p class="text-secondary fs-14px">Per bulan</p>
                                        <a class="btn btn-outline-dark radius-muted w-100 fw-semibold mb-3"
                                            href="{{ route('researcher.payment.show', $categorySubscription[8]) }}"
                                            role="button">Choose this
                                            plan</a>
                                        <div class="text-secondary">
                                            <p>&#10004; Kolaborasi tim</p>
                                            <p>&#10004; 15.000 Responden</p>
                                            <p>&#10004; Email yang dipercepat</p>
                                            <p>&#10004; Survey dilindungi kata sandi</p>
                                            <p>&#10004; Aktifkan pemblokiran IP</p>
                                            <p>&#10004; Validasi jawaban</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-md-0 mt-3">
                                    <div class="border radius-muted p-3">
                                        <h5 class=" fw-bold">{{ $categorySubscription[9]->title }}</h5>
                                        <p class="fs-14px">{{ $categorySubscription[9]->description }}</p>
                                        <h4 class="fw-bold">Rp{{ number_format($categorySubscription[9]->price, 0, 0,
                                            '.') }}</h4>
                                        <p class="text-secondary fs-14px">Per bulan</p>
                                        <a class="btn btn-outline-dark radius-muted w-100 fw-semibold mb-3"
                                            href="{{ route('researcher.payment.show', $categorySubscription[9]) }}"
                                            role="button">Choose this
                                            plan</a>
                                        <div class="text-secondary">
                                            <p>&#10004; Kolaborasi tim</p>
                                            <p>&#10004; 30.000 Responden</p>
                                            <p>&#10004; Email yang diprioritaskan</p>
                                            <p>&#10004; Halaman acak</p>
                                            <p>&#10004; Kuota tanggapan</p>
                                            <p>&#10004; Visualisasi data peta</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-md-0 mt-3">
                                    <div class="border radius-muted p-3">
                                        <h5 class=" fw-bold">{{ $categorySubscription[10]->title }}</h5>
                                        <p class="fs-14px">{{ $categorySubscription[10]->description }}</p>
                                        <h4 class="fw-bold">Contact Us</h4>
                                        <p class="text-secondary fs-14px">Per bulan</p>
                                        <a class="btn btn-outline-dark radius-default w-100 fw-semibold mb-3"
                                            href="{{ route('contact.index') }}" role="button">Choose this plan</a>
                                        <div class="text-secondary">
                                            <p>&#10004; Kolaborasi tim</p>
                                            <p>&#10004; Custom</p>
                                            <p>&#10004; Dukungan telepon</p>
                                            <p>&#10004; Tren data</p>
                                            <p>&#10004; Lihat alamat IP responden</p>
                                            <p>&#10004; Email konfirmasi kepada Responden</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-5 justify-content-center">
                                <h2 class="text-center fw-bold mb-5">Fitur yang Didapatkan</h2>
                                <table class="table table-borderless text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <h5 class="fw-bold mb-4">Features</h5>
                                            </th>
                                            <th scope="col">
                                                <h5 class="fw-bold mb-4">Advantage</h5>
                                            </th>
                                            <th scope="col">
                                                <h5 class="fw-bold mb-4">Enterprise</h5>
                                            </th>
                                            <th scope="col">
                                                <h5 class="fw-bold mb-4">Corporate</h5>
                                            </th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row">
                                                <p class="text-muted">Jumlah survei</p>
                                                <p class="text-muted">Pertanyaan per survei</p>
                                                <p class="text-muted">Jumlah responden</p>
                                                <p class="text-muted">Melacak tanggapan email</p>
                                                <p class="text-muted">Survei berulang</p>
                                                <p class="text-muted">Terima pembayaran</p>
                                                <p class="text-muted">Pengatur Waktu Tidak Aktif</p>
                                                <p class="text-muted">Kunci Kode Sandi</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">Unlimited</p>
                                                <p class="text-muted">Unlimited</p>
                                                <p class="text-muted">15.000 Responden</p>
                                                @for ($i = 0; $i < 5; $i++) <p class="text-muted">&#10004;</p>
                                                    @endfor
                                            </td>
                                            <td>
                                                <p class="text-muted">Unlimited</p>
                                                <p class="text-muted">Unlimited</p>
                                                <p class="text-muted">30.000 Responden</p>
                                                @for ($i = 0; $i < 5; $i++) <p class="text-muted">&#10004;</p>
                                                    @endfor
                                            </td>
                                            <td>
                                                <p class="text-muted">Unlimited</p>
                                                <p class="text-muted">Unlimited</p>
                                                <p class="text-muted">custom</p>
                                                @for ($i = 0; $i < 5; $i++) <p class="text-muted">&#10004;</p>
                                                    @endfor
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="yearly-pricing d-none" id="yearlyPricing">
                <ul class="nav justify-content-center mb-3" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link link-pricing link-secondary link-orange text-decoration-underline"
                            aria-current="page" href="#" id="personal-tab" data-bs-toggle="tab"
                            data-bs-target="#personal" type="button" role="tab" aria-controls="personal"
                            aria-selected="true">
                            <h4 class="fw-semibold m-0">Personal</h4>
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="personal-yearly" role="tabpanel"
                        aria-labelledby="personal-yearly-tab">
                        <div class="container">
                            <div class="row justify-content-center personal-yearly-price" id="personal-yearly-price">
                                <div class="col-md-4 mt-md-0 mt-3">
                                    <div class="border radius-default p-3">
                                        <h5 class=" fw-bold">{{ $categorySubscription[6]->title }}</h5>
                                        <p class="fs-14px">{{ $categorySubscription[6]->description }}</p>
                                        <h4 class="fw-bold">Rp{{ number_format($categorySubscription[6]->price, 0, 0,
                                            '.') }}</h4>
                                        <p class="text-secondary fs-14px">Per tahun</p>
                                        <a class="btn btn-outline-dark radius-muted w-100 fw-semibold mb-3"
                                            href="{{ route('researcher.payment.show', $categorySubscription[6]) }}"
                                            role="button">Choose this
                                            plan</a>
                                        <div class="text-secondary">
                                            <p>&#10004; Jumlah survei unlimited</p>
                                            <p>&#10004; Pertanyaan unlimited</p>
                                            <p>&#10004; 2.500 Responden</p>
                                            <p>&#10004; Fitur kolaborasi</p>
                                            <p>&#10004; Pengatur waktu tidak aktif</p>
                                            <p>&#10004; Terima pembayaran</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-md-0 mt-3">
                                    <div class="border radius-default p-3">
                                        <h5 class=" fw-bold">{{ $categorySubscription[7]->title }}</h5>
                                        <p class="fs-14px">{{ $categorySubscription[7]->description }}</p>
                                        <h4 class="fw-bold">Rp{{ number_format($categorySubscription[7]->price, 0, 0,
                                            '.') }}</h4>
                                        <p class="text-secondary fs-14px">Per tahun</p>
                                        <a class="btn btn-outline-dark radius-muted w-100 fw-semibold mb-3"
                                            href="{{ route('researcher.payment.show', $categorySubscription[7]) }}"
                                            role="button">Choose this
                                            plan</a>
                                        <div class="text-secondary">
                                            <p>&#10004; Jumlah survei unlimited</p>
                                            <p>&#10004; Pertanyaan unlimited</p>
                                            <p>&#10004; 5.000 Responden</p>
                                            <p>&#10004; Fitur kolaborasi</p>
                                            <p>&#10004; Pengatur waktu tidak aktif</p>
                                            <p>&#10004; Terima pembayaran</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-5 justify-content-center">
                                <h2 class="text-center fw-bold mb-5">Fitur yang Didapatkan</h2>
                                <table class="table table-borderless text-center">

                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <h5 class="fw-bold mb-4">Features</h5>
                                            </th>
                                            <th scope="col">
                                                <h5 class="fw-bold mb-4">Basic</h5>
                                            </th>
                                            <th scope="col">
                                                <h5 class="fw-bold mb-4">Essential Annual</h5>
                                            </th>
                                            <th scope="col">
                                                <h5 class="fw-bold mb-4">Plus Annual</h5>
                                            </th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row">
                                                <p class="text-muted">Jumlah survei</p>
                                                <p class="text-muted">Pertanyaan per survei</p>
                                                <p class="text-muted">Jumlah responden</p>
                                                <p class="text-muted">Melacak tanggapan email</p>
                                                <p class="text-muted">Survei berulang</p>
                                                <p class="text-muted">Terima pembayaran</p>
                                                <p class="text-muted">Pengatur Waktu Tidak Aktif</p>
                                                <p class="text-muted">Kunci Kode Sandi</p>
                                            </td>
                                            <td>
                                                <p class="text-muted">Unlimited</p>
                                                <p class="text-muted">Unlimited</p>
                                                <p class="text-muted">1.000 Responden</p>
                                                @for ($i = 0; $i < 5; $i++) <p class="text-muted">&#10004;</p>
                                                    @endfor
                                            </td>
                                            <td>
                                                <p class="text-muted">Unlimited</p>
                                                <p class="text-muted">Unlimited</p>
                                                <p class="text-muted">2.500 Responden</p>
                                                @for ($i = 0; $i < 5; $i++) <p class="text-muted">&#10004;</p>
                                                    @endfor
                                            </td>
                                            <td>
                                                <p class="text-muted">Unlimited</p>
                                                <p class="text-muted">Unlimited</p>
                                                <p class="text-muted">5000 Responden</p>
                                                @for ($i = 0; $i < 5; $i++) <p class="text-muted">&#10004;</p>
                                                    @endfor
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection