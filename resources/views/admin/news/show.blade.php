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
                <a href="{{ route('admin.news.index') }}" class="mb-2 text-dark text-decoration-none" style="font-weight: 600;font-size: 16px;">
                    <i class="bi bi-chevron-left pe-2"></i>Kembali </a>
                <div class="row px-4 py-5">
                    <div class="col">
                        <div class="card p-4" style="background-color: #FFFFFF; border-radius: 20px;">
                            <h4 class="px-3 text-center">{{ $news->title }}</h3>
                            <div class="justify-content-center desc-news d-flex">
                                <p>{{ $news->category }}</p>
                                <p class="px-1">-</p>
                                <p>{{ $news->created_at->format('d M Y H:i') }}</p>
                                {{-- <p>{{ $news->created_at->diffForHumans() }}</p> --}}
                            </div>
                            
                            <div class="text-center">
                                <img src="{{ url('storage/'.$news->img) }}" class="w-50">
                            </div>
                            
                            <div class="card-body desc-news">
                                <p>{!! $news->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
