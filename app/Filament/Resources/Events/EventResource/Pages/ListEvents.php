<?php

namespace App\Filament\Resources\Events\EventResource\Pages;

use App\Filament\Resources\Events\EventResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEvents extends ListRecords
{
    protected static string $resource = EventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->icon('heroicon-m-plus')
                ->label('New Post'),
            Actions\Action::make('Manage Categories')
                ->icon('heroicon-m-list-bullet')
                ->outlined(true)
                ->url('/admin/events/event-categories')
        ];
    }
}
