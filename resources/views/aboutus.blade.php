@extends('layouts.app')

@section('title', 'About us - TK Negeri 6 Pekanbaru')

@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="mb-4">VISI TK NEGERI 6</h1>
                    <p>Membentuk anak yang cerdas dan berkarakter, mandiri, kreatif, berbudaya dan berakhlak sehingga
                        terwujud generasi penerus beriman dan bertaqwa</p>
                </div>
                <div class="col-md-6">
                    <h1 class="mb-4">MISI TK NEGERI 6</h1>
                    <ol>
                        <li>Melaksanakan pembelajaran aktif, kreatif dan efektif dan inovatif.</li>
                        <li>Mendidik anak secara optimal sesuai dengan kemampuan anak.</li>
                        <li>Menyiapkan anak didik kejenjang pendidikan dasar dengan ketercapaian kompetensi dasar sesuai
                            tahapan perkembangan anak.</li>
                    </ol>
                </div>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle flex-shrink-0" src="{{ asset('assets/frontend/img/kepsek.jpg') }}" alt=""
                                    style="width: 60px; height: 60px; object-fit: cover;">

                                <div class="ms-3">
                                    <h6 class="text-primary mb-1">Yuliarni, SP.d</h6>
                                    <small>Kepala Sekolah</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Data Guru Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="mb-4 text-center">Daftar Guru TK Negeri 6 Pekanbaru</h1>
            <div class="row">
                @foreach ($teachers as $teacher)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body d-flex align-items-center">
                                <img class="rounded-circle" src="{{ asset( $teacher->photo) }}" alt="{{ $teacher->name }}"
                                    style="width: 60px; height: 60px; object-fit: cover;">
                                <div class="ms-3">
                                    <h5 class="card-title">{{ $teacher->name }}</h5>
                                    <p class="card-text">{{ $teacher->position }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Data Guru End -->

    <!-- Call To Action Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="bg-light rounded">
                <div class="row g-0">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded"
                                src="{{ asset('assets/frontend/img/Tujuan.jpg') }}" style="object-fit: cover;" alt="Gambar Tujuan">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100 d-flex flex-column justify-content-center p-5">
                            <h1 class="mb-4">TUJUAN TK NEGERI 6</h1>
                            <ol>
                                <li>Terwujudnya anak yang beriman dan Taqwa Kepada Tuhan Yang Maha Esa.</li>
                                <li>Terwujudnya anak yang berakhlak mulia, sopan dan santun.</li>
                                <li>Membantu Pemerintah dalam mencerdaskan kehidupan bangsa.</li>
                                <li>Memberikan pelayanan kepada masyarakat dalam bidang pendidikan.</li>
                                <li>Membentuk kepribadian anak yang dapat bersosialisasi dengan lingkungan.</li>
                                <li>Membentuk karakter anak yang mandiri dan bertanggung jawab.</li>
                                <li>Menanamkan sikap disiplin kepada anak.</li>
                                <li>Meningkatkan kualitas sumber daya manusia baik anak maupun tenaga pendidik.</li>
                                <li>Menanamkan pola hidup bersih dan sehat kepada anak.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
