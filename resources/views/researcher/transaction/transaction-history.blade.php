@extends('layouts.footer')
@extends('researcher.layouts.base')
@extends('researcher.layouts.navbar')

@section('content')
<section class="transaction-history">
    <div class="container p-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3 class="fw-semibold">Riwayat Transaksi</h3>
                @if ($transactions->count() == 0)
                <div class="row mt-4 py-3">
                    <div class="text-center">
                        <img src="{{ asset('assets/img/survey_history.svg') }}" alt="Transaction History"
                            class="img-fluid" width="300">
                        <p class="text-muted mt-3 m-0">Anda tidak memiliki riwayat transaksi</p>
                    </div>
                </div>
                @else
                <div class="table-responsive">
                    <table class="table table-borderless text-center mt-3">
                        <thead class="bg-table-orange">
                            <tr class="fw-semibold">
                                <th scope="col">Produk</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Total Harga</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $transaction)
                            <tr>
                                <td class="fw-semibold text-start"><img src="{{ asset('assets/img/ic_paper.svg') }}"
                                        class="img-fluid me-2 " width="30">{{ $transaction->title }}</td>
                                <td>{{ date('D, d M Y', strtotime($transaction->created_at)) }}</td>
                                <td>Rp{{ number_format($transaction->total, 0, 0, '.') }}</td>
                                @if ($transaction->payment_status == 1)
                                <td><a href="{{ route('researcher.transaction.checkoutTransaction',$transaction->id) }}"
                                        class="btn btn-warning btn-sm px-3 radius-default link-light text-decoration-none">Menunggu
                                        Pembayaran</a>
                                </td>
                                @elseif($transaction->payment_status == 2)
                                <td><button class="btn btn-success btn-sm px-3 radius-default">Sudah Dibayar</button>
                                </td>
                                @elseif($transaction->payment_status == 3)
                                <td><button class="btn btn-danger btn-sm px-3 radius-default">Dibatalkan</button></td>
                                @elseif($transaction->payment_status == 4)
                                <td><button class="btn btn-danger btn-sm px-3 radius-default">Gagal</button></td>
                                @elseif($transaction->payment_status == 5)
                                <td><button class="btn btn-danger btn-sm px-3 radius-default">Kadaluwarsa</button></td>
                                @else
                                <td><button class="btn btn-danger btn-sm px-3 radius-default">Gagal</button></td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection