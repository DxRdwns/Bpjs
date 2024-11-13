@extends('layout.layout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Kriteria</h5>

                        <!-- Vertical Form -->
                        <form action="{{ url('/Kriteria/store') }}" method="post" class="row g-3">
                            @csrf
                            <div class="col-2">
                                <label for="inputNanme4" class="form-label">Kode Kriteria</label>
                                <input type="text" name="kode_kriteria"class="form-control" id="inputNanme4">
                            </div>
                            <div class="col-7">
                                <label for="inputEmail4" class="form-label">Nama Kriteria</label>
                                <input type="text" name="nama_kriteria" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-3">
                                <label for="inputPassword4" class="form-label">Nilai Kriteria</label>
                                <input type="number" name="nilai_kriteria" class="form-control" id="inputPassword4">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form><!-- Vertical Form -->

                    </div>
                </div>

                <!-- Recent Sales -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">



                        <div class="card-body">
                            <h5 class="card-title">Kriteria <span>| Kriteria</span></h5>

                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Kode </th>
                                        <th scope="col">Nama Kriteria</th>
                                        <th scope="col">Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kriteria as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $item->kode_kriteria }}</td>
                                            <td>{{ $item->nama_kriteria }}</td>
                                            </td>
                                            <td>{{ $item->nilai_kriteria }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div><!-- End Recent Sales -->




            </div>
        </section>


    </main><!-- End #main -->
@endsection
