@extends('layout.layout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Kriteria</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Kriteria</li>
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
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kriteria as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $item->kode_kriteria }}</td>
                                            <td>{{ $item->nama_kriteria }}</td>

                                            <td>{{ $item->nilai_kriteria }}</td>
                                            <td>
                                                <div class=" justify-content-center align-items-center">
                                                    <a class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#editkategori{{ $item->id }}"><i
                                                            class='bi bi-pencil-square'></i></a>

                                                    <div class="modal fade" id="editkategori{{ $item->id }}"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        Edit Kriteria</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <form action="{{ url('/kriteria/update/' . $item->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    <div class="modal-body">

                                                                        <div class="row gy-3">
                                                                            <div class="col-md-10">
                                                                                <input id="todo-input" type="text"
                                                                                    placeholder="Kategori"
                                                                                    class="form-control"
                                                                                    name="nama_kriteria"
                                                                                    value="{{ $item->nama_kriteria }}"
                                                                                    required>

                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <input id="todo-input" type="text"
                                                                                    placeholder="Kategori"
                                                                                    class="form-control"
                                                                                    name="nilai_kriteria"
                                                                                    value="{{ $item->nilai_kriteria }}"
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
                                                        data-bs-target="#hapuskategori{{ $item->id }}"
                                                        class="ms-3"><i class="bi bi-trash3"></i></a>
                                                    <div class="modal modal-fade" id="hapuskategori{{ $item->id }}"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        Hapus Kriteria
                                                                        {{ $item->nama_kriteria }}
                                                                    </h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <form action="{{ url('/kriteria/destroy/' . $item->id) }}"
                                                                    method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="modal-body">

                                                                        <div class="row mb-3">
                                                                            <p>Jika anda Menghapus
                                                                                <b>{{ $item->nama_kriteria }}</b>
                                                                                maka subkriteria
                                                                                dengan kategori
                                                                                {{ $item->nama_kriteria }} akan
                                                                                terhapus!

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
