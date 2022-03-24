@extends('layouts.footer')
@extends('layouts.base')
{{-- @extends('researcher.layouts.breadcrumb') --}}
@extends('researcher.layouts.navbar2')

@section('content')

{{-- Breadcrumb --}}
    <section class="breadcrumb-contact mt-3 ms-5" id="breadcrumb-contact">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                        <a href="/researcher/surveys" class="link-yellow text-decoration-none"><i
                            class="fas fa-home fa-fw"></i>
                        Beranda</a></li>
                <li class="breadcrumb-item">
                    <a href=" {{ route('researcher.surveys.manage', $survey->id) }}"
                        class="link-secondary text-decoration-none"> Survey</a>
                </li>
                <li class="breadcrumb-item">
                    <a href=" {{ route('researcher.surveys.customizeDiagram', $survey->id) }}"
                        class="link-secondary text-decoration-none">Diagram</a>
                </li>
                <li class="breadcrumb-item"><a href=" {{ route('researcher.surveys.collectRespondent', $survey->id) }}"
                        class="link-secondary text-decoration-none">Collect Respondent</a>
                </li>
                </li>
                <li class="breadcrumb-item active"><a href=" {{ route('researcher.surveys.statusSurvey', $survey->id) }}"
                        class="link-secondary text-decoration-none">Status Survey</a>
                </li>
                <li class="breadcrumb-item"><a href=" {{ route('researcher.surveys.report', $survey->id) }}"
                        class="link-secondary text-decoration-none">Analytics Result</a>
                </li>
            </ol>
        </nav>
    </section>
    <hr class="mb-0">
{{-- end Breadcrumb --}}

{{-- Data Respondent --}}
<section class="data-respondent py-5" id="data-respondent" style="margin-bottom: 250px">
    <div class="container">
        <h4>Data Respondent</h4>
        <table class="table table-hover">
            <thead class="table-orange text-white">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Nickname</th>
                    <th scope="col">Status</th>
                    <th scope="col">Respondent</th>
                    <th scope="col">Date Modified</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><i class="fas fa-share-alt fa-fw"></i></td>
                    <td>Share Link</td>
                    <td>Active</td>
                    <td>0</td>
                    <td>Kamis, 30 September 2021, 8:56 PM</td>
                    <td><i class="fas fa-ellipsis-h fa-fw"></i></td>
                </tr>
                <tr>
                    <td><i class="fas fa-user-check fa-fw"></i></td>
                    <td>Target Audiance 1</td>
                    <td>Active</td>
                    <td>0</td>
                    <td>Kamis, 30 September 2021, 8:56 PM</td>
                    <td><i class="fas fa-ellipsis-h fa-fw"></i></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
{{-- End Data Respondent --}}

@endsection