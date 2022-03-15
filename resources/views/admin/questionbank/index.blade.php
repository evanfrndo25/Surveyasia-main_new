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
                @if (session()->has('status'))
                <div class="alert alert-success">
                    {{ session()->get('status') }}
                </div>
                @endif

                <div class="d-flex justify-content-between">
                    <h1>Question Bank</h1>
                    <form action="{{ url('/admin/set-language') }}" method="get" id="form-language">
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
                    </form>
                </div>
                <table class="table table-no-border-head align-middle">
                    <thead>
                        <tr class="fw-bold">
                            <td scope="col">#</td>
                            <td scope="col">Sub Template</td>
                            <td scope="col">Template</td>
                            {{-- <td scope="col">Goals</td> --}}
                            <td scope="col">Jumlah Pertanyaan</td>
                            <td scope="col">Aktivitas</td>
                            <td scope="col">Status</td>
                            <td class="text-end">
                                <a href="" class="btn bg-special-blue text-white" data-bs-toggle="modal"
                                    data-bs-target="#modal-add-sub-template">
                                    <i class="bi bi-vector-pen me-"></i>
                                    Add Sub Template
                                </a>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                    <tbody>

                        {{-- LOOPING DATA --}}

                        @foreach ($questionbank_sub_templates_act as $item)

                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            @if (count($item->questions) == 0)

                            <td><a href="#" class="sub">{{ $item->sub_template_name }}</a></td>

                            @else
                            <td><a href="{{url('/admin/questionbank', ['id'=>$item])}}"
                                    class="sub">{{ $item->sub_template_name }}</a></td>

                            @endif
                            <td>{{ $item->template->template_name }}</td>


                            {{-- <td>{{ $item->goals }}</td> --}}
                            <td>{{ $item->questions->count() }}</td>
                            <td>{{ $item->aktivitas }}</td>
                            @if ($item->status == 0)
                            <td>Not Active</td>
                            @else
                            <td>Active</td>
                            @endif
                            <td scope="col" class="text-end pe-3">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn bg-special-blue"
                                        href="{{ route('admin.questionbank.show', $item->id) }}">Add
                                        questions</a>
                                    <button type="button" class="btn btn-primary">Middle</button>
                                    <button type="button" class="btn btn-primary">Right</button>
                                </div>
                                <a href="#" role="button" id="dropdown-manage-news" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="bi bi-three-dots fs-3 text-secondary"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown-manage-news">
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ route('admin.questionbank.show', $item->id) }}">Add
                                            questions</a>
                                    </li>
                                    <form id="edit-form" class="form-horizontal" method="POST" action="">

                                        <li>
                                            {{-- <a class="dropdown-item" href="{{route('questionbank.edit',$item->id)}}"
                                            data-bs-toggle="modal" data-bs-target="#modal-add-sub-template"
                                            data-title="{{ $item->question_bank_template_id }}"
                                            data-title="{{ $item->sub_template_name }}"
                                            data-escription="{{ $item->sub_template_name }}"
                                            data-id="{{ $item->id }}">Edit </a> --}}
                                            <a class="dropdown-item"
                                                href="{{route('admin.questionbank.edit',['questionbank' => $item->id])}}">Edit
                                            </a>
                                        </li>

                                    </form>
                                    <li>

                                        <form action="{{ route('admin.questionbank.destroy', $item->id)}}"
                                            method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="dropdown-item"
                                                onclick="return confirm('Apakah kamu yakin ingin menghapus?')">Delete</button>
                                        </form>
                                    </li>

                                </ul>
                            </td>
                            {{-- <td class="text-end"><a href="{{ route('admin.questionbank.show', $item->id) }}"
                            class="btn bg-special-blue text-white">
                            <i class="bi bi-vector-pen me-"></i>
                            Detail</a>
                            </td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Add Tamplate -->
    <div class="modal fade" id="modal-add-sub-template" tabindex="-1" aria-labelledby="modal-edit-newsLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body py-4">
                    <div class="d-flex justify-content-between">
                        <h5 class="modal-title" id="exampleModalLabel">Add Sub Template
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
                                        <label for="title" class="form-label">Template</label>
                                        <select class="form-select border-r-besar" aria-label="Default select example"
                                            name="question_bank_template_id">
                                            {{-- <option selected>Choose Templates</option> --}}
                                            @foreach ($questionbank_templates as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->template_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Sub Template
                                            Name</label>
                                        {{-- <input type="hidden" class="form-control border-r-besar"
                        id="id" name="id"> --}}
                                        <input type="text" class="form-control border-r-besar" id="Sub Template"
                                            name="sub_template_name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="aktivitas" class="form-label">Activity</label>
                                        <select class="form-select border-r-besar" id="aktivitas" rows="3"
                                            name="aktivitas">
                                            <option>--Choose--</option>
                                            <option value="Free">Free</option>
                                            <option value="Premium">Premium</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="language_id" class="form-label">Language</label>
                                        <select class="form-select border-r-besar" id="language_id" rows="3"
                                            name="language_id">
                                            <option>--Choose--</option>
                                            <option value="1">IND</option>
                                            <option value="0">ENG</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="deskripsi" class="form-label">Goals</label>
                                        <textarea class="form-control border-r-besar" id="description" rows="3"
                                            name="goals"></textarea>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn text-white mx-auto px-lg-3 mt-5"
                        style="background-color: #4C6FFF">Add
                    </button>
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
