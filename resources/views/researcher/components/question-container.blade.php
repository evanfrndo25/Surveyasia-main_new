{{-- Loading Spinner --}}
<div class="row text-center" id="spinner">
    <div class="d-flex justify-content-center mt-5">
        <div class="lds-dual-ring"></div>
    </div>
    <h5 class="mt-3">Memuat konfigurasi....</h5>
</div>

{{-- Alert --}}
<div class="alert alert-info alert-dismissible visually-hidden" role="alert" id="minQuestionAlert">
    Buat minimal 5 pertanyaan untuk disimpan
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>


<div class="row fade" id="noQuestionContainer">
    <div class="col">
        {{-- empty question --}}
        @include('researcher.components.empty-question')
    </div>
</div>

{{-- Question Form --}}
<form action="{{ route('researcher.surveys.storeQuestions', $survey->id) }}" method="post" id="formSurveyQuestion" class="mb-5">
    @csrf
    <input type="hidden" name="survey_id" value="{{ $survey->id }}">
    <div class="mt-3" id="questions_container">
    </div>
    <div class="row d-flex justify-content-between">
        <div class="col-auto">
            <button type="submit" class="btn btn-default text-white disabled fade" id="submitBtn">Simpan</button>
        </div>
    </div>

</form>
{{-- End Question Form --}}
