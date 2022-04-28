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


<div class="row mb-3">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <h5 style="color: #00000099; font-size:24px;">{{ $survey->title }}</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col">
        <div class="card">


            <div class="container mt-4">
                @include('researcher.modals.edit-judul-deskripsi-modal')
                <form>
                    <label for="" style="font-size:18px; color: #00000099;">Deskripsi</label>
                    <div class="mb-3 mt-3">
                        <textarea type="text" value="{{ $survey->description }}" class="form-control"
                            style="width: 100%; height:111px;" readonly> {{ $survey->description }}</textarea>
                    </div>
                    <div class="text-end">
                        <button type="button" class="btn border-orange text-orange ms-auto" data-bs-toggle="modal"
                            data-bs-target="#editJudulModal"><i class="fal fa-pen"></i>
                            Edit
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>




<div class="row fade" id="noQuestionContainer">
    <div class="col">
        {{-- empty question --}}
        @include('researcher.components.empty-question')
    </div>
</div>


{{-- Question Form --}}
<form action="{{ route('researcher.surveys.storeQuestions', $survey->id) }}" method="post" id="formSurveyQuestion"
    class="mb-5">
    @csrf
    <input type="hidden" name="survey_id" value="{{ $survey->id }}">
    <div class="mt-3" id="questions_container">


    </div>

    <div class="row">
        <div class="col-auto mx-auto border text-center" style=" margin-top: 20px; font-size: 20px; padding:  20px;">
            <div id="submitBtn" class="disabled fade">
                <button id="btnAddPart" data-bs-toggle="modal" data-bs-target="#partComponentModal"
                    class="btn btn-md btn1 "><i class="bi bi-list" class="btn btn-sm "></i> Tambahkan Bagian</button>
                <button class="btn btn-md btn2 "><i class="bi bi-eye" class="btn btn-sm "></i> Pratinjau</button>
                <button class="btn btn-md btn3 btn-orange"><i class="bi bi-save" class="btn btn-sm " id="submitBtn"
                        type="submit"></i> Simpan </button>
            </div>
        </div>
        <div>
        </div>
    </div>

</form>
{{-- End Question Form --}}

{{-- Page footer nomer Halaman --}}
<!-- <div class="row">
    <div class="col-md-7">
        <div class="row align-items-center">
            <div class="col-auto">
                <p class="fs-14px fw-semibold mb-0">Tampilkan :</p>
            </div>
            <div class="col-auto">
                <select class="form-select" aria-label="Default select example">
                    {{-- <option selected>Open this</option> --}}
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="col-auto">
                <p class="fs-14px text-muted fw-semibold mb-0">Hasil : 1-3 dari 10</p>

            </div>
            <div class="col-auto">
                <button class="btn btn-outline-secondary text-muted"><i class="fas fa-angle-left"></i></button>
                <button class="btn btn-outline-secondary text-muted"><i class="fas fa-angle-right"></i></button>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="row justify-content-end align-items-center">
            <div class="col-auto">
                <p class="fs-14px fw-semibold mb-0">Halaman :</p>
            </div>
            <div class="col-auto">
                <select class="form-select" aria-label="Default select example">
                    {{-- <option selected>Open this</option> --}}
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>

        </div>
    </div>
</div> -->

{{-- End Page halaman --}}

<style>
    .btn1:hover {
        background-color: #F2F2F2;
    }

    .btn2:hover {
        background-color: #F2F2F2;
    }

    .btn3:hover {
        background-color: #F2F2F2;
    }
</style>