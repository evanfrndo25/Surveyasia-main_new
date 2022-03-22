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
                    <h3>Edit News</h3>
                    <div class="col">
                        <form action="{{ route('admin.news.update', $news->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Status</label>
                                <select class="form-select border-r-besar border-0 bg-light py-2 w-25" aria-label="Default select example"
                                    name="status">
                                    @if ($news->status == 0)
                                    <option selected value="0">Tidak di publis</option>
                                    <option value="1">Publis</option>
                                    @else
                                    <option value="0">Tidak di publis</option>
                                    <option selected value="1">Publis</option>
                                    @endif
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control  @error('title') is-invalid @enderror" id="judul"
                                    name="fad" value="11" hidden>
                                @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" class="form-control border-r-besar border-0 bg-light py-2  @error('title') is-invalid @enderror" id="judul"
                                    name="title" value="{{ old('title', $news->title) }}">
                                @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Kategori</label>
                                <input type="text" class="form-control border-r-besar border-0 bg-light py-2  @error('category') is-invalid @enderror" id="category" name="category" value="{{ old('category', $news->category) }}" required>
                                @error('category')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="foto" class="form-label border-r-besar">Upload Foto</label>
                                <input type="file" class="form-control" id="foto" name="img">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Description</label>
                                <textarea class="my-editor form-control @error('description') is-invalid @enderror"
                                    id="my-editor" rows="10" name="description">{{ $news->description  }}</textarea>
                                @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                    </div>
                    <div class="mt-5 pt-3">
                        <button type="submit" class="btn bg-special-blue text-white mx-auto px-lg-5">Ubah</button>
                        <button type="submit" class="btn bg-danger text-white mx-auto px-lg-5">Tidak</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
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
