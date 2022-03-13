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

                <div class="container mt-5" style="height: 650px;">
                    <div class="row bg-white px-4 py-5">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="judul">
                            </div>
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deksripsi</label>
                                <textarea class="form-control" id="deskripsi" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="foto" class="form-label" >Upload Foto</label>
                                <input type="file" class="form-control" id="foto">
                            </div>
                            <div class="mb-3">
                                <label for="jam-publish" class="form-label">Jam Publish</label>
                                <input type="time" class="form-control" id="jam-publish">
                            </div>

                            <div class="text-center mt-5 pt-3">
                                <button type="button" class="btn bg-special-blue text-white mx-auto px-lg-5">Buat News</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection