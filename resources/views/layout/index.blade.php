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
    /* Event Table and Announcement Styles */
    .event-table thead {
        background-color: #fff1e6;
        color: #ff7e1b;
        font-weight: 600;
    }
    .event-table tbody tr:hover {
        background-color: #fff8f3;
    }
    .action-btn {
        width: 34px;
        height: 34px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
    }
    .announcement-card {
        border-left: 5px solid #ff7e1b;
        background-color: #fff;
        padding: 16px 20px;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0,0,0,.05);
    }
    .page-section {
        padding-top: 50px;
        padding-bottom: 50px;
    }
  </style>
</head>

<body class="schedule-page">

  <!-- Header -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ route('index1') }}" class="logo d-flex align-items-center">
        <span class="sitename">CCIS Department</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('index1') }}">Home</a></li>
          <li><a href="{{ route('about2') }}">Ticket</a></li>
          <li><a href="{{ route('schedule3') }}" class="active">Schedule</a></li>
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

  <!-- Main Content -->
  <main class="main page-section">

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
    </div>

    <div class="container">

      <!-- Event List Table -->
      <div class="card mt-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span><i class="bi bi-list-ul me-2"></i>Event List</span>
            <a href="{{ route('events.create') }}" class="btn btn-light btn-sm">
                <i class="bi bi-plus-circle me-1"></i> Add Event
            </a>
        </div>
        <div class="card-body">

          @if(session('success'))
              <div class="alert alert-success text-center small">
                  <i class="bi bi-check-circle me-1"></i>{{ session('success') }}
              </div>
          @endif

          <div class="table-responsive">
              <table class="table text-center align-middle event-table">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th><i class="bi bi-megaphone"></i> Event</th>
                          <th><i class="bi bi-calendar"></i> Date</th>
                          <th><i class="bi bi-clock"></i> Time</th>
                          <th><i class="bi bi-person"></i> Attendance</th>
                          <th><i class="bi bi-building"></i> School ID</th>
                          <th><i class="bi bi-gear"></i></th>
                      </tr>
                  </thead>
                  <tbody>
                      @forelse($events as $event)
                      <tr>
                          <td>{{ $event->id }}</td>
                          <td class="fw-semibold">{{ $event->event }}</td>
                          <td>{{ \Carbon\Carbon::parse($event->date)->format('F d, Y') }}</td>
                          <td>{{ \Carbon\Carbon::parse($event->time)->format('h:i A') }}</td>
                          <td>{{ $event->first_name }} {{ $event->last_name }}</td>
                          <td>{{ $event->school_id }}</td>
                          <td class="d-flex justify-content-center gap-2">
                              <a href="{{ route('events.edit', $event->id) }}" class="btn btn-warning btn-sm action-btn" title="Edit">
                                  <i class="bi bi-pencil-square"></i>
                              </a>
                              <form action="{{ route('events.destroy', $event->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger btn-sm action-btn" title="Delete"
                                          onclick="return confirm('Delete this event?')">
                                      <i class="bi bi-trash"></i>
                                  </button>
                              </form>
                          </td>
                      </tr>
                      @empty
                      <tr>
                          <td colspan="7" class="text-muted">No events found.</td>
                      </tr>
                      @endforelse
                  </tbody>
              </table>
          </div>

        </div>
      </div>

      <!-- Event Announcements -->
      <div class="card mt-4">
        <div class="card-header">
            <i class="bi bi-megaphone-fill me-2"></i>Event Announcements
        </div>
        <div class="card-body">
            @forelse($events as $event)
                <div class="announcement-card mb-3">
                    <h6 class="fw-semibold text-warning mb-1">{{ $event->event }}</h6>
                    <small class="text-muted">
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
  </main>

  <!-- Footer -->
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
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
