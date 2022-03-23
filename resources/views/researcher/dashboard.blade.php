@extends('layouts.footer')
@extends('researcher.layouts.base')
@extends('researcher.layouts.navbar')

@section('content')

@include('researcher.layouts.pricing-modal')
@include('researcher.modals.create-survey-modal')
@include('researcher.modals.delete-survey-modal')
<div class="container-fluid p-3 p-md-5">
    @if (session('verified'))
    <div class="alert alert-success col-md-4 col-md-offset-4" role="alert">
        <p>Verifikasi Berhasil<button type="button" class="btn-close justify-content-end" data-bs-dismiss="alert"
                aria-label="Close"></button></p>
    </div>
    @endif

    <div class="row">
        <div class="col-md-4">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible show fade">
                {{ session()->get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col">
            {{-- Modal Button --}}
            <button type="button" class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#addSurveyModal"><i
                    class="fas fa-plus fa-fw"></i>
                Survey Baru</button>
        </div>
        <div class="col-md-3 mt-3 mt-md-0">
            <form>
                <div class="input-group">
                    <input class="form-control" type="search" placeholder="Cari Judul Survey"
                        aria-label="Cari Judul Survey" aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-orange" id="btnNavbarSearch" type="button"><i
                            class="bi bi-search"></i></button>
                </div>
            </form>
        </div>
    </div>
    {{-- Survey List --}}
    @if (count($surveys) == 0)
    <div class="row mt-4 py-3">
        <div class="text-center">
            <img src="{{ asset('assets/img/survey_history.svg') }}" alt="Survey History" class="img-fluid" width="300">
            <p class="text-muted mt-3 m-0">Belum ada survey yang dibuat</p>
        </div>
    </div>
    @else
    @foreach ($surveys as $survey)
    <div class="card border-0 radius-default shadow mt-4">
        <div class="card-body">
            <div class="row">
                <div class="col d-none d-md-block">
                    <img src="{{ asset('assets/img/recommendation_4.png') }}" alt="Survey">
                </div>
                <div class="col-md-4 d-flex align-items-center mb-2 mb-md-0">
                    <div class="row">
                        <div class="col">
                            <a href="{{ route('researcher.surveys.show', $survey->id) }}"
                                class="link-orange text-decoration-none fw-semibold">{{ $survey->title }}
                            </a>
                            <div class="row">
                                <div class="col-auto col-md-12">
                                    <p class="fw-light fs-14px text-capitalize m-0">{{ $survey->category->name }}</p>
                                </div>
                                <div class="col-auto col-md-12">
                                    <p class="fs-14px m-0">{{ $survey->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <div class="row text-center">
                        <div class="col">
                            <p class="fs-14px">Status</p>
                            @if ($survey->status == 'active')
                            <h6 class="text-capitalize text-success fw-semibold">{{ $survey->status }}</h6>
                            @else
                            <h6 class="text-capitalize text-danger fw-semibold">{{ $survey->status }}</h6>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <div class="row text-center">
                        <div class="col">
                            <p class="fs-14px">Design</p>
                            <a href="{{ route('researcher.surveys.manage', $survey->id) }}" class="link-dark">
                                <i class="bi bi-pencil-square fs-4"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <div class="row text-center">
                        <div class="col">
                            <p class="fs-14px">Report</p>
                            <a href="{{ route('researcher.surveys.report', $survey->id) }}" class="link-dark">
                                <i class="bi bi-bar-chart fs-4"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <div class="row text-center">
                        <div class="col">
                            <p class="fs-14px">Share</p>
                            <a href="{{ route('researcher.surveys.collectRespondent', $survey->id) }}"
                                class="link-dark">
                                <i class="bi bi-share fs-4"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <div class="row text-center">
                        <div class="col">
                            <p class="fs-14px mb-1">Hapus</p>
                            <button type="button" class="btn link-dark" data-bs-toggle="modal" data-bs-target="#deleteSurveyModal">
                                <i class="fal fa-trash fs-4 pt-1"></i>
                            </button>
                            {{-- <a href="{{ route('researcher.surveys.delete', $survey->id) }}" class="link-dark">
                                <i class="fa fa-thin fa-trash fs-4"></i>
                            </a> --}}
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-1 text-center d-flex justify-content-center align-items-center mt-3 mt-md-0">
                    <a href="#" class="link-dark"><i class="bi bi-chevron-down fs-5"></i></a>
                </div> --}}
            </div>
        </div>
    </div>
    @endforeach
    @endif

    <script src="{{ asset('js/researcher/popup-pricing.js') }}"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict'
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation')
                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                    .forEach(function(form) {
                        form.addEventListener('submit', function(event) {
                            const category = $('#category_id').get(0);
                            if (!form.checkValidity() || category.value == "") {
                                event.preventorange()
                                event.stopPropagation()
                                category.classList.add("error");
                            }
                            form.classList.add('was-validated')
                        }, false)
                    })
            })()
    </script>
    @endsection