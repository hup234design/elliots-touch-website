<?php

namespace Hup234design\Cms\Components;

use App\Models\Page;
use Hup234design\Cms\Helpers\ViewResolver;
use Illuminate\Support\Facades\View;
use Illuminate\View\Component;

class ServicesLayout extends Component
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
        return ViewResolver::renderView('layouts.services');
    }
}
