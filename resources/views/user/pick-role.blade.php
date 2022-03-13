@extends('layouts.footer')
@extends('layouts.base')
@extends('layouts.nav')

@section('content')

{{-- pilih --}}
<section class="pilih-form py-5" id="pilih-form">
    <div class="container text-center">
        <h4 class="fw-bold">
            Memulai menggunakan SurveyAsia! </h4>
        <p class="mt-3">Pilihlah salah satu untuk kamu</p>
        <div class="row">
            <div class="col-md-6 mt-5 mb-5" id="asResearcher">
                <form action="{{ route('user.store-role') }}" method="post">
                    @csrf
                    <input type="hidden" name="role" value="2">
                    <a href="#" class="link-dark text-decoration-none" type="submit">
                        <img src="{{ asset('assets/img/researcher.svg') }}" alt="Researcher"
                            class="img-fluid rounded p-4">
                        <p class="fw-bold">Researcher</p>
                    </a>
                </form>
            </div>
            <div class="col-md-6 mt-5 mb-5" id="asRespondent">
                <form action="{{ route('user.store-role') }}" method="post">
                    @csrf
                    <input type="hidden" name="role" value="3">
                    <a href="#" class="link-dark text-decoration-none" type="submit">
                        <img src="{{ asset('assets/img/respondent.svg') }}" alt="Responden"
                            class="img-fluid rounded p-4">
                        <p class="fw-bold">Respondent</p>
                    </a>
                </form>
                </label>
            </div>
        </div>
        <p class="mt-3">*Pemilihan ini hanya untuk awal pengenalan, selanjutnya anda juga bisa mendapatkan keduanya</p>
    </div>
    </div>
</section>
{{-- end pilih --}}


<script>
    $(function() {
            const role2 = $('#asResearcher');
            role2.on('mouseenter', function() {
                $(this).addClass('shadow-lg');
            });
            role2.on('mouseleave', function() {
                $(this).removeClass('shadow-lg');
            });
            role2.on('click', function() {
                this.firstElementChild.submit();
                return false;
            });

            const role3 = $('#asRespondent');
            role3.on('mouseenter', function() {
                $(this).addClass('shadow-lg');
            });
            role3.on('mouseleave', function() {
                $(this).removeClass('shadow-lg');
            });
            role3.on('click', function() {
                this.firstElementChild.submit();
                return false;
            });
        });
</script>

@endsection