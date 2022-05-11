@extends('admin.layouts.base')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/spinner.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/rating.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection


@section('content')

<div class="container-fluid"  style="background-color: #F7F8FC;">
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
                <a href="{{ route('admin.questionbank.index') }}" class="mb-2 text-dark h6">
                    <i class="bi bi-chevron-left pe-2"></i>Kembali </a>
                    <h1 class="text-center fw-bold" style="font-size: 20px">Pratinjau Pertanyaan</h1>
                <div class="card">
                    <div class="card-body">
                <h5 class="py-4 fw-bold">{{ $questionbank->sub_template_name }}</h5>
                <p>{{ $questionbank->goals }}</p>
                {{-- @foreach ($questionbank_sub_templates as $item)
            <h4>{{ $item->sub_template_name }}</h4>
                <p>Goals : {{ $item->goals }}</p>
                @endforeach --}}
                </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                <h5 class="py-4 fw-bold">Semua Pertanyaan</h5>
                <hr>
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
            <form action="{{ route('admin.storeQuestions', $questionbank->id) }}" method="post" id="formQuestionBank"
                class="question-form mb-5 px-5">
                @csrf
                <input type="hidden" name="questionbank_id" value="{{ $questionbank->id }}">
                <div class="mt-3" id="questions_container">


                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btnx-orange text-white">
                        <i class="fa fa-plus-square" aria-hidden="true"></i> Simpan
                    </button>
                </div>
                <hr id="horizontalLine" style="display: none;">
            </form>

            <div class="card mb-3 text-center fade" id="noQuestionContainer">
                <div class="card-body">
                    <button id="btnAddQuestion" data-bs-toggle="modal" data-bs-target="#questionComponentModal"
                        class="btn btn-sm "><i class="bi bi-plus-square iconsfot"></i> Tambahkan Pertanyaan</button>
                </div>
            </div>

        </div>
        <script>
            var url = "{!! $url !!}";

        </script>
        <script>
        var questions = {!! $questionbank->questions !!};

        </script>
        <!-- Latest Sortable -->
        <script src="http://SortableJS.github.io/Sortable/Sortable.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="module" src="{{ asset('js/subtemplate/formsQb.js') }}"></script>
    </div>
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
