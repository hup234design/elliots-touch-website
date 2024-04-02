<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\SubPage;

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

    public function subPage($pageSlug, $slug)
    {
        $page = Page::whereSlug($pageSlug)->firstOrFail();
        $subPage = SubPage::whereSlug($slug)->firstOrFail();

        return view('pages.sub-page', compact('page','subPage'));
    }
}
