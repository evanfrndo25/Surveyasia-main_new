@extends('admin.layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
@endsection

@section('content')
    <div class="container-fluid" style="background-color: #F7F8FC;">
        <div class="row">
            <div class="col-2 g-0">
                @include('admin.component.sidebar')
            </div>

            <div class="col-10 nopadding overflow-hidden">
                @include('admin.component.header')

                <div class="row justify-content-center g-4 mt-3">
                    {{-- MAIN CHART SALES --}}
                    <div class="col-11 bg-white border-r-besar p-4 shadow-sm">
                        <h5 class="fw-bold mt-3">
                            Sales
                            <i class="bi bi-info-circle text-secondary ms-1"></i>
                        </h5>
                        <canvas id="myChart" class="my-3"></canvas>
                    </div>
                    {{-- END OF MAIN CHART SALES --}}
                </div>

                <div class="row justify-content-center mt-5">

                    {{-- SECTION TABLE AKTIVITAS PENJUALAN TERAKHIR --}}
                    <div class="col-md-4 col-12">
                        <div class="bg-white p-4 border-r-besar shadow-sm">
                            <h5 class="mb-3">Aktivitas Penjualan Terakhir</h5>
                            <table class="table">
                                <tbody>
                                    <tr class="align-middle">
                                        <td class="d-flex align-items-center">
                                            <img src="{{ asset('assets/img/ava-1.jpg') }}" class="rounded-circle me-2" alt="">
                                            <div>
                                                <span class="fw-bold">Neil Sims</span>
                                                <span class="d-block text-secondary text-mini">email@example.com</span>
                                            </div>
                                        </td>
                                        <td class="text-end fw-bold">
                                            $367
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        <td class="d-flex align-items-center">
                                            <img src="{{ asset('assets/img/ava-1.jpg') }}" class="rounded-circle me-2" alt="">
                                            <div>
                                                <span class="fw-bold">Neil Sims</span>
                                                <span class="d-block text-secondary text-mini">email@example.com</span>
                                            </div>
                                        </td>
                                        <td class="text-end fw-bold">
                                            $367
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        <td class="d-flex align-items-center">
                                            <img src="{{ asset('assets/img/ava-1.jpg') }}" class="rounded-circle me-2" alt="">
                                            <div>
                                                <span class="fw-bold">Neil Sims</span>
                                                <span class="d-block text-secondary text-mini">email@example.com</span>
                                            </div>
                                        </td>
                                        <td class="text-end fw-bold">
                                            $367
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        <td class="d-flex align-items-center">
                                            <img src="{{ asset('assets/img/ava-1.jpg') }}" class="rounded-circle me-2" alt="">
                                            <div>
                                                <span class="fw-bold">Neil Sims</span>
                                                <span class="d-block text-secondary text-mini">email@example.com</span>
                                            </div>
                                        </td>
                                        <td class="text-end fw-bold">
                                            $367
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        <td class="d-flex align-items-center">
                                            <img src="{{ asset('assets/img/ava-1.jpg') }}" class="rounded-circle me-2" alt="">
                                            <div>
                                                <span class="fw-bold">Neil Sims</span>
                                                <span class="d-block text-secondary text-mini">email@example.com</span>
                                            </div>
                                        </td>
                                        <td class="text-end fw-bold">
                                            $367
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- END OF SECTION TABLE AKTIVITAS PENJUALAN TERAKHIR --}}
    

                    {{-- SECTION TABLE PENJUALAN TERBAIK --}}
                    <div class="col-md-7 col-12">
                        <div class="bg-white p-4 border-r-besar shadow-sm">
                            <h5 class="mb-3">Penjualan Terbaik</h5>
                            <table class="table">
                                <tbody>
                                    <tr class="align-middle">
                                        <td>
                                            <span class="fw-bold">Restaurant Booking App</span>
                                            <span class="d-block text-secondary text-mini">React & Bootstrap Framework</span>
                                        </td>
                                        <td class="text-end">
                                            <span class="fw-bold">70</span>
                                            sales
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>
                                            <span class="fw-bold">UI Kit</span>
                                            <span class="d-block text-secondary text-mini">React & Bootstrap Framework</span>
                                        </td>
                                        <td class="text-end">
                                            <span class="fw-bold">54</span>
                                            sales
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>
                                            <span class="fw-bold">Design System Pro</span>
                                            <span class="d-block text-secondary text-mini">React & Bootstrap Framework</span>
                                        </td>
                                        <td class="text-end">
                                            <span class="fw-bold">47</span>
                                            sales
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>
                                            <span class="fw-bold">Dashboard</span>
                                            <span class="d-block text-secondary text-mini">React & Bootstrap Framework</span>
                                        </td>
                                        <td class="text-end">
                                            <span class="fw-bold">43</span>
                                            sales
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>
                                            <span class="fw-bold">Glassmorphism UI</span>
                                            <span class="d-block text-secondary text-mini">React & Bootstrap Framework</span>
                                        </td>
                                        <td class="text-end">
                                            <span class="fw-bold">38</span>
                                            sales
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- END OF SECTION TABLE PENJUALAN TERBAIK --}}
                </div>


                {{-- TABLE TRANSAKSI --}}
                <div class="row justify-content-center my-5">
                    <div class="col-11">
                        <div class="bg-white p-4 border-r-besar shadow-sm" style="overflow-x: scroll;">
                            <h5 class="m-0">Transaksi</h5>
                            <p class="text-secondary m-0">This is a list of latest transactions.</p>

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">TRANSACTION</th>
                                        <th scope="col">DATE & TIME</th>
                                        <th scope="col">AMOUNT</th>
                                        <th scope="col">STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">
                                            Payment from
                                            <span class="fw-bold"> Bonnie Green </span>
                                        </td>
                                        <td>Apr 23, 2021</td>
                                        <td class="fw-bold">$2300</td>
                                        <td>
                                            <span class="text-success">Completed</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td scope="row">
                                            Payment refund to 
                                            <span class="fw-bold"> #00910 </span>
                                        </td>
                                        <td>Apr 23, 2021</td>
                                        <td class="fw-bold">-$670</td>
                                        <td>
                                            <span class="text-success">Completed</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td scope="row">
                                            Payment failed from 
                                            <span class="fw-bold"> #087651 </span>
                                        </td>
                                        <td>Apr 18, 2021</td>
                                        <td class="fw-bold">$234</td>
                                        <td>
                                            <span class="text-danger">Cancelled</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td scope="row">
                                            Payment from
                                            <span class="fw-bold"> Bonnie Green </span>
                                        </td>
                                        <td>Apr 15, 2021</td>
                                        <td class="fw-bold">$5000</td>
                                        <td>
                                            <span class="text-primary">In progress</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">
                                            Payment from
                                            <span class="fw-bold"> Jese Leos </span>
                                        </td>
                                        <td>Apr 15, 2021</td>
                                        <td class="fw-bold">$2300</td>
                                        <td>
                                            <span class="text-primary">In progress</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td scope="row">
                                            Payment from
                                            <span class="fw-bold"> THEMSBERG LLC </span>
                                        </td>
                                        <td>Apr 11, 2021</td>
                                        <td class="fw-bold">$280</td>
                                        <td>
                                            <span class="text-success">Completed</span>
                                        </td>
                                    </tr>

                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
                {{-- END OF TABLE TRANSAKSI --}}


            </div>
        </div>
    </div>

    {{-- SCRIPT UNTUK CHART --}}
    <script>
        //Chart All user
        const labels = [
            '01 Apr',
            '02 Apr',
            '03 Apr',
            '04 Apr',
            '05 Apr',
            '06 Apr',
            '07 Apr',
        ];
        const data = {
        labels: labels,
        datasets: [{
            label: 'Transaksi',
            backgroundColor: 'rgba(49, 129, 237, 0.3)',
            borderColor: '#0E9F6E',
            data: [80000, 100000, 80000, 90000, 80000, 110000, 115000],
            tension: 0.7,
            }]
        };

        const config = {
            type: 'line',
            data: data,
            options: {
                scales: {
                    y: {
                        // the data minimum used for determining the ticks is Math.min(dataMin, suggestedMin)
                        suggestedMin: 0,

                        // the data maximum used for determining the ticks is Math.max(dataMax, suggestedMax)
                        suggestedMax: 240000,
                    }
                },
                plugins:{
                    legend: {
                        display: false
                    }
                }
            }
        };

        var myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>   
@endsection