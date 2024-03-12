<?php

namespace Hup234design\Cms\Http\Controllers;

use App\Http\Controllers\Controller;
use Hup234design\Cms\Models\Page;

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
