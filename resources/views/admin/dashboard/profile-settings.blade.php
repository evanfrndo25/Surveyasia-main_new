@extends('admin.layouts.base')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 g-0">
                @include('admin.component.sidebar')
            </div>

            <div class="col-10 nopadding">
                @include('admin.component.header')

                <h6 class="px-5 py-4">
                    <i class="bi bi-person-fill fs-3 align-middle"></i>
                    Profile Settings
                </h6>
                
                <h6 class="px-5 py-5 bg-light">
                    UPDATE PROFILE INFO
                </h6>

                <form action="">
                    <div class="row justify-content-between px-5 py-4 gy-4">
                        <div class="col-md-5">
                            <label for="inputNama" class="fw-bold mb-2">Nama Anda</label>
                            <input type="text" class="form-control border-r-besar p-3 bg-very-light" placeholder="Masukan nama" name="nama" id="inputNama">
                        </div>
                        <div class="col-md-5">
                            <label for="inputEmail" class="fw-bold mb-2">Email Anda</label>
                            <input type="email" class="form-control border-r-besar p-3 bg-very-light" placeholder="Masukan email" name="email" id="inputEmail">
                        </div>

                        <div class="col-md-5">
                            <label for="inputEmail" class="fw-bold mb-2">Password Kamu</label>
                            <input type="email" class="form-control border-r-besar p-3 bg-very-light" placeholder="Masukan password" name="email" id="inputEmail">
                            <div id="emailHelp" class="form-text">Biarkan kosong untuk menyimpan kata sandi Anda saat ini.</div>
                        </div>
                        <div class="col-md-5">
                            <label for="inputHP" class="fw-bold mb-2">Handphone</label>
                            <input type="email" class="form-control border-r-besar p-3 bg-very-light" placeholder="Nomer handphone" name="noHP" id="inputHP">
                        </div>
                        <div class="col-12">
                            <label for="switchNotif" class="fw-bold mb-2">Email Notifications</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="switchNotif" id="switchNotif" checked>
                                <label class="form-check-label" for="switchNotif">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis, voluptates?</label>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="inputAlamat" class="fw-bold mb-2">Alamat Anda</label>
                            <textarea name="alamat" id="inputAlamat" cols="30" rows="3" class="form-control border-r-besar p-3 bg-very-light"></textarea>
                        </div>

                        <div class="col-md-12">
                            <label for="inputAlamat" class="fw-bold mb-2">Gambar Profil</label>
                            <div class="col-md-3 bg-light text-center border-r-besar p-5">
                                <a href="#" class="text-decoration-none link-dark">
                                    <img src="{{ asset('assets/img/addPhoto.png') }}" alt="">
                                    <br><span class="form-text">Menambahkan foto</span>
                                </a>
                            </div>
                        </div>

                        <div class="mb-4">
                            <button type="submit" class="btn text-white rounded-pill py-2 px-5 me-2" style="background-color: #5F2EEA">Update</button>
                            <button type="reset" class="btn fw-bold rounded-pill py-2 px-5" style="background-color: #DCDCDC">Reset</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection