@extends('layout.layout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>About</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">About</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="col-lg-12">
                <!-- Recent Sales -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">About</h5>

                        <!-- Vertical Form -->
                        @foreach ($about as $item)
                            <form action="{{ url('/About/update/' . $item->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row ">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">

                                            <textarea class="form-control" name="about" placeholder="Leave a comment here" id="floatingTextarea2"
                                                style="height: 100px">{{ $item->about }}</textarea>

                                            <label for="floatingTextarea2">Tentang</label>
                                        </div>

                                    </div>
                                    <div class="col-md-12 text-end d-grid">
                                        <button type="submit" class="btn btn-primary"><i
                                                class="bx bx-list-plus"></i>Save</button>
                                    </div>

                                </div>

                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>


    </main><!-- End #main -->
@endsection
