@extends('layouts.footer')
@extends('layouts.base')
@extends('respondent.layouts.navbar')

@section('content')

{{-- Alert for User do not verify by admin yet --}}
@if (auth()->user()->status == 1)
<div class="alert alert-warning" role="alert">
    <div class="container">
        @if (session()->has('message'))
        {{ session('message') }}
        <br>
        @endif
        Akun Anda <strong>sedang diverifikasi</strong> oleh tim kami hingga 1-3 hari kedepan.
    </div>
</div>
@endif

{{-- Alert for User has Verify Rejected by Admin --}}
@if (auth()->user()->status == 3)
<div class="alert alert-danger" role="alert">
    <div class="container">
        Verifikasi akun Anda <strong>ditolak</strong> karena terdapat data yang tidak valid. isi ulang data anda <a
            href="{{ route('respondent.reRegistration') }}" class="link-danger">disini</a>
    </div>
</div>
@endif

{{-- Alert for User has been Verified by Admin --}}
@if (auth()->user()->status == 2)
<div class="alert alert-success" role="alert">
    <div class="container">
        Verifikasi akun Anda <strong>berhasil</strong>, silahkan mengisi survey yang tersedia.
    </div>
</div>
@endif


{{-- Header Respondent --}}
<section class="header-respondent pt-5" id="header-respondent">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-7 d-none d-md-block mb-0 mb-md-3">
                <div class="card text-white border-0 radius-16px">
                    <img src="{{ asset('assets/img/hero_respondent.png') }}" alt="Respondent"
                        class="img-fluid w-100 radius-16px">
                    <div class="card-img-overlay d-flex align-items-center">
                        <h3 class="fw-semibold">Selamat Datang di SurveyAsia!</h3>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-5">
                <div class="card shadow p-3 border-0 radius-16px">
                    <div class="card-body">
                        <div class="row">
                            <div class="d-flex">
                                @if (Auth::user()->avatar == null)
                                <img src="{{ asset('assets/img/noimage.png') }}" alt="{{ Auth::user()->nama_lengkap }}"
                                    width="50" height="50" class="d-block me-2 rounded-pill object-fit-cover">
                                @elseif (Auth::user()->provider_name != null)
                                <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->nama_lengkap }}" width="50"
                                    height="50" class="d-block me-2 rounded-pill object-fit-cover">
                                @else
                                <img src="{{ asset('storage/' . \auth::user()->avatar) }}"
                                    alt="{{ Auth::user()->nama_lengkap }}" width="50" height="50"
                                    class="d-block me-2 rounded-pill object-fit-cover">
                                @endif
                                <div class="col">
                                    <p class="fs-14px m-0">Selamat Datang!</p>
                                    <p class="fw-semibold m-0">{{ Auth::user()->nama_lengkap }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 col-sm-5 d-flex">
                                <img src="{{ asset('assets/img/ic_total_balance.svg') }}" alt="Total Balance"
                                    class="img-fluid me-2" width="50">
                                <div class="col-auto">
                                    <p class="text-muted fs-14px m-0">Total Saldo</p>
                                    <p class="fw-semibold m-0">Rp{{ number_format(0, 0, 0, '.') }}</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-7 d-flex mt-3 mt-sm-0">
                                <img src="{{ asset('assets/img/ic_withdraw_balance.svg') }}" alt="Withdraw Balance"
                                    class="img-fluid me-2" width="50">
                                <div class="col-auto">
                                    <p class="text-muted fs-14px m-0">Tarik Saldo</p>
                                    <a href="{{ route('respondent.survey.history') }}"
                                        class="link-orange text-decoration-none m-0">Klik & Cek Riwayat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End Header Respondent --}}

