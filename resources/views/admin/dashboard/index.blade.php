@extends('admin.layouts.base')

@section('css')
<style>
    body {
        background-color: #F7FAFC !important;
    }

</style>

<link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
@endsection

@section('importLibraryArea')
{{-- ALL USER CHART AND TRANSAKSI CHART LIBRARIES --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    window.jQuery || document.write(decodeURIComponent('%3Cscript src="js/jquery.min.js"%3E%3C/script%3E'))

</script>
<link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/21.2.3/css/dx.common.css" />
<link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/21.2.3/css/dx.light.css" />
<script src="https://cdn3.devexpress.com/jslib/21.2.3/js/dx.all.js"></script>
<script src="data.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css" />
<script src="index.js"></script>
<link rel="stylesheet" type="text/css" href="chart.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="chart.css" />


{{-- MAP INDO LIBRARIES --}}
<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="https://code.highcharts.com/mapdata/countries/id/id-all.js"></script>
@endsection



@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-2 g-0 ">
            @include('admin.component.sidebar')
        </div>
        <div class="col-10 nopadding">
            @include('admin.component.header')

            <div class="container mt-4">

                {{-- CARD LIST CHART --}}
                <div class="row justify-content-between justify-content-between px-5 gy-3">

                    <div class="col-lg-3 col-12">
                        <a href="#collapse-all-user" data-bs-toggle="collapse" class="text-decoration-none">
                            <div class="font-montserrat px-3 py-2 border-r-sedang text-success" style="background-color: rgba(108, 238, 96, 0.3);
                                ">
                                <h1 class="fw-bold ms-4">{{ $users}}</h1>
                                <div class="d-flex align-items-center justify-content-between">
                                    <img src="{{asset('assets/img/fa6-solid_user-group.svg')}}" class="fs-3 p-1 me-4">
                                    <div class="text-end">
                                        <span class="fw-bold fs-5">Pengguna</span>
                                        <span class="d-block text-mini">Semua pengguna di Surveyasia</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-12">
                        <a href="#collapse-question-bank" data-bs-toggle="collapse" class="text-decoration-none">
                            <div class="font-montserrat px-3 py-2 border-r-sedang " style="background-color: rgba(255, 122, 0, 0.3); color: #A34E00
                                ">
                                <h1 class="fw-bold ms-4">{{ $questionbank }}</h1>
                                <div class="d-flex align-items-center justify-content-between">
                                    <img src="{{asset('assets/img/Vector-1.svg')}}" class="fs-3 p-1 me-4">
                                    <div class="text-end">
                                        <span class="fw-bold fs-8">Bank Pertanyaan</span>
                                        <span class="d-block text-mini">Sejak Berdiri</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-12">
                        <a href="#collapse-news" data-bs-toggle="collapse" class="text-decoration-none">
                            <div class="font-montserrat px-3 py-2 border-r-sedang" style="background-color: rgba(255, 0, 0, 0.35); color: #CC0000;
                                ">
                                <h1 class="fw-bold ms-4">{{ $news }}</h1>
                                <div class="d-flex align-items-center justify-content-between">
                                    <img src="{{asset('assets/img/fluent_news-28-filled.svg')}}" class="fs-3 p-1 me-4">
                                    <div>
                                        <span class="fw-bold fs-5">Berita</span>
                                        <span class="d-block text-mini">Dari Produk</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-12">
                        <a href="#collapse-chart" data-bs-toggle="collapse" class="text-decoration-none">
                            <div class="font-montserrat px-3 py-2 border-r-sedang" style="background-color: rgba(1, 57, 255, 0.3); color: #003FB9;
                                ">
                                <h1 class="fw-bold ms-4">20</h1>
                                {{-- <h1 class="fw-bold ms-4">{{ $chart }}</h1> --}}
                                <div class="d-flex align-items-center justify-content-between">
                                    <img src="{{asset('assets/img/Vector.svg')}}" class="fs-3 p-2 me-4">
                                    <div>
                                        <span class="fw-bold fs-6">Diagram</span>
                                        <span class="d-block text-mini">All time</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-12">
                        <a href="#collapse-transaksi" data-bs-toggle="collapse" class="text-decoration-none">
                            <div class="font-montserrat px-3 py-2 border-r-sedang" style="background-color: rgba(238, 96, 215, 0.3); color: #730037;
                                ">
                                <h1 class="fw-bold ms-4">{{ $transaksi }}</h1>
                                <div class="d-flex align-items-center justify-content-between">
                                    <img src="{{asset('assets/img/Vector-2.svg')}}" class="rounded-pill fs-3 p-1 me-4">
                                    <div>
                                        <span class="fw-bold fs-5">Transaksi</span>
                                        <span class="d-block text-mini">All user of Surveyasia</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                {{-- END OF CARD LIST CHART --}}

                {{-- CHART ALL USER --}}
                <div class="collapse" id="collapse-all-user">
                    <div class="bg-white mt-lg-5 p-3 mx-5 g-3">

                        <div class="mb-3">
                            @include('admin.dashboard.charts.all-user')
                        </div>

                        <div>
                            @include('admin.dashboard.charts.map-indo')
                        </div>
                    </div>
                </div>
                {{-- END OF CHART ALL USER --}}

                {{-- ANALYTIC VARIABEL QUESTION BANK --}}
                <div class="collapse" id="collapse-question-bank">
                    <div class="bg-white mt-lg-5 p-3 mx-5 pb-5 g-3">
                        {{-- <input type="month" class="form-control w-25 mb-4"> --}}

                        <div class="row">
                            <div class="col-md-2">
                                <div class="p-2 rounded-3" style="background-color: rgba(255, 122, 0, 0.3); color: #A34E00
                                ">
                                    <span class="fs-5">Question bank</span>
                                    <span class="d-block text-black fw-bold">{{ $questionbank }}</span>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="p-2 rounded-3" style="background-color: rgba(255, 122, 0, 0.3); color: #A34E00
                                ">
                                    <span class="fs-5">Active QB</span>
                                    <span class="d-block text-black fw-bold">{{ $questionbank_active }}</span>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="p-2 rounded-3" style="background-color: rgba(255, 122, 0, 0.3); color: #A34E00
                                ">
                                    <span class="fs-5">Free QB</span>
                                    <span class="d-block text-black fw-bold">{{ $questionbank_free }}</span>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="p-2 rounded-3" style="background-color: rgba(255, 122, 0, 0.3); color: #A34E00
                                ">
                                    <span class="fs-5">Premium QB</span>
                                    <span class="d-block text-black fw-bold">{{ $questionbank_premium }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- END OF  ANALYTIC VARIABEL QUESTION BANK --}}

                {{-- ANALYTIC VARIABEL NEWS --}}
                <div class="collapse" id="collapse-news">
                    <div class="bg-white mt-lg-5 p-3 mx-5 pb-5 g-3">
                        <input type="month" class="form-control w-25 mb-4">

                        <div class="row">
                            <div class="col-md-2">
                                <div class="p-2 rounded-3" style="background-color: rgba(255, 0, 0, 0.35); color: #CC0000;
                                ">
                                    <span class="fs-5">All of News</span>
                                    <span class="d-block text-black fw-bold">9381</span>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="p-2 rounded-3" style="background-color: rgba(255, 0, 0, 0.35); color: #CC0000;
                                ">
                                    <span class="fs-5">Viewers</span>
                                    <span class="d-block text-black fw-bold">6381</span>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="p-2 rounded-3" style="background-color: rgba(255, 0, 0, 0.35); color: #CC0000;
                                ">
                                    <span class="fs-5">Published</span>
                                    <span class="d-block text-black fw-bold">3000</span>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="p-2 rounded-3" style="background-color: rgba(255, 0, 0, 0.35); color: #CC0000;
                                ">
                                    <span class="fs-5">Draft</span>
                                    <span class="d-block text-black fw-bold">7000</span>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="p-2 rounded-3" style="background-color: rgba(255, 0, 0, 0.35); color: #CC0000;
                                ">
                                    <span class="fs-5">Scheduled</span>
                                    <span class="d-block text-black fw-bold">2381</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- END OF  ANALYTIC VARIABEL NEWS --}}

                {{-- ANALYTIC VARIABEL CHART --}}
                <div class="collapse" id="collapse-chart">
                    <div class="bg-white mt-lg-5 p-3 mx-5 pb-5 g-3">
                        {{-- <input type="month" class="form-control w-25 mb-4"> --}}

                        <div class="row">
                            <div class="col-md-2">
                                <div class="p-2 rounded-3" style="background-color: rgba(1, 57, 255, 0.3); color: #003FB9;
                                ">
                                    <span class="fs-5">Chart</span>
                                    {{-- <span class="d-block text-black fw-bold">{{ $chart }}</span> --}}
                                    <span class="d-block text-black fw-bold"></span>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="p-2 rounded-3" style="background-color: rgba(1, 57, 255, 0.3); color: #003FB9;
                                ">
                                    <span class="fs-5">Free Chart</span>
                                    {{-- <span class="d-block text-black fw-bold">{{ $chart_free }}</span> --}}
                                    <span class="d-block text-black fw-bold">10</span>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="p-2 rounded-3" style="background-color: rgba(1, 57, 255, 0.3); color: #003FB9;
                                ">
                                    <span class="fs-5">Premium</span>
                                    {{-- <span class="d-block text-black fw-bold">{{ $chart_premium }}</span> --}}
                                    <span class="d-block text-black fw-bold">5</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- END OF  ANALYTIC VARIABEL CHART --}}

                {{-- CHART TRANSAKSI --}}
                <div class="collapse" id="collapse-transaksi">
                    <div class="bg-white mt-lg-5 p-3 mx-5 g-3">

                        <div>
                            @include('admin.dashboard.charts.transaksi')
                        </div>

                    </div>
                </div>
                {{-- END OF CHART TRANSAKSI --}}
                <div>
                    <canvas id="myChart"></canvas>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                    // === include 'setup' then 'config' above ===
                    const labels = [
                        'January',
                        'February',
                        'March',
                        'April',
                        'May',
                        'June',
                    ];
                    const data = {
                        labels: labels,
                        datasets: [{
                            label: 'My First dataset',
                            backgroundColor: 'rgb(255, 99, 132)',
                            borderColor: 'rgb(255, 99, 132)',
                            data: [0, 10, 5, 2, 20, 30, 45],
                        }]
                    };
                    const config = {
                        type: 'line',
                        data: data,
                        options: {}
                    };
                    const myChart = new Chart(
                        document.getElementById('myChart'),
                        config
                    );

                </script>








            </div>
        </div>
    </div>
    @endsection
