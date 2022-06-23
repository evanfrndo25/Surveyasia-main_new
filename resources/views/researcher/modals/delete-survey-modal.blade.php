<!-- Modal Delete Survey-->
<div class="modal fade" id="deleteSurveyModal{{ $survey->id }}" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <div class="row justify-content-center text-center">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col py-3">
                                <img src="{{ asset('assets/img/Danger-Circle.png') }}" alt="Icon Danger"
                                    class="img-fluid" width="160">
                            </div>
                        </div>
                        <div class="row">
                            <p class="text-delete">Hapus Survey</p>
                            <p class="text-desc-delete">Survey ini akan dihapus secara permanen dari daftar survey Anda <br> dan tidak dapat dikembalikan lagi. Apakah Anda yakin ingin <br> menghapus survey ini?</p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col py-3">
                                <form action="{{ route('researcher.surveys.delete', $survey->id) }}" method="post">
                                    <button type="button" class="btn btn-gray me-2"
                                        data-bs-dismiss="modal">Batal</button>


                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-save">Ya</button>

                                </form>

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