<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Klinik Al-Hidayah') }}</title>
  <link rel="shortcut icon" href="{{ url('/images/logo1.png') }}">
  <link rel="stylesheet" href="/modern/src/assets/css/styles.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.22.0/tabler-icons.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background-color: #f5f6fa;
    }
    .left-sidebar {
      background: #ffffff;
      box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    }
    .sidebar-link {
      border-radius: 0.5rem;
      margin: 0.25rem 0.75rem;
      padding: 0.75rem 1rem;
      transition: all 0.2s ease;
    }
    .sidebar-link:hover {
      background: #f0f7ff;
    }
    .sidebar-link.active {
      background: #1a73e8;
      color: #ffffff !important;
    }
    .app-header {
      background: #ffffff;
      box-shadow: 0 1px 3px rgba(0,0,0,0.12);
    }
    .card {
      border: none;
      box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
      border-radius: 0.75rem;
    }
    .nav-icon-hover {
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      transition: all 0.2s;
    }
    .nav-icon-hover:hover {
      background: #f0f7ff;
    }
  </style>
</head>

<body>
  <div class="page-wrapper mini-sidebar" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="mini-sidebar" data-sidebar-position="fixed" data-header-position="fixed">
    <aside class="left-sidebar">
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between p-3">
          <a href="{{ url('/home') }}" class="text-nowrap logo-img">
            <img src="{{ url('/images/logo1.png') }}" width="160" alt="{{ config('app.name') }}">
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-5"></i>
          </div>
        </div>

        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
          <ul id="sidebarnav" class="mb-4">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon"></i>
              <span class="hide-menu text-muted">Menu Utama</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link {{ request()->is('home') ? 'active' : '' }}" href="/home">
                <i class="ti ti-layout-dashboard me-2"></i>
                <span class="hide-menu">Beranda</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link {{ request()->is('pasien') ? 'active' : '' }}" href="/pasien">
                <i class="ti ti-users me-2"></i>
                <span class="hide-menu">Data Pasien</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link {{ request()->is('laporan-pasien') ? 'active' : '' }}" href="/laporan-pasien/create">
                <i class="ti ti-report me-2"></i>
                <span class="hide-menu">Laporan Data Pasien</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link {{ request()->is('laporan-daftar') ? 'active' : '' }}" href="/laporan-daftar/create">
                <i class="ti ti-clipboard me-2"></i>
                <span class="hide-menu">Laporan Pendaftaran</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <div class="body-wrapper">
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light px-3">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell"></i>
                <span class="position-absolute top-25 start-75 translate-middle p-1 bg-danger border border-light rounded-circle">
                  <span class="visually-hidden">Notifikasi baru</span>
                </span>
              </a>
            </li>
          </ul>

          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <div class="dropdown">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="/modern/src/assets/images/profile/user-1.jpg" alt="user" width="35" height="35" class="rounded-circle border">
              </a>
              <div class="dropdown-menu dropdown-menu-end shadow-lg border-0 rounded-3 mt-2" aria-labelledby="drop2">
                <div class="message-body">
                  <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item py-2">
                    <i class="ti ti-user fs-6"></i>
                    <span>Profil Saya</span>
                  </a>
                  <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item py-2">
                    <i class="ti ti-settings fs-6"></i>
                    <span>Pengaturan</span>
                  </a>
                  <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary w-100 mt-2">
                      <i class="ti ti-logout me-1"></i> Keluar
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </header>

      <div class="container-fluid py-3">
        @include('flash::message')
        @yield('content')
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="/modern/src/assets/js/sidebarmenu.js"></script>
  <script src="/modern/src/assets/js/app.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simplebar@5.3.6/dist/simplebar.min.js"></script>
</body>

</html>