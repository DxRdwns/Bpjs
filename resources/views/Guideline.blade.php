@extends('layout.layout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Guideline</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Guideline</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Guideline</h5>

                            <!-- Default Tabs -->
                            <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
                                <li class="nav-item flex-fill" role="presentation">
                                    <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home-justified" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">Dashboard</button>
                                </li>
                                <li class="nav-item flex-fill" role="presentation">
                                    <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile-justified" type="button" role="tab"
                                        aria-controls="profile" aria-selected="false">Responden</button>
                                </li>
                                <li class="nav-item flex-fill" role="presentation">
                                    <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#contact-justified" type="button" role="tab"
                                        aria-controls="contact" aria-selected="false">Kriteria</button>
                                </li>
                                <li class="nav-item flex-fill" role="presentation">
                                    <button class="nav-link w-100" id="sub-tab" data-bs-toggle="tab" data-bs-target="#sub"
                                        type="button" role="tab" aria-controls="contact"
                                        aria-selected="false">SubKriteria</button>
                                </li>
                                <li class="nav-item flex-fill" role="presentation">
                                    <button class="nav-link w-100" id="about-tab" data-bs-toggle="tab"
                                        data-bs-target="#about" type="button" role="tab" aria-controls="contact"
                                        aria-selected="false">About</button>
                                </li>
                            </ul>
                            <div class="tab-content pt-2" id="myTabjustifiedContent">
                                <div class="tab-pane fade show active" id="home-justified" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    Menu ini merupakan menu yang berisikan summary data survei yang talah dilakukan.
                                </div>
                                <div class="tab-pane fade" id="profile-justified" role="tabpanel"
                                    aria-labelledby="profile-tab">
                                    Menu ini merupakan menu yang menampilkan list data hasil pengisian survei oleh
                                    responden.
                                </div>
                                <div class="tab-pane fade" id="contact-justified" role="tabpanel"
                                    aria-labelledby="contact-tab">
                                    Menu ini merupakan menu untuk mengelola kriteria penilaian, termasuk menambahkan,
                                    mengedit, dan menghapus kriteria.
                                </div>
                                <div class="tab-pane fade" id="sub" role="tabpanel" aria-labelledby="sub-tab">
                                    Menu ini merupakan menu untuk mengelola subkriteria, seperti detail setiap kriteria
                                    penilaian yang lebih spesifik.
                                </div>
                                <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                                    Menu ini merupakan menu untuk menampilkan informasi tentang aplikasi atau proyek yang
                                    sedang dikembangkan.
                                </div>
                            </div><!-- End Default Tabs -->

                        </div>
                    </div>
                </div><!-- End Left side columns -->
                <!-- Left side columns -->


            </div>
        </section>

    </main><!-- End #main -->
@endsection
