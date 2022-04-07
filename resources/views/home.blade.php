@extends('layouts.footer')
@extends('layouts.base')
@extends('layouts.navbar')

@section('content')

@php
$researcher = 'researcher';
$respondent = 'respondent';
@endphp

<section class="landing-page d-flex h-50" id="landing-page">
    <div class="container justify-content-center align-self-center">
        <div class="col-md-7">
            <h2 class="fw-semibold text-white">Mau membuat survei dengan mudah? Kami solusinya!</h2>
            <p class="fw-light text-white mt-3">Kami akan membantu Anda menetapkan tujuan untuk
                survei Anda dan merancang untuk mencapainya. Klik, rancang, dan simpan hal yang paling penting bagi
                Anda, semuanya di satu tempat.</p>
            <a class="btn btn-orange fw-semibold radius-default mt-3 py-3 px-5" href="{{ route('choose-role') }}"
                role="button">Coba Sekarang</a>
        </div>
    </div>
</section>

<section class="intro py-5" id="intro">
    <div class="container">
        <div class="row flex-md-row-reverse justify-content-between">
            <div class="col-md-5 text-end">
                <img src="{{ asset('assets/img/why_surveyasia.png') }}" alt="Why SurveyAsia" class="img-fluid">
            </div>
            <div class="col-md-5">
                <h3 class="fw-semibold mb-3 mt-md-0 mt-3">Kenapa SurveyAsia</h3>
                <p class="text-muted">Kami membuat survei lebih mudah dengan berbagai jenis format pertanyaan
                    dan jawaban. Mendapatkan responden
                    dengan mudah dan terpercaya. Kustomisasi chart report sesuai
                    kebutuhan. Download report dalam
                    berbagai format. Harga terjangkau dan sesuai dengan kebutuhan.</p>
            </div>
        </div>
        <div class="row text-center mt-5">
            <div class="col-md-4 mt-3 mt-md-0">
                <img src="{{ asset('assets/img/ic_time.png') }}" alt="Watch all the time" width="80">
                <h4 class="fw-semibold mt-3">Pantau setiap saat</h4>
                <p class="fw-light text-muted fs-14px">Kami menyediakan berbagai format populer untuk menunjang
                    kebutuhan Anda.
                    Tinggal Klik dan dapatkan berbagai macam format menarik.</p>
            </div>
            <div class="col-md-4 mt-3 mt-md-0">
                <img src="{{ asset('assets/img/ic_customize.png') }}" alt="Easy to customize" width="80">
                <h4 class="fw-semibold mt-3">Mudah disesuaikan</h4>
                <p class="fw-light text-muted fs-14px">SurveyAsia cepat dan mudah dibuat: siapkan dan bagikan survei
                    cantik dalam hitungan menit. Gunakan Integrasi untuk mengirim data secara otomatis ke mana pun Anda
                    inginkan.</p>
            </div>
            <div class="col-md-4 mt-3 mt-md-0">
                <img src="{{ asset('assets/img/ic_popular.png') }}" alt="Popular format" width="80">
                <h4 class="fw-semibold mt-3">Format populer</h4>
                <p class="fw-light text-muted fs-14px">SurveyAsia menanggapi jawaban sebelumnya untuk hanya menampilkan
                    pertanyaan yang paling relevan. Pengalaman yang lebih baik untuk responden = data yang lebih baik
                    untuk Anda dan disajikan dalam laporan dan metrik yang jelas.</p>
            </div>
        </div>
</section>

<section class="services py-5 bg-light" id="services">
    <div class="container">
        <p class="fw-semibold">Layanan Kami</p>
        <div class="row flex-md-row-reverse justify-content-between mt-4">
            <div class="col-md-6 text-end">
                <img src="{{ asset('assets/img/service.png') }}" alt="Service 1" class="img-fluid">
            </div>
            <div class="col-md-5">
                <h3 class="fw-semibold mt-md-0 mt-3">Buatlah strategi dan
                    keputusan yang akurat</h3>
                <p class="text-muted mt-4">Dari ukuran sampel yang dapat disesuaikan, pedoman diskusi, kriteria
                    responden, dan
                    tingkat analisis, kami menawarkan produk khusus yang memberikan jawaban tepat untuk pertanyaan
                    penelitian Anda.</p>
            </div>
        </div>
    </div>
