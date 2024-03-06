<?php

namespace Hup234design\Cms\Components;

use Hup234design\Cms\Models\Page;
use Hup234design\Cms\Helpers\ViewResolver;
use Illuminate\Support\Facades\View;
use Illuminate\View\Component;

class AppLayout extends Component
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
    public function render()
    {
        $pageLinks = Page::get()->pluck('title','slug');
        return ViewResolver::renderView('layouts.app', compact('pageLinks'));
    }
}
