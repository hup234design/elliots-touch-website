<?php

namespace Hup234design\Cms\Filament\Resources\Testimonials\TestimonialResource\Pages;

use Hup234design\Cms\Filament\Resources\Testimonials\TestimonialResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTestimonial extends EditRecord
{
    protected static string $resource = TestimonialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
