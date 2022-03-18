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
                <h3 class="text-center py-3">Edit Chart</h3>
                <form action="{{ route('admin.chart.update', $chart->id) }}" method="post"
                    enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="row justify-content-center text-center">
                        <div class="col-6">
                            <div class="mb-4">
                                <label for="deskripsi" class="form-label">Libray From</label>
                                <select class="form-select rounded-pill border-0 bg-light px-3">
                                    <option selected value="Chart Js">Chart JS</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama Chart</label>
                                <input type="text" name="chart" class="form-control rounded-pill border-0 bg-light px-3"
                                    placeholder="Masukan Nama Chart" id="exampleFormControlInput1"
                                    value="{{ $chart->chart }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Kategori Chart</label>
                                <select class="form-select rounded-pill border-0 bg-light px-3"
                                    aria-label="Default select example" name="jenis">
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
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Status</label>
                                <select class="form-select rounded-pill border-0 bg-light px-3"
                                    aria-label="Default select example" name="status">
                                    @if ($chart->status == '0')
                                    <option selected value="0">Off</option>
                                    <option value="1">On</option>
                                    @else
                                    <option value="0">Off</option>
                                    <option selected value="1">On</option>
                                    @endif
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Aktivitas</label>
                                <select class="form-select rounded-pill border-0 bg-light px-3"
                                    aria-label="Default select example" name="aktivitas">
                                    @if ($chart->aktivitas == 'Free')
                                    <option selected value="Free">Free</option>
                                    <option value="Premium">Premium</option>
                                    @else
                                    <option value="Free">Free</option>
                                    <option selected value="Premium">Premium</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-4">
                                <label for="deskripsi" class="form-label">Description</label>
                                <textarea
                                    class="form-control rounded-3 border-0 bg-light"
                                     rows="3" name="description" placeholder="Tulis disini..."></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Codingan Batch 1 Uploa Foto -->
                    <!-- <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Preview</label><br>
                        @if ($chart->id == 1||$chart->id == 2||$chart->id == 3||$chart->id == 4)
                        <img width="200" src="{{ asset("assets/img/{$chart->img}") }}" alt="">
                        @else
                        <img width="200" src="{{ url('storage/'.$chart->img) }}">
                        @endif
                        <input type="file" class="form-control rounded-pill border-0 bg-light px-3" id="foto" name="img">
                        <input type="hidden" class="form-control" name="oldImg" value="{{ $chart->img }}">
                    </div> -->
                    <!-- Akhir Codingan Batch 1 Uploa Foto -->
                    <div class="text-center mt-5 pt-3">
                        <button type="submit" class="btn bg-special-blue text-white mx-auto px-5 py-2">Add
                            Chart</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
