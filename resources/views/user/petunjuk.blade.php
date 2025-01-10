@extends('user.layout.layout')
@section('content')
    <main class="main">
        <!-- Departments Section -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Petunjuk</h2>
                <p>Detail dari setiap halaman</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item  position-relative">

                            <a href="#" class="stretched-link">
                                <h3>Beranda</h3>
                            </a>
                            <p>Halaman utama pada situs web atau aplikasi BPJS Kesehatan yang memberikan
                                informasi penting dan akses cepat ke berbagai layanan yang disediakan. Beranda
                                ini dirancang untuk memudahkan peserta atau calon peserta BPJS Kesehatan dalam
                                menemukan informasi, dan mengakses fitur yang diperlukan.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">

                            <a href="#" class="stretched-link">
                                <h3>Tentang</h3>
                            </a>
                            <p>Bagian dari halaman ini yang menjelaskan tentang BPJS Kesehatan, perannya,
                                tujuan, dan program yang diselenggarakan</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">

                            <a href="#" class="stretched-link">
                                <h3>Survei</h3>
                            </a>
                            <p>Bagian utama dari website ini yang digunakan untuk menentukan kelas dari BPJS
                                Kesehatan dengan mengisikan quesionare yanga ada.</p>
                        </div>
                    </div><!-- End Service Item -->
                    <div class="col-lg-2"></div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">

                            <a href="#" class="stretched-link">
                                <h3>Petunjuk</h3>
                            </a>
                            <p>
                            <ul class="text-left">
                                <li>Klik <a href="/Survei">disini</a> untuk memulai menentukan kelas BPJS anda
                                </li>
                                <li>Isi Biodata Anda</li>
                                <li>Jawab semua pertanyaan yang ada</li>
                                <li>Klik submit untuk melihat hasil dari jawaban anda serta kelas BPJS</li>
                            </ul>
                            </p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item position-relative">

                            <a href="#" class="stretched-link">
                                <h3>Login</h3>
                            </a>
                            <p>Menu halaman admin untuk mengatur bagian dari survei</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-2"></div>

                </div>

            </div>

        </section><!-- /Services Section -->

    </main>
@endsection
