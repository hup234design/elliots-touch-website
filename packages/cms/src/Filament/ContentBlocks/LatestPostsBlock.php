<?php

namespace Hup234design\Cms\Filament\ContentBlocks;

use Hup234design\Cms\Models\Post;
use Livewire\Component;

class LatestPostsBlock extends Component
{
    public function mount($data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('cms::content-blocks.latest-posts', [
            'posts' => Post::visible()->take(3)->get()
        ]);
    }

    public static function blockSchema()
    {
        return ContentBlockTemplate::make('latest-posts');
    }
}
