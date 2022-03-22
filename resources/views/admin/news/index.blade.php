@extends('admin.layouts.base')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
@endsection
@section('importLibraryArea')
<script src="/js/edit-news.js"></script>
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
                @if (session()->has('status'))
                <div class="alert alert-success">
                    {{ session()->get('status') }}
                </div>
                @endif
                <div class="position-relative input-group align-items-center" style="width: 15%">
                    <input type="text" class="form-control rounded-pill py-2 text-center"
                        placeholder="Search everything" aria-label="search" aria-describedby="basic-addon1"
                        style="font-size: 12px">
                    <a href="#">
                        <i
                            class="position-absolute top-50 start-0 translate-middle-y bi bi-search p-2 ms-1 text-secondary"></i>
                    </a>
                </div>

                <table class="table align-middle" id="table-news">
                    <thead>
                        <tr class="fw-bold">
                            <td scope="col" class="w-50">Title</td>
                            <td scope="col">Status</td>
                            <td scope="col">Category</td>
                            <td scope="col" class="text-end ms-5">
                                <a href="{{ route('admin.news.create') }}" class="btn bg-special-blue text-white">
                                    <i class="bi bi-vector-pen"></i>
                                    Add News
                                </a>
                            </td>
                        </tr>
                    </thead>
                    <tbody>

                        {{-- LOOPING NEWS --}}
                        @foreach ($news as $item)
                        <tr style="background-color: #F7FAFC;">
                            <td scope="col" class="py-4">
                                <h6 class="fw-bold" style="color: #2A4365">  {{ $item->title }}</h6>
                                <span class="d-block text-secondary" style="font-size: 13px">Posted
                                    {{ $item->created_at->diffForHumans() }}</span>
                            </td>
                            <td scope="col">
                                @if ($item->status == 0)
                                <div class="text-published rounded-pill text-center ">
                                    Drafted
                                </div>
                                @else
                                <div class="text-published rounded-pill text-center ">
                                    Published
                                </div>
                                @endif
                            </td>
                            <td scope="col">
                                {{-- <span class="fw-bold">120</span> --}}
                                Tech
                                {{-- <i class="bi bi-arrow-up-circle text-success"></i> --}}

                            </td>
                            <td scope="col" class="text-end pe-3">
                                <a href="#" role="button" id="dropdown-manage-news" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="bi bi-three-dots fs-3 text-secondary"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown-manage-news">
                                    <li><a class="dropdown-item"
                                            href="{{ route('admin.news.show',$item->slug) }}">Show</a></li>
                                    <li>
                                    <li><a class="dropdown-item" href="{{ route('admin.news.edit',$item->slug) }}">Edit
                                        </a></li>
                                    <li>
                                        <form action="{{ route('admin.news.destroy', $item->id) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <input type="hidden" name="img" value="{{ $item->img }}">
                                            <button type="submit" class="dropdown-item"
                                                onclick="return confirm('Apakah kamu yakin ingin menghapus?')">Delete</button>
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
                {{-- <nav aria-label="Page navigation example">
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

              <li class="page-item fs-2 me-2"> <a href="#"
                  class="text-semi-light text-decoration-none"> &#60; </a> </li>
              <li class="page-item fs-2 me-2"> <a href="#"
                  class="text-semi-light text-decoration-none"> &#62; </a> </li>
            </ul>
          </nav> --}}
                {{-- END OF PAGINATION --}}
                {{-- Current Page: {{ $news->currentPage() }}<br>
                Jumlah Data: {{ $news->total() }}<br>
                Data perhalaman: {{ $news->perPage() }}<br> --}}
                <br>
                {{ $news->links() }}
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit News -->
<div class="modal fade" id="modal-edit-news" tabindex="-1" aria-labelledby="modal-edit-newsLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body py-4">
                <div class="d-flex justify-content-between">
                    <h5 class="modal-title" id="exampleModalLabel">Edit News</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <hr class="mt-2">
                <div class="container-fluid px-0 mb-5">
                    <div class="row">
                        <div class="col">
                            <form method="post" enctype="multipart/form-data" id="form-edit">
                                @method('put')
                                @csrf
                                <div class="mb-3">
                                    <label for="foto" class="form-label">Upload Foto</label>
                                    <img id="img" alt="" width="70" class="d-block mb-1">
                                    <input type="file" class="form-control border-r-besar" id="foto" name="img">

                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="hidden" class="form-control border-r-besar" id="id" name="id">
                                    <input type="hidden" id="oldImg" name="oldImg">
                                    <input type="text" class="form-control border-r-besar" id="title" name="title">
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deksripsi</label>
                                    <textarea class="my-editor form-control editor-desc" id="my-editor" rows="5"
                                        name="description"></textarea>
                                </div>

                        </div>

                    </div>

                </div>

                <button type="submit" class="btn text-white mx-auto px-lg-3 mt-5"
                    style="background-color: #4C6FFF">Simpan
                </button>



            </div>

        </div>
    </div>
</div>

{{-- END OF MODAL EDIT NEWS --}}


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
