<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events - CCIS Department</title>

    <link href="assets/img/events/ccis.jpg" rel="icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #fff7f0;
            font-family: 'Roboto', sans-serif;
        }

        h3 {
            color: #ff7e1b;
        }

        .btn-orange {
            background-color: #ff7f50;
            color: #fff;
            font-weight: 500;
        }

        .btn-orange:hover {
            background-color: #ff6333;
        }

        .table thead {
            background: linear-gradient(90deg, #ff7e1b, #ff9a3c);
            color: #fff;
        }

        .table tbody tr:hover {
            background-color: #fff2e6;
        }

        .card {
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        .card-header {
            background: linear-gradient(90deg, #ff7e1b, #ff9a3c);
            color: #fff;
            font-size: 1.3rem;
            font-weight: 600;
        }
    </style>
</head>

<body>

<div class="container">

    <!-- Back to Home -->
    <div class="mb-3">
        <a href="{{ route('index1') }}" class="btn btn-orange d-inline-flex align-items-center px-3 py-2 rounded">
            <i class="bi bi-house-door me-2"></i> Back to Home
        </a>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="mb-0">Event Schedule</h3>
        </div>

        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered text-center align-middle">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Event</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Attendance</th>
                            <th>School ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($events as $event)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $event->event }}</td>
                                <td>{{ \Carbon\Carbon::parse($event->date)->format('F d, Y') }}</td>
                                <td>{{ \Carbon\Carbon::parse($event->time)->format('h:i A') }}</td>
                                <td>{{ $event->first_name }} {{ $event->last_name }}</td>
                                <td>{{ $event->school_id }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-muted">No events available.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
