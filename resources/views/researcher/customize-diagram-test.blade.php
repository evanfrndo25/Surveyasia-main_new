@extends('layouts.footer')
@extends('layouts.base')
{{-- @extends('researcher.layouts.breadcrumb') --}}
@extends('researcher.layouts.navbar2')

@section('content')
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
                <li class="breadcrumb-item active">
                    <a href=" {{ route('researcher.surveys.customizeDiagram', $survey->id) }}"
                        class="link-secondary text-decoration-none">Diagram</a>
                </li>
                <li class="breadcrumb-item"><a href=" {{ route('researcher.surveys.collectRespondent', $survey->id) }}"
                        class="link-secondary text-decoration-none">Collect Respondent</a>
                </li>
                </li>
                <li class="breadcrumb-item"><a href=" {{ route('researcher.surveys.statusSurvey', $survey->id) }}"
                        class="link-secondary text-decoration-none">Status Survey</a>
                </li>
                <li class="breadcrumb-item"><a href=" {{ route('researcher.surveys.report', $survey->id) }}"
                        class="link-secondary text-decoration-none">Analytics Result</a>
                </li>
            </ol>
        </nav>
    </section>
    <hr class="mb-0">
    {{-- end Breadcrumb --}}


    {{-- Chart List Modal --}}
    @include('researcher.modals.chart-list-modal')
    {{-- <form action="customize-diagram/export_pdf" method="post" id="formExportChart" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="dataChart" id="dataChart">
    </form> --}}

    <form action="{{ route('researcher.surveys.storeDiagrams', $survey) }}" method="post" id="form">
        @csrf
        <input type="hidden" name="survey_id" value="{{ $survey->id }}">
        <div class="container mt-3 mb-5">
            {{-- <div class="row">
            <div class="dropdown d-flex justify-content-end py-3">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-download"></i>
                </a> --}}

            {{-- <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="customize-diagram/export_excel?id={{$survey->id}}">Excel</a></li>
                    <li><span class="dropdown-item" id="btnChartExport" style="cursor: pointer;">PDF</span></li> --}}
            {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
            {{-- </ul> --}}
            {{-- </div>
        </div> --}}
            @php
                $i = 0;
            @endphp
            @forelse ($questions as $question)
                <div class="row mb-5">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 id="questionType_{{ $question->id }}" class="text-capitalize mb-0">Question Type</h6>
                                        <small id="chartType_{{ $question->id }}">Bar chart</small>
                                    </div>
                                    <div class="d-flex">
                                        <div class="text-center me-2">
                                            <a href="#" id="chartModalTogglerBtn_{{ $question->id }}" type="button" data-bs-toggle="modal"
                                                data-bs-target="#chartListModal" data-question-index="{{ $i }}"
                                                class="btn btn-sm btn-orange mb-0">Change
                                                Chart <br>
                                                <span class="fw-light"><small>all options will be reset</small></span>
                                            </a>
                                        </div>
                                        {{-- <a href="#" class="btn btn-primary">
                                    <span>Export Excel</span>
                                </a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="card-body" id="chartContainer{{ $question->id }}">
                                <div class="row">
                                    <div class="col">
                                        <div class="d-flex top-0 end-0 justify-content-end" id="exportsContainer{{ $question->id }}">
                                            {{-- <div class="dropdown">
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
                                            </div> --}}
                                        </div>
                                        <div class="list-chart" id="chart{{ $question->id }}" style="height: 440px; padding-top: 30px;"></div>
                                    </div>
                                </div>
                                <div class="collapse row mt-3" id="chart_{{ $question->id }}_editor">
                                    <label for="" class="form-label">Data Manipulation</label>
                                    <div class="d-flex justify-content-evenly mb-3">
                                        <button type="button" class="list-group-item list-group-item-action">Add</button>
                                        <button type="button" class="list-group-item list-group-item-action ms-2">Item</button>
                                        <button type="button" class="list-group-item list-group-item-action ms-2">Disabled
                                            item</button>
                                    </div>
                                    <label for="" class="form-label">Chart Styling</label>
                                    <div class="col mb-3">
                                        @include('researcher.components.chart-styling-card')
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <button type="button" class="btn btn-sm btn-outline-orange" data-bs-toggle="collapse"
                                        data-bs-target="#chart_{{ $question->id }}_editor" aria-expanded="false"
                                        aria-controls="chart_{{ $question->id }}_editor">options</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @php
                    $i++;
                @endphp
            @empty
                <h6>No question present</h6>
            @endforelse
            <div class="d-grid my-3">
                <button type="submit" class="btn btn-orange">Save</button>
            </div>
        </div>
    </form>

    @include('researcher/scripts/anychart')
    <script src="{{ asset('js/app.js') }}"></script>
    @include('researcher/scripts/devexpress')
    <script>
        var questionsData = {!! $questions !!};
    </script>
    <script src="{{ asset('js/charts/main.js') }}" type="module"></script>
    <script src="{{ asset('js/charts/change-chart-modal.js') }}" type="module"></script>

    {{-- <script>
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
    </script> --}}


@endsection
