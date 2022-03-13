@extends('layouts.base')
@extends('layouts.nav')

@section('content')
  {{-- ktp --}}

  <section class="ktp bg-light" id="ktp">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 mt-5 text-center">
          <h4 class="fw-bold">Surveyasia memerlukan KTP anda untuk melakukan
            validasi
            <br>dan kami jamin kerahasiaan Anda akan terjaga</h2>
            <div class="mt-5" id="drop_zone">
              <h2>Click to Browse File to Upload</h2>
              <div class="cari mt-5">
                <h6 class="text-secondary"> Tarik gambar KTP yang asli ke sini atau
                  <input type="file" name="fileUpload" id="fileUpload" hidden>
                  <label for="fileUpload" class="text-orange"
                    style="cursor: pointer;">Cari!</label>
                </h6>
              </div>
            </div>
            <p class="mt-3">Diharapkan agar file KTP yang diupload
              memiliki kualitas yang baik dan jelas.</p>
            {{-- <div class="progress mt-4">
            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div> --}}
        </div>
      </div>
      <div class="row justify-content-center my-3">
        <div class="col-md-3">
          <a class="btn btn-orange text-white my-3 w-100"
            href="{{ route('change.form') }}" role="button">Selanjutnya</a>
        </div>
      </div>

      <hr>

      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card mt-5">
            <div class="card-body">
              <p class="fs-5">Gambar identitas & pas foto harus terbaca
                jelas</p>
              <p class="text-secondary mb-0">( Gambar tidak kabur, rusak atau
                terkena pantulan cahaya )</p>
            </div>
          </div>
          <div class="card mt-4">
            <div class="card-body fs-5">
              Foto identitas adalah dokumen asli, bukan dokumen fotokopi
            </div>
          </div>
          <div class="card mt-4 my-5">
            <div class="card-body fs-5">
              Identitas yang terdaftar adalah data yang masih berlaku
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>



@endsection
