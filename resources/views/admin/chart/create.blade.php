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
                    <h3 class="text-center pb-5">Tambah Diagram Baru</h3>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="card" style="background-color: #FFFFFF; border: 1px solid rgba(0, 0, 0, 0.3); border-radius: 15px; padding:30px;">
                        <form action="{{ route('admin.chart.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row justify-content-center text-center">
                                <div class="col-6">
                                    <!-- Edit Baru Dropdown Library From -->
                                    <div class="mb-4">
                                        <label for="deskripsi" class="form-label title-form">Libray From</label>
                                        <select
                                            class="form-select py-3 px-3  @error('library_from') is-invalid @enderror"
                                            id="library_from"  
                                            name="library_from"
                                            onchange="changeChartType()"
                                        >
                                            <option value="Chart JS">Chart JS</option>
                                            <option selected value="AnyChart">AnyChart</option>
                                            <option value="DevExpress">DevExpress</option>
                                        </select>
                                        @error('library_from')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <!--  Akhir Edit Baru Dropdown Library From -->

                                    <!-- Chart lama Input Text Library Form -->
                                    <!-- <div class="mb-4">
                                        <label for="deskripsi" class="form-label"> Libray From</label>
                                        <input type="text"
                                            class="form-control rounded-pill border-0 bg-light px-3  @error('library_from') is-invalid @enderror"
                                            id="judul" placeholder="Masukan library from" name="library_from">
                                        @error('library_from')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div> -->
                                    <!-- Akhir Chart lama Input Text Library Form -->

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-4">
                                        <label for="judul" class="form-label title-form">Nama Diagram</label>
                                        <input type="text"
                                            class="form-control py-3 px-3  @error('name') is-invalid @enderror"
                                            placeholder="Masukan nama diagram" id="judul" name="name">
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <!--  Edit Baru Dropdown Type -->
                                    <div class="mb-4">
                                        <label for="deskripsi" class="form-label title-form">Kategori Diagram</label>
                                        <select class="form-select py-3 px-3  @error('type') is-invalid @enderror" id="type" name="type">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                    <!--  Akhir Edit Baru Dropdown Type -->

                                    <!-- Lama Input Text Type -->
                                    <!-- <div class="mb-4">
                                        <label for="type" class="form-label"> Type</label>
                                        <input type="text"
                                            class="form-control rounded-pill border-0 bg-light px-3  @error('type') is-invalid @enderror"
                                            placeholder="Masukan type" id="judul" name="type">
                                        @error('type')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <p class="text-muted">line,bar,dll</p>
                                    </div> -->
                                    <!--  Akhir Lama Input Text Type -->

                                </div>
                                <div class="col-6">
                                    <div class="mb-4">
                                        <label for="deskripsi" class="form-label title-form">Status</label>
                                        <select class="form-select py-3 px-3"
                                            aria-label="Default select example" name="status">
                                            <option selected value="1">On</option>
                                            <option value="0">Off</option>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label for="deskripsi" class="form-label title-form">Aktivitas</label>
                                        <select class="form-select py-3 px-3"
                                            aria-label="Default select example" name="chart_type">
                                            <option selected value="free">Free</option>
                                            <option value="premium">Premium</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="deskripsi" class="form-label title-form">Deskripsi</label>
                                <textarea
                                    class="form-control @error('description') is-invalid @enderror"
                                    id="deskripsi" placeholder="Tulis disini..." rows="3" name="description"></textarea>
                                @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <hr style="border: 1px solid #D9DBE9; transform: matrix(1, 0, 0, 1, 0, 0);">
                            <div class="text-center mt-5 pt-3">
                                <button type="submit" class="btn btn-orange text-white mx-auto px-5 py-2">Simpan</button>
                            </div>
                        </form>
                    </div>
                    

                    <!-- Codingan Batch 1 -->
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
                    <!-- Akhir Codingan Batch 1 -->
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(function () {
    changeChartType();
});

const changeChartType = () => {
    const library_f = document.getElementById('library_from').value;
    const select_type_chart = document.getElementById('type');
    if( library_f == 'AnyChart') {
        let type_chart = ['pie', 'bar', 'line', 'doughnut', 'tag_cloud'];
        $('#type option').remove();
        type_chart.forEach(t => {
            select_type_chart.innerHTML += `<option selected value="any_${t}">${t}</option>`;
        });
    } else if ( library_f == 'DevExpress' ) {
        let type_chart = ['pie', 'bar', 'line', 'doughnut'];
        $('#type option').remove();
        type_chart.forEach(t => {
            select_type_chart.innerHTML += `<option value="dev_${t}">${t}</option>`;
        });
    } else {
        let type_chart = ['pie', 'bar', 'line', 'doughnut', 'wordCloud', 'scatter', 'polarArea'];
        $('#type option').remove();
        type_chart.forEach(t => {
            select_type_chart.innerHTML += `<option value="cjs_${t}">${t}</option>`;
        });
    }
};
</script>

@endsection
