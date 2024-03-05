<?php

namespace Hup234design\Cms\Filament\Resources\Sections\SectionResource\Pages;

use Hup234design\Cms\Filament\Resources\Sections\SectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSections extends ListRecords
{
    protected static string $resource = SectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
