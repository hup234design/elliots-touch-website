<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\HomePage;
use App\Models\Page;
use App\Models\Post;

class PageController extends Controller
{
    public function home()
    {
        $page = HomePage::firstOrFail();

        return view('pages.home', [
            'page' => $page,
            'events' => Event::upcoming()->visible()->take(3)->get(),
            'posts' => Post::visible()->take(3)->get()
        ]);
    }

    public function page($slug)
    {
        $page = Page::whereSlug($slug)->firstOrFail();

        return view('pages.page', compact('page'));
    }
}
