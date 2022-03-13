@extends('admin.layouts.base')

@section('css')
    <style>
        body {
            background-color: #F7FAFC; 
        }
    </style>

    <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
@endsection




@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 g-0">
                @include('admin.component.sidebar')
            </div>
            <div class="col-10 nopadding">
                @include('admin.component.header')

                <div class="container mt-5">
                    <div class="row justify-content-between">
                        <div class="col-3 d-flex bg-white align-items-center px-3 py-4 border-r-sedang">
                            <div class="p-3 bg-primary rounded-circle me-2"></div>
                            <div>
                                <span class="text-secondary">User</span>
                                <span class="d-block fw-bold">3456</span>
                            </div>
                        </div>
                        <div class="col-3 d-flex bg-white align-items-center px-3 py-4 border-r-sedang">
                            <div class="p-3 bg-primary rounded-circle me-2"></div>
                            <div>
                                <span class="text-secondary">News</span>
                                <span class="d-block fw-bold">3456</span>
                            </div>
                        </div>
                        <div class="col-3 d-flex bg-white align-items-center px-3 py-4 border-r-sedang">
                            <div class="p-3 bg-primary rounded-circle me-2"></div>
                            <div>
                                <span class="text-secondary">Transaction</span>
                                <span class="d-block fw-bold">3456</span>
                            </div>
                        </div>
                            
                        {{-- CHART SECTION --}}
                        <div class="bg-white mt-3">
                            <h5 class="px-3 mt-3">Indikator Kinerja Utama</h5>
                            <hr>
                            <div class="row justify-content-evenly">
                                <div class="col-2 bg-light align-items-center px-3 py-4 border-r-sedang">
                                    <span class="text-secondary">Lorem Ipsum</span>
                                    <span class="d-block fw-bold">3456</span>
                                </div>
                                <div class="col-2 bg-light align-items-center px-3 py-4 border-r-sedang">
                                    <span class="text-secondary">Lorem Ipsum</span>
                                    <span class="d-block fw-bold">3456</span>
                                </div>
                                <div class="col-2 bg-light align-items-center px-3 py-4 border-r-sedang">
                                    <span class="text-secondary">Lorem Ipsum</span>
                                    <span class="d-block fw-bold">3456</span>
                                </div>
                                <div class="col-2 bg-light align-items-center px-3 py-4 border-r-sedang">
                                    <span class="text-secondary">Lorem Ipsum</span>
                                    <span class="d-block fw-bold">3456</span>
                                </div>
                                <div class="col-2 bg-light align-items-center px-3 py-4 border-r-sedang">
                                    <span class="text-secondary">Lorem Ipsum</span>
                                    <span class="d-block fw-bold">3456</span>
                                </div>
                            </div>
                            
                            <canvas id="myChart" class="my-5"></canvas>
                        </div>
                    </div>


                    {{-- SCRIPT UNTUK CHART --}}
                    <script>
                        
                        const labels = [
                            'Mon',
                            'Tue',
                            'Wed',
                            'Thu',
                            'Friday',
                            'Sat',
                            'Sun',
                        ];
                        const data = {
                        labels: labels,
                        datasets: [{
                            label: 'My First dataset',
                            backgroundColor: 'rgba(49, 129, 237, 0.3)',
                            borderColor: 'rgba(0, 62, 203, 1)',
                            data: [0, 20, 38, 30, 29, 43, 98],
                            fill: true,
                            tension: 0.4,
                            }]
                        };

                        const config = {
                            type: 'line',
                            data: data,
                            options: {}
                        };

                        var myChart = new Chart(
                            document.getElementById('myChart'),
                            config
                        );
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection