<?php

namespace App\Livewire;

use App\Filament\Forms\Schemas\ContentBlockTemplate;

use Livewire\Component;

class VideoBlock extends Component
{
    public function mount($data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('livewire.video-block');
    }

    public static function blockSchema()
    {
        return ContentBlockTemplate::make('video');
    }
}
