<?php

namespace App\Filament\Resources\Events\EventCategoryResource\Pages;

use App\Filament\Resources\Events\EventCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageEventCategories extends ManageRecords
{
    protected static string $resource = EventCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->icon('heroicon-m-plus')
                ->label('New Category'),
            Actions\Action::make('Back to Events')
                ->icon('heroicon-m-arrow-uturn-left')
                ->outlined(true)
                ->url('/admin/events/events')
        ];
    }
}
