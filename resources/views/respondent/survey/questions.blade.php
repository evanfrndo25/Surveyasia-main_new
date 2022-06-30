@extends('layouts.footer')
@extends('layouts.base')
@extends('respondent.layouts.navbar')
<link rel="stylesheet" href="{{ asset('css/components/rating.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/scale.css') }}">

@section('content')

{{-- Pre soal --}}
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


@if ($survey->background == null)
<form action="{{ route('respondent.surveys.store') }}" class="bg-white" method="POST" id="form">
    @csrf
    <input type="hidden" name="survey_id" value="{{ $survey->id }}">



    <div class="container p-5">
        <div class="progress">
            <div id="progress" class="progress-bar bg-orange" role="progressbar" style="width: 0%;" aria-valuenow="25"
                aria-valuemin="0" aria-valuemax="100"></div>
        </div> <br>
        <div class="card1 p-3" style="border: 1px solid #000000;">
            <div class="card-body">
                <div class="row tab-content" id="questionContainer">
                    <div class="tab-pane fade show active" id="preQuestion">
                        <h5>Question Label</h5>
                        <p>question will show up here.....</p>
                        <ul class="list-group">
                            <p>options ....</p>
                            <li class="list-group-item disabled">Option A</li>
                            <li class="list-group-item disabled">Option B</li>
                            <li class="list-group-item disabled">Option C</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col" id="btnContainer">
                <button type="button" class="btn btn-outline-orange disabled bg-white" id="prevBtn"><i
                        class="bi bi-chevron-left"></i>
                    Sebelumnya</button>
            </div>
            <div class="col text-end" id="btnContainer btn-last">
                <button type="button" class="btn btn-orange text-white disabled" id="nextBtn">Berikutnya <i
                        class="bi bi-chevron-right"></i></button>
            </div>
        </div>
    </div>
</form>
@else
<div class="bg">
    <form action="{{ route('respondent.surveys.store') }}" class="bg-ts1" method="POST" id="form">
        @csrf
        <input type="hidden" name="survey_id" value="{{ $survey->id }}">



        <div class="container p-5">
            <div class="progress">
                <div id="progress" class="progress-bar bg-orange" role="progressbar" style="width: 0%;"
                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div> <br>
            <div class="card1 p-3" style="border: 1px solid #000000;">
                <div class="card-body">
                    <div class="row tab-content" id="questionContainer">
                        <div class="tab-pane fade show active" id="preQuestion">
                            <h5>Question Label</h5>
                            <p>question will show up here.....</p>
                            <ul class="list-group">
                                <p>options ....</p>
                                <li class="list-group-item disabled">Option A</li>
                                <li class="list-group-item disabled">Option B</li>
                                <li class="list-group-item disabled">Option C</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col" id="btnContainer">
                    <button type="button" class="btn btn-outline-orange disabled bg-white" id="prevBtn"><i
                            class="bi bi-chevron-left"></i>
                        Sebelumnya</button>
                </div>
                <div class="col text-end" id="btnContainer btn-last">
                    <button type="button" class="btn btn-orange text-white disabled" id="nextBtn">Berikutnya <i
                            class="bi bi-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </form>
</div>
@endif

{{-- End Pre soal --}}
<style>
    .bg {
        background-size: cover;
        background-repeat: no-repeat !important;
        background: url("{{ asset('storage/' . $survey->background) }}");
    }

    .bg-ts1 {
        background-color: rgba(255, 255, 255, 0.25);
    }

    .progress {
        background-color: transparent !important;
        border: 2px solid #EF4C29;
    }

    .card1 {
        background-color: rgba(255, 255, 255, 0.95);
    }

</style>
<script>
    var url = "{!! $url !!}";

</script>
<script src="{{ asset('js/respondent/survey-questions.js') }}" type="module">
</script>
@endsection
