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
                <input type="text" class="form-control rounded-pill py-2 text-center" placeholder="Search everything" aria-label="search" aria-describedby="basic-addon1" style="font-size: 12px">
                <a href="#">
                    <i class="position-absolute top-50 start-0 translate-middle-y bi bi-search p-2 ms-1 text-secondary" style="z-index: 999;"></i>
                </a>
            </div>
            
        </div>

            <table class="table table-no-border-head align-middle">
                <thead>
                    <tr>
                        <td scope="col">#</td>
                        <td scope="col">Name</td>
                        <td scope="col">Email</td>
                        <td scope="col">Subscription</td>
                        <td scope="col">Price</td>
                        <td scope="col">Tanggal</td>
                    </tr>
                </thead>
                <tbody>

                    {{-- LOOPING DATA --}}
                    @foreach ($transactions as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->sub->user->nama_lengkap }}</td>
                        <td>{{ $item->sub->user->email }}</td>
                        <td>{{ $item->sub->subscription->name }}</td>
                        <td>
                          {{ $price = "Rp " . number_format($item->price ,0,',','.')}}</td>
                        <td>{{ $item->created_at->diffForHumans() }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Edit News -->
  <div class="modal fade" id="modal-edit-news" tabindex="-1"
    aria-labelledby="modal-edit-newsLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body py-4">
          <div class="d-flex justify-content-between">
            <h5 class="modal-title" id="exampleModalLabel">Edit News</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
              aria-label="Close"></button>
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
                    <input type="hidden" class="form-control border-r-besar"
                      id="id" name="id">
                    <input type="hidden" id="oldImg" name="oldImg">
                    <input type="text" class="form-control border-r-besar"
                      id="title" name="title">
                  </div>
                  <div class="mb-3">
                    <label for="deskripsi"
                      class="form-label">Deksripsi</label>
                    <textarea class="form-control border-r-besar" id="description"
                      rows="5" name="description">
                    </textarea>
                  </div>

              </div>
              <div class="col-6">
                <div class="mb-3">
                  <label for="foto" class="form-label">Upload Foto</label>
                  <img id="img" alt="" width="70" class="d-block mb-1">
                  <input type="file" class="form-control border-r-besar" id="foto"
                    name="img">

                </div>
                <hr class="mt-2">
                <div class="container-fluid px-0 mb-5">
                    <div class="row">
                        <div class="col-6">
                            <form  method="post" enctype="multipart/form-data" id="form-edit">
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
                                <textarea class="form-control border-r-besar" id="description" rows="5" name="description">
                                </textarea>
                            </div>
                            
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="foto" class="form-label" >Upload Foto</label>
                                <img id="img" alt="" width="70" class="d-block mb-1">
                                <input type="file" class="form-control border-r-besar" id="foto" name="img">
                                
                            </div>
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal Publish</label>
                                <input type="date" class="form-control border-r-besar" id="tanggal" value="2021-07-22">
                            </div>
                            <div class="mb-3">
                                <label for="jam-publish" class="form-label">Jam Publish</label>
                                <input type="time" class="form-control border-r-besar" id="jam-publish" value="23:00">
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
