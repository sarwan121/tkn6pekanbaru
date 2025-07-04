@extends('layouts.app')

@section('title', 'Contact - TK Negeri 6 Pekanbaru')

@section('content')
    <!-- Page Header End -->

<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 mb-5">
            <!-- Address -->
            <div class="col-md-6 col-lg-4 text-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 75px; height: 75px;">
                    <i class="fa fa-map-marker-alt fa-2x text-primary"></i>
                </div>
                <h6>JL. HR SUBRANTAS KM 11.5, Simpaagbaru, Kec. Binawidya, Kota Pekanbaru Prov. Riau</h6>
            </div>

            <!-- Email -->
            <div class="col-md-6 col-lg-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 75px; height: 75px;">
                    <i class="fa fa-envelope-open fa-2x text-primary"></i>
                </div>
                <h6>tknegeri6pekanbaru@gmail.com</h6>
            </div>

            <!-- Phone -->
            <div class="col-md-6 col-lg-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 75px; height: 75px;">
                    <i class="fa fa-phone-alt fa-2x text-primary"></i>
                </div>
                <h6>+6281275567780</h6>
            </div>
        </div>

        <!-- Google Maps Section -->
        <div class="bg-light rounded">
            <div class="row g-0">
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <iframe class="position-relative rounded w-100 h-100"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4770.6708111685675!2d101.3871452753194!3d0.4654393465887988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a858bea7b791%3A0xafaf664207f3d384!2sTK%20Mayang!5e0!3m2!1sen!2sid!4v1747668525905!5m2!1sen!2sid"
                                frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false"
                                tabindex="0" title="Map Location"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

    @endsection
