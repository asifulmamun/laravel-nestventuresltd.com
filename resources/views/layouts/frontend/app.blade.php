
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<!-- Mean Menu CSS -->
<link rel="stylesheet" href="assets/css/meanmenu.css">
<!-- Box Icons CSS -->
<link rel="stylesheet" href="assets/css/boxicons.min.css">
<!-- Owl Carousel JS -->
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
<!-- Animate CSS -->
<link rel="stylesheet" href="assets/css/animate.min.css">
<!-- Flat Icons CSS -->
<link rel="stylesheet" href="assets/fonts/flaticon.css">
<!-- Odometer CSS -->
<link rel="stylesheet" href="assets/css/odometer.min.css">
<!-- Nice Select CSS -->
<link rel="stylesheet" href="assets/css/nice-select.min.css">
<!-- Popup CSS -->
<link rel="stylesheet" href="assets/css/magnific-popup.min.css">
<!-- Style CSS -->
<link rel="stylesheet" href="assets/css/style.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="assets/css/responsive.css">
@stack('css')
<!-- Override -->
<link rel="stylesheet" href="assets/css/override.css">
{{-- @vite(['resources/css/app.css']) --}}
<title>@yield('title')</title>
<link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>
<body>
    
<!-- Preloader -->
<div class="loader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
</div>
<!-- End Preloader -->

