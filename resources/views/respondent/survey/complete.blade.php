@extends('layouts.footer')
@extends('layouts.base')
@extends('respondent.layouts.navbar')

@section('content')

<div class="p-3">
  <div class="container" id="">
    <div class="row justify-content-center my-3">
      <div class="col-md-8 text-center">
        <img src="{{ asset('assets/img/survey_finish1.svg') }}" alt="Surveyasia" class="img-fluid" width="200">
        <h3 class="pt-4 fw-bold mt-3">Berhasil!</h3>
        <p class="py-3">Anda telah menyelesaikan survey<span class="fw-semibold"> {{ $survey->title }} </span></p>
        <p class="small"> {!! $survey->closing !!} </p>
        <a class="btn btn-orange fw-semibold radius-default mt-3 py-2 px-4" href="{{ route('respondent.dashboard') }}"
          role="button">Kembali ke Beranda</a>
      </div>
    </div>
  </div>
</div>

@endsection