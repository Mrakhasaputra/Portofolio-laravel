<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portofolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ URL::to('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::to('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ URL::to('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ URL::to('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ URL::to('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ URL::to('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Laura
  * Template URL: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

 <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex justify-content-center align-items-center header-transparent">

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="/">Home</a></li>
        <li><a class="nav-link scrollto" href="/blog/about">About</a></li>
        <li><a class="nav-link scrollto " href="/blog/portofolio">Portfolio</a></li>
        <li><a class="nav-link scrollto" href="/blog/kontak">Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </header><!-- End Header -->

 <div>
    @yield('content')
 </div>

  <!-- Vendor JS Files -->
  <script src="{{ URL::to('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ URL::to('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ URL::to('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ URL::to('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ URL::to('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ URL::to('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ URL::to('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ URL::to('assets/js/main.js') }}"></script>

</body>

</html>