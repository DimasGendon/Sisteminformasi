<!doctype html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>BKK SMK Muhammadiyah 1 Genteng</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('TemplateAdmin/images/FBKK 2.png') }}">


    <!-- Google Tag Manager -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
        ;
        (function(w, d, s, l, i) {
            w[l] = w[l] || []
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            })
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : ''
            j.async = true
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl
            f.parentNode.insertBefore(j, f)
        })(window, document, 'script', 'dataLayer', 'GTM-MZR6B4P')
    </script>

    <!-- End Google Tag Manager -->

    <!--Core CSS -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="{{ asset('newTemplate/assets/css/app.css') }}" />
    <link id="theme-sheet" rel="stylesheet" href="{{ asset('newTemplate/assets/css/core.css') }}" />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap");

        *,
        *:after,
        *:before {
            box-sizing: border-box;
        }

        body {
            font-family: "Inter", sans-serif;
            line-height: 1.5;
            min-height: 100vh;
            background-color: #ffffff;
        }

        article {
            width: 90%;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            font-size: 1.125rem;
            padding: 2rem;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 15px 20px -10px rgba(#37fe00, 0.1);
            margin-top: 0;
            /* Ensure no top margin to keep it at the top */
        }


        strong {
            font-weight: 600;
        }


        details {
            position: fixed;
            right: 1rem;
            bottom: 1rem;
            margin-top: 2rem;
            color: #6b7280;
            display: flex;
            flex-direction: column;
            z-index: 1000;

                {
                background-color: #1e1e27;
                box-shadow: 0 5px 10px rgba(#000, 0.15);
                padding: 1.25rem;
                border-radius: 8px;
                position: absolute;
                max-height: calc(100vh - 100px);
                width: 400px;
                max-width: calc(100vw - 2rem);
                bottom: calc(100% + 1rem);
                right: 0;
                overflow: auto;
                transform-origin: 100% 100%;
                color: #95a3b9;
                z-index: 1000;

                &::-webkit-scrollbar {
                    width: 15px;
                    background-color: #000000;
                }

                &::-webkit-scrollbar-thumb {
                    width: 5px;
                    border-radius: 99em;
                    background-color: #95a3b9;
                    border: 5px solid #1e1e27;
                }

                &>*+* {
                    margin-top: 0.75em;
                }

                p>code {
                    font-size: 1rem;
                    font-family: monospace;
                }

                pre {
                    white-space: pre-line;
                    // background-color: #2c2d38;
                    border: 1px solid #95a3b9;
                    border-radius: 6px;
                    font-family: monospace;
                    padding: 0.75em;
                    font-size: 0.875rem;
                    color: #fff;
                }
            }

            &[open] div {
                animation: scale 0.25s ease;
            }
        }

        details>summary {
            z-index: 1001;
            /* Set z-index lebih tinggi agar summary di depan konten */
        }

        summary {
            display: inline-flex;
            margin-left: auto;
            margin-right: auto;
            justify-content: center;
            align-items: center;
            font-weight: 600;
            padding: 0.75em 3em .75em 1.25em;
            border-radius: 99em;
            color: #fff;
            background-color: #185adb;
            box-shadow: 0 5px 15px rgba(#000, 0.1);
            list-style: none;
            text-align: center;
            cursor: pointer;
            transition: 0.15s ease;
            position: relative;

            &::-webkit-details-marker {
                display: none;
            }

            &:hover,
            &:focus {
                background-color: mix(#000, #185adb, 20%);
                // color: #6366f1;
            }

            svg {
                position: absolute;
                right: 1.25em;
                top: 50%;
                transform: translateY(-50%);
                width: 1.5em;
                height: 1.5em;
            }
        }

        @keyframes scale {
            0% {
                transform: scale(0);
            }

            100% {
                transform: scale(1);
            }
        }
    </style>
</head>

<body class="is-theme-core">
    <!-- Google Tag Manager (noscript) -->
    {{-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MZR6B4P" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript> --}}
    <!-- End Google Tag Manager (noscript) -->

    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>

    <!-- Hero and nav -->
    <div class="hero is-cover is-relative is-fullheight is-default is-bold">
        <nav class="navbar navbar-wrapper navbar-fade navbar-light is-transparent">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item">
                        <!-- Logo Light -->
                        <img class="light-logo" src="{{ asset('foto/navbar.png') }}" alt="Logo Light" />
                        <!-- Logo Dark -->
                        <img class="dark-logo switcher-logo" src="{{ asset('foto/navbar.png') }}" alt="Logo Dark" />
                    </a>

                    <style>
                        /* Pastikan gambar logo tidak terdistorsi */
                        img.light-logo,
                        img.dark-logo {
                            max-width: 400px;
                            /* Menentukan lebar maksimal logo di desktop (dalam px) */
                            height: auto;
                            /* Menjaga rasio gambar */
                            object-fit: contain;
                            /* Menjaga proporsi gambar dalam batas kontainer */
                        }

                        /* Responsif untuk desktop */
                        @media (min-width: 820px) {

                            img.light-logo,
                            img.dark-logo {
                                max-width: 400px;
                                /* Ukuran logo untuk perangkat desktop */
                            }
                        }

                        /* Responsif untuk perangkat mobile */
                        @media (max-width: 768px) {

                            img.light-logo,
                            img.dark-logo {
                                max-width: 150px;
                                /* Ukuran logo lebih besar di perangkat mobile */
                            }
                        }
                    </style>






                    <!-- Responsive toggle -->
                    <div class="custom-burger" data-target="nav-menu">
                        <a class="responsive-btn" href="javascript:void(0);">
                            <span class="menu-toggle">
                                <span class="icon-box-toggle">
                                    <span class="rotate">
                                        <i class="icon-line-top"></i>
                                        <i class="icon-line-center"></i>
                                        <i class="icon-line-bottom"></i>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>


                <!-- Navbar menu -->
                <div id="nav-menu" class="navbar-menu">
                    <!-- Navbar Start -->
                    <div class="navbar-start"
                        style="display: flex; justify-content: space-between; flex-wrap: wrap; gap: 20px; padding: 0 20px;">
                        <!-- Navbar item -->
                        <a class="navbar-item is-slide" href="{{ route('user') }}">Beranda</a>
                        <a class="navbar-item is-slide" href="{{ route('tentang_kami.show') }}">Tentang Kami</a>
                        <a class="navbar-item is-slide" href="{{ route('informasi.show') }}">Informasi</a>
                        <a class="navbar-item is-slide" href="{{ route('mitra.show') }}">Mitra</a>
                        <a class="navbar-item is-slide" href="{{ route('loker.show') }}">Loker</a>
                        <a class="navbar-item is-slide" href="{{ route('alumni.show') }}">Alumni</a>
                        <a class="navbar-item is-slide" href="#kontak">Kontak</a>
                    </div>

                    <!-- Navbar end -->
                    <div class="navbar-end" style="margin-left: auto;">
                        <!-- Signup button -->
                        <div class="navbar-item">
                            <a id="signup-btn" href="startup-signup.html"
                                class="button button-signup btn-outlined is-bold btn-align light-btn rounded raised">
                                Sign up
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </nav>
        <!-- Hero Wallop Slider -->
        @include('newGuest.slide')
    </div>

    <!-- Clients -->
    {{-- @include('newGuest.client') --}}


    <!-- Services -->
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
                            @foreach ($informasis as $index => $informasi)
                                <div class="column is-2-desktop is-4-tablet is-6-mobile card-item"
                                    style="{{ $index >= 5 ? 'display: none;' : '' }}">
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

                        <!-- Tombol untuk menampilkan lebih banyak informasi -->
                        @if (count($informasis) > 5)
                            <div class="has-text-centered is-title-reveal pt-20 pb-20">
                                <!-- Ganti # dengan URL yang benar menuju informasi.show -->
                                <a href="{{ route('informasi.show') }}"
                                class="button button-cta btn-align primary-btn raised rounded" id="seeMoreButton">Lihat
                                Selengkapnya</a>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </section>

        <script>
            // Menangani tombol "Lihat Selengkapnya"
            document.getElementById('show-more').addEventListener('click', function(event) {
                event.preventDefault();

                // Menampilkan card tambahan
                let hiddenCards = document.querySelectorAll('.card-item[style="display: none;"]');

                hiddenCards.forEach(card => {
                    card.style.display = 'block'; // Tampilkan card
                });

                // Menyembunyikan tombol setelah menampilkan semua card
                this.style.display = 'none';
            });
        </script>

        <style>
            /* Gaya untuk Card */
            /* Menyusun kolom dengan 5 card sejajar secara konsisten */
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






    <!-- Feature highlight -->
    {{-- @include('newGuest.tentang_kami') --}}
    @yield('tentang_kami')




    <!-- Loker -->
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
                <!-- Grid for first 5 items -->
                <div class="grid-clients">
                    <div class="columns is-vcentered is-multiline">
                        @foreach ($lokers as $index => $loker)
                            <!-- Show only first 5 items initially -->
                            @if ($index < 5)
                                <div class="column is-one-fifth">
                                    <!-- Client -->
                                    <a class="client-link" href="{{ url('login') }}">
                                        <img class="client" src="{{ asset('storage/' . $loker->foto) }}"
                                            alt="mitra" />
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- "Lihat Selengkapnya" button if there are more than 5 items -->
            @if (count($lokers) > 5)
                <div class="has-text-centered is-title-reveal pt-40 pb-40">
                    <a href="{{ route('loker.show') }}"
                        class="button button-cta btn-align primary-btn raised rounded" id="seeMoreButton">Lihat
                        Selengkapnya</a>
                </div>
            @endif

            <!-- Show all the Lokers when "Lihat Selengkapnya" is clicked -->
            {{-- <div class="content-wrapper" id="allLokers" style="display: none;">
                <!-- Grid for remaining items -->
                <div class="grid-clients">
                    <div class="columns is-vcentered is-multiline">
                        @foreach ($lokers as $index => $loker)
                            <!-- Show remaining items (after the first 5) -->
                            @if ($index >= 5)
                                <div class="column is-one-fifth">
                                    <!-- Client -->
                                    <a class="client-link" href="{{ url('login') }}">
                                        <img class="client" src="{{ asset('storage/' . $loker->foto) }}"
                                            alt="mitra" />
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div> --}}
        </div>
    </section>

    <style>
        /* Ensure clients' images are centered */
        .client-link {
            display: inline-block;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* Smooth transition */
        }

        .client {
            display: block;
            max-width: 100%;
            height: auto;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        /* Hover Effect - Moves and scales the image */
        .client-link:hover .client {
            transform: scale(1.1);
            /* Scale the image by 10% */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            /* Add a subtle shadow when hovered */
        }

        /* Optional: Add space between images */
        .column {
            padding: 10px;
        }

        /* Style for the See More button */
        .button-cta {
            margin-top: 20px;
            font-size: 16px;
            padding: 12px 30px;
        }
    </style>

    <script>
        // JavaScript to handle the "Lihat Selengkapnya" click event
        document.getElementById('seeMoreButton').addEventListener('click', function() {
            // Scroll to the #loker section
            document.querySelector('#loker').scrollIntoView({
                behavior: 'smooth'
            });

            // Show all the loker images (those that were hidden before)
            document.getElementById('allLokers').style.display = 'block';

            // Hide the "Lihat Selengkapnya" button after it's clicked
            document.getElementById('seeMoreButton').style.display = 'none';
        });
    </script>


    <!-- Team section -->
    {{-- @include('newGuest.team') --}}


    <!-- Features section -->
    {{-- @include('newGuest.feature') --}}


    <!-- Support cards section -->
    {{-- @include('newGuest.support-card') --}}


    <!-- Static alumni -->
    <section class="about-us section" id="alumni">
        <div class="container">
            <!-- Title -->
            <div class="section-title-wrapper">
                <div class="bg-number">7</div>
                <h2 class="title section-title has-text-centered dark-text">
                    ALUMNI
                </h2>
                <div class="subtitle section-subtitle has-text-centered is-tablet-padded">
                    INI ADALAH ALUMNI DARI SMK MUHAMMADIYAH 1 GENTENG
                </div>
            </div>

            <div class="content-wrapper">
                <div class="columns is-vcentered">
                    <div class="column"></div>
                    <div class="column is-10">
                        <!-- Alumni Section - First 3 Alumni (Visible initially) -->
                        <div class="columns is-vcentered is-multiline is-centered" id="alumniGrid">
                            @foreach ($alumnis as $index => $alumni)
                                <!-- Show only first 3 alumni initially -->
                                @if ($index < 3)
                                    <div class="column is-12-mobile is-6-tablet is-4-desktop">
                                        <!-- Single Alumni Item -->
                                        <div class="alumni-card">
                                            <div class="card-image">
                                                <img class="alumni-photo"
                                                    src="{{ asset('storage/' . $alumni->foto) }}" alt="Foto Alumni">
                                            </div>
                                            <div class="card-content">
                                                <h3 class="alumni-name">{{ $alumni->nama }}</h3>
                                                <p class="alumni-major">Jurusan: {{ $alumni->jurusan }}</p>
                                                <p class="alumni-work">Working at: {{ $alumni->bekerja }}</p>
                                            </div>
                                        </div>
                                        <!-- End Single Alumni Item -->
                                    </div>
                                @endif
                            @endforeach
                        </div>

                        <!-- "Lihat Selengkapnya" button if there are more than 3 alumni -->
                        @if (count($alumnis) > 3)
                            <div class="has-text-centered is-title-reveal pt-40 pb-40">
                                <a href="{{ route('alumni.show') }}"
                                    class="button button-cta btn-align primary-btn raised rounded"
                                    id="seeMoreAlumniButton">Lihat Selengkapnya</a>
                            </div>
                        @endif
                    </div>
                    <div class="column"></div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Style for Alumni Section */
        .alumni-card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            background-color: #fff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            /* Ensure all cards have equal height */
        }

        .alumni-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .alumni-photo {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-bottom: 20px;
            object-fit: cover;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .alumni-name {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .alumni-major,
        .alumni-work {
            font-size: 1rem;
            color: #555;
            margin: 10px 0;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .alumni-name {
                font-size: 1.2rem;
            }

            .alumni-major,
            .alumni-work {
                font-size: 0.9rem;
            }
        }

        /* Button Style */
        .button-cta {
            margin-top: 20px;
            font-size: 16px;
            padding: 12px 30px;
        }

        /* Default grid layout for first 3 alumni */
        .columns.is-centered {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .column.is-12-mobile.is-6-tablet.is-4-desktop {
            display: flex;
            justify-content: center;
            padding: 10px;
        }

        /* Ensuring all cards have the same size */
        .alumni-card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 350px;
            /* Set a fixed height for the cards */
        }

        /* Adjust the width of cards for larger screens */
        @media (min-width: 1024px) {
            .column.is-12-mobile.is-6-tablet.is-4-desktop {
                display: flex;
                justify-content: center;
                flex: 0 0 30%;
                /* 3 items per row */
                padding: 10px;
            }
        }
    </style>

    <script>
        // JavaScript to handle the "Lihat Selengkapnya" click event
        document.getElementById('seeMoreAlumniButton').addEventListener('click', function() {
            // Scroll to the #alumni section
            document.querySelector('#alumni').scrollIntoView({
                behavior: 'smooth'
            });

            // Show all the alumni items (those that were hidden before)
            document.getElementById('allAlumni').style.display = 'flex';

            // Hide the "Lihat Selengkapnya" button after it's clicked
            document.getElementById('seeMoreAlumniButton').style.display = 'none';
        });
    </script>


    <!-- Clients mitra -->
    <section class="about-us section" id="mitra">


        <div class="container">
            <h2 class="title section-title has-text-centered dark-text">
                MITRA
            </h2>
            <section class="customer-logos slider">
                @foreach ($mitras as $mitra)
                    <div class="slide"><img src="storage/{{ $mitra->foto }}"></div>
                @endforeach
            </section>
        </div>
    </section>

    <style>
        h2 {
            text-align: center;
            padding: 20px;
        }

        /* Slider */

        .slick-slide {
            margin: 0px 20px;
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-slider {
            position: relative;
            display: block;
            box-sizing: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-touch-callout: none;
            -khtml-user-select: none;
            -ms-touch-action: pan-y;
            touch-action: pan-y;
            -webkit-tap-highlight-color: transparent;
        }

        .slick-list {
            position: relative;
            display: block;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }

        .slick-list:focus {
            outline: none;
        }

        .slick-list.dragging {
            cursor: pointer;
            cursor: hand;
        }

        .slick-slider .slick-track,
        .slick-slider .slick-list {
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .slick-track {
            position: relative;
            top: 0;
            left: 0;
            display: block;
        }

        .slick-track:before,
        .slick-track:after {
            display: table;
            content: '';
        }

        .slick-track:after {
            clear: both;
        }

        .slick-loading .slick-track {
            visibility: hidden;
        }

        .slick-slide {
            display: none;
            float: left;
            height: 100%;
            min-height: 1px;
        }

        [dir='rtl'] .slick-slide {
            float: right;
        }

        .slick-slide img {
            display: block;
        }

        .slick-slide.slick-loading img {
            display: none;
        }

        .slick-slide.dragging img {
            pointer-events: none;
        }

        .slick-initialized .slick-slide {
            display: block;
        }

        .slick-loading .slick-slide {
            visibility: hidden;
        }

        .slick-vertical .slick-slide {
            display: block;
            height: auto;
            border: 1px solid transparent;
        }

        .slick-arrow.slick-hidden {
            display: none;
        }
    </style>

    <script>
        $(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>


    <!--Kontak-->
    @include('newGuest.kontak')




    <div id="whatsapp-button" style="position: fixed; bottom: 30px; right: 30px; z-index: 9999;">
        @foreach ($kontaks as $kontak)
            <a href="https://wa.me/{{ $kontak->whatsapp }}" target="_blank"
                style="background-color: #25d366; color: white; padding: 10px 20px; border-radius: 50px; display: flex; align-items: center; justify-content: center; text-decoration: none;">
                <i class="fa fa-whatsapp" style="margin-right: 10px;"></i> Hubungi Kami
            </a>
        @endforeach
    </div>
    <!-- Menambahkan CDN Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- Script untuk WhatsApp Popup -->
    <script id="nta-js-popup-js-extra">
        var njt_wa = {
            "gdprStatus": "",
            "accounts": [{
                "accountId": 274,
                "accountName": "Customer Service",
                "avatar": "",
                "title": "Konsultasi & Pemesanan",
                "predefinedText": "Halo, saya berminat untuk sewa mobil di Army Trans\r\nMohon info lebih lanjut",
                "willBeBackText": "I will be back in [njwa_time_work]",
                "dayOffsText": "I will be back soon",
                "isAlwaysAvailable": "ON",
                "daysOfWeekWorking": {
                    "sunday": {
                        "isWorkingOnDay": "OFF",
                        "workHours": [{
                            "startTime": "08:00",
                            "endTime": "17:30"
                        }]
                    },
                    "monday": {
                        "isWorkingOnDay": "OFF",
                        "workHours": [{
                            "startTime": "08:00",
                            "endTime": "17:30"
                        }]
                    },
                    "tuesday": {
                        "isWorkingOnDay": "OFF",
                        "workHours": [{
                            "startTime": "08:00",
                            "endTime": "17:30"
                        }]
                    },
                    "wednesday": {
                        "isWorkingOnDay": "OFF",
                        "workHours": [{
                            "startTime": "08:00",
                            "endTime": "17:30"
                        }]
                    },
                    "thursday": {
                        "isWorkingOnDay": "OFF",
                        "workHours": [{
                            "startTime": "08:00",
                            "endTime": "17:30"
                        }]
                    },
                    "friday": {
                        "isWorkingOnDay": "OFF",
                        "workHours": [{
                            "startTime": "08:00",
                            "endTime": "17:30"
                        }]
                    },
                    "saturday": {
                        "isWorkingOnDay": "OFF",
                        "workHours": [{
                            "startTime": "08:00",
                            "endTime": "17:30"
                        }]
                    }
                }
            }],
            "options": {
                "display": {
                    "displayCondition": "showAllPage",
                    "showOnDesktop": "ON",
                    "showOnMobile": "ON",
                    "btnLabel": "Mau sewa mobil? Hubungi Kami",
                    "btnPosition": "right"
                },
                "styles": {
                    "backgroundColor": "#2db742",
                    "textColor": "#fff"
                }
            }
        };
    </script>


    <!-- Google maps api call with api key -->
    {{-- <script src="https://maps.google.com/maps/api/js?key=AIzaSyAGLO_M5VT7BsVdjMjciKoH1fFJWWdhDPU"></script> --}}
    <script src="{{ asset('newTemplate/assets/js/app.js') }}"></script>
    <script src="{{ asset('newTemplate/assets/js/core.js') }}"></script>

</body>

</html>
