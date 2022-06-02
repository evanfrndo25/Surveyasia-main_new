@extends('admin.layouts.base')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
<style>
    body {
        background-color: #F7FAFC;
    }

</style>
@endsection
@section('importLibraryArea')
<script src="/js/edit-news.js"></script>
@endsection

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">

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
                <div class="row py-4">
                    <div class="col">
                        <div class="text-end">
                            <a href="{{ route('admin.news.create') }}" class="btn btn-orange text-white">
                                <i class="bi bi-plus-lg me-2"></i>
                                Tambah Berita
                            </a>
                        </div>
                    </div>
                </div>

                <table id="hempas" class="table table-no-border-head align-middle" style="border-radius: 20px; overflow: hidden; background-color:#ffffff">
                        <thead>
                            <tr class="fw-bold">
                                <tr class="fw-bold" style="background: rgba(246, 190, 178, 0.15); border-radius: 15px 15px 0px 0px;" >
                                    <td scope="col" class="text-left py-3 align-middle">Judul</td>
                                    <td scope="col" class="text-left py-3 align-middle">Status</td>
                                    <td scope="col" class="text-center py-3 align-middle">Kategori</td>
                                    <td scope="col" class="text-center py-3 align-middle">
                                        Aksi
                                    </td>
                                </tr>
                            </tr>
                        </thead>
                    <tbody>
                        {{-- LOOPING NEWS --}}
                        @foreach ($news as $item)
                        <tr >
                            <td scope="col" class="py-4">
                                <h6 class="fw-bold" style="color: #2A4365"> {{ $item->title }}</h6>
                                <span class="d-block text-secondary" style="font-size: 13px">
                                    {{ $item->created_at->format('d M Y H:i') }}</span>
                            </td>
                            <td scope="col" class="text-center">
                                @if ($item->status == 0)
                                <div class=" rounded-pill py-1 text-center" style="background-color: #FBE7E8; color: #A30D11;">
                                    Tidak Aktif
                                </div>
                                @else
                                <div class=" rounded-pill py-1 text-center" style="background-color: #EBF9F1;color: #1F9254;">
                                    Aktif
                                </div>
                                @endif
                            </td>
                            <td scope="col" class="text-center">
                                {{ $item->category }}
                            </td>

                            <td scope="col" class="text-end">
                            <div class="aksi-menu">
                                        <ul>
                                        <li><a class="btn btn-outline" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Pratinjau Pertanyaan"
                                            href="{{ route('admin.news.show',$item->slug) }}">
                                            <i class="bi bi-search"></i>
                                        </a></li>
                                        <li><a class="btn btn-outline" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit Template"
                                            href="{{ route('admin.news.edit',$item->slug) }}">
                                            <i class="bi bi-pencil-square"></i>
                                        </a></li>
                                        <li><a class="btn btn-outline" data-bs-toggle="modal" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus"
                                            data-bs-target="#deleteModal{{ $item->id }}">
                                            <i class="bi bi-trash"></i>
                                        </a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                                  <!-- Modal delete -->
                        <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1"
                            aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="btn ms-auto">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ asset('assets/img/delete.png') }}" class="img-fluid" alt="">
                                        <h2 class="text-center">Hapus News?</h2>
                                        <p class="px-5 small text-secondary text-center">Apakah kamu yakin ingin
                                            menghapus survey <span class="fw-bold">{{ $item->title }}</span> ? Jika anda
                                            menghapus survey, maka survey pada researcher dan respondent akan terhapus
                                            secara <span class="fw-bold">permanen</span> .</p>
                                    </div>
                                    <div class="row px-5 pb-5">
                                        <form action="{{ route('admin.news.destroy', $item->id) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <input type="hidden" name="img" value="{{ $item->img }}">
                                            <div class="col d-grid gap-2">
                                                <button type="submit" class="btn btn-danger">YA, HAPUS NEWS</button>
                                            </div>
                                        </form>
                                        <div class="col d-grid gap-2">
                                            <button type="button" class="btn btn-outline-secondary"
                                                data-bs-dismiss="modal">TIDAK, TETAP SIMPAN</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
                {{-- END OF LIST USER --}}
            </div>
        </div>
    </div>
</div>



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
                {{-- <ul class="pagination justify-content-end">
                    <div class="right">{{ $news->links() }}</div>
                </ul> --}}
                <br>
                
                <ul class="pagination justify-content-end">
                    <div class="right">{{ $news->links() }}</div>
                </ul>
                
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
<script src="//cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>
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

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
    $('#hempas').DataTable( {
        "language": {
            "decimal":        "",
    "emptyTable":     "Tidak ada data yang tersedia di tabel",
    "info":           "Menampilkan _START_ sampai _END_ dari _TOTAL_ item",
    "infoEmpty":      "Menampilkan 0 sampai 0 dari 0 item",
    "infoFiltered":   "(difilter dari _MAX_ total item)",
    "infoPostFix":    "",
    "thousands":      ",",
    "lengthMenu":     "Tampilkan _MENU_ item",
    "loadingRecords": "Memuat...",
    "processing":     "",
    "search":         "Cari :",
    "zeroRecords":    "Arsip tidak ditemukan",
    "paginate": {
        "next":       ">",
        "previous":   "<"
    },
        }
    } );
});
</script>
@endpush