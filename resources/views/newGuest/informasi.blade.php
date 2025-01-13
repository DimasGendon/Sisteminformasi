@extends('layout.templatenew') <!-- Menggunakan layout utama -->

@section('informasi') <!-- Bagian Tentang Kami -->

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
                    <div class="column is-2-desktop is-4-tablet is-6-mobile">
                        <div class="startup-icon-box">
                            <div class="is-icon-reveal" style="margin-bottom: 15px;">
                                <i class="im im-icon-File-Chart" style="font-size: 40px; color: #4a90e2;"></i>
                            </div>
                            <div class="box-title" style="font-weight: bold; font-size: 18px; margin-bottom: 10px; color: #333; text-align: left;">
                                {{ $informasi->judul }}
                            </div>
                            <p class="box-content is-tablet-padded" style="font-size: 14px; color: #555; line-height: 1.6; text-align: left; margin-bottom: 20px;">
                                {{ Str::limit($informasi->deskripsi, 150) }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="has-text-centered is-title-reveal pt-20 pb-20">
                    <a href="#" class="button button-cta primary-btn rounded raised">Learn more</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

<style>
    /* Style untuk card informasi */
    .startup-icon-box {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        border-radius: 10px;
        background: #fff;
        padding: 20px;
        transition: transform 0.3s, box-shadow 0.3s;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        height: 100%; /* Pastikan tinggi card seragam */
        box-sizing: border-box;
        min-height: 320px; /* Menetapkan tinggi minimum agar card memiliki tinggi seragam */
        flex-grow: 1; /* Agar card bisa tumbuh dalam kolom */
    }

    .startup-icon-box:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .is-icon-reveal {
        margin-bottom: 15px;
    }

    .box-title {
        font-weight: bold;
        font-size: 18px;
        margin-bottom: 10px;
        color: #333;
        text-align: left;
    }

    .box-content {
        font-size: 14px;
        color: #555;
        line-height: 1.6;
        text-align: left;
        margin-bottom: 20px;
    }

    /* Grid layout untuk memastikan konsistensi dalam lebar dan tinggi */
    .columns.is-vcentered.is-multiline.has-text-centered {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .column.is-2-desktop.is-4-tablet.is-6-mobile {
        display: flex;
        justify-content: center;
        padding: 10px;
    }

    /* Sesuaikan dengan responsif pada layar lebih kecil */
    @media (max-width: 768px) {
        .startup-icon-box {
            min-height: 250px; /* Adjust untuk layar tablet lebih kecil */
        }
    }

    @media (max-width: 480px) {
        .startup-icon-box {
            min-height: 230px; /* Adjust untuk layar handphone lebih kecil */
        }
    }
</style>
