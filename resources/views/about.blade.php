@extends('layouts.footer')
@extends('layouts.base')
@extends('layouts.navbar')

@section('content')

{{-- Hero About --}}
<section class="hero-about py-5" id="hero-about">
    <div class="container">
        <div class="row h-25">
            <div class="col-auto align-self-center">
                <h1 class="text-white fw-semibold">Tentang Kami</h1>
            </div>
        </div>
    </div>
</section>
{{-- End Hero About --}}

{{-- Vision & Mission --}}
<h3 class="text-center mt-5 fw-bold">Visi & Misi</h3>
<hr class="hr-vm-orange mx-auto">
<section class="vision-mission py-5" id="vision-mission">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h4 class="text-orange fw-bold">Visi</h4>
                <h5 class="text-justify fw-normal">"Menjadi platform riset online pilihan bagi individu maupun
                    perusahaan."</h5>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <h4 class="text-orange fw-bold">Misi</h4>
                <h5 class="text-justify fw-normal">"SurveyAsia membantu individu maupun perusahaan dengan memberikan
                    solusi riset yang cepat dan handaldengan dukungan teknologi 5.0 untuk membantu pengambilan
                    keputusan yang tepat dan berkualitas."</h5>
            </div>
        </div>
</section>
{{-- End Vision & Mission --}}

{{-- Partner --}}
<section class="partner py-5 bg-light" id="partner">
    <div class="container">
        <h3 class="text-center fw-bold">Mitra & Klien</h3>
        <hr class="hr-vm-orange mx-auto">
        <div class="row d-flex align-items-center mt-5">
            <div class="col-12 col-sm-6 col-md-4 text-center mt-5">
                <img src="{{ asset('assets/img/citiasia.png') }}" alt="Citiasia" class="img-fluid" width="300">
            </div>
            <div class="col-12 col-sm-6 col-md-4 text-center mt-5">
                <img src="{{ asset('assets/img/vocasia.png') }}" alt="Vocasia" class="img-fluid" width="300">
            </div>
            <div class="col-12 col-sm-6 col-md-4 text-center mt-5">
                <img src="{{ asset('assets/img/midtrans.png') }}" alt="Midtrans" class="img-fluid" width="300">
            </div>
            <div class="col-12 col-sm-6 col-md-4 text-center mt-5">
                <img src="{{ asset('assets/img/infobank.png') }}" alt="Infobank" class="img-fluid" width="500">
            </div>
            <div class="col-12 col-sm-6 col-md-4 text-center mt-5">
                <img src="{{ asset('assets/img/pertamina.png') }}" alt="Pertamina" class="img-fluid" width="500">
            </div>
            <div class="col-12 col-sm-6 col-md-4 text-center mt-5">
                <img src="{{ asset('assets/img/bpom.png') }}" alt="Badan POM" class="img-fluid" width="500">
            </div>
            <div class="col-12 col-sm-6 col-md-4 text-center mt-5">
                <img src="{{ asset('assets/img/pegadaian.png') }}" alt="Pegadaian" class="img-fluid" width="500">
            </div>
            <div class="col-12 col-sm-6 col-md-4 text-center mt-5">
                <img src="{{ asset('assets/img/bank_bjb.png') }}" alt="Bank BJB" class="img-fluid" width="500">
            </div>
            <div class="col-12 col-sm-6 col-md-4 text-center mt-5">
                <img src="{{ asset('assets/img/trans_7.png') }}" alt="Trans 7" class="img-fluid" width="500">
            </div>
        </div>
    </div>
</section>
{{-- End Partner --}}

{{-- Contanct Info --}}
<section class="contact-info py-5" id="contact-info">
    <div class="container">
        <h3 class="fw-bold">Informasi Kontak</h3>
        <hr class="hr-vm-orange">
        <h5 class="text-secondary">Butuh pertolongan?</h5>
        <p class="text-secondary">Berikut cara menghubungi kami.</p>
        <a href="{{ route('contact.index') }}" class="link-orange fs-5 fw-bold">Kirim permintaan bantuan <i
                class="fas fa-long-arrow-alt-right"></i></a>
        <div class="row mt-4">
            <div class="col-lg-3 d-flex">
                <img src="{{ asset('assets/img/ic_contact_info_1.png') }}" alt="Address" class="me-3" width="36"
                    height="36">
                <p class="">Graha Mustika Ratu 5th Floor 503, Tebet, Jakarta Selatan 12870</p>
            </div>
            <div class="col-lg-3 d-flex">
                <img src="{{ asset('assets/img/ic_contact_info_2.png') }}" alt="Telp" class="me-3" width="36"
                    height="36">
                <p class="">021-8370-7143</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 d-flex">
                <img src="{{ asset('assets/img/ic_contact_info_3.png') }}" alt="Email" class="me-3" width="36"
                    height="36">
                <p class="">support@surveyasia.id</p>
            </div>
            <div class="col-lg-3 d-flex">
                <img src="{{ asset('assets/img/ic_contact_info_4.png') }}" alt="Telp" class="me-3" width="36"
                    height="36">
                <p class="">021-8370-5680</p>
            </div>
        </div>
    </div>
</section>
{{-- End Contact Info --}}

@endsection