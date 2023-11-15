<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <link rel="shortcut icon" href="{{ asset('/assets') }}/images/favicon.png" type="image/x-icon">
        <link rel="icon" href="{{ asset('/assets/images/favicon.png') }}" type="image/x-icon">

        <title>Booking Hotel</title>
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="page-wrapper">
            <header class="header header_style_one">
                <div class="middle_bar">
                    <div class="auto-container">
                        <div class="middle_bar_inner d-flex align-items-center justify-content-center justify-content-between gap-4 flex-wrap">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="{{ url('/') }}" class="logo_default"><img src="{{ asset('assets/images/logo.svg') }}" alt="img"></a>
                                <a href="{{ url('/') }}" class="logo_sticky"><img src="{{ asset('assets/images/sticky-logo.svg') }}" alt="img"></a>
                            </div>

                            @include('partials.navigation')

                            <div class="other_elements_wrapper d-flex align-items-center gap-4">
                                <div class="mr_menu_toggle d-lg-none">
                                    <span class="toggle_line"></span>
                                    <span class="toggle_line"></span>
                                    <span class="toggle_line"></span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="fixed_menu w-100">
                <header class="header header_style_one"></header>
            </div>

            <div class="mr_menu d-lg-none">
                <button type="button" class="mr_menu_close"><i class="fa fa-times"></i></button>
                <div class="logo"></div>
                <div class="mr_navmenu"></div>
            </div>

            @yield('contents')

            <footer class="main-footer">
                <div class="auto-container">
                    <div class="upper-box">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div class="footer-logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('/assets') }}/images/logo.svg" alt="" title="">
                                </a>
                            </div>
                            <ul class="footer-nav">
                                <li><a href="#">Destinations</a></li>
                                <li><a href="#">Tours</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                            <div class="footer-social_box">
                                <a href="https://facebook.com/" target="_blank" class="fab fa-facebook fa-fw"></a>
                                <a href="https://twitter.com/" target="_blank" class="fab fa-twitter-square fa-fw"></a>
                                <a href="https://instagram.com/" target="_blank" class="fab fa-instagram fa-fw"></a>
                            </div>
                        </div>
                    </div>

                    <div class="footer-bottom">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div class="copyright">Copyright &copy; 2023 XLR8. All rights reserved.</div>
                            <ul class="footer-bottom_nav">
                                <li><a href="{{ url('/') }}">Privacy policy</a></li>
                                <li><a href="{{ url('/') }}">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </footer>

        </div>

        <div class="scroll-to-top"><span class="fas fa-arrow-up fa-fw"></span></div>

        <script src="{{ asset('assets/js/jquery.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/appear.js') }}"></script>
        <script src="{{ asset('assets/js/parallax.min.js') }}"></script>
        <script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.js') }}"></script>
        <script src="{{ asset('assets/js/wow.js') }}"></script>

        <script src="{{ asset('assets/js/odometer.js') }}"></script>
        <script src="{{ asset('assets/js/isotope.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.marquee.min.js') }}"></script>
        <script src="{{ asset('assets/js/parallax-scroll.js') }}"></script>
        <script src="{{ asset('assets/js/nav-tool.js') }}"></script>
        <script src="{{ asset('assets/js/mixitup.js') }}"></script>
        <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
        <script src="{{ asset('assets/js/select2.min.js') }}"></script>
        <script src="{{ asset('assets/js/flatpickr.min.js') }}"></script>
        <script src="{{ asset('assets/js/price-range.js') }}"></script>

        <script src="{{ asset('assets/js/script.js') }}"></script>

        <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
        <!--[if lt IE 9]><script src="{{ asset('assets/js/respond.js') }}"></script><![endif]-->
    </body>
</html>
