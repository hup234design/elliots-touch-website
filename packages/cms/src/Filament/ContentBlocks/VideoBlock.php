<?php

namespace Hup234design\Cms\Filament\ContentBlocks;

use Livewire\Component;

class VideoBlock extends Component
{
    public function mount($data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('cms::content-blocks.video');
    }

    public static function blockSchema()
    {
        return ContentBlockTemplate::make('video');
    }
}
