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
        <div id="groupBtn" class="disabled fade col-auto mx-auto">
            <div class=" border-orange text-center" style=" margin-top: 20px; padding:5px 10px; font-size: 20px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 5px;">
                {{-- <button id="btnAddPart" data-bs-toggle="modal" data-bs-target="#partComponentModal" 
                    data-toggle="tooltip" data-placement="bottom" title="Tambahkan bagian" 
                    class="btn fs-4 btn1 text-orange"><i class="bi bi-list"></i>
                </button> --}}
                <a href="#" id="btnAddPart" data-bs-toggle="modal" data-bs-target="#partComponentModal" 
                    data-toggle="tooltip" data-placement="bottom" title="Tambahkan bagian" 
                    class="btn fs-4 btn1 text-orange"><i class="bi bi-list"></i></a>
                <button id="btn2"
                    data-toggle="tooltip" data-placement="bottom" title="Pratinjau" 
                    class="btn fs-4 btn2 text-orange"><i class="bi bi-eye"></i>
                </button>
                <!-- <button data-bs-toggle="modal" data-bs-target="#ajukanModal"
                    data-toggle="tooltip" data-placement="bottom" title="Simpan" 
                class="btn fs-4 btn3 text-orange"><i class="fal fa-save" ></i></button> -->
                <a 
                    href="#" 
                    class="btn fs-4 btn3 text-orange"
                    data-bs-toggle="modal" 
                    data-bs-target="#ajukanModal"
                    data-toggle="tooltip" 
                    data-placement="bottom" 
                    title="Simpan"
                >
                    <i class="fal fa-save" ></i>
                </a>
                        
            </div>
        </div>
    </div>

    {{-- Modal Ajukan survey --}}
    <div class="modal fade" id="ajukanModal"  aria-labelledby="ajukanModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 600px;">
            <div class="modal-content">
                <div class="btn ms-auto">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('assets/img/Copy paste 1.png') }}" class="img-fluid" alt="">
                    <h4 class="text-center">Apakah kamu ingin mengajukan survey?</h4>
                    <p class="px-4 small text-center">Anda dapat simpan dan ajukan survey agar admin dapat meninjau survey anda untuk dapat dipublis. Jika hanya ingin mengarsipkan survey dan ingin mengubah kembali survey anda dapat simpan sebagai arsip.</p>
                </div>
                <div class="row px-5 pb-5">
                    {{-- <form action="{{ route('admin.news.destroy', $item->id) }}" method="post">
                        @method('delete')
                        @csrf --}}
                        {{-- <input type="hidden" name="img" value="{{ $item->img }}"> --}}
                        {{-- <div class="col d-grid gap-2">
                            <button type="submit" class="btn btn-danger">Ya, simpan dan ajukan survey</button>
                        </div> --}}
                    {{-- </form> --}}
                    <div class="col d-grid gap-2">
                        <button type="button" class="btn btn-outline-dark" style="font-size: 14px;"
                            data-bs-dismiss="modal">Tidak, simpan sebagai arsip</button>
                    </div>
                    <div class="col d-grid gap-2">
                        <button id="submitBtn" type="submit" class="btn btn-success" style="font-size: 14px;">Ya, simpan dan ajukan survey</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Modal Ajukan survey --}}
</form>
{{-- End Question Form --}}


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

