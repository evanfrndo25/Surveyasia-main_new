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

                <table class="table table-no-border-head align-middle">
                    <thead>
                        <tr>
                            <td scope="col">#</td>
                            <td scope="col">Title</td>
                            <td scope="col">Description</td>
                            <td scope="col">Creator</td>
                            <td scope="col">Status</td>
                            <td scope="col">Date</td>
                            <td scope="col">Actions</td>
                        </tr>
                    </thead>
                    <tbody>

                        {{-- LOOPING DATA --}}
                        @foreach ($surveys as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ Str::limit($item->title, 20, '...') }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->user->nama_lengkap }}</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->created_at->diffForHumans() }}</td>
                            <td>
                                <a 
                                    href="{{ $item->shareable_link }}" 
                                    class="btn bg-special-blue text-white"
                                >
                                    <i class="bi bi-vector-pen"></i>
                                    Show
                                </a>

                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal{{ $item->id }}">
                                    <i class="bi bi-trash"></i>
                                    Hapus
                                </button>
                                <!-- <a href="{{ route('admin.survey.destroy', $item->id) }}"
                                    class="btn bg-danger text-white"
                                    onclick="return confirm('Apakah kamu yakin ingin menghapus?')">
                                    <i class="bi bi-trash"></i>
                                    Delete
                                </a> -->
                            </td>
                        </tr>
                        
                        <!-- Modal delete -->
                        <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" aria-labelledby="deleteModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="btn ms-auto">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ asset('assets/img/delete.png') }}" class="img-fluid" alt="">
                                        <h2 class="text-center">Delete Survey?</h2>
                                        <p class="px-5 small text-secondary text-center">Apakah kamu yakin ingin menghapus survey <span class="fw-bold">{{ $item->title }}</span>?<br>Jika anda menghapus survey, maka survey pada responden dan researcher akan terhapus secara <span class="fw-bold">permanen</span> .</p>
                                    </div>
                                    <div class="row px-5 pb-5">
                                        <div class="col d-grid gap-2">
                                            <a href="{{ route('admin.survey.destroy', $item->id) }}" class="btn btn-danger">Iya</a>
                                        </div>
                                        <div class="col d-grid gap-2">
                                            <button type="button" class="btn bg-special-blue text-white" data-bs-dismiss="modal">Tidak</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
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
