<!doctype html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Bulkit :: Home</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />

    <!-- Google Tag Manager -->
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
                <!-- Brand -->
                <div class="navbar-brand">
                    <a class="navbar-item" href="/">
                        <img class="light-logo" src="assets/img/logos/bulkit-white.svg" alt="" />
                        <img class="dark-logo switcher-logo" src="assets/img/logos/logo/bulkit-core.svg"
                            alt="" />
                    </a>

                    <!-- Sidebar Trigger -->
                    <a id="navigation-trigger" class="navbar-item hamburger-btn" href="javascript:void(0);">
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
                    <!-- /Responsive toggle -->
                </div>

                <!-- Navbar menu -->
                <div id="nav-menu" class="navbar-menu">
                    <!-- Navbar Start -->
                    <div class="navbar-start">
                        <!-- Navbar item -->
                        <a class="navbar-item is-slide" href="startup-product.html">
                            Product
                        </a>
                        <!-- Navbar item -->
                        <a class="navbar-item is-slide" href="startup-about.html"> About </a>
                        <!-- Navbar item -->
                        <a class="navbar-item is-slide" href="startup-login.html"> Login </a>
                    </div>

                    <!-- Navbar end -->
                    <div class="navbar-end">
                        <!-- Signup button -->
                        <div class="navbar-item">
                            <a id="#signup-btn" href="startup-signup.html"
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
    @include('newGuest.client')
    
    
    <!-- Services -->
    @include('newGuest.informasi')
    
    
    <!-- Feature highlight -->
    @include('newGuest.tentang_kami')
    
    
    <!-- Mockup section -->
    @include('newGuest.mockup')
    
    
    <!-- Team section -->
    @include('newGuest.team')
    
    
    <!-- Features section -->
    @include('newGuest.feature')
    
    
    <!-- Support cards section -->
    @include('newGuest.support-card')
    
    
    <!-- Static Testimonials -->
    @include('newGuest.static')
    
    
    <!-- Clients grid -->
    @include('newGuest.client-grid')
    
    
    <!-- Dark footer -->
    @include('newGuest.dark-footer')
    <!-- /Dark footer -->
    
    <!-- Side navigation -->
    @include('newGuest.navigation')
    <!-- /Side navigation -->
    <!-- Back To Top Button -->
    {{-- <div id="backtotop"><a href="#"></a></div>
    <div id="style-switcher" class="style-switcher visible">
        <div class="switcher-close">
            <i class="material-icons">close</i>
        </div>
        <!--Main Theme-->
        <div class="style-dot">
            <input type="radio" id="core" name="theme_selector" checked />
            <div class="style-dot-inner"></div>
        </div>
        <!--Main Theme-->
        <div class="style-dot">
            <input type="radio" id="purple" name="theme_selector" />
            <div class="style-dot-inner is-purple"></div>
        </div>
        <!--Main Theme-->
        <div class="style-dot">
            <input type="radio" id="teal" name="theme_selector" />
            <div class="style-dot-inner is-teal"></div>
        </div>
        <!--Main Theme-->
        <div class="style-dot">
            <input type="radio" id="green" name="theme_selector" />
            <div class="style-dot-inner is-green"></div>
        </div>

        <!--Main Theme-->
        <div class="style-dot">
            <input type="radio" id="azur" name="theme_selector" />
            <div class="style-dot-inner is-azur"></div>
        </div>
        <!--Main Theme-->
        <div class="style-dot">
            <input type="radio" id="blue" name="theme_selector" />
            <div class="style-dot-inner is-blue"></div>
        </div>
        <!--Main Theme-->
        <div class="style-dot">
            <input type="radio" id="night" name="theme_selector" />
            <div class="style-dot-inner is-night"></div>
        </div>
        <!--Main Theme-->
        <div class="style-dot">
            <input type="radio" id="yellow" name="theme_selector" />
            <div class="style-dot-inner is-yellow"></div>
        </div>
        <!--Main Theme-->
        <div class="style-dot">
            <input type="radio" id="orange" name="theme_selector" />
            <div class="style-dot-inner is-orange"></div>
        </div>
        <!--Main Theme-->
        <div class="style-dot">
            <input type="radio" id="red" name="theme_selector" />
            <div class="style-dot-inner is-red"></div>
        </div>
    </div> --}}


    <!-- Google maps api call with api key -->
    {{-- <script src="https://maps.google.com/maps/api/js?key=AIzaSyAGLO_M5VT7BsVdjMjciKoH1fFJWWdhDPU"></script> --}}
    <script src="{{ asset('newTemplate/assets/js/app.js') }}"></script>
    <script src="{{ asset('newTemplate/assets/js/core.js') }}"></script>
</body>

</html>
