@extends('user.layout.layout')
@section('content')
    <main class="main">
        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container">

                <div class="row gy-4 gx-5">

                    <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ asset('user/assets/img/bpjs1.jpg') }}" class="img-fluid" alt="">
                        <a href="https://youtu.be/XwBX-VHX2Y8?si=c_p0FnV6MGgwCF66" class="glightbox pulsating-play-btn"></a>
                    </div>

                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <h3>About Us</h3>
                        <p>
                            Selamat datang di Aplikasi Penentuan Kelas BPJS, platform digital yang dirancang untuk membantu
                            masyarakat Indonesia memilih kelas layanan BPJS Kesehatan yang sesuai dengan kebutuhan dan
                            kemampuan mereka.
                        </p>
                        <h5>About BPJS</h5>
                        <p>
                            BPJS Kesehatan (Badan Penyelenggara Jaminan Sosial Kesehatan) adalah lembaga pemerintah yang
                            bertanggung jawab menyelenggarakan program Jaminan Kesehatan Nasional (JKN). Program ini
                            bertujuan memberikan perlindungan kesehatan yang merata dan terjangkau bagi seluruh rakyat
                            Indonesia.
                        </p>
                        <ul>
                            <li>
                                <i class="fa-solid fa-vial-circle-check"></i>
                                <div>
                                    <h5>BPJS Kesehatan Kelas 1</h5>
                                    <p>Menyediakan fasilitas lebih lengkap dan nyaman, dengan ruang perawatan yang lebih
                                        baik. Iuran untuk Kelas 1 paling tinggi di antara kelas lainnya.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <i class="fa-solid fa-vial-circle-check"></i>
                                <div>
                                    <h5>BPJS Kesehatan Kelas 2</h5>
                                    <p>Menyediakan fasilitas yang cukup baik dengan ruang perawatan standar. Iuran Kelas
                                        2 lebih rendah dibandingkan Kelas 1, tetapi lebih tinggi dari Kelas 3.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <i class="fa-solid fa-vial-circle-check"></i>
                                <div>
                                    <h5>BPJS Kesehatan Kelas 3</h5>
                                    <p>Fasilitas lebih terbatas, dengan ruang perawatan yang lebih sederhana dan antrean
                                        yang cenderung lebih panjang. Iuran untuk Kelas 3 paling terjangkau.</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>

        </section><!-- /About Section -->
    </main>
@endsection
