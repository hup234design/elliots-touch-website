<?php

namespace App\Livewire;

use App\Filament\Forms\Schemas\ContentBlockTemplate;

use App\Filament\Forms\Schemas\HeaderBlockTemplate;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Livewire\Component;

class HeroBlock extends Component
{
    public function mount($data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('livewire.hero-block');
    }

    public static function blockSchema()
    {
        return HeaderBlockTemplate::make('hero', [
            CuratorPicker::make('images')
                ->multiple()
                ->maxItems(3)
                ->label('Images'),
            TextInput::make('title')
                ->required(),
            Textarea::make('introduction')
                ->required(),
        ]);
    }
}
