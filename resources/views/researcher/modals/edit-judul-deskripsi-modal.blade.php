<div class="modal fade" id="editJudulModal" aria-labelledby="editJudulModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-fullscreen-xl-down modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editJudulLabel">Edit Judul & Deskripsi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('researcher.surveys.update', $survey->id) }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="container">
                                        <input type="text" name="title" class="form-control border-0"
                                            value="{{ $survey->title }}"
                                            style="color: #00000099; font-size:24px;"></input>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="card mb-3">
                                <div class="container mt-4">
                                    <label for="" style="font-size:18px; color: #00000099;">Deskripsi</label>
                                    <div class="mb-3 mt-3">
                                        <textarea type="text" name="description" value="{{ $survey->description }}"
                                            class="form-control"
                                            style="width: 100%; height:111px;"> {{ $survey->description }}</textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="card">
                                <div class="container mt-4">
                                    <label for="" style="font-size:18px; color: #00000099;">Pesan Penutup</label>
                                    <div class="mb-3 mt-3">
                                        <textarea type="text" name="closing" value="{{ $survey->closing }}"
                                            class="form-control"
                                            style="width: 100%; height:111px;"> {{ $survey->closing }}</textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary ms-auto"><i class="bi bi-save"
                                        style="font-size: 12px;"></i>
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
