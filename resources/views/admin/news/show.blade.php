@extends('admin.layouts.base')

@section('css')
<style>
    body {
        background-color: #F7FAFC;
    }

</style>

<link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
@endsection


@section('content')
<div class="container-fluid">
    <div class="row border">
        <div class="col-2 nopadding">
            @include('admin.component.sidebar')
        </div>
        <div class="col-10 nopadding">
            @include('admin.component.header')

            <div class="container mt-2" style="height: 650px;">
                <div class="row bg-white px-4 py-5">
                    <div class="col-6">
                        <div class="card p-4">
                            <h5 class="px-3">{{ $news->title }}</h5>
                            <img src="{{ url('storage/'.$news->img) }}">
                            <div class="card-body">
                                <p>{!! $news->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
