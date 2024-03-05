<?php

namespace Hup234design\Cms;

use Awcodes\Curator\Models\Media;
use FilamentTiptapEditor\TiptapEditor;
use Hup234design\Cms\Commands\CmsDownloadImages;
use Hup234design\Cms\Components\AppLayout;
use Hup234design\Cms\Commands\CreateMediaCurations;
use Hup234design\Cms\Filament\TipTapBlocks\GalleryBlock;
use Hup234design\Cms\Observers\MediaObserver;
use Illuminate\Support\Facades\App;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CmsServiceProvider extends PackageServiceProvider
{
    public static string $name = 'cms';

    public function configurePackage(Package $package): void
    {
        $package->name('cms')
            ->hasViewComponents('cms', AppLayout::class)
            ->hasViews('cms')
            ->hasCommands(CreateMediaCurations::class, CmsDownloadImages::class);
    }

    public function packageRegistered(): void
    {
        parent::packageRegistered();
    }

    public function packageBooted(): void
    {
        parent::packageBooted();

        // Register the observer
        Media::observe(MediaObserver::class);

        TiptapEditor::configureUsing(function (TiptapEditor $component) {
            $component
                ->blocks([
                    GalleryBlock::class,
                ])
            ;
        });

        $this->loadMigrationsFrom([
            __DIR__.'/../database/migrations',
            __DIR__.'/../database/settings',
        ]);
        $this->app->booted(function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        });
    }
}
