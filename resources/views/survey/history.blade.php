@extends('layouts.footer')
@extends('layouts.base')
@extends('survey.layouts.header')
@extends('respondent.layouts.navbar')

@section('content')

{{-- Survey History --}}

<section class="history-survey pb-5" id="history-survey">
  <div class="container">
    {{-- Side Tab --}}
    <div class="d-flex align-items-start mt-5">
      <div class="nav flex-column me-5" id="tab" role="tablist" aria-orientation="vertical">
        <ul class="nav" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            {{-- <a class="nav-link link-survey-history-side link-secondary link-orange" aria-current="page" href="#"
              id="survey-side-tab" data-bs-toggle="tab" data-bs-target="#survey-side" type="button" role="tab"
              aria-controls="survey-side" aria-selected="true">
              <h5 class="fw-semibold">Survey</h5>
            </a> --}}
          </li>
          <li class="nav-item">
            {{-- <a class="nav-link link-survey-history-side link-secondary" aria-current="page" href="#" id="change-tab"
              data-bs-toggle="tab" data-bs-target="#change" type="button" role="tab" aria-controls="change"
              aria-selected="true">
              <h5 class="fw-semibold">Tukar Saldo</h5>
            </a> --}}
          </li>
        </ul>
      </div>
      <div class="tab-content w-100" id="tabContent">
        <div class="tab-pane fade show active" id="survey-side" role="tabpanel" aria-labelledby="survey-side-tab">
          <h4 class="fw-bold">Riwayat</h4>
          {{-- Tab --}}
          <ul class="nav justify-content-evenly mt-4" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link link-survey-history link-secondary link-orange text-decoration-underline"
                aria-current="page" href="#" id="survey-tab" data-bs-toggle="tab" data-bs-target="#survey" type="button"
                role="tab" aria-controls="survey" aria-selected="true">
                <h6 class="fw-semibold">Survey</h6>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link link-survey-history link-secondary" aria-current="page" href="#" id="exchange-tab"
                data-bs-toggle="tab" data-bs-target="#exchange" type="button" role="tab" aria-controls="exchange"
                aria-selected="true">
                <h6 class="fw-semibold">Penukaran</h6>
              </a>
            </li> --}}
          </ul>
          {{-- End Tab --}}
          {{-- Tab Content --}}
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="survey" role="tabpanel" aria-labelledby="survey-tab">
              @if($histories->count() > 0)
              @foreach ( $histories as $history )
              <a href="#" data-bs-toggle="modal" data-bs-target="{{ '#approvedModal' . $history->id }}" role="button"
                class="link-dark text-decoration-none">
                <div class="card mt-3">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-1 align-self-center">
                        <img src="{{ asset('assets/img/ic_paper.svg') }}" alt="Paper">
                      </div>
                      <div class="col d-flex align-self-center">
                        <p class="fw-semibold m-0">Kamu telah menyelesaikan studi <span class="text-muted fw-normal"> {{ $history->title }} </span> </p>
                      </div>
                      {{-- <div class="col-md-2">
                        <p class="text-muted fs-14px m-0">{{ $history->users_surveys_updatedAt->diffForHumans() }}</p>
                        <button type="button" class="btn btn-success radius-default mt-2" disabled>Disetujui</button>
                      </div> --}}
                    </div>
                  </div>
                </div>
              </a>
              @endforeach
              @else
              <div class="text-center mt-5">
                <img src="{{ asset('assets/img/survey_history.svg') }}" alt="Survey History" class="img-fluid"
                  width="300">
                <p class="text-muted mt-3 m-0">Anda belum melakukan pengisian survey</p>
              </div>
              @endif
            </div>
          </div>
          {{-- End Tab Content --}}
        </div>
        <div class="tab-pane fade" id="change" role="tabpanel" aria-labelledby="change-tab">
          <h4 class="fw-bold">Tukar Poin</h4>
          <h6 class="text-muted">Catatan:</h6>
          <p class="text-muted fs-14px">Pilihlah dan tukarkan poin Anda dengan hadiah, silakan pilih dari item di bawah
            ini dengan memperhatikan persyaratan.</p>
          <div class="row">
            @for ($j = 1; $j <= 3; $j++) <div class="col-md-6">
              <a href="{{ route('respondent.survey.change-point') }}" class="link-dark text-decoration-none">
                <div class="card mt-4 p-4">
                  <div class="card-body text-center">
                    <h4 class="fw-bold">Pulsa</h4>
                    <img src="/assets/img/pulsa_{{ $j }}.png" alt="Pulsa" class="img-fluid mt-5">
                  </div>
                </div>
              </a>
          </div>
          <div class="col-md-6">
            <a href="{{ route('respondent.survey.change-point') }}" class="link-dark text-decoration-none">
              <div class="card mt-4 p-4">
                <div class="card-body text-center">
                  <h4 class="fw-bold">E-Wallet</h4>
                  <img src="/assets/img/e-wallet_{{ $j }}.png" alt="E-Wallet" class="img-fluid mt-5">
                </div>
              </div>
            </a>
          </div>
          @endfor
        </div>
      </div>
    </div>
  </div>
  {{-- End Side Tab --}}
  </div>

  {{-- Modal --}}
@foreach ($histories as $history)
  <div class="modal fade" id="{{ 'approvedModal' . $history->id }}" tabindex="-1" aria-labelledby="approvedModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <h5 class="fw-semibold">Detail Riwayat</h5>
          <p class="fw-semibold shadow-sm radius-default p-2 my-3">{{ $history->title }}</p>
          <div class="row">
            <div class="col">
              <p class="text-muted fw-light fs-14px m-0 p-0">Reward</p>
              <h6>Rp.{{ number_format($history->reward_point, 0, 0, '.') }}</h6>
            </div>
            <div class="col">
              <p class="text-muted fw-light fs-14px m-0 p-0">Tanggal</p>
              <h6>{{ date('d-m-Y', strtotime ($history->users_surveys_createdAt)) }}</h6>
            </div>
          </div>
          <hr>
          <p class="text-muted fw-light fs-14px m-0 p-0">Kriteria Penilaian</p>
          <span class="d-flex">
            <img src="{{ asset('assets/img/ic_shield_done.svg') }}" alt="Done" class="img-fluid me-2" width="16">
            <p class="m-0 p-0">Studi selesai dan disetujui oleh tim riset Surveyasia</p>
          </span>
          <div class="row justify-content-center">
            <div class="col-md-8">
              <button type="button" class="btn btn-outline-orange rounded-default text-orange w-100 my-3"
                data-bs-dismiss="modal">Tutup
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endforeach
  {{-- End Modal --}}
</section>
{{-- End Survey History --}}

@endsection