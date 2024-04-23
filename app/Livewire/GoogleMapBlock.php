<?php

namespace App\Livewire;

use App\Filament\Forms\Schemas\ContentBlockTemplate;

use ArberMustafa\FilamentLocationPickrField\Forms\Components\LocationPickr;
use Livewire\Component;

class GoogleMapBlock extends Component
{
    public function mount($data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('livewire.google-map-block');
    }

    public static function blockSchema()
    {
        return ContentBlockTemplate::make('google-map', [
            LocationPickr::make('location')
                ->height('40vh')
                ->defaultZoom(12)
                ->required(),
        ]);
    }
}
