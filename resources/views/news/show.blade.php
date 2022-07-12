@extends('layouts.footer')
@extends(Auth::guest() ? 'layouts.base' : (Auth::user()->role_id == 2 ? 'researcher.layouts.base' :
'layouts.base'))
@extends(Auth::guest() ? 'layouts.navbar' : (Auth::user()->role_id == 2 ? 'researcher.layouts.navbar2' :
'respondent.layouts.navbar'))

@section('content')

<section class="header-detail-news pt-5" id="header-detail-news">
    <div class="container">
        <h1 class="text-center fw-bold">{{ $news->title }}</h1>
        <div class="text-center">
            <img src="{{ url('storage/'.$news->img) }}" alt="News" class="img-fluid mb-3 w-20">
        </div>
        <p>{!! $news->description !!}</p>
    </div>
</section>

<section class="other-news py-5" id="other-news">
    <div class="container">
        <h6>Tulisan Lainnya</h6>
        <hr>
        <div class="row">
            @foreach ($newsList as $news)
            <div class="col-4">
                <div>
                    <a href="{{ route('news.show', $news->slug) }}" class="link-dark text-decoration-none">
                        <img src="{{ url('storage/'.$news->img) }}" alt="News" class="img-fluid mb-3 w-100"
                            style="height: 250px;">
                        <p class="text-muted fw-light fs-14px mb-2">{{
                                $news->created_at->diffForHumans() }}
                        </p>
                        <h5>{{ $news->title }}</h5>
                        <p class="text-secondary fw-light fs-14px mt-2">{!!
                            Str::limit($news->description,
                            0) !!}
                        </p>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
