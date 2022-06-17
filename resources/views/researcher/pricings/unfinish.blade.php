@extends('layouts.footer')
@extends('researcher.layouts.base')
@extends('researcher.layouts.navbar2')

@section('content')
<section class="404 text-center">
    <div class="container">
        <div class="row min-vh-100">
            <div class="col my-auto">
                <img src="{{ asset('assets/img/transaction_cancel.svg') }}" alt="Transaksi Sukses" class="img-fluid"
                    width="250">
                <h1 class="fw-bold mt-3">Menunggu Pembayaran</h1>
                <p class="text-muted">Segera lakukan pembayaran sekarang</p>
                <a href="/" class="btn btn-orange radius-default">Kembali</a>
            </div>
        </div>
    </div>
</section>
@endsection