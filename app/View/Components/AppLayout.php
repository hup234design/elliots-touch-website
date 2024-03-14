<?php

namespace App\View\Components;

use App\Filament\Support\NavigationMenuItems;
use App\Models\Event;
use Closure;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use RyanChandler\FilamentNavigation\Models\Navigation;

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
    public function render(): View|Closure|string
    {

        $primary_header = Navigation::find(cmsSetting('primary_header_menu_id'));
        $primary_footer = Navigation::find(cmsSetting('primary_footer_menu_id'));

        $menus = [
            'header' => NavigationMenuItems::make($primary_header?->items ?? []),
            'footer' => NavigationMenuItems::make($primary_footer?->items ?? []),
        ];

        ray($menus);

        return view('layouts.app', [
            'menus' => $menus,
            'latestPosts' => Post::visible()->take(3)->get(),
            'upcomingEvents' => Event::upcoming()->visible()->take(3)->get(),
            'upcomingFixtures' => [], //Fixture::upcoming()->take(3)->get()
        ]);
    }
}
