{{-- Sidebar --}}
<section class="sidebar-create-survey" id="sidebar-create-survey">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">

    <style>
        .galeri-img:hover {
            border: 5px solid #EF4C29;
            border-radius: 5px;
        }

        .dropify-wrapper {
            border: 2px #EF4C29 dashed;
            background-color: rgba(239, 76, 41, 0.1);
            height: 400px;
        }

        /* .dropify-font-upload:before, .dropify-wrapper .dropify-message span.file-icon:before{
            font: normal normal normal 14px/1 FontAwesome;
            content: "\f0ee";
            font-size: 60px;
            color: linear-gradient(rgba(239, 76, 41, 0.61), rgba(255, 181, 54, 0.61));
            background-image: url('/assets/img/style_logo.png');
            
        } */
        .dropify-wrapper .dropify-message p {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 20px;
            letter-spacing: 1px;
            color: rgba(0, 0, 0, 0.7);
        }

    </style>

    <div class="row">

        {{-- Sidebar Navigation --}}
        <div class="col-md-1 col-sm-3 col-xs-3 text-center">
            <a class="link-dark text-decoration-none" data-bs-toggle="collapse" href="#collapseStyle" role="button"
                aria-expanded="false" aria-controls="collapseStyle">
                <div class="row border pt-3">
                    <div class="col">
                        <i class="fas fa-brush fa-fw"></i>
                        <p>Tampilan</p>
                    </div>
                </div>
            </a>
            <a class="link-dark text-decoration-none" data-bs-toggle="collapse" href="#collapseQuestion" role="button"
                aria-expanded="false" aria-controls="collapseQuestion">
                <div class="row border pt-3 sidebar-survey">
                    <div class="col">
                        <i class="fas fa-database fa-fw"></i>
                        <p>Bank Pertanyaan</p>
                    </div>
                </div>
            </a>
            <a class="link-dark text-decoration-none" data-bs-toggle="collapse" href="#collapsePaid" role="button"
                aria-expanded="false" aria-controls="collapsePaid">
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
                                {{-- <input type="file" name="uploadLogo" id="uploadLogo" hidden> --}}
                                <label for="" data-bs-toggle="modal" data-bs-target="#uploadLogoModal"
                                    style="cursor: pointer;">
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
<<<<<<< HEAD
                                <!-- <input type="file" id='getval' name="img"
                                onchange="readURL(event)" hidden> -->
                                <label for="" data-bs-toggle="modal" data-bs-target="#optionBackgroundModal"
                                    style="cursor: pointer;">
=======
                                {{-- <input type="file" name="uploadBackground" id="uploadBackground" hidden> --}}
                                <label for="" data-bs-toggle="modal" data-bs-target="#optionBackgroundModal" style="cursor: pointer;">
>>>>>>> fd145867f2f37dfbd50f466ca44112c04f51d29b
                                    <h6>Latar Belakang</h6>
                                    <img src="/assets/img/style_logo.png" alt="Latar Belakang">
                                </label>
                                <!-- <label for="getval" style="cursor: pointer;">
                                    <h6>Latar Belakang</h6>
                                    <img src="/assets/img/style_background.png" alt="Logo">
                                </label> -->
                            </div>
                            <div class="col-md-6 text-center border p-3">
                                <h6>Warna</h6>
                                <div class="d-flex justify-content-center">
                                    <input type="color" class="form-control form-control-color" id="exampleColorInput"
                                        value="#1a94cd" title="Choose your color">
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
                                        <input class="form-control" type="search" placeholder="Search for Questions"
                                            aria-label="Cari Judul Survey" aria-describedby="btnNavbarSearch" />
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
                            <a class="btn btn-orange text-white text-center mb-3" href="/researcher/pricing"
                                role="button" data-bs-toggle="modal" data-bs-target="#pricingModal">Lihat
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

    {{-- Modal upload background --}}
    <div class="modal fade" id="optionBackgroundModal" aria-labelledby="optionBackgroundModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-fullscreen-xl-down modal-dialog-scrollable">
            <div class="modal-content" style="overflow-y: scroll;">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Tambah Latar Belakang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
