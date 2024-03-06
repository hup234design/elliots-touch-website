<?php

namespace Hup234design\Cms\Filament\ContentBlocks;

use Livewire\Component;

class UpcomingEventsBlock extends Component
{
    public function mount($data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('cms::content-blocks.upcoming-events');
    }

    public static function blockSchema()
    {
        return ContentBlockTemplate::make('upcoming-events');
    }
}
