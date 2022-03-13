@extends('layouts.base')
@section('content')

    <div class="container p-4">
        <h1>My Playground</h1>
        <h3>test user roles and permissions</h3>
        <p>using policies classes</p>

        <p>Current user = {{ Auth::user()->nama_lengkap }}
        </p>
        <p>Role = {{ Auth::user()->role->name }}</p>

        {{-- <div class="row mb-5">
      <div class="col">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Context</th>
              <th>Result</th>
            </tr>
          </thead>
          <tbody>
            @php
              $no = 1;
            @endphp
            @foreach ($results as $result)
              <tr>
                <td>{{ $no }}</td>
                <td>{{ $result['context'] }}</td>
                <td>{{ $result['result'] }}</td>
              </tr>
              @php
                $no++;
              @endphp
            @endforeach
          </tbody>
        </table>
      </div>
    </div> --}}

        {{-- <h3>test survey case</h3> --}}
        {{-- <div class="row mb-5">
      <div class="col">
        <div class="card shadow">
          <div class="card-body">
            <h4 class="card-title">{{ $survey->title }}</h4>
            <p class="card-text">{{ $survey->description }}</p>
            <ul class="list-group">
              <li class="list-group-item active">Questions</li>
              @php
                $no = 1;
              @endphp
              @foreach ($survey->questions as $question)
                <li class="list-group-item">
                  <p>{{ $no }}. {{ $question->question }} ?</p>
                  @if ($question->has_options == 'yes' && $question->multi_answers == 'yes')
                    <ol class="list-group">
                      @foreach ($question->options as $option)
                        <li class="list-group-item">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input"
                                name="" id="" value="{{ $option->value }}">
                              {{ $option->value }}
                            </label>
                          </div>
                        </li>
                      @endforeach
                    </ol>
                  @elseif($question->has_options == 'yes' &&
                    $question->multi_answers == 'no')
                    <ol class="list-group">
                      @foreach ($question->options as $option)
                        <li class="list-group-item">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input"
                                name="answer[{{ $question->id }}]" id=""
                                value="{{ $option->value }}">
                              {{ $option->value }}
                            </label>
                          </div>
                        </li>
                      @endforeach
                    </ol>
                  @else
                    <div class="form-group">
                      <input type="text" class="form-control" name="" id=""
                        aria-describedby="helpId" placeholder="">
                      <small id="helpId"
                        class="form-text text-muted">required</small>
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
    </div> --}}

        {{-- <h3>Test Jumlah User Subscription</h3>
    <table class="table table-striped table-inverse table-responsive">
      <thead class="thead-inverse">
        <tr>
          <th>Subscription</th>
          <th>Jumlah User</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($subscriptions as $subscription)
          <tr>
            <td scope="row">{{ $subscription->name }}</td>
            <td>{{ $subscription->users->count() }}</td>
          </tr>
        @endforeach
      </tbody>
    </table> --}}

        <h3>Test User Transaction</h3>
        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>Subscription</th>
                    <th>Jumlah User</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subscriptions as $subscription)
                    <tr>
                        <td scope="row">{{ $subscription->name }}</td>
                        <td>{{ $subscription->users->count() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection
