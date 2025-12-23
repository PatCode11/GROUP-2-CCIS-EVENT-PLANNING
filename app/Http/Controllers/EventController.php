<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    // -----------------------
    // Web Views (Blade)
    // -----------------------

    // Display all events

    public function index()
    {
        $events = Event::all();
        return view('layout.index', compact('events')); // points to layout/index.blade.php
    }

    public function eventshow()
    {
        $events = Event::all();
        return view('layout.schedule3', compact('events')); // points to layout/index.blade.php
    }


    // Show create event form
    public function create()
    {
        return view('layout.create'); // points to layout/create.blade.php
    }

    public function view()
    {
        return view('layout.view'); // points to layout/create.blade.php
    }

    // Store new event
    public function store(Request $request)
    {
        $request->validate([
            'event' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'school_id' => 'required|integer',
        ]);

        Event::create($request->all());

        // Redirect to named route 'events.index', not view path
        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }

    // Show edit form
    public function edit(Event $event)
    {
        return view('layout.create', compact('event')); // reuse create.blade.php for editing
    }

    // Update event
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'event' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'school_id' => 'required|integer',
        ]);

        $event->update($request->all());

        return redirect()->route('events.index')->with('success', 'Event updated successfully.');
    }

    // Delete event
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
    }

    // -----------------------
    // API Endpoints
    // -----------------------

    // GET /api/events
    public function apiIndex()
    {
        return response()->json(Event::all(), 200);
    }

    // POST /api/events
    public function apiStore(Request $request)
    {
        $request->validate([
            'event' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'school_id' => 'required|integer',
        ]);

        $event = Event::create($request->all());
        return response()->json($event, 201);
    }

    // PUT /api/events/{id}
    public function apiUpdate(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $request->validate([
            'event' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'school_id' => 'required|integer',
        ]);

        $event->update($request->all());
        return response()->json($event, 200);
    }

    // DELETE /api/events/{id}
    public function apiDelete($id)
    {
        Event::destroy($id);
        return response()->json(['message' => 'Event deleted successfully'], 200);
    }
}
