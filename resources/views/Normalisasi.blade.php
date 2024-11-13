@extends('layout.layout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Normalisasi</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Normalisasi</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="col-lg-12">


                @foreach ($normalisasi as $norm)
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">{{ $norm['pekerjaan']->peserta->nama_peserta }} <span>|
                                        Normalisasi</span></h5>

                                <table class="table table-borderless ">
                                    <thead>
                                        <tr>
                                            <th scope="col">Kriteria</th>
                                            <th scope="col">Bobot</th>
                                            <th scope="col">Normalisasi Bobot</th>
                                            <th scope="col">Normalisasi Utility</th>
                                            <th scope="col">Nilai Akhir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (['C1', 'C2', 'C3', 'C4', 'C5'] as $kriteria)
                                            <tr>
                                                <td>{{ $kriteria }}</td>
                                                <td>{{ $norm['bobot'][$kriteria] ?? 0 }}</td>
                                                <td>{{ $norm['normbobot'][$kriteria] ?? 0 }}</td>
                                                <td>{{ $norm['norutic'][$kriteria] ?? 0 }}</td>
                                                <td>{{ $norm['nilaiakhir'][$kriteria] ?? 0 }}</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="4" class="text-right"><strong>Total Nilai Akhir:</strong></td>
                                            <td class="text-center"><strong>{{ $norm['total_nilaiakhir'] }}</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endforeach





            </div>
        </section>


    </main><!-- End #main -->
@endsection
