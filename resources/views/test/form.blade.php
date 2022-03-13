@extends('layouts.test');
<link rel="stylesheet" href="{{ asset('css/shadow/shadow.css') }}">


@section('content')

  @include('test.form-modal')
  @include('test.edit-element-modal')
  @include('layouts.alerts.delete-question')

  <div class="container">
    <div class="row">
      {{-- col-md-6 col-lg-7 col-xl-9 --}}
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Title</h3>
            <p class="card-text">Text</p>
          </div>
        </div>
        <hr>
        <form id="form" class="mb-5"
          action="{{ route('researcher.surveys.storeQuestions', 2) }}"
          method="post">
          @csrf
          {{-- <input type="hidden" name="questions[]" id="questionForm" value="0"> --}}
          <div class="card border-primary" id="btnAddQuestion">
            <div class="card-body">
              <p class="card-text text-center">add question <i
                  class="fa fa-plus-square" aria-hidden="true"></i></p>
            </div>
          </div>
          <hr id="horizontalLine">
          <button type="submit" class="btn btn-primary" style="display: none;"
            id="submitBtn">Submit</button>
        </form>
      </div>
      {{-- <div class="col-md-6 col-lg-5 col-xl-3">
        <ul class="list-group">
          <li class="list-group-item active">Components</li>
          <li class="list-group-item">Text Field</li>
          <li class="list-group-item">Checkbox</li>
          <li class="list-group-item">Radio</li>
        </ul>
      </div> --}}
    </div>
  </div>
  <!-- Latest Sortable -->
  <script src="http://SortableJS.github.io/Sortable/Sortable.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="module" src="{{ asset('js/researcher/forms.js') }}"></script>
@endsection
