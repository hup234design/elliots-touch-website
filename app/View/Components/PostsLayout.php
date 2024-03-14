<?php

namespace App\View\Components;

use Closure;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostsLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $latestPosts   = Post::published()->take(5)->get();

        $categories    = PostCategory::withCount('published_posts')->get();

        return view('layouts.posts', [
            'latestPosts' => $latestPosts,
            'categories' => $categories,
        ]);
    }
}
