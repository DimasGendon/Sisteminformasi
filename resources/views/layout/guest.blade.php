<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Sistem informasi BKK SMKS Muhammadiyah 1 Genteng</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('TemplateAdmin/images/ligo.png') }}">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('TemplateGuest/css/bootstrap.min.css') }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('TemplateGuest/css/nice-select.css') }}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('TemplateGuest/css/font-awesome.min.css') }}">
    <!-- icofont CSS -->
    <link rel="stylesheet" href="{{ asset('TemplateGuest/css/icofont.css') }}">
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('TemplateGuest/css/slicknav.min.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('TemplateGuest/css/owl-carousel.css') }}">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="{{ asset('TemplateGuest/css/datepicker.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('TemplateGuest/css/animate.min.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('TemplateGuest/css/magnific-popup.css') }}">

    <!-- Medipro CSS -->
    <link rel="stylesheet" href="{{ asset('TemplateGuest/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('TemplateGuest/style.css') }}">
    <link rel="stylesheet" href="{{ asset('TemplateGuest/css/responsive.css') }}">

</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>

            <div class="indicator">
                <svg width="16px" height="12px">
                    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                </svg>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Get Pro Button -->

    <!-- Header Area -->
    <header class="header">
        <div class="header-inner">
            <div class="container">
                <div class="inner">
                    <div class="row align-items-center">
                        <!-- Menambahkan align-items-center untuk vertikal alignment -->
                        <div class="col-lg-3 col-md-3 col-12">
                            <!-- Start Logo -->
                            <div class="logo">
                                <a href="index.html"><img src="{{ asset('foto/bkk1.png') }}" alt="Logo"></a>
                            </div>
                            <!-- End Logo -->
                        </div>
                        <div class="col-lg-9 col-md-9 col-12">
                            <!-- Main Menu -->
                            <div class="main-menu">
                                <nav class="navigation">
                                    <ul class="nav menu d-flex justify-content-center">
                                        <!-- Menambahkan d-flex justify-content-center untuk perataan menu -->
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#tentang_kami">Tentang Kami</a></li>
                                        <li><a href="#informasi">Informasi</a></li>
                                        <li><a href="#loker">Loker</a></li>
                                        <li><a href="#">Mitra</a></li>
                                        <li><a href="#alumni">Alumni</a></li>
                                        <li><a href="#kontak">Kontak</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!--/ End Main Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <style>
    /* Navbar Styling */
    .header {
        padding: 10px 0; /* Padding navbar untuk mengurangi tinggi dan memberi jarak di atas */
    }
    
    /* Mengatur header-inner agar tidak terlalu tinggi */
    .header-inner {
        padding: 0;
    }
    
    /* Mengatur logo agar lebih kompak */
    .logo img {
        max-height: 100px;  /* Ukuran logo yang lebih kecil agar tidak terlalu besar */
    }
    
    /* Menyesuaikan posisi navbar */
    .main-menu {
        padding: 0;
        margin: 0;
    }
    
    /* Mengatur menu utama */
    .nav.menu {
        display: flex;
        justify-content: space-around; /* Membuat jarak antar menu */
        align-items: center;
    }
    
    /* Styling menu items */
    .nav.menu li {
        list-style: none;
    }
    
    .nav.menu li a {
        color: #151414; /* Warna teks */
        font-size: 16px;
        font-weight: 600;
        padding: 10px 15px;
        text-decoration: none; /* Hapus garis bawah */
        transition: all 0.3s ease;
    }
    
    /* Efek hover pada link */
    .nav.menu li a:hover {
        background-color: #007bff; /* Warna latar belakang saat hover */
        border-radius: 5px; /* Menambahkan sudut melengkung */
    }
    
    /* Responsif: navbar tetap rapi pada layar kecil */
    @media (max-width: 768px) {
        .header {
            padding: 5px 0; /* Padding lebih kecil pada layar kecil */
        }
    
        .logo img {
            max-height: 40px;  /* Ukuran logo lebih kecil di perangkat mobile */
        }
    
        .nav.menu {
            flex-direction: column; /* Mengubah menu menjadi vertikal pada perangkat kecil */
            align-items: center;
        }
    
        .nav.menu li a {
            padding: 10px;  /* Padding lebih besar untuk kemudahan klik */
            font-size: 18px;
        }
    }
    </style>
    
    <!-- End Header Area -->

  

    <!-- Slider Area -->
    @include('guest.dashboardslide')
   
    <!--/ End Slider Area -->

    <!-- Start Feautes -->
    @include('guest.feature')
    <!--/ End Feautes -->

    <!-- Start Fun-facts -->
    @include('guest.fun')
    <!--/ End Fun-facts -->

    <!-- Start Why choose -->
    @include('guest.why')
    <!--/ End Why choose -->

    <!-- Start Call to action -->
    @include('guest.call')
    <!--/ End Call to action -->

    <!-- Start portfolio -->
    @include('guest.loker')
    <!--/ End portfolio -->
    <!-- Start portfolio -->
    @include('guest.tentang_kami')
    <!--/ End portfolio -->

    <!-- Start service -->
    @include('guest.service')
    <!--/ End service -->

    <!-- Pricing Table -->
    @include('guest.informasi')
    <!--/ End Pricing Table -->



    <!-- Start Blog Area -->
    @include('guest.alumni')
    <!-- End Blog Area -->

    <!-- Start clients -->
    @include('guest.mitra')
    <!--/Ens clients -->

    <!-- Start Appointment -->
    @include('guest.kontak')
    <!-- End Appointment -->

    <!-- Start Newsletter Area -->
    @include('guest.newsletter')
    <!-- /End Newsletter Area -->

    <!-- Footer Area -->
    @include('guest.footer')
    <!--/ End Footer Area -->

    <!-- jquery Min JS -->
    <script src="{{ asset('TemplateGuest/js/jquery.min.js') }}"></script>
    <!-- jquery Migrate JS -->
    <script src="{{ asset('TemplateGuest/js/jquery-migrate-3.0.0.js') }}"></script>
    <!-- jquery Ui JS -->
    <script src="{{ asset('TemplateGuest/js/jquery-ui.min.js') }}"></script>
    <!-- Easing JS -->
    <script src="{{ asset('TemplateGuest/js/easing.js') }}"></script>
    <!-- Color JS -->
    <script src="{{ asset('TemplateGuest/js/colors.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('TemplateGuest/js/popper.min.js') }}"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="{{ asset('TemplateGuest/js/bootstrap-datepicker.js') }}"></script>
    <!-- Jquery Nav JS -->
    <script src="{{ asset('TemplateGuest/js/jquery.nav.js') }}"></script>
    <!-- Slicknav JS -->
    <script src="{{ asset('TemplateGuest/js/slicknav.min.js') }}"></script>
    <!-- ScrollUp JS -->
    <script src="{{ asset('TemplateGuest/js/jquery.scrollUp.min.js') }}"></script>
    <!-- Niceselect JS -->
    <script src="{{ asset('TemplateGuest/js/niceselect.js') }}"></script>
    <!-- Tilt Jquery JS -->
    <script src="{{ asset('TemplateGuest/js/tilt.jquery.min.js') }}"></script>
    <!-- Owl Carousel JS -->
    {{-- <script src="{{ asset('TemplateGuest/js/owl-carousel.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- counterup JS -->
    <script src="{{ asset('TemplateGuest/js/jquery.counterup.min.js') }}"></script>
    <!-- Steller JS -->
    <script src="{{ asset('TemplateGuest/js/steller.js') }}"></script>
    <!-- Wow JS -->
    <script src="{{ asset('TemplateGuest/js/wow.min.js') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('TemplateGuest/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter Up CDN JS -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('TemplateGuest/js/bootstrap.min.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('TemplateGuest/js/main.js') }}"></script>

</body>

</html>
