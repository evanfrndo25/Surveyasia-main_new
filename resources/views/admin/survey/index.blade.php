@extends('admin.layouts.base')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
@endsection


@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-2 nopadding">
            @include('admin.component.sidebar')
        </div>
        <div class="col-10 nopadding">
            @include('admin.component.header')
            <div class="container pt-4">
                @if (session()->has('status'))
                <div class="alert alert-success">
                    {{ session()->get('status') }}
                </div>
                @endif
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="position-relative input-group align-items-center" style="width: 15%">
                        <input type="text" class="form-control rounded-pill py-2 text-center"
                            placeholder="Search everything" aria-label="search" aria-describedby="basic-addon1"
                            style="font-size: 12px">
                        <a href="#">
                            <i class="position-absolute top-50 start-0 translate-middle-y bi bi-search p-2 ms-1 text-secondary"
                                style="z-index: 999;"></i>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="menunggu-tab" data-bs-toggle="tab"
                                data-bs-target="#menunggu" type="button" role="tab" aria-controls="menunggu"
                                aria-selected="true">MENUNGGU</button>
                            <button class="nav-link" id="tolak-tab" data-bs-toggle="tab"
                                data-bs-target="#tolak" type="button" role="tab" aria-controls="tolak"
                                aria-selected="false">DITOLAK</button>
                            <button class="nav-link" id="terima-tab" data-bs-toggle="tab"
                                data-bs-target="#terima" type="button" role="tab" aria-controls="terima"
                                aria-selected="false">DITERIMA</button>
                        </div>
                    </nav>
                </div>

                {{-- LOOPING DATA --}}
                <div class="tab-content pt-4" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="menunggu" role="tabpanel" aria-labelledby="menunggu-tab">
                        @foreach ($surveys as $item)
                        <div class="container survey-active">
                            <div class="row shadow pt-4" style="border-radius: 17px 17px 0 0;">
                                <div class="col-2 text-center">
                                    <img src="{{ asset('assets/img/img-survey.svg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="col my-auto">
                                    <div class="row">
                                        <div class="col">
                                            <p class="card-title">{{ Str::limit($item->title, 20, '...') }}</p>
                                        </div>
                                        <div class="col-3 text-center">
                                            <p>Status</p>
                                        </div>
                                        <div class="col-3 text-center">
                                            <p>Tanggal Upload</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div>
                                                <p class="small text-secondary">
                                                    {{ Str::limit($item->description, 20, '...') }}</p>
                                                <p class="pt-1 small">Kreator :<span>
                                                        {{ $item->user->nama_lengkap }}</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-3 text-center">
                                            <div>
                                                <h5 class="text-success">{{ $item->status }}</h5>
                                            </div>
                                        </div>
                                        <div class="col-3 text-center">
                                            <div>
                                                <h5>{{ $item->created_at->diffForHumans() }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 text-center">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <div class="border-start card border-0 d-grid gap-2">
                                            <i class="bi bi-check-lg h1 m-0"></i>
                                            <button type="button"
                                                class="btn text-success stretched-link">Terima</button>
                                        </div>
                                        <div class="border-start card border-0 d-grid gap-2">
                                            <i class="bi bi-x-lg h1 m-0 text-danger"></i>
                                            <button type="button" class="btn text-danger stretched-link"
                                                data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}">
                                                Tolak
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row bg-primary mb-3" style="border-radius: 0 0 17px 17px;">
                                <div class="col">
                                    <div class="d-grid">
                                        <button class="btn btn-primary" type="button">Detail Survey</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal delete -->
                        <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1"
                            aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="btn ms-auto">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="bg-white">
                                        <h1 class="text-center"><i class="bi bi-trash display-1 text-danger"></i></h1>
                                        <h4 class="text-center text-danger">Hapus Survey Researcher?</h4>
                                    </div>
                                    <div class="modal-body bg-light px-4">
                                        <p class="small text-secondary text-center">Apakah kamu ingin menghapus
                                            {{ $item->title }} Survey</p>
                                        <div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Lorem ipsum dolor sit amet.
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Lorem ipsum dolor sit amet.
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault3" checked>
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Lorem ipsum dolor sit amet.
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault4" checked>
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Lorem ipsum dolor sit amet.
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault5" checked>
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Lorem ipsum dolor sit amet.
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row px-4 pb-5">
                                        <div class="col d-grid gap-2">
                                            <a href="{{ route('admin.survey.destroy', $item->id) }}"
                                                class="btn btn-danger">YA,
                                                HAPUS SURVEY</a>
                                        </div>
                                        <div class="col d-grid gap-2">
                                            <button type="button" class="btn btn-outline-secondary"
                                                data-bs-dismiss="modal">TIDAK, SIMPAN SURVEY</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="tab-pane fade" id="tolak" role="tabpanel" aria-labelledby="tolak-tab">
                        ...</div>
                    <div class="tab-pane fade" id="terima" role="tabpanel" aria-labelledby="terima-tab">
                        ...</div>
                </div>
                <!-- <a href="{{ $item->shareable_link }}" class="btn bg-special-blue text-white">
                                    <i class="bi bi-vector-pen"></i>
                                    Show
                                </a> -->
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit News -->
<div class="modal fade" id="modal-edit-news" tabindex="-1" aria-labelledby="modal-edit-newsLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body py-4">
                <div class="d-flex justify-content-between">
                    <h5 class="modal-title" id="exampleModalLabel">Edit News</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <hr class="mt-2">
                <div class="container-fluid px-0 mb-5">
                    <div class="row">
                        <div class="col-6">
                            <form method="post" enctype="multipart/form-data" id="form-edit">
                                @method('put')
                                @csrf
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="hidden" class="form-control border-r-besar" id="id" name="id">
                                    <input type="hidden" id="oldImg" name="oldImg">
                                    <input type="text" class="form-control border-r-besar" id="title" name="title">
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deksripsi</label>
                                    <textarea class="form-control border-r-besar" id="description" rows="5"
                                        name="description">
                    </textarea>
                                </div>

                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="foto" class="form-label">Upload Foto</label>
                                <img id="img" alt="" width="70" class="d-block mb-1">
                                <input type="file" class="form-control border-r-besar" id="foto" name="img">

                            </div>
                            <hr class="mt-2">
                            <div class="container-fluid px-0 mb-5">
                                <div class="row">
                                    <div class="col-6">
                                        <form method="post" enctype="multipart/form-data" id="form-edit">
                                            @method('put')
                                            @csrf
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title</label>
                                                <input type="hidden" class="form-control border-r-besar" id="id"
                                                    name="id">
                                                <input type="hidden" id="oldImg" name="oldImg">
                                                <input type="text" class="form-control border-r-besar" id="title"
                                                    name="title">
                                            </div>
                                            <div class="mb-3">
                                                <label for="deskripsi" class="form-label">Deksripsi</label>
                                                <textarea class="form-control border-r-besar" id="description" rows="5"
                                                    name="description">
                                </textarea>
                                            </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="foto" class="form-label">Upload Foto</label>
                                            <img id="img" alt="" width="70" class="d-block mb-1">
                                            <input type="file" class="form-control border-r-besar" id="foto" name="img">

                                        </div>
                                        <div class="mb-3">
                                            <label for="tanggal" class="form-label">Tanggal Publish</label>
                                            <input type="date" class="form-control border-r-besar" id="tanggal"
                                                value="2021-07-22">
                                        </div>
                                        <div class="mb-3">
                                            <label for="jam-publish" class="form-label">Jam Publish</label>
                                            <input type="time" class="form-control border-r-besar" id="jam-publish"
                                                value="23:00">
                                        </div>

                                    </div>
                                </div>
                                {{-- <div class="mb-3">
                  <label for="tanggal" class="form-label">Tanggal
                    Publish</label>
                  <input type="date" class="form-control border-r-besar"
                    id="tanggal" value="2021-07-22">
                </div>
                <div class="mb-3">
                  <label for="jam-publish" class="form-label">Jam
                    Publish</label>
                  <input type="time" class="form-control border-r-besar"
                    id="jam-publish" value="23:00">
                </div> --}}

                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn text-white mx-auto px-lg-3 mt-5"
                        style="background-color: #4C6FFF">Simpan
                    </button>



                </div>

            </div>
        </div>
    </div>

    {{-- END OF MODAL EDIT NEWS --}}


    @endsection
