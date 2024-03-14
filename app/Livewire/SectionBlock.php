<?php

namespace App\Livewire;

use App\Filament\Forms\Schemas\ContentBlockTemplate;

use Livewire\Component;

class SectionBlock extends Component
{
    public function mount($data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('livewire.section-block');
    }

    public static function blockSchema()
    {
        return ContentBlockTemplate::make('section');
    }
}
