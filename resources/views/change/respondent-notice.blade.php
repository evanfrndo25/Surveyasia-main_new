@extends('layouts.footer')
@extends('layouts.base')
@extends('researcher.layouts.navbar2')

@section('content')
<section class="auth ff-inter min-vh-100">
  <div class="container">
    <div class="row justify-content-center py-5 py-md-0">
      <div class="col-12 col-md-5 py-0 py-md-4 py-xxl-5">
        <div class="card radius-default shadow py-3 px-3 px-lg-5">
          <div class="card-body text-center">
            <img src="{{ asset('assets/img/change_role.svg') }}" alt="Surveyasia" class="img-fluid">
            <h5 class="fw-semibold mt-4">Anda akan beralih menjadi Responden</h5>
            <div class="col d-flex justify-content-between mt-3">
              <a class="btn btn-outline-orange radius-default w-100 me-3" href="{{ URL::previous() }}">Batalkan</a>
              <a class="btn btn-orange radius-default w-100" href="{{ route('change.respondent') }}">Konfirmasi</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection