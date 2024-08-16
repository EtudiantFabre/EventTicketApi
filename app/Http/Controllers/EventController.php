<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the events.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all upcoming events with pagination
        $events = Event::where('event_status', 'upcoming')->paginate(10);
        return response()->json($events);
    }

    /**
     * Display the specified event.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Find the event by ID
        $event = Event::findOrFail($id);
        return response()->json($event);
    }

    /**
     * Display the ticket types for the specified event.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ticketTypes($id)
    {
        // Get ticket types for the event
        $ticketTypes = Event::findOrFail($id)->ticketTypes;
        return response()->json($ticketTypes);
    }
}
