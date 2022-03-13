@extends('layouts.footer')
@extends('researcher.layouts.base')
@extends('researcher.layouts.navbar')

@section('content')

<div class="container pb-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card border-0 radius-default shadow-sm">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <th scope="col">Total Harga</th>
                            <th scope="col">Status Pembayaran</th>
                            <th scope="col"></th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h5>Rp{{ number_format($transaction->total, 0, 0, '.') }}</h5>
                                </td>
                                <td>
                                    @if ($transaction->payment_status == 1)
                                    <span class="badge bg-secondary fw-normal">Menunggu Pembayaran</span>
                                    @elseif($tansaction->payment_status == 2)
                                    <span class="badge bg-success fw-normal">Sudah Dibayar</span>
                                    @elseif($transaction->payment_status == 3)
                                    <span class="badge bg-danger fw-normal">Dibatalkan</span>
                                    @else
                                    <span class="badge bg-danger fw-normal">Gagal</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('researcher.transaction.checkoutTransaction', $transaction->id) }}"
                                        class="btn btn-orange radius-default">Lihat</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
