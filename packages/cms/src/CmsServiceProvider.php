<?php

namespace Hup234design\Cms;

use Awcodes\Curator\Models\Media;
use FilamentTiptapEditor\TiptapEditor;
use Hup234design\Cms\Commands\CmsDownloadImages;
use Hup234design\Cms\Components\AppLayout;
use Hup234design\Cms\Commands\CreateMediaCurations;
use Hup234design\Cms\Components\MediaImageRenderer;
use Hup234design\Cms\Components\PostsLayout;
use Hup234design\Cms\Components\ServicesLayout;
use Hup234design\Cms\Filament\TipTapBlocks\GalleryBlock;
use Hup234design\Cms\Observers\MediaObserver;
use Hup234design\Cms\Filament\ContentBlocks\UpcomingEventsBlock;
use Hup234design\Cms\Filament\ContentBlocks\LatestPostsBlock;
use Illuminate\Support\Facades\App;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CmsServiceProvider extends PackageServiceProvider
{
    public static string $name = 'cms';

    public function configurePackage(Package $package): void
    {
        $package->name('cms')
            ->hasConfigFile('cms')
            ->hasViewComponents(
                'cms',
                AppLayout::class, PostsLayout::class, ServicesLayout::class, MediaImageRenderer::class)
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

        Livewire::component('latest-posts-block', LatestPostsBlock::class);
        Livewire::component('upcoming-events-block', UpcomingEventsBlock::class);
    }
}
