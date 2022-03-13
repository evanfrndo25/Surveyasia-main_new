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

                <div class="container">
                    <div class="d-flex align-items-center justify-content-between mt-4 mb-3">
                        <div class="position-relative input-group align-items-center" style="width: 15%">
                            <input type="text" class="form-control rounded-pill py-2 text-center" placeholder="Search everything" aria-label="search" aria-describedby="basic-addon1" style="font-size: 12px">
                            <a href="#">
                                <i class="position-absolute top-50 start-0 translate-middle-y bi bi-search p-2 ms-1 text-secondary" style="z-index: 999;"></i>
                            </a>
                        </div>
                        <button type="submit" class="btn bg-special-blue text-white px-4" id="btn-add-template">Buat Pertanyaan</button>
                    </div>
    
                    <table class="table table-no-border-head" id="table-question-bank">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Kategori</th>
                                <th scope="col" class="text-center">Jumlah pertanyaan</th>
                                <th scope="col" class="text-center">Tanggal upload</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- LOOPING DATA HERE! --}}
                            @for ($i = 1; $i <= 9; $i++)
                                <tr>
                                    <td class="fw-bold">{{ $i }}</td>
                                    <td>Customer Research</td>
                                    <td class="text-center">25</td>
                                    <td class="text-center">10 November 2021</td>
                                    <td>
                                        <a href="#" class="text-decoration-none">
                                            <i class="bi bi-trash-fill"></i>
                                            Hapus
                                        </a>
                                    </td>
                                </tr>
                            @endfor
                            {{-- END OF LOOPING --}}
                        </tbody>
                    </table>

                    {{-- PAGINATION --}}
                    <nav aria-label="Page navigation example">
                        <ul class="pagination align-items-center">
                            <li class="me-3">Rows per page:</li>
                            <li class="me-5 opacity-75">
                                <select class="form-select" aria-label="size 3 select example">
                                    <option selected value="1">10</option>
                                    <option value="2">25</option>
                                    <option value="3">50</option>
                                    <option value="4">100</option>
                                </select>
                            </li>
                            <li class="me-3">
                                <span>1-8</span>
                                <span class="mx-1">of</span>
                                <span>1240</span>
                            </li>

                            <li class="page-item fs-2 me-2"> <a href="#" class="text-semi-light text-decoration-none">  &#60; </a> </li>
                            <li class="page-item fs-2 me-2"> <a href="#" class="text-semi-light text-decoration-none">  &#62; </a> </li>
                        </ul>
                    </nav>
                    {{-- END OF PAGINATION --}}
                </div>

            </div>
        </div>
    </div>
@endsection

