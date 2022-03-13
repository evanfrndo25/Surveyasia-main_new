{{-- Breadcrumb --}}
<section class="breadcrumb-contact mt-3 ms-5" id="breadcrumb-contact">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/researcher/surveys"
                                        class="link-orange text-decoration-none"><i class="fas fa-home fa-fw"></i>
                                        Beranda</a></li>
                        <li class="breadcrumb-item">
                                <a href=" {{ route('researcher.surveys.manage', $survey->id) }}"
                                        class="link-secondary text-decoration-none"> Survey</a>
                        </li>
                        <li class="breadcrumb-item"><a
                                        href=" {{ route('researcher.surveys.customizeDiagram', $survey->id) }}"
                                        class="link-secondary text-decoration-none">Diagram</a>
                        </li>
                        <li class="breadcrumb-item"><a
                                        href=" {{ route('researcher.surveys.collectRespondent', $survey->id) }}"
                                        class="link-secondary text-decoration-none">Collect Respondent</a>
                        </li>
                        </li>
                        <li class="breadcrumb-item"><a
                                        href=" {{ route('researcher.surveys.statusSurvey', $survey->id) }}"
                                        class="link-secondary text-decoration-none">Status
                                        Survey</a>
                        </li>
                        <li class="breadcrumb-item"><a href=" {{ route('researcher.surveys.report', $survey->id) }}"
                                        class="link-secondary text-decoration-none">Analytics Result</a>
                        </li>
                </ol>
        </nav>
</section>

<hr class="mb-0">
{{-- End Breadcrumb --}}