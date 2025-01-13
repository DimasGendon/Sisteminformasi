@extends('layout.templatenew') <!-- Menggunakan layout utama -->

@section('loker') <!-- Bagian Loker -->

<section class="about-us section" id="loker">
    <div class="container">
        <!-- Title -->
        <div class="section-title-wrapper">
            <div class="bg-number"><i class="material-icons">domain</i></div>
            <h2 class="title section-title has-text-centered dark-text">
                LOKER
            </h2>
            <div class="subtitle section-subtitle has-text-centered">
                Ada beberapa <b>Loker</b> yang mungkin bisa kamu pertimbangkan.
            </div>
        </div>

        <div class="content-wrapper">
            <!-- Grid untuk menampilkan semua loker -->
            <div class="grid-clients">
                <div class="columns is-vcentered is-multiline">
                    @foreach ($lokers as $loker)
                        <div class="column is-one-fifth">
                            <!-- Lightbox link -->
                            <a href="{{ asset('storage/' . $loker->foto) }}" data-lightbox="gallery" data-title="{{ $loker->judul }}">
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
    /* Pastikan gambar mitra berada di tengah */
    .client-link {
        display: inline-block;
        transition: transform 0.3s ease, box-shadow 0.3s ease; /* Transisi yang halus */
    }

    .client {
        display: block;
        max-width: 100%;
        height: auto;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    /* Efek Hover - Menggerakkan dan menskalakan gambar */
    .client-link:hover .client {
        transform: scale(1.1); /* Skala gambar sebesar 10% */
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Menambahkan bayangan halus ketika digerakkan */
    }

    /* Menambahkan spasi antara gambar */
    .column {
        padding: 10px;
    }

    /* Style untuk tombol "Lihat Selengkapnya" */
    .button-cta {
        margin-top: 20px;
        font-size: 16px;
        padding: 12px 30px;
    }
</style>

@push('style')
    <!-- Tambahkan link CSS untuk Lightbox -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    <style>
        /* Kustomisasi tombol close di lightbox */
        .lightboxClose {
            background: rgba(0, 0, 0, 0.7); /* Latar belakang gelap untuk tombol close */
            color: white; /* Warna tombol */
            border-radius: 50%;
            font-size: 20px;
            padding: 5px 10px;
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 10px;
        }
        
        .lightboxClose:hover {
            background: rgba(0, 0, 0, 0.9); /* Hover efek untuk tombol close */
        }
    </style>
@endpush

@push('script')
    <!-- Tambahkan script JS untuk Lightbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
@endpush

@endsection
