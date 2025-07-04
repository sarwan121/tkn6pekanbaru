<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AdminLTE v4 | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Admin | TKN 6 Pekanbaru" />
    
    <link href="{{ asset('assets\frontend\img\logotwh.png') }}" rel="icon">
    <meta name="author" content="ColorlibHQ" />
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS." />
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous" />

    <!-- OverlayScrollbars -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css" integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg=" crossorigin="anonymous" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI=" crossorigin="anonymous" />

    <!-- AdminLTE -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.css') }}" />

    <!-- ApexCharts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css" integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous" />

    <!-- jsVectorMap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css" integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4=" crossorigin="anonymous" />
    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.14/dist/sweetalert2.min.css" rel="stylesheet">
  
  </head>

  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
      <nav class="app-header navbar navbar-expand bg-body">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                <i class="bi bi-list"></i>
              </a>
            </li>
            <li class="nav-item d-none d-md-block"><a href="{{url('/')}}" class="nav-link">Landing Page</a></li>
            {{-- <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Contact</a></li> --}}
          </ul>
          <ul class="navbar-nav ms-auto">
            
            <li class="nav-item dropdown user-menu">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img src="{{ asset('assets/dist/assets/img/logotwh.png') }}" class="user-image rounded-circle shadow" alt="User Image" />
                <span class="d-none d-md-inline">Admin</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <li class="user-header text-bg-primary">
                  <img src="{{ asset('assets/dist/assets/img/logotwh.png') }}" class="rounded-circle shadow" alt="User Image" />
                  <p>Admin</p>
                </li>
                <li class="user-footer">
                  <a href="{{url('logout')}}" class="btn btn-default btn-flat float-end">Sign out</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>

      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <div class="sidebar-brand">
          <a href="./index.html" class="brand-link">
            {{-- <img src="{{ asset('assets/dist/assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image opacity-75 shadow" /> --}}
            <span class="brand-text fw-light">TKN6 Pekanbaru</span>
          </a>
        </div>
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">

              <!-- Menu Item: Dashboard -->
              <li class="nav-item">
                  <a href="{{ route('dashboard') }}" class="nav-link">
                      <i class="nav-icon bi bi-house-door"></i>
                      <p>Dashboard</p>
                  </a>
              </li>

              <!-- Menu Item: Kegiatan (Activities) -->
              <li class="nav-item">
                  <a href="{{ route('activities.index') }}" class="nav-link">
                      <i class="nav-icon bi bi-calendar-event"></i>
                      <p>Kegiatan</p>
                  </a>
              </li>

              <!-- Menu Item: Guru (Teachers) -->
              <li class="nav-item">
                  <a href="{{ route('teachers.index') }}" class="nav-link">
                      <i class="nav-icon bi bi-person"></i>
                      <p>Guru</p>
                  </a>
              </li>

              <!-- Menu Item: Kelas (Classes) -->
              <li class="nav-item">
                  <a href="{{ route('classes.index') }}" class="nav-link">
                      <i class="nav-icon bi bi-building"></i>
                      <p>Kelas</p>
                  </a>
              </li>

              <!-- Menu Item: Fasilitas (Facilities) -->
              <li class="nav-item">
                  <a href="{{ route('facilities.index') }}" class="nav-link">
                      <i class="nav-icon bi bi-tools"></i>
                      <p>Fasilitas</p>
                  </a>
              </li>
          </ul>

          </nav>
        </div>
      </aside>

      <main class="app-main">
        <div class="app-content-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Admin</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Admin</li>
                </ol>
              </div>
            </div>
          </div>
        </div>

        <div class="app-content">
          <div class="container-fluid">
            @yield('content')
          </div>
        </div>
      </main>

      <footer class="app-footer">
        <div class="float-end d-none d-sm-inline">Anything you want</div>
        <strong>Copyright &copy; 2025 <a href="#" class="text-decoration-none">TKN 6 Pekanbaru</a>.</strong> All rights reserved.
      </footer>
    </div>
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.14/dist/sweetalert2.all.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/dist/js/adminlte.js') }}"></script>
    <!-- SweetAlert2 Notification for Success -->
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                showConfirmButton: true,
                timer: 3000
            });
        </script>
    @endif

    <!-- SweetAlert2 Notification for Error -->
    @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ $errors->first() }}',
                showConfirmButton: true,
                timer: 3000
            });
        </script>
    @endif

    <!-- Konten lainnya -->
  </body>
</html>
