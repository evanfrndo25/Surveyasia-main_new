<footer class="bg-light pt-5" style="z-index: 99;">
    <div class="container">
        <div class="row pb-3">
            <div class="col-md-2 mb-5">
                <a href="/">
                    <img src="{{ asset('assets/img/surveyasia_black.svg') }}" alt="Surveyasia" width="180"
                        class="img-fluid">
                </a>
            </div>
            <div class="col-4 col-md-2">
                <p class="fw-semibold">Tentang</p>
                <a href="{{ route('about') }}" class="link-dark text-decoration-none">
                    <p>Tentang Kami</p>
                </a>
                <a href="{{ route('news.index') }}" class="link-dark text-decoration-none">
                    <p>Berita</p>
                </a>
                <a href="{{ route('pricing') }}" class="link-dark text-decoration-none">
                    <p>Harga</p>
                </a>
            </div>
            <div class="col-4 col-md-2">
                <p class="fw-semibold">Panduan</p>
                <a href="{{ route('tac') }}" class="link-dark text-decoration-none">
                    <p>Syarat & Ketentuan</p>
                </a>
                <a href="{{ route('privacy') }}" class="link-dark text-decoration-none">
                    <p>Kebijakan Privasi</p>
                </a>
            </div>
            <div class="col-4 col-md-2">
                <p class="fw-semibold">Bantuan</p>
                <a href="{{ route('faq') }}" class="link-dark text-decoration-none">
                    <p>FAQ</p>
                </a>
                <a href="{{ route('contact.index') }}" class="link-dark text-decoration-none">
                    <p>Kontak</p>
                </a>
            </div>
            <div class="col-md-4">
                <p>Berlangganan dengan layanan kami dan jadilah orang pertama yang tahu tentang pembaharuan kami</p>
                <form>
                    <div class="row">
                        <div class="col-7">
                            <input type="email" class="form-control" id="email" aria-describedby="email" name="email"
                                placeholder="Email Address">
                        </div>
                        <div class="col-5">
                            <button type="button" class="btn btn-orange radius-default">Subscribe</button>
                        </div>
                    </div>
                </form>
                <div class="row mt-3 mt-sm-5">
                    <div class="col-auto">
                        <a href="https://www.youtube.com/channel/UCeovD8uCm_QnBgo-tMoKkIg" target="_blank"><i
                                class="bi bi-youtube link-orange fs-2"></i>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="https://www.instagram.com/citiasiainc/" target="_blank"><i
                                class="bi bi-instagram link-orange fs-3"></i>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="https://www.facebook.com/citiasiainc/" target="_blank"><i
                                class="bi bi-facebook link-orange fs-3"></i>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="https://twitter.com/citiasiainc" target="_blank"><i
                                class="bi bi-twitter link-orange fs-3"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="text-orange">
    <div class="container py-2">
        <p>Copyright &#169; {{ date('Y') }}. All rights reserved.</p>
    </div>
</footer>