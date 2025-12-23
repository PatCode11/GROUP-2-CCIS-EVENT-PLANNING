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
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

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

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.webp" alt=""> -->
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('index1') }}"class="active">Home</a></li>
                    <li><a href="{{ route('about2') }}">Ticket</a></li>
                    <li><a href="{{ route('schedule3') }}">Schedule</a></li>
                    <li><a href="{{ route('speaker4') }}">Speakers</a></li>
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

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background"
            style="background-image: url(assets/img/events/gym.jpg);">

            <div class="background-overlay"></div>

            <div class="hero-content">

                <div class="container">

                    <div class="row justify-content-center text-center">

                        <div class="col-lg-10">

                            <div class="hero-text">

                                <h1 class="hero-title">CCIS Department Event Planning&nbsp;<br>and Coordination System
                                </h1>

                                <p class="hero-subtitle">A smarter way for CCIS to shape the future of school events
                                    through seamless planning and coordination.</p>

                                <div class="event-details">
                                    <div class="detail-item">
                                        <i class="bi bi-calendar-event"></i>
                                        <span>December 15-17, 2025</span>
                                    </div>
                                    <div class="detail-item">
                                        <i class="bi bi-geo-alt"></i>
                                        <span>Narciso Street, Surigao, 8400 Surigao del Norte</span>
                                    </div>
                                </div>

                            </div>

                            <div class="countdown-section">

                                <h3 class="countdown-label">Event Starts In</h3>

                                <div class="countdown d-flex justify-content-center" data-count="2025/12/22">
                                    <div>
                                        <h3 class="count-days">13</h3>
                                        <h4>Days</h4>
                                    </div>
                                    <div>
                                        <h3 class="count-hours">8</h3>
                                        <h4>Hours</h4>
                                    </div>
                                    <div>
                                        <h3 class="count-minutes">53</h3>
                                        <h4>Minutes</h4>
                                    </div>
                                    <div>
                                        <h3 class="count-seconds">23</h3>
                                        <h4>Seconds</h4>
                                    </div>
                                </div>


                            </div>

                            <div class="cta-section">

                                <div class="cta-buttons">
                                    <a href="{{ route('speaker4') }}" class="btn btn-secondary btn-cta">View Speakers</a>
                                </div>

                                <p class="cta-note">Exclusively for CCIS students in the department.</p>

                            </div>

                        </div><!-- End col-lg-10 -->

                    </div><!-- End row -->

                </div><!-- End container -->

            </div>

        </section><!-- /Hero Section -->

        <!-- Intro Section -->
        <section id="intro" class="intro section">

            <div class="container">

                <div class="row g-4">

                    <div class="col-lg-6">
                        <div class="content">
                            <h2 class="text-center">UNIVERSITY INTRAMURALS GAMES AND SOCIO-CULTURAL</h2>
                            <p class="lead">The University Intramurals Games and Socio-Cultural Festival at SNSU
                                brings students together to celebrate sportsmanship,
                                creativity, and school spirit. This annual event showcases the talents, skills, and
                                unity of the SNSU community through friendly
                                competitions and cultural performances.</p>
                            <p>Beyond the games and activities, the event encourages camaraderie, leadership, and
                                collaboration among students.
                                It serves as a meaningful opportunity for participants to build connections and
                                strengthen the sense of
                                community across the university.</p>

                            <div class="stats-grid">
                                <div class="stat-item">
                                    <div class="stat-number">3</div>
                                    <div class="stat-label">Days</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">15</div>
                                    <div class="stat-label">Sports</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">13</div>
                                    <div class="stat-label">Speakers</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">3000+</div>
                                    <div class="stat-label">Attendees</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="visual-section">
                            <div class="image-wrapper">
                                <img src="assets/img/events/snsu2.jpg" alt="Tech Summit" class="img-fluid">
                                <div class="gradient-overlay"></div>
                                <div class="floating-badge">
                                    <i class="bi bi-calendar-event"></i>
                                    <span>December 15-17, 2025</span>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="founder-quote">
                    <div class="cta-section">
                        <a class="btn btn-primary">Meet the Developer</a>
                        <div class="row align-items-center">
                            <div class="col-lg-3 text-center">
                                <img src="assets/img/person/chacha.jpg" alt="Sarah Johnson" class="founder-img">
                            </div>
                            <div class="col-lg-9">
                                <blockquote><br><br>

                                    <p>"Positive mind, successful life"</p>
                                    <cite>
                                        <strong>Herchalie E. Butalid</strong>
                                        <span>CCIS STUDENT</span><br><br>
                                    </cite>
                                </blockquote><br><br>
                            </div>
                            <div class="col-lg-3 text-center">
                                <img src="assets/img/person/pat.jpg" alt="Sarah Johnson" class="founder-img">
                            </div>
                            <div class="col-lg-9">
                                <blockquote>
                                    <p>"I just want to pass this major course, just a guy with classic Filipino kanal
                                        humor
                                        trying his best."</p>
                                    <cite>
                                        <strong>Carl Patrick Mondero</strong>
                                        <span>CCIS STUDENT</span>
                                    </cite>
                                </blockquote>
                            </div>
                            <div class="col-lg-3 text-center">
                                <img src="assets/img/person/ederr.jpg" alt="Sarah Johnson" class="founder-img">
                            </div>
                            <div class="col-lg-9">
                                <blockquote><br><br>

                                    <p>"Chatgpt is the key to pass the grade""</p>
                                    <cite>
                                        <strong>Zildjian C. Eder</strong>
                                        <span>CCIS STUDENT</span><br><br>
                                    </cite>
                                </blockquote><br><br>
                            </div>
                            <div class="col-lg-3 text-center">
                                <img src="assets/img/person/marie.jpg" alt="Sarah Johnson" class="founder-img">
                            </div>
                            <div class="col-lg-9">
                                <blockquote><br><br>

                                    <p>"Behind my smile, there's a teeth"</p>
                                    <cite>
                                        <strong>Maria Christy C. Galagar</strong>
                                        <span>CCIS STUDENT</span><br><br>
                                    </cite>
                                </blockquote><br><br>
                            </div>
                            <div class="col-lg-3 text-center">
                                <img src="assets/img/person/bernadez.jpg" alt="Sarah Johnson" class="founder-img">
                            </div>
                            <div class="col-lg-9">
                                <blockquote><br><br>

                                    <p>"I keep going no matter what"</p>
                                    <p>"Padayon lang gihapon ko bisan magkinaunsa"</p>
                                    <cite>
                                        <strong>BERNADEZ, MARK JUN</strong>
                                        <span>CCIS STUDENT</span><br><br>
                                    </cite>
                                </blockquote><br><br>
                            </div>
                        </div>
                    </div>

                </div>

        </section><!-- /Intro Section -->

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
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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
