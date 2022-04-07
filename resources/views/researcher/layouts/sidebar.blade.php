{{-- Sidebar --}}
<section class="sidebar-create-survey" id="sidebar-create-survey">
    <div class="row">

        {{-- Sidebar Navigation --}}
        <div class="col-md-1 col-sm-3 col-xs-3 text-center">
            <a class="link-dark text-decoration-none" data-bs-toggle="collapse" href="#collapseStyle" role="button" aria-expanded="false"
                aria-controls="collapseStyle">
                <div class="row border pt-3">
                    <div class="col">
                        <i class="fas fa-brush fa-fw"></i>
                        <p>Tampilan</p>
                    </div>
                </div>
            </a>
            <a class="link-dark text-decoration-none" data-bs-toggle="collapse" href="#collapseQuestion" role="button" aria-expanded="false"
                aria-controls="collapseQuestion">
                <div class="row border pt-3 sidebar-survey">
                    <div class="col">
                        <i class="fas fa-database fa-fw"></i>
                        <p>Bank Pertanyaan</p>
                    </div>
                </div>
            </a>
            <a class="link-dark text-decoration-none" data-bs-toggle="collapse" href="#collapsePaid" role="button" aria-expanded="false"
                aria-controls="collapsePaid">
                <div class="row border pt-3">
                    <div class="col">
                        <i class="fas fa-dollar-sign fa-fw"></i>
                        <p>Bayar</p>
                    </div>
                </div>
            </a>
        </div>
        {{-- End Sidebar Navigation --}}

        {{-- Style Setting --}}
        <div class="col-2 col-md-3" style="background-color: #f4f4f4;">
            <div class="row">
                <div class="col" style="background-color: #f4f4f4;">
                    <div class="collapse show" id="collapseStyle">
                        <div class="row border bg-white pt-3 pb-2">
                            <div class="col-9">
                                <h6 class="fw-bold">Tampilan</h6>
                            </div>
                            <div class="col text-end">
                                <i class="fas fa-question-circle fa-fw text-secondary"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 text-center border p-3">
                                <input type="file" name="uploadLogo" id="uploadLogo" hidden>
                                <label for="uploadLogo" style="cursor: pointer;">
                                    <h6>Logo</h6>
                                    <img src="/assets/img/style_logo.png" alt="Logo">
                                </label>
                            </div>
                            <div class="col-md-6 text-center border p-3">
                                <a href="#" class="link-dark text-decoration-none">
                                    <h6>Tata letak</h6>
                                    <img src="/assets/img/style_layout.png" alt="Layout">
                                </a>
                            </div>
                            <div class="col-md-6 text-center border p-3">
                                <a href="#" class="link-dark text-decoration-none">
                                    <h6>Huruf</h6>
                                    <h1>Aa</h1>
                                </a>
                            </div>
                            <div class="col-md-6 text-center border p-3">
                                <input type="file" name="uploadBackground" id="uploadBackground" hidden>
                                <label for="uploadBackground" style="cursor: pointer;">
                                    <h6>Latar Belakang</h6>
                                    <img src="/assets/img/style_background.png" alt="Logo">
                                </label>
                            </div>
                            <div class="col-md-6 text-center border p-3">
                                <h6>Warna</h6>
                                <div class="d-flex justify-content-center">
                                    <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#1a94cd"
                                        title="Choose your color">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-3">
                <div class="col" style="background-color: #f4f4f4;">
                    <div class="collapse" id="collapseQuestion">
                        <div class="row border bg-white pt-3 pb-2">
                            <div class="col-9">
                                <h6 class="fw-bold">Question Bank</h6>
                            </div>
                            <div class="col text-end">
                                <i class="fas fa-question-circle fa-fw text-secondary"></i>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <form>
                                    <div class="input-group">
                                        <input class="form-control" type="search" placeholder="Search for Questions" aria-label="Cari Judul Survey"
                                            aria-describedby="btnNavbarSearch" />
                                        <button class="btn btn-light text-light" id="btnNavbarSearch" type="button"><i
                                                class="fas fa-search fa-fw text-secondary"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="accordion accordion-flush" id="questionBankContainer">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col" style="background-color: #f4f4f4;">
                    <div class="collapse" id="collapsePaid">
                        <div class="row border bg-white pt-3 pb-2">
                            <div class="col-9">
                                <h6 class="fw-bold">Fitur Berbayar</h6>
                            </div>
                            <div class="col text-end">
                                <i class="fas fa-question-circle fa-fw text-secondary"></i>
                            </div>
                        </div>
                        <div class="text-center">
                            <p class="mt-3">Keranjang</p>
                            <hr>
                            <img src="/assets/img/ic_empty_cart.svg" alt="Empty Cart">
                            <p class="text-muted mt-3">Anda belum membeli fitur berbayar</p>
                            <hr>
                            <p>Upgrade akunmu menjadi paket membership</p>
                            <img src="/assets/img/upgrade_account.png" alt="Upgrade Account">
                            <p class="mt-3">Anda menggunakan paket BASIC, tetapi
                                Anda dapat mencoba fitur berbayar saat membuat
                                survei.</p>
                            <ul class="text-start">
                                <li>Fitur berbayar yang Anda tambahkan tercantum di sini</li>
                                <li>Tingkatkan paket Anda (atau klik EDIT untuk menghapus fitur
                                    berbayar) sebelum</li>
                            </ul>
                            <a class="btn btn-orange text-white text-center mb-3" href="/researcher/pricing" role="button" data-bs-toggle="modal"
                                data-bs-target="#pricingModal">Lihat
                                Member</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Style --}}

        {{-- Question Container --}}
        <div class="col-9 col-md-8 py-3">

            <div class="row">
                {{-- questions --}}
                @include('researcher.components.question-container')
            </div>
        </div>
        {{-- End Question Container --}}
    </div>
</section>
{{-- Sidebar --}}
