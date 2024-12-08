@extends('layout.layout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Responden</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Responden</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">


                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">


                                <div class="card-body">
                                    <h5 class="card-title">Responden <span>| All</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">No Telp.</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Hasil</th>
                                                <th scope="col">Quality</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($member as $item)
                                                <tr>
                                                    <th scope="row"><a href="#">{{ $loop->iteration }}</a></th>
                                                    <td>{{ $item->nama_peserta }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->phone }}</td>
                                                    <td>{{ $item->addres }}</td>
                                                    <td>{{ $item->hasil }}</td>
                                                    <td>{{ $item->quality }}</td>
                                                </tr>
                                            @endforeach


                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->


                    </div>
                </div><!-- End Left side columns -->


            </div>
        </section>

    </main><!-- End #main -->
@endsection
