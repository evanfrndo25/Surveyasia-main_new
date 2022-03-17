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

            <div class="container mt-2">
                <div class="row bg-white px-4 py-5">
                    <h3 class="text-center pb-5">Create new Chart</h3>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="col">
                        <form action="{{ route('admin.chart.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row justify-content-center text-center">
                                <div class="col-6">
                                    <div class="mb-4">
                                        <label for="deskripsi" class="form-label"> Libray From</label>
                                        <input type="text"
                                            class="form-control rounded-pill border-0 bg-light px-3  @error('library_from') is-invalid @enderror"
                                            id="judul" placeholder="Masukan library from" name="library_from">
                                        @error('library_from')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-4">
                                        <label for="judul" class="form-label">Name</label>
                                        <input type="text"
                                            class="form-control rounded-pill border-0 bg-light px-3  @error('name') is-invalid @enderror"
                                            placeholder="Masukan nama chart" id="judul" name="name">
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="deskripsi" class="form-label"> Type</label>
                                        <input type="text"
                                            class="form-control rounded-pill border-0 bg-light px-3  @error('type') is-invalid @enderror"
                                            placeholder="Masukan type" id="judul" name="type">
                                        @error('type')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <p class="text-muted">line,bar,dll</p>
                                    </div>

                                </div>
                                <div class="col-6">
                                    <div class="mb-4">
                                        <label for="deskripsi" class="form-label">Status</label>
                                        <select class="form-select border-0 bg-light px-3 rounded-pill"
                                            aria-label="Default select example" name="chart_status">
                                            <option value="on">On</option>
                                            <option value="off">Off</option>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label for="deskripsi" class="form-label">Chart Type</label>
                                        <select class="form-select border-0 bg-light px-3 rounded-pill"
                                            aria-label="Default select example" name="chart_type">
                                            <option value="free">Free</option>
                                            <option value="premium">Premium</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="deskripsi" class="form-label">Description</label>
                                <textarea
                                    class="form-control rounded-3 border-0 bg-light @error('description') is-invalid @enderror"
                                    id="deskripsi" rows="3" name="description"></textarea>
                                @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="text-center mt-5 pt-3">
                                <button type="submit" class="btn bg-special-blue text-white mx-auto px-5 py-2">Add
                                    Chart</button>
                            </div>
                    </div>
                    </form>

                    <!-- <div class="col-6">
                        {{-- <div class="mb-4">
                                    <label for="foto" class="form-label">Upload Foto</label>
                                    <input type="file" class="form-control" id="foto" name="dsadas">
                                </div>
                                <div class="mb-4">
                                    <label for="jam-publish" class="form-label">Jam Publish</label>
                                    <input type="time" class="form-control" id="jam-publish">
                                </div>

                                <div class="text-center mt-5 pt-3">
                                    <button type="submit" class="btn bg-special-blue text-white mx-auto px-lg-5">Buat News</button>
                                </div> --}}
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
