<div class="modal" tabindex="-1" id="questionComponentModal">
    <div class="modal-dialog modal-dialog-scrollable modal-xl modal-fullscreen-lg-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Pertanyaan Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <h6 class="mb-3">Pilih Jenis Pertanyaan</h6>
                        <div id="customQuestions">
                            <div class="row">
                                <div class="col-2">
                                    <div class="card" id="addTextbox">
                                        <div class="card-body">
                                            <img class="card-img-top" src="{{ asset('assets/img/textboxprot.png') }}" alt="Coming Soon">
                                            <p class="card-title fs-6 mt-4">Kotak Teks</p>
                                            <small class="card-text">Lorem ipsum dolor sit amet
                                                consectetur.
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card" id="addDropdown">
                                        <div class="card-body">
                                            <img class="card-img-top" src="{{ asset('assets/img/dropdownprot.png') }}" alt="Coming Soon">
                                            <p class="card-title fs-6 mt-4">Drop-down</p>
                                            <small class="card-text">Lorem ipsum dolor sit amet
                                                consectetur.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card" id="addFileUpload">
                                        <div class="card-body">
                                            <img class="card-img-top" src="{{ asset('assets/img/fileuploadprot.png') }}" alt="Coming Soon">
                                            <p class="card-title mt-4">Upload File</p>
                                            <small class="card-text">Lorem ipsum dolor sit amet
                                                consectetur.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card  m-1" id="addScale">
                                        <div class="card-body">
                                            <img class="card-img-top" src="{{ asset('assets/img/scaleprot.png') }}" alt="Coming Soon">
                                            <p class="card-title mt-4">Skala</p>
                                            <small class="card-text">Lorem ipsum dolor sit amet
                                                consectetur.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card" id="addMultipleChoice">
                                        <div class="card-body">
                                            <img class="card-img-top" src="{{ asset('assets/img/multipleprot.png') }}" alt="Coming Soon">
                                            <p class="card-title mt-4">Pilihan Ganda</p>
                                            <small class="card-text">Lorem ipsum dolor sit amet
                                                consectetur. </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card  m-1" id="addMultiOptions">
                                        <div class="card-body">
                                            <img class="card-img-top" src="{{ asset('assets/img/checkboxprot.png') }}" alt="Coming Soon">
                                            <p class="card-title mt-4">Kotak Centang</p>
                                            <small class="card-text">Lorem ipsum dolor sit amet
                                                consectetur.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
    
</div>



<!-- add new part modal -->
<div class="modal" tabindex="-1" id="partComponentModal">
    <div class="modal-dialog modal-dialog-scrollable modal-xl modal-fullscreen-lg-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Bagian Pertanyaan Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <h6 class="mb-3">Kotak Teks</h6>
                        <div id="customQuestions">
                            <div class="row">
                                <div class="col-2">
                                    <div class="card" id="addTextbox">
                                        <div class="card-body">
                                            <img class="card-img-top" src="{{ asset('assets/img/textboxprot.png') }}" alt="Coming Soon">
                                            <p class="card-title fs-6 mt-4">Textbox</p>
                                            <small class="card-text">Lorem ipsum dolor sit amet
                                                consectetur.
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card" id="addDropdown">
                                        <div class="card-body">
                                            <img class="card-img-top" src="{{ asset('assets/img/dropdownprot.png') }}" alt="Coming Soon">
                                            <p class="card-title fs-6 mt-4">Drop-down</p>
                                            <small class="card-text">Lorem ipsum dolor sit amet
                                                consectetur.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card" id="addFileUpload">
                                        <div class="card-body">
                                            <img class="card-img-top" src="{{ asset('assets/img/fileuploadprot.png') }}" alt="Coming Soon">
                                            <p class="card-title mt-4">Upload File</p>
                                            <small class="card-text">Lorem ipsum dolor sit amet
                                                consectetur.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card  m-1" id="addScale">
                                        <div class="card-body">
                                            <img class="card-img-top" src="{{ asset('assets/img/scaleprot.png') }}" alt="Coming Soon">
                                            <p class="card-title mt-4">Skala</p>
                                            <small class="card-text">Lorem ipsum dolor sit amet
                                                consectetur.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card" id="addMultipleChoice">
                                        <div class="card-body">
                                            <img class="card-img-top" src="{{ asset('assets/img/multipleprot.png') }}" alt="Coming Soon">
                                            <p class="card-title mt-4">Pilihan Ganda</p>
                                            <small class="card-text">Lorem ipsum dolor sit amet
                                                consectetur. </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card  m-1" id="addMultiOptions">
                                        <div class="card-body">
                                            <img class="card-img-top" src="{{ asset('assets/img/checkboxprot.png') }}" alt="Coming Soon">
                                            <p class="card-title mt-4">Kotak Centak</p>
                                            <small class="card-text">Lorem ipsum dolor sit amet
                                                consectetur.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

