@extends('layouts.footer')
@extends('layouts.base')
@extends('layouts.navbar')

@section('content')

{{-- FAQ --}}
<section class="faq py-5 min-vh-100" id="faq">
    <div class="container">
        <h4 class="text-center fw-semibold">FAQ</h4>
        <hr class="hr-vm-orange mx-auto">
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center mt-5">
            <div class="col">
                <a href="/faq/general-information" class="link-dark text-decoration-none">
                    <div class="card text-center shadow border-white faq-card py-5">
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <p class="card-text fw-semibold">General Information</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="link-dark text-decoration-none">
                    <div class="card text-center shadow border-white faq-card py-5">
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <p class="card-text fw-semibold">Responden</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="link-dark text-decoration-none">
                    <div class="card text-center shadow border-white faq-card py-5">
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <p class="card-text fw-semibold">Researcher</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="link-dark text-decoration-none">
                    <div class="card text-center shadow border-white faq-card py-5">
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <p class="card-text fw-semibold">Template</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="link-dark text-decoration-none">
                    <div class="card text-center shadow border-white faq-card py-5">
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <p class="card-text fw-semibold">Tukar Point</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="link-dark text-decoration-none">
                    <div class="card text-center shadow border-white faq-card py-5">
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <p class="card-text fw-semibold">Question Bank</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
{{-- End FAQ --}}

@endsection