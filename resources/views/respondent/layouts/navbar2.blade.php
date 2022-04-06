<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light shadow-sm">
    <a class="navbar-brand link-default ms-3" href="/"><img src="{{ asset('assets/img/surveyasia_black.svg') }}"
            alt="Surveyasia" width="150"></a>
    <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ms-3" id="navbarNav">
        <ul class="navbar-nav ms-auto me-3">
            <li class="nav-item">
                <a class="nav-link" href="/">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('respondent.survey.history') }}">Riwayat Survey</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact.index') }}">Kontak</a>
            </li>
            <li class="nav-item me-3">
                <a class="nav-link" href="{{ route('news.index') }}">Berita</a>
            </li>
            @auth
            @if (\Auth::user()->avatar == null)
            <li>
                <img class="rounded-circle object-fit-cover" src="{{ asset('assets/img/noimage.png') }}" width="40px"
                    name="avatar" height="40px" alt="User Avatar">
            </li>
            @elseif (Auth::user()->provider_name != null)
            <li>
                <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->nama_lengkap }}" width="40" height="40"
                    class="d-block mb-2 ms-3 rounded-pill object-fit-cover">
            </li>
            @else
            <li>
                <img class="rounded-circle object-fit-cover" src="{{ asset('storage/' . Auth::user()->avatar) }}"
                    width="40px" height="40px" alt="User Avatar" name="avatar">
            </li>
            @endif
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    {{ Auth::user()->nama_lengkap }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item" href="{{ route('user-profile') }}"><i class="fas fa-user fa-fw"></i>
                            Profil
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="/"><i class="fas fa-tachometer-alt fa-fw"></i> Beranda</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('change.notice') }}"><i
                                class="fas fa-user-friends fa-fw"></i> Jadi Researcher</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" class="m-0">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt fa-fw"></i>
                                Keluar
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
            @endauth
        </ul>
    </div>
</nav>