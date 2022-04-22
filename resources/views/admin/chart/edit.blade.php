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
                <div class="row justify-content-center text-center">
                    <div class="col-6 mb-4" id="chart-target">
                        <canvas class="mx-3" id="chartPreview" style="max-height: 250px;"></canvas>
                    </div>
                </div>
                <form action="{{ route('admin.chart.update', $chart->id) }}" method="post"
                    enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="row justify-content-center text-center">
                        <div class="col-6">
                            <div class="mb-4">
                                <label for="deskripsi" class="form-label">Libray From</label>
                                @php
                                    $library = ['Chart JS', 'AnyChart', 'DevExpress'];
                                @endphp
                                <select class="form-select rounded-pill border-0 bg-light px-3" name="library_from" id="library_from" onchange="changeChartType()">
                                    @foreach ($library as $lib)
                                        @if ($chart->library_from == $lib)
                                            <option selected value="{{ $chart->library_from }}">{{ $chart->library_from }}</option>
                                        @else
                                            <option value="{{ $lib }}">{{ $lib }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama Chart</label>
                                <input type="text" name="name" class="form-control rounded-pill border-0 bg-light px-3"
                                    placeholder="Masukan Nama Chart" id="exampleFormControlInput1"
                                    value="{{ $chart->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Kategori Chart</label>
                                <select class="form-select rounded-pill border-0 bg-light px-3" id="chartCategory"
                                    aria-label="Default select example" name="type">
                                    {{--@foreach ($typeChart as $tchart)
                                    @if ($tchart->type == $chart->type)
                                    <option selected value="{{ $chart->type }}">{{ $chart->type }}</option>
                                    @else
                                    <option value="{{ $tchart->type }}">{{ $tchart->type }}</option>
                                    @endif
                                    @endforeach--}}
                                    <option value="{{ $chart->type }}">{{ $chart->type }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Status</label>
                                <select class="form-select rounded-pill border-0 bg-light px-3"
                                    aria-label="Default select example" name="status">
                                    @if ($chart->status == 0)
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
                                    aria-label="Default select example" name="chart_type">
                                    @if ($chart->chart_type == 'free')
                                    <option selected value="free">free</option>
                                    <option value="premium">premium</option>
                                    @else
                                    <option value="free">free</option>
                                    <option selected value="premium">premium</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-4">
                                <label for="deskripsi" class="form-label">Description</label>
                                <textarea class="form-control rounded-3 border-0 bg-light" rows="3" name="description"
                                    placeholder="Tulis disini...">{{ $chart->description }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="text-end mt-3 pt-3">
                        <button type="button" class="btn text-danger mx-auto px-5 py-2r" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <i class="bi bi-trash"></i>
                            Hapus
                        </button>
                        <!-- <a href="{{ route('admin.chart.destroy', $chart->id) }}"
                            class="btn text-danger mx-auto px-5 py-2"
                            onclick="confirm('Apakah anda yakin ingin menghapus chart ini?')">
                            <i class="bi bi-trash"></i>
                            Hapus Chart
                        </a> -->
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
                    <div class="text-center mt-3">
                        <button type="submit" class="btn bg-special-blue text-white mx-auto px-5 py-2">Update
                            Chart</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal delete -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="btn ms-auto">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="{{ asset('assets/img/delete.png') }}" class="img-fluid" alt="">
                <h2 class="text-center">Hapus Chart?</h2>
                <p class="px-5 small text-secondary text-center"> Jika anda menghapus chart ini, maka chart pada admin dan researcher
                    akan terhapus secara <span class="fw-bold">permanen.</span>
                    <br><br>
                    Apakah kamu yakin ingin menghapus <span class="fw-bold">{{ $chart->name }}</span>?
                </p>
            </div>
            <div class="row px-4 pb-5">
                <div class="col d-grid gap-2">
                    <a href="{{ route('admin.chart.destroy', $chart->id) }}" class="btn btn-danger">YA, HAPUS CHART</a>
                </div>
                <div class="col d-grid gap-2">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">TIDAK, 
                        SIMPAN CHART</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Digunakan untuk memparsing dari PHP ke Javascript -->
<div class="hidden" id="default_configuration">
    {{ $preview_chart['default_configuration'] }}
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js"></script>

<!-- 
    Script ini digunakan untuk auto update Option di dalam Select
    berdasarkan Library yang dipilih
 -->
<script>
    $(function () {
        changeChartType();
    });

    const changeChartType = () => {
        const library_f = document.getElementById('library_from').value;
        const select_type_chart = document.getElementById('chartCategory');
        if( library_f == 'AnyChart') {
            let type_chart = ['pie', 'bar', 'line', 'doughnut', 'tag_cloud'];
            $('#chartCategory option').remove();
            type_chart.forEach(t => {
                if( `any_${t}` == "{{ $chart->type }}" ) {
                    select_type_chart.innerHTML += `<option selected value="any_${t}">${t}</option>`;
                } else {
                    select_type_chart.innerHTML += `<option value="any_${t}">${t}</option>`;
                }
            });
        } else if ( library_f == 'DevExpress' ) {
            let type_chart = ['pie', 'bar', 'line', 'doughnut'];
            $('#chartCategory option').remove();
            type_chart.forEach(t => {
                if( `dev_${t}` == "{{ $chart->type }}" ) {
                    select_type_chart.innerHTML += `<option selected value="dev_${t}">${t}</option>`;
                } else {
                    select_type_chart.innerHTML += `<option value="dev_${t}">${t}</option>`;
                }
            });
        } else {
            let type_chart = ['pie', 'bar', 'line', 'doughnut', 'wordCloud', 'scatter', 'polarArea'];
            $('#chartCategory option').remove();
            type_chart.forEach(t => {
                if( `dev_${t}` == "{{ $chart->type }}" ) {
                    select_type_chart.innerHTML += `<option selected value="cjs_${t}">${t}</option>`;
                } else {
                    select_type_chart.innerHTML += `<option value="cjs_${t}">${t}</option>`;
                }
            });
        }
    };
</script>
<script>
    var default_conf = document.getElementById('default_configuration').textContent;
    var type = document.getElementById('chartCategory').value;
</script>
<script src="https://unpkg.com/chartjs-chart-wordcloud@3"></script>
<script src="{{ asset('js/charts/chart-admin-edit.js') }}" type="module"></script>

@endsection
