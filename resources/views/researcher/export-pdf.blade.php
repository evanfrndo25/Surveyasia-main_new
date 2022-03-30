@extends('layouts.footer')
@extends('layouts.base')
{{-- @extends('researcher.layouts.breadcrumb') --}}
@extends('researcher.layouts.navbar2')

@section('content')
@php
$no = 1;
@endphp
<div class="container">
    <div class="col-md-12">
        <div class="text-sm">
            <h5>Download PDF</h5>
        </div>
        <div class="row">
            <div class="col-md-12">
                @foreach ($questions as $question)
                    <div class="row mb-3">
                        <div class="col">
                            <div class="card radius-default">
                                <div class="card-body">
                                    {{-- <div class="d-flex top-0 end-0 justify-content-end" id="exportsContainer{{ $question->id }}">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="exportsContainerBtn"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Export
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="exportsContainerBtn">
                                                <li><button class="dropdown-item fs-6 fw-light" id="asPng">PNG</button></li>
                                                <li><button class="dropdown-item fs-6 fw-light" id="asJpg">JPG</button></li>
                                                <li><button class="dropdown-item fs-6 fw-light" id="asSvg">SVG</button></li>
                                                <li><button class="dropdown-item fs-6 fw-light" id="asPdf">PDF</button></li>
                                                <li><button class="dropdown-item fs-6 fw-light" id="asCsv">CSV</button></li>
                                                <li><button class="dropdown-item fs-6 fw-light" id="asExc">EXCEL</button></li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                    <div id="chart{{ $question->id }}" class="p-3" style="height: 350px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php
                        $no++;
                    @endphp
                @endforeach
            </div>

            {{-- <div class="col-md-3">
                <div class="row">
                    <div class="col-md-2">
                        <p class="text-muted">Tujuan</p>
                    </div>

                    <div class="col-md-9">
                        <div class="d-flex top-0 end-0 justify-content-end" id="exportsContainer">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="exportsContainerBtn"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Export
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="exportsContainerBtn">
                                    <li><button class="dropdown-item fs-6 fw-light" id="asPng">PNG</button></li>
                                    <li><button class="dropdown-item fs-6 fw-light" id="asJpg">JPG</button></li>
                                    <li><button class="dropdown-item fs-6 fw-light" id="asSvg">SVG</button></li>
                                    <li><button class="dropdown-item fs-6 fw-light" id="asPdf">PDF</button></li>
                                    <li><button class="dropdown-item fs-6 fw-light" id="asCsv">CSV</button></li>
                                    <li><button class="dropdown-item fs-6 fw-light" id="asExc">EXCEL</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>


    @include('researcher/scripts/anychart')
    <script src="{{ asset('js/app.js') }}"></script>
    @include('researcher/scripts/devexpress')
    <script>
        var url = '{!! $url !!}';
    </script>
    <script src="{{ asset('js/charts/report.js') }}" type="module"></script>
    <script>
        var btnChartExport = document.getElementById('btnChartExport');
        var formExportChart = document.getElementById('formExportChart');
        var dataChart = document.getElementById('dataChart');

        btnChartExport.addEventListener('click', function() {
            // var piechart = document.getElementById('piechart');
            // dataChart.value = piechart.innerHTML;

            var data = document.querySelectorAll('#form .list-chart');
            for (let i = 0; i < data.length; i++) {
                dataChart.value += data[i].parentElement.innerHTML + '<br /><br /><br /><br />';
            }

            formExportChart.submit();
        });
    </script>

@endsection
