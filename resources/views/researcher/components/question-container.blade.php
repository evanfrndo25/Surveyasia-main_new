{{-- Loading Spinner --}}
<div class="container">
    <div class="row text-center" id="spinner">
        <div class="d-flex justify-content-center mt-5">
            <div class="lds-dual-ring"></div>
        </div>
        <h5 class="mt-3">Memuat konfigurasi....</h5>
    </div>
</div>
{{-- Alert --}}
<div class="alert alert-info alert-dismissible visually-hidden" role="alert" id="minQuestionAlert">
    Buat minimal 3 pertanyaan untuk disimpan
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@if ($survey->background == null )
<div class="col px-5 py-3 bg-white">
    <nav>
        <div class="nav nav-tabs bg-white" id="nav-tab" role="tablist">
            <button class="nav-link bg-transparent text-dark border-0 active" id="umum-tab" data-bs-toggle="tab"
                data-bs-target="#umum" type="button" role="tab" aria-controls="umum" aria-selected="true">Umum</button>
            <button class="nav-link bg-transparent text-dark border-0" id="pertanyaan-tab" data-bs-toggle="tab"
                data-bs-target="#pertanyaan" type="button" role="tab" aria-controls="pertanyaan"
                aria-selected="false">Pertanyaan</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade pt-3 show active" id="umum" role="tabpanel" aria-labelledby="umum-tab">
            <div class="row mb-3">
                <div class="col">
                    @if ($survey->img_header == null)
                        <div class="">
                            @if ($survey->logo == null)
                            <div></div>
                            @else
                            <img src="{{ asset('storage/' . $survey->logo) }}"
                                value="{{ asset('storage/' . $survey->logo) }}" class="w-25 mb-2" alt="">
                            @endif
                        </div>
                    @else
                        <div class="bg-header">
                            @if ($survey->logo == null)
                            <div></div>
                            @else
                            <img src="{{ asset('storage/' . $survey->logo) }}"
                                value="{{ asset('storage/' . $survey->logo) }}" class="w-25 mb-2" alt="">
                            @endif
                        </div>
                    @endif
                    {{-- @if ($survey->logo == null)
                    <div></div>
                    @else
                    <img src="{{ asset('storage/' . $survey->logo) }}" value="{{ asset('storage/' . $survey->logo) }}"
                        class="w-25 mb-2" alt="">
                    @endif --}}
                    <div class="card">
                        <div class="card-body">
                            <div class="container">
                                <h5 style="color: #00000099; font-size:24px;">{{ $survey->title }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                @include('researcher.modals.edit-judul-deskripsi-modal')
                <div class="col">
                    <div class="card mb-3">
                        <div class="container mt-4">
                            <form>
                                <label for="description" style="font-size:18px; color: #00000099;">Deskripsi</label>
                                <div class="mb-3 mt-3 bg-light py-4 px-2 border border-1">
                                    <p>{!! $survey->description !!}</p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="container mt-4">
                            <form>
                                <label for="" style="font-size:18px; color: #00000099;">Pesan
                                    Penutup</label>
                                <div class="mb-3 mt-3 bg-light py-4 px-2 border border-1">
                                    <p>{!! $survey->closing !!}</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col">
                    <div class="text-center">
                        <button type="button" class="btn border-orange bg-white text-orange px-5 py-2"
                            data-bs-toggle="modal" data-bs-target="#editJudulModal"><i class="fal fa-pen"></i>
                            Edit
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade pt-3" id="pertanyaan" role="tabpanel" aria-labelledby="pertanyaan-tab">
<<<<<<< HEAD
=======
            @if ($survey->logo == null)
            <div></div>
            @else
            <img src="{{ asset('storage/' . $survey->logo) }}"
                value="{{ asset('storage/' . $survey->logo) }}" class="w-25 mb-2" alt="">
            @endif
>>>>>>> 5b5b2db0b956e69d8e8fcaf6f4afc1f60466f29d
            {{-- Question Form --}}
            <form action="{{ route('researcher.surveys.storeQuestions', $survey->id) }}" method="post"
                id="formSurveyQuestion" class="mb-5">
                @csrf
                <div class="alert alert-danger" id="btnAlert" role="alert">
                    Minimal harus 3 pertanyaan!
                </div>
                <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                <div class="mt-3 py-3" id="questions_container">

                </div>

                <div class="row">
                    <div id="groupBtn" class="disabled fade col-auto mx-auto">
                        <div class=" border-orange text-center bg-white"
                            style=" margin-top: 20px; padding:5px 10px; font-size: 20px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 5px;">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pratinjau"
                                data-bs-toggle="modal" data-bs-target="#pratinjauModal"
                                class="btn fs-4 btn2 text-orange"><i class="bi bi-eye"></i>
                            </a>
                            <a href="#" id="btnSave" class="btn fs-4 btn3 text-orange" data-bs-toggle="modal"
                                data-bs-target="#ajukanModal" data-toggle="tooltip" data-placement="bottom"
                                title="Simpan">
                                <i class="fal fa-save"></i>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Modal Ajukan survey --}}
                <div class="modal fade" id="ajukanModal" aria-labelledby="ajukanModalLabel" aria-hidden="true">
                    <div class="modal-dialog" style="max-width: 600px;">
                        <div class="modal-content">
                            <div class="btn ms-auto">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ asset('assets/img/Copy paste 1.png') }}" class="img-fluid" alt="">
                                <h4 class="text-center">Apakah kamu ingin mengajukan survey?</h4>
                                <p class="px-4 small text-center">Anda dapat simpan dan ajukan survey
                                    agar admin
                                    dapat meninjau
                                    survey anda untuk dapat dipublis. Jika hanya ingin mengarsipkan
                                    survey dan
                                    ingin mengubah
                                    kembali survey anda dapat simpan sebagai arsip.</p>
                            </div>
                            <div class="row px-5 pb-5">
                                <div class="col d-grid gap-2">
                                    <button type="button" id="submitDraftBtn" class="btn btn-outline-dark"
                                        style="font-size: 14px;" data-bs-dismiss="modal">
                                        Tidak, simpan sebagai arsip
                                    </button>
                                </div>
                                <div class="col d-grid gap-2">
                                    <button id="submitBtn" type="submit" class="btn btn-success"
                                        style="font-size: 14px;">Ya, simpan
                                        dan ajukan survey</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Modal Ajukan survey --}}
                {{-- Modal Pratinjau Survey --}}
                <div class="modal fade" id="pratinjauModal" aria-labelledby="pratinjauModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Pratinjau</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container shadow p-3 radius-default">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <div>
                                                <h3 class="fw-semibold">{{ $survey->title }}</h3>
                                                <div class="d-flex mt-3">
                                                    @if ($survey->user->avatar == null)
                                                    <img src="{{ asset('assets/img/noimage.png') }}"
                                                        alt="{{ $survey->user->nama_lengkap }}" width="50" height="50"
                                                        class="d-block mb-2 me-3 rounded-pill object-fit-cover">
                                                    @elseif ($survey->user->provider_name != null)
                                                    <img src="{{ $survey->user->avatar }}"
                                                        alt="{{ $survey->user->nama_lengkap }}" width="50" height="50"
                                                        class="d-block mb-2 me-3 rounded-pill object-fit-cover">
                                                    @else
                                                    <img src="{{ asset('storage/' . $survey->user->avatar) }}"
                                                        alt="{{ $survey->user->nama_lengkap }}" width="50" height="50"
                                                        class="d-block mb-2 me-3 rounded-pill object-fit-cover">
                                                    @endif
                                                    <div class="col">
                                                        <h5 class="m-0">
                                                            {{ $survey->user->nama_lengkap }}</h5>
                                                        <p class="text-muted fs-14px m-0">Author</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card border radius-default mt-3">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 col-sm-6 col-md-4 text-center">
                                                    <h6 class="fw-semibold">Estimasi Pengerjaan</h6>
                                                    <p class="text-orange fs-14px"><i class="far fa-clock fa-fw"></i>
                                                        {{ $survey->estimate_completion }} Menit</p>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4 text-center">
                                                    <h6 class="fw-semibold">Jumlah Pertanyaan</h6>
                                                    <p class="text-orange fs-14px">
                                                        {{ $survey->questions->count() }} Pertanyaan</p>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4 text-center">
                                                    <h6 class="fw-semibold">Jumlah Hadiah</h6>
                                                    <p class="text-orange fs-14px">
                                                        Rp{{ $survey->reward_point }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card border radius-default mt-3">
                                        <div class="card-header bg-light-grey">
                                            <h6 class="fw-semibold py-3 m-0">Deskripsi</h6>
                                        </div>
                                        <div class="card-body">
                                            <p class="fs-14px m-0 small"> {!! $survey->description !!}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card border-0 bg-light-orange radius-default mt-3">
                                        <div class="card-body">
                                            <p class="fs-14px m-0"><span class="fw-semibold">*Jawab
                                                    studi dengan
                                                    jujur dan konsisten</span>, agar
                                                kami dapat
                                                memberikan survey yang sesuai dengan kamu kedepannya.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row pt-4 pb-2 mx-1 mb-3">
                                        <a href="#" class="btn btn-orange radius-default text-white"
                                            data-bs-toggle="modal" data-bs-target="#pratinjauModal2">
                                            Mulai
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- End Modal Pratinjau Survey --}}
                {{-- Modal Pratinjau question Survey --}}
                <div class="modal fade" id="pratinjauModal2" aria-labelledby="pratinjauModal2Label" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Pratinjau</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container shadow p-3 radius-default">
                                    <div class="container p-5">
                                        <div class="progress">
                                            <div id="progress" class="progress-bar bg-orange" role="progressbar"
                                                style="width: 0%;" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div> <br>
                                        <div class="card " style="padding: 10px; border: 1px solid #000000">
                                            <div class="card-body">
                                                <div class="row tab-content" id="questionContainer">
                                                    <div class="tab-pane fade show active" id="preQuestion">
                                                        <h5>Question Label</h5>
                                                        <p>question will show up here.....</p>
                                                        <ul class="list-group">
                                                            <p>options ....</p>
                                                            <li class="list-group-item disabled">Option
                                                                A</li>
                                                            <li class="list-group-item disabled">Option
                                                                B</li>
                                                            <li class="list-group-item disabled">Option
                                                                C</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col" id="btnContainer">
                                                <button type="button" class="btn btn-outline-orange" id="prevBtn"><i
                                                        class="bi bi-chevron-left"></i>
                                                    Sebelumnya</button>
                                            </div>
                                            <div class="col text-end" id="btnContainer btn-last">
                                                <button type="button" class="btn btn-orange text-white"
                                                    id="nextBtn">Berikutnya <i class="bi bi-chevron-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- End Modal Pratinjau question Survey --}}
                {{-- Modal Pratinjau berhasil isi Survey --}}
                <div class="modal fade" id="pratinjauModal3" aria-labelledby="pratinjauModal3Label" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Pratinjau</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="p-3">
                                    <div class="container">
                                        <div class="row justify-content-center my-3">
                                            <div class="col-md-8 text-center">
                                                <img src="{{ asset('assets/img/survey_finish1.svg') }}" alt="Surveyasia"
                                                    class="img-fluid" width="200">
                                                <h3 class="pt-4 fw-bold mt-3">Berhasil!</h3>
                                                <p class="py-3">Anda telah menyelesaikan survey<span
                                                        class="fw-semibold"> {{ $survey->title }}
                                                    </span></p>
                                                <p class="small"> {!! $survey->closing !!} </p>
                                                {{-- <a class="btn btn-orange fw-semibold radius-default mt-3 py-2 px-4" href="{{ route('researcher.surveys.manage', $survey->id) }}"
                                                role="button">Back To Question</a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- End Modal Pratinjau berhasil isi Survey --}}
            </form>
            {{-- End Question Form --}}
            <div class="row fade" id="noQuestionContainer">
                <div class="col">
                    {{-- empty question --}}
                    @include('researcher.components.empty-question')
                </div>
            </div>
        </div>
    </div>
