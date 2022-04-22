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
                                            <small class="card-text">Tambahkan kolom teks ketika anda ingin
                                            responden menuliskan jawaban yang mereka
                                            inginkan dalam bentuk kalimat pendek atau
                                            panjang.

                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card" id="addDropdown">
                                        <div class="card-body">
                                            <img class="card-img-top" src="{{ asset('assets/img/dropdownprot.png') }}" alt="Coming Soon">
                                            <p class="card-title fs-6 mt-4">Drop-down</p>
                                            <small class="card-text">Tambahkan dropdown ketika anda ingin
                                            memunculkan daftar menu dimana responden
                                            dapat memilih dari salah satu menu yang anda
                                            sediakan.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card" id="addFileUpload">
                                        <div class="card-body">
                                            <img class="card-img-top" src="{{ asset('assets/img/fileuploadprot.png') }}" alt="Coming Soon">
                                            <p class="card-title mt-4">Upload File</p>
                                            <small class="card-text">Responden dapat mengupload file dengan
                                            format (pdf, docx, xls, jpg, png, webp) untuk
                                            dibagikan kepada anda.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card  m-1" id="addScale">
                                        <div class="card-body">
                                            <img class="card-img-top" src="{{ asset('assets/img/scaleprot.png') }}" alt="Coming Soon">
                                            <p class="card-title mt-4">Skala</p>
                                            <small class="card-text">Gunakan skala untuk mengetahui tingkat
                                            persetujuan atau tidak dari responden atas
                                            suatu hal dengan tingkatan yang bebas anda
                                            tentukan.
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card" id="addMultipleChoice">
                                        <div class="card-body">
                                            <img class="card-img-top" src="{{ asset('assets/img/multipleprot.png') }}" alt="Coming Soon">
                                            <p class="card-title mt-4">Pilihan Ganda</p>
                                            <small class="card-text">Opsi untuk mengajukan pertanyaan dengan
                                            jawaban benar yang telah anda tentukan
                                            sebelumnya dari beberapa pilihan yang ada
                                            (biasanya A, B, C, D, E). </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card  m-1" id="addMultiOptions">
                                        <div class="card-body">
                                            <img class="card-img-top" src="{{ asset('assets/img/checkboxprot.png') }}" alt="Coming Soon">
                                            <p class="card-title mt-4">Kotak Centang</p>
                                            <small class="card-text">Gunakan fitur ini ketika anda ingin responden
                                            bisa mencentang lebih dari satu pilihan dari
                                            beberapa pilihan yang anda sediakan.
                                            </small>
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
                                            <small class="card-text">Tambahkan kolom teks ketika anda ingin
responden menuliskan jawaban yang mereka
inginkan dalam bentuk kalimat pendek atau
panjang.
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card" id="addDropdown">
                                        <div class="card-body">
                                            <img class="card-img-top" src="{{ asset('assets/img/dropdownprot.png') }}" alt="Coming Soon">
                                            <p class="card-title fs-6 mt-4">Drop-down</p>
                                            <small class="card-text">Tambahkan dropdown ketika anda ingin
                                            memunculkan daftar menu dimana responden
                                            dapat memilih dari salah satu menu yang anda
                                            sediakan.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card" id="addFileUpload">
                                        <div class="card-body">
                                            <img class="card-img-top" src="{{ asset('assets/img/fileuploadprot.png') }}" alt="Coming Soon">
                                            <p class="card-title mt-4">Upload File</p>
                                            <small class="card-text">Responden dapat mengupload file dengan
                                            format (pdf, docx, xls, jpg, png, webp) untuk
                                            dibagikan kepada anda.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card  m-1" id="addScale">
                                        <div class="card-body">
                                            <img class="card-img-top" src="{{ asset('assets/img/scaleprot.png') }}" alt="Coming Soon">
                                            <p class="card-title mt-4">Skala</p>
                                            <small class="card-text">Gunakan skala untuk mengetahui tingkat
                                            persetujuan atau tidak dari responden atas
                                            suatu hal dengan tingkatan yang bebas anda
                                            tentukan.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card" id="addMultipleChoice">
                                        <div class="card-body">
                                            <img class="card-img-top" src="{{ asset('assets/img/multipleprot.png') }}" alt="Coming Soon">
                                            <p class="card-title mt-4">Pilihan Ganda</p>
                                            <small class="card-text">Opsi untuk mengajukan pertanyaan dengan
                                            jawaban benar yang telah anda tentukan
                                            sebelumnya dari beberapa pilihan yang ada
                                            (biasanya A, B, C, D, E).</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card  m-1" id="addMultiOptions">
                                        <div class="card-body">
                                            <img class="card-img-top" src="{{ asset('assets/img/checkboxprot.png') }}" alt="Coming Soon">
                                            <p class="card-title mt-4">Kotak Centak</p>
                                            <small class="card-text">Gunakan fitur ini ketika anda ingin responden
                                            bisa mencentang lebih dari satu pilihan dari
                                            beberapa pilihan yang anda sediakan.</small>
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

