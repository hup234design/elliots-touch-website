<?php

namespace Hup234design\Cms\Helpers;

class ViewResolver
{
    /**
     * Checks if a view exists and returns the appropriate view.
     *
     * @param string $defaultView The default view to return.
     * @param string|null $alternativeView The alternative view to return if the default does not exist.
     * @param array $data The data to pass to the view.
     * @return \Illuminate\View\View
     */
    public static function renderView(string $view, array $data = [])
    {
        if (view()->exists($view)) {
            return view($view, $data);
        } else {
            return view('cms::'.$view, $data);
        }
    }
}
