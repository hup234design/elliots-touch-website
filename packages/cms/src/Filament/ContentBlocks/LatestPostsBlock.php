<?php

namespace Hup234design\Cms\Filament\ContentBlocks;

use Livewire\Component;

class LatestPostsBlock extends Component
{
    public function mount($data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('cms::content-blocks.latest-posts');
    }

    public static function blockSchema()
    {
        return ContentBlockTemplate::make('latest-posts');
    }
}
