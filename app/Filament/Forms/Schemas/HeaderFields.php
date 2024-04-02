<?php

namespace App\Filament\Forms\Schemas;

use Awcodes\PresetColorPicker\PresetColorPicker;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use App\Filament\Forms\Fields\MediablePicker;

class HeaderFields
{
    public static function make($home=false): array
    {
        return [
            Group::make()
                ->relationship('header')
                ->schema([
                    //TextInput::make('eyebrow')
                    //    ->hidden($home),
                    //TextInput::make('heading'),
                    //Textarea::make('text')
                    //    ->rows(3),
                ]),
            //MediablePicker::make("headerImage", "header")
            //    ->columnSpanFull(),
        ];
    }
}
