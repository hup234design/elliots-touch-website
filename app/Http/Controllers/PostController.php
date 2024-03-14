<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::visible()->paginate(5);
        return view('posts.index', [
            'posts' => $posts,
            'title' => cmsSetting('posts_title', 'Posts'),
            'content' => null,
            'headerImage' => null,
        ]);
    }

    public function post($slug)
    {
        $post = Post::with('postCategory')->whereSlug($slug)->firstOrFail();
        return view('posts.post', compact('post'));
    }
}
