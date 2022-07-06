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
                @foreach ($news as $key => $n)
                    <li class="nav-item">
                        <a class="nav-link link-news-category link-secondary" aria-current="page" href="#"
                            id="{{ str_replace(' ', '-', $key) }}-tab" data-bs-toggle="tab" data-bs-target="#{{ str_replace(' ', '-', $key) }}" type="button" role="tab"
                            aria-controls="business" aria-selected="true">
                            {{ ucfirst($key) }}
                        </a>
                    </li>
                @endforeach
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="all" role="tabpanel" aria-labelledby="all-tab">
                        <div class="row g-3">
                            @foreach ($all_news as $all_n)
                            <div class="col-4">
                                <div>
                                    <a href="{{ route('news.show', $all_n->slug) }}"
                                        class="link-dark text-decoration-none">
                                        <img src="{{ url('storage/'.$all_n->img) }}" alt="News"
                                            class="img-fluid mb-3 w-100" style="height: 250px;">
                                        <p class="text-muted fw-light fs-14px mb-2">{{
                                            $all_n->created_at }}
                                        </p>
                                        <h5>{{ $all_n->title }}</h5>
                                        <p class="text-secondary fw-light fs-14px mt-2">{!!
                                            Str::limit($all_n->description,
                                            0) !!}
                                        </p>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    @foreach ($news as $key => $element)
                    <div class="tab-pane fade" id="{{ str_replace(' ', '-', $key) }}" role="tabpanel" aria-labelledby="{{ str_replace(' ', '-', $key) }}-tab">
                        <div class="row g-3">
                            @foreach ($element as $n)
                            <div class="col-4">
                                <div>
                                    <a href="{{ route('news.show', $n->slug) }}"
                                        class="link-dark text-decoration-none">
                                        <img src="{{ url('storage/'.$n->img) }}" alt="News"
                                            class="img-fluid mb-3 w-100" style="height: 250px;">
                                        <p class="text-muted fw-light fs-14px mb-2">{{
                                            $n->created_at }}
                                        </p>
                                        <h5>{{ $n->title }}</h5>
                                        <p class="text-secondary fw-light fs-14px mt-2">{!!
                                            Str::limit($n->description,
                                            0) !!}
                                        </p>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <!-- news pagination -->
                <div class="d-flex justify-content-end">
                    {!! $all_news->links() !!}
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