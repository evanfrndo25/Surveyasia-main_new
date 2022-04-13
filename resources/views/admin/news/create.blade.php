@extends('admin.layouts.base')

@section('css')
    <style>
        body {
            background-color: #F7FAFC;
        }

    </style>

    <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
@endsection


@section('content')
    <div class="container-fluid">
        <div class="row border">
            <div class="col-2 nopadding">
                @include('admin.component.sidebar')
            </div>
            <div class="col-10 nopadding">
                @include('admin.component.header')

                <div class="container mt-2" style="height: 650px;">
                    <div class="row bg-white px-4 py-5">
                        <h3>Create new post</h3>
                        <div class="col">
                            <form action="{{ route('admin.news.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="judul" class="form-label">Title</label>
                                    <input type="text" class="form-control  @error('title') is-invalid @enderror" id="judul" name="title" placeholder="Masukkan judul berita..." required>
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- <div class="mb-3">
                                    <label for="tanggal" class="form-label">Tanggal</label>
                                    <input type="date" class="form-control" id="tanggal">
                                </div> --}}
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Description</label>
                                    <textarea class="my-editor form-control @error('description') is-invalid @enderror" id="my-editor" rows="10"
                                        name="description"></textarea>
                                    @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="category" class="form-label">Kategori</label>
                                    <input type="text" class="form-control  @error('category') is-invalid @enderror" id="judul" name="category" placeholder="Example: Bussiness, Study, Hoby..." required>
                                    @error('category')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="foto" class="form-label">Upload Foto</label>
                                    <input type="file" class="form-control" id="foto" name="img">
                                    <p class="text-danger">Max 1MB</p>
                                </div>
                                <div class="text-center mt-5 pt-3">
                                    <button type="submit" class="btn bg-special-blue text-white mx-auto px-lg-5">Buat News</button>
                                </div>
                        </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    @endsection
    @push('scripts')
    <script src="//cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>
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
        </script>
    @endpush
