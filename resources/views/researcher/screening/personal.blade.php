@extends('layouts.footer')
@extends('layouts.base')
@extends('layouts.nav')

@section('content')

{{-- Personal Data --}}
<section class="personal-data py-5" id="personal-data">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>3 Cara mudah</h2>
                <p>Pendaftaran Responden Surveyasia</p>
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
                    {{-- <li>
                        <h5>Email & Password</h5>
                    </li> --}}
                </ol>
            </div>

            <div class="col-md-9">
                <div class="row">
                    <form action="{{ route('change.asRespondent') }}" method="post">
                        @csrf
                        <input type="hidden" name="role" value="3">
                        <h2 class="text-orange fw-semibold">Data Pribadi</h2>
                        <div class="col-md-12 border rounded p-4">
                            <div class="upload-ktp text-center mb-5">
                                <img src="/assets/img/ktp_dummy.jpg" alt="Uploaded KTP" class="img-fluid">
                            </div>

                            @if ($errors->any())
                            <div class="mb-3">
                                <h4>List Of Errors</h4>
                                @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                                @endforeach
                            </div>
                            @endif
                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK (Nomor Induk
                                    Kependudukan) *</label>
                                <input type="text" class="form-control" id="nik" name="nik" aria-describedby="nikHelp"
                                    required value="{{ old('nik') }}">
                                @error('nik')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap
                                </label>
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                    aria-describedby="titleHelp" required value="{{ old('nama_lengkap') }}">
                                @error('nama_lengkap')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="gender" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" name="gender" aria-label="orange select example" required
                                    value="{{ old('gender') }}">
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
                                <input type="address" class="form-control" id="placeOfBirth" name="birth_place"
                                    aria-describedby="placeOfBirthHelp" required value="{{ old('birth_place') }}">
                                @error('birth_place')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="dateOfBirth" class="form-label">Tanggal
                                    Lahir</label>
                                <input type="date" class="form-control" id="dateOfBirth" name="birth_date"
                                    aria-describedby="dateOfBirthHelp" required value="{{ old('birth_date') }}">
                                @error('birth_date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="job" class="form-label">Pekerjaan</label>
                                <input type="text" class="form-control" id="job" name="job" aria-describedby="jobHelp"
                                    required value="{{ old('job') }}">
                                @error('job')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jobAddress" class="form-label">Alamat
                                    Kantor</label>
                                <textarea class="form-control" name="job_location" id="jobAddress" rows="3" required
                                    value="{{ old('job_location') }}"></textarea>
                                @error('job_location')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <h2 class="text-orange fw-semibold mt-5">Data Alamat</h2>
                        <div class="col-md-12 border rounded p-4">
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="province" class="form-label">Provinsi</label>
                                        <input type="address" class="form-control" id="province" name="ktp_province"
                                            aria-describedby="provinceHelp" required value="{{ old('ktp_province') }}">
                                        @error('ktp_province')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="city" class="form-label">Kota</label>
                                        <input type="address" class="form-control" id="city" name="ktp_city"
                                            aria-describedby="cityHelp" required value="{{ old('ktp_city') }}">
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
                                        <label for="district" class="form-label">Kecamatan</label>
                                        <input type="address" class="form-control" id="district" name="ktp_district"
                                            aria-describedby="districtHelp" required value="{{ old('ktp_district') }}">
                                        @error('ktp_district')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="zipCode" class="form-label">Kode Pos</label>
                                        <input type="address" class="form-control" id="zipCode" name="ktp_postal_code"
                                            aria-describedby="zipCodeHelp" required
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
                                <textarea class="form-control" name="ktp_address" id="addressTextArea" rows="3" required
                                    value="{{ old('ktp_address') }}"></textarea>
                                @error('ktp_address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="checkbox mt-3">
                                <label>
                                    <input type="checkbox" name="similar_address" id="checkbox" value="checked"
                                        class="address-id-card" onchange="addressChecked()">
                                    Alamat tinggal saat ini sesuai dengan
                                    KTP
                                </label>
                            </div>
                            <div class="current-address">
                                <div class="mt-5 mb-3">
                                    <div class="row">
                                        <h5 class="text-orange">Alamat tinggal saat ini</h5>
                                        <div class="col-md-6">
                                            <label for="province" class="form-label">Provinsi</label>
                                            <input type="address" class="form-control" id="province" name="province"
                                                aria-describedby="provinceHelp">
                                            @error('province')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="city" class="form-label">Kota</label>
                                            <input type="address" class="form-control" id="city" name="city"
                                                aria-describedby="cityHelp">
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
                                            <label for="district" class="form-label">Kecamatan</label>
                                            <input type="address" class="form-control" id="district" name="district"
                                                aria-describedby="districtHelp">
                                            @error('district')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="zipCode" class="form-label">Kode
                                                Pos</label>
                                            <input type="address" class="form-control" id="zipCode" name="postal_code"
                                                aria-describedby="zipCodeHelp">
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
                                    <textarea class="form-control" name="address" id="addressTextArea"
                                        rows="3"></textarea>
                                    @error('address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-6">
                                <a class="btn btn-outline-orange radius-default w-100" href="#"
                                    role="button">Kembali</a>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-orange radius-default w-100">Selesai</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End Personal Data --}}

@endsection