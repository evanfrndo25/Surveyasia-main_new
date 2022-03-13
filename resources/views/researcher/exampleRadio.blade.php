@extends('layouts.base')

{{-- IMPORT CSS FROM PUBLIC --}}
@section('chart')
    <link rel="stylesheet" href="css/respondent/ratingScale.css">
@endsection

@section('content')
<div class="container">
    {{-- EXAMPLE RATING 1 --}}
    <h1 class="fs-4 mt-5">Example Rating 1</h1>
    <div class="rating">
        <input type="radio" name="rating" id="rata10"><label for="rata10">10</label>
        <input type="radio" name="rating" id="rata9"><label for="rata9">9</label>
        <input type="radio" name="rating" id="rata8"><label for="rata8">8</label>
        <input type="radio" name="rating" id="rata7"><label for="rata7">7</label>
        <input type="radio" name="rating" id="rata6"><label for="rata6">6</label>
        <input type="radio" name="rating" id="rata5"><label for="rata5">5</label>
        <input type="radio" name="rating" id="rata4"><label for="rata4">4</label>
        <input type="radio" name="rating" id="rata3"><label for="rata3">3</label>
        <input type="radio" name="rating" id="rata2"><label for="rata2">2</label>
        <input type="radio" name="rating" id="rata1"><label for="rata1">1</label>    
    </div>

    {{-- EXAMPLE RATING 2 --}}
    <div class="mt-5">
        <label for="customRange2" class="form-label fs-4">Example rating 2</label>
        <input type="range" class="form-range text-danger" min="0" max="10" id="myRange">
        <p>Value: <span id="valueRating" class="badge bg-primary fs-4"></span></p>

        <script>
            var slider = document.getElementById("myRange");
            var output = document.getElementById("valueRating");
            output.innerHTML = slider.value;
            
            slider.oninput = function() {
                output.innerHTML = this.value;
            }
        </script>
    </div>

    {{-- EXAMPLE RATING 3 --}}
    <div class="mt-5">
        <h1 class="fs-4">Example Rating 3</h1>
        <div class="btn-group bg-blue-redup">
            <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked />
            <label class="btn btn-primary" for="option1">1</label>
          
            <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off" />
            <label class="btn btn-primary" for="option2">2</label>
          
            <input type="radio" class="btn-check" name="options" id="option3" autocomplete="off" />
            <label class="btn btn-primary" for="option3">3</label>

            <input type="radio" class="btn-check" name="options" id="option4" autocomplete="off" checked />
            <label class="btn btn-primary" for="option4">4</label>
          
            <input type="radio" class="btn-check" name="options" id="option5" autocomplete="off" />
            <label class="btn btn-primary" for="option5">5</label>
          
            <input type="radio" class="btn-check" name="options" id="option6" autocomplete="off" />
            <label class="btn btn-primary" for="option6">6</label>

            <input type="radio" class="btn-check" name="options" id="option7" autocomplete="off" checked />
            <label class="btn btn-primary" for="option7">7</label>
          
            <input type="radio" class="btn-check" name="options" id="option8" autocomplete="off" />
            <label class="btn btn-primary" for="option8">8</label>
          
            <input type="radio" class="btn-check" name="options" id="option9" autocomplete="off" />
            <label class="btn btn-primary" for="option9">9</label>

            <input type="radio" class="btn-check" name="options" id="option10" autocomplete="off" />
            <label class="btn btn-primary" for="option10">10</label>
          </div>
    </div>
</div>
@endsection