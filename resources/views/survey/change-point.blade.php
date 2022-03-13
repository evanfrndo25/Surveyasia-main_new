@extends('layouts.footer')
@extends('layouts.base')
@extends('survey.layouts.header')
@extends('respondent.layouts.navbar')

@section('content')

{{-- Survey Change Point --}}
<section class="change-point-survey pb-5" id="change-point-survey">
  <div class="container">
    {{-- Tab --}}
    <ul class="nav justify-content-evenly mt-4" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link link-survey-history link-secondary link-orange text-decoration-underline" aria-current="page"
          href="#" id="transfer-tab" data-bs-toggle="tab" data-bs-target="#transfer" type="button" role="tab"
          aria-controls="transfer" aria-selected="true">
          <h6 class="fw-semibold">Transfer e-wallet</h6>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link link-survey-history link-secondary" aria-current="page" href="#" id="top-up-tab"
          data-bs-toggle="tab" data-bs-target="#top-up" type="button" role="tab" aria-controls="top-up"
          aria-selected="true">
          <h6 class="fw-semibold">Isi Pulsa</h6>
        </a>
      </li>
    </ul>
    {{-- End Tab --}}
    {{-- Tab Content --}}
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="transfer" role="tabpanel" aria-labelledby="transfer-tab">
        <h6 class="fw-bold mt-3">Tukar saldo ke bentuk e-wallet</h6>
        <p class="text-muted fs-14px">(Memerlukan waktu 24 jam untuk pengisian e-wallet)</p>
        <div class="col-md-4">
          <div class="card border-success py-5">
            <div class="card-body">
              <img src="{{ asset('assets/img/e-wallet_1.png') }}" alt="E-Wallet" width="70">
              <div class="row">
                <div class="col">
                  <p>085******2289</p>
                </div>
                <div class="col">
                  <p class="text-success">Nomor terverifikasi</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <h6 class="fw-bold mt-5">Pilih nominal e-wallet yang ingin kamu tukarkan</h6>
        <div class="row">
          <div class="col-6 col-md-2 mt-3 mt-md-0">
            <div class="card border-success text-center pt-3">
              <div class="card-body">
                <p>25.000</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-2 mt-3 mt-md-0">
            <div class="card text-center pt-3">
              <div class="card-body">
                <p>50.000</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-2 mt-3 mt-md-0">
            <div class="card text-center pt-3">
              <div class="card-body">
                <p>100.000</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-2 mt-3 mt-md-0">
            <div class="card text-center pt-3">
              <div class="card-body">
                <p>200.000</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-2 mt-3 mt-md-0">
            <div class="card text-center pt-3">
              <div class="card-body">
                <p>300.000</p>
              </div>
            </div>
          </div>
        </div>
        <a class="btn btn-orange rounded-pill text-white my-4 px-5" href="#" role="button" data-bs-toggle="modal"
          data-bs-target="#eWalletModal">Tukarkan saldo</a>
        <hr>
        <p class="text-muted fs-14px">Kami mendukung:</p>
        @for ($i = 1; $i <= 3; $i++) <img src="/assets/img/e-wallet_{{ $i }}.png" alt="E-Wallet" width="70"
          class="me-3">
          @endfor
      </div>
      <div class="tab-pane fade" id="top-up" role="tabpanel" aria-labelledby="top-up-tab">
        <h6 class="fw-bold mt-3">Tukar saldo ke bentuk pulsa</h6>
        <p class="text-muted fs-14px">(Memerlukan waktu 24 jam untuk pengisian pulsa)</p>
        <div class="col-md-4">
          <div class="card border-success py-5">
            <div class="card-body">
              <img src="/assets/img/pulsa_1.png" alt="Pulsa" width="70">
              <div class="row">
                <div class="col">
                  <p>085******2289</p>
                </div>
                <div class="col">
                  <p class="text-success">Nomor terverifikasi</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <h6 class="fw-bold mt-5">Pilih nominal pulsa yang ingin kamu tukarkan</h6>
        <div class="row">
          <div class="col-6 col-md-2 mt-3 mt-md-0">
            <div class="card border-success text-center pt-3">
              <div class="card-body">
                <p>25.000</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-2 mt-3 mt-md-0">
            <div class="card text-center pt-3">
              <div class="card-body">
                <p>50.000</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-2 mt-3 mt-md-0">
            <div class="card text-center pt-3">
              <div class="card-body">
                <p>100.000</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-2 mt-3 mt-md-0">
            <div class="card text-center pt-3">
              <div class="card-body">
                <p>200.000</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-2 mt-3 mt-md-0">
            <div class="card text-center pt-3">
              <div class="card-body">
                <p>300.000</p>
              </div>
            </div>
          </div>
        </div>
        <a class="btn btn-orange rounded-pill text-white my-4 px-5" href="#" role="button" data-bs-toggle="modal"
          data-bs-target="#pulsaModal">Tukarkan saldo</a>
        <hr>
        <p class="text-muted fs-14px">Kami mendukung:</p>
        @for ($i = 1; $i <= 3; $i++) <img src="/assets/img/pulsa_{{ $i }}.png" alt="Pulsa" width="70" class="me-3">
          @endfor
      </div>
    </div>
  </div>
</section>
{{-- End Survey Change Point --}}

{{-- Modal --}}
<div class="modal fade" id="eWalletModal" tabindex="-1" aria-labelledby="eWalletModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <h4 class="text-success">Berhasil</h4>
        <img src="{{ asset('assets/img/ic_succeed.svg') }}" alt="Succeed" width="150" class="my-3">
        <p>30 Sep 2021, 10:30</p>
        <p class="text-muted fs-14px">Selamat kamu berhasil menukarkan saldo kamu ke
          e-wallet</p>
      </div>
      <hr>
      <div class="row px-4">
        <div class="col-md-1 d-flex">
          <p class="fw-bold">Ke:</p>
        </div>
        <div class="col">
          <img src="{{ asset('assets/img/e-wallet_1.png') }}" alt="E-Wallet" width="60">
        </div>
        <div class="col-md-4 text-end">
          <h5 class="text-success">Rp100.000</h5>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="pulsaModal" tabindex="-1" aria-labelledby="pulsaModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <h4 class="text-success">Berhasil</h4>
        <img src="{{ asset('assets/img/ic_succeed.svg') }}" alt="Succeed" width="150" class="my-3">
        <p>30 Sep 2021, 10:30</p>
        <p class="text-muted fs-14px">Selamat kamu berhasil menukarkan saldo kamu ke
          pulsa</p>
      </div>
      <hr>
      <div class="row px-4">
        <div class="col-md-1 d-flex">
          <p class="fw-bold">Ke:</p>
        </div>
        <div class="col">
          <img src="{{ asset('assets/img/pulsa_1.png') }}" alt="Pulsa" width="60">
        </div>
        <div class="col-md-4 text-end">
          <h5 class="text-success">Rp100.000</h5>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- End Modal --}}

@endsection