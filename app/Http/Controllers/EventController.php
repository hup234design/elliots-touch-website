<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Laravel\Prompts\Concerns\Events;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::paginate(5);
        return view('events.index', [
            'events' => $events,
            'title' => cmsSetting('events_title', 'Events'),
            'content' => null,
            'headerImage' => null,
        ]);
    }

    public function event($slug)
    {
        $event = Event::with('eventCategory')->whereSlug($slug)->firstOrFail();
        return view('events.event', compact('event'));
    }
}
