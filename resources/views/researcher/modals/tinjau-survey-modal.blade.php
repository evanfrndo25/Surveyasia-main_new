<!-- Modal Survey Sedang Di Tinjau-->
<div class="modal fade" id="tinjauSurveyModal" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <div class="row justify-content-center text-center">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col py-3">
                                <img src="{{ asset('assets/img/Danger-Circle.png') }}" alt="Icon Danger"
                                    class="img-fluid" width="160">
                                    <i class="far fa-file-search"></i>
                            </div>
                        </div>
                        <div class="row">
                            <p class="fs-36px fw-bold">Survey Anda sedang ditinjau oleh tim kami hingga 1-2 hari kedepan</p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col py-3">
                                <a href="{{ route('researcher.dashboard') }}" class="btn btn-orange">Kembali ke Beranda</a>

                                {{-- <a href="{{ route('researcher.surveys.delete', $survey->id) }}">
                                    <button type="button" class="btn btn-orange">Ya</button>
                                </a> --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>