<style>
    .btn-modal {
        color: #F2F2F2;
        background-color: #ef4c29;
        transition: 0.3s;
    }

    .btn-modal:hover {
      border: solid #ef4c29 1px !important;
      background-color: #F2F2F2 !important;
      color: #ef4c29 !important;
    }

    .color-modal {
        color: #ef4c29;
    }

</style>

<!-- Modal Pending -->
<div class="modal hide fade in" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body pt-5 pb-4">
                <div class="text-center">
                    <img src="{{ asset('assets/img/fontisto_preview.svg') }}" width="120px" alt="">
                    <p class="pt-3" style="font-size: 1.2em;">
                        <b>Survey sedang Ditinjau</b>
                    </p>
                    <p>
                        Survey anda sedang ditinjau oleh tim kami hingga 1-2 hari kedepan. Tautan dapat diakses setelah
                        mendapatkan persetujuan dari tim kami.
                    </p>
                </div>
            </div>
            <div class="text-center pb-4">
                <a href="/researcher/surveys" class="btn btn-modal py-2 px-3">Kembali ke Beranda</a>
            </div>
        </div>
    </div>
</div>
<!-- Modal Akhir Pending -->