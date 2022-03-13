@extends('layouts.footer')
@extends('layouts.base')
@extends('researcher.layouts.navbar2')

<link rel="stylesheet" href="{{ asset('css/components/rating.css') }}">

@section('content')

<div class="container p-5">
  <h1>Preview Survey</h1>
  <div class="row mb-5">
    <div class="col">
      <div class="card shadow">
        <div class="card-body">
          <h4 class="card-title">{{ $survey->title }}</h4>
          <p class="card-text">{{ $survey->description }}</p>
          <ul class="list-group">
            <li class="list-group-item bg-default text-white">Questions</li>
            @php
            $no = 1;
            @endphp
            @foreach ($survey->questions as $question)
            <li class="list-group-item">
              <p>{{ $no }}. {{ $question->question }}</p>
              @if ($question->question_type == 'multiOptions')
              <ol class="list-group">
                @foreach ($question->options as $option)
                <label class="form-check-label">
                  <li class="list-group-item">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" name="" id="" value="{{ $option->value }}">
                      {{ $option->value }}
                    </div>
                  </li>
                </label>
                @endforeach
              </ol>
              @elseif($question->question_type == 'multipleChoice')
              <ol class="list-group">
                @foreach ($question->options as $option)
                <label class="form-check-label">
                  <li class="list-group-item">
                    <div class="form-check">
                      <input type="radio" class="form-check-input" name="answer[{{ $question->id }}]" id=""
                        value="{{ $option->value }}">
                      {{ $option->value }}
                    </div>
                  </li>
                </label>
                @endforeach
              </ol>
              @elseif ($question->question_type == 'textBox')
              <div class="form-group">
                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
              </div>
              @elseif ($question->question_type == 'rating')
              <div class="star-rating">
                @for ($i = 1; $i <= 5; $i++) <input type="radio" name="star{{ $i }}" id="star{{ $i }}">
                  <label for="star{{ $i }}"></label>
                  @endfor
              </div>
              @elseif ($question->question_type == 'dropdown')
              <select class="form-select" aria-label="Default select example">
                @foreach ($question->options as $option)
                <option>{{ $option->value }}</option>
                @endforeach
              </select>
              @elseif ($question->question_type == 'fileUpload')
              <div class="form-group">
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>
              @endif
            </li>
            @php
            $no++;
            @endphp
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection