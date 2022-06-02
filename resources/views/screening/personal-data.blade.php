@extends('layouts.footer')
@extends('layouts.base')
@extends('layouts.nav')

@section('js')
<script src="/js/validasi/checkNIK.js"></script>
@endsection

@section('content')

{{-- Personal Data --}}
<section class="personal-data py-5" id="personal-data">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>3 Cara mudah</h2>
                <p class="fs-14px">Pendaftaran Responden SurveyAsia</p>
                <ol class="text-orange">
                    <li>
                        <h5>Upload E-KTP</h5>
                    </li>
                    <li>
                        <h5>Data Pribadi</h5>
                    </li>
                    <li>
                        <h5>Data Alamat</h5>
                    </li>
                </ol>
            </div>

            <div class="col-md-9">
                <div class="row">
                    <form action="{{ route('respondent.validate.save', $user->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <h2 class="text-orange fw-bold">Data Pribadi</h2>
                        <div class="col-md-12 border radius-default p-4">
                         {{--   <div class="upload-ktp text-center mb-5">
                                <img src="{{ asset('assets/img/ktp_dummy.jpg') }}" alt="Uploaded KTP"
                                    class="img-fluid ms-5 " id="img-preview" name="image_ktp">
                                <div class="cari mt-5 @error('image_ktp') is-invalid @enderror">
                                    <label for="fileUpload" class="text-orange " style="cursor: pointer">Upload
                                        File!</label>
                                    <input type="file" name="image_ktp" id="fileUpload" accept="image/*"
                                        onchange="previewImage(event)" hidden>
                                    <span id="file-chosen">No file chosen</span>
                                    </h6>
                                </div>
                                @error('image_ktp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div> --}} 

                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK (Nomor Induk Kependudukan)</label>
                                <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik"
                                    name="nik" aria-describedby="nikHelp" required value="{{ old('nik') }}">
                                @error('nik')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <p class="text-danger " id="messageNIK" hidden></p>
                            </div>
                            <div class="mb-3">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap
                                </label>
                                <!-- <input type="text" class="form-control" onkeypress="if(event.key.match(/^[a-zA-ZÑñ\s]+$/) == null) { return false; }" /> -->
                                <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror"
                                    id="nama_lengkap" name="nama_lengkap" aria-describedby="titleHelp" required
                                    value="{{ old('nama_lengkap') }}">
                                @error('nama_lengkap')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="gender" class="form-label">Jenis Kelamin</label>
                                <select class="form-select @error('gender') is-invalid @enderror" name="gender"
                                    aria-label="Default select example" required value="{{ old('gender') }}">
                                    <option selected></option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                                @error('gender')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="placeOfBirth" class="form-label">Tempat
                                    Lahir</label>
                                <!-- <input type="text" class="form-control" onkeypress="if(event.key.match(/^[a-zA-ZÑñ\s]+$/) == null) { return false; }" /> -->

                                <input type="address" class="form-control @error('birth_place') is-invalid @enderror"
                                    id="placeOfBirth" name="birth_place" aria-describedby="placeOfBirthHelp" required
                                    value="{{ old('birth_place') }}">
                                @error('birth_place')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="dateOfBirth" class="form-label">Tanggal
                                    Lahir</label>
                                <input type="date" class="form-control @error('birth_date') is-invalid @enderror"
                                    id="dateOfBirth" name="birth_date" aria-describedby="dateOfBirthHelp" required
                                    value="{{ old('birth_date') }}">
                                @error('birth_date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="job" class="form-label">Pekerjaan</label>
                                <!-- <input type="text" class="form-control" onkeypress="if(event.key.match(/^[a-zA-ZÑñ\s]+$/) == null) { return false; }" /> -->

                                <input type="text" class="form-control @error('job') is-invalid @enderror" id="job"
                                    name="job" aria-describedby="jobHelp" required value="{{ old('job') }}">
                                @error('job')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jobAddress" class="form-label">Alamat
                                    Kantor</label>
                                <textarea class="form-control @error('job_location') is-invalid @enderror"
                                    name="job_location" id="jobAddress" rows="3" required
                                    value="{{ old('job_location') }}"></textarea>
                                @error('job_location')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <h2 class="text-orange fw-bold mt-5">Data Alamat</h2>
                        <div class="col-md-12 border radius-default p-4">
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">

                                        <label for="prov" class="form-label">Provinsi</label>
                                        <select class="form-control" name="prov" id="prov">
                                            <option> - Pilih Provinsi -</option>
                                        </select>

                                        <input type="hidden"
                                            class="form-control @error('ktp_province') is-invalid @enderror"
                                            id="province" name="ktp_province" aria-describedby="provinceHelp" required
                                            value="{{ old('ktp_province') }}">

                                        @error('ktp_province')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror

                                    </div>
                                    <div class="col-md-6">

                                        <label for="cit" class="form-label">Kota</label>
                                        <select class="form-control" name="cit" id="cit">
                                            <option> - Pilih Kota -</option>
                                        </select>

                                        <input type="hidden"
                                            class="form-control @error('ktp_city') is-invalid @enderror" id="city"
                                            name="ktp_city" aria-describedby="cityHelp" required
                                            value="{{ old('ktp_city') }}">
                                        @error('ktp_city')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">

                                        <label for="dis" class="form-label">Kecamatan</label>
                                        <select class="form-control" name="dis" id="dis">
                                            <option> - Pilih Kecamatan -</option>
                                        </select>

                                        <input type="hidden"
                                            class="form-control @error('ktp_district') is-invalid @enderror"
                                            id="district" name="ktp_district" aria-describedby="districtHelp" required
                                            value="{{ old('ktp_district') }}">

                                        @error('ktp_district')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror

                                    </div>
                                    <div class="col-md-6">
                                        <label for="zipCode" class="form-label">Kode Pos</label>
                                        <input type="address"
                                            class="form-control @error('ktp_postal_code') is-invalid @enderror"
                                            id="zipCode" name="ktp_postal_code" aria-describedby="zipCodeHelp" required
                                            value="{{ old('ktp_postal_code') }}">
                                        @error('ktp_postal_code')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="addressTextArea" class="form-label">Alamat</label>
                                <textarea class="form-control @error('ktp_address') is-invalid @enderror"
                                    name="ktp_address" id="addressTextArea" rows="3" required
                                    value="{{ old('ktp_address') }}"></textarea>
                                @error('ktp_address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="checkbox mt-3">
                                <label>
                                    <input type="checkbox" name="similar_address" id="checkbox" class="address-id-card"
                                        onchange="addressChecked()">
                                    Alamat tinggal saat ini sesuai dengan KTP
                                </label>
                            </div>
                            <div class="current-address">
                                <div class="mt-5 mb-3">
                                    <div class="row">
                                        <h5 class="text-orange">Alamat tinggal saat ini</h5>
                                        <div class="col-md-6">

                                            <label for="at_prov" class="form-label">Provinsi</label>
                                            <select class="form-control" name="at_prov" id="at_prov">
                                                <option> - Pilih Provinsi -</option>
                                            </select>

                                            <input type="hidden"
                                                class="form-control @error('province') is-invalid @enderror"
                                                id="at_province" name="province" aria-describedby="provinceHelp">

                                            @error('province')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror

                                        </div>
                                        <div class="col-md-6">

                                            <label for="at_cit" class="form-label">Kota</label>
                                            <select class="form-control" name="at_cit" id="at_cit">
                                                <option> - Pilih Kota -</option>
                                            </select>

                                            <input type="hidden"
                                                class="form-control @error('city') is-invalid @enderror" id="at_city"
                                                name="city" aria-describedby="cityHelp">

                                            @error('city')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6">

                                            <label for="at_dis" class="form-label">Kecamatan</label>
                                            <select class="form-control" name="at_dis" id="at_dis">
                                                <option> - Pilih Kecamatan -</option>
                                            </select>

                                            <input type="hidden"
                                                class="form-control @error('district') is-invalid @enderror"
                                                id="at_district" name="district" aria-describedby="districtHelp">

                                            @error('district')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror

                                        </div>
                                        <div class="col-md-6">
                                            <label for="zipCode" class="form-label">Kode
                                                Pos</label>
                                            <input type="address"
                                                class="form-control @error('postal_code') is-invalid @enderror"
                                                id="at_zipCode" name="postal_code" aria-describedby="zipCodeHelp">
                                            @error('postal_code')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="addressTextArea" class="form-label">Alamat</label>
                                    <textarea class="form-control @error('address') is-invalid @enderror" name="address"
                                        id="addressTextArea" rows="3"></textarea>
                                    @error('address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <p class="text-muted fs-12px">* Jika alamat saat ini tidak diisi maka akan disesuaikan
                                    dengan alamat pada KTP anda</p>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-6">
                                <a class="btn btn-outline-orange radius-default w-100" href="{{ URL::previous() }}"
                                    role="button">Kembali</a>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-orange radius-default text-white w-100"
                                    id="btn-submit">Selesai</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End Personal Data --}}


<script>
    // preview ktp
        const actualBtn = document.getElementById('fileUpload');

        const fileChosen = document.getElementById('file-chosen');

        actualBtn.addEventListener('change', function() {
            fileChosen.textContent = this.files[0].name
        })


        // hide img-hide
        const imgHide = document.querySelector('.img-hidden');
        [].forEach.call(document.querySelectorAll('.imgHide'), function(el) {
            el.style.visibility = 'hidden';
        });


        function previewImage(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("img-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }


        // api kota
        var provSelect = document.querySelector('#prov');
        var provInput = document.querySelector('#province');

        var citSelect = document.querySelector('#cit');
        var citInput = document.querySelector('#city');

        var disSelect = document.querySelector('#dis');
        var disInput = document.querySelector('#district');

        var posInput = document.querySelector('#zipCode');

        getText("https://kodepos-2d475.firebaseio.com/list_propinsi.json?print=pretty");

        async function getText(url) {
            let provinces = await fetch(url);
            let pro = await provinces.json();

            Object.keys(pro).forEach(function(key) {
                var op = document.createElement("option");
                op.setAttribute("value", key);
                var text = document.createTextNode(pro[key]);
                op.appendChild(text);
                provSelect.appendChild(op);
            });

        }

        provSelect.addEventListener('change', function() {
            provInput.value = provSelect.options[provSelect.selectedIndex].text;

            // citSelect.selectedIndex = 0;
            // disSelect.selectedIndex = 0;

            citSelect.replaceChildren();
            disSelect.replaceChildren();
            posInput.value = '';

            getText("https://kodepos-2d475.firebaseio.com/list_kotakab/" + provSelect.value + ".json?print=pretty");

            async function getText(url) {
                let cities = await fetch(url);
                let cit = await cities.json();

                var ci = document.createElement("option");
                ci.setAttribute("value", '');
                var text = document.createTextNode('--choose--');
                ci.appendChild(text);
                citSelect.appendChild(ci);

                Object.keys(cit).forEach(function(key) {
                    var ci = document.createElement("option");
                    ci.setAttribute("value", key);
                    var text = document.createTextNode(cit[key]);
                    ci.appendChild(text);
                    citSelect.appendChild(ci);
                });

            }

        });

        citSelect.addEventListener('change', function() {
            citInput.value = citSelect.options[citSelect.selectedIndex].text;

            disSelect.replaceChildren();
            posInput.value = '';

            getText("https://kodepos-2d475.firebaseio.com/kota_kab/" + citSelect.value + ".json?print=pretty");

            async function getText(url) {
                let districts = await fetch(url);
                let dis = await districts.json();

                var di = document.createElement("option");
                di.setAttribute("value", '');
                var text = document.createTextNode('-- pilih --');
                di.appendChild(text);
                disSelect.appendChild(di);

                Object.keys(dis).forEach(function(key) {
                    var di = document.createElement("option");
                    di.setAttribute("value", dis[key].kodepos);
                    var text = document.createTextNode(dis[key].kecamatan + " Kelurahan " + dis[key]
                        .kelurahan);
                    di.appendChild(text);
                    disSelect.appendChild(di);
                });
            }

        });

        disSelect.addEventListener('change', function() {
            posInput.value = disSelect.value;
            disInput.value = disSelect.options[disSelect.selectedIndex].text;
        });

        //////////////////////////////////////Alamat Tinggal

        var at_provSelect = document.querySelector('#at_prov');
        var at_provInput = document.querySelector('#at_province');

        var at_citSelect = document.querySelector('#at_cit');
        var at_citInput = document.querySelector('#at_city');

        var at_disSelect = document.querySelector('#at_dis');
        var at_disInput = document.querySelector('#at_district');

        var at_posInput = document.querySelector('#at_zipCode');

        at_getText("https://kodepos-2d475.firebaseio.com/list_propinsi.json?print=pretty");

        async function at_getText(url) {
            let at_provinces = await fetch(url);
            let at_pro = await at_provinces.json();

            console.log(at_pro);

            Object.keys(at_pro).forEach(function(key) {
                var at_op = document.createElement("option");
                at_op.setAttribute("value", key);
                var text = document.createTextNode(at_pro[key]);
                at_op.appendChild(text);
                at_provSelect.appendChild(at_op);
            });

        }

        at_provSelect.addEventListener('change', function() {
            at_provInput.value = at_provSelect.options[at_provSelect.selectedIndex].text;

            at_citSelect.replaceChildren();
            at_disSelect.replaceChildren();
            at_posInput.value = '';

            getText("https://kodepos-2d475.firebaseio.com/list_kotakab/" + at_provSelect.value +
                ".json?print=pretty");

            async function getText(url) {
                let at_cities = await fetch(url);
                let at_cit = await at_cities.json();

                var at_ci = document.createElement("option");
                at_ci.setAttribute("value", '');
                var text = document.createTextNode('-- pilih --');
                at_ci.appendChild(text);
                at_citSelect.appendChild(at_ci);

                Object.keys(at_cit).forEach(function(key) {
                    var at_ci = document.createElement("option");
                    at_ci.setAttribute("value", key);
                    var text = document.createTextNode(at_cit[key]);
                    at_ci.appendChild(text);
                    at_citSelect.appendChild(at_ci);
                });

            }

        });

        at_citSelect.addEventListener('change', function() {
            at_citInput.value = at_citSelect.options[at_citSelect.selectedIndex].text;

            at_disSelect.replaceChildren();
            at_posInput.value = '';

            getText("https://kodepos-2d475.firebaseio.com/kota_kab/" + at_citSelect.value + ".json?print=pretty");

            async function getText(url) {
                let at_districts = await fetch(url);
                let at_dis = await at_districts.json();

                console.log(at_dis);

                var at_di = document.createElement("option");
                at_di.setAttribute("value", '');
                var text = document.createTextNode('-- pilih --');
                at_di.appendChild(text);
                at_disSelect.appendChild(at_di);

                Object.keys(at_dis).forEach(function(key) {
                    var at_di = document.createElement("option");
                    at_di.setAttribute("value", at_dis[key].kodepos);
                    var text = document.createTextNode(at_dis[key].kecamatan + " Kelurahan " + at_dis[
                        key].kelurahan);
                    at_di.appendChild(text);
                    at_disSelect.appendChild(at_di);
                });
            }

        });

        at_disSelect.addEventListener('change', function() {
            at_posInput.value = at_disSelect.value;
            at_disInput.value = at_disSelect.options[at_disSelect.selectedIndex].text;
        });
</script>


@endsection