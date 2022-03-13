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
                            Profile</a></li>
                    <li><a class="dropdown-item" href="{{ route('researcher.surveys.index') }}"><i
                                class="fas fa-tachometer-alt fa-fw"></i> Dashboard</a>
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