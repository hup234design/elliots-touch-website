<?php

namespace Hup234design\Cms\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Awcodes\Curator\Models\Media;
use Hup234design\Cms\Helpers\ViewResolver;
use Hup234design\Cms\Models\Post;
use Hup234design\Cms\Settings\PostsSettings;

class PostController extends Controller
{
    public function index(PostsSettings $settings)
    {
        $posts = Post::paginate($settings->per_page);
        return ViewResolver::renderView('posts.index', [
            'posts' => $posts,
            'title' => $settings->title,
            'content' => $settings->content,
            'headerImage' => $settings->header_image_id ? Media::find($settings->header_image_id) : null,
        ]);
    }

    public function post($slug)
    {
        $post = Post::with('postCategory')->whereSlug($slug)->firstOrFail();
        return ViewResolver::renderView('posts.post', compact('post'));
    }
}
