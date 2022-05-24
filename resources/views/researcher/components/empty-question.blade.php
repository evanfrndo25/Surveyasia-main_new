{{-- Empty question --}}

<div class="row mb-3 text-center">


    <div class="col-auto mx-auto border-orange text-center" style="display:inline; margin-top: 20px; padding:5px 10px; font-size: 20px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 5px;"> 
        {{-- <div> --}}
            <button id="btnAddQuestion" data-bs-toggle="modal" data-bs-target="#questionComponentModal"
                data-toggle="tooltip" data-placement="bottom" title="Tambahkan pertanyaan"
                class="btn btn1 fs-4 text-orange"><i class="fal fa-plus"></i></button>
            <button id="btnAddPart" data-bs-toggle="modal" data-bs-target="#partComponentModal" 
                data-toggle="tooltip" data-placement="bottom" title="Tambahkan bagian"
                class="btn btn1 fs-4 text-orange"><i class="bi bi-list"></i></button>
            <button data-toggle="tooltip" data-placement="bottom" title="Pratinjau"
                class="btn btn1 fs-4 text-orange"><i class="bi bi-eye"></i></button>
            {{--<button data-toggle="tooltip" data-placement="bottom" title="Simpan"
                class="btn btn1 fs-4 text-orange"><i class="fal fa-save"></i></button>--}}
        {{-- </div> --}}
    </div>



</div>

{{-- Empty question --}}


<!-- add new part modal -->


<style>
    button {
        border: none;
        background: #ffffff;
        font-size: 13px;
    }
</style>