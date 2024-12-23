<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sistem informasi BKK SMKS Muhammadiyah 1 Genteng</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('TemplateAdmin/images/logo1.webp') }}">
    <link rel="stylesheet" href="{{ asset('TemplateAdmin/vendor/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('TemplateAdmin/vendor/owl-carousel/css/owl.theme.default.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('TemplateAdmin/icons/font-awesome-old/css/font-awesome.min.css') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="{{ asset('TemplateAdmin/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    @stack('style')

    <link href="{{ asset('TemplateAdmin/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="w-32 h-32 rounded-full" src="{{ asset('TemplateAdmin/images/li.png') }}" alt="Nama Brand"
                    style="width: 70px; height: 90px; border-radius: 40%;">
                <img class="logo-compact" src="{{ asset('TemplateAdmin/images/logo-text.png') }}" alt="">
                <img class="brand-title" src="{{ asset('TemplateAdmin/images/lo.png') }}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search"
                                            aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong>
                                                        Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as
                                                        unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong>
                                                        Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{ Route('guest') }}" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="{{ route('logout') }}" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <!-- Tambahkan Label -->
                    <li class="nav-label first">Dashboard</li>
                    <li class="{{ Route::is('dashboard') ? 'mm-active' : '' }}">
                        <a href="{{ route('dashboard') }}" aria-expanded="false">
                            <i class="fa fa-home"></i> <!-- Ikon Dashboard -->
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-label first">Menu Baru</li>
                    <li class="{{ Route::is('menu.index', 'menu.create', 'menu.edit') ? 'mm-active' : '' }}">
                        <a href="{{ route('menu.index') }}" aria-expanded="false">
                            <i class="fas fa-bars"></i> <!-- Ikon Menu Utama -->
                            <span class="nav-text">Menu Utama</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-list"></i>
                            <span class="nav-text">Menu</span>
                        </a>
                        <ul aria-expanded="false">
                            @foreach ($menus as $menu)
                                <li>
                                    <a href="{{ route('multiple.index', $menu->id) }}">{{ $menu->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    {{-- <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-image"></i>
                            <span class="nav-text">Image</span>
                        </a>
                        <ul aria-expanded="false">
                            @foreach ($menus as $menu)
                                <li>
                                    <a href="{{ route('image.index', $menu->id) }}">{{ $menu->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li> --}}

                    <li class="nav-label first">Menu</li>
                    <li class="{{ Route::is('admin.slide.index') ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.slide.index') }}" aria-expanded="false">
                            <i class="fa fa-image"></i> <!-- Ikon Gambar -->
                            <span class="nav-text">Foto Slide</span>
                        </a>
                    </li>

                    <li class="{{ Route::is('tentang_kami.create', 'tentang_kami.edit') ? 'mm-active' : '' }}">
                        <a href="{{ route('tentang_kami.navigate') }}" aria-expanded="false">
                            <i class="fa fa-info-circle"></i> <!-- Ikon untuk Tentang Kami -->
                            <span class="nav-text">Tentang Kami</span>
                        </a>
                    </li>

                    <li class="{{ Route::is('informasi') ? 'mm-active' : '' }}">
                        <a href="{{ route('informasi') }}" aria-expanded="false">
                            <i class="fa fa-lightbulb"></i>
                            <span class="nav-text">Informasi</span>
                        </a>
                    </li>

                    <li class="{{ Route::is('vimi.create', 'vimi.edit') ? 'mm-active' : '' }}">
                        <a href="{{ route('vimi.navigate') }}" aria-expanded="false">
                            <i class="fa fa-bullseye"></i> <!-- Ikon untuk Visi Misi -->
                            <span class="nav-text">Visi Misi</span>
                        </a>
                    </li>
                    <li class="{{ Route::is('mitra.index') ? 'mm-active' : '' }}">
                        <a href="{{ route('mitra.index') }}" aria-expanded="false">
                            <i class="fas fa-handshake"></i> <!-- Ikon Menu Utama -->
                            <span class="nav-text">Mitra</span>
                        </a>
                    </li>

                    <li class="{{ Route::is('lokers.index') ? 'mm-active' : '' }}">
                        <a href="{{ route('lokers.index') }}" aria-expanded="false">
                            <i class="fas fa-briefcase"></i> <!-- Ikon Menu Utama -->
                            <span class="nav-text">Loker</span>
                        </a>
                    </li>

                    <li class="{{ Route::is('alumni.index') ? 'mm-active' : '' }}">
                        <a href="{{ route('alumni.index') }}" aria-expanded="false">
                            <i class="fa fa-graduation-cap"></i>
                            <span class="nav-text">Alumni</span>
                        </a>
                    </li>
                    <li class="{{ Route::is('kontak.create', 'kontak.edit') ? 'mm-active' : '' }}">
                        <a href="{{ route('kontak.navigate') }}" aria-expanded="false">
                            <i class="fa fa-phone"></i>
                            <span class="nav-text">Kontak</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            @yield('content')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Hummatech Sempu</a></p>
                {{-- <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p> --}}
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('TemplateAdmin/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('TemplateAdmin/js/quixnav-init.js') }}"></script>
    <script src="{{ asset('TemplateAdmin/js/custom.min.js') }}"></script>


    <!--  flot-chart js -->
    <script src="{{ asset('TemplateAdmin/vendor/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('TemplateAdmin/vendor/flot/jquery.flot.resize.js') }}"></script>

    <!-- Owl Carousel -->
    <script src="{{ asset('TemplateAdmin/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

    <!-- Counter Up -->
    <script src="{{ asset('TemplateAdmin/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('TemplateAdmin/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('TemplateAdmin/vendor/jquery.counterup/jquery.counterup.min.js') }}"></script>
    @stack('script')
</body>

</html>
