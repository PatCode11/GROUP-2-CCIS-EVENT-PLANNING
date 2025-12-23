<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function store(Request $request, $eventId)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'year' => 'required',
            'section' => 'required',
            'course' => 'required',
        ]);

        $attendance = Attendance::create([
            'event_id' => $eventId,
            ...$request->all()
        ]);

        return response()->json($attendance, 201);
    }

    public function index($eventId)
    {
        return response()->json(
            Attendance::where('event_id', $eventId)->get()
        );
    }
}

