<?php

namespace Hup234design\Cms\Filament\Resources\Services\ServiceCategoryResource\Pages;

use Hup234design\Cms\Filament\Resources\Services\ServiceCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageServiceCategories extends ManageRecords
{
    protected static string $resource = ServiceCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->icon('heroicon-m-plus')
                ->label('New Category'),
            Actions\Action::make('Back to Services')
                ->icon('heroicon-m-arrow-uturn-left')
                ->outlined(true)
                ->url('/admin/services/services')
        ];
    }
}
