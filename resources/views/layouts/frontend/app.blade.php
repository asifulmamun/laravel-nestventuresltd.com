
<!DOCTYPE html>
<html lang="zxx">
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
        @vite(['resources/css/app.css'])

        <title>@yield('title')</title>
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>
    <body>
        
        @yield('content')

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
        @stack('js')
        <!-- Override -->
        @vite(['resources/js/app.js'])

    </body>
</html>