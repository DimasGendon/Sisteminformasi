@extends('layout.templatenew') <!-- Menggunakan layout utama -->

@section('informasi')
    <!-- Bagian Tentang Kami -->
    <section class="about-us section" id="informasi">
        <div id="services" class="section is-medium">
            <div class="container">
                <!-- Title -->
                <div class="section-title-wrapper">
                    <div class="bg-number">1</div>
                    <h2 class="title section-title has-text-centered dark-text">
                        INFORMASI
                    </h2>
                </div>
    
                <div class="content-wrapper">
                    <div class="columns is-vcentered is-multiline has-text-centered">
                        <!-- Foreach block -->
                        @foreach ($informasis as $informasi)
                            <div class="column is-2-desktop is-4-tablet is-6-mobile card-item">
                                <div class="startup-icon-box">
                                    <!-- Judul Card -->
                                    <div class="box-title">
                                        {{ $informasi->judul }}
                                    </div>
                                    <!-- Garis pemisah di bawah judul -->
                                    <div class="content-divider"></div>
    
                                    <!-- Konten dalam card (deskripsi) -->
                                    <p class="box-content">
                                        {{ Str::limit($informasi->deskripsi, 150) }}
                                    </p>
    
                                    <!-- Garis pemisah di bawah deskripsi -->
                                    <div class="content-divider"></div>
    
                                    <!-- Ikon centang -->
                                    <div class="is-icon-reveal">
                                        <i class="fas fa-check-circle" style="font-size: 40px; color: #4a90e2;"></i>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <style>
        /* Gaya untuk Card */
        .columns.is-vcentered.is-multiline.has-text-centered {
            display: grid;
            grid-template-columns: repeat(5, 1fr); /* 5 kolom sama lebar */
            gap: 20px; /* Menambahkan jarak antar card */
        }
    
        /* Ukuran card tetap konsisten */
        .column.is-2-desktop {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
            padding: 0;
        }
    
        .startup-icon-box {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border-radius: 10px;
            background: #fff;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: 1px solid #ddd;
            height: 380px;
            transition: transform 0.3s, box-shadow 0.3s;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
    
        /* Membuat semua bagian card (judul, konten, dan ikon) memiliki tinggi yang konsisten */
        .box-title, .box-content, .is-icon-reveal {
            display: flex;
            flex-shrink: 0; /* Pastikan tidak ada bagian yang menyusut */
            justify-content: center;
            align-items: center;
            text-align: center;
        }
    
        .box-title {
            font-weight: bold;
            font-size: 16px;
            margin-bottom: 10px;
            color: #333;
            line-height: 1.2;
            height: 4.3em; /* Menjaga tinggi judul tetap konsisten */
            display: -webkit-box;
            -webkit-line-clamp: 3; /* Batasi teks hanya 3 baris */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    
        /* Membuat bagian konten card (deskripsi) memiliki tinggi terbatas dan titik tiga di akhir */
        .box-content {
            font-size: 14px;
            color: #555;
            line-height: 1.6;
            margin: 10px 0;
            flex-grow: 1;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 7; /* Membatasi jumlah baris, sesuaikan jika perlu */
            -webkit-box-orient: vertical; /* Membuat box fleksibel secara vertikal */
            height: 7em; /* Tentukan tinggi tetap untuk deskripsi */
        }
    
        /* Agar ikon centang tetap berada di bawah */
        .is-icon-reveal {
            margin-top: auto; /* Posisikan ikon centang ke bawah */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 40px; /* Pastikan ikon memiliki tinggi yang konsisten */
        }
    
        /* Garis pemisah */
        .content-divider {
            margin: 10px 0;
            border-bottom: 2px solid #4a90e2;
            width: 100%;
        }
    
        /* Responsif untuk tablet dan mobile, tetap menjaga ukuran card yang konsisten */
        @media (max-width: 1024px) {
            .columns.is-vcentered.is-multiline.has-text-centered {
                grid-template-columns: repeat(3, 1fr); /* 3 card per baris untuk tablet */
            }
    
            .column.is-2-desktop {
                width: 100%;
            }
        }
    
        @media (max-width: 768px) {
            .columns.is-vcentered.is-multiline.has-text-centered {
                grid-template-columns: repeat(2, 1fr); /* 2 card per baris untuk layar kecil */
            }
    
            .column.is-2-desktop {
                width: 100%;
            }
        }
    
        @media (max-width: 480px) {
            .columns.is-vcentered.is-multiline.has-text-centered {
                grid-template-columns: 1fr; /* 1 card per baris untuk layar ponsel */
            }
    
            .column.is-2-desktop {
                width: 100%;
            }
        }
    </style>
    
@endsection
