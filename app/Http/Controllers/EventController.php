<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Awcodes\Curator\Models\Media;
use App\Settings\EventsSettings;
use Illuminate\Http\Request;
use Laravel\Prompts\Concerns\Events;

class EventController extends Controller
{
    public function index(EventsSettings $settings)
    {
        $events = Event::paginate($settings->per_page);
        return view('events.index', [
            'events' => $events,
            'title' => $settings->title,
            'content' => $settings->content,
            'headerImage' => $settings->header_image_id ? Media::find($settings->header_image_id) : null,
        ]);
    }

    public function event($slug)
    {
        $event = Event::with('eventCategory')->whereSlug($slug)->firstOrFail();
        return view('events.event', compact('event'));
    }
}
