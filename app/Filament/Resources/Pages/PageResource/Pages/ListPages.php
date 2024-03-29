<?php

namespace App\Filament\Resources\Pages\PageResource\Pages;

use App\Filament\Resources\Pages\PageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Pboivin\FilamentPeek\Pages\Concerns\HasPreviewModal;

class ListPages extends ListRecords
{
    use HasPreviewModal;

    protected static string $resource = PageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getPreviewModalView(): ?string
    {
        // This corresponds to resources/views/posts/preview.blade.php
        return 'pages.page';
    }

    protected function getPreviewModalDataRecordKey(): ?string
    {
        return 'page';
    }
}
