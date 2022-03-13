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

    <form action="{{ route('respondent.surveys.store') }}" method="POST" id="form">
        @csrf
        <input type="hidden" name="survey_id" value="{{ $survey->id }}">

        <div class="container p-5">
            <div class="card shadow">
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
                    <div class="row mt-5">
                        <div class="col text-end" id="btnContainer">
                            <button type="button" class="btn btn-outline-default disabled" id="prevBtn">Previous</button>
                            <button type="button" class="btn btn-default text-white disabled" id="nextBtn">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>

    {{-- End Pre soal --}}

    <script>
        var url = "{!! $url !!}";
    </script>
    <script src="{{ asset('js/respondent/survey-questions.js') }}" type="module">
    </script>
@endsection
