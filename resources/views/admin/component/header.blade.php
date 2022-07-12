<nav class="navbar navbar-expand-lg navbar-light bg-white py-0 shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold href=" javascript:void(0)">{{ $title }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto align-items-center">
        {{-- <li class="nav-item me-2">
          <a class="nav-link" aria-current="page" href="#">
            <i class="bi bi-search text-semi-ligh"></i>

          </a>
        </li> --}}
        
        <!-- Navbar dan Notifikasi-->
        
        <div class="vr fs-3 my-3 mx-3 d-lg-block d-none"></div>
        <li class="nav-item">
          <a class="nav-link text-black" href="#">Super Admin</a>
        </li>

        <li class="dropdown nav-item ">
          <a class="nav-link dropdown-toggle text-center" href="#" role="button"
            id="dropdownMenuLink" data-bs-toggle="dropdown"
            aria-expanded="false">
            <img src="{{ asset('assets/img/photo-jones-ferdinand.png') }}"
              alt="" width="45px" height="45px" class="dp-admin">
          </a>
          <ul class="dropdown-menu dropdown-menu-lg-end p-3 bg-light"
            aria-labelledby="dropdownMenuLink">
            <li>
              <a class="dropdown-item" href="#">
                <i class="fs-5 align-middle bi bi-person-fill me-2"></i>
                Profile Settings
              </a>
            </li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i
                    class="fs-5 align-middle bi bi-box-arrow-in-right me-2"></i>
                  Log Out</button>
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>