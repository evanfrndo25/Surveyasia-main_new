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



    <!-- FUNGSI COUNTDOWN -->
    <script>
        const countDown = (time, surveyId) => {
            // Mengatur waktu akhir perhitungan mundur
            var after2day = new Date(time);
            after2day.setDate(after2day.getDate() + 2);
            let countDownDate = after2day.getTime();

            // Memperbarui hitungan mundur setiap 1 detik
            var x = setInterval(() => {
                // Untuk mendapatkan tanggal dan waktu hari ini
                var now = new Date().getTime();

                // Temukan jarak antara sekarang dan tanggal hitung mundur
                var distance = countDownDate - now;

                // Perhitungan waktu untuk hari, jam, menit dan detik
                // var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 48)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Keluarkan hasil dalam elemen dengan id = "countD"
                document.getElementById(`countD${surveyId}`).innerHTML = `${hours} : ${minutes} : ${seconds}`;
                    
                // Jika hitungan mundur selesai, tulis beberapa teks 
                if (distance < 0) {
                    clearInterval(x);
                    let getAttr = document.getElementById("countD" + surveyId);
                    getAttr.className = 'text-center text-danger'
                    getAttr.innerHTML = "0 : 0 : 0";
                }

                // Jika waktu kurang dari 10 jam, maka ubah warna teks menjadi merah
                if( hours < 10 ) {
                    let getAttr = document.getElementById("countD" + surveyId);
                    getAttr.className = 'text-center text-danger'
                }
            }, 1000);
        }
    </script>
    <!-- END FUNGSI COUNTDOWN -->



    <!-- Navbar-->
    <div class="collapse navbar-collapse bg-light" id="navbarNav">
        <ul class="navbar-nav ms-auto me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="bi bi-bell h4"></i>
                    {{-- <span class="position-absolute top-10 start-65 translate-middle p-1 bg-danger border border-light rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                    </span> --}}
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="navbarDropdown" style="width: 600px; border-radius: 6px; height: 70vh; overflow-y: scroll;">
                    <li class="pt-3 px-3">
                        <h4>Notifikasi</h4>
                    </li>
                    <hr>
                    @if (count($surveys) == 0)
                    <div class="row mt-4 py-3">
                        <div class="text-center">
                            {{-- <img src="{{ asset('assets/img/survey_history.svg') }}" alt="Survey History" class="img-fluid" width="300"> --}}
                            <p class="text-muted mt-3 m-0">Belum ada Notifikasi</p>
                        </div>
                    </div>
                    @else
                    @foreach ($surveys as $survey)
                    <li class="px-3">
                        <div class="row">

                            @if ($survey->status == 'active')
                                <div class="col-3">
                                    {{-- <img src="{{ asset('assets/img/hero_tutorial.png') }}" class="img-fluid" style="border-radius: 6px;" alt=""> --}}
                                    <img src="{{ asset('assets/img/recommendation_4.png') }}" alt="Survey">
                                </div>

                                <div class="col"> 
                                    <h5 style="font-size: 16px;" class="fw-bold text-success">Survey Anda Diterima!</h5>
                                    <p style="font-size: 14px;">Survey <span class="fw-bold">{{ $survey->title }}</span> telah kami terima. Silahkan bagikan tautan survey Anda untuk mengumpulkan tanggapan responden</p>
                                    <a href="{{ route('researcher.surveys.collectRespondent', $survey->id) }}" class="link-dark">
                                        <button type="button" class="btn btn-outline-danger">Bagikan Tautan</button>
                                    </a>
                                    
                                    <p class="text-muted small pt-2 mb-0">{{ $survey->created_at->diffForHumans() }}</p>
                                </div>
                                <hr class="mt-3">
                            @elseif ($survey->status == 'reject')
                                <div class="col-3">
                                    {{-- <img src="{{ asset('assets/img/hero_tutorial.png') }}" class="img-fluid" style="border-radius: 6px;" alt=""> --}}
                                    <img src="{{ asset('assets/img/recommendation_4.png') }}" alt="Survey">
                                </div>

                                <div class="col">
                                    <h5 style="font-size: 16px;" class="fw-bold text-danger">Survey Anda Ditolak!</h5>
                                    <p style="font-size: 14px;">Maaf, survey <span class="fw-bold">{{ $survey->title }}</span> ditolak karena melanggar aturan kami yaitu, <span class="fw-bold">{{ $survey->reason_deny ? $survey->reason_deny : 'Detail kosong' }}.</span> Anda dapat mengedit kembali survey Anda dan menunggu persetujuan dari tim kami.</p>
                                    <a href="{{ route('researcher.surveys.manage', $survey->id) }}" class="link-dark">
                                        <button type="button" class="btn btn-outline-danger">Edit Survey</button>
                                    </a>
                                    
                                    <p class="text-muted small pt-2 mb-0">{{ $survey->created_at->diffForHumans() }}</p>
                                </div>
                                <hr class="mt-3">
                            @elseif ($survey->status == 'draft')
                                <div class="d-none"></div>
                            @else
                                <div class="col-3">
                                    {{-- <img src="{{ asset('assets/img/hero_tutorial.png') }}" class="img-fluid" style="border-radius: 6px;" alt=""> --}}
                                    <img src="{{ asset('assets/img/recommendation_4.png') }}" alt="Survey">
                                </div>
                                <div class="col">
                                    <h5 style="font-size: 16px;" class="fw-bold text-warning">Survey Anda sedang ditinjau</h5>
                                    <p style="font-size: 14px;">Survey <span class="fw-bold">{{ $survey->title }}</span> sedang dalam peninjauan tim kami. peninjauan akan dilakukan maksimal <span class="fw-bold">2x48 jam</span>. Mohon menunggu untuk pemberitahuan selanjutnya.</p>
                                    <div class="btn bg-warning rounded-pill text-white" style="height: 37px; width: 140px;">
                                        
                                        <script>
                                            countDown('{{ $survey->updated_at }}', '{{ $survey->id }}');
                                        </script>

                                        {{-- <span><i class="bi bi-clock"></i></span> --}}
                                        <h5 class="text-center" id="countD{{ $survey->id }}">
                                            
                                        </h5>   
                                    </div>
                                    <p class="text-muted small pt-2 mb-0">{{ $survey->created_at->diffForHumans() }}</p>
                                </div>
                                <hr class="mt-3">
                            @endif
                            
                        </div> 
                    </li>
                    
                    @endforeach
                    @endif
                    
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

