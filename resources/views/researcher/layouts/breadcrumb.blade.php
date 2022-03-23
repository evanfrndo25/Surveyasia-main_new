@inject('request', 'Illuminate\Http\Request')
{{-- Breadcrumb --}}
<section class="breadcrumb-contact mt-3 ms-5" id="breadcrumb-contact">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">
                    <a href="/researcher/surveys" class="text-dark text-decoration-none"><i
                        class="fas fa-home fa-fw"></i>
                    Beranda</a></li>
            <li class="breadcrumb-item">
                <a href=" {{ route('researcher.surveys.manage', $survey->id) }}"
                    class="text-dark text-decoration-none"> Survey</a>
            </li>
            <li class="breadcrumb-item"><a href=" {{ route('researcher.surveys.customizeDiagram', $survey->id) }}"
                    class="text-dark text-decoration-none">Diagram</a>
            </li>
            <li class="breadcrumb-item"><a href=" {{ route('researcher.surveys.collectRespondent', $survey->id) }}"
                    class="text-dark text-decoration-none">Collect Respondent</a>
            </li>
            </li>
            <li class="breadcrumb-item"><a href=" {{ route('researcher.surveys.statusSurvey', $survey->id) }}"
                    class="text-dark text-decoration-none">Status
                    Survey</a>
            </li>
            <li class="breadcrumb-item"><a href=" {{ route('researcher.surveys.report', $survey->id) }}"
                    class="text-dark text-decoration-none">Analytics Result</a>
            </li>
        </ol>
    </nav>
</section>

<hr class="mb-0">
{{-- End Breadcrumb --}}
