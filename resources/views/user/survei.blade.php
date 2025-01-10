@extends('user.layout.layout')
@section('content')
    <!-- Appointment Section -->
    <section id="appointment" class="appointment section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Survei</h2>
            <p>Isikan Biodata anda</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <form action="{{ url('/Survei/result') }}" method="post">
                @csrf
                <!-- Menampilkan error jika validasi gagal -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-6 mb-3 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nama"
                            required>
                    </div>
                    <div class="col-md-6 mb-3 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                            required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="number" class="form-control" name="phone" id="phone" placeholder="No Handphone"
                            required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="text" class="form-control" name="addres" id="phone" placeholder="Alamat"
                            required>
                    </div>
                </div>

                <div class="container section-title mt-5" data-aos="fade-up">
                    <p>Jawab semua pertanyaan berikut untuk menentukan kelas BPJS anda
                    </p>
                    <h2></h2>

                </div><!-- End Section Title -->
                @foreach ($question as $index => $item)
                    <div class="col-lg-12 col-12">
                        <textarea rows="1" name="question[]" class="form-control" id="question"
                            style="border:none; border-bottom: 1px solid black; color:black;" readonly>{{ $item->nama_kriteria }}</textarea>
                    </div>

                    @foreach ($sub as $kri)
                        @if ($item->id == $kri->id_kategori)
                            <div class="col-lg-12">
                                <div class="form-check">
                                    <!-- Input Radio -->
                                    <input class="form-check-input custom-radio" type="radio"
                                        name="{{ $item->kode_kriteria }}"
                                        id="radio_{{ $item->kode_kriteria }}_{{ $kri->id }}"
                                        value="{{ $kri->nilai_subkriteria }}"
                                        data-related-hidden="hidden_{{ $item->kode_kriteria }}_{{ $kri->id }}"
                                        required>

                                    <!-- Input Hidden -->
                                    <input type="hidden" id="hidden_{{ $item->kode_kriteria }}_{{ $kri->id }}"
                                        name="{{ $item->kode_kriteria }}text" value="{{ $kri->nama_subkriteria }}"
                                        disabled>

                                    <!-- Label -->
                                    <label class="form-label" for="radio_{{ $item->kode_kriteria }}_{{ $kri->id }}">
                                        {{ $kri->nama_subkriteria }}
                                    </label>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endforeach

                <div class="mt-3 php-email-form ">

                    <div class="text-center "><button type="submit">Submit</button></div>
                </div>
            </form>

        </div>

    </section><!-- /Appointment Section -->



    <script>
        document.querySelectorAll('.form-check-input[type="radio"]').forEach(radio => {
            radio.addEventListener('change', (e) => {
                const name = radio.name; // Mendapatkan nama kriteria (C1, C2, dst.)
                const allHiddenInputs = document.querySelectorAll(`input[name="${name}text"]`);

                // Nonaktifkan semua input hidden terkait kriteria
                allHiddenInputs.forEach(input => input.disabled = true);

                // Aktifkan hanya input hidden terkait radio yang dipilih
                const relatedHiddenId = radio.dataset.relatedHidden;
                const relatedHidden = document.getElementById(relatedHiddenId);
                if (relatedHidden) {
                    relatedHidden.disabled = false;
                }
            });
        });
    </script>

@endsection
