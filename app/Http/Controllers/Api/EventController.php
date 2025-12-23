<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return response()->json(Event::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'event_date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        $event = Event::create($request->all());

        return response()->json($event, 201);
    }

    public function show($id)
    {
        return response()->json(
            Event::with('attendances')->findOrFail($id)
        );
    }
}

