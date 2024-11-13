@extends('layout.layout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Perserta</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Perserta</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Peserta</h5>

                        <!-- Vertical Form -->
                        <form action="{{ url('/Peserta/store') }}" method="post" class="row g-3">
                            @csrf
                            <div class="col-6">
                                <label for="inputNanme4" class="form-label">ID BPJS</label>
                                <input type="text" name="id_bpjs"class="form-control" id="inputNanme4">
                            </div>
                            <div class="col-6">
                                <label for="inputEmail4" class="form-label">Nama Peserta</label>
                                <input type="text" name="nama_peserta" class="form-control" id="inputEmail4">
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
                            <h5 class="card-title">Peserta <span>| Peserta</span></h5>

                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">ID BPJS </th>
                                        <th scope="col">Nama Peserta</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($peserta as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $item->id_bpjs }}</td>
                                            <td>{{ $item->nama_peserta }}
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
