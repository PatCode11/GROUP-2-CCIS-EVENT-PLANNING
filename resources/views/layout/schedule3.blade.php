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
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <style>
    /* Event Announcements Styling */
    .announcement-card {
      border-left: 5px solid #ff7e1b;
      background-color: #fff;
      padding: 16px 20px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      transition: transform 0.2s;
    }

    .announcement-card:hover {
      transform: translateY(-3px);
    }

    .announcement-card h6 {
      margin-bottom: 5px;
      color: #ff7e1b;
    }

    .announcement-card small {
      color: #555;
    }
  </style>
</head>

<body class="schedule-page">

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
          <li><a href="{{ route("schedule3") }}" class="active">Schedule</a></li>
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
        <h1>Schedule</h1>
        <p>Join us for a series of sessions led by renowned Filipino athletes and esports professionals,
            sharing their expertise, strategies, and inspiring stories of dedication and excellence.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index1') }}">Home</a></li>
            <li class="current">Schedule</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Event Announcements Section -->
    <section id="announcements" class="section light-background mt-4">
      <div class="container">
        <div class="card">
          <div class="card-header">
            <i class="bi bi-megaphone-fill me-2"></i> Event Announcements
          </div>
          <div class="card-body">
            @forelse($events as $event)
              <div class="announcement-card mb-3">
                <h6>{{ $event->event }}</h6>
                <small>
                  <i class="bi bi-calendar-event me-1"></i>
                  {{ \Carbon\Carbon::parse($event->date)->format('F d, Y') }}
                  &nbsp;|&nbsp;
                  <i class="bi bi-clock me-1"></i>
                  {{ \Carbon\Carbon::parse($event->time)->format('h:i A') }}
                </small>
              </div>
            @empty
              <p class="text-center text-muted mb-0">No announcements available.</p>
            @endforelse
          </div>
        </div>
      </div>
    </section>

  </main>

  <footer id="footer" class="footer position-relative dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Project sa HCI-2</span>
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
      <p>© <span>Copyright</span> <strong class="px-1 sitename">MyWebsite</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
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
