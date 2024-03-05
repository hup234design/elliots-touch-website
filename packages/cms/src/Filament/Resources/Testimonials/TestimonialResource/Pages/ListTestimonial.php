<?php

namespace Hup234design\Cms\Filament\Resources\Testimonials\TestimonialResource\Pages;

use Hup234design\Cms\Filament\Resources\Testimonials\TestimonialResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTestimonial extends ListRecords
{
    protected static string $resource = TestimonialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
