@extends('layouts.footer')
@extends('researcher.layouts.base')
@extends('researcher.layouts.navbar')

@section('content')

<div class="container p-5">
    <div class="row">
        <div class="col-12 col-md-9">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h5>Data Order</h5>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <td>Nama Paket</td>
                            <td class="fw-semibold" style="font-weight: 600">{{ $transaction->title }}</td>
                        </tr>
                        <tr>
                            <td>Total Harga</td>
                            <td class="fw-semibold" style="font-weight: 600">Rp{{ number_format($transaction->total, 0,
                                0, '.') }}</td>
                        </tr>
                        <tr>
                            <td>Status Pembayaran</td>
                            <td class="fw-semibold" style="font-weight: 600">
                                @if ($transaction->payment_status == 1)
                                Menunggu Pembayaran
                                @elseif ($transaction->payment_status == 2)
                                Sudah Dibayar
                                @else
                                Kadaluarsa
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td class="fw-semibold" style="font-weight: 600">{{ $transaction->created_at->format('D, d M
                                Y H:i') }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h5>Pembayaran</h5>
                </div>
                <div class="card-body">
                    @if ($transaction->payment_status == 1)
                    <button class="btn btn-orange radius-default" id="pay-button">Bayar Sekarang</button>
                    @else
                    Pembayaran berhasil
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}">
</script>
<script>
    const payButton = document.querySelector('#pay-button');
        payButton.addEventListener('click', function(e) {
            e.preventDefault();
            snap.pay('{{ $snapToken }}', {
                // Optional
                onSuccess: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                    window.location.replace("{{ route('midtrans.finish') }}");
                },
                // Optional
                onPending: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                    window.location.replace("{{ route('researcher.transaction.history') }}");
                },
                // Optional
                onError: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                    window.location.replace("{{ route('midtrans.error') }}");
                }
            });
        });
</script>

@endsection