<<<<<<< HEAD
                <form action="{{ route('researcher.surveys.update', $survey->id) }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link text-dark border-0 active" id="galeri-tab"
                                                data-bs-toggle="tab" data-bs-target="#galeri" type="button" role="tab"
                                                aria-controls="galeri" aria-selected="true">Galeri</button>
                                            <button class="nav-link text-dark border-0" id="upload-tab"
                                                data-bs-toggle="tab" data-bs-target="#upload" type="button" role="tab"
                                                aria-controls="upload" aria-selected="false">Unggah</button>
                                        </div>
                                    </nav>
                                    <div class="tab-content">
                                        <div class="tab-pane fade pt-3 show active" id="galeri" role="tabpanel"
                                            aria-labelledby="galeri-tab">
                                            <div class="row mb-3">
                                                <div class="col-md-3">
                                                    <img src="{{ asset('assets/img/Get lost in the forrest_ 1.png') }}"
                                                        class="galeri-img" alt="">
                                                </div>
                                                <div class="col-md-3">
                                                    <img src="{{ asset('assets/img/Get lost in the forrest_ 1.png') }}"
                                                        class="galeri-img" alt="">
                                                </div>
                                                <div class="col-md-3">
                                                    <img src="{{ asset('assets/img/Get lost in the forrest_ 1.png') }}"
                                                        class="galeri-img" alt="">
                                                </div>
                                                <div class="col-md-3">
                                                    <img src="{{ asset('assets/img/Get lost in the forrest_ 1.png') }}"
                                                        class="galeri-img" alt="">
                                                </div>
=======
                <form action="{{ route('researcher.surveys.updateBackground', $survey->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link text-dark border-0 active" id="galeri-tab" data-bs-toggle="tab"
                                            data-bs-target="#galeri" type="button" role="tab" aria-controls="galeri"
                                            aria-selected="true">Galeri</button>
                                        <button class="nav-link text-dark border-0" id="upload-tab" data-bs-toggle="tab"
                                            data-bs-target="#upload" type="button" role="tab" aria-controls="upload"
                                            aria-selected="false">Unggah</button>
                                    </div>
                                </nav>

                                <div class="tab-content">
                                    <div class="tab-pane fade pt-3 show active" id="galeri" role="tabpanel" aria-labelledby="galeri-tab">
                                        <div class="row mb-3">
                                            <div class="col-md-3">
                                                <img src="{{ asset('assets/img/Get lost in the forrest_ 1.png') }}" class="galeri-img" alt="">
                                            </div>
                                            <div class="col-md-3">
                                                <img src="{{ asset('assets/img/Get lost in the forrest_ 1.png') }}" class="galeri-img" alt="">
                                            </div>
                                            <div class="col-md-3">
                                                <img src="{{ asset('assets/img/Get lost in the forrest_ 1.png') }}" class="galeri-img" alt="">
                                            </div>
                                            <div class="col-md-3">
                                                <img src="{{ asset('assets/img/Get lost in the forrest_ 1.png') }}" class="galeri-img" alt="">
>>>>>>> fd145867f2f37dfbd50f466ca44112c04f51d29b
                                            </div>
                                        </div>

<<<<<<< HEAD
                                        <div class="tab-pane fade pt-3" id="upload" role="tabpanel"
                                            aria-labelledby="upload-tab">
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <input type="file" id='getval' name="img" onchange="readURL(event)"
                                                        hidden>
                                                    <input type="file" id="getval" name="getval" class="dropify_0"
                                                        required data-allowed-file-extensions="jpg png jpeg"
                                                        data-max-file-size="5M" data-default-file=""
                                                        onchange="readURL(event)" />
                                                    <p class="fs-14px text-danger mt-1">JPG, PNG atau GIF, ukuran file
                                                        maksimal 5 MB*</p>
                                                    {{-- <input type="file" name="getval" id="getval"> --}}
                                                </div>
