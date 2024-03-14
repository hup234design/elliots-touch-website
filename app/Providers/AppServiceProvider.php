<?php

namespace App\Providers;

use App\Filament\Support\Settings;
use App\Observers\MediaObserver;
use Awcodes\Curator\Models\Media;
use FilamentTiptapEditor\TiptapEditor;
use App\Filament\TipTapBlocks\FeaturesList;
use App\Filament\TipTapBlocks\GalleryBlock;
use Illuminate\Support\ServiceProvider;
use RyanChandler\FilamentNavigation\Filament\Resources\NavigationResource;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(Settings::class, function () {
            return Settings::make(storage_path('app/settings.json'));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Register the observer
        Media::observe(MediaObserver::class);

        NavigationResource::navigationGroup('Settings');

        TiptapEditor::configureUsing(function (TiptapEditor $component) {
            $component
                ->blocks([
                    GalleryBlock::class,
                    FeaturesList::class,
                ])
            ;
        });
    }
}
