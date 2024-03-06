<?php

namespace Hup234design\Cms\Http\Controllers;

use App\Http\Controllers\Controller;
use Hup234design\Cms\Models\Page;
use Hup234design\Cms\Helpers\ViewResolver;

class PageController extends Controller
{
    public function home()
    {
        $page = Page::where('is_home', true)->firstOrFail();

        return ViewResolver::renderView('pages.home', compact('page'));
    }

    public function page($slug)
    {
        $page = Page::whereSlug($slug)->firstOrFail();

        return ViewResolver::renderView('pages.page', compact('page'));
    }
}
