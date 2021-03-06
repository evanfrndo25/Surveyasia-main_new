@extends('layouts.footer')
@extends('layouts.base')
{{-- @extends('researcher.layouts.breadcrumb') --}}
@extends('researcher.layouts.navbar2')

<link rel="stylesheet" href="{{ asset('css/components/spinner.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/rating.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/scale.css') }}">
{{-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet"> --}}
@section('content')
    {{-- Breadcrumb --}}
    <section class="breadcrumb-contact mt-3 ms-5" id="breadcrumb-contact">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                        <a href="/researcher/surveys" class="link-yellow text-decoration-none"><i
                            class="fas fa-home fa-fw"></i>
                        Beranda</a></li>
                <li class="breadcrumb-item active">
                    <a href=" {{ route('researcher.surveys.manage', $survey->id) }}"
                        class="link-secondary text-decoration-none"> Survey</a>
                </li>
                <li class="breadcrumb-item">
                    <a href=" {{ route('researcher.surveys.customizeDiagram', $survey->id) }}"
                        class="link-secondary text-decoration-none">Diagram</a>
                </li>
                <li class="breadcrumb-item "><a href=" {{ route('researcher.surveys.collectRespondent', $survey->id) }}"
                        class="link-secondary text-decoration-none">Kumpulkan Responden</a>
                </li>
                </li>
                <li class="breadcrumb-item"><a href=" {{ route('researcher.surveys.statusSurvey', $survey->id) }}"
                        class="link-secondary text-decoration-none">Status Survey</a>
                </li>
                <li class="breadcrumb-item"><a href=" {{ route('researcher.surveys.report', $survey->id) }}"
                        class="link-secondary text-decoration-none">Hasil Analisa</a>
                </li>
            </ol>
        </nav>
    </section>
    <hr class="mb-0">
    {{-- end Breadcrumb --}}
    {{-- Alert for survey archived --}}
    <div class="row">
        <div class="col-md-12">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible show fade">
                {{ session()->get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
    </div>
    {{-- End Alert --}}

    {{-- @include('researcher.layouts.breadcrumb') --}}
    @include('researcher.modals.custom-components-modal')
    @include('researcher.modals.edit-element-modal')
    @include('researcher.modals.question-bank-modal')
    @include('layouts.alerts.delete-question')
    @include('researcher.layouts.sidebar')
    
    {{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/bootstrap-paginator.min.js') }}"></script>
    
    <script type='text/javascript'>
        var options = {
            currentPage: 1,
            totalPages: 10,
             
        }

        $('#questions_container').bootstrapPaginator(options);
    </script> --}}

    <script>
        var url = "{!! $url !!}";
    </script>
    <!-- Latest Sortable -->
    <script src="//SortableJS.github.io/Sortable/Sortable.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        var questions = {!! $survey->questions !!};
    </script>
    <script type="module" src="{{ asset('js/researcher/create-survey.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js">
    </script>
    {{-- <script type="module" src="{{ asset('js/charts/preview-chart.js') }}"></script> --}}
@endsection
