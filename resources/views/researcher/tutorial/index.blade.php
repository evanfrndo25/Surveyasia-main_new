@extends('layouts.footer')
@extends('researcher.layouts.base')
@extends('researcher.layouts.navbar')

@section('content')

<section class="tutorial p-5" id="tutorial">
    <div class="container-fluid">
        <h4 class="fw-bold">Video Tutorial</h4>
        <div class="card text-light mt-3">
            <img src="/assets/img/hero_tutorial.png" alt="Hero Tutorial" class="img-fluid hero-tutorial"
                style="border-radius: 16px">
            <div class="card-img-overlay d-flex align-items-center">
                <h1>Ada banyak hal yang <br> bisa kamu pelajari di sini</h1>
            </div>
        </div>
        <h5 class="text-orange mt-5">Rekomendasi Video Untukmu</h5>
        <div class="row mt-3">
            @foreach ($videoList->items as $key => $item)
            <div class="col-xl-3 col-md-6 col-sm-12">
                <a href="#" class="link-dark text-decoration-none">
                    <div class="card shadow">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{ $item->id->videoId }}"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen style="border-radius: 16px 16px 0 0;"></iframe>
                        <div class="card-body">
                            <h6 class="card-title">{{ $item->snippet->title }}</h6>
                            <p class="card-text text-muted m-0">{{ $item->snippet->channelTitle }}</p>
                            <p class="card-text text-muted fw-light fs-14px">{{ date('j F Y',
                                strtotime($item->snippet->publishTime)) }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <h5 class="text-orange mt-5">Artikel</h5>
        <hr>
        <div class="row mt-3">
            @foreach ($newsList as $news)
            <div class="col-xl-3 col-md-6 col-sm-12">
                <div>
                    <a href="{{ route('researcher.tutorial.show', $news->slug) }}"
                        class="link-dark text-decoration-none">
                        <img src="{{ url('storage/'.$news->img) }}" alt="Blog 6" class="img-fluid mb-3 w-100" style="height: 150px;">
                        <p class="text-muted fw-light fs-14px mb-2">{{ date('j F Y', strtotime($news->created_at)) }}
                        </p>
                        <h6>{{ $news->title }}</h6>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection