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
            <div class="container pt-4">
                <div class="row pb-5 pt-3">
                    <div class="col-3">
                        <input class="form-control rounded-pill" type="search" placeholder="Search" aria-label="Search">
                    </div>
                    <div class="col text-end">
                        <a href="{{ route('admin.chart.create') }}"
                            class="btn bg-special-blue text-white shadow small"><i class="bi bi-plus-lg me-2"></i> Add
                            Chart</a>
                    </div>
                </div>
                @if (session()->has('status'))
                <div class="alert alert-success">
                    {{ session()->get('status') }}
                </div>
                @endif
                <div class="row">
                    <div class="col">
                        <table class="table table-no-border-head align-middle">
                            <thead>
                                <tr class="fw-bold">
                                    <td scope="col" class="text-center">Nama Chart</td>
                                    <td scope="col" class="text-center">Kategori Chart</td>
                                    <td scope="col" class="text-center">Preview</td>
                                    <td scope="col" class="text-center">Status</td>
                                    <td scope="col" class="text-center">Aktifitas</td>
                                    <td scope="col" class="text-center">Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $num = 0;
                                @endphp
                                @forelse ($charts as $chart)
                                <tr>
                                    <td class="text-center">
                                        {{ $chart->name }}
                                    </td>
                                    <td class="text-center">
                                        {{ $chart->type }}-chart
                                    </td>
                                    <td class="text-center">
                                        <!-- <p class="card-text">{{ Str::limit($chart->description, 50, '...') }}</p> -->
                                        <canvas class="mx-3" id="chart{{ $num }}" style="max-width: 250px;"
                                           ></canvas>
                                    </td>
                                   <td class="text-center">
                                    @if ($chart->status == 0)
                                        <p class="text-danger my-auto">Off</p>
                                    @else
                                        <p class="text-success my-auto">On</p>
                                    @endif
                                   </td>
                                    <td class="text-center">
                                        <p class="my-auto">{{ $chart->chart_type }}</p>
                                    </td>
                                    <td class="text-center">
                                        <a 
                                            href="{{ route('admin.chart.edit', $chart->id) }}"
                                            class="btn bg-special-blue text-white px-4 py-2"
                                        >
                                            <i class="bi bi-vector-pen"></i>
                                            Edit Chart
                                        </a>
                                    </form>
                                    </td>
                                </tr>

                                @php
                                $num++;
                                @endphp
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- <div class="row">
                    @php
                    $num = 0;
                    @endphp
                    @forelse ($charts as $chart)
                    <div class="col-6 mb-3">
                        <div class="card" style="height: 450px">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="card-title">{{ $chart->name }}</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-primary">{{ $chart->chart_type }}</p>
                                    </div>
                                </div>

                                <p class="card-text">{{ Str::limit($chart->description, 50, '...') }}</p>
                                <canvas id="chart{{ $num }}" style="max-height: 250px"></canvas>
                            </div>
                            <div class="card-footer">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    {{-- <button type="button" class="btn btn-primary">Update</button> --}}
                                    <a href="#"
                                        class="btn me-3 rounded px-3 py-2 bg-special-blue text-white">Add</a>
                                    <button type="button"
                                        class="btn me-3 rounded px-3 py-2 btn-primary">Edit</button>
                                    <form action="{{ route('admin.chart.destroy', $chart->id)}}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn me-3 rounded px-3 py-2 btn-danger btn-block"
                                            onclick="return confirm('Apakah kamu yakin ingin menghapus?')">Delete</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    @php
                    $num++;
                    @endphp
                    @empty
                    @endforelse
                </div> -->

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-add-chart" tabindex="-1" aria-labelledby="modal-edit-newsLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body py-4">
                <div class="d-flex justify-content-between">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Chart
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <hr class="mt-2">
                <div class="container-fluid px-0 mb-5">
                    <div class="row">
                        <div class="col">
                            <form action="{{ route('admin.chart.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="Chart" class="form-label">Nama Chart</label>
                                    <input type="text" class="form-control border-r-besar" name="chart">
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Jenis</label>
                                    <select class="form-select border-r-besar" aria-label="Default select example"
                                        name="jenis">
                                        <option value="Pie Chart">Pie Chart</option>
                                        <option value="Bar Chart">Bar Chart</option>
                                        <option value="Line Chart">Line Chart</option>
                                        <option value="Column Chart">Column Chart</option>
                                    </select>
                                </div>
                                <div class="mb-3 ">
                                    <label for="title" class="form-label">Aktivitas</label>
                                    <select class="form-select border-r-besar" aria-label="Default select example"
                                        name="aktivitas">
                                        <option value="Free">Free</option>
                                        <option value="Premium">Premium</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="foto" class="form-label">Preview</label>
                                    <input type="file" class="form-control" id="foto" name="img">
                                </div>
                                <button type="submit" class="btn text-white mx-auto px-lg-3 mt-5"
                                    style="background-color: #4C6FFF">Add
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js">
</script>
<script>
    var data = {{ Illuminate\Support\Js::from($charts) }}
</script>
<script src="https://unpkg.com/chartjs-chart-wordcloud@3"></script>
<script src="{{ asset('js/charts/chart-admin.js') }}" type="module"></script>
@endsection
