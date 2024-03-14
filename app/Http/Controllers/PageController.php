<?php

namespace App\Http\Controllers;

use App\Models\Page;

class PageController extends Controller
{
    public function home()
    {
        $page = Page::where('is_home', true)->firstOrFail();

        return view('pages.home', compact('page'));
    }

    public function page($slug)
    {
        $page = Page::whereSlug($slug)->firstOrFail();

        return view('pages.page', compact('page'));
    }
}
