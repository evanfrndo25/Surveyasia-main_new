<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand link-default" href="/"><img src="{{ asset('assets/img/surveyasia_black.svg') }}"
                alt="Surveyasia" width="150"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link link-default" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-default" href="#">Riwayat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-default me-3" href="{{ route('news.index') }}">News</a>
                </li>

                <li>
                    @if (\Auth::user()->avatar == null)
                    <img class="rounded-circle" src="{{ asset('assets/img/noimage.png') }}" width="50px" name="avatar"
                        height="50px" alt="User Avatar">
                    @else
                    <img class="rounded-circle ms-5" src="{{ asset('storage/' . \auth::user()->avatar) }}" width="50px"
                        height="50px" alt="User Avatar" name="avatar">

                    @endif
                </li>
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->nama_lengkap }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/"><i class="fas fa-user fa-fw"></i> Home</a></li>
                        <li><a class="dropdown-item" href="{{ route('researcher.surveys.index') }}"><i
                                    class="fas fa-tachometer-alt fa-fw"></i> Dashboard</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt fa-fw"></i>
                                    Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>