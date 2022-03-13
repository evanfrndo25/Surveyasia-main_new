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

                <div class="d-flex align-items-center justify-content-between px-5 my-4">
                    <h3>Kesehatan</h3>
                    <button type="submit" class="btn bg-special-blue text-white px-4" id="btn-add-template">Buat Question Bank</button>
                </div>

                
                <h6 class="px-5 py-4 bg-light">
                    <span class="borderNav border-bottom border-3 pb-3 ">
                        <a href="#" class="text-decoration-none text-special-blue">Pertanyaan</a>
                    </span>
                    <span class="ms-3">
                        <a href="#" class="text-decoration-none text-sidebar">Preview</a>
                    </span>
                </h6>

                <table class="table table-no-border-head mx-5" id="table-question-bank">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Tipe Jawaban</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- LOOPING DATA HERE! --}}
                        @for ($i = 1; $i <= 9; $i++)
                            <tr>
                                <td class="fw-bold">{{ $i }}</td>
                                <td>Pengaruh Senam Yoga terhadap Penurunan Tekanan Darah pada Lansia yang Mengalami Keluhan Hipertensi</td>
                                <td>Pilihan Ganda</td>
                                <td>10 November 2021</td>
                                <td class="text-success">On</td>
                            </tr>
                        @endfor
                        {{-- END OF LOOPING --}}
                    </tbody>
                </table>

                 {{-- PAGINATION --}}
                 <nav aria-label="Page navigation example" class="mx-5">
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
@endsection