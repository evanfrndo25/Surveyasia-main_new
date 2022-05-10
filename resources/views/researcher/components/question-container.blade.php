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
        <div class="col-auto mx-auto border-orange text-center" style=" margin-top: 20px; padding:5px 10px; font-size: 20px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 5px;">
            <div id="submitBtn" class="disabled fade">
                <button id="btnAddPart" data-bs-toggle="modal" data-bs-target="#partComponentModal" 
                    data-toggle="tooltip" data-placement="bottom" title="Tambahkan bagian" 
                    class="btn fs-4 btn1 text-orange"><i class="bi bi-list" class="btn "></i></button>
                <button id="btn2"
                    data-toggle="tooltip" data-placement="bottom" title="Pratinjau" 
                    class="btn fs-4 btn2 text-orange"><i class="bi bi-eye" class="btn "></i>
                </button>
                <button 
                    data-toggle="tooltip" data-placement="bottom" title="Simpan" 
                class="btn fs-4 btn3 text-orange"><i class="fal fa-save" class="btn " id="submitBtn"
                        type="submit"></i></button>
                        
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
    .tooltip > .tooltip-inner {
        background-color: #85848B; 
        color: #FFFFFF; 
        font-size: 14px;
    }

    .btn1:hover {
        background: rgba(239, 76, 41, 0.3);
        color: #EF4C29;
        border-radius: 100px;
    }

    .btn2:hover {
        background: rgba(239, 76, 41, 0.3);
        color: #EF4C29;
        border-radius: 100px;
    }

    .btn3:hover {
        background: rgba(239, 76, 41, 0.3);
        color: #EF4C29;
        border-radius: 100px;
    }
</style>

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

