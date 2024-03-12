<?php

namespace Hup234design\Cms\Filament\Resources\Posts\PostCategoryResource\Pages;

use Hup234design\Cms\Filament\Resources\Posts\PostCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePostCategories extends ManageRecords
{
    protected static string $resource = PostCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->icon('heroicon-m-plus')
                ->label('New Category'),
            Actions\Action::make('Back to Posts')
                ->icon('heroicon-m-arrow-uturn-left')
                ->outlined(true)
                ->url('/admin/posts/posts')
        ];
    }
}
