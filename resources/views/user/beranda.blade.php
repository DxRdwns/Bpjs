@extends('user.layout.layout')
@section('content')
    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section light-background">

            <img src="{{ asset('user/assets/img/bpjs.jpg') }}" alt="" data-aos="fade-in">

            <div class="container position-relative">

                <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
                    <h2>WELCOME TO BPJS</h2>
                    <p>Ketahui Kelas BPJS Anda!</p>
                </div><!-- End Welcome -->

                <div class="content row gy-4">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
                            <h3>Apa Itu BPJS??</h3>
                            <p>
                                BPJS Kesehatan adalah lembaga yang bertanggung jawab dalam penyelenggaraan jaminan kesehatan
                                nasional di Indonesia. BPJS Kesehatan menyediakan layanan kesehatan bagi seluruh warga
                                negara Indonesia melalui program Jaminan Kesehatan Nasional (JKN).
                            </p>
                            <div class="text-center">
                                <a href="{{ url('/Tentang') }}" class="more-btn"><span>Ketahui Lebih Lanjut</span> <i
                                        class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Why Box -->

                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="d-flex flex-column justify-content-center">
                            <div class="row gy-4">

                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                                        <i class="bi bi-clipboard-data"></i>
                                        <h4>BPJS Kesehatan Kelas 1</h4>
                                        <p>Menyediakan fasilitas lebih lengkap dan nyaman, dengan ruang perawatan yang lebih
                                            baik. Iuran untuk Kelas 1 paling tinggi di antara kelas lainnya.
                                        </p>
                                    </div>
                                </div><!-- End Icon Box -->

                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                                        <i class="bi bi-gem"></i>
                                        <h4>BPJS Kesehatan Kelas 2</h4>
                                        <p>Menyediakan fasilitas yang cukup baik dengan ruang perawatan standar. Iuran Kelas
                                            2 lebih rendah dibandingkan Kelas 1, tetapi lebih tinggi dari Kelas 3.
                                        </p>
                                    </div>
                                </div><!-- End Icon Box -->

                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                                        <i class="bi bi-inboxes"></i>
                                        <h4>BPJS Kesehatan Kelas 3</h4>
                                        <p>Fasilitas lebih terbatas, dengan ruang perawatan yang lebih sederhana dan antrean
                                            yang cenderung lebih panjang. Iuran untuk Kelas 3 paling terjangkau.</p>
                                    </div>
                                </div><!-- End Icon Box -->

                            </div>
                        </div>
                    </div>
                </div><!-- End  Content-->

            </div>

        </section><!-- /Hero Section -->


    </main>
@endsection
