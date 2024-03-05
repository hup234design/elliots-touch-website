<?php

namespace Hup234design\Cms\Filament\Resources\Posts\PostResource\Pages;

use Hup234design\Cms\Filament\Resources\Posts\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPost extends EditRecord
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
