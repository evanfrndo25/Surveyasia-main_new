@extends('admin.layouts.base')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/spinner.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/rating.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection


@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-2 nopadding">
            @include('admin.component.sidebar')
        </div>
        <div class="col-10 nopadding">
            @include('admin.component.header')

            <div class="container pt-4">
                @if (session()->has('status'))
                <div class="alert alert-success">
                    {{ session()->get('status') }}
                </div>
                @endif
                <a href="{{ route('admin.questionbank.index') }}" class="mb-2 text-dark h5">
                    <i class="bi bi-arrow-left pe-2"></i>Kembali </a>
                <h3 class="py-4">{{ $questionbank->sub_template_name }}</h3>
                <p>{{ $questionbank->goals }}</p>
                {{-- @foreach ($questionbank_sub_templates as $item)
            <h4>{{ $item->sub_template_name }}</h4>
                <p>Goals : {{ $item->goals }}</p>
                @endforeach --}}
                <hr>
                <p class="fw-bold">Semua Question</p>
                <!-- @php
                                $no = 1;
                            @endphp
                          @foreach ($questions as $question)
                          <p>{{ $no }}. {{ $question->question }}</p>
                          <ul>
                            @foreach ($question->options as $item)
                              <li>{{ $item->value }}</li>
                            @endforeach
                          </ul>
                          @php
                              $no++;
                          @endphp
                          @endforeach -->
            </div>
            {{-- add question code from levi --}}
            @include('admin.questionbank.layouts.form-modal')
            @include('admin.questionbank.layouts.edit-element-modal')
            @include('layouts.alerts.delete-question')
            {{-- Empty question --}}
            <div class="row text-center" id="spinner">
                <div class="d-flex justify-content-center mt-5">
                    <div class="lds-dual-ring"></div>
                </div>
                <h5 class="mt-3">Memuat konfigurasi....</h5>
            </div>
            <div class="card mb-3 text-center fade" id="noQuestionContainer" style="height: 100%">
                <div class="card-body">
                    <img class="img-fluid" height="450" width="150" src="{{ asset('assets/img/nodata.png') }}"
                        alt="No question available">
                    <h4 class="card-title">Tidak ada pertanyaan</h4>
                    <p class="card-text">silahkan buat pertanyaan terlebih dahulu
                    </p>
                    <button type="button" id="btnAddQuestion" class="btn btn-sm btn-default px-5 text-white">Buat
                        Pertanyaan</button>
                </div>
            </div>
            <form action="{{ route('admin.storeQuestions', $questionbank->id) }}" method="post" id="formQuestionBank"
                class="question-form mb-5 px-5" style="display: none">
                @csrf
                <input type="hidden" name="questionbank_id" value="{{ $questionbank->id }}">
                <div class="d-grid gap-2">
                    <button type="button" id="btnAddQuestion" class="btn btn-primary" style="display: none">
                        <i class="fa fa-plus-square" aria-hidden="true"></i> Add Question
                    </button>
                </div>
                <hr id="horizontalLine" style="display: none;">
                <div class="row d-flex justify-content-between">
                    <div class="col-8">
                        <div class="alert alert-info alert-dismissible fade" role="alert" id="minQuestionAlert">
                            Buat minimal 5 pertanyaan untuk disimpan
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary disabled fade" id="submitBtn">Simpan</button>
                    </div>
                </div>
            </form>

            <script>
                var url = "{!! $url !!}";
                console.log(url);

            </script>
            <!-- Latest Sortable -->
            <script src="http://SortableJS.github.io/Sortable/Sortable.js"></script>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script type="module" src="{{ asset('js/subtemplate/formsQb.js') }}"></script>
        </div>
    </div>
    @endsection
    @section('importLibraryArea')
    <script src="/js/index.js"></script>
    <script src="/js/edit-news.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    @endsection
