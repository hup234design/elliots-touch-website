<?php

namespace Hup234design\Cms\Filament\Navigation;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use RyanChandler\FilamentNavigation\FilamentNavigation;

class CustomFilamentNavigation extends FilamentNavigation
{
    public function getItemTypes(): array
    {
        return $this->itemTypes;
    }
}
