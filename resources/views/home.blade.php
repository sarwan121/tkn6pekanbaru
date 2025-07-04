@extends('layouts.app')

@section('title', 'Beranda - TK Negeri 6 Pekanbaru')

@section('content')
    <!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
        {{-- @foreach($facilities as $data)
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid carousel-img" src="{{ asset($data->image) }}" alt="{{ $data->name }}">
        </div>
        @endforeach --}}
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid carousel-img" src="{{ asset('assets/frontend/img/Tujuan.jpg') }}" alt="">
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid carousel-img" src="{{ asset('assets/frontend/img/Pawai Drum Band.jpg') }}" alt="">
        </div>
    </div>
</div>
<!-- Carousel End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="container py-5">
    <div class="row align-items-center">
        <!-- Foto Kepala Sekolah -->
        <div class="col-md-3 text-center mb-4 mb-md-0">
            <img src="{{ asset('assets/frontend/foto_guru/kepsek.png') }}" alt="Foto Kepala Sekolah"
                class="img-fluid rounded" style="max-width: 100%; height: auto;">
        </div>

        <!-- Sambutan -->
        <div class="col-md-7">
            <h4 class="fw-semibold">Sambutan Kepala Sekolah</h4>
            <h2 class="fw-bold text-primary" style="font-family: 'Brush Script MT', cursive;">
                Selamat Datang di TK Negeri 6 Pekanbaru
            </h2>
            <hr>
            <p>Assalamu’alaikum Warahmatullahi Wabarakatuh, Salam sejahtera bagi kita semua.</p>
            <p>Puji dan syukur kita panjatkan ke hadirat Tuhan Yang Maha Esa, atas limpahan rahmat dan karunia-Nya
                sehingga TK Negeri 6 Pekanbaru dapat terus berkembang menjadi lembaga pendidikan yang memberikan kontribusi nyata dalam pembentukan karakter dan kecerdasan anak usia dini.</p>
            <p>Sebagai Kepala Sekolah, saya merasa bangga dan bersyukur dapat memimpin sebuah institusi yang tidak hanya fokus pada aspek akademik, tetapi juga pada nilai-nilai moral, sosial, dan kemandirian anak. Kami percaya bahwa masa kanak-kanak adalah masa emas yang sangat penting untuk menanamkan fondasi yang kuat bagi kehidupan mereka di masa depan.</p>
            <p>Melalui website ini, kami ingin memberikan informasi yang lengkap dan transparan mengenai visi, misi, program kegiatan, serta berbagai aktivitas yang dilaksanakan di TK Negeri 6 Pekanbaru. Harapan kami, website ini dapat menjadi jembatan komunikasi antara sekolah, orang tua, dan masyarakat luas.</p>
            <p>Kami juga mengundang para orang tua untuk terus terlibat aktif dalam proses pendidikan anak-anak kita. Karena pendidikan terbaik adalah hasil dari kerja sama yang harmonis antara sekolah dan keluarga.</p>
            <p>Akhir kata, saya ucapkan terima kasih atas kepercayaan yang diberikan kepada TK Negeri 6 Pekanbaru. Mari kita bersama-sama membentuk generasi yang cerdas, kreatif, dan berakhlak mulia.</p>
            <p>Wassalamu’alaikum Warahmatullahi Wabarakatuh.</p>

        </div>
    </div>
</div>

            <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                <div class="row">
                    <div class="col-12 text-center">
                        <img class="img-fluid w-75 rounded-circle bg-light p-3" src="img/about-1.jpg" alt="">
                    </div>
                    <div class="col-6 text-start" style="margin-top: -150px;">
                        <img class="img-fluid w-100 rounded-circle bg-light p-3" src="img/about-2.jpg" alt="">
                    </div>
                    <div class="col-6 text-end" style="margin-top: -150px;">
                        <img class="img-fluid w-100 rounded-circle bg-light p-3" src="img/about-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Classes Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">PENANGGUNG JAWAB KELAS</h1>
        </div>
        <div class="row g-4">
            @foreach($classes as $data)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="classes-item">
                    <div class="bg-light rounded w-75 mx-auto p-3">
                        <img class="img-fluid rounded" src="{{ asset( $data->image) }}" alt="">
                    </div>
                    <div class="bg-light rounded p-4 pt-5 mt-n5">
                        <a class="d-block text-center h3 mt-3 mb-4" href="#">{{ $data->nama_kelas }}</a>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle flex-shrink-0" src="{{ asset( $data->teacher->photo)}}" alt="" style="object-fit: cover ; width: 45px; height: 45px;">
                                <div class="ms-3">
                                    <h6 class="text-primary mb-1">{{ $data->teacher->name }}</h6>
                                    <small>Guru</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Classes End -->

{{-- Kegiatan --}}
<h2 class="mb-4 text-center">Kegiatan</h2>
      <div class="row d-flex justify-content-center">
         <!-- Loop untuk menampilkan kegiatan -->
         @foreach($activities as $activity)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
               <div class="card">
                  <!-- Gambar kegiatan -->
                  <img src="{{ asset( $activity->photo) }}" class="card-img-top" style="max-height: 200px; object-fit:cover;" alt="{{ $activity->name }}">
                  <div class="card-body">
                     <h5 class="card-title">{{ $activity->activity_name }}</h5>

                     <p class="card-text">{{ $activity->description }}</p>
                  </div>
                 
               </div>
            </div>
         @endforeach
      </div>


<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Ulasan/Testimoni</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item bg-light rounded p-5">
                <p class="fs-5">Permainannya Banyak</p>
                <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                    <div class="ps-3">
                        <h3 class="mb-1">Queenza Clarissa</h3>
                    </div>
                    <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                </div>
            </div>
            <div class="testimonial-item bg-light rounded p-5">
                <p class="fs-5">apa masih bisa untuk pendaftaran baru ibuk?</p>
                <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                    <div class="ps-3">
                        <h3 class="mb-1">Nadia Photocopy</h3>
                    </div>
                    <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

@endsection
