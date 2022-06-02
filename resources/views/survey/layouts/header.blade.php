<section class="header-survey pt-5" id="header-survey">
    <div class="container">
        {{-- Header --}}
        <div class="card border-0 radius-default shadow">
            <div class="row">
                <div class="col-md-9">
                    <img src="{{ asset('assets/img/bg_history.png') }}" class="img-fluid card-img-top radius-default"
                        alt="History">
                    {{-- <div class="card-img-overlay d-flex align-items-center ps-5">
                        <img src="{{ asset('assets/img/ic_balance_ticket.svg') }}" alt="Total Balance"
                            class="img-fluid me-3" width="35">
                        <h4 class="text-white fw-semibold">Saldo belum tersedia.</h4>
                    </div> --}}
                </div>
                {{-- <div class="col-md-3 align-self-center text-end pe-5">
                    <h4 class="fw-bold">Rp{{ number_format(0, 0, 0, '.') }}</h4>
                </div> --}}
            </div>
        </div>
        {{-- End Header --}}
    </div>
</section>