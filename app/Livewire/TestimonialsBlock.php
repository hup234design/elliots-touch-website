<?php

namespace App\Livewire;

use App\Filament\Forms\Schemas\ContentBlockTemplate;

use Livewire\Component;

class TestimonialsBlock extends Component
{
    public function mount($data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('livewire.testimonials-block');
    }

    public static function blockSchema()
    {
        return ContentBlockTemplate::make('testimonials');
    }
}
