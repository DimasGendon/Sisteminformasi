<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Vector CSS -->
    {{-- <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" /> --}}
    <!-- simplebar CSS-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="assets/css/sidebar-menu.css" rel="stylesheet" />

    @stack('style')


    <!-- Custom Style-->
    <link href="assets/css/app-style.css" rel="stylesheet" />

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
            padding-top: 10vh;
            padding-bottom: 10vh;
        }

        strong {
            font-weight: 600;
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
            box-shadow: 0 15px 20px -10px rgba(#000, 0.1);

            &>*+* {
                margin-top: 1em;
            }

            &:is(h1, h2, h3)+* {
                margin-top: 0.5em;
            }

            h1 {
                font-weight: 900;
                font-size: 2rem;
                line-height: 1.125;
            }

            code {
                background-color: #eee;
                font-weight: 600;
                font-family: monospace;
            }

            p {}

            ol {
                counter-reset: sickstuff;

                li {
                    position: relative;
                    padding-left: 32px;
                    counter-increment: sickstuff;

                    &+li {
                        margin-top: 0.5em;
                    }

                    &:before {
                        content: counter(sickstuff);
                        width: 24px;
                        height: 24px;
                        position: absolute;
                        left: 0;
                        top: calc((1.125rem * 1.5) - 24px);
                        font-size: 0.75em;
                        border-radius: 50%;
                        display: inline-flex;
                        align-items: center;
                        justify-content: center;
                        background-color: #185adb;
                        color: #fff;
                        font-weight: 600;
                    }
                }
            }
        }

        details {
            position: fixed;
            right: 1rem;
            bottom: 1rem;
            margin-top: 2rem;
            color: #6b7280;
            display: flex;
            flex-direction: column;

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

                &::-webkit-scrollbar {
                    width: 15px;
                    background-color: #1e1e27;
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

<body class="bg-theme bg-theme1">

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            <div class="brand-logo">
                <a href="index.html">
                    <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                    <h5 class="logo-text">Dashtreme Admin</h5>
                </a>
            </div>
            <ul class="sidebar-menu do-nicescrol">
                <li class="sidebar-header">MAIN NAVIGATION</li>
                <li>
                    <a href="index.html">
                        <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('menu.index') }}">
                        <i class="ti ti-menu"></i> <span>Menu</span>
                    </a>
                </li>

            </ul>

        </div>
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        <header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form class="search-bar">
                            <input type="text" class="form-control" placeholder="Enter keywords">
                            <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                        </form>
                    </li>
                </ul>

                <ul class="navbar-nav align-items-center right-nav-link">
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();">
                            <i class="fa fa-envelope-open-o"></i></a>
                    </li>
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();">
                            <i class="fa fa-bell-o"></i></a>
                    </li>
                    <li class="nav-item language">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();"><i class="fa fa-flag"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown"
                            href="#">
                            <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle"
                                    alt="user avatar"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item user-details">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img class="align-self-start mr-3"
                                                src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                                        <div class="media-body">
                                            <h6 class="mt-2 user-title">Sarajhon Mccoy</h6>
                                            <p class="user-subtitle">mccoy@example.com</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <!--End topbar header-->

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">

                @yield('content')

                <!--start overlay-->
                <div class="overlay toggle-menu"></div>
                <!--end overlay-->

            </div>
            <!-- End container-fluid-->

        </div><!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        <footer class="footer">
            <div class="container">
                <div class="text-center">
                    Copyright © 2018 Dashtreme Admin
                </div>
            </div>
        </footer>
        <!--End footer-->

        <!--start color switcher-->
        <div class="right-sidebar">
            <div class="switcher-icon">
                <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
            </div>
            <div class="right-sidebar-content">

                <p class="mb-0">Gaussion Texture</p>
                <hr>

                <ul class="switcher">
                    <li id="theme1"></li>
                    <li id="theme2"></li>
                    <li id="theme3"></li>
                    <li id="theme4"></li>
                    <li id="theme5"></li>
                    <li id="theme6"></li>
                </ul>

                <p class="mb-0">Gradient Background</p>
                <hr>

                <ul class="switcher">
                    <li id="theme7"></li>
                    <li id="theme8"></li>
                    <li id="theme9"></li>
                    <li id="theme10"></li>
                    <li id="theme11"></li>
                    <li id="theme12"></li>
                    <li id="theme13"></li>
                    <li id="theme14"></li>
                    <li id="theme15"></li>
                </ul>

            </div>
        </div>
        <!--end color switcher-->

    </div><!--End wrapper-->
    
    <!-- Bootstrap core JavaScript-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="assets/plugins/simplebar/js/simplebar.js"></script>
    <!-- sidebar-menu js -->
    <script src="assets/js/sidebar-menu.js"></script>
    <!-- loader scripts -->
    {{-- <script src="assets/js/jquery.loading-indicator.js"></script> --}}
    <!-- Custom scripts -->
    <script src="assets/js/app-script.js"></script>



    @stack('script')



</body>

</html>
