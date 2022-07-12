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
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto me-1 me-lg-1">
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="bi bi-bell h4"></i>
                  {{-- <span class="position-absolute top-10 start-65 translate-middle p-1 bg-danger border border-light rounded-circle">
                    <span class="visually-hidden">New alerts</span>
                    </span> --}}
              </a>
              <ul class="dropdown-menu dropdown-menu-end shadow p-2 text-black" aria-labelledby="navbarDropdown" style="width: 450px; border-radius: 6px; height: 70vh; overflow-y: scroll;">
              <li
                class="d-flex justify-content-between align-items-center pt-3 px-3 pb-1">
                <span class="fw-bold" style="font-size: 20px;">Notifikasi</span>
                <!-- tandai telah dibaca belum berfungsi -->
                <span><u><a href="#" class="text-decoration-none" style="font-size: 13px;">Tandai telah dibaca
                  </a></u></span>
              </li>
                <hr>
                <li class="px-3">
                  <div class="row">
                    <div class="col-2">
                      <img src="{{asset('assets/img/survei.svg')}}" class="img-fluid" style="border-radius: 6px;">
                    </div>

                    <div class="col">
                    <h5 style="font-size: 16px;" class="fw-bold">Konfirmasi Survei</h5> 
                    <p style="font-size: 14px;">Terdapat&nbsp<span class="fw-bold">{{ count($surveysPending) }}</span>&nbspsurvei dengan waktu telah habis, mohon untuk segera <span class="fw-bold text-danger">Konfirmasi</span></p>
                    </div>
                    <hr class="mt-3">
                    <!-- get news for notification -->
                    @foreach ($news as $item)
                    @if ($item->status == 1)
                    <div class="col-2">
                      <img src="{{asset('assets/img/berita.svg')}}" class="img-fluid" style="border-radius: 6px;">
                    </div>
                    <div class="col">
                      <h5 style="font-size: 16px;" class="fw-bold">Tambah Berita</h5> 
                      <p style="font-size: 14px;">Berita&nbsp<span class="fw-bold">{{ $item->title }}&nbsp</span><b class="fw-bold text-success">Berhasil</b> dipublikasi</p>
                    </div>
                    <hr class="mt-3">
                    @endif
                    @endforeach
                    <!-- get chart for notification -->
                    @foreach ($charts as $chart)
                    <div class="col-2">
                      <img src="{{asset('assets/img/bagan1.svg')}}" class="img-fluid" style="border-radius: 6px;">
                    </div>
                    <div class="col">
                      <h5 style="font-size: 16px;" class="fw-bold">Tambah Diagram</h5> 
                      <p style="font-size: 14px;">Bagan&nbsp<span class="fw-bold">{{ $chart->name}}&nbsp</span><b class="fw-bold text-success">Berhasil</b> ditambahkan</p>
                    </div>
                    <hr class="mt-3">
                    @endforeach
                    <!-- get question bank for notifikasi -->
                    @foreach ($questionbank_sub_templates_act as $question)
                    <div class="col-2">
                      <img src="{{asset('assets/img/bagan2.svg')}}" class="img-fluid" style="border-radius: 6px;">
                    </div>
                    <div class="col">
                      <h5 style="font-size: 16px;" class="fw-bold">Tambah Bagan</h5> 
                      <p style="font-size: 14px;">Pertanyaan pada&nbsp<span class="fw-bold">{{ $question->sub_template_name}}&nbsp</span><b class="fw-bold text-success">Berhasil</b> ditambahkan</p>
                    </div>
                    <hr class="mt-3">
                    @endforeach
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>

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
