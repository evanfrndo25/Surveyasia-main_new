{{-- Empty question --}}
<div class="card mb-3 text-center">
    <div class="card-body">
        <img class="img-fluid" height="450" width="150" src="{{ asset('assets/img/nodata.png') }}" alt="No question available">
        <h4 class="card-title">Tidak ada pertanyaan</h4>
        <p class="card-text">silahkan buat pertanyaan terlebih dahulu
        </p>
        <button type="button" id="btnAddQuestion" data-bs-toggle="modal" data-bs-target="#questionComponentModal"
            class="btn btn-sm btn-default text-white">Buat
            Pertanyaan</button>
    </div>
</div>
