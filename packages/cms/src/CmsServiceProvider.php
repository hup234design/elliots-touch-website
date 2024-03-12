<?php

namespace Hup234design\Cms;

use Awcodes\Curator\Models\Media;
use FilamentTiptapEditor\TiptapEditor;
use Hup234design\Cms\Commands\CmsDownloadImages;
use Hup234design\Cms\Commands\CreateMediaCurations;
use Hup234design\Cms\Components\MediaImageRenderer;
use Hup234design\Cms\Filament\ContentBlocks\EditorBlock;
use Hup234design\Cms\Filament\ContentBlocks\ImageBlock;
use Hup234design\Cms\Filament\ContentBlocks\SectionBlock;
use Hup234design\Cms\Filament\ContentBlocks\TestimonialsBlock;
use Hup234design\Cms\Filament\ContentBlocks\VideoBlock;
use Hup234design\Cms\Filament\TipTapBlocks\FeaturesList;
use Hup234design\Cms\Filament\TipTapBlocks\GalleryBlock;
use Hup234design\Cms\Observers\MediaObserver;
use Hup234design\Cms\Filament\ContentBlocks\UpcomingEventsBlock;
use Hup234design\Cms\Filament\ContentBlocks\LatestPostsBlock;
use Hup234design\Cms\CmsSettings;
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
                'cms', MediaImageRenderer::class)
            ->hasViews('cms')
            ->hasCommands(CreateMediaCurations::class, CmsDownloadImages::class);
    }

    public function packageRegistered(): void
    {
        parent::packageRegistered();

        $this->app->singleton(CmsSettings::class, function () {
            return CmsSettings::make(storage_path('app/cms-settings.json'));
        });
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
                    FeaturesList::class,
                ])
            ;
        });

        $this->loadMigrationsFrom([
            __DIR__.'/../database/migrations',
        ]);
        $this->app->booted(function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        });

        Livewire::component('latest-posts-block', LatestPostsBlock::class);
        Livewire::component('upcoming-events-block', UpcomingEventsBlock::class);
        Livewire::component('editor-block', EditorBlock::class);
        Livewire::component('gallery-block', GalleryBlock::class);
        Livewire::component('image-block', ImageBlock::class);
        Livewire::component('section-block', SectionBlock::class);
        Livewire::component('testimonials-block', TestimonialsBlock::class);
        Livewire::component('video-block', VideoBlock::class);;
    }
}