<!-- Header -->
<div class="header-area two">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="left">
                    <ul>
                        <li>
                            <i class='bx bx-location-plus'></i>
                            <a href="#">House 10, Main Road, Block C, Banasree, Rampura, Dhaka-1219</a>
                        </li>
                        <li>
                            <i class='bx bx-mail-send'></i>
                            <a href="mailto:info@nestventuresltd.com"><span
                                    class="__cf_email__" {{-- data-cfemail="a3cbc6cfcfcce3c5cacdcccd8dc0ccce" --}}>info@nestventuresltd.com</span></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="right">
                    <ul>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-pinterest-alt'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-linkedin'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<style>.header-area .left:hover a,.header-area .left:hover i{color:var(--text_color)!important;}.mean-container a.meanmenu-reveal span{background:var(--text_color);}@media only screen and (max-width: 991px){.mean-container .mean-bar{background-color:#ffffff;}}</style>
<!-- End Header -->

<!-- Navbar -->
<div class="navbar-area sticky-top">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="{{ route('home') }}" class="logo">
            <img src="assets/img/logo-nestventuresltd.png" alt="Logo">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav two">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="assets/img/logo-nestventuresltd.png" alt="Logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link active">Home</a></li>
                        <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About Us</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Projects</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                        {{-- <li class="nav-item">
                        <a href="#" class="nav-link dropdown-toggle">Blog <i class="bx bx-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="blog.html" class="nav-link">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="blog-details.html" class="nav-link">Blog Details</a>
                            </li>
                        </ul>
                    </li> --}}
                    </ul>
                    <div class="side-nav">
                        {{-- <div class="language">
                        <select>
                            <option>English</option>
                            <option>العربيّة</option>
                            <option>Deutsch</option>
                            <option>Português</option>
                        </select>
                    </div> --}}
                        <a target="_blank" class="consultant-btn" href="https://docs.google.com/forms/d/e/1FAIpQLSdjPTkGtXlkLI_WG3Sd2sp135XObuunj_aw_3F4E8SCrtKsJA/viewform?usp=sf_link">
                            Apply for Investment
                        </a>
                        <a target="_blank" class="consultant-btn" href="https://docs.google.com/forms/d/e/1FAIpQLSd-uAweHxyxWVwspVksTLp32pEt2QIJJ2lHzz3WtAQwOA6zcg/viewform?usp=sf_link">
                            Apply as Investor
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<style>@media only screen and (max-width: 991px){.mobile-nav .logo{top:5px;}.side-nav{padding-bottom:4px;}}</style>
<!-- End Navbar -->

@yield('content')

<!-- Footer -->
<footer class="footer-area two pt-100 pb-70">
    <div class="container">
        <div class="row">

            <div class="col-sm-6 col-lg-4">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a class="logo" href="index.html">
                            <img src="assets/img/logo-nestventuresltd.png" alt="Logo">
                        </a>
                        <p>At NEST, we empower entrepreneurs to reach their goals with comprehensive training, expert consultancy, strategic networking, and valuable investment opportunities. Partner with us to transform your vision into reality and elevate your business to new heights.p>
                        <ul>
                            <li>
                                <i class='bx bx-phone-call'></i>
                                <span>Phone:</span>
                                <a href="tel:+8809696232337">(880) 9696 232 337</a>
                                <a href="tel:+8809696232337">(880) 1913 511 188</a>
                            </li>
                            <li>
                                <i class='bx bx-mail-send'></i>
                                <span>Email:</span>
                                <a href="mailto:info@nestventuresltd.com"><span
                                        class="__cf_email__"{{--  data-cfemail="1b737e7777745b7d7275747535787476" --}}>info@nestventuresltd.com</span></a>
                            </li>
                            <li>
                                <i class='bx bx-current-location'></i>
                                <span>Address:</span>
                                <a href="#">House 10, Main Road, Block C, Banasree, Rampura, Dhaka 1219</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-2">
                <div class="footer-item">
                    <div class="footer-links">
                        <h3>Quick Links</h3>
                        <ul>
                            <li>
                                <a href="{{ route('about') }}">About</a>
                            </li>
                            <li>
                                <a href="{{ route('return_refund') }}">Return and Refund Policy</a>
                            </li>
                            <li>
                                <a href="{{ route('terms_condition') }}">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="{{ route('privacy_policy') }}">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <h3>Newsletter</h3>
                    <div class="footer-newsletter">
                        <p>Accusamus et iusto odio quas molestias except.</p>
                        <form class="newsletter-form" data-toggle="validator">
                            <input type="email" class="form-control" placeholder="Enter email address"
                                name="EMAIL" required autocomplete="off">

                            <button class="btn common-btn" type="submit">
                                Subscribe
                                <span></span>
                            </button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-links">
                        <h3>What We Do</h3>
                        <ul>
                            <li>
                                <a href="about.html">Financial Support & Consultancy</a>
                            </li>
                            <li>
                                <a href="services.html">Mentorship & Guidance</a>
                            </li>
                            <li>
                                <a href="projects.html">Business Plan & Strategy</a>
                            </li>
                            <li>
                                <a href="faq.html">Marketing & Branding Assistance</a>
                            </li>
                            <li>
                                <a href="blog.html">Networking Opportunities</a>
                            </li>
                            <li>
                                <a href="privacy-policy.html">Technology Support</a>
                            </li>
                            <li>
                                <a href="privacy-policy.html">Legal Support</a>
                            </li>
                            <li>
                                <a href="privacy-policy.html">Emotional Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- Copyright -->
<div class="copyright-area two">
    <div class="container">
        <div class="copyright-item">
            <p>Copyright ©2021 Nest. Designed By <a title="Developer: www.asifulmamun.info.bd" href="https://easysheba.com/" target="_blank">EasySheba</a>
            </p>
        </div>
    </div>
</div>
<!-- End Copyright -->

<!-- Go Top -->
<div class="go-top">
    <i class='bx bxs-up-arrow'></i>
    <i class='bx bxs-up-arrow'></i>
</div>
<!-- End Go Top -->


<!-- Essential JS -->
{{-- <script data-cfasync="false" src="https://templates.envytheme.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"> --}}
</script><script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- Form Validator JS -->
<script src="assets/js/form-validator.min.js"></script>
<!-- Contact JS -->
<script src="assets/js/contact-form-script.js"></script>
<!-- Ajax Chip JS -->
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<!-- Mean Menu JS -->
<script src="assets/js/jquery.meanmenu.js"></script>
<!-- Owl Carousel JS -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Wow JS -->
<script src="assets/js/wow.min.js"></script>
<!-- Odometer JS -->
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/jquery.appear.min.js"></script>
<!-- Nice Select JS -->
<script src="assets/js/jquery.nice-select.min.js"></script>
<!-- Popup JS -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Custom JS -->
<script src="assets/js/custom.js"></script>
@stack('internal_css')
@stack('js')
<!-- Override -->
{{-- @vite(['resources/js/app.js']) --}}
{{-- <script src="assets/js/override.js"></script> --}}
</body>
</html>