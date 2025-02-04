@extends('layout.templatenew') <!-- Menggunakan layout utama -->

@section('loker')
    <!-- Bagian Loker -->

    <section class="about-us section" id="loker">
        <div class="container">
            <!-- Title -->
            <div class="section-title-wrapper">
                <div class="bg-number"><i class="material-icons">domain</i></div>
                <h2 class="title section-title has-text-centered dark-text">
                    LOKER
                </h2>
                <div class="subtitle section-subtitle has-text-centered">
                    Klik Foto Loker Untuk Lihat Detail Persyaratan Untuk Daftar Masuk
                </div>
            </div>

            <div class="content-wrapper">
                <!-- Grid untuk menampilkan semua loker -->
                <div class="grid-clients">
                    <div class="columns is-vcentered is-multiline">
                        @foreach ($lokers as $loker)
                            <div class="column is-one-fifth">
                                <!-- Lightbox link dengan gambar versi resolusi tinggi -->
                                <a href="{{ asset('storage/' . $loker->foto) }}" data-lightbox="gallery"
                                   data-title="{{ $loker->judul }}">
                                    <img class="client" src="{{ asset('storage/' . $loker->foto) }}" alt="mitra" />
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tambahkan style untuk gambar dan efek hover -->
    <style>
        .client {
            display: block;
            max-width: 100%;
            height: auto;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 10px;
        }

        /* Efek Hover - Menggerakkan dan menskalakan gambar */
        .client:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .column {
            padding: 10px;
        }

    </style>

    @push('style')
        <!-- Link CSS untuk Lightbox -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    @endpush

    @push('script')
        <!-- Script untuk Lightbox -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    @endpush
@endsection
