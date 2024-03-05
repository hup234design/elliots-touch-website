<?php

namespace Hup234design\Cms\Filament\Resources\Services\ServiceResource\Pages;

use Hup234design\Cms\Filament\Resources\Services\ServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServices extends ListRecords
{
    protected static string $resource = ServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
