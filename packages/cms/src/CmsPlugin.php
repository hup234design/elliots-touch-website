<?php

namespace Hup234design\Cms;

use Awcodes\Curator\CuratorPlugin;
use Filament\Forms\Components\Select;
use Filament\Navigation\MenuItem;
use Filament\Panel;
use Filament\Contracts\Plugin;
use Hup234design\Cms\Filament\Navigation\CustomFilamentNavigation;
use Hup234design\Cms\Filament\Pages\ManageGeneralSettings;
use Hup234design\Cms\Filament\Pages\ManagePostsSettings;
use Hup234design\Cms\Filament\Pages\ManageServicesSettings;
use Hup234design\Cms\Filament\Pages\ManageSocialNetworksSettings;
use Hup234design\Cms\Filament\Pages\ManageTestimonialsSettings;
use Hup234design\Cms\Filament\Resources\Pages\PageResource;
use Hup234design\Cms\Filament\Resources\Posts\PostCategoryResource;
use Hup234design\Cms\Filament\Resources\Posts\PostResource;
use Hup234design\Cms\Filament\Resources\Sections\SectionResource;
use Hup234design\Cms\Filament\Resources\Services\ServiceCategoryResource;
use Hup234design\Cms\Filament\Resources\Services\ServiceResource;
use Hup234design\Cms\Filament\Resources\Testimonials\TestimonialResource;
use Hup234design\Cms\Models\Page;
use Illuminate\Support\Facades\Schema;
use Pboivin\FilamentPeek\FilamentPeekPlugin;
use RyanChandler\FilamentNavigation\FilamentNavigation;

class CmsPlugin implements Plugin
{

    public function getId(): string
    {
        return 'cms';
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public function register(Panel $panel): void
    {
        $panel
            ->resources([
                PageResource::class,
                PostCategoryResource::class,
                PostResource::class,
                ServiceCategoryResource::class,
                ServiceResource::class,
                TestimonialResource::class,
                SectionResource::class,
            ])
            ->pages([
                ManageGeneralSettings::class,
                ManagePostsSettings::class,
                ManageServicesSettings::class,
                ManageSocialNetworksSettings::class,
                ManageTestimonialsSettings::class,
            ])
            ->sidebarCollapsibleOnDesktop()
            ->maxContentWidth('full')
            ->userMenuItems([
                MenuItem::make()
                    ->label('View Site')
                    ->url('/')
                    ->openUrlInNewTab(true)
                    ->icon('heroicon-o-home'),
            ])
            ->breadcrumbs(false)
            ->viteTheme('resources/css/filament/admin/theme.css')
            ->plugins([
                FilamentPeekPlugin::make(),
                CuratorPlugin::make(),
                CustomFilamentNavigation::make()
                    ->itemType('Home Page', [])
                    ->itemType('Index Page', [
                        Select::make('route')
                            ->options([
                                'posts.index' => 'Posts',
                                'services.index' => 'Services',
                                'testimonials.index' => 'Testimonials',
                                ...config('cms.index_page_routes', [])
                            ])
                    ])
                    ->itemType('Page', [
                        Select::make('id')
                            ->label('Page')
                            ->options(Schema::hasTable('pages')
                                ? Page::where('is_home',false)->pluck('title','id')
                                : []
                            )
                            ->required()
                    ])
                    ->itemType('Dropdown', [])
            ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function get(): Plugin | \Filament\FilamentManager
    {
        return filament(app(static::class)->getId());
    }

}
