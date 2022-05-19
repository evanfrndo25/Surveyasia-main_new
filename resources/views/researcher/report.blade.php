@extends('layouts.footer')
@extends('layouts.base')
{{-- @extends('researcher.layouts.breadcrumb') --}}
@extends('researcher.layouts.navbar2')
@section('content')

{{-- @include('researcher.modals.download-report-modal') --}}

{{-- Breadcrumb --}}
    <section class="breadcrumb-contact mt-3 ms-5" id="breadcrumb-contact">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                        <a href="/researcher/surveys" class="link-yellow text-decoration-none"><i
                            class="fas fa-home fa-fw"></i>
                        Beranda</a></li>
                <li class="breadcrumb-item">
                    <a href=" {{ route('researcher.surveys.manage', $survey->id) }}"
                        class="link-secondary text-decoration-none"> Survey</a>
                </li>
                <li class="breadcrumb-item">
                    <a href=" {{ route('researcher.surveys.customizeDiagram', $survey->id) }}"
                        class="link-secondary text-decoration-none">Diagram</a>
                </li>
                <li class="breadcrumb-item"><a href=" {{ route('researcher.surveys.collectRespondent', $survey->id) }}"
                        class="link-secondary text-decoration-none">Kumpulkan Responden</a>
                </li>
                </li>
                <li class="breadcrumb-item"><a href=" {{ route('researcher.surveys.statusSurvey', $survey->id) }}"
                        class="link-secondary text-decoration-none">Status Survey</a>
                </li>
                <li class="breadcrumb-item active"><a href=" {{ route('researcher.surveys.report', $survey->id) }}"
                        class="link-secondary text-decoration-none">Hasil Analisis</a>
                </li>
            </ol>
        </nav>
    </section>
    <hr class="mb-0">
{{-- end Breadcrumb --}}

    @php
    $no = 1;
    @endphp

    <form action="customize-diagram/export_pdf" method="post" id="formExportChart" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="dataChart" id="dataChart">
    </form>
    {{-- Analytics result --}}
    <section class="analytics-result py-5" id="analytics-result">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="border radius-default p-3">
                        <p class="text-muted m-0">Judul Survey</p>
                        <h6>{{ $survey->title }}</h6>
                        <hr>
                        <p class="text-muted m-0">Jenis Survey</p>
                        <h6>Member {{ Str::ucfirst($survey->type) }}</h6>
                        <hr>
                        <p class="text-muted m-0">Jumlah Responden</p>
                        <h6>{{ $survey->attempted }}/{{ $survey->max_attempt }} Responden</h6>
                    </div>
                    <div class="dropdown mt-3">
                        {{-- <button class="btn btn-orange radius-default w-100" type="button"  data-bs-toggle="modal" data-bs-target="#downloadReportModal"
                            aria-expanded="false">Unduh Hasil <i class="fas fa-download ms-5"></i>
                        </button> --}}
                        <button class="btn btn-orange radius-default w-100" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                            aria-expanded="false">Unduh Hasil <i class="fas fa-download ms-5"></i>
                        </button>
                        
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="customize-diagram/export_excel?id={{ $survey->id }}">Excel</a>
                            </li>
                            <li><a class="dropdown-item" href="customize-diagram/export-pdf?id={{ $survey->id }}">PDF</a>
                            </li>
                            {{-- <li><span class="dropdown-item" id="btnChartExport" style="cursor: pointer;">PDF</span></li> --}}
                            {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                        </ul>
                    </div>
                    
                    <div class="mt-3">
                        <a class="btn btn-secondary rounded-pill w-100 radius-default" href="https://analysis.surveyasia.id/" target="_blank"
                            role="button">Analisis Lanjut
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
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
            </div>
    </section>
    {{-- End Analytics result --}}
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

    <!-- for modal survey status -->
    @if ($survey->status == 'pending')
        @include('researcher.modals.popup-status-pending')
    @elseif ($survey->status == 'reject')
        @include('researcher.modals.popup-status-reject')
    @else
        @include('researcher.modals.popup-status-pending')
    @endif

    <script type="text/javascript">
        $(window).on('load', function() {
            if( "{{ $survey->status }}" !== 'active' ) {
                $('#myModal').modal('show');
            } else {
                $('#myModal').modal('hide');
            }
        });
    </script>
    <!-- end modal survey status -->
@endsection