</div>

@else

<div class="col clock px-0">
    <div class="bg-ts1 px-5 py-3">
        <nav>
            <div class="nav nav-tabs bg-white" id="nav-tab" role="tablist">
                <button class="nav-link bg-transparent text-dark border-0 active" id="umum-tab" data-bs-toggle="tab"
                    data-bs-target="#umum" type="button" role="tab" aria-controls="umum"
                    aria-selected="true">Umum</button>
                <button class="nav-link bg-transparent text-dark border-0" id="pertanyaan-tab" data-bs-toggle="tab"
                    data-bs-target="#pertanyaan" type="button" role="tab" aria-controls="pertanyaan"
                    aria-selected="false">Pertanyaan</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade pt-3 show active" id="umum" role="tabpanel" aria-labelledby="umum-tab">
                <div class="row mb-3">
                    <div class="col">
                        @if ($survey->img_header == null)
                            <div class="">
                                @if ($survey->logo == null)
                                <div></div>
                                @else
                                <img src="{{ asset('storage/' . $survey->logo) }}"
                                    value="{{ asset('storage/' . $survey->logo) }}" class="w-25 mb-2" alt="">
                                @endif
                            </div>
                        @else
                            <div class="bg-header">
                                @if ($survey->logo == null)
                                <div></div>
                                @else
                                <img src="{{ asset('storage/' . $survey->logo) }}"
                                    value="{{ asset('storage/' . $survey->logo) }}" class="w-25 mb-2" alt="">
                                @endif
                            </div>
                        @endif
                        

                        <div class="card bg-ts">
                            <div class="card-body">
                                <div class="container">
                                    <h5 style="color: #00000099; font-size:24px;">{{ $survey->title }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    @include('researcher.modals.edit-judul-deskripsi-modal')
                    <div class="col">
                        <div class="card bg-ts mb-3">
                            <div class="container mt-4">
                                <form>
                                    <label for="description" style="font-size:18px; color: #00000099;">Deskripsi</label>
                                    <div class="mb-3 mt-3 bg-light py-4 px-2 border border-1">
                                        <p>{!! $survey->description !!}</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card bg-ts">
                            <div class="container mt-4">
                                <form>
                                    <label for="" style="font-size:18px; color: #00000099;">Pesan
                                        Penutup</label>
                                    <div class="mb-3 mt-3 bg-light py-4 px-2 border border-1">
                                        <p>{!! $survey->closing !!}</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col">
                        <div class="text-center">
                            <button type="button" class="btn border-orange bg-white text-orange px-5 py-2"
                                data-bs-toggle="modal" data-bs-target="#editJudulModal"><i class="fal fa-pen"></i>
                                Edit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade pt-3" id="pertanyaan" role="tabpanel" aria-labelledby="pertanyaan-tab">
                {{-- Question Form --}}
                <form action="{{ route('researcher.surveys.storeQuestions', $survey->id) }}" method="post"
                    id="formSurveyQuestion" class="mb-5">
                    @csrf
                    <div class="alert alert-danger" id="btnAlert" role="alert">
                        Minimal harus 3 pertanyaan!
                    </div>
                    <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                    <div class="mt-3 py-3" id="questions_container">

                    </div>

                    <div class="row">
                        <div id="groupBtn" class="disabled fade col-auto mx-auto">
                            <div class=" border-orange text-center bg-white"
                                style=" margin-top: 20px; padding:5px 10px; font-size: 20px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 5px;">
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pratinjau"
                                    data-bs-toggle="modal" data-bs-target="#pratinjauModal"
                                    class="btn fs-4 btn2 text-orange"><i class="bi bi-eye"></i>
                                </a>
                                <a href="#" id="btnSave" class="btn fs-4 btn3 text-orange" data-bs-toggle="modal"
                                    data-bs-target="#ajukanModal" data-toggle="tooltip" data-placement="bottom"
                                    title="Simpan">
                                    <i class="fal fa-save"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- Modal Ajukan survey --}}
                    <div class="modal fade" id="ajukanModal" aria-labelledby="ajukanModalLabel" aria-hidden="true">
                        <div class="modal-dialog" style="max-width: 600px;">
                            <div class="modal-content">
                                <div class="btn ms-auto">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('assets/img/Copy paste 1.png') }}" class="img-fluid" alt="">
                                    <h4 class="text-center">Apakah kamu ingin mengajukan survey?</h4>
                                    <p class="px-4 small text-center">Anda dapat simpan dan ajukan survey
                                        agar admin
                                        dapat meninjau
                                        survey anda untuk dapat dipublis. Jika hanya ingin mengarsipkan
                                        survey dan
                                        ingin mengubah
                                        kembali survey anda dapat simpan sebagai arsip.</p>
                                </div>
                                <div class="row px-5 pb-5">
                                    <div class="col d-grid gap-2">
                                        <button type="button" id="submitDraftBtn" class="btn btn-outline-dark"
                                            style="font-size: 14px;" data-bs-dismiss="modal">
                                            Tidak, simpan sebagai arsip
                                        </button>
                                    </div>
                                    <div class="col d-grid gap-2">
                                        <button id="submitBtn" type="submit" class="btn btn-success"
                                            style="font-size: 14px;">Ya, simpan
                                            dan ajukan survey</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Modal Ajukan survey --}}
                    {{-- Modal Pratinjau Survey --}}
                    <div class="modal fade" id="pratinjauModal" aria-labelledby="pratinjauModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Pratinjau</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container shadow p-3 radius-default">
                                        <div class="card border-0">
                                            <div class="card-body">
                                                <div>
                                                    <h3 class="fw-semibold">{{ $survey->title }}</h3>
                                                    <div class="d-flex mt-3">
                                                        @if ($survey->user->avatar == null)
                                                        <img src="{{ asset('assets/img/noimage.png') }}"
                                                            alt="{{ $survey->user->nama_lengkap }}" width="50"
                                                            height="50"
                                                            class="d-block mb-2 me-3 rounded-pill object-fit-cover">
                                                        @elseif ($survey->user->provider_name != null)
                                                        <img src="{{ $survey->user->avatar }}"
                                                            alt="{{ $survey->user->nama_lengkap }}" width="50"
                                                            height="50"
                                                            class="d-block mb-2 me-3 rounded-pill object-fit-cover">
                                                        @else
                                                        <img src="{{ asset('storage/' . $survey->user->avatar) }}"
                                                            alt="{{ $survey->user->nama_lengkap }}" width="50"
                                                            height="50"
                                                            class="d-block mb-2 me-3 rounded-pill object-fit-cover">
                                                        @endif
                                                        <div class="col">
                                                            <h5 class="m-0">
                                                                {{ $survey->user->nama_lengkap }}</h5>
                                                            <p class="text-muted fs-14px m-0">Author</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border radius-default mt-3">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 col-sm-6 col-md-4 text-center">
                                                        <h6 class="fw-semibold">Estimasi Pengerjaan</h6>
                                                        <p class="text-orange fs-14px"><i
                                                                class="far fa-clock fa-fw"></i>
                                                            {{ $survey->estimate_completion }} Menit</p>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-4 text-center">
                                                        <h6 class="fw-semibold">Jumlah Pertanyaan</h6>
                                                        <p class="text-orange fs-14px">
                                                            {{ $survey->questions->count() }} Pertanyaan</p>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-4 text-center">
                                                        <h6 class="fw-semibold">Jumlah Hadiah</h6>
                                                        <p class="text-orange fs-14px">
                                                            Rp{{ $survey->reward_point }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border radius-default mt-3">
                                            <div class="card-header bg-light-grey">
                                                <h6 class="fw-semibold py-3 m-0">Deskripsi</h6>
                                            </div>
                                            <div class="card-body">
                                                <p class="fs-14px m-0 small"> {!! $survey->description !!}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card border-0 bg-light-orange radius-default mt-3">
                                            <div class="card-body">
                                                <p class="fs-14px m-0"><span class="fw-semibold">*Jawab
                                                        studi dengan
                                                        jujur dan konsisten</span>, agar
                                                    kami dapat
                                                    memberikan survey yang sesuai dengan kamu kedepannya.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row pt-4 pb-2 mx-1 mb-3">
                                            <a href="#" class="btn btn-orange radius-default text-white"
                                                data-bs-toggle="modal" data-bs-target="#pratinjauModal2">
                                                Mulai
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    {{-- End Modal Pratinjau Survey --}}
                    {{-- Modal Pratinjau question Survey --}}
                    <div class="modal fade" id="pratinjauModal2" aria-labelledby="pratinjauModal2Label"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Pratinjau</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container shadow p-3 radius-default">
                                        <div class="container p-5">
                                            <div class="progress">
                                                <div id="progress" class="progress-bar bg-orange" role="progressbar"
                                                    style="width: 0%;" aria-valuenow="25" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div> <br>
                                            <div class="card " style="padding: 10px; border: 1px solid #000000">
                                                <div class="card-body">
                                                    <div class="row tab-content" id="questionContainer">
                                                        <div class="tab-pane fade show active" id="preQuestion">
                                                            <h5>Question Label</h5>
                                                            <p>question will show up here.....</p>
                                                            <ul class="list-group">
                                                                <p>options ....</p>
                                                                <li class="list-group-item disabled">Option
                                                                    A</li>
                                                                <li class="list-group-item disabled">Option
                                                                    B</li>
                                                                <li class="list-group-item disabled">Option
                                                                    C</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col" id="btnContainer">
                                                    <button type="button" class="btn btn-outline-orange" id="prevBtn"><i
                                                            class="bi bi-chevron-left"></i>
                                                        Sebelumnya</button>
                                                </div>
                                                <div class="col text-end" id="btnContainer btn-last">
                                                    <button type="button" class="btn btn-orange text-white"
                                                        id="nextBtn">Berikutnya <i
                                                            class="bi bi-chevron-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    {{-- End Modal Pratinjau question Survey --}}
                    {{-- Modal Pratinjau berhasil isi Survey --}}
                    <div class="modal fade" id="pratinjauModal3" aria-labelledby="pratinjauModal3Label"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Pratinjau</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="p-3">
                                        <div class="container">
                                            <div class="row justify-content-center my-3">
                                                <div class="col-md-8 text-center">
                                                    <img src="{{ asset('assets/img/survey_finish1.svg') }}"
                                                        alt="Surveyasia" class="img-fluid" width="200">
                                                    <h3 class="pt-4 fw-bold mt-3">Berhasil!</h3>
                                                    <p class="py-3">Anda telah menyelesaikan survey<span
                                                            class="fw-semibold"> {{ $survey->title }}
                                                        </span></p>
                                                    <p class="small"> {!! $survey->closing !!} </p>
                                                    {{-- <a class="btn btn-orange fw-semibold radius-default mt-3 py-2 px-4" href="{{ route('researcher.surveys.manage', $survey->id) }}"
                                                    role="button">Back To Question</a> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    {{-- End Modal Pratinjau berhasil isi Survey --}}
                </form>
                {{-- End Question Form --}}
                <div class="row fade" id="noQuestionContainer">
                    <div class="col">
                        {{-- empty question --}}
                        @include('researcher.components.empty-question')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- New Design -->
<!-- New Design Akhot -->
<script src="{{ asset('js/researcher/preview.js') }}" type="module"></script>
<script src="https://cdn.ckeditor.com/4.19.0/basic/ckeditor.js"></script>
<script>
    var options = {
        filebrowserImageBrowseUrl: '/filemanager?type=Images',
        filebrowserImageUploadUrl: '/filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/filemanager?type=Files',
        filebrowserUploadUrl: '/filemanager/upload?type=Files&_token='
    };

</script>
<script>
    CKEDITOR.replace('my-editor', options);
    CKEDITOR.replace('my-editor1', options);

</script>
<style>
    .tooltip>.tooltip-inner {
        background-color: #85848B;
        color: #FFFFFF;
        font-size: 14px;
    }

    .btn1:hover {
        background: rgba(239, 76, 41, 0.3);
        color: #EF4C29;
        border-radius: 100px;
    }

    .btn2:hover {
        background: rgba(239, 76, 41, 0.3);
        color: #EF4C29;
        border-radius: 100px;
    }

    .btn3:hover {
        background: rgba(239, 76, 41, 0.3);
        color: #EF4C29;
        border-radius: 100px;
    }

    .clock {
        background-size: cover;
        background-attachment: fixed !important;
        background-repeat: no-repeat !important;
        background: url("{{ asset('storage/' . $survey->background) }}");
    }

    .bg-header {
        margin-bottom: 1rem;
        border-radius: 10px;
        background-size: cover !important;
    }

    .bg-ts1 {
        background-color: rgba(255, 255, 255, 0.25);
    }

    .bg-ts {
        background-color: rgba(255, 255, 255, 0.90);
    }

</style>

<script>
    let survey_id = "{{ $survey->id }}"; //this variable for btnDraftSubmit only
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
