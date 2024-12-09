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
    <title>Mediplus - Free Medical and Doctor Directory HTML Template.</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('TemplateGuest/img/favicon.png') }}">

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
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="inner">
                    <div class="row align-items-center"> <!-- Menambahkan align-items-center untuk vertikal alignment -->
                        <div class="col-lg-3 col-md-3 col-12">
                            <!-- Start Logo -->
                            <div class="logo">
                                <a href="index.html"><img src="{{ asset('foto/logo.png') }}" alt="#"></a>
                            </div>
                            <!-- End Logo -->
                        </div>
                        <div class="col-lg-9 col-md-9 col-12">
                            <!-- Main Menu -->
                            <div class="main-menu">
                                <nav class="navigation">
                                    <ul class="nav menu d-flex justify-content-center"> <!-- Menambahkan d-flex justify-content-center untuk perataan menu -->
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Tentang Kami</a></li>
                                        <li><a href="#">Informasi</a></li>
                                        <li><a href="#">Informasi</a></li>
                                        <li><a href="#">Loker</a></li>
                                        <li><a href="#">MOU</a></li>
                                        <li><a href="#">Alumni</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!--/ End Main Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    
    <!-- End Header Area -->

    {{-- @include('guest.home') --}}

    <!-- Slider Area -->
<<<<<<< Updated upstream
    
       @include('guest.slide')
        
    <!--/ End Slider Area -->

  
    
   
=======
    {{-- <section class="slider"> --}}
        <div class="hero-slider owl-carousel owl-theme owl-loaded">
            <!-- Start Single Slider -->
            
            <!-- End Single Slider -->
            <!-- Start Single Slider -->
            
            <!-- Start End Slider -->
            <!-- Start Single Slider -->
            
            <!-- End Single Slider -->
       @include('guest.slide')
    <!--/ End Slider Area -->
        </div>
    <!-- Start Schedule Area -->
    {{-- <section class="schedule">
		<div class="container">
			<div class="schedule-inner">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12 ">
						<!-- single-schedule -->
						<div class="single-schedule first">
							<div class="inner">
								<div class="icon">
									<i class="fa fa-ambulance"></i>
								</div>
								<div class="single-content">
									<span>Lorem Amet</span>
									<h4>Emergency Cases</h4>
									<p>Lorem ipsum sit amet consectetur adipiscing elit. Vivamus et erat in lacus
										convallis sodales.</p>
									<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- single-schedule -->
						<div class="single-schedule middle">
							<div class="inner">
								<div class="icon">
									<i class="icofont-prescription"></i>
								</div>
								<div class="single-content">
									<span>Fusce Porttitor</span>
									<h4>Doctors Timetable</h4>
									<p>Lorem ipsum sit amet consectetur adipiscing elit. Vivamus et erat in lacus
										convallis sodales.</p>
									<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-12">
						<!-- single-schedule -->
						<div class="single-schedule last">
							<div class="inner">
								<div class="icon">
									<i class="icofont-ui-clock"></i>
								</div>
								<div class="single-content">
									<span>Donec luctus</span>
									<h4>Opening Hours</h4>
									<ul class="time-sidual">
										<li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
										<li class="day">Saturday <span>9.00-18.30</span></li>
										<li class="day">Monday - Thusday <span>9.00-15.00</span></li>
									</ul>
									<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
    <!--/End Start schedule Area -->

>>>>>>> Stashed changes
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
