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

                    <div class="position-relative input-group align-items-center" style="width: 15%">
                        <input type="text" class="form-control rounded-pill py-2 text-center" placeholder="Search everything" aria-label="search" aria-describedby="basic-addon1" style="font-size: 12px">
                        <a href="#">
                            <i class="position-absolute top-50 start-0 translate-middle-y bi bi-search p-2 ms-1 text-secondary"></i>
                        </a>
                    </div>
                    
                    <table class="table align-middle" id="table-news">
                        <thead>
                            <tr class="fw-bold">
                                <td scope="col">Title</td>
                                <td scope="col">Status</td>
                                <td scope="col">Stats</td>
                                <td class="text-end">
                                    <a href="{{ route('admin.news.create') }}"  class="btn bg-special-blue text-white">
                                        <i class="bi bi-vector-pen me-"></i>  
                                        Add New
                                    </a>
                                </td>
                            </tr>
                        </thead>
                        <tbody>

                            {{-- LOOPING NEWS --}}
                            @foreach ($news as $item)
                            <tr style="background-color: #F7FAFC;">
                                <td scope="col" class="py-4 ps-3">
                                    <h6 class="fw-bold" style="color: #2A4365">{{ $item->title }}</h6>
                                    <span class="d-block text-secondary" style="font-size: 13px">Posted {{ $item->created_at->diffForHumans(); }}</span>
                                </td>
                                <td scope="col">
                                    <div class="text-published rounded-pill text-center w-75">Published</div>
                                </td>
                                <td scope="col">
                                    <span class="fw-bold">120</span> 
                                    views
                                    <i class="bi bi-arrow-up-circle text-success"></i>
                                </td>
                                <td scope="col" class="text-end pe-3">
                                    <a href="#" role="button" id="dropdown-manage-news" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots fs-3 text-secondary"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown-manage-news">
                                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal-edit-news">Edit File</a></li>
                                        <li>
                                            {{-- <a class="dropdown-item" href="#" onclick="return confirm('Apakah kamu yakin ingin menghapus?')">Delete File</a> --}}
                                            <form
                                                action="{{ route('admin.news.destroy', $item->id) }}"
                                                method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit"
                                                    class="dropdown-item" onclick="return confirm('Apakah kamu yakin ingin menghapus?')">delete</button>
                                                </form>
                                        </li>
                                    </ul>
                                </td>
                                </tr>
                            @endforeach
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

<!-- Modal Edit News -->
<div class="modal fade" id="modal-edit-news" tabindex="-1" aria-labelledby="modal-edit-newsLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body py-4">
                <div class="d-flex justify-content-between">
                    <h5 class="modal-title" id="exampleModalLabel">Edit News</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <hr class="mt-2">
                <div class="container-fluid px-0 mb-5">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" class="form-control border-r-besar" id="judul" value="Design: A Survival Guide for Beginners">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deksripsi</label>
                                <textarea class="form-control border-r-besar" id="deskripsi" rows="5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse incidunt eveniet voluptas non rem nihil aliquid ex veritatis quis voluptates</textarea>
                            </div>
                            
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="foto" class="form-label" >Upload Foto</label>
                                <img src="{{ asset('assets/img/surveyasia_news_1.png') }}" alt="" width="70" class="d-block mb-1">
                                <input type="file" class="form-control border-r-besar" id="foto">
                                
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
                </div>
                
                <button type="button" class="btn text-white mx-auto px-lg-3 mt-5" style="background-color: #4C6FFF">Simpan</button>

                
                
            </div>
        
        </div>
    </div>
</div>

{{-- END OF MODAL EDIT NEWS --}}


@endsection
