<section class="about-us section" id="kontak">
    <footer id="dark-footer" class="footer footer-dark" style="position: relative;">
        <div class="container">
            <div class="columns">
                <!-- Kolom Kontak -->
                <div class="column is-4">
                    <div class="fl-col fl-node-5ent3qyarcgk fl-col-bg-color fl-col-small" data-node="5ent3qyarcgk">
                        <div class="fl-col-content fl-node-content">
                            <div class="fl-module fl-module-heading fl-node-snjz2p5m4cye" data-node="snjz2p5m4cye">
                                <div class="fl-module-content fl-node-content">
                                    <h4 class="fl-heading" style="font-size: 30px; font-weight: bold;">
                                        <span class="fl-heading-text">KONTAK KAMI</span>
                                    </h4>
                                </div>
                            </div>
                            <div class="fl-module fl-module-icon fl-node-icons" data-node="icons">
                                <div class="fl-module-content fl-node-content">
                                    <div class="fl-icon-wrap">
                                        <div class="contact-icons">
                                            <!-- Alamat -->
                                            <div class="contact-item">
                                                <span class="fl-icon">
                                                    <a href="https://maps.app.goo.gl/Gdmh13GqMeQwfPWp7" target="_blank"
                                                        tabindex="-1" aria-hidden="true" rel="noopener">
                                                        <i class="fas fa-map-marked-alt" aria-hidden="true"></i>
                                                    </a>
                                                </span>
                                                <div class="fl-icon-text">
                                                    <a href="https://maps.app.goo.gl/Gdmh13GqMeQwfPWp7" target="_blank"
                                                        class="fl-icon-text-link fl-icon-text-wrap" rel="noopener">
                                                        <p class="address-text">Jl. KH Imam Bahri No.10, Dusun Krajan,
                                                            Genteng Wetan, Kec. Genteng, Kabupaten Banyuwangi, Jawa
                                                            Timur 68465</p>
                                                    </a>
                                                </div>
                                            </div>

                                            <!-- Telepon -->
                                            <div class="contact-item">
                                                <span class="fl-icon">
                                                    <a href="tel:082230101978" target="_blank" tabindex="-1"
                                                        aria-hidden="true" rel="noopener">
                                                        <i class="fas fa-phone" aria-hidden="true"></i>
                                                    </a>
                                                </span>
                                                <div class="fl-icon-text">
                                                    <a href="tel:082230101978" target="_blank"
                                                        class="fl-icon-text-link fl-icon-text-wrap" rel="noopener">
                                                        <p>0822-3010-1978</p>
                                                    </a>
                                                </div>
                                            </div>

                                            <!-- Email -->
                                            <div class="contact-item">
                                                <span class="fl-icon">
                                                    <a href="mailto:smkmuhi.genteng1968@gmail.com" target="_blank"
                                                        tabindex="-1" aria-hidden="true" rel="noopener">
                                                        <i class="far fa-envelope" aria-hidden="true"></i>
                                                    </a>
                                                </span>
                                                <div class="fl-icon-text">
                                                    <a href="mailto:smkmuhi.genteng1968@gmail.com" target="_blank"
                                                        class="fl-icon-text-link fl-icon-text-wrap" rel="noopener">
                                                        <p>smkmuhi.genteng1968@gmail.com</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <style>
                                /* Memperbesar ukuran ikon */
                                .fl-icon i {
                                    font-size: 40px;
                                    /* Ukuran ikon yang lebih besar */
                                }

                                /* Opsional: Jika ingin spesifik untuk ikon tertentu */
                                .fl-icon .fa-map-marked-alt {
                                    font-size: 25px;
                                    /* Ukuran lebih besar untuk ikon peta */
                                }

                                .fl-icon .fa-phone {
                                    font-size: 25px;
                                    /* Ukuran lebih besar untuk ikon telepon */
                                }

                                .fl-icon .fa-envelope {
                                    font-size: 25px;
                                    /* Ukuran lebih besar untuk ikon email */
                                }
                            </style>

                        </div>
                    </div>
                </div>

                <!-- Kolom Logo dan Sosial Media -->
                <div class="column is-2">
                    <div class="footer-column">
                        <div class="footer-logo">
                            <img class="switcher-logo-w" src="{{ asset('foto/bkk1.png') }}" alt=""
                                style="height: 80px;" />
                        </div>

                        <div class="footer-header">
                            <nav class="level is-mobile">
                                <div class="level-left level-social">
                                    <form class="form" action="#">
                                        <div class="row social-icons">
                                            @foreach ($kontaks as $kontak)
                                                <div class="col-lg-4 col-md-4 col-12">
                                                    <div class="form-group">
                                                        <label for="WhatsApp"></label>
                                                        <a href="https://wa.me/{{ $kontak->whatsapp }}" target="_blank"
                                                            class="form-control d-flex align-items-center">
                                                            <i class="fab fa-whatsapp fa-2x mr-2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-12">
                                                    <div class="form-group">
                                                        <label for="Instagram"></label>
                                                        <a href="https://instagram.com/{{ $kontak->instagram }}"
                                                            target="_blank"
                                                            class="form-control d-flex align-items-center">
                                                            <i class="fab fa-instagram fa-2x mr-2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-12">
                                                    <div class="form-group">
                                                        <label for="Facebook"></label>
                                                        <a href="https://facebook.com/{{ $kontak->facebook }}"
                                                            target="_blank"
                                                            class="form-control d-flex align-items-center">
                                                            <i class="fab fa-facebook fa-2x mr-2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </form>
                                </div>
                            </nav>
                        </div>


                    </div>
                </div>

                <!-- Kolom Navigasi Link -->
                <div class="column is-2.3" style="color: white;">
                    <h4 class="fl-heading" style="font-size: 30px; font-weight: bold;">
                        <span class="fl-heading-text">NAVIGASI LINK</span>
                    </h4>
                    <ul style="list-style-type: none; padding: 0;">
                        <li>
                            <a href="{{ route('tentang_kami.show') }}" class="navigasi-item">Tentang Kami</a>
                        </li>
                        <li>
                            <a href="{{ route('informasi.show') }}" class="navigasi-item">Informasi</a>
                        </li>
                        <li>
                            <a href="{{ route('alumni.show') }}" class="navigasi-item">Alumni</a>
                        </li>
                        <li>
                            <a href="{{ route('loker.show') }}" class="navigasi-item">Loker</a>
                        </li>
                        <li>
                            <a href="{{ route('mitra.show') }}" class="navigasi-item">Mitra</a>
                        </li>
                    </ul>
                </div>

                <style>
                    .navigasi-item {
                        color: white;
                        transition: color 0.3s ease;
                    }

                    .navigasi-item:hover,
                    .navigasi-item:focus {
                        color: black;
                    }

                    .navigasi-item:active {
                        color: gray;
                    }
                </style>




                <!-- Kolom Peta -->
                <div class="column">
                    <div class="footer-column">
                        <div class="fl-map">
                            <iframe
                                src="https://www.google.com/maps/embed/v1/place?q=SMKS+Muhammadiyah+1+Genteng&amp;key=AIzaSyD09zQ9PNDNNy9TadMuzRV_UsPUoWKntt8"
                                aria-hidden="true" width="300" height="225"></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <div style="background-color: #444f60; padding: 10px;" class="copyright">
        <div class="fl-row-content-wrap">
            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                <div class="fl-col-group fl-node-o013hl2wzpv5" data-node="o013hl2wzpv5">
                    <div class="fl-col fl-node-9q7wsfmjkt4x fl-col-bg-color" data-node="9q7wsfmjkt4x">
                        <div class="fl-col-content fl-node-content">
                            <div class="fl-module fl-module-rich-text fl-node-eaq46pgdvums" data-node="eaq46pgdvums">
                                <div class="fl-module-content fl-node-content">
                                    <div class="fl-rich-text">
                                        <p style="text-align: center; color: white;">
                                            Designed by BKK SMKS Muhammadiyah 1 Genteng
                                        </p>
                                        <!-- Divider line -->
                                        <hr style="border: 1px solid white; width: 50%; margin: 10px auto;">
                                        <p style="text-align: center; font-size: 10px; opacity: 0.4; color: white;">
                                            Copyright by BKK SMKS Muhammadiyah 1 Genteng
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </div>
    

    <style>
        .copyright {
            width: 93.1%;
            /* Mengatur lebar footer agar penuh */
            padding-top: 6px;
            padding-bottom: 3px;
        }

        /* Memperbesar ukuran ikon */
        .fl-icon i {
            font-size: 30px;
            /* Ukuran ikon yang lebih besar */
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            /* Spacing the elements to the far left and far right */
            align-items: center;
            /* Aligns text vertically to the center */
            width: 100%;
            /* Ensures the container spans full width */
        }

        .footer-text-left {
            text-align: left;
            /* Align text to the left */
        }

        .footer-text-right {
            text-align: right;
            /* Align text to the right */
        }
    </style>

