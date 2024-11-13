@extends('layout.layout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Pekerjaan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Pekerjaan</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Pekerjaan</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="{{ url('/Pekerjaan/store') }}" method="post">
                            @csrf
                            <div class="col-12">
                                <label for="inputEmail4" class="form-label">Nama Peserta</label>
                                <select class="form-select" name="id_peserta" id="floatingSelect" aria-label="State">
                                    <option selected>Pilihan</option>
                                    @foreach ($peserta as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_peserta }}</option>
                                    @endforeach

                                </select>
                            </div>
                            @foreach ($kriteria as $item)
                                <div class="col-7">
                                    <textarea rows="1" class="form-control" id="question"
                                        style="border:none; border-bottom: 1px solid black; color:black;" readonly>{{ $item->nama_kriteria }}</textarea>
                                </div>
                                <div class="col-5">
                                    <select class="form-select"
                                        name="{{ $item->kode_kriteria == 'C1' ? 'C1' : ($item->kode_kriteria == 'C2' ? 'C2' : ($item->kode_kriteria == 'C3' ? 'C3' : ($item->kode_kriteria == 'C4' ? 'C4' : ($item->kode_kriteria == 'C5' ? 'C5' : '')))) }}"
                                        id="floatingSelect" aria-label="State">
                                        <option selected>Pilihan</option>

                                        @foreach ($subkriteria as $sub)
                                            @if ($sub->id_kategori == $item->id)
                                                <option value="{{ $sub->nilai_subkriteria }}">{{ $sub->nama_subkriteria }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            @endforeach
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
                            <h5 class="card-title">Pekerjaan <span>| Kriteria</span></h5>

                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Peserta</th>
                                        <th scope="col">C1</th>
                                        <th scope="col">C2</th>
                                        <th scope="col">C3</th>
                                        <th scope="col">C4</th>
                                        <th scope="col">C5</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pekerjaan as $item)
                                        <tr>
                                            <th scope="row"><a href="#">{{ $loop->iteration }}</a></th>
                                            <td>{{ $item->peserta->nama_peserta }}</td>
                                            <td>{{ $item->C1 }}</td>
                                            <td>{{ $item->C2 }}</td>
                                            <td>{{ $item->C3 }}</td>
                                            <td>{{ $item->C4 }}</td>
                                            <td>{{ $item->C5 }}</td>
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
