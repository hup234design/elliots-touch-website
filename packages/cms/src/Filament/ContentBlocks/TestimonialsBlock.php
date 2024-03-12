<?php

namespace Hup234design\Cms\Filament\ContentBlocks;

use Livewire\Component;

class TestimonialsBlock extends Component
{
    public function mount($data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('cms::content-blocks.testimonials');
    }

    public static function blockSchema()
    {
        return ContentBlockTemplate::make('testimonials');
    }
}
