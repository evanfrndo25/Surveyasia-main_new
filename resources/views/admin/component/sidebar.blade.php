
<nav class="col-2 nav flex-column bg-special-black position-fixed" id="sidebar-dashboard">
    <img src="{{ asset('assets/img/newSurveyasia.png') }}" alt="" class="mx-auto mt-3 mb-5">
    <a href="{{ route('admin.dashboard') }}" class="text-decoration-none">
        <div class="d-flex align-items-center px-4 py-3 {{ Request::is('admin/dashboard') ? 'active' : '' }}">
            <img src="{{ asset('assets/img/vec-dashboard.svg') }}" alt="" width="16px" height="16px">
            <span class="ms-3 text-sidebar" aria-current="page">Dasbor</span>
        </div>
    </a>
    <a href="{{ route('admin.transaction.index') }}" class="text-decoration-none">
        <div class="d-flex align-items-center px-4 py-3 {{ Request::is('admin/transaction') ? 'active' : '' }}">
            <img src="{{ asset('assets/img/vec-transaksi.svg') }}" alt="" width="16px" height="16px" >
            <span class="ms-3 text-sidebar" aria-current="page">Transaksi</span>
        </div>
    </a>
    <a href="{{ route('admin.survey.index') }}" class="text-decoration-none">
        <div class="d-flex align-items-center px-4 py-3 {{ Request::is('admin/survey') ? 'active' : '' }}">
            <img src="{{ asset('assets/img/vec-blog.svg') }}" alt="" width="16px" height="16px">
            <span class="ms-3 text-sidebar" aria-current="page" href="#">Survei</span>
        </div>
    </a>
    <a href="{{ route('admin.questionbank.index') }}" class="text-decoration-none">
        <div class="d-flex align-items-center px-4 py-3 {{ Request::is('admin/questionbank*') ? 'active' : '' }}">
            <img src="{{ asset('assets/img/vec-question-bank.svg') }}" alt="" width="16px" height="16px">
            <span class="ms-3 text-sidebar" aria-current="page">Bank Soal</span>
        </div>
    </a>
    <a href="{{ route('admin.chart.index') }}" class="text-decoration-none">
        <div class="d-flex align-items-center px-4 py-3 {{ Request::is('admin/chart') ? 'active' : '' }}">
            <img src="{{ asset('assets/img/vec-template.svg') }}" alt="" width="16px" height="16px">
            <span class="ms-3 text-sidebar" aria-current="page">Bagan</span>
        </div>
    </a>
    <a href="{{ route('admin.users.index') }}" class="text-decoration-none">
        <div class="d-flex align-items-center px-4 py-3 {{ Request::is('admin/users*') ? 'active' : '' }}">
            <img src="{{ asset('assets/img/vec-user.svg') }}" alt="" width="16px" height="16px">
            <span class="ms-3 text-sidebar" aria-current="page">Pengguna</span>
        </div>
    </a>
    <a href="{{ route('admin.dataVerify') }}" class="text-decoration-none">
        <div class="d-flex align-items-center px-4 py-3 {{ Request::is('admin/data-verification*') ? 'active' : '' }}">
            <img src="{{ asset('assets/img/vec-data-ver.svg') }}" alt="" width="16px" height="16px">
            <span class="ms-3 text-sidebar" aria-current="page">Sertifikasi Data</span>
        </div>
    </a>
    <a href="{{ route('admin.news.index') }}" class="text-decoration-none">
        <div class="d-flex align-items-center px-4 py-3 {{ Request::is('admin/news*') ? 'active' : '' }}">
            <img src="{{ asset('assets/img/vec-blog.svg') }}" alt="" width="16px" height="16px">
            <span class="ms-3 text-sidebar" aria-current="page" href="#">Kabar Baru</span>
        </div>
    </a>
    

  <hr style="color: #DFE0EB;">

</nav>


