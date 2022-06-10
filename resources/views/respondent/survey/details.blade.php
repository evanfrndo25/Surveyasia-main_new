@extends('layouts.base')
@extends('respondent.layouts.navbar')

@section('content')

{{-- Pre Survey --}}
<!-- Awalan -->
<section class="pre-survey p-5 " id="pre-survey">
    <div class="container shadow p-3 radius-default">
        <div class="card border-0">
            <div class="card-body">
                <div>
                    <h3 class="fw-semibold">{{ $survey->title }}</h3>
                    <div class="d-flex mt-3">
                        @if ($survey->user->avatar == null)
                        <img src="{{ asset('assets/img/noimage.png') }}" alt="{{ $survey->user->nama_lengkap }}"
                            width="50" height="50" class="d-block mb-2 me-3 rounded-pill object-fit-cover">
                        @elseif ($survey->user->provider_name != null)
                        <img src="{{ $survey->user->avatar }}" alt="{{ $survey->user->nama_lengkap }}" width="50"
                            height="50" class="d-block mb-2 me-3 rounded-pill object-fit-cover">
                        @else
                        <img src="{{ asset('storage/' . $survey->user->avatar) }}"
                            alt="{{ $survey->user->nama_lengkap }}" width="50" height="50"
                            class="d-block mb-2 me-3 rounded-pill object-fit-cover">
                        @endif
                        <div class="col">
                            <h5 class="m-0">{{ $survey->user->nama_lengkap }}</h5>
                            <p class="text-muted fs-14px m-0">Author</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border radius-default mt-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <h6 class="fw-semibold">Estimasi Pengerjaan</h6>
                        <p class="text-orange fs-14px"><i class="far fa-clock fa-fw"></i>
                            {{ $survey->estimate_completion }} Menit</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <h6 class="fw-semibold">Jumlah Pertanyaan</h6>
                        <p class="text-orange fs-14px">{{ $survey->questions->count() }} Pertanyaan</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <h6 class="fw-semibold">Status</h6>
                        <p class="text-orange fs-14px text-capitalize">{{ $survey->status }}</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <h6 class="fw-semibold">Jumlah Hadiah</h6>
                        <p class="text-orange fs-14px">Rp{{ $survey->reward_point }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border radius-default mt-3">
            <div class="card-header bg-light-grey">
                <h6 class="fw-semibold py-3 m-0">Deskripsi</h6>
            </div>
            <div class="card-body">
                <p class="fs-14px m-0"> {{ $survey->description }} </p>
            </div>
        </div>
        <div class="card border-0 bg-light-orange radius-default mt-3">
            <div class="card-body">
                <p class="fs-14px m-0"><span class="fw-semibold">*Jawab studi dengan jujur dan konsisten</span>, agar
                    kami dapat
                    memberikan survey yang sesuai dengan kamu kedepannya.</p>
            </div>
        </div>
        <div class="row pt-4 pb-2 mx-1 mb-3">
            @can('verifiedByAdmin')
            @if ($survey->user->id == Auth::id())
            <button class="btn btn-orange radius-default text-white disabled">Mulai</button>
            @else
            <a class="btn btn-orange radius-default text-white"
                href="{{ route('respondent.surveys.questions', $survey->id) }}">Mulai
            </a>
            @endif
            @elsecannot('verifiedByAdmin')
            <button type="button" class="btn btn-secondary w-100" data-bs-toggle="modal"
                data-bs-target="#alert-modal-unverified">
                Mulai
            </button>
            @endcan
        </div>
    </div>
</section>
<!-- Awalan Akhir -->

<!-- Modal Alert Untuk Button Mulai Survey Ketika Belum Terverifikasi -->
<div class="modal fade" id="alert-modal-unverified" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-orange text-white">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body fs-4 text-center">
                Akun anda belum terverifikasi oleh admin
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
{{-- end modal alert --}}

@endsection
