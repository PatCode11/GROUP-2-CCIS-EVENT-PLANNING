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

<body class="about-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('index1') }}">Home</a></li>
          <li><a href="{{ route('about2') }}" class="active">Ticket</a></li>
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

    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(assets/img/events/R2.jpg);">
      <div class="container position-relative">
        <h1>Ticket</h1>
        <p>Grab your tickets now and secure your spot for the event. Limited slots available!</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index1') }}">Home</a></li>
            <li class="current">Ticket</li>
          </ol>
        </nav>
      </div>
    </div><br><br><!-- End Page Title -->

   <!-- Download CTA -->
                <div class="text-center">
                    <div class="download-cta">
                        <h4>Get the Complete Schedule</h4>
                        <p>Download the full agenda as PDF or add events to your calendar</p>
                        <div class="cta-buttons">
                            <a href="#" class="btn btn-primary">
                                <i class="bi bi-download"></i>
                                Download PDF
                            </a>
                            <a href="#" class="btn btn-outline-primary">
                                <i class="bi bi-calendar-plus"></i>
                                Add to Calendar
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Schedule Section -->

        <!-- Tickets Section -->
        <section id="tickets" class="tickets section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6">
                        <div class="ticket-card">
                            <div class="ticket-header">
                                <h3>General Admission</h3>
                                <div class="ticket-price">
                                    <span class="currency">₱</span>
                                    <span class="amount">250</span>
                                    <span class="period">/ticket</span>
                                </div>
                                <p class="ticket-duration">3-Day Access</p>
                            </div>
                            <div class="ticket-body">
                                <ul class="ticket-features">
                                    <li><i class="bi bi-check-circle-fill"></i>Access to all conference sessions</li>
                                    <li><i class="bi bi-check-circle-fill"></i>Welcome reception networking</li>
                                    <li><i class="bi bi-check-circle-fill"></i>Coffee breaks and lunch included</li>
                                    <li><i class="bi bi-check-circle-fill"></i>Digital conference materials</li>
                                    <li><i class="bi bi-check-circle-fill"></i>Certificate of attendance</li>
                                </ul>
                            </div>
                            <div class="ticket-footer">
                                <a href="buy-tickets.html" class="btn btn-ticket">Register Now</a>
                                <p class="availability-info">500 tickets remaining</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="ticket-card featured">
                            <div class="popular-badge">Most Popular</div>
                            <div class="ticket-header">
                                <h3>VIP Experience</h3>
                                <div class="ticket-price">
                                    <span class="currency">₱</span>
                                    <span class="amount">500</span>
                                    <span class="period">/ticket</span>
                                </div>
                                <p class="ticket-duration">3-Day Premium Access</p>
                            </div>
                            <div class="ticket-body">
                                <ul class="ticket-features">
                                    <li><i class="bi bi-check-circle-fill"></i>All General Admission benefits</li>
                                    <li><i class="bi bi-check-circle-fill"></i>Reserved front row seating</li>
                                    <li><i class="bi bi-check-circle-fill"></i>Exclusive VIP networking lounge</li>
                                    <li><i class="bi bi-check-circle-fill"></i>Meet &amp; greet with keynote speakers
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i>Premium swag bag worth $150</li>
                                    <li><i class="bi bi-check-circle-fill"></i>Private dinner with industry leaders
                                    </li>
                                </ul>
                            </div>
                            <div class="ticket-footer">
                                <a href="buy-tickets.html" class="btn btn-ticket">Get VIP Access</a>
                                <p class="availability-info">Limited to 100 attendees</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="ticket-card">
                            <div class="ticket-header">
                                <h3>Student Pass</h3>
                                <div class="ticket-price">
                                    <span class="original-price">₱100</span>
                                    <span class="currency">₱</span>
                                    <span class="amount">50</span>
                                    <span class="period">/ticket</span>
                                </div>
                                <p class="ticket-duration">3-Day Student Access</p>
                            </div>
                            <div class="ticket-body">
                                <ul class="ticket-features">
                                    <li><i class="bi bi-check-circle-fill"></i>All conference sessions access</li>
                                    <li><i class="bi bi-check-circle-fill"></i>Student networking events</li>
                                    <li><i class="bi bi-check-circle-fill"></i>Career fair participation</li>
                                    <li><i class="bi bi-check-circle-fill"></i>Mentorship program eligibility</li>
                                    <li><i class="bi bi-check-circle-fill"></i>Student resource kit</li>
                                </ul>
                            </div>
                            <div class="ticket-footer">
                                <a href="buy-tickets.html" class="btn btn-ticket">Student Registration</a>
                                <p class="availability-info">Valid student ID required</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row mt-5">
                    <div class="col-12">
                        <div class="ticket-info-bar">
                            <div class="countdown-info">
                                <h4><i class="bi bi-clock"></i> Early Bird Pricing Ends Soon!</h4>
                                <div class="countdown d-flex justify-content-center" data-count="2025/12/15">
                                    <div>
                                        <h3 class="count-days"></h3>
                                        <h4>Days</h4>
                                    </div>
                                    <div>
                                        <h3 class="count-hours"></h3>
                                        <h4>Hours</h4>
                                    </div>
                                    <div>
                                        <h3 class="count-minutes"></h3>
                                        <h4>Minutes</h4>
                                    </div>
                                    <div>
                                        <h3 class="count-seconds"></h3>
                                        <h4>Seconds</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="support-info">
                                <p><strong>Need help choosing?</strong> Contact our support team</p>
                                <a href="mailto:tickets@example.com" class="contact-link">info@example.com</a>
                                <span class="divider">|</span>
                                <a href="tel:+15551234567" class="contact-link">+63 9123456789</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Tickets Section -->
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
