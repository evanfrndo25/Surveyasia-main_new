@extends('layouts.footer')
@extends('layouts.base')
@extends('layouts.navbar')

@section('content')
    {{-- ktp --}}

    <section class="ktp bg-light" id="ktp">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 mt-5 text-center">
                    <form action="{{ route('respondent.validate.personal', $user->id) }}" method="get"
                        enctype="multipart/form-data">
                        {{-- @csrf --}}
                        <h4 class="fw-bold">Surveyasia memerlukan KTP anda untuk melakukan
                            validasi
                            <br>dan kami jamin kerahasiaan Anda akan terjaga</h2>
                            <div class="mt-5" id="drop_zone">
                                <h2>Click to Browse File to Upload</h2> {{-- onchange="previewImage()" --}}
                                <img id="img-preview" class="ms-4">
                                <div class="cari mt-5">
                                    <h6 class="text-secondary"> Tarik gambar KTP yang asli ke sini atau klik untuk
                                        {{-- <input type="file" name="fileUpload" id="fileUpload" hidden>
                                        <label for="fileUpload" class="text-orange @error('image_ktp') is-invalid @enderror "
                                            style="cursor: pointer;" id="fileUpload" onchange="previewImage(event)">Cari!
                                        </label> --}}
                                        <label for="fileUpload" class="text-orange " style="cursor: pointer">Cari!</label>
                                        <input type="file" id="fileUpload" accept="image/*" onchange="previewImage(event)"
                                            hidden>
                                        <span id="file-chosen">No file chosen</span>
                                    </h6>
                                </div>
                                @error('image_ktp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <p class="mt-3">Diharapkan agar file KTP yang diupload
                                memiliki kualitas yang baik dan jelas.</p>
                            <div class="row justify-content-center my-3">
                                <div class="col-md-3">
                                    <button class="btn btn-orange text-white my-3 w-100" id="next"
                                        onchange="previewImage(event)" type="submit">selanjutnya</button>
                                </div>
                            </div>
                    </form>
                </div>
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

    <script>
        const actualBtn = document.getElementById('fileUpload');

        const fileChosen = document.getElementById('file-chosen');

        actualBtn.addEventListener('change', function() {
            fileChosen.textContent = this.files[0].name
        })



        function previewImage(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("img-preview");
                preview.src = src;
                preview.style.display = "block";
            }
            const submit = document.getElementById('next');
            if (preview.src == '') {
                submit.disabled = true;
            } else {
                submit.disabled = false;
            }
        }
    </script>

@endsection
