<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Riff Konveksi</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('style/src/assets/images/logos/konveksi.png') }}" />
  <link rel="stylesheet" href="{{ asset('style/src/assets/css/styles.min.css') }}" />
  <link href="{{ asset('font/css/all.min.css') }}" rel="stylesheet">
</head>

<body>
  <!-- Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="{{ route('dashboard') }}" class="text-nowrap logo-img">
            <img src="{{ asset('style/src/assets/images/logos/konveksi.svg') }}" width="180" alt="Logo" />
          </a>
        </div>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Barang Component</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('barang') }}">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Barang</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('supplier') }}">
                <span>
                  <i class="ti ti-circle"></i>
                </span>
                <span class="hide-menu">Supplier</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('customer') }}">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Customer</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('biaya') }}">
                <span>
                  <i class="ti ti-circle"></i>
                </span>
                <span class="hide-menu">Biaya</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('outlet') }}">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Outlet</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('pegawai') }}">
                <span>
                  <i class="ti ti-circle"></i>
                </span>
                <span class="hide-menu">Pegawai</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('transaksipembelian') }}">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Transaksi Pembelian</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!-- Sidebar End -->

    <!-- Main wrapper -->
    <div class="body-wrapper">
      <!-- Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="{{ asset('style/src/assets/images/profile/admin.png') }}" alt="Profile" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Header End -->

      <!-- Content -->
      <div class="container">
        @yield('content')
      </div>

      <!-- Footer -->
      <div class="py-6 px-6 text-center">
        <p class="mb-0 fs-4">Designed by <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">Riff Konveksi</a> Distributed by <a href="https://themewagon.com">Rifal Rifqi Rhomadon</a></p>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="{{ asset('style/src/assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('style/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('style/src/assets/js/sidebarmenu.js') }}"></script>
  <script src="{{ asset('style/src/assets/js/app.min.js') }}"></script>
  <script src="{{ asset('style/src/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
  <script src="{{ asset('style/src/assets/libs/simplebar/dist/simplebar.js') }}"></script>
  <script src="{{ asset('style/src/assets/js/dashboard.js') }}"></script>
</body>

</html>
