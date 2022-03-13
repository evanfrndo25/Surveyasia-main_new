@extends('layouts.footer')
@extends('layouts.base')
@extends('researcher.layouts.breadcrumb')
@extends('researcher.layouts.navbar2')

@section('chart')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chart.piecelabel.js/0.15.0/Chart.PieceLabel.min.js"
    integrity="sha512-pLEKa6g1uR205lfWRPuxwUa/aw1Yge1jOCvYr5WCL68gh3FoLi0eqMsIEtCvIXgZY0LwiRoMgiTfrpX7pK1HFA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-doughnutlabel/2.0.3/chartjs-plugin-doughnutlabel.min.js"
    integrity="sha512-bUT48RorCgRb7/kCkXnpNFwDr/xKF0o1vIFI9Y5NGYZ4uZCZBZTI4p6SygRqLkxxRsDSG4BEc7HNq8FOxeGEbA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.0.0/chartjs-plugin-datalabels.min.js"
    integrity="sha512-R/QOHLpV1Ggq22vfDAWYOaMd5RopHrJNMxi8/lJu8Oihwi4Ho4BRFeiMiCefn9rasajKjnx9/fTQ/xkWnkDACg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.js"></script>
<script src="https://cdn.jsdelivr.net/angular.chartjs/latest/angular-chart.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/21.1.6/css/dx.common.css" />
<link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/21.1.6/css/dx.light.css" />
<script src="https://cdn3.devexpress.com/jslib/21.1.6/js/dx.all.js"></script>
<script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
<script src="https://cdn.anychart.com/releases/v8/js/anychart-tag-cloud.min.js"></script>
@endsection

@section('content')

{{-- Analytics result --}}
<section class="analytics-result py-5" id="analytics-result">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="border rounded p-3">
                    <p class="text-muted m-0">Judul Survei</p>
                    <h6>{{ $survey->title }}</h6>
                    <hr>
                    <p class="text-muted m-0">Jenis Survei</p>
                    <h6>Member Annual Personal</h6>
                    <hr>
                    <p class="text-muted m-0">Jumlah Responden</p>
                    <h6>20/100 Responden</h6>
                </div>
                <div class="dropdown mt-3">
                    <button class="btn btn-default text-light w-100" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Download Result
                        <i class="fas fa-download ms-5"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-file-pdf fa-fw"></i> PDF</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-file-csv fa-fw"></i> CSV</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-file-excel fa-fw"></i> Excel</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-file-powerpoint fa-fw"></i> Power
                                Point</a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-print fa-fw"></i> Print</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                @php
                $no = 1;
                @endphp
                @foreach ($questions as $question)
                <div class="row mb-3">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <p>{{ $no }}. {{ $question->question }}</p>
                                </h5>
                                <ul class="list-group">
                                    @foreach ($question->answers as $answer)
                                    <li class="list-group-item">{{ $answer->answer }} <span class="fw-bold">oleh</span>
                                        <a href="#" class="text-decoration-none">
                                            {{ $answer->respondent->nama_lengkap }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
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
    </div>
</section>
{{-- End Analytics result --}}

@section('js')
<script src="{{ asset('js/chart.js') }}"></script>
@endsection

@endsection
