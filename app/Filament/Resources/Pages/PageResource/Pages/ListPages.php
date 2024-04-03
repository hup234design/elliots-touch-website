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
            Actions\CreateAction::make()
                ->icon('heroicon-m-plus'),
            Actions\Action::make('Home Page')
                ->icon('heroicon-m-home')
                ->outlined(true)
                ->url('/admin/pages/pages/home'),
            Actions\Action::make('Contact Page')
                ->icon('heroicon-m-envelope')
                ->outlined(true)
                ->url('/admin/pages/pages/contact')
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
