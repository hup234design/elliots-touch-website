<?php

namespace App\Livewire;

use App\Filament\Forms\Schemas\ContentBlockTemplate;

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
        return view('livewire.upcoming-events-block', [
            'events' => Event::upcoming()->visible()->take(3)->get()
        ]);
    }

    public static function blockSchema()
    {
        return ContentBlockTemplate::make('upcoming-events');
    }
}
