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
        <div class="row mt-3">
            <div class="col-md-6">
                <input type="radio" class="btn-check" name="researcher" id="researcher" autocomplete="off"
                    value="researcher">
                <label class="btn bg-light radius-default" for="researcher"> <img
                        src="{{ asset('assets/img/researcher.svg') }}" alt="Researcher"
                        class="img-fluid radius-default p-4">
                    <p class="fw-semibold">Researcher</p>
                </label>
            </div>
            <div class="col-md-6 mt-3 mt-md-0">
                <input type="radio" class="btn-check" name="respondent" id="respondent" autocomplete="off"
                    value="respondent">
                <label class="btn bg-light radius-default" for="respondent"> <img
                        src="{{ asset('assets/img/respondent.svg') }}" alt="Responden"
                        class="img-fluid radius-default p-4">
                    <p class="fw-semibold">Respondent</p>
                </label>
            </div>
        </div>
        <p class="mt-3">*Pemilihan ini hanya untuk awal pengenalan,
            selanjutnya anda juga bisa mendapatkan
            keduanya</p>
        <div class="col mt-3">
            <a class="btn btn-orange radius-default w-75 my-3" disabled onclick="rolesButton()"
                role="button">Selanjutnya</a>
        </div>
    </div>
</section>
{{-- end pilih --}}

@endsection