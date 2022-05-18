<style>
    .btn-modal {
        color: #ef4c29;
        background-color: #F2F2F2;
        border: solid #ef4c29 1px;
    }

    .btn-modal:hover {
      background-color: #ef4c29;
      color: #F2F2F2;
    }

    .color-modal {
        color: #ef4c29;
    }
</style>

<!-- Modal Tolak -->
<div class="modal hide fade in" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body pt-5 pb-4">
                <div class="text-center">
                    <img src="{{ asset('assets/img/survey ditolak.svg') }}" width="100px" alt="">
                    <p class="pt-4">
                        Maaf, survey <span class="fw-bold">{{ $survey->title }}</span> ditolak karena melanggar aturan kami yaitu
                        <span class="fw-bold">{{ $survey->reason_deny }}</span>. Anda dapat mengedit kembali survey Anda dan
                        menunggu persetujuan dari tim kami.
                    </p>
                </div>
            </div>
            <div class="text-center pb-4">
                <a href="/researcher/surveys" class="btn btn-modal py-2 px-3">Kembali ke Beranda</a>
                <a href="{{ route('researcher.surveys.manage', $survey->id) }}" class="btn btn-modal py-2 px-3">Edit Survey</a>
            </div>
        </div>
    </div>
</div>
<!-- Modal Tolak Akhir -->