{{-- Recommendation Survey --}}
<section class="recommendation-survey pt-5" id="recommendation-survey">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-sm-6">
                <h5 class="fw-bold">Survey Untukmu</h5>
            </div>
            <div class="col-6 col-xl-3">
                <form id="form_filter" action="{{ url('/respondent/dashboard/filter') }}" method="GET">
                    <select class="form-select" name="select_filter" id="select_filter"
                        placeholder="Choose a Categories">
                        @if (isset($_GET['select_filter']))
                        @if ($_GET['select_filter'] == 'Customers')
                        <option value="semua">All</option>
                        <option selected value="Customers">Customers</option>
                        <option value="Education">Education</option>
                        <option value="Healthcare">Healthcare</option>
                        <option value="Employee">Employee</option>
                        <option value="Market Research">Market Research</option>
                        @elseif($_GET['select_filter'] == "Education")
                        <option value="semua">All</option>
                        <option value="Customers">Customers</option>
                        <option selected value="Education">Education</option>
                        <option value="Healthcare">Healthcare</option>
                        <option value="Employee">Employee</option>
                        <option value="Market Research">Market Research</option>
                        @elseif($_GET['select_filter'] == "Healthcare")
                        <option value="semua">All</option>
                        <option value="Customers">Customers</option>
                        <option value="Education">Education</option>
                        <option selected value="Healthcare">Healthcare</option>
                        <option value="Employee">Employee</option>
                        <option value="Market Research">Market Research</option>
                        @elseif($_GET['select_filter'] == "Employee")
                        <option value="semua">All</option>
                        <option value="Customers">Customers</option>
                        <option value="Education">Education</option>
                        <option value="Healthcare">Healthcare</option>
                        <option selected value="Employee">Employee</option>
                        <option value="Market Research">Market Research</option>
                        @elseif($_GET['select_filter'] == "Market Research")
                        <option value="semua">All</option>
                        <option value="Customers">Customers</option>
                        <option value="Education">Education</option>
                        <option value="Healthcare">Healthcare</option>
                        <option value="Employee">Employee</option>
                        <option selected value="Market Research">Market Research</option>
                        @endif
                        @else
                        <option>All</option>
                        <option value="Customers">Customers</option>
                        <option value="Education">Education</option>
                        <option value="Healthcare">Healthcare</option>
                        <option value="Employee">Employee</option>
                        <option value="Market Research">Market Research</option>
                        @endif
                    </select>
                </form>
            </div>
        </div>

        @if ($count > 4 && $count <= 8) @for ($i=0; $i < 2; $i++) <div class="row mt-3">
            @if ($i == 0)
            @else
            @for ($j = 4; $j < $count; $j++) <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card shadow-sm radius-default">
                    <img src="{{ asset('assets/img/recommendation_survey.png') }}" alt="Recommendation Survey"
                        class="card-img-top radius-default">
                    <div class="card-body">
                        <h6 class="card-title fw-semibold m-0">{{ $surveys[$j]->title }}</h6>
                        <p class="card-text text-muted fs-12px">
                            by {{ $surveys[$j]->user->nama_lengkap }}</p>
                        <a href="{{ route('respondent.surveys.show', $surveys[$j]->id) }}"
                            class="btn btn-orange radius-default text-white w-100" role="button">Mulai</a>
                    </div>
                </div>
    </div>
    @endfor
    @endif
    </div>
    @endfor
    @else
    <div class="row mt-3">
        @if ($surveys->count() > 0)
        @foreach ($surveys as $survey)
        <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card shadow-sm radius-default">
                <img src="{{ asset('assets/img/recommendation_survey.png') }}" alt="Recommendation Survey"
                    class="card-img-top radius-default">
                <div class="card-body">
                    <h6 class="card-title fw-semibold m-0">{{ $survey->title }}</h6>
                    <p class="card-text text-muted fs-12px">by
                        {{ $survey->user->nama_lengkap }}</p>

                    @can('verifiedByAdmin')
                    <a href="{{ route('respondent.surveys.show', $survey->id) }}"
                        class="btn btn-orange radius-default text-white w-100" role="button">Mulai
                    </a>
                    @elsecannot('verifiedByAdmin')
                    <button type="button" class="btn btn-secondary radius-default w-100" data-bs-toggle="modal"
                        data-bs-target="#alert-modal-unverified">
                        Mulai
                    </button>
                    @endcan
                </div>
            </div>
        </div>
        @endforeach
        @else
        <div class="text-center">
            <img src="{{ asset('assets/img/survey_history.svg') }}" alt="Survey History" class="img-fluid" width="300">
            <p class="text-muted mt-3 m-0">Belum ada survey yang tersedia untuk Anda</p>
        </div>
        @endif
    </div>
    @endif
    </div>
</section>
{{-- End Recommendation Survey --}}

{{-- Surveyasia News --}}
<section class="surveyasia-news py-5" id="surveyasia-news">
    <div class="container">
        <h5 class="fw-bold">SurveyAsia News</h5>
        <div class="row">
            @foreach ($newsList as $news)
            <div class="col-12 col-sm-6 col-lg-3">
                <div>
                    <a href="{{ route('news.show', $news->slug) }}" class="link-dark text-decoration-none">
                        <img src="{{ asset('assets/img/surveyasia_news_1.png') }}" alt="SurveyAsia News"
                            class="card-img-top">
                        <p class="text-orange fs-14px mt-3 mb-2"><i class="fas fa-calendar-alt fa-fw"></i> {{ date('j F
                            Y', strtotime($news->created_at)) }}
                        </p>
                        <h6>{{ $news->title }}</h6>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section> {{-- End Surveyasia News --}}

<!-- Modal Alert Untuk Button Mulai Survey Ketika Belum Terverifikasi -->
<div class="modal fade" id="alert-modal-unverified" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-orange text-white">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body fs-4 text-center">
                Akun anda belum terverifikasi oleh admin
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
{{-- end modal alert --}}

<script>
    var select = document.getElementById('select_filter');
        var button = document.getElementById('button_filter');
        var form = document.getElementById('form_filter');
        select.addEventListener('input', function() {
            form.submit();
        });

        var input = document.getElementById('input');
        input.addEventListener('input', function() {
            button.click();
        });
</script>

@endsection