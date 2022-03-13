@extends('layouts.footer')
@extends('researcher.layouts.base')
@extends('researcher.layouts.navbar')

@section('content')

<div class="container-fluid p-5">
    <h2 class="fw-bold text-center mb-5">{{ $subscription->subscription->name }} Account</h2>
    <form action="{{ route('researcher.transaction.store') }}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h5 class="fw-semibold mt-5">Rincian Pesanan</h5>
                <hr>
                <div class="row">
                    <div class="col">
                        <p>{{ $categorySubscription->title }}</p>
                    </div>
                    <input type="hidden" name="category_id" value="{{ $categorySubscription->id }}">
                    <div class="col text-end">
                        <h5 class="fw-semibold">Rp{{ number_format($categorySubscription->price, 0, 0,
                            '.') }}</h5>
                    </div>
                    <input type="hidden" name="price" value="{{ $categorySubscription->price }}">
                </div>
                <hr>
                <div class="d-flex justify-content-end">

                    <button type="submit" class="btn btn-orange radius-default w-25 my-3" id="pay-button">Beli</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
