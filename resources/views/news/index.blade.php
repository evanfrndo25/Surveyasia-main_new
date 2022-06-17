@extends('layouts.footer')
@extends(Auth::guest() ? 'layouts.base' : (Auth::user()->role_id == 2 ? 'researcher.layouts.base' :
'layouts.base'))
@extends(Auth::guest() ? 'layouts.navbar' : (Auth::user()->role_id == 2 ? 'researcher.layouts.navbar2' :
'respondent.layouts.navbar'))

@section('content')

{{-- News --}}
<section class="news" id="news">
    @if (Auth::guest())
    <div class="container p-5">
        @elseif (Auth::user()->role_id == 2)
        <div class="container-fluid p-5">
            @else
            <div class="container p-5">
                @endif
                <h1 class="text-center fw-bold">Berita SurveyAsia</h1>
                <hr class="hr-vm-orange mx-auto">
                {{-- News Category --}}
                <ul class="nav mt-5 mb-3" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link link-news-category link-secondary link-orange" aria-current="page" href="#"
                            id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab"
                            aria-controls="all" aria-selected="true">
                            Semua Postingan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-news-category link-secondary" aria-current="page" href="#"
                            id="business-tab" data-bs-toggle="tab" data-bs-target="#business" type="button" role="tab"
                            aria-controls="business" aria-selected="true">
                            Bisnis
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-news-category link-secondary" aria-current="page" href="#"
                            id="study-tab" data-bs-toggle="tab" data-bs-target="#study" type="button" role="tab"
                            aria-controls="study" aria-selected="true">
                            Belajar
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link link-news-category link-secondary" aria-current="page" href="#"
                            id="hobby-tab" data-bs-toggle="tab" data-bs-target="#hobby" type="button" role="tab"
                            aria-controls="hobby" aria-selected="true">
                            Hobi
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link link-news-category link-secondary" aria-current="page" href="#"
                            id="productivity-tab" data-bs-toggle="tab" data-bs-target="#productivity" type="button"
                            role="tab" aria-controls="productivity" aria-selected="true">
                            Produktifitas
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link link-news-category link-secondary" aria-current="page" href="#"
                            id="lainnya-tab" data-bs-toggle="tab" data-bs-target="#lainnya" type="button"
                            role="tab" aria-controls="lainnya" aria-selected="true">
                            Lainnya
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link link-news-category link-secondary" aria-current="page" href="#"
                            id="surveyasia-tab" data-bs-toggle="tab" data-bs-target="#surveyasia" type="button"
                            role="tab" aria-controls="surveyasia" aria-selected="true">
                            SurveyAsia
                        </a>
                    </li>
                </ul>
                {{-- End News Category --}}
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                        <div class="row g-3">
                            @foreach ($all_news as $news)
                            <div class="col-4">
                                <div>
                                    <a href="{{ route('news.show', $news->slug) }}"
                                        class="link-dark text-decoration-none">
                                        <img src="{{ url('storage/'.$news->img) }}" alt="News"
                                            class="img-fluid mb-3 w-100" style="height: 250px;">
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
                    <div class="tab-pane fade" id="business" role="tabpanel" aria-labelledby="business-tab">
                        <div class="row g-3">
                            @foreach ($bisnis_news as $news)
                                <div class="col-4">
                                    <div>
                                        <a href="{{ route('news.show', $news->slug) }}"
                                            class="link-dark text-decoration-none">
                                            <img src="{{ url('storage/'.$news->img) }}" alt="News"
                                                class="img-fluid mb-3 w-100" style="height: 250px;">
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
                    <div class="tab-pane fade" id="study" role="tabpanel" aria-labelledby="study-tab">
                        <div class="row g-3">
                            @foreach ($belajar_news as $news)
                            <div class="col-4">
                                <div>
                                    <a href="{{ route('news.show', $news->slug) }}"
                                        class="link-dark text-decoration-none">
                                        <img src="{{ url('storage/'.$news->img) }}" alt="News"
                                            class="img-fluid mb-3 w-100" style="height: 250px;">
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
                    <div class="tab-pane fade" id="hobby" role="tabpanel" aria-labelledby="hobby-tab">
                        <div class="row g-3">
                            @foreach ($hobi_news as $news)
                                <div class="col-4">
                                    <div>
                                        <a href="{{ route('news.show', $news->slug) }}"
                                            class="link-dark text-decoration-none">
                                            <img src="{{ url('storage/'.$news->img) }}" alt="News"
                                                class="img-fluid mb-3 w-100" style="height: 250px;">
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
                    <div class="tab-pane fade" id="productivity" role="tabpanel" aria-labelledby="productivity-tab">
                        <div class="row g-3">
                            @foreach ($Produktifitas_news as $news)
                                <div class="col-4">
                                    <div>
                                        <a href="{{ route('news.show', $news->slug) }}"
                                            class="link-dark text-decoration-none">
                                            <img src="{{ url('storage/'.$news->img) }}" alt="News"
                                                class="img-fluid mb-3 w-100" style="height: 250px;">
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
                    <div class="tab-pane fade" id="lainnya" role="tabpanel" aria-labelledby="lainnya-tab">
                        <div class="row g-3">
                            @foreach ($lainnya_news as $news)
                                <div class="col-4">
                                    <div>
                                        <a href="{{ route('news.show', $news->slug) }}"
                                            class="link-dark text-decoration-none">
                                            <img src="{{ url('storage/'.$news->img) }}" alt="News"
                                                class="img-fluid mb-3 w-100" style="height: 250px;">
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
                    <div class="tab-pane fade" id="surveyasia" role="tabpanel" aria-labelledby="surveyasia-tab">
                        <div class="row g-3">
                            @foreach ($surveyasia_news as $news)
                                <div class="col-4">
                                    <div>
                                        <a href="{{ route('news.show', $news->slug) }}"
                                            class="link-dark text-decoration-none">
                                            <img src="{{ url('storage/'.$news->img) }}" alt="News"
                                                class="img-fluid mb-3 w-100" style="height: 250px;">
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

                    <div class="d-flex justify-content-end">
                        {!! $all_news->links() !!}
                    </div>
                </div>

                {{-- Surveyasia TV --}}
                <div class="my-5 ">
                    <h4 class="fw-bold text-orange">SurveyAsia TV</h4>
                    <hr>
                    <div class="row mt-3 pb-5">
                        @foreach ($videoList->items as $key => $item)
                        <div class="col-12 col-md-6 col-xl-4 mt-3 mt-xl-0">
                            <iframe width="100%" height="100%"
                                src="https://www.youtube.com/embed/{{ $item->id->videoId }}"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen style="border-radius: 16px" class="mb-3"></iframe>
                            <h6>{{ $item->snippet->title }}</h6>
                            <p class="card-text m-0">{{ $item->snippet->channelTitle }}</p>
                            <p class="card-text text-muted fw-light fs-14px">{{ date('d M Y',
                                strtotime($item->snippet->publishTime)) }} </p>
                        </div>
                        @endforeach
                    </div>
                </div>
                {{-- End Surveyasia TV --}}
            </div>
</section>
{{-- End News --}}

@endsection