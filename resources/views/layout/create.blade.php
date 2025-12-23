<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Form - CCIS Department</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background-color: #fff7f0;
      font-family: 'Roboto', sans-serif;
    }

    .card {
      margin-top: 40px;
      border-radius: 15px;
      border: none;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }

    .card-header {
      border-radius: 15px 15px 0 0;
      background: linear-gradient(90deg, #ff7e1b, #ff9a3c);
      color: #fff;
      text-align: center;
      font-weight: 600;
      font-size: 1.4rem;
    }

    .btn-primary {
      background-color: #ff7e1b;
      border-color: #ff7e1b;
    }

    .btn-primary:hover {
      background-color: #ff9a3c;
      border-color: #ff9a3c;
    }

    .btn-orange {
      background-color: #ff7f50;
      color: #fff;
      font-weight: 500;
    }

    .btn-orange:hover {
      background-color: #ff6333;
      color: #fff;
    }

    .form-label {
      font-weight: 500;
      color: #ff7e1b;
    }

    .form-control:focus {
      border-color: #ff7e1b;
      box-shadow: 0 0 0 0.2rem rgba(255, 126, 27, 0.25);
    }

    .alert-success {
      background-color: #fff4e5;
      border-color: #ff9a3c;
      color: #9f4b00;
    }
  </style>
</head>

<body>

<div class="container">

  <!-- Back to Home -->
  <div class="mt-4">
    <a href="{{ route('index1') }}" class="btn btn-orange d-inline-flex align-items-center px-3 py-2 rounded">
      <i class="bi bi-house-door me-2"></i> Back to Home
    </a>
  </div>

  <div class="row justify-content-center">
    <div class="col-lg-8">

      <div class="card">
        <div class="card-header">
          {{ isset($event) ? 'Edit Event' : 'Add New Event' }}
        </div>

        <div class="card-body p-4">

          @if(session('success'))
            <div class="alert alert-success text-center">
              {{ session('success') }}
            </div>
          @endif

          <form action="{{ isset($event) ? route('events.update', $event->id) : route('events.store') }}" method="POST">
            @csrf
            @if(isset($event))
              @method('PUT')
            @endif

            <!-- Event Name -->
            <div class="mb-3">
              <label class="form-label">Event Name</label>
              <input type="text" name="event"
                     value="{{ old('event', $event->event ?? '') }}"
                     class="form-control @error('event') is-invalid @enderror">
              @error('event') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <!-- Date & Time -->
            <div class="row mb-3">
              <div class="col-md-6">
                <label class="form-label">Date</label>
                <input type="date" name="date"
                       value="{{ old('date', $event->date ?? '') }}"
                       class="form-control @error('date') is-invalid @enderror">
                @error('date') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Time</label>
                <input type="time" name="time"
                       value="{{ old('time', $event->time ?? '') }}"
                       class="form-control @error('time') is-invalid @enderror">
                @error('time') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
            </div>

            <!-- Attendance -->
            <div class="row mb-3">
              <div class="col-md-6">
                <label class="form-label">First Name</label>
                <input type="text" name="first_name"
                       value="{{ old('first_name', $event->first_name ?? '') }}"
                       class="form-control @error('first_name') is-invalid @enderror">
                @error('first_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Last Name</label>
                <input type="text" name="last_name"
                       value="{{ old('last_name', $event->last_name ?? '') }}"
                       class="form-control @error('last_name') is-invalid @enderror">
                @error('last_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
            </div>

            <!-- School ID -->
            <div class="mb-4">
              <label class="form-label">School ID</label>
              <input type="number" name="school_id"
                     value="{{ old('school_id', $event->school_id ?? '') }}"
                     class="form-control @error('school_id') is-invalid @enderror">
              @error('school_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <!-- Buttons -->
            <div class="d-flex justify-content-between">
              <a href="{{ route('events.index') }}" class="btn btn-secondary">Back to List</a>
              <button type="submit" class="btn btn-primary">
                {{ isset($event) ? 'Update Event' : 'Create Event' }}
              </button>
            </div>

          </form>

        </div>
      </div>

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
