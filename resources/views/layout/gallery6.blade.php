<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>CCIS Department Event Planning</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/events/ccis.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Evently
  * Template URL: https://bootstrapmade.com/evently-bootstrap-events-template/
  * Updated: Jul 19 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="speakers-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('index1') }}">Home</a></li>
          <li><a href="{{ route('about2') }}">Ticket</a></li>
          <li><a href="{{ route('schedule3') }}">Schedule</a></li>
          <li><a href="{{ route('speaker4') }}">Speakers</a></li>
          <li><a href="{{ route('venue5') }}">Venue</a></li>
          <li><a href="{{ route('gallery6') }}"class="active">Gallery</a></li>
          <li><a href="{{ route('contact7') }}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a href="{{ route('events.index') }}" target="_blank" class="btn btn-primary btn-getstarted">
                API-Testing
        </a>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(assets/img/events/R2.jpg);">
      <div class="container position-relative">
        <h1>Gallery</h1>
        <p>Browse our gallery to view captured moments and visual highlights from the event.
        </p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index1') }}">Home</a></li>
            <li class="current">Gallery</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

     <!-- Featured Speakers Section -->
        <section id="featured-speakers" class="featured-speakers section">

            <!-- Section Title -->
            <div class="container section-title">
                <h2>Random Pictures</h2>
                <p>A collection of moments from our event.</p>
            </div><!-- End Section Title -->

            <!-- Gallery Section -->
        <section id="gallery" class="gallery section">

            <div class="container-fluid">

                <div class="row gy-4 justify-content-center">

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/events/c1.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/events/c1.jpg" title="Gallery 1"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/events/c2.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/events/c2.jpg" title="Gallery 2"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/events/c3.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/events/c3.jpg" title="Gallery 3"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/events/c4.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/events/c4.jpg" title="Gallery 4"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/events/c7.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/events/c7.jpg" title="Gallery 5"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/events/c6.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/events/c6.jpg" title="Gallery 6"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/events/c8.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/events/c8.jpg" title="Gallery 7"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/events/c9.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/events/c9.jpg" title="Gallery 8"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->

                     <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/events/bianca.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/events/bianca.jpg" title="Gallery 9"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->

                     <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/events/alvi.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/events/alvi.jpg" title="Gallery 10"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->

                     <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/events/x3.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/events/x3.jpg" title="Gallery 11"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->

                     <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/events/x1.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/events/x1.jpg" title="Gallery 12"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->

                     <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/events/R1.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/events/R1.jpg" title="Gallery 13"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->

                     <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/events/R2.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/events/R2.jpg" title="Gallery 14"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->

                     <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/events/eb.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/events/eb.jpg" title="Gallery 15"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->

                     <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/events/x1.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/events/x1.jpg" title="Gallery 16"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->

                </div>

            </div>

        </section><!-- /Gallery Section -->

  </main>

  <footer id="footer" class="footer position-relative dark-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">FINAL PROJECT</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Narciso Street, Surigao, 8400 Surigao del Norte</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+63 9123456789</span></p>
                        <p><strong>Email:</strong> <span>info@example.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">MyWebsite</strong> <span>All Rights
                    Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <strong class="px-1 sitename">Group 4</strong>
            </div>
        </div>

    </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
