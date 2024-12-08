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
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subkriteria as $data)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $data->nama_subkriteria }}</td>
                                            <td>{{ $data->kriteria->nama_kriteria }}</td>
                                            <td>{{ $data->nilai_subkriteria }}</td>

                                            <td>
                                                <div class=" justify-content-center align-items-center">
                                                    <a class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#editkategori{{ $data->id }}"><i
                                                            class='bi bi-pencil-square'></i></a>

                                                    <div class="modal fade" id="editkategori{{ $data->id }}"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        Edit Kriteria</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <form action="{{ url('/subkriteria/update/' . $data->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    <div class="modal-body">

                                                                        <div class="row gy-3">
                                                                            <div class="col-md-5">
                                                                                <input id="todo-input" type="text"
                                                                                    placeholder="Kategori"
                                                                                    class="form-control"
                                                                                    name="nama_kriteria"
                                                                                    value="{{ $data->nama_subkriteria }}"
                                                                                    required>

                                                                            </div>

                                                                            <div class="col-md-5">
                                                                                <select class="form-select"
                                                                                    name="id_kategori" id="floatingSelect"
                                                                                    aria-label="State">
                                                                                    <option
                                                                                        value="{{ $data->id_kategori }}"
                                                                                        selected>
                                                                                        {{ $data->kriteria->nama_kriteria }}
                                                                                    </option>
                                                                                    @foreach ($kriteria as $kri)
                                                                                        <option
                                                                                            value="{{ $kri->id }}">
                                                                                            {{ $kri->nama_kriteria }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <input id="todo-input" type="text"
                                                                                    placeholder="Kategori"
                                                                                    class="form-control"
                                                                                    name="nilai_subkriteria"
                                                                                    value="{{ $data->nilai_subkriteria }}"
                                                                                    required>

                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="Submit" class="btn btn-primary">Save
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#hapuskategori{{ $data->id }}"
                                                        class="ms-3"><i class="bi bi-trash3"></i></a>
                                                    <div class="modal modal-fade" id="hapuskategori{{ $data->id }}"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        Hapus Kriteria
                                                                        {{ $data->nama_kriteria }}
                                                                    </h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <form
                                                                    action="{{ url('/subkriteria/destroy/' . $data->id) }}"
                                                                    method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="modal-body">

                                                                        <div class="row mb-3">
                                                                            <p>Hapus subkriteria
                                                                                {{ $data->nama_subkriteria }}

                                                                                dari kriteria
                                                                                {{ $data->kriteria->nama_kriteria }}?

                                                                            </p>
                                                                            <p></p>
                                                                        </div>



                                                                    </div>
                                                                    <div class="modal-footer">

                                                                        <button type="submit"
                                                                            class="btn btn-danger">Delete</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            </td>
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
