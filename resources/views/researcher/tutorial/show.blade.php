@extends('layouts.footer')
@extends('layouts.base')
@extends('layouts.navbar')

@section('content')

    <section class="header-detail-news pt-5" id="header-detail-news">
        <div class="container">
            <h1 class="text-center fw-bold">{{ $news->title }}</h1>
            <p>{!! $news->description !!}</p>
        </div>
    </section>

    <section class="other-news py-5" id="other-news">
        <div class="container">
            <h6>Tulisan Lainnya</h6>
            <hr>
            <div class="row">
                @for ($i = 3; $i < 6; $i++)
                    <div class="col-md-4">
                        <img src="/assets/img/detail_blog_{{ $i }}.png" alt="Detail Blog {{ $i }}" class="img-fluid w-100 mb-3">
                        <p class="fw-light m-0">1{{ $i }} Agustus 2021</p>
                        <h5>Grid membatasi kreatifitas seorang UI Designer?</h5>
                        <div class="row mt-3">
                            <div class="col-md-2">
                                <img src="/assets/img/prof_pic.png" alt="Profile Picture" width="60">
                            </div>
                            <div class="col-md-10">
                                <p class="fw-bold m-0">Jessie Yeung</p>
                                <p class="fw-light m-0">22 September 2021</p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

@endsection
