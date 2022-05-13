@extends('admin.layouts.base')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">

<style>
    body {
        background-color: #F7FAFC;
    }

</style>
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
                <a href="{{ route('admin.chart.index') }}" class="mb-2 text-dark text-decoration-none" style="font-weight: 600;font-size: 16px;">
                    <i class="bi bi-chevron-left pe-2"></i>Kembali </a>
                <h3 class="text-center py-3">Edit Diagram</h3>
                <div class="card" style="background-color: #FFFFFF; border: 1px solid rgba(0, 0, 0, 0.3); border-radius: 15px; padding:30px;">
                    <div class="row justify-content-center text-center">
                        <div class="col-6 mb-4" id="Diagram-target">
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
                                    <label for="deskripsi" class="form-label title-form">Libray From</label>
                                    @php
                                        $library = ['Chart JS', 'AnyChart', 'DevExpress'];
                                    @endphp
                                    <select class="form-select py-3 px-3" name="library_from" id="library_from" onchange="changeChartType()">
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
                                    <label for="exampleFormControlInput1" class="form-label title-form">Nama Diagram</label>
                                    <input type="text" name="name" class="form-control py-3 px-3"
                                        placeholder="Masukan Nama Chart" id="exampleFormControlInput1"
                                        value="{{ $chart->name }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label title-form">Kategori Diagram</label>
                                    <select class="form-select py-3 px-3" id="chartCategory"
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
                                    <label for="exampleFormControlInput1" class="form-label title-form">Status</label>
                                    <select class="form-select py-3 px-3"
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
                                    <label for="exampleFormControlInput1" class="form-label title-form">Aktivitas</label>
                                    <select class="form-select py-3 px-3"
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
                                    <label for="deskripsi" class="form-label title-form">Deskripsi</label>
                                    <textarea class="form-control " rows="3" name="description"
                                        placeholder="Tulis disini...">{{ $chart->description }}</textarea>
                                </div>
                            </div>
                        </div>
                        <hr style="border: 1px solid #D9DBE9; transform: matrix(1, 0, 0, 1, 0, 0);">
                        <div class="row ">
                            <div class="col mt-3">
                                <button type="button" class="btn btn-outline-orange  px-5 " data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    {{-- <i class="bi bi-trash"></i> --}}
                                    Hapus
                                </button>
                            </div>
                            <div class="col text-end mt-3">
                                <button type="submit" class="btn btn-orange text-white  px-5">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
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
                    <a href="{{ route('admin.chart.destroy', $chart->id) }}" class="btn btn-orange">Ya, Hapus</a>
                </div>
                <div class="col d-grid gap-2">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tidak, 
                        tetap simpan</button>
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
