<?php

namespace App\Livewire;

use App\Filament\Forms\Schemas\ContentBlockTemplate;

use App\Models\Post;
use Livewire\Component;

class LatestPostsBlock extends Component
{
    public function mount($data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('livewire.latest-posts-block', [
            'posts' => Post::visible()->take(3)->get()
        ]);
    }

    public static function blockSchema()
    {
        return ContentBlockTemplate::make('latest-posts');
    }
}
