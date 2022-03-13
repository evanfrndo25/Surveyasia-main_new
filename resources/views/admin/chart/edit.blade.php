@extends('admin.layouts.base')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
@endsection


@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-2 nopadding">
      @include('admin.component.sidebar')
    </div>
    <div class="col-10 nopadding">
      @include('admin.component.header')

      <div class="container pt-4 mb-5">
        @if (session()->has('status'))
          <div class="alert alert-success">
            {{ session()->get('status') }}
          </div>
        @endif
        <h3>Edit Chart</h3>
        <form action="{{ route('admin.chart.update', $chart->id) }}"
          method="post" enctype="multipart/form-data">
          @method('put')
          @csrf
          <div class="mb-3">
            <label for="exampleFormControlInput1"
              class="form-label">Chart</label>
            <input type="text" name="chart" class="form-control"
              id="exampleFormControlInput1" value="{{ $chart->chart }}">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1"
              class="form-label">Jenis</label>
            <select class="form-select border-r-besar"
              aria-label="Default select example"
              name="jenis">
              @if ($chart->jenis == 'Pie Chart')
                <option selected value="Pie Chart">Pie Chart</option>
                <option value="Bar Chart">Bar Chart</option>
                <option value="Line Chart">Line Chart</option>
                <option value="Column Chart">Column Chart</option>
              @elseif($chart->jenis == 'Bar Chart')
                <option value="Pie Chart">Pie Chart</option>
                <option selected value="Bar Chart">Bar Chart</option>
                <option value="Line Chart">Line Chart</option>
                <option value="Column Chart">Column Chart</option>
              @elseif($chart->jenis == 'Line Chart')
                <option value="Pie Chart">Pie Chart</option>
                <option value="Bar Chart">Bar Chart</option>
                <option selected value="Line Chart">Line Chart</option>
                <option value="Column Chart">Column Chart</option>
              @else
                <option value="Pie Chart">Pie Chart</option>
                <option value="Bar Chart">Bar Chart</option>
                <option value="Line Chart">Line Chart</option>
                <option selected value="Column Chart">Column Chart</option>
              @endif
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1"
              class="form-label">Aktivitas</label>
              <select class="form-select border-r-besar"
              aria-label="Default select example"
              name="aktivitas">
              @if ($chart->aktivitas == 'Free')
                <option selected value="Free">Free</option>
                <option value="Premium">Premium</option>
              @else
              <option value="Free">Free</option>
              <option selected value="Premium">Premium</option>
              @endif
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1"
              class="form-label">Preview</label><br>
              @if ($chart->id == 1||$chart->id == 2||$chart->id == 3||$chart->id == 4)
                <img width="200" src="{{ asset("assets/img/{$chart->img}") }}" alt=""> 
              @else
                <img width="200" src="{{ url('storage/'.$chart->img) }}">
              @endif
              <input type="file" class="form-control border-r-besar" id="foto" name="img">
              <input type="hidden" class="form-control" name="oldImg" value="{{ $chart->img }}">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1"
              class="form-label">Status</label>
              <select class="form-select border-r-besar"
              aria-label="Default select example"
              name="status">
              @if ($chart->status == '0')
                <option selected value="0">Not Active</option>
                <option value="1">Active</option>
              @else
              <option value="0"> Not Active</option>
                <option selected value="1">Active</option>
              @endif
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

