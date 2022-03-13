@extends('layouts.footer')
@extends('layouts.base')
@extends('researcher.layouts.breadcrumb')
@extends('researcher.layouts.navbar2')

@section('chart')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chart.piecelabel.js/0.15.0/Chart.PieceLabel.min.js"
        integrity="sha512-pLEKa6g1uR205lfWRPuxwUa/aw1Yge1jOCvYr5WCL68gh3FoLi0eqMsIEtCvIXgZY0LwiRoMgiTfrpX7pK1HFA==" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-doughnutlabel/2.0.3/chartjs-plugin-doughnutlabel.min.js"
        integrity="sha512-bUT48RorCgRb7/kCkXnpNFwDr/xKF0o1vIFI9Y5NGYZ4uZCZBZTI4p6SygRqLkxxRsDSG4BEc7HNq8FOxeGEbA==" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.0.0/chartjs-plugin-datalabels.min.js"
        integrity="sha512-R/QOHLpV1Ggq22vfDAWYOaMd5RopHrJNMxi8/lJu8Oihwi4Ho4BRFeiMiCefn9rasajKjnx9/fTQ/xkWnkDACg==" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.js"></script>
<script src="https://cdn.jsdelivr.net/angular.chartjs/latest/angular-chart.js"></script> --}}
    <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/21.1.6/css/dx.common.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/21.1.6/css/dx.light.css" />
    <script src="https://cdn3.devexpress.com/jslib/21.1.6/js/dx.all.js"></script>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-tag-cloud.min.js"></script>
@endsection

@section('content')

    {{-- Customize Diagram --}}
    <section class="customize-diagram py-5" id="customize-diagram">
        <div class="container">
            <div class="border rounded p-3 mb-4">
                @include('researcher.layouts.customize-diagram')
                <h1 style="text-align: center;">Customer Satisfaction</h1>
                <div class="demo-container">
                    <div id="zoomedChart"></div>
                    <div id="rangeSelector"></div>
                </div>
            </div>
            <div class="border rounded p-3 mb-4">
                @include('researcher.layouts.customize-diagram')
                <div class="demo-container">
                    <div id="pie" style="height: 440px; padding-top: 50px;"></div>
                </div>
            </div>
            <div class="border rounded p-3 mb-4">
                @include('researcher.layouts.customize-diagram')
                <div class="demo-container">
                    <div id="chart3" style="padding-top: 50px;"></div>
                </div>
            </div>
            <div class="border rounded p-3 mb-4">
                @include('researcher.layouts.customize-diagram')
                <div class="demo-container" ng-app="DemoApp" ng-controller="DemoController">
                    <div id="chart" dx-chart="chartOptions" style="height: 440px; padding-top: 50px;"></div>
                </div>
            </div>
            <div class="border rounded p-3 mb-4">
                @include('researcher.layouts.customize-diagram')
                <div class="demo-container">
                    <div id="chart5" style="padding-top: 50px;"></div>
                </div>
            </div>
            <div class="border rounded p-3 mb-4">
                @include('researcher.layouts.customize-diagram')
                <div class="demo-container">
                    <div id="pie6" style="padding-top: 50px;"></div>
                </div>
            </div>
            <div class="border rounded p-3 mb-4">
                @include('researcher.layouts.customize-diagram')
                <div class="demo-container">
                    <div id="gauge" style="height: 440px; padding-top: 50px;"></div>
                </div>
                <div id="grid" style="width: 440px; height: 70px; margin:auto;"></div>
            </div>
            <div class="border rounded p-3 mb-4">
                @include('researcher.layouts.customize-diagram')
                <div class="demo-container">
                    <div id="chart8" style="padding-top: 50px;"></div>
                </div>
            </div>
            <div class="border rounded p-3 mb-4">
                @include('researcher.layouts.customize-diagram')
                <div class="demo-container">
                    <div id="container9" style="height: 440px; padding-top: 50px;"></div>
                </div>
            </div>
            <div class="border rounded p-3 mb-4">
                @include('researcher.layouts.customize-diagram')
                <div class="demo-container">
                    <div id="pyramid" style="width: 80%; padding-top: 50px; margin:auto;"></div>
                </div>
            </div>
            <div class="border rounded p-3 mb-4">
                @include('researcher.layouts.customize-diagram')
                <div class="demo-container">
                    <div id="chart11" style="padding-top: 50px;"></div>
                </div>
            </div>
            <div class="border rounded p-3 mb-4">
                @include('researcher.layouts.customize-diagram')
                <div style="padding-top: 20px;">
                    <canvas id="myChartgap"></canvas>
                </div>
            </div>
        </div>
    </section>
    {{-- End Customize Diagram --}}

@section('js')
    <script src="{{ asset('js/chart.js') }}"></script>
@endsection
aa
@endsection
