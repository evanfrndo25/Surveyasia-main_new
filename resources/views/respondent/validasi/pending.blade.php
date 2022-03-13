@extends('layouts.base')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h1>Mohon tunggu Verifikasi ini</h1>
            <a href="{{ route('respondent.dashboard') }}" class="btn btn-primary">Home</a>
        </div>
    </div>
</div>
@endsection
