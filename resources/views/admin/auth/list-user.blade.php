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

                    {{-- LIST USER --}}
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="position-relative input-group align-items-center" style="width: 15%">
                            <input type="text" class="form-control rounded-pill py-2 text-center" placeholder="Search everything" aria-label="search" aria-describedby="basic-addon1" style="font-size: 12px">
                            <a href="#">
                                <i class="position-absolute top-50 start-0 translate-middle-y bi bi-search p-2 ms-1 text-secondary" style="z-index: 999;"></i>
                            </a>
                        </div>
                        <button type="submit" class="btn bg-special-blue text-white px-4" id="btn-add-template">Add User</button>
                    </div>

                    <table class="table table-no-border-head align-middle">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Nama</th>
                                <th scope="col">Status</th>
                                <th scope="col">Perusahaan</th>
                                <th scope="col">Position</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>

                            {{-- LOOPING DATA --}}
                            @for ($i = 0; $i < 10; $i++)
                            <tr>
                                <th scope="row">
                                    <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                                </th>
                                <td scope="col" class="d-flex align-items-center">
                                    <img src="{{ asset('assets/img/photo-neil-seims.jpg') }}" alt="" class="rounded-pill me-2">
                                    <div>
                                        <h6 class="nopadding">Neil Seims</h6>
                                        <span class="d-block" style="font-size: 13px">Neilseims@gmail.com</span>
                                    </div>
                                </td>
                                <td>Responden</td>
                                <td>Google</td>
                                <td>Manager</td>
                                <td class="text-end"><button type="button" class="btn bg-special-blue text-white">
                                    <i class="bi bi-vector-pen me-"></i>  
                                    Edit Item</button>
                                </td>
                                </tr>
                                @endfor
                        </tbody>
                    </table>
                    {{-- END OF LIST USER --}}
                
                
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
