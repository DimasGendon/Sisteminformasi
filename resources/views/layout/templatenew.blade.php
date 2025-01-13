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
            background-color: #f4f5f7;
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

            div {
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
                        img.light-logo, img.dark-logo {
                            max-width: 100%;  /* Menyesuaikan lebar gambar dengan kontainer */
                            height: auto;     /* Menjaga proporsi gambar */
                            object-fit: contain; /* Menjaga proporsi gambar dalam batas kontainer */
                        }
                
                        /* Untuk desktop */
                        img.light-logo, img.dark-logo {
                            max-width: 150px;  /* Menentukan lebar maksimal logo */
                            height: auto;      /* Menjaga rasio gambar */
                        }
                
                        /* Untuk perangkat mobile */
                        @media (max-width: 768px) {
                            img.light-logo, img.dark-logo {
                                max-width: 120px; /* Ukuran logo lebih kecil di perangkat mobile */
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
                        <a class="navbar-item is-slide" href="{{ route('user') }}">Home</a>
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

    @yield('tentang_kami')

    @yield('informasi')

    @yield('loker')

    @yield('alumni')

    @yield('mitra')

    @include('newGuest.kontak')

 

    <!-- Tombol WhatsApp yang muncul di layar -->
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
