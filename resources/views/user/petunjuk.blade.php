@extends('user.layout.layout')
@section('content')
    <main class="main">
        <!-- Departments Section -->
        <section id="departments" class="departments section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Petunjuk</h2>
                <p>Detail dari setiap halaman</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#departments-tab-1">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-2">Tentang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-3">Survei</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-4">Petunjuk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-5">Login</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="departments-tab-1">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Beranda</h3>

                                        <p>Halaman utama pada situs web atau aplikasi BPJS Kesehatan yang memberikan
                                            informasi penting dan akses cepat ke berbagai layanan yang disediakan. Beranda
                                            ini dirancang untuk memudahkan peserta atau calon peserta BPJS Kesehatan dalam
                                            menemukan informasi, dan mengakses fitur yang diperlukan.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-2">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Tentang</h3>

                                        <p>Bagian dari halaman ini yang menjelaskan tentang BPJS Kesehatan, perannya,
                                            tujuan, dan program yang diselenggarakan.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-3">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Survei</h3>

                                        <p>Bagian utama dari website ini yang digunakan untuk menentukan kelas dari BPJS
                                            Kesehatan dengan mengisikan quesionare yanga ada.s</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-4">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Petunjuk</h3>

                                        <ul>
                                            <li>Klik <a href="/Survei">disini</a> untuk memulai menentukan kelas BPJS anda
                                            </li>
                                            <li>Isi Biodata Anda</li>
                                            <li>Jawab semua pertanyaan yang ada</li>
                                            <li>Klik submit untuk melihat hasil dari jawaban anda serta kelas BPJS</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-5">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Login</h3>

                                        <p>Bagian dari halaman survei</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Departments Section -->

    </main>
@endsection
