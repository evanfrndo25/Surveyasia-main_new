<nav class="sb-topnav navbar sticky-top navbar-expand-lg navbar-light bg-light shadow-sm">
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="/"><img src="{{ asset('assets/img/surveyasia_black.svg') }}" alt="Surveyasia"
            width="150"></a>
    {{-- Navbar Toggle --}}
    <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar-->
    <div class="collapse navbar-collapse bg-light" id="navbarNav">
        <ul class="navbar-nav ms-auto me-3 me-lg-4">
        <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="bi bi-bell h4"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="navbarDropdown" style="width: 600px; border-radius: 6px; height: 70vh; overflow-y: scroll;">
                    <li class="pt-3 px-3">
                        <h4>Notifikasi</h4>
                    </li>
                    <hr>
                    <li class="px-3">
                        <div class="row">
                            <div class="col-3">
                                <img src="{{ asset('assets/img/hero_tutorial.png') }}" class="img-fluid" style="border-radius: 6px;" alt="">
                            </div>
                            <div class="col">
                                <h5 style="font-size: 16px;" class="fw-bold text-danger">Survey Anda Ditolak!</h5>
                                <p style="font-size: 14px;">Maaf, survey <span class="fw-bold">(judul)</span> ditolak karena melanggar aturan kami yaitu, <span class="fw-bold">(alasan penolakan dari admin).</span> Anda dapat mengedit kembali survey Anda dan menunggu persetujuan dari tim kami.</p>
                                <button type="button" class="btn btn-outline-danger">Edit Survey</button>
                                <p class="text-muted small pt-2 mb-0">1 hari yang lalu</p>
                            </div>
                        </div>
                    </li>
                    <hr>
                    <li class="px-3">
                        <div class="row">
                            <div class="col-3">
                                <img src="{{ asset('assets/img/hero_tutorial.png') }}" class="img-fluid" style="border-radius: 6px;" alt="">
                            </div>
                            <div class="col">
                                <h5 style="font-size: 16px;" class="fw-bold text-success">Survey Anda Diterima!</h5>
                                <p style="font-size: 14px;">Survey <span class="fw-bold">(judul)</span> telah kami terima. Silahkan bagikan tautan survey Anda untuk mengumpulkan tanggapan responden</p>
                                <button type="button" class="btn btn-outline-danger">Bagikan Tautan</button>
                                <p class="text-muted small pt-2 mb-0">2 hari yang lalu</p>
                            </div>
                        </div>
                    </li>
                    <hr>
                    <li class="px-3">
                        <div class="row">
                            <div class="col-3">
                                <img src="{{ asset('assets/img/hero_tutorial.png') }}" class="img-fluid" style="border-radius: 6px;" alt="">
                            </div>
                            <div class="col">
                                <h5 style="font-size: 16px;" class="fw-bold text-warning">Survey Anda sedang ditinjau</h5>
                                <p style="font-size: 14px;">Survey <span class="fw-bold">(judul)</span> sedang dalam peninjauan tim kami. peninjauan akan dilakukan maksimal <span class="fw-bold">2x48 jam</span>. Mohon menunggu untuk pemberitahuan selanjutnya.</p>
                                <div class="btn bg-warning rounded-pill text-white"><i class="bi bi-clock"></i> 30 : 30 : 30</div>
                                <p class="text-muted small pt-2 mb-0">1 hari yang lalu</p>
                            </div>
                        </div>
                    </li>
                    <hr>
                </ul>
            </li>
            @auth
            @if (Auth::user()->avatar == null)
            <img src="{{ asset('assets/img/noimage.png') }}" alt="Profile Picture" width="40px" height="40px"
                class="d-block ms-3 rounded-pill object-fit-cover">
            @elseif (Auth::user()->provider_name != null)
            <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->nama_lengkap }}" width="40" height="40"
                class="d-block ms-3 rounded-pill object-fit-cover">
            @else
            <img src="{{ asset('storage/' . \Auth::user()->avatar) }}" width="40" height="40" alt="User Avatar"
                class="d-block ms-3 rounded-pill object-fit-cover" name="avatar">
            @endif
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    {{ Auth::user()->nama_lengkap }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ route('user-profile') }}"><i class="fas fa-user fa-fw"></i>
                            Profil</a></li>
                    <li><a class="dropdown-item" href="{{ route('researcher.surveys.index') }}"><i
                                class="fas fa-tachometer-alt fa-fw"></i> Beranda</a>
                    </li>
                    <li><a class="dropdown-item" href="{{ route('change.notice') }}"><i
                                class="fas fa-user-friends fa-fw"></i> Jadi Responden</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" class="m-0">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt fa-fw"></i>
                                Keluar</a></button>
                        </form>
                    </li>
                </ul>
            </li>
            @endauth
        </ul>
    </div>
</nav>