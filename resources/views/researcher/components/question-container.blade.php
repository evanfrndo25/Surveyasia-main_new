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
                    <h5 style="color: #00000099; font-size:24px;">Judul Survey</h5>
                </div>
            </div>
          </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col">
        <div class="card">
        
            
            
            <div class="container mt-4">
            <form>
                <label for="" style="font-size:18px; color: #00000099;">Deskripsi</label>
                <div class="mb-3 mt-3">
                  <textarea type="text" class="form-control" style="width: 100%; height:111px;"></textarea>
                </div>
                <div class="text-end">
                <button type="submit" class="btn btn-primary ms-auto"><i class="bi bi-pencil" style="font-size: 12px; weight:500;"></i>
                    Edit</button>
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
<form action="{{ route('researcher.surveys.storeQuestions', $survey->id) }}" method="post" id="formSurveyQuestion" class="mb-5">
    @csrf
    <input type="hidden" name="survey_id" value="{{ $survey->id }}">
    <div class="mt-3" id="questions_container">
    </div>
    <div class="row">
        <div class="col-auto mx-auto border text-center" style="width: 50%; margin-top: 20px; font-size: 20px; padding:  20px;">
            <div id="submitBtn" class="disabled fade">
               <button id="btnAddPart" data-bs-toggle="modal" data-bs-target="#partComponentModal" class="btn btn-md btn1 "><i class="bi bi-list" class="btn btn-sm " ></i> Tambahkan Bagian</button>
              <button class="btn btn-md btn2 "><i class="bi bi-eye" class="btn btn-sm "></i> Pratinjau</button>
              <button class="btn btn-md btn3 "><i class="bi bi-save" class="btn btn-sm " id="submitBtn" type="submit"></i> Simpan </button>
             </div>
        </div>
    </div>

</form>
{{-- End Question Form --}}

<style>
    .btn1:hover{
        background-color: #F2F2F2;
    }
    .btn2:hover{
        background-color: #F2F2F2;
    }
    .btn3:hover{
        background-color: #F2F2F2;
    }
</style>
