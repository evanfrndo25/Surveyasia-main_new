@extends('admin.layouts.base')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
@endsection

@section('content')
  <div id="bg-login">
  </div>

  <div
    class="container col-lg-3 col-12 bg-white position-absolute top-50 start-50 translate-middle px-5"
    id="cont-login">
    <img src="{{ asset('assets/img/newSurveyasia-black.png') }}" alt="" width=""
      class="img-fluid">

    <form action="{{ route('attempt-admin-login') }}" method="POST">
      @csrf

      <div class="form-group row">
        <label for="login" class="text-secondary">Email</label>
        <input type="text"
          class="form-control bg-light mb-2 py-2 border-r-sedang fw-light @error('login') is-invalid @enderror"
          name="login" value="{{ old('login') }}">

        @error('login')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>

      <div class="form-group row">
        <label for="password" class="text-secondary">Password</label>
        <input type="password"
          class="form-control bg-light mb-2 border-r-sedang fw-light @error('password') is-invalid
        @enderror"
          name="password">

        @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror

      </div>
      
      <div class="form-group row  mt-2">
        <button type="submit"
          class="btn w-100 text-white border-r-sedang py-2 shadow"
          style="background-color: #3751FF;">Masuk
        </button>
      </div>

    </form>

  </div>


@endsection
