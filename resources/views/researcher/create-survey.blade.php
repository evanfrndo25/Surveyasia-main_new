@extends('layouts.footer')
@extends('layouts.base')
@extends('researcher.layouts.breadcrumb')
@extends('researcher.layouts.navbar2')

<link rel="stylesheet" href="{{ asset('css/components/spinner.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/rating.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/scale.css') }}">

@section('content')
    @include('researcher.modals.custom-components-modal')
    @include('researcher.modals.edit-element-modal')
    @include('researcher.modals.question-bank-modal')
    @include('layouts.alerts.delete-question')
    @include('researcher.layouts.sidebar')

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