</section>

<section class="pricing py-5" id="pricing">
    <div class="container">
        <div class="text-center">
            <h2 class="fw-bold">Ready to get started with SurveyAsia?</h2>
            <p>Choose the package that suits you</p>
            <div class="d-flex justify-content-center">
                <p class="fw-semibold">Monthly</p>
                <div class="form-check form-switch ms-2">
                    <input class="form-check-input form-check-input-orange" type="checkbox" id="pricingSwitch"
                        onchange="pricingSwitch()">
                </div>
                <p class="fw-semibold">Yearly</p>
            </div>
        </div>
        <div class="monthly-pricing" id="monthlyPricing">
            <ul class="nav justify-content-center" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link link-pricing link-secondary" aria-current="page" href="#" id="pay-per-survey-tab"
                        data-bs-toggle="tab" data-bs-target="#pay-per-survey" type="button" role="tab"
                        aria-controls="pay-per-survey" aria-selected="true">
                        <h4 class="fw-semibold">Pay Per Survey</h4>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link link-pricing link-secondary link-orange text-decoration-underline"
                        aria-current="page" href="#" id="personal-tab" data-bs-toggle="tab" data-bs-target="#personal"
                        type="button" role="tab" aria-controls="personal" aria-selected="true">
                        <h4 class="fw-semibold">Personal</h4>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link link-pricing link-secondary" aria-current="page" href="#" id="business-tab"
                        data-bs-toggle="tab" data-bs-target="#business" type="button" role="tab"
                        aria-controls="business" aria-selected="true">
                        <h4 class="fw-semibold">Business</h4>
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
                                    <h4 class="fw-bold">Start from Rp{{ number_format($categorySubscription[1]->price,
                                        0, 0, '.') }}</h4>
                                    <p class="text-secondary fs-14px">Per bulan</p>
                                    <a class="btn btn-outline-dark radius-default w-100 fw-semibold mb-3"
                                        href="{{ route('researcher.payment.show', $categorySubscription[1]) }}"
                                        role="button">Choose this plan</a>
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
                    </div>
                </div>
                <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                    <div class="container">
                        <div class="row justify-content-center personal-price" id="personal-price">
                            <div class="col-md-4 mt-md-0 mt-3">
                                <div class="border radius-default p-3">
                                    <h5 class=" fw-bold">{{ $categorySubscription[3]->title }}</h5>
                                    <p class="fs-14px">{{ $categorySubscription[3]->description }}</p>
                                    <h4 class="fw-bold">Rp{{ number_format($categorySubscription[3]->price,
                                        0, 0, '.') }}</h4>
                                    <p class="text-secondary fs-14px">Per bulan</p>
                                    <a class="btn btn-outline-dark radius-default w-100 fw-semibold mb-3"
                                        href="{{ route('researcher.payment.show', $categorySubscription[1]) }}"
                                        role="button">Choose this plan</a>
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
                                    <h4 class="fw-bold">Rp{{ number_format($categorySubscription[4]->price,
                                        0, 0, '.') }}</h4>
                                    <p class="text-secondary fs-14px">Per bulan</p>
                                    <a class="btn btn-outline-dark radius-default w-100 fw-semibold mb-3"
                                        href="{{ route('researcher.payment.show', $categorySubscription[4]) }}"
                                        role="button">Choose this plan</a>
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
                                    <h4 class="fw-bold">Rp{{ number_format($categorySubscription[5]->price,
                                        0, 0, '.') }}</h4>
                                    <p class="text-secondary fs-14px">Per bulan</p>
                                    <a class="btn btn-outline-dark radius-default w-100 fw-semibold mb-3"
                                        href="{{ route('researcher.payment.show', $categorySubscription[5]) }}"
                                        role="button">Choose this plan</a>
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
                    </div>
                </div>
                <div class="tab-pane fade" id="business" role="tabpanel" aria-labelledby="business-tab">
                    <div class="container">
                        <div class="row justify-content-center business-price" id="business-price">
                            <div class="col-md-4 mt-md-0 mt-3">
                                <div class="border radius-default p-3">
                                    <h5 class=" fw-bold">{{ $categorySubscription[8]->title }}</h5>
                                    <p class="fs-14px">{{ $categorySubscription[8]->description }}</p>
                                    <h4 class="fw-bold">Rp{{ number_format($categorySubscription[8]->price,
                                        0, 0, '.') }}</h4>
                                    <p class="text-secondary fs-14px">Per bulan</p>
                                    <a class="btn btn-outline-dark radius-default w-100 fw-semibold mb-3"
                                        href="{{ route('researcher.payment.show', $categorySubscription[8]) }}"
                                        role="button">Choose this plan</a>
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
                                <div class="border radius-default p-3">
                                    <h5 class=" fw-bold">{{ $categorySubscription[9]->title }}</h5>
                                    <p class="fs-14px">{{ $categorySubscription[9]->description }}</p>
                                    <h4 class="fw-bold">Rp{{ number_format($categorySubscription[9]->price,
                                        0, 0, '.') }}</h4>
                                    <p class="text-secondary fs-14px">Per bulan</p>
                                    <a class="btn btn-outline-dark radius-default w-100 fw-semibold mb-3"
                                        href="{{ route('researcher.payment.show', $categorySubscription[9]) }}"
                                        role="button">Choose this plan</a>
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
                                <div class="border radius-default p-3">
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
                    </div>
                </div>
            </div>
        </div>
        <div class="yearly-pricing d-none" id="yearlyPricing">
            <ul class="nav justify-content-center" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link link-pricing link-secondary link-orange text-decoration-underline"
                        aria-current="page" href="#" id="personal-yearly-tab" data-bs-toggle="tab"
                        data-bs-target="#personal-yearly" type="button" role="tab" aria-controls="personal-yearly"
                        aria-selected="true">
                        <h4 class="fw-semibold">Personal</h4>
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
                                    <h4 class="fw-bold">Rp{{ number_format($categorySubscription[6]->price,
                                        0, 0, '.') }}</h4>
                                    <p class="text-secondary fs-14px">Per tahun</p>
                                    <a class="btn btn-outline-dark radius-default w-100 fw-semibold mb-3"
                                        href="{{ route('researcher.payment.show', $categorySubscription[6]) }}"
                                        role="button">Choose this plan</a>
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
                                    <h4 class="fw-bold">Rp{{ number_format($categorySubscription[7]->price,
                                        0, 0, '.') }}</h4>
                                    <p class="text-secondary fs-14px">Per tahun</p>
                                    <a class="btn btn-outline-dark radius-default w-100 fw-semibold mb-3"
                                        href="{{ route('researcher.payment.show', $categorySubscription[7]) }}"
                                        role="button">Choose this plan</a>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="try-now py-5" id="try-now">
    <div class="container position-relative">
        <img src="{{ asset('assets/img/3d_footer.png') }}" alt="Try Now"
            class="position-absolute bottom-0 end-0 d-none d-md-block" width="400">
        <div class="bg-dark-blue radius-default text-white p-5">
            <div class="col-xl-4 col-md-5">
                <h2>Coba <span class="text-orange">SurveyAsia</span> sekarang!</h2>
                <p class="fw-light">Dan kembangkan lagi bisnismu lebih besar di sini</p>
                <a class="btn btn-orange fw-semibold radius-default mt-3 py-3 px-5" href="{{ route('choose-role') }}"
                    role="button">Coba Sekarang</a>
            </div>
        </div>
    </div>
</section>

@endsection