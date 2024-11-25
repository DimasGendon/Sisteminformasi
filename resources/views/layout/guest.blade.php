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
    <ul class="pro-features">
        <a class="get-pro" href="#">Get Pro</a>
        <li class="big-title">Pro Version Available on Themeforest</li>
        <li class="title">Pro Version Features</li>
        <li>2+ premade home pages</li>
        <li>20+ html pages</li>
        <li>Color Plate With 12+ Colors</li>
        <li>Sticky Header / Sticky Filters</li>
        <li>Working Contact Form With Google Map</li>
    </ul>

    <!-- Header Area -->
    <header class="header">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5 col-12">
                        <!-- Contact -->
                        <ul class="top-link">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Doctors</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                        <!-- End Contact -->
                    </div>
                    <div class="col-lg-6 col-md-7 col-12">
                        <!-- Top Contact -->
                        <ul class="top-contact">
                            <li><i class="fa fa-phone"></i>+880 1234 56789</li>
                            <li><i class="fa fa-envelope"></i><a
                                    href="mailto:support@yourmail.com">support@yourmail.com</a></li>
                        </ul>
                        <!-- End Top Contact -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-12">
                            <!-- Start Logo -->
                            <div class="logo">
                                <a href="index.html"><img src="{{ asset('TemplateGuest/img/logo.png') }}" alt="#"></a>
                            </div>
                            <!-- End Logo -->
                            <!-- Mobile Nav -->
                            <div class="mobile-nav"></div>
                            <!-- End Mobile Nav -->
                        </div>
                        <div class="col-lg-7 col-md-9 col-12">
                            <!-- Main Menu -->
                            <div class="main-menu">
                                <nav class="navigation">
                                    <ul class="nav menu">
                                        <li class="active"><a href="#">Home <i
                                                    class="icofont-rounded-down"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="index.html">Home Page 1</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Doctos </a></li>
                                        <li><a href="#">Services </a></li>
                                        <li><a href="#">Pages <i class="icofont-rounded-down"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="404.html">404 Error</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Blogs <i class="icofont-rounded-down"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="blog-single.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!--/ End Main Menu -->
                        </div>
                        <div class="col-lg-2 col-12">
                            <div class="get-quote">
                                <a href="appointment.html" class="btn">Book Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!-- End Header Area -->

    <!-- Slider Area -->
    @include('guest.slide')
    <!--/ End Slider Area -->

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
    @include('guest.portofolio')
    <!--/ End portfolio -->

    <!-- Start service -->
    @include('guest.service')
    <!--/ End service -->

    <!-- Pricing Table -->
    @include('guest.pricing')
    <!--/ End Pricing Table -->



    <!-- Start Blog Area -->
    @include('guest.blog')
    <!-- End Blog Area -->

    <!-- Start clients -->
    @include('guest.client')
    <!--/Ens clients -->

    <!-- Start Appointment -->
    @include('guest.appointment')
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
