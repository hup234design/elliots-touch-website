<?php

namespace App\Filament\Forms\Schemas;

use Filament\Forms\Components\Group;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use App\Filament\Forms\Fields\MediablePicker;

class HeaderFields
{
    public static function make(): array
    {
        return [
            Group::make()
                ->relationship('header')
                ->schema([
                    TextInput::make('eyebrow'),
                    TextInput::make('heading'),
                    Textarea::make('text')
                        ->rows(3),
                ]),
            MediablePicker::make("headerImage", "header")
                ->columnSpanFull(),
        ];
    }
}
