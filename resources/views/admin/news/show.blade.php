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
                    <div class="col">
                        <img width="200" src="{{ url('storage/'.$news->img) }}">
                        <h5>{{ $news->title }}</h5>
                        <p>{!! $news->description !!}</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
