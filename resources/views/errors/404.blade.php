@extends('layouts.base')

@section('content')
<section class="404 text-center">
    <div class="container">
        <div class="row min-vh-100">
            <div class="col my-auto">
                <img src="{{ asset('assets/img/404.svg') }}" alt="Error 404 Not Found" class="img-fluid" width="650">
                <h1 class="fw-bold">Halaman tidak ditemukan</h1>
                <p class="text-muted">Ups! sepertinya Anda mengikuti tautan yang salah. Jika menurut Anda ini masalah,
                    beri tahu kami.</p>
                <a href="/" class="btn btn-orange radius-default">Kembali</a>
            </div>
        </div>
    </div>
</section>
@endsection