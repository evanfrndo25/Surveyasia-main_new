@extends('layouts.footer')
@extends('layouts.base')
@extends('respondent.layouts.navbar')

@section('content')

{{-- Pre Survey --}}
<section class="pre-survey py-5" id="pre-survey">
  <div class="container shadow p-4" style="border-radius: 16px;">
    <div class="card text-light" style="border-radius: 16px">
      <img src="/assets/img/pre_survey_hero.png" alt="Respondent" class="img-fluid w-100" style="border-radius: 16px">
      <div class="card-img-overlay">
        <div class="row">
          <div class="col">
            <h1>Survey promo Big Sale terhadap <br> intensitas belanja</h1>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-1 d-flex">
            <img src="/assets/img/prof_pic.png" alt="Profile Picture" class="img-fluid">
          </div>
          <div class="col">
            <div class="row">
              <div class="col">
                <h5>Indah Rahayu</h5>
                <p>Author</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row border rounded pt-3 mt-3 mx-1">
      <div class="col-md-3">
        <h6 class="fw-bold">Estimasi Pengerjaan</h6>
        <p class="text-default"><i class="far fa-clock fa-fw"></i> 10 Menit
        </p>
      </div>
      <div class="col-md-3">
        <h6 class="fw-bold">Jumlah Pertanyaan</h6>
        <p class="text-default">30 Pertanyaan</p>
      </div>
      <div class="col-md-3">
        <h6 class="fw-bold">Status</h6>
        <p class="text-default">Aktif</p>
      </div>
      <div class="col-md-3">
        <h6 class="fw-bold">Jumlah Hadiah</h6>
        <p class="text-default">Rp1.500</p>
      </div>
    </div>
    <div class="row border rounded mt-3 mx-1">
      <h6 class="py-3" style="background-color: #eee;">Deskripsi</h6>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente nemo
        sed excepturi ipsum quasi omnis
        expedita deserunt odit cumque, illum explicabo eum, autem voluptas
        commodi, beatae magnam dolorum
        consequatur natus. Lorem ipsum dolor sit amet consectetur adipisicing
        elit. Nam nostrum modi ea,
        pariatur mollitia expedita ad illo reiciendis nihil exercitationem odio
        debitis voluptates! Expedita
        quae autem animi voluptatum non repellendus? Lorem ipsum dolor sit amet
        consectetur adipisicing elit.
        Necessitatibus voluptate eum pariatur quidem. Delectus maxime
        asperiores, at doloremque aliquid libero
        velit nisi fuga voluptate dolorum!</p>
    </div>
    <div class="row rounded pt-3 mt-3 mx-1" style="background-color: #FFD789;">
      <p><b>*Jawab studi dengan jujur dan konsisten</b>, Suspendisse potenti.
        Nulla et mollis odio, in efficitur
        lectus.
        Mauris consequat id ante sit amet laoreet. Curabitur accumsan lacinia
        vehicula. Nam varius varius leo,
      </p>
    </div>
    <div class="row pt-4 pb-2 mx-1">
      <a href="/respondent/survey/pre-soal" class="btn btn-default text-white w-100" role="button">Mulai</a>
    </div>
  </div>
</section>
{{-- End Pre Survey --}}

@endsection