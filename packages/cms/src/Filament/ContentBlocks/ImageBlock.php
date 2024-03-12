<?php

namespace Hup234design\Cms\Filament\ContentBlocks;

use Livewire\Component;

class ImageBlock extends Component
{
    public function mount($data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('cms::content-blocks.image');
    }

    public static function blockSchema()
    {
        return ContentBlockTemplate::make('image');
    }
}
