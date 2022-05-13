@extends('admin.layouts.base')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
<style>
    .form-abu .form-select,
    .form-abu .form-control {
        background-color: #fafafa;
    }

    .table-striped>tbody>tr:nth-child(odd)>td,
    .table-striped>tbody>tr:nth-child(odd)>th {
        background-color: #fff2ef33;
    }

</style>
@endsection

@section('content')
<div class="container-fluid" style="background-color: #F7F8FC;">
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

                <div class="row pt-4 pb-5">
                    <div class="col">
                        <div class=" input-group align-items-center w-50">
                            <input type="text" class="form-control rounded-pill py-2 text-center"
                                placeholder="Cari disini" aria-label="search" aria-describedby="basic-addon1"
                                style="font-size: 12px">
                            <a href="#">
                                <i
                                    class="position-absolute top-50 start-0 translate-middle-y bi bi-search p-2 ms-1 text-secondary"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col text-end">
                        <a href="" class="btn btn-orange text-white" data-bs-toggle="modal"
                            data-bs-target="#modal-add-sub-template">
                            <i class="bi bi-plus-lg"></i>
                            Tambah Sub Template
                        </a>
                    </div>
                    <!-- <form action="{{ url('/admin/set-language') }}" method="get" id="form-language">
                        @if($language_active == 0)
                        <select class="form-control" name="language" id="language-select">
                            <option selected value="0">ENG</option>
                            <option value="1">IND</option>
                        </select>
                        @elseif($language_active == 1)
                        <select class="form-control" name="language" id="language-select">
                            <option value="0">ENG</option>
                            <option selected value="1">IND</option>
                        </select>
                        @endif
                    </form> -->
                </div>
                <div class="card"  style="border-radius: 20px; overflow: hidden;">
                    <div class="card-body p-0">
                        <table class="table table-striped table-no-border-head align-middle">
                            <thead>
                                <tr class="fw-bold" style="background-color:#f6beb226;">
                                    <td scope="col" class="text-left py-3 align-middle">No</td>
                                    <td scope="col" class="text-left py-3 align-middle">Bahasa</td>
                                    <td scope="col" class="text-left py-3 align-middle">Sub Template</td>
                                    <td scope="col" class="text-left py-3 align-middle">Template</td>
                                    {{-- <td scope="col" class="text-left py-3 align-middle">Goals</td> --}}
                                    <td scope="col" class="text-left py-3 align-middle">Jumlah </br> Pertanyaan</td>
                                    <td scope="col" class="text-left py-3 align-middle">Aktivitas</td>
                                    <td scope="col" class="text-left py-3 align-middle">Status</td>
                                    <td scope="col" class="text-center py-3 align-middle">
                                        Aksi
                                    </td>
                                </tr>
                            </thead>
                            <tbody>

                                {{-- LOOPING DATA --}}

                                @foreach ($questionbank_sub_templates_act as $key => $item)

                                <tr>
                                    <td>{{ $questionbank_sub_templates_act->firstItem() + $key }}</td>

                                    <td class="text-left">
                                        {{ $item->status ? 'ID' : 'ENG' }}
                                    </td>

                                    @if (count($item->questions) == 0)

                                    <td class="text-left"><a href="#" class="sub">{{ $item->sub_template_name }}</a>
                                    </td>

                                    @else
                                    <td class="text-left"><a href="{{url('/admin/questionbank', ['id'=>$item])}}"
                                            class="sub">{{ $item->sub_template_name }}</a></td>

                                    @endif
                                    <td class="text-left">{{ $item->template->template_name }}</td>


                                    {{-- <td>{{ $item->goals }}</td> --}}
                                    <td class="text-left">{{ $item->questions->count() }}</td>
                                    <td class="text-left">{{ $item->aktivitas }}</td>
                                    <td scope="col" class="text-left">
                                        @if ($item->status == 0)
                                        <div class="text-rejected p-2 text-left rounded-pill text-center">Not Active
                                        </div>
                                        @else
                                        <div class="text-complete p-2 text-left rounded-pill text-center">Active</div>
                                        @endif
                                    <td scope="col" class="text-left">
                                    <div class="aksi-menu">
                                        <ul>
                                        <li><a class="btn btn-outline" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Pratinjau Pertanyaan"
                                            href="{{ route('admin.questionbank.show', $item->id) }}">
                                            <i class="bi bi-search"></i>
                                        </a></li>
                                        <li><a class="btn btn-outline" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit Template"
                                            href="{{ route('admin.questionbank.edit', ['questionbank' => $item->id])}}">
                                            <i class="bi bi-pencil-square"></i>
                                        </a></li>
                                        <li><a class="btn btn-outline" data-bs-toggle="modal" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus"
                                            data-bs-target="#deleteModal{{ $item->id }}">
                                            <i class="bi bi-trash"></i>
                                        </a></li>
                                        </ul>
                                    </div>
                                    </td>
                                    {{-- <td class="text-end"><a href="{{ route('admin.questionbank.show', $item->id) }}"
                                    class="btn bg-special-blue text-white">
                                    <i class="bi bi-vector-pen me-"></i>
                                    Detail</a>
                                    </td> --}}
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
                                                <img src="{{ asset('assets/img/delete.png') }}" class="img-fluid"
                                                    alt="">
                                                <h2 class="text-center">Hapus Sub Template?</h2>
                                                <p class="px-5 small text-secondary text-center">
                                                    Jika Anda menghapus sub template ini, maka semua pertanyaan di dalam
                                                    sub template akan terhapus secara <span
                                                        class="fw-bold">permanen</span> .
                                                    <br><br>
                                                    Apakah anda yakin ingin menghapus <span
                                                        class="fw-bold">{{ $item->sub_template_name }}</span> ?
                                                </p>
                                            </div>
                                            <div class="row px-4 pb-5">
                                                <form action="{{ route('admin.questionbank.destroy', $item->id)}}"
                                                    method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <div class="col d-grid gap-2">
                                                        <button type="submit" class="btn btn-danger">YA, HAPUS</button>
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
                        <div class="left">
                            Menampilkan
                            {{ $questionbank_sub_templates_act->firstItem() }}
                            sampai
                            {{ $questionbank_sub_templates_act ->lastItem() }}
                            dari
                            {{ $questionbank_sub_templates_act->total() }}
                            item
                        </div>
                        <ul class="pagination justify-content-end">
                            <div class="right">{{ $questionbank_sub_templates_act->links() }}</div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Add Tamplate -->
    <div class="modal fade form-abu" id="modal-add-sub-template" tabindex="-1" aria-labelledby="modal-edit-newsLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body py-4">
                    <div class="d-flex justify-content-between">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Sub Tamplate
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <hr class="mt-2">
                    <div class="container-fluid px-0 mb-5">
                        <div class="row">
                            <div class="col">
                                <form method="post" enctype="multipart/form-data" id="form-add">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="title" class="form-label fw-bold">Riset Pelanggan</label>
                                        <select class="form-select" aria-label="Default select example"
                                            name="question_bank_template_id">
                                            {{-- <option selected>Choose Templates</option> --}}
                                            @foreach ($questionbank_templates as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->template_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="title" class="form-label fw-bold">Nama Sub Template</label>
                                        {{-- <input type="hidden" class="form-control" id="id" name="id"> --}}
                                        <input type="text" class="form-control" placeholder="Masukan Nama Template"
                                            id="Sub Template" name="sub_template_name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="deskripsi" class="form-label fw-bold">Tujuan Tamplate</label>
                                        <input type="text" placeholder="Masukan Tujuan Tamplate" class="form-control"
                                            id="description" name="goals">
                                    </div>
                                    <div class="mb-3 w-25">
                                        <label for="aktivitas" class="form-label fw-bold">Aktifitas</label>
                                        <select class="form-select" id="aktivitas" rows="3" name="aktivitas">
                                            <option>--Choose--</option>
                                            <option value="Free">Free</option>
                                            <option value="Premium">Premium</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 w-25">
                                        <label for="language_id" class="form-label fw-bold">Bahasa</label>
                                        <select class="form-select" id="language_id" rows="3" name="language_id">
                                            <option>--Choose--</option>
                                            <option value="1">IND</option>
                                            <option value="0">ENG</option>
                                        </select>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col text-end">
                        <a href="{{ route('admin.questionbank.index') }}"
                            class="btn btn-light text-black me-3 px-5 py-2">Batal</a>
                        <button type="submit" class="btn btn-orange text-white me-3 px-5 py-2">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var form = document.getElementById('form-language');
    var language_select = document.getElementById('language-select');
    language_select.addEventListener('input', function () {
        form.submit();
    });

</script>


@endsection
