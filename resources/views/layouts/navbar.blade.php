<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light shadow-sm">
  <div class="container">
    <a class="navbar-brand text-default" href="/">
      <img src="{{ asset('assets/img/surveyasia_black.svg') }}" alt="Surveyasia" width="150">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('news.index') }}">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contact.index') }}">Kontak</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('pricing') }}">Harga</a>
        </li>
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fw-semibold" href="#" id="navbarDropdown" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Hai, {{ Auth::user()->nama_lengkap }}
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/"><i class="fas fa-home fa-fw"></i> Beranda</a></li>
            <hr class="dropdown-divider">
        </li>
        <li>
          <form action="{{ route('logout') }}" method="post" class="m-0">
            @csrf
            <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt fa-fw"></i>
              Keluar</button>
          </form>
        </li>
      </ul>
      @else
      <li class="nav-item">
        <a class="btn btn-outline-orange radius-default mx-sm-3" href="{{ route('login') }}" role="button">Masuk</a>
      </li>
      <li class="nav-item mt-2 m-sm-0">
        <a class="btn btn-orange radius-default text-white" href="{{ route('choose-role') }}"
          role="button">Bergabung</a>
      </li>
      @endauth
      <li class="nav-item ms-3 me-2 d-none d-md-block">
        <div class="vl"></div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
          aria-expanded="false">
          ID
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="#">ID</a></li>
          <li><a class="dropdown-item" href="#">EN</a></li>
        </ul>
      </li>
      </ul>
    </div>
  </div>
</nav>