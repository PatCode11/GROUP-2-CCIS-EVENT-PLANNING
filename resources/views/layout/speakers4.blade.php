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
          <li><a href="{{ route('speaker4') }}" class="active">Speakers</a></li>
          <li><a href="{{ route('venue5') }}">Venue</a></li>
          <li><a href="{{ route('gallery6') }}">Gallery</a></li>
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
        <h1>Speakers</h1>
        <p>All are renowned Filipino athletes who have achieved excellence in their respective sports,
            inspiring the nation with their dedication, discipline, and remarkable achievements.
        </p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index1') }}">Home</a></li>
            <li class="current">Speakers</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

     <!-- Featured Speakers Section -->
        <section id="featured-speakers" class="featured-speakers section">

            <!-- Section Title -->
            <div class="container section-title">
                <h2>Featured Speakers</h2>
                <p>All are renowned Filipino athletes who have achieved excellence in their respective sports,
                    inspiring the nation with their dedication, discipline, and remarkable achievements.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <!-- Featured Speaker 1 -->
                    <div class="col-lg-6">
                        <div class="speaker-card featured">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="speaker-image">
                                        <img src="assets/img/person/manny.webp" alt="Emily Rodriguez"
                                            class="img-fluid">
                                        <div class="speaker-social">
                                            <a href="#" aria-label="LinkedIn"><i
                                                    class="bi bi-linkedin"></i></a>
                                            <a href="#" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="speaker-content">
                                        <span class="speaker-category">Keynote Speaker</span>
                                        <h3 class="speaker-name">Manny Pacquiao</h3>
                                        <p class="speaker-title">Boxing Sports Coach</p>
                                        <div class="speaker-session">
                                            <h4>Session: "Building Champions: Discipline, Training, and the Mindset of a
                                                Fighter"</h4>
                                        </div>
                                        <a href="#" class="btn-speaker">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Featured Speaker 1 -->

                    <!-- Featured Speaker 2 -->
                    <div class="col-lg-6">
                        <div class="speaker-card featured">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="speaker-image">
                                        <img src="assets/img/events/carlos.jpg" alt="Marcus Thompson"
                                            class="img-fluid">
                                        <div class="speaker-social">
                                            <a href="#" aria-label="LinkedIn"><i
                                                    class="bi bi-linkedin"></i></a>
                                            <a href="#" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="speaker-content">
                                        <span class="speaker-category">Panel Speaker</span>
                                        <h3 class="speaker-name">Carlos Yulo</h3>
                                        <p class="speaker-title">Gymnast Sports Coach</p>
                                        <div class="speaker-session">
                                            <h4>Session: "Training Techniques and Performance Optimization in
                                                Gymnastics"</h4>
                                        </div>
                                        <a href="#" class="btn-speaker">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Featured Speaker 2 -->

                </div>

                <!-- Additional Speakers Grid -->
                <div class="row gy-4 mt-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="speaker-card compact">
                            <div class="speaker-image">
                                <img src="assets/img/events/ef.jpg" alt="Sarah Chen" class="img-fluid">
                                <div class="speaker-overlay">
                                    <div class="speaker-social">
                                        <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                                        <a href="#" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker-content">
                                <h4 class="speaker-name">Efren Reyes</h4>
                                <p class="speaker-title">Billiards Sports Coach</p>
                                <span class="speaker-topic">"Mastering Strategy and Precision in Billiards"</span>
                            </div>
                        </div>
                    </div><!-- End Speaker -->

                    <div class="col-lg-3 col-md-6">
                        <div class="speaker-card compact">
                            <div class="speaker-image">
                                <img src="assets/img/events/hidilyn.webp" alt="David Wilson" class="img-fluid">
                                <div class="speaker-overlay">
                                    <div class="speaker-social">
                                        <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                                        <a href="#" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker-content">
                                <h4 class="speaker-name">Hidilyn Diaz</h4>
                                <p class="speaker-title">Weightlifting Sports Coach</p>
                                <span class="speaker-topic">"Strength, Strategy, and Peak Performance in
                                    Weightlifting"</span>
                            </div>
                        </div>
                    </div><!-- End Speaker -->

                    <div class="col-lg-3 col-md-6">
                        <div class="speaker-card compact">
                            <div class="speaker-image">
                                <img src="assets/img/events/rene.jpg" alt="Lisa Martinez" class="img-fluid">
                                <div class="speaker-overlay">
                                    <div class="speaker-social">
                                        <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                                        <a href="#" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker-content">
                                <h4 class="speaker-name">Rene Herrera</h4>
                                <p class="speaker-title">Track and Field Sports Coach</p>
                                <span class="speaker-topic">"Endurance, Speed, and Winning Mindset in Athletics"</span>
                            </div>
                        </div>
                    </div><!-- End Speaker -->

                    <div class="col-lg-3 col-md-6">
                        <div class="speaker-card compact">
                            <div class="speaker-image">
                                <img src="assets/img/events/kuku.jpg" alt="James Parker" class="img-fluid">
                                <div class="speaker-overlay">
                                    <div class="speaker-social">
                                        <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                                        <a href="#" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker-content">
                                <h4 class="speaker-name">Carlo Palad</h4>
                                <p class="speaker-title">Dota 2 Coach / Esports Athlete</p>
                                <span class="speaker-topic">"Strategy, Teamwork, and Competitive Edge in Dota 2"</span>
                            </div>
                        </div>
                    </div><!-- End Speaker -->

                </div>

                <!-- Quote Section -->
                <div class="row mt-5">
                    <div class="col-lg-8 mx-auto">
                        <div class="speaker-quote">
                            <blockquote>
                                <p>"I will ride a jet ski while bringing the Philippine flag."</p>
                            </blockquote>
                            <div class="quote-author">
                                <img src="assets/img/events/rodrigo.jpg" alt="Emily Rodriguez" class="img-fluid">
                                <div class="author-info">
                                    <h5>Rodrigo Duterte</h5>
                                    <span>Former President of the Philippines</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Featured Speakers Section -->

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