</section>

<style>
    .navigasi-link {
        font-size: 24px;
    }

    /* Memperbesar ukuran font untuk judul 'Kontak Kami' */
    .fl-heading-text {
        font-size: 20px;
        /* Sesuaikan ukuran font sesuai kebutuhan */
        font-weight: bold;
        /* Membuat teks menjadi lebih tebal */
    }

    /* Gaya untuk ikon kontak */
    .contact-icons {
        display: flex;
        /* Menata item kontak secara horizontal */
        flex-direction: column;
        /* Menata kontak dalam kolom */
        align-items: flex-start;
        /* Menempatkan ikon di kiri dan teks di sebelah kanan */
    }

    .contact-item {
        display: flex;
        /* Menggunakan flex untuk menata ikon dan teks secara horizontal */
        align-items: center;
        /* Menyelaraskan ikon dan teks secara vertikal */
        margin-bottom: 15px;
        /* Memberikan jarak antar item */
    }

    .contact-item i {
        font-size: 24px;
        /* Ukuran ikon */
        color: white;
        margin-right: 10px;
        /* Memberikan jarak antara ikon dan teks */
    }

    .contact-item a:hover i {
        color: #ff6347;
        /* Warna ikon saat hover */
    }

    .contact-item p {
        color: white;
        font-size: 14px;
        margin: 0;
        /* Menghilangkan margin default */
    }

    /* Gaya untuk bagian teks kontak */
    .fl-icon-text {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        /* Memastikan teks berada di sebelah kanan ikon */
    }

    /* CSS untuk posisi copyright */
    .footer {
        position: relative;
        padding-bottom: 40px;
        /* Memberikan sedikit ruang agar teks tidak terlalu rapat dengan bagian bawah */
    }

    .copyright {
        position: absolute;
        bottom: 10px;
        /* Menempatkan teks di bagian bawah */
        left: 50%;
        /* Menempatkan di tengah secara horizontal */
        transform: translateX(-50%);
        /* Menggeser teks kembali agar benar-benar terpusat */
        color: white;
        font-size: 15px;
    }

    /* Gaya untuk ikon kontak */
    .contact-icons {
        display: flex;
        flex-direction: column;
        /* Menata ikon secara vertikal */
        align-items: flex-start;
        /* Menempatkan ikon di sebelah kiri */
    }

    .contact-item {
        margin-bottom: 15px;
        /* Memberikan jarak antara kontak */
    }

    .contact-item i {
        font-size: 15px;
        /* Ukuran ikon */
        color: white;
    }

    .contact-item a:hover i {
        color: #000000;
        /* Warna ikon saat hover */
    }

    .contact-item p {
        color: white;
        font-size: 14px;
        margin: 5px 0 0;
    }

    /* Gaya untuk ikon media sosial */
    .social-icons {
        display: flex;
        /* Menggunakan Flexbox untuk penataan */
        justify-content: space-between;
        /* Membuat ruang antara elemen ikon */
        align-items: center;
        /* Memastikan ikon sejajar secara vertikal */
    }

    .social-icons a {
        margin: 0 10px;
        /* Memberikan jarak antar ikon */
    }

    .social-icons a i {
        color: white !important;
    }

    .social-icons a:hover i {
        color: #ff6347;
    }
</style>
