@extends('user.layout.layout')
@section('content')
    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Result</h2>
            <p>Berdasarkan questionare yang sudah anda isikan, anda termasuk kedalam {{ $keterangan }} </p>
        </div><!-- End Section Title -->

        <div class="container">
            <table class="table text-center">
                <thead>
                    <tr>

                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No Telp.</th>
                        <th scope="col">Iuran</th>
                        <th scope="col">Pekerjaan</th>
                        <th scope="col">Jenis Pekerjaan</th>
                        <th scope="col">Golongan</th>
                        <th scope="col">Gaji</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td>{{ session('name') }}</td>
                        <td>{{ session('email') }}</td>
                        <td>{{ session('addres') }}</td>
                        <td>{{ session('phone') }}</td>
                        <td>{{ session('C1text') }}</td>
                        <td>{{ session('C2text') }}</td>
                        <td>{{ session('C3text') }}</td>
                        <td>{{ session('C4text') }}</td>
                        <td>{{ session('C5text') }}</td>
                    </tr>

                </tbody>
            </table>
            <div class="row gy-4">

                <div class="col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="100">

                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fas fa-pills"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>{{ $keterangan }}</h3>
                        </a>
                        <p>Keterangan</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fas fa-hospital-user"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>{{ $nilaiDesimal }}%</h3>
                        </a>
                        <p>Persentase</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="400">

                </div><!-- End Service Item -->


            </div>

        </div>

    </section><!-- /Services Section -->
@endsection
