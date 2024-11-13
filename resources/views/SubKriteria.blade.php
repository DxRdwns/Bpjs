@extends('layout.layout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>SubKriteria</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">SubKriteria</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add SubKriteria</h5>

                        <!-- Vertical Form -->
                        <form action="{{ url('/SubKriteria/store') }}" method="post" class="row g-3">
                            @csrf
                            <div class="col-7">
                                <label for="inputEmail4" class="form-label">Nama SubKriteria</label>
                                <input type="text" name="nama_subkriteria" class="form-control" id="inputEmail4"
                                    required>
                            </div>
                            <div class="col-2">
                                <label for="inputPassword4" class="form-label">Nilai SubKriteria</label>
                                <input type="number" name="nilai_subkriteria" class="form-control" id="inputPassword4"
                                    required>
                            </div>
                            <div class="col-3">
                                <label for="inputNanme4" class="form-label">Nama Kriteria</label>
                                <select class="form-select" name="id_kategori" id="floatingSelect" aria-label="State">
                                    <option selected>Pilihan</option>
                                    @foreach ($kriteria as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_kriteria }}</option>
                                    @endforeach
                                </select>
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
                                        <th scope="col">Nama Sub Kriteria</th>
                                        <th scope="col">Nama Kriteria</th>

                                        <th scope="col">Nilai</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subkriteria as $data)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $data->nama_subkriteria }}</td>
                                            <td>{{ $data->id_kategori }}</td>
                                            <td>{{ $data->nilai_subkriteria }}</td>
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
