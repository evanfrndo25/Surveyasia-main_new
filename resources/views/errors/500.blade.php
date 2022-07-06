@extends('layouts.base')

@section('content')
<section class="404 text-center">
    <div class="container">
        <div class="row min-vh-100">
            <div class="col my-auto">
                <h1 class="fw-bold"><span class="fw-bolder text-danger">500</span> Server Error!</h1>
                <h1 class="fw-bold">Terjadi kesalahan pada server</h1>
                <p class="text-muted">Ups! sepertinya server mengalami gangguan. Silahkan hubungi kami untuk informasi lebih lanjut.</p>
                <a href="/" class="btn btn-orange radius-default">Kembali</a>
            </div>
        </div>
    </div>
</section>
@endsection