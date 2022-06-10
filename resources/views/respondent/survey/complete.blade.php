@extends('layouts.footer')
@extends('layouts.base')
@extends('respondent.layouts.navbar')

@section('content')

<div class="p-3">
  <div class="container">
    <div class="row justify-content-center my-3">
      <div class="col-md-8 text-center">
        <img src="{{ asset('assets/img/survey_finish.svg') }}" alt="Surveyasia" class="img-fluid" width="500">
        <h3 class="pt-4 fw-bold mt-3">Berhasil!</h3>
        <p class="py-3">Anda telah menyelesaikan survey<span class="fw-semibold"> {{ $survey->title }} </span></p>
        <p>Citiasia mengucapkan terima kasih banyak kepada Bapak/Ibu dari Pemerintah (Kabupaten/Kota) yang turut berpatisipasi dalam kesuksesan penyelenggaraan ISNA 2022 ini. Untuk informasi lebih lanjut akan dikabarkan melalui akun sosial media Citiasia Terima Kasih!</p>
        <a class="btn btn-orange fw-semibold radius-default mt-3 py-3 px-5" href="{{ route('respondent.dashboard') }}"
          role="button">Kembali ke Beranda</a>
      </div>
    </div>
  </div>
</div>

@endsection