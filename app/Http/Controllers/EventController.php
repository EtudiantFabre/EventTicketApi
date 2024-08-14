<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;


class EventController extends Controller
{
    public function index()
    {
        $events = Event::where('event_status', 'upcoming')->paginate(10);
        return response()->json($events);
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return response()->json($event);
    }

    public function ticketTypes($id)
    {
        $ticketTypes = Event::findOrFail($id)->ticketTypes;
        return response()->json($ticketTypes);
    }
}
