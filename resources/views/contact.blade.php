@extends('layouts.footer')
@extends(Auth::guest() ? 'layouts.base' : (Auth::user()->role_id == 2 ? 'researcher.layouts.base' :
'layouts.base'))
@extends(Auth::guest() ? 'layouts.navbar' : (Auth::user()->role_id == 2 ? 'researcher.layouts.navbar2' :
'respondent.layouts.navbar'))

@section('content')
{{-- Breadcrumb --}}
<section class="breadcrumb-contact" id="breadcrumb-contact">
    @if (Auth::guest())
    <div class="container pt-5">
        @elseif (Auth::user()->role_id == 2)
        <div class="container-fluid p-5 pb-0">
            @else
            <div class="container pt-5">
                @endif
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="link-secondary text-decoration-none">SurveyAsia
                                Pusat Bantuan</a></li>
                        <li class="breadcrumb-item active text-dark" aria-current="page">Kirim Permintaan</li>
                    </ol>
                </nav>
            </div>
</section>
{{-- End Breadcrumb --}}

{{-- Contact Us --}}
<section class="contact-us" id="contact-us">
    @if (Auth::guest())
    <div class="container pb-5">
        @elseif (Auth::user()->role_id == 2)
        <div class="container-fluid p-5 pt-0">
            @else
            <div class="container pb-5">
                @endif

                <div class="col-md-6">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible show fade">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    @if(session('failed'))
                    <div class="alert alert-danger alert-dismissible show fade">
                        {{ session('failed') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <h3 class="fw-semibold">Kirim Permintaan</h3>
                    <div class="hr-vm-orange"></div>
                    <form action="{{ route('contact.compose') }}" method="POST">
                        @csrf
                        <div class="mt-3">
                            <label for="roles" class="form-label fw-semibold">Apakah anda seorang researcher atau
                                seorang responden? <span class="text-danger">*</span></label>
                            <select class="form-select @error('roles')is-invalid @enderror"
                                aria-label="Default select example" name="roles" required>
                                <option selected>- Pilih -</option>
                                <option value="Researcher">Saya seorang reseacher</option>
                                <option value="Responden">Saya seorang responden</option>
                            </select>
                            @error('roles')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="name" class="form-label fw-semibold">Nama Lengkap <span
                                    class="text-danger">*</span></label>
                            <input type="name" class="form-control @error('name')is-invalid @enderror" id="name"
                                name="name" placeholder="John Doe" required value="{{ old('name') }}" />
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="email" class="form-label fw-semibold">Email <span
                                    class="text-danger">*</span></label>
                            <input type="email" class="form-control @error('email')is-invalid @enderror" id="email"
                                name="email" aria-describedby="emailHelp" placeholder="johndoe@example.com" required
                                value="{{ old('email') }}" />
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="subject" class="form-label fw-semibold">Subjek <span
                                    class="text-danger">*</span></label>
                            <input type="subject" class="form-control @error('subject')is-invalid @enderror"
                                id="subject" name="subject" placeholder="Tulis subjek di sini" required
                                value="{{ old('subject') }}" />
                            @error('subject')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="description" class="form-label fw-semibold">Deskripsi <span
                                    class="text-danger">*</span></label>
                            <textarea class="form-control" placeholder="Tulis deskripsi di sini" id="textarea"
                                name="description" required></textarea>
                            <div class="form-text">Masukkan detail permintaan Anda. Staf dukungan kami
                                akan menanggapi sesegera mungkin.
                            </div>
                            @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button class="btn btn-orange text-white rounded-default w-100 mt-3"
                            type="submit">Kirim</button>
                        <p class="text-muted fs-14px mt-3">Dengan mengisi formulir ini, Anda menyetujui <a
                                href="{{ route('tac') }}" class="link-orange">Ketentuan Layanan</a> kami dan
                            telah membaca serta memahami <a href="{{ route('privacy') }}" class="link-orange">Kebijakan
                                Privasi</a>.
                        </p>
                    </form>
                </div>
            </div>
</section>
{{-- End Contact Us --}}
@endsection