=======
                                    <div class="tab-pane fade pt-3" id="upload" role="tabpanel" aria-labelledby="upload-tab">
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <input type="file" id="uploadBackground" name="background" class="dropify_0" />
                                                {{-- <input type="file" id="uploadBackground" name="background" class="dropify_0" required data-allowed-file-extensions="jpg png jpeg" data-max-file-size="5M" data-default-file=""/> --}}
                                                <p class="fs-14px text-danger mt-1">JPG, PNG atau GIF, ukuran file maksimal 500Kb*</p>
                                                {{-- <input type="file" name="uploadBackground" id="uploadBackground"> --}}
>>>>>>> fd145867f2f37dfbd50f466ca44112c04f51d29b
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <form action="{{ route('researcher.surveys.update', $survey->id) }}" method="POST">
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
                                            <textarea class="my-editor form-control" id="my-editor" rows="10"
                                                name="description"
                                                value="{{ $survey->description }}">{{ $survey->description  }}</textarea>
                                            <!-- <textarea type="text" name="description" value="{{ $survey->description }}"
                                                class="form-control"
                                                style="width: 100%; height:111px;"> {{ $survey->description }}</textarea> -->
                                        </div>
                                    </div>

                                </div>
                                <div class="card">
                                    <div class="container mt-4">
                                        <label for="" style="font-size:18px; color: #00000099;">Pesan Penutup</label>
                                        <div class="mb-3 mt-3">
                                            <!-- <textarea type="text" name="closing" value="{{ $survey->closing }}"
                                                class="form-control"
                                                style="width: 100%; height:111px;"> {{ $survey->closing }}</textarea> -->
                                            <textarea class="my-editor1 form-control" id="my-editor1" rows="10"
                                                name="closing"
                                                value="{{ $survey->closing }}">{{ $survey->closing  }}</textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="text-end mt-3">
                                    <button type="button" class="btn btn-gray me-2" data-bs-dismiss="modal">
                                        Batal
                                    </button>
                                    <button type="submit" class="btn btn-save ms-auto">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </div>
                </form> --}}
            </div>
            <div class="modal-footer">
                <div class="row mb-3">
                    <div class="col">
                        <div class="container">
                            <div class="text-end">
                                <button type="button" class="btn btn-gray me-2" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-orange ms-auto">
                                    Terapkan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    {{-- End Modal Upload Background --}}


    {{-- Modal Upload Logo --}}
    <div class="modal fade" id="uploadLogoModal" aria-labelledby="uploadLogoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-fullscreen-xl-down modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Tambah Logo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
<<<<<<< HEAD
                <form action="{{ route('researcher.surveys.updateLogo', $survey->id) }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="file" id="uploadLogo" name="logo" class="dropify_0" required
                                        data-allowed-file-extensions="jpg png jpeg" data-max-file-size="500k"
                                        data-default-file="" />
                                    <p class="fs-14px text-danger mt-1">JPG, PNG atau GIF, ukuran file maksimal 5 MB*
                                    </p>
                                </div>
=======
                <form action="{{ route('researcher.surveys.updateLogo', $survey->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="file" id="uploadLogo" name="logo" class="dropify_0" />
                                {{-- <input type="file" id="uploadLogo" name="logo" class="dropify_0" required data-allowed-file-extensions="jpg png jpeg" data-max-file-size="500k" data-default-file=""/> --}}
                                <p class="fs-14px text-danger mt-1">JPG, PNG atau GIF, ukuran file maksimal 5 MB*</p>
                                
>>>>>>> fd145867f2f37dfbd50f466ca44112c04f51d29b
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <div class="row mb-3">
                            <div class="col">
                                <div class="container">
                                    <div class="text-end">
                                        <button type="button" class="btn btn-gray me-2"
                                            data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-orange ms-auto">
                                            Terapkan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- End Modal Upload Logo --}}


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" charset="utf-8"></script>
    <script>
        // upload image
        $('.dropify_0').dropify({

            messages: {
                default: 'Pilih atau tarik file ke sini',
            }

        });

    </script>
</section>
{{-- Sidebar --}}
