@extends('admin.layouts.base')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
@endsection

@section('content')
<div class="container-fluid" style="background-color: #F7F8FC;">
    <div class="row">
        <div class="col-2 nopadding">
            @include('admin.component.sidebar')
        </div>
        <div class="col-10 nopadding">
            @include('admin.component.header')

            <div class="container py-4">
                <div class="container ">
                    <div class="row">
                        <div class="col">
                            <a href="{{ route('admin.questionbank.index') }}" class="mb-2 text-dark h5 text-decoration-none">
                                <i class="bi bi-arrow-left pe-2"></i>
                                Kembali
                            </a>
                            <h1 class=" text-center py-3" style="font-size: 30px">Edit Template</h1>
                            <form action="{{ route('admin.questionbank.update',  ['questionbank' => $id])}}"
                                method="post">
                                @method('put')
                                @csrf
                                <div class="card">
                                <div class="card-body">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Template</label>
                                    <input id="questionbank_templates_hidden" type="hidden"
                                        value="{{ $questionbanktemp[0]->question_bank_template_id }}">
                                    <select id="questionbank_templates_id"
                                        class="form-select border-r-5 border-0 bg-light"
                                        aria-label="Default select example" name="question_bank_template_id"
                                        value="{{ $questionbanktemp[0]->question_bank_template_id }}">
                                        @foreach ($questionbank_templates as $item)
                                        <option value="{{ $item->id }}"> {{ $item->template_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <script>
                                    const option = document.getElementById('questionbank_templates_id');
                                    const option_hidden = document.getElementById(
                                        'questionbank_templates_hidden');
                                    option.value = option_hidden.value;

                                </script>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Nama Sub Template</label>
                                    {{-- <input type="hidden" class="form-control border-r-5"
                            id="id" name="id"> --}}
                                    @foreach ($questionbanktemp as $dataitem)
                                    <input type="text" class="form-control border-r-5 border-0 bg-light"
                                        id="Sub Template" name="sub_template_name"
                                        value="{{ $dataitem->sub_template_name }}">
                                    @endforeach
                                    <!-- <input type="text" class="form-control border-r-besar"
                            id="Sub Template" name="sub_template_name"  value="{{ $item->sub_template_name }}"> -->

                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Tujuan Tamplate</label>
                                    @foreach ($questionbanktemp as $dataitem)
                                    <textarea class="form-control border-r-5 border-0 bg-light" id="description"
                                        rows="3" name="goals">{{ $dataitem->goals }}</textarea>
                                    <!-- <input class="form-control border-r-besar"
                            id="description" rows="3" name="goals" value="{{ $dataitem->goals }}"></input> -->
                                    @endforeach
                                </div>
                                <div class="mb-3 w-25">
                                    <label for="aktivitas" class="form-label">Activity</label>
                                    @if($questionbanktemp[0]->aktivitas == "Free")
                                    <select class="form-select border-r-5 border-0 bg-light" id="aktivitas" 
                                        name="aktivitas">
                                        <option>--Choose--</option>
                                        <option selected value="Free">Free</option>
                                        <option value="Premium">Premium</option>
                                    </select>
                                    @elseif($questionbanktemp[0]->aktivitas == "Premium")
                                    <select class="form-select border-r-5 border-0 bg-light" id="aktivitas"
                                        name="aktivitas">
                                        <option>--Choose--</option>
                                        <option value="Free">Free</option>
                                        <option selected value="Premium">Premium</option>
                                    </select>
                                    @endif
                                </div>
                                <div class="mb-3 w-25">
                                    <label for="language_id" class="form-label">Activity</label>
                                    @if($questionbanktemp[0]->language_id == 0)
                                    <select class="form-select border-r-5 border-0 bg-light" id="language_id"
                                        rows="3" name="language_id">
                                        <option>--Choose--</option>
                                        <option selected value="0">ENG</option>
                                        <option value="1">IND</option>
                                    </select>
                                    @elseif($questionbanktemp[0]->language_id == 1)
                                    <select class="form-select border-r-5 border-0 bg-light" id="language_id"
                                        rows="3" name="language_id">
                                        <option>--Choose--</option>
                                        <option value="0">ENG</option>
                                        <option selected value="1">IND</option>
                                    </select>
                                    @endif
                                </div>
                                <div class="mb-3 w-25">
                                    <label for="exampleFormControlInput1" class="form-label">Status</label>
                                    <select class="form-select border-r-5 border-0 bg-light"
                                        aria-label="Default select example" name="status">
                                        @if ($item->status == '0')
                                        <option selected value="0">Non Active</option>
                                        <option value="1">Active</option>
                                        @else
                                        <option value="0">Non Active</option>
                                        <option selected value="1">Active</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="col text-end">
                                <a href="{{ route('admin.questionbank.index') }}"
                                    class="btn btn-light text-black me-3 px-5 py-2">Batal</a>
                                    <button type="submit"
                                    class="btn btnx-orange text-white me-3 px-5 py-2">Simpan</button>
                            </form>
                            </div>
                        </div>
                                    </div>
                                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
