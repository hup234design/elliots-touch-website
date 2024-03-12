<?php

namespace Hup234design\Cms\Filament\ContentBlocks;

use App\Models\Event;
use Livewire\Component;

class UpcomingEventsBlock extends Component
{
    public function mount($data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('cms::content-blocks.upcoming-events', [
            'events' => Event::upcoming()->visible()->take(3)->get()
        ]);
    }

    public static function blockSchema()
    {
        return ContentBlockTemplate::make('upcoming-events');
    }
}
