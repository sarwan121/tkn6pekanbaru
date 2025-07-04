<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Kider - Preschool Website Template')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('assets\frontend\img\logotwh.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="{{ url('/') }}" class="navbar-brand">
                {{-- <h1 class="m-0 text-primary">TkN 6 Pekanbaru</h1> --}}
                <img src="{{asset('assets/frontend/img/logo.png')}}" alt="">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{url('/')}}" class="nav-item nav-link @if(Request::is('/')) active @endif">Beranda</a>
                    <a href="{{url('aboutus')}}" class="nav-item nav-link @if(Request::is('aboutus')) active @endif">Tentang Kami</a>
                    <a href="{{url('fasilitas')}}" class="nav-item nav-link @if(Request::is('fasilitas')) active @endif">Fasilitas</a>
                    <a href="{{url('contact')}}" class="nav-item nav-link @if(Request::is('contact')) active @endif">Hubungi Kami</a>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        @yield('content')

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-6 col-md-6">
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>JL. HR SUBRANTAS KM 11.5, Simpaagbaru, Kec. Binawidya, Kota Pekanbaru Prov. Riau</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+6281275567780</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>tknegeri6pekanbaru@gmail.com</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <a class="btn btn-link text-white-50" href="{{ url('/') }}">Beranda</a>
                        <a class="btn btn-link text-white-50" href="{{url('aboutus')}}">Tentang kami</a>
                        <a class="btn btn-link text-white-50" href="{{url('fasilitas')}}">Fasilitas</a>
                        <a class="btn btn-link text-white-50" href="{{url('contact')}}">Hubungi Kami</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">2025 TK NEGERI 6 PEKANBARU</a>, All Right Reserved. 
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/frontend/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
</body>

</html>
