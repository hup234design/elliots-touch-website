<?php

namespace Hup234design\Cms\Filament\Resources\Sliders\SliderResource\Pages;

use Hup234design\Cms\Filament\Resources\Sliders\SliderResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSlider extends EditRecord
{
    protected static string $resource = SliderResